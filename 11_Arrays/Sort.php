<?php

$array = [2, 4, 1, 233, 546, 27];
// ordena em ordem crescente
sort($array);

print_r($array);
echo "<br>";
// ordena em ordem decrescente
rsort($array);
echo $array;
echo "<br>";


$nomes = ["Pedro", "Ana", "Maria", "Lucas"];

// ordena em ordem alfabetica
sort($nomes);
echo $nomes;
