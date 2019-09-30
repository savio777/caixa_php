<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Fornecedores_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function salvar($data)
    {
        $this->db->insert('fornecedor', $data);
    }

    public function pegar()
    {
        $sql = $this->db->get('fornecedor');
        return $sql->result();
    }


    public function pegar_id($id)
    {
        $this->db->where('id_fornecedor', $id);
        $sql = $this->db->get('fornecedor');
        return $sql->result();
    }

    public function editar($data)
    {
        $this->db->where('id_fornecedor', $data['id_fornecedor']);
        $this->db->update('fornecedor', $data);
    }

    public function apagar($id_fornecedor)
    {
        $this->db->where('id_fornecedor', $id_fornecedor);
        $this->db->delete('fornecedor');
    }
}
