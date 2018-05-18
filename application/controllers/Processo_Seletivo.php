<?php

/**
* @author: Nikolas Lencioni
* Controller de Processo_Seletivo
**/

class Processo_Seletivo extends CI_Controller
{
  /**
   * @author Pedro Henrique Guimarães
   * Com a configuração do menu esse controller serve como base para todos os outros controllers
   * onde todos devem seguir essa mesma estrutura mínima no consrutor.
   */
  public function __construct()
  {
    parent::__construct();
      $user_id = $this->session->userdata('user_login');
      $currentUrl = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '';
      // $this->usuario->hasPermission($user_id, $currentUrl);
    $this->load->model('ProcessoSeletivo_model');
  }

  public function index()
  {
    $data['title'] = 'Processo Seletivo';
    $data['processos_seletivos'] = $this->processo_seletivo->get();

    loadTemplate('includes/header', 'processo_seletivo/index', 'includes/footer', $data);
  }

  public function create()
  {
    $data = $this->input->post();

    if($data)
    {
      if($this->form_validation->run('processo_seletivo'))
      {
        $this->processo_seletivo->insert($data);
        $this->session->set_flashdata('success', 'Processo Seletivo cadastrado com sucesso.');

        redirect('processo_seletivo');
      }else {
        $this->session->set_flashdata('danger', 'Processo Seletivo não pode ser cadastrado');

        redirect('processo_seletivo');
      }
    }
    $data['title'] = 'Cadastrar Processo Seletivo';
    $data['cargos'] = $this->cargo->get();
    $data['processo_seletivo'] = $this->input->post();
    loadTemplate('includes/header', 'processo_seletivo/cadastrar', 'includes/footer', $data);
  }

  public function edit($id)
  {
    $data = $this->input->post();
    if ($data)
    {
      if ($this->form_validation->run('processo_seletivo'))
      {
        $this->processo_seletivo->update($id, $data);
        $this->session->set_flashdata('success', 'Processo Seletivo editado com sucesso.');
        redirect('processo_seletivo');
      }else{
        $this->session->set_flashdata('danger', 'Processo Seletivo não pode ser atualizado.');
        redirect('processo_seletivo/edit/'.$id);
      }
    }

    $data['title'] = 'Editar Processo Seletivo';
    $data['cargos'] = $this->cargo->get();
    $data['processo_seletivo'] = $this->processo_seletivo->find($id);
    loadTemplate('includes/header', 'processo_seletivo/editar', 'includes/footer', $data);
  }

  public function info($id)
  {
    $data['info'] = $this->processo_seletivo->info($id);
    $data['title'] = 'Informações Processo Seletivo';
    loadTemplate('includes/header', 'processo_seletivo/info', 'includes/footer', $data);
  }

  public function delete($id)
  {

  }
}
