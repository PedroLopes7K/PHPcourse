<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'cursophp';
// conectando ao banco
$conn = new mysqli($host, $user, $password, $db);

$nome = "Julia";
$state = $conn->prepare("DELETE FROM teste WHERE nome = ?");
$state->bind_param("s", $nome);
$state->execute();

$state->close();
