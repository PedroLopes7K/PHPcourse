<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'cursophp';
// conectando ao banco
$conn = new mysqli($host, $user, $password, $db);

// $query = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100))";

// deletando tabela
$query = "DROP TABLE teste";
$conn->query($query);

$conn->close();
