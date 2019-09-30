<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title>Editar Fornecedor</title>
</head>

<body>
  <div class="container">
    <div class="card-panel indigo">
      <h4>Editar Fornecedor</h4>
    </div>
    <br><br>
    <div class="row">
      <form action="../../fornecedor/editar_dados" method="POST" class="col s12">
        <input type="hidden" name="id_fornecedor" value="<?php echo $fornecedor[0]->id_fornecedor ?>">
        <div class="row">
          <div class="input-field col s12">
            <input id="nome_fornecedor" name="nome_fornecedor" value="<?php echo $fornecedor[0]->nome_fornecedor ?>">
            <label class="active" for="nome_fornecedor">Nome</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input type="number" name="cnpj" id="cnpj" value="<?php echo $fornecedor[0]->cnpj ?>">
            <label class="active" for="cnpj">CNPJ</label>
          </div>
        </div>
        <div class="row">
          <button class="waves-effect waves-light btn indigo" type="submit">
            editar</button>
        </div>
      </form>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>