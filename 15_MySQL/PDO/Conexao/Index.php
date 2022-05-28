<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'cursophp';

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);

// INSERT
$state = $conn->prepare("INSERT INTO teste (nome, sobrenome) VALUES (:nome, :sobrenome)");

$nome = "Julio";
$sobrenome = "Almeida";
$state->bindParam(":nome", $nome);
$state->bindParam(":sobrenome", $sobrenome);

$state->execute();
