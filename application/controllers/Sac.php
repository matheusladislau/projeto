<?php
class Sac extends CI_Controller {

    public function __construct()
  {
    parent::__construct();
      $user_id = $this->session->userdata('user_login');
      $currentUrl = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '';
      $this->usuario->hasPermission($user_id, $currentUrl);
  }

    public function index(){
      $data['title'] = 'Solicitações SAC';
      $data['sac'] = $this->sac->get();
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
    * @author: Rodrigo Alves
    * Página de cadastro.
    *
    */
    public function create() {

         $data = $this->input->post();

         if($data){
            if ($this->form_validation->run('sac')) {
               $array = array(
                 'id_produto' => $this->input->post('id_produto'),
                 'id_cliente' => $this->input->post('id_cliente'),
                 'abertura' => date("Y-m-d H:i:s"),
                 'fechamento' => 0,
                 'encerrado' => 0,
                 'titulo' => $this->input->post('titulo'),
                 'descricao' => $this->input->post('descricao'),
               );
               $this->sac->insert($array);
               $this->session->set_flashdata('success', 'Sac cadastrado com sucesso.');
               redirect('sac');
            }else{
               $this->session->set_flashdata('danger', 'Sac não pode ser cadastrado');
               redirect('sac');
            }
         }

        $data['title'] = 'Cadastrar SAC';
        $data['produtos'] = $this->produto->get();
        $data['clientes'] = $this->cliente->get();
        loadTemplate('includes/header', 'sac/cadastrar', 'includes/footer', $data);
    }

    public function edit($id) {

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
                 'id_cliente' => $this->input->post('id_cliente'),
                 'abertura' => date("Y-m-d H:i:s"),
                 'fechamento' => $fec,
                 'encerrado' => $this->input->post('encerrado'),
                 'titulo' => $this->input->post('titulo'),
                 'descricao' => $this->input->post('descricao'),
               );

               $this->sac->update($array, $id);
               $this->session->set_flashdata('success', 'Sac editado com sucesso.');
               redirect('sac');
            }else{
               $this->session->set_flashdata('danger', 'Sac não pode ser editado');
               redirect('sac');
            }
         }

        $data['title'] = 'Editar SAC';
        $data['sac'] = $this->sac->get();
        $data['produtos'] = $this->produto->get();
        $data['clientes'] = $this->cliente->get();
        $data['id'] = $id;
        loadTemplate('includes/header', 'sac/editar', 'includes/footer', $data);

    }

    /**
    * @author: Rodrigo Alves
    * Este método tem como finalidade apagar uma ordem de SAC.
    *
    * @param integer $id_sac
    */
    public function delete($id_sac) {
       $this->sac->remove($id_sac);
       $this->session->set_flashdata('success', 'Sac deletado com sucesso.');
       redirect('sac');
    }


}
