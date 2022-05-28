<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'cursophp';
// conectando ao banco
$conn = new mysqli($host, $user, $password, $db);

$sobrenome = "Lopes";
$state = $conn->prepare("SELECT * FROM teste WHERE sobrenome = ?");
$state->bind_param("s", $sobrenome);
$state->execute();

$result = $state->get_result();
//          fetch_row pega apenas o primeiro resultado
$data = $result->fetch_all();
print_r($data);
