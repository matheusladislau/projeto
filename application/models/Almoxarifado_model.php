<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Almoxarifado_model extends PR_Model
{
    
    /**
    * @author: Camila Sales
    * Realiza registro de almoxarifado
    *
    * @param: mixed 
    */
    public function insert($almoxarifado)
    {
        $this->db->insert('almoxarifado', $almoxarifado);

        $this->setLog($almoxarifado['nome']);
    }

    /**
    * @author: Camila Sales
    * Retorna todos registro de almoxarifado cadastrados no banco
    * @return array: todos registro de almoxarifado cadastrados
    */
    public function get(){
        return $this->db->get('almoxarifado')->result();
    }

    /**
    * @author: Camila Sales
    * Retorna registro de almoxarifado cadastrados no banco com id_almoxarifado referente
    *
    * @param integer $id_almoxarifado refere-se ao id do registro de almoxarifado a ser consultado
    */
    public function getById($id_almoxarifado)
    {
        return $this->db->where('id_almoxarifado', $id_almoxarifado)->get('almoxarifado')->result();
    }

    /**
    * @author: Camila Sales
    * Edita o registro de almoxarifado pelo id_almoxarifado referente
    *
    * @param integer $id_almoxarifado refere-se ao id do registro de almoxarifado a ser editado
    * @return boolean: True - caso editado com sucesso, False - não editado
    */
    public function update($almoxarifado)
    {
        $this->db
        ->set('almoxarifado.nome', $almoxarifado['nome'])
        ->set('almoxarifado.quantidade', $almoxarifado['quantidade'])
        ->set('almoxarifado.id_unidade_medida', $almoxarifado['id_unidade_medida'])
        ->set('almoxarifado.descricao', $almoxarifado['descricao'])
        ->set('almoxarifado.valor', $almoxarifado['valor'])
        ->where('almoxarifado.id_almoxarifado', $almoxarifado['id_almoxarifado'])
        ->update('almoxarifado');

        $this->setLog($almoxarifado['nome'], $almoxarifado['id_almoxarifado']);

    }

    /**
    * @author: Camila Sales
    * Remove o registro de almoxarifado pelo id_almoxarifado referente
    *
    * @param integer: $id_almoxarifado refere-se ao id do registro de almoxarifado a ser deletado
    */
    public function remove($id_almoxarifado)
    {
        $almoxarifado = $this->db->where('id_almoxarifado', $id_almoxarifado)->get('almoxarifado')->row();

        $this->db
        ->where('id_almoxarifado', $id_almoxarifado)
        ->delete('almoxarifado');

        $this->setLog($almoxarifado->nome, $almoxarifado->id_almoxarifado);

        
    }
}

