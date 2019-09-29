<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Conta extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Conta_model');
        $this->load->library('session');
    }

    // views

    public function cadastrar()
    {
        $this->load->view('conta/cadastrar');
    }



    // models

    public function teste_cadastro()
    {
        $resultado = $this->Conta_model->logar($this->input->post('email'));

        if ($resultado) {
            // session
            echo "<script>window.location.href='../home'</script>";
        } else {
            echo '<h1>CONTA NÃO EXISTE</h1>';
        }
    }

    public function cadastrar_dados()
    {
        $this->Conta_model->salvar($this->input->post());
        // session
        //$this->session->set_userdata('nome_empresa', $this->input->post('nome_empresa'));
        echo "<script>window.location.href='../home'</script>";
    }
}
