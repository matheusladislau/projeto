<?php
class Sac extends PR_Controller {
  public function __construct()
  {
      parent::__construct('sac');
  }

    public function index(){
      //Pega o id de usuario da sessão
      $user_id = $this->session->userdata('user_login');

      //Pega o tipo de usuario e informações de pessoas
      $typeUser = $this->usuario->getUserAccessGroup($user_id);
      $data['pessoa'] = $this->usuario->getUserNameById($user_id);
      // Pegar informações de cliente
      $id_pessoa = $data['pessoa'][0]->id_pessoa;  
      
      if($typeUser=="1"){
         $data['sac'] = $this->sac->get();
      }else{
          $cliente = $this->cliente->getIdCliente($id_pessoa);
          $id_cliente = $cliente[0]->id_cliente;
          $data['sac'] = $this->sac->getClient($id_cliente);
      }
       
      $data['title'] = 'Solicitações SAC';
      $data['tipo'] = $typeUser;
       
      $data['assets'] = array(
        'js' => array(
          'lib/data-table/datatables.min.js',
          'lib/data-table/dataTables.bootstrap.min.js',
          'datatable.js',
          'confirm.modal.js',
        ),
      );

      foreach ($data['sac'] as $key => $sac) {
         $cliente = $this->cliente->getById($data['sac'][$key]->id_cliente);
         $data['sac'][$key]->id_cliente = $cliente[0]->nome;
      }

      loadTemplate('includes/header', 'sac/index', 'includes/footer', $data);
    }

    /**
    * @author: Pedro Henrique Guimarães
    * Página de cadastro.
    */
    public function ajaxCreate() {

      $user_id = $this->session->userdata('user_login');

      //Pega o tipo de usuario e informações de pessoas
      $typeUser = $this->usuario->getUserAccessGroup($user_id);
      $data['pessoa'] = $this->usuario->getUserNameById($user_id);

      // Pegar informações de cliente
      $id_pessoa = $data['pessoa'][0]->id_pessoa; 
      $cliente = $this->cliente->getIdCliente($id_pessoa);      

      if($typeUser=="1"){
         $id_cliente = $this->input->post('id_cliente');
      }else {
         $id_cliente = $cliente[0]->id_cliente;
      }

    
      $data = $this->input->post();

      if($data){
            $array = array(
              'id_produto' => $this->input->post('sac_product_id'),
              'id_cliente' => $id_cliente,
              'abertura' => date("Y-m-d H:i:s"),
              'fechamento' => 0,
              'encerrado' => 0,
              'titulo' => $this->input->post('sac_subject'),
              'descricao' => $this->input->post('sac_description'),
            );

        if ($this->sac->insert($array)) 
            echo json_encode(array('status' => 'ok'));
        else
            echo json_encode(array('status' => 'error'));
      }
    }

    public function edit($id) {

       $user_id = $this->session->userdata('user_login');

      $typeUser = $this->usuario->getUserAccessGroup($user_id);
      $data['pessoa'] = $this->usuario->getUserNameById($user_id);
       
      $cliente = $this->cliente->getIdCliente($data['pessoa'][0]->id_pessoa);   

      $id_pessoa = $data['pessoa'][0]->id_pessoa;
      $cliente = $this->cliente->getIdCliente($id_pessoa);
       
       
       if($typeUser=="1"){
         $id_cliente = $this->input->post('id_cliente');
      }else {
         $id_cliente = $cliente[0]->id_cliente;
      }
      
       $data = $this->input->post();

         if($data){
            if ($this->form_validation->run('sac')) {

               if($this->input->post('encerrado')){
                  $fec = date("Y-m-d H:i:s");
               }else {
                  $fec = 0;
               }

               $array = array(
                 'id_produto' => $this->input->post('id_produto'),
                 'abertura' => date("Y-m-d H:i:s"),
                 'fechamento' => $fec,
                 'encerrado' => $this->input->post('encerrado'),
                 'titulo' => $this->input->post('titulo'),
                 'descricao' => $this->input->post('descricao'),
                 'id_sac'=>$id,
               );
               $this->sac->update($array, $id);
               $this->session->set_flashdata('success', 'SAC atualizado com sucesso!');

               redirect('sac');
            }else{
               $this->session->set_flashdata('danger', 'SAC não pode ser atualizado!');
               redirect('sac');
            }

        }
        else {
            $data['title']='Editar Sac';
            $data['id']=$id;
            $data['sac']=$this->sac->find($id);
            $data['produtos']=$this->produto->get();
           
            loadTemplate('includes/header', 'sac/editar', 'includes/footer', $data);
        }

    }

    /**
    *analizando o desenvolvimento do projeto, esta função de delete se tornou inviavel para uso
    *
    
    public function delete($id_sac)
    {
        $this->sac->remove($id_sac);        

        $this->redirectSuccess('SAC removido com sucesso');
    }

    */

    /**
    * @author: Tiago Villalobos
    * Retorna um array com dados pegos por post
    *
    * @param: $id_sac integer
    */
    private function getFromPost()
    {
        return array(
            'id_produto' => $this->input->post('id_produto'),
            'id_cliente' => $this->input->post('id_cliente'),
            'abertura'   => date("Y-m-d H:i:s"),
            'fechamento' => 0,
            'encerrado'  => 0,
            'titulo'     => $this->input->post('titulo'),
            'descricao'  => $this->input->post('descricao'),
        );
    }

    /**
    * @author: Tiago Villalobos
    * Retorna um array com dados pegos por post adicionado a eles o id_sac
    *
    * @param: $id_sac integer
    */
    private function getFromPostEdit($id_sac)
    {
        $postData = $this->getFromPost();

        $postData['id_sac']     = $id_sac;
        $postData['fechamento'] = $this->input->post('encerrado') ? date('Y-m-d H:i:s') : 0;
        $postData['encerrado']  = $this->input->post('encerrado');

        return $postData;
    }
}
