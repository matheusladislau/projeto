<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Candidato_model extends CI_Model {

	public $id_pessoa;
	/**
	* @author: Camila Sales
	* Salva o registro de candidato associado à uma pessoa fisica
	*
	* @param integer $id_pessoa
	*/
	public function insert($id_pessoa)
	{
		$this->id_pessoa = $id_pessoa;
		$this->db->insert('candidato', $this);
	}

	/**
	* @author: Camila Sales
	* Remove o registro de candidato associado à uma pessoa fisica
	*
	* @param integer $id_pessoa
	*/
	public function remove($id_pessoa)
	{
		$this->db->where('id_pessoa', $id_pessoa);
		$this->db->delete('candidato');
		// delete pessoa fisica;
	}
}