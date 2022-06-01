<!DOCTYPE html>
<html lang="pt-br">

<?php
if (isset($_POST['enviar'])) {
  $erros = array();
  if (!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)) {
    $erros[] = "Idade precisa ser um inteiro!";
  }
  if (!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
    $erros[] = "Email inválido!";
  }
  if (!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)) {
    $erros[] = "Peso precisa ser um float!";
  }
  if (!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)) {
    $erros[] = "IP inválido!";
  }
  if (!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)) {
    $erros[] = "URL Invalida!";
  }


  if (!empty($erros)) {
    foreach ($erros as $erro) {
      echo "<li> $erro </li>";
    }
  } else {
    echo "<h2> Dados enviados ccorretamente!";
  }
}

echo "<br> <br>";
?>

<body>

  <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    <p>Idade: <input type="text" name="idade"><br></p>
    Email: <input type="text" name="email"><br>
    <p></p>
    Peso: <input type="text" name="peso"><br>
    <p></p>
    IP: <input type="text" name="ip"><br>
    <p></p>
    URL: <input type="text" name="url"><br>
    <p></p>
    <button type="submit" name="enviar">Enviar</button>
  </form>
</body>

</html>