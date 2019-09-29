<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Fornecedores extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function salvar($data)
    {
        $this->db->insert('fornecedor', $data);
    }

    public function pegar($id)
    {
        $this->db->where('id_fornecedor', $id);
        $sql = $this->db->get('fornecedor');
        return $sql->return();
    }
}
