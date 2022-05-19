<?php

// as chaves precisam ser strings
$array = ['nome' => 'Bob', 'patas' => 4, 'raça' => 'pitbul'];
echo $array['nome'];
echo "<br>";
echo $array['patas'];
echo "<br>";
print_r($array);
echo "<br>";
echo "<br>";

$pessoa = [
  'nome' => 'luana',
  'idade' => 23,
  'altura' => 1.67
];

if ($pessoa['idade'] >= 18) {
  echo "É maior de idade!";
}
