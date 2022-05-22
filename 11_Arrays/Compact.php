<?php

$marca = "bmw";
$ano = 2014;
$cor = "branca";

// cria um array associativo com o nome e valores das variaveis
$carro = compact("marca", "ano", "cor");

print_r($carro);
echo "<br>";
foreach ($carro as $chave => $valor) {
  echo $chave . " => " . $valor . "<br>";
}
