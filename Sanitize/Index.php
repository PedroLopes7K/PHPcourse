<html>

<body>

  <?php
  /*sanitização

*/
  ?>

  <?php
  if (isset($_POST['enviar'])) {

    // array de erros
    $erros = array();
    // sanitaze
    $nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);

    $idade = filter_input(INPUT_POST, "idade", FILTER_SANITIZE_NUMBER_INT);
    if (!filter_var($idade, FILTER_VALIDATE_INT)) {
      $erros[] = "Idade precisa ser um inteiro!";
    }

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $erros[] = "Email inválido!";
    }

    if (!empty($erros)) {
      foreach ($erros as $erro) {
        echo "<li> $erro </li>";
      }
    } else {
      echo 'Os dados estão corretos!';
    }
  }

  ?>
  <!-- <form action= "<php echo $_SERVER['PHP-SELF'; >" method="POST">  -->

  <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
    <br>
    <hr>
    <label for="idade"> Idade: <input type="idade" name="idade"> </label> <br>
    <hr>
    <label for="email"> Email: <input type="email" name="email"> </label> <br>
    <hr>
    <label for="nome"> Nome: <input type="nome" name="nome"> </label> <br>
    <hr>
    <button type="submit" name="enviar"> ENVIAR</button>
  </form>
</body>

</html>