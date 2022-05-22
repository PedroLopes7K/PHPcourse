<?php

// essa função retorna a primeira ocorrencia da string, ou false se não encontrar nada
echo "STRPOS <br>";
$str = "testando o metodo strpos do php";
$encontrar = strpos($str, "php");
echo $encontrar . "<br>";

$encontrar2 = strpos($str, "javascript");
echo $encontrar2; // == false

$palavra = "metodo";
echo $encontrar3 = strpos($str, $palavra);
echo "<br>";
echo "STRRPOS <br>";
// encontrar a última ocorrencia da palavra

$str2 = "Testando encontrado palavra teste, em uma string que tem teste";

$palavra = strrpos($str2, "teste");

echo "$palavra <br>";

$palavra2 = strpos($str2, "teste");

echo "$palavra2 <br>";

if (strrpos($str2, "Java") === false) {
  echo "A palavra Java não foi encontrada <br>";
}

$p = substr($str2, strpos($str2, "teste"), 5);

echo "$p <br>";
