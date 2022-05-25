<?php

// nome do cookie, valor, é tempo que ficara salvo
// setcookie('nome', "Pedro", time() + 330);

if (isset($_COOKIE['nome'])) {
  $nome = $_COOKIE['nome'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h2>Olá</h2>
  <?php if ($nome) : ?>
    <p>Bem-vindo <?= $nome ?> !</p>
  <?php endif ?>
</body>

</html>