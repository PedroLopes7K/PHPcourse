<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'cursophp';

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);

$nome = "Lucas";
$sobrenome = "Garcia";
$state = $conn->prepare(" UPDATE teste SET sobrenome = :sobrenome, WHERE nome = :nome ");

$state->bindParam(":nome", $nome);
$state->bindParam(":sobrenome", $sobrenome);
$state->execute();
