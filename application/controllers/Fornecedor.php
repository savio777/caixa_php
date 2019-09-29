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

    // models

    public function cadastrar_dados()
    {
        $this->Fornecedores_model->salvar($this->input->post());

        echo "<script>window.location.href='../fornecedor'</script>";
    }
}
