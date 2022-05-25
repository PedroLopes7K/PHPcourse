<?php

// print_r($_GET);
// echo "<br>";
if (isset($_GET['nome'])) {
  $nome = $_GET['nome'];
} else {
  $nome = "Undefined";
}
if (!isset($_GET['idade']) || $_GET['idade'] == '') {
  $idade = "Undefined";
} else {
  $idade = $_GET['idade'];
}

?>

<h1>O seu nome é <?= $nome ?></h1>
<h1>Voce tem <?= $idade ?> anos</h1>