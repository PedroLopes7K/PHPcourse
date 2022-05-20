<?php

echo 5 / 2;
echo "<br>";

if (is_float(5 / 2)) {
  echo "É float <br>";
}

echo 2 . 3;
echo "<br>";

if (is_string(2 . 3)) {
  echo "É string <br>";
}

$nome = "Matheus";
$sobrenome = "Battisti";

$nomeCompleto = $nome . " " . $sobrenome;

echo $nomeCompleto;
echo "<br>";

$operacao = "5" * 12;
$operacao2 = "12" * 3;
// $operacao3 = "Pedro" * 3;


echo $operacao . "<br>";
echo $operacao2 . "<br>";
// echo $operacao3 . "<br>";

echo gettype($operacao);
echo "<br>";
echo gettype([]);
echo "<br>";
echo gettype(12.2);
echo "<br>";
echo gettype("teste");
