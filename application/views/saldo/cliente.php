<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title>Saldo</title>
</head>

<body>
  <?php var_dump($cliente) ?>
  <br>
  <?php var_dump($fornecedores) ?>
  <br><br>
  <?php var_dump($saldo) ?>
  <br><br><br>
  <div class="container">
    <div class="row">
      <form class="col s12" action="../transacao/<?php echo $cliente[0]->id_cliente ?>" method="POST">
        <input type="hidden" name="id_saldo" value="<?php echo $saldo[0]->id_saldo ?>">
        <div class="row">
          <div class="input-field col s12">
            <select id="tipo" name="tipo">
              <option value="" disabled selected>Selecione</option>
              <option value="entrada">Entrada</option>
              <option value="saida">Saída</option>
            </select>
            <label class="active">Tipo da Transação</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input id="descricao" name="descricao">
            <label class="active" for="descricao">Descrição</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <input type="number" name="valor" id="valor" step="0.01">
            <label for="valor">Valor</label>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <select id="id_fornecedor_transacoes" name="id_fornecedor_transacoes">
              <?php foreach ($fornecedores as $i) { ?>
                <option value="<?php echo $i->id_fornecedor ?>">
                  <?php echo $i->nome_fornecedor ?>
                </option>
              <?php } ?>
            </select>
            <label for="id_fornecedor_transacoes">Fornecedor</label>
          </div>
        </div>
        <div class="row">
          <button class="waves-effect waves-light btn" type="submit">
            salvar</i>
          </button>
        </div>
      </form>
    </div>
    <table class="highlight">

    </table>
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