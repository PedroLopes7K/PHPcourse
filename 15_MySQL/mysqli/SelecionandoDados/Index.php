<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'cursophp';
// conectando ao banco
$conn = new mysqli($host, $user, $password, $db);

$query = "SELECT * FROM teste";

$result = $conn->query($query);
$conn->close();
// transforma o resultado da query em array com um resultado apenas
$Array = $result->fetch_assoc();
print_r($Array);
echo "<br>";
echo "<br>";
// transforma o resultado da query em array com todos os resultados
$Array2 = $result->fetch_all();
print_r($Array2);
