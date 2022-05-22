<?php
// cria variaves de chaves e valores de um array associativo
$arr = [
  'cor' => 'vermelho',
  'forma' => 'retângular',
  'material' => 'aço'
];

extract($arr);

echo "$cor <br>";
echo "$forma <br>";
echo "$material <br>";

$nome = "Matheus";

$pessoa = [
  'nome' => 'João',
  'idade' => 29
];

echo " Antes do extract $nome <br>";

extract($pessoa);
// sobreescreve o nome Matheus
echo " Depois do extract $nome <br>";
echo "$idade <br>";
