<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'cursophp';
// conectando ao banco
$conn = new mysqli($host, $user, $password, $db);

//verificar se a conexão foi realizada 
echo "<br>";
if ($conn->connect_errno) {
  echo "Erro de conexão! <br>";
  echo "Erro: " . mysqli_connect_error();
  // ou         $conn->connect_error
}
