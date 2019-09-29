<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Cliente extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Cliente_model');
        $this->load->model('Saldo_model');
    }

    // views

    public function index()
    {
        $resultado = $this->Cliente_model->pegar();
        $this->load->view('cliente/clientes', array('clientes' => $resultado));
    }

    public function cadastrar()
    {
        $this->load->view('cliente/cadastrar');
    }

    public function saldo($id_cliente)
    {
        $cliente = $this->Cliente_model->pegar_cliente($id_cliente);
        $saldo = $this->Saldo_model->pegar_saldo($id_cliente);
        $transacoes = $this->Saldo_model->pegar_transacao($saldo[0]->id_saldo);

        $data = array(
            'cliente' => $cliente,
            'saldo' => $saldo,
            'transacoes' => $transacoes
        );

        $this->load->view('saldo/cliente', $data);
    }

    // models

    public function cadastrar_dados()
    {
        $data = $this->input->post();

        $this->Cliente_model->salvar_conta($data);
        $this->Cliente_model->salvar_cliente($data);

        echo "<script>window.location.href='../cliente'</script>";
    }

    public function apagar_cliente($id_cliente)
    { }

    public function editar_cliente($id_cliente)
    { }
}
