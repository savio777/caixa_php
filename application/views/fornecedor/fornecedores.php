<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title>Document</title>
</head>

<body>
  <div class="container">
    <a href="home" class="waves-effect waves-light btn">voltar</a>
    <a href="fornecedor/cadastrar" class="waves-effect waves-light btn">cadastrar fornecedor</a><br><br>
    <table class="highlight">
      <thead>
        <tr>
          <td>Nome</td>
          <td>CNPJ</td>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($fornecedores as $i) { ?>
          <tr>
            <td><?php echo $i->nome_fornecedor ?></td>
            <td><?php echo $i->cnpj ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</body>

</html>