<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Conta_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function salvar($data)
    {
        $this->db->insert('conta', $data);
    }

    public function logar($email)
    {
        $this->db->where('email', $email);
        $sql = $this->db->get('conta');
        return $sql->result();
    }
}
