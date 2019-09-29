<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Saldo_model extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function pegar_saldo($id_cliente)
    {
        $this->db->where('id_cliente', $id_cliente);
        $this->db->select('id_saldo, valor');
        $sql = $this->db->get('saldo');
        return $sql->result();
    }

    public function atualizar_saldo($data, $id_cliente)
    {
        $this->db->where('id_cliente', $id_cliente);
        $this->db->set('valor', $data[0]->valor);
        $this->db->update('saldo');
    }

    public function salvar_saldo($id_cliente)
    {
        $this->db->set('valor', 0);
        $this->db->set('id_cliente', $id_cliente);
        $this->db->insert('saldo');
    }

    public function salvar_transacao($data)
    {
        $this->db->set('tipo', $data['tipo']);
        $this->db->set('descricao', $data['descricao']);
        $this->db->set('valor', $data['valor']);
        $this->db->set('data_transacao', 'NOW()', FALSE);
        $this->db->set('id_saldo', $data['id_saldo']);
        $this->db->set('id_fornecedor_transacoes', $data['id_fornecedor_transacoes']);
        $this->db->insert('transacoes');
    }

    public function pegar_transacao($id_saldo)
    {
        $this->db->where('id_saldo', $id_saldo);
        $this->db->set('id_transacoes, tipo, descricao, valor, data_transacao, id_fornecedor_transacoes');
        $sql = $this->db->get('transacoes');
        return $sql->result();
    }
}
