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
        $select = 'SELECT saldo.id_saldo, saldo.valor FROM saldo ';
        $inner_join = 'INNER JOIN cliente ON cliente.id_saldo_cliente = saldo.id_saldo';
        $where = ' WHERE cliente.id_cliente = ?';
        $sql = $this->db->query($select .  $inner_join . $where, array($id_cliente));
        return $sql->result();
    }

    public function atualizar_saldo($data, $id_saldo)
    {
        //$sql = 'UPDATE saldo SET valor = ? WHERE id_saldo = ? ';
        $this->db->where('id_saldo', $id_saldo);
        $this->db->set('valor', $data[0]->valor);
        $this->db->update('saldo');
    }

    public function salvar_saldo()
    {
        $this->db->set('valor', 0);
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
