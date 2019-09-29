<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Cliente extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Cliente_model');
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

    // models

    public function cadastrar_dados()
    {
        $data = $this->input->post();

        $this->Cliente_model->salvar_conta($data);
        $this->Cliente_model->salvar_cliente($data);

        echo "<script>window.location.href='../cliente'</script>";        
    }
}
