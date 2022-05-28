<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'cursophp';
// conectando ao banco
$conn = new mysqli($host, $user, $password, $db);

$nome = "Maria";
$sobrenome = "Graça";
$state = $conn->prepare("INSERT INTO teste (nome, sobrenome) VALUES (?,?)");

//               2 s pq são duas strings
$state->bind_param("ss", $nome, $sobrenome); // s == string

$state->execute();

$state->close();
