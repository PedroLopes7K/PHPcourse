<?php
$carro = [
  "marca" => "BMW",
  "modelo" => "325i",
  "ano" => 2014
];

// cria um array com as chaves do array associativo
$chaves = array_keys($carro);
print_r($chaves);
echo "<br>";

// cria um array com todos os valores do array associativo
$valores = array_values($carro);
print_r($valores);
echo "<br>";

// verifica se a chave "marca" existe no array]
// if(isset($carro["marca"])) tem a mesma funcionalidade
if (array_key_exists("marca", $carro)) {
  echo " a chave marca existe";
} else {
  echo " a chave não existe";
}
