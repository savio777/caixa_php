<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Cliente extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Cliente_model');
        $this->load->model('Saldo_model');
        $this->load->model('Fornecedores_model');
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
        $transacoes = $this->Saldo_model->pegar_transacao($cliente[0]->id_saldo_cliente);
        $fornecedores = $this->Fornecedores_model->pegar();

        $data = array(
            'cliente' => $cliente,
            'transacoes' => $transacoes,
            'fornecedores' => $fornecedores
        );

        $this->load->view('saldo/cliente', $data);
    }

    public function transacao($id_cliente)
    {
        $this->Saldo_model->salvar_transacao($this->input->post());
        $saldo = $this->Saldo_model->pegar_saldo($id_cliente);

        if ($this->input->post('tipo') == 'entrada') {
            $saldo[0]->valor = $saldo[0]->valor + $this->input->post('valor');
        } elseif ($this->input->post('tipo') == 'saida') {
            $saldo[0]->valor = $saldo[0]->valor -  $this->input->post('valor');
        }

        $this->Saldo_model->atualizar_saldo($saldo, $saldo[0]->id_saldo);
        $this->saldo($id_cliente);
    }

    public function editar($id_cliente)
    {
        $cliente = $this->Cliente_model->pegar_cliente_editar($id_cliente);
        $this->load->view('cliente/editar', array('cliente' => $cliente));
    }

    // models

    public function cadastrar_dados()
    {
        $data = $this->input->post();

        $this->Cliente_model->salvar_conta($data);
        $this->Saldo_model->salvar_saldo();
        $this->Cliente_model->salvar_cliente($data);

        echo "<script>window.location.href='../cliente'</script>";
    }

    public function apagar_cliente($id_cliente)
    {
        $cliente = $this->Cliente_model->pegar_cliente_editar($id_cliente);
        $this->Cliente_model->apagar($id_cliente);
        $this->Cliente_model->apagar_conta($cliente[0]->id_conta_cliente);

        echo "<script>window.location.href='../../cliente'</script>";
    }

    public function editar_cliente()
    {
        $this->Cliente_model->editar($this->input->post());

        echo "<script>window.location.href='../cliente'</script>";
    }
}
