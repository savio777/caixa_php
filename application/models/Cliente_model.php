<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Cliente_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function salvar_conta($data)
    {
        $this->db->set('banco', $data['banco']);
        $this->db->set('agencia', $data['agencia']);
        $this->db->set('num_conta', $data['num_conta']);
        $this->db->insert('conta_cliente');
    }

    public function salvar_cliente($data)
    {
        $this->db->set('nome', $data['nome']);
        $this->db->set('data_fundacao', date("Y-m-d H:i:s", strtotime($data['data_fundacao'])));
        $this->db->set('frequencia_compra', $data['frequencia_compra']);
        $this->db->set('classificao_cliente', $data['classificao_cliente']);
        $this->db->set('referencia_comercial', $data['referencia_comercial']);
        $this->db->set('credito_consultado', $data['credito_consultado']);
        $this->db->set('telefone', $data['telefone']);
        $this->db->set('id_conta_cliente', $this->db->count_all_results('conta_cliente'));
        $this->db->insert('cliente');
    }

    public function pegar()
    {
        $select = 'SELECT * FROM cliente ';
        $inner_join = 'INNER JOIN conta_cliente ON cliente.id_conta_cliente = conta_cliente.id_conta';
        $sql = $this->db->query($select . $inner_join);
        return $sql->result();
    }

    public function pegar_cliente($id_cliente)
    {
        $select = 'SELECT * FROM cliente ';
        $inner_join = 'INNER JOIN conta_cliente ON cliente.id_conta_cliente = conta_cliente.id_conta';
        $where = ' WHERE cliente.id_cliente = ?';
        $sql = $this->db->query($select . $inner_join . $where, array($id_cliente));
        return $sql->result();
    }
}
