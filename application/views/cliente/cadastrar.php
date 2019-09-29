<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <title>Cadastrar Cliente</title>
</head>

<body>
  <div class="card-panel indigo">
    <h4>Cadastrar Cliente</h4>
  </div><br><br>
  <div class="container">
    <form action="../cliente/cadastrar_dados" method="POST" class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <input id="nome" name="nome">
          <label class="active" for="nome">Nome</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="data_fundacao" name="data_fundacao" type="date">
          <label class="active" for="data_fundacao">Data Fundação</label>
        </div>
        <div class="input-field col s6">
          <select id="classificao_cliente" name="classificao_cliente">
            <option value="" disabled selected>Tipo</option>
            <option value="a">A</option>
            <option value="b">B</option>
            <option value="c">C</option>
          </select>
          <label class="active" for="classificao_cliente">Classificação Cliente</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <select id="frequencia_compra" name="frequencia_compra">
            <option value="" disabled selected></option>
            <option value="anual">Anual</option>
            <option value="mes">Mês</option>
            <option value="semanal">Semanal</option>
          </select>
          <label class="active" for="frequencia_compra">Frequência Compra</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="referencia_comercial" name="referencia_comercial">
          <label class="active" for="referencia_comercial">Referência Comercial(opcional)</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <select name="credito_consultado" id="credito_consultado">
            <option value="" disabled selected></option>
            <option value="0">Não</option>
            <option value="1">Sim</option>
          </select>
          <label class="active">Crédito Consultado</label>
        </div>
        <div class="input-field col s6">
          <input id="telefone" name="telefone">
          <label class="active" for="telefone">Telefone</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="banco" name="banco">
          <label class="active" for="banco">Nome Banco</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="agencia" name="agencia" type="number">
          <label class="active" for="agencia">Agência</label>
        </div>
        <div class="input-field col s6">
          <input id="num_conta" name="num_conta" type="number">
          <label class="active" for="num_conta">N° Conta</label>
        </div>
      </div>

      <div class="row">
        <button class="waves-effect waves-light btn indigo" type="submit">
          cadastrar</button>
      </div>
    </form>
  </div>

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    $(document).ready(function() {
      $('select').formSelect();
    });
  </script>
</body>

</html>