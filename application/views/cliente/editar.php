<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <title>Editar Cliente</title>
</head>

<body>
  <div class="card-panel indigo">
    <h4>Editar Cliente</h4>
  </div><br><br>
  <div class="container">
    <form action="../../cliente/editar_cliente" method="POST" class="col s12">
      <input type="hidden" name="id_cliente" value="<?php echo $cliente[0]->id_cliente ?>">
      <div class="row">
        <div class="input-field col s12">
          <input id="nome" name="nome" value="<?php echo $cliente[0]->nome ?>">
          <label class="active" for="nome">Nome</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <input id="data_fundacao" name="data_fundacao" type="date" value="<?php echo $cliente[0]->data_fundacao ?>">
          <label class="active" for="data_fundacao">Data Fundação</label>
        </div>
        <div class="input-field col s6">
          <select id="classificao_cliente" name="classificao_cliente">
            <option value="<?php echo $cliente[0]->classificao_cliente ?>">
              Já selecionado: <?php echo strtoupper($cliente[0]->classificao_cliente) ?>
            </option>
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
            <option value="<?php echo $cliente[0]->frequencia_compra ?>">
              Já selecionado: <?php echo $cliente[0]->frequencia_compra ?>
            </option>
            <option value="anual">Anual</option>
            <option value="mes">Mês</option>
            <option value="semanal">Semanal</option>
          </select>
          <label class="active" for="frequencia_compra">Frequência Compra</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="referencia_comercial" name="referencia_comercial" value="<?php echo $cliente[0]->referencia_comercial ?>">
          <label class="active" for="referencia_comercial">Referência Comercial(opcional)</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s6">
          <select name="credito_consultado" id="credito_consultado">
            <option value="<?php echo $cliente[0]->credito_consultado ?>">
              Já selecionado: <?php echo ($cliente[0]->credito_consultado == 1) ? 'Sim' : 'Não' ?>
            </option>
            <option value="0">Não</option>
            <option value="1">Sim</option>
          </select>
          <label class="active">Crédito Consultado</label>
        </div>
        <div class="input-field col s6">
          <input id="telefone" name="telefone" value="<?php echo $cliente[0]->telefone ?>">
          <label class="active" for="telefone">Telefone</label>
        </div>
      </div>

      <div class="row">
        <button class="waves-effect waves-light btn indigo" type="submit">
          editar</button>
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