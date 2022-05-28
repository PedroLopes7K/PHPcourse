<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'cursophp';
// conectando ao banco
$conn = new mysqli($host, $user, $password, $db);

$nome = 'Pedro';

$state = $conn->prepare("UPDATE teste SET sobrenome = ? WHERE nome = ?");

$sobrenome = "Henrique";
$state->bind_param("ss", $sobrenome, $nome);
$state->execute();

// verificar erro
if ($state->error) {
  echo "ERROR: " . $state->error;
}

$state->close();
