<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'cursophp';
// conectando ao banco
$conn = new mysqli($host, $user, $password, $db);

// $query = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100))";
// $conn->query($query);
//                                              os values precisam estar entre aspas
$query2 = "INSERT INTO teste (nome, sobrenome) VALUES ('Julia', 'Luiza')";

$conn->query($query2);

$conn->close();
