<?php
$array = [
  'porta' => 123,
  'camisa' => 25,
  'bermuda' => 19,
  'cadeira' => 50
];

function retornoCaros($arr)
{
  $retorno = [];
  foreach ($arr as $item => $preco) {
    if ($preco >= 30) {
      array_push($retorno, $item);
    }
  }

  return $retorno;
}

print_r(retornoCaros($array));
