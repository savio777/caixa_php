<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Fornecedor extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Fornecedores_model');
    }

    // views

    public function index()
    {
        $fornecedores = $this->Fornecedores_model->pegar();
        $this->load->view('fornecedor/fornecedores', array('fornecedores' => $fornecedores));
    }

    public function cadastrar()
    {
        $this->load->view('fornecedor/cadastrar');
    }

    public function editar($id_fornecedor)
    {
        $fornecedor = $this->Fornecedores_model->pegar_id($id_fornecedor);
        $this->load->view('fornecedor/editar', array('fornecedor' => $fornecedor));
    }

    // models

    public function cadastrar_dados()
    {
        $this->Fornecedores_model->salvar($this->input->post());

        echo "<script>window.location.href='../fornecedor'</script>";
    }

    public function editar_dados()
    {
        $this->Fornecedores_model->editar($this->input->post());

        echo "<script>window.location.href='../fornecedor'</script>";
    }


    public function excluir($id_fornecedor)
    {
        $this->Fornecedores_model->apagar($id_fornecedor);

        echo "<script>window.location.href='../../fornecedor'</script>";
    }
}
