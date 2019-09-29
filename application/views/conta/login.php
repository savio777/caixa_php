<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conta</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>
  <div class="card-panel indigo">
    <h4>Entrar na conta desejada</h4>
  </div><br><br>
  <div class="container">
    <form action="index.php/conta/teste_cadastro" method="POST" class="col s6">
      <div class="row">
        <div class="input-field col s6">
          <input id="email" name="email" type="email">
          <label class="active" for="email">Email</label>
        </div>
      </div>
      <div class="row">
        <button class="waves-effect waves-light btn indigo" type="submit" name="action">
          entrar</button>
        <a href="index.php/conta/cadastrar" class="waves-effect waves-light btn indigo">
          cadastrar conta</a>
      </div>
    </form>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>