<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <title>Cadastrar Conta</title>
</head>

<body>
  <div class="card-panel indigo">
    <h4>Cadastrar Conta</h4>
  </div><br><br>
  <div class="container">
    <form action="../conta/cadastrar_dados" method="POST" class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <input id="nome_empresa" name="nome_empresa">
          <label class="active" for="nome_empresa">Nome Empresa</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="endereco" name="endereco">
          <label class="active" for="endereco">Endereço</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="bairro" name="bairro">
          <label class="active" for="bairro">Bairro</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s10">
          <input id="cidade" name="cidade">
          <label class="active" for="cidade">Cidade</label>
        </div>
        <div class="input-field col s2">
          <input id="uf" name="uf" maxlength="2">
          <label class="active" for="uf">UF</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" name="email" type="email">
          <label class="active" for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <button class="waves-effect waves-light btn indigo" type="submit">
          cadastrar</button>
      </div>
    </form>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>