<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title>Clientes</title>
</head>

<body>
  <div class="container">
    <a href="home" class="waves-effect waves-light btn">voltar</a>
    <a href="cliente/cadastrar" class="waves-effect waves-light btn">cadastrar cliente</a><br><br>
    <table class="highlight">
      <thead>
        <tr>
          <td>Nome</td>
          <td>Data Fundação</td>
          <td>Frequência Compra</td>
          <td>Telefone</td>
          <td>Banco</td>
          <td>N° Agência</td>
          <td>N° Conta</td>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($clientes as $i) { ?>
          <tr>
            <td><?php echo $i->nome ?></td>
            <td><?php echo $i->data_fundacao ?></td>
            <td><?php echo $i->frequencia_compra ?></td>
            <td><?php echo $i->telefone ?></td>
            <td><?php echo $i->banco ?></td>
            <td><?php echo $i->agencia ?></td>
            <td><?php echo $i->num_conta ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</body>

</html>