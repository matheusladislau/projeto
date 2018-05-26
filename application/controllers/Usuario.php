<?php
class Usuario extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
      $user_id = $this->session->userdata('user_login');
      $currentUrl = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '';
      #$this->usuario->hasPermission($user_id, $currentUrl);
  }

    /**
    * @author: Matheus Ladislau
    * Realiza o carregamento da página inicial de Usuario, apresentando todos usuários
    */
    public function index()
    {
      $data['title'] = 'Usuários';
      $data['usuarios'] = $this->usuario->get();
      loadTemplate(
        'includes/header',
        'usuario/index',
        'includes/footer',
        $data);
    }

    /**
    * @author: Matheus Ladislau
    * Realiza o cadastro de um usuario, dados recebidos da view setor/cadastro.php
    */
    public function create(){
      if($this->input->post())
      {
        if(!$this->form_validation->run('usuario'))
        {
          // $this->session->set_flashdata('errors', $this->form_validation->error_array());
          // $this->session->set_flashdata('old_values', $this->input->post());

          $this->session->set_flashdata(
            'errors',
            'Não foi possível realizar o cadastro<br>Verifique os campos abaixo'
          );
          redirect("usuario/cadastrar");
        }
        else
        {
          //pessoa
          $data_pessoa["nome"]=$this->input->post("nome");
          $data_pessoa["email"]=$this->input->post("email");
          $id_pessoa=$this->pessoa->insert($data_pessoa);

          //endereco
          $data_endereco['cep']=$this->input->post('cep');
          $data_endereco['bairro']=$this->input->post('bairro');
          $data_endereco['logradouro']=$this->input->post('logradouro');
          $data_endereco['numero']=$this->input->post('numero');
          $data_endereco['complemento']=$this->input->post('complemento');
          $data_endereco['id_pessoa']=$id_pessoa;
          $data_endereco['id_cidade']=$this->input->post('cidade');
          $this->endereco->insert($data_endereco);

          //usuario
          $data_usuario["login"]=$this->input->post("login");
          $data_usuario["senha"]=$this->input->post("senha");
          $data_usuario["id_grupo_acesso"]=3;
          $data_usuario["id_pessoa"]=$id_pessoa;
          // $data_usuario["senha2"]=$this->input->post("senha2");
          $this->usuario->insert($data_usuario);
          // if($data["senha"]==$data["senha2"])
          // {
          // }
          // else
          // {
          // }
          }
        }
      else
      {
        $data['cidades'] = $this->cidade->get();
        $data['estados'] = $this->estado->get();
        $this->load->view(
        'usuario/cadastrar2.php',
        $data
        );
      }
    }

  // public function create()
  // {
  //   if($this->input->post())
  //   {
  //     $data["login"]=$this->input->post("login");
  //     $data["senha"]=$this->input->post("senha");
  //     $data["id_grupo_acesso"]=$this->input->post("id_grupo_acesso");
  //     $data["id_pessoa"]=$this->input->post("id_pessoa_fisica");
  //     $this->usuario->insert($data);
  //     $this->session->set_flashdata('success', "Usuário cadastrado com sucesso");
  //     // redirect('usuario');
  //     $this->session->set_flashdata('errors', $this->form_validation->error_array());
  //     }else{
  //       $data['title'] = 'Cadastrar Usuário';
  //       $data['grupo_acesso'] = $this->grupo->get();
  //       $data['pessoa_fisica'] = $this->pessoa_fisica->get();
  //       $data['pessoa_juridica'] = $this->pessoa_juridica->get();
  //       loadTemplate(
  //         'includes/header',
  //         'usuario/cadastrar.php',
  //         'includes/footer',
  //         $data);
  //       // $this->load->view(
  //       //   'usuario/cadastrar2.php',
  //       //   $data);
  //  }
  // }

  // public function create2()
  // {
  //   if($this->input->post())
  //   {
  //     $data["login"]=$this->input->post("login");
  //     $data["senha"]=$this->input->post("senha");
  //     $data["id_grupo_acesso"]=$this->input->post("id_grupo_acesso");
  //     $data["id_pessoa"]=$this->input->post("id_pessoa_fisica");
  //     $this->usuario->insert($data);
  //     $this->session->set_flashdata('success', "Usuário cadastrado com sucesso");
  //     // redirect('usuario');
  //     $this->session->set_flashdata('errors', $this->form_validation->error_array());
  //     }else{
  //       $data['title'] = 'Cadastrar Usuário';
  //       $data['grupo_acesso'] = $this->grupo->get();
  //       $data['pessoa_fisica'] = $this->pessoa_fisica->get();
  //       $data['pessoa_juridica'] = $this->pessoa_juridica->get();
  //       // loadTemplate(
  //       //   'includes/header',
  //       //   'usuario/cadastrar.php',
  //       //   'includes/footer',
  //       //   $data);
  //       $this->load->view(
  //         'usuario/cadastrar2.php',
  //         $data);
  //  }
  // }

    /**
    * @author: Matheus Ladislau
    * Realiza remoção de registro de um usuario pelo id
    *
    *@param integer: refere-se ao id do usuario a ser excluído
    */
    public function delete($id_usuario)
    {
      $this->usuario->remove($id_usuario);
      $this->session->set_flashdata('success', 'Usuário excluído com sucesso');
      redirect('usuario');
    }


}



//
//   /**
//   * @author: Matheus Ladislau
//   *Realiza edição de registro de um setor pelo id, dados recebidos pela view setor/editar.php
//   *
//   *@param integer: referen-se ao id do setor a ser alterado
//   */
//   public function edit($id_setor)
//   {
//     if($this->input->post())
//     {
//       $data["nome"]=$this->input->post("nome");
//       $this->setor->update($data,$id_setor);
//       $this->session->set_flashdata('success', 'setor editado com sucesso');
//       redirect('setor');
//     }else{
//       $data['setor'] = $this->setor->find($id_setor);
//       $data['title'] = 'Editar Setor';
//       $data['id_setor'] = $id_setor;
//       loadTemplate(
//         'includes/header',
//         'setor/editar',
//         'includes/footer', $data);
//       }
//
//   }
//

?>
