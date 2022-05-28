<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'cursophp';

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);

$sobrenome = "Gabriel";

$state = $conn->prepare("SELECT * FROM teste WHERE sobrenome = :sobrenome");

$state->bindParam(":sobrenome", $sobrenome);
$state->execute();


// PEGA APENAS O PRIMEIRO DADO QUE CORRESPONDER A QUERY

//    esse parametro não deixa o dado vir duplicado
$data = $state->fetch(PDO::FETCH_ASSOC);
print_r($data);

// PEGA TODOS OS DADOS QUE CORRESPONDEREM A QUERY
// $data = $state->fetchAll(PDO::FETCH_ASSOC);
// print_r($data);
