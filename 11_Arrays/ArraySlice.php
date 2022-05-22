<?php

$array = [1, 2, 3, 4, 5, 6, 7];

// sintaxe: array,indice de inicio, quantos elementos pegar
$slice1 = array_slice($array, 1, 3);
// pega o 2,3 e 4
print_r($slice1);
echo  "<br>";

$slice2 = array_slice($array, 2, 4);
// pega o 3,4,5,6
print_r($slice2);
echo  "<br>";

$slice3 = array_slice($array, 3);
// pega todos a partir do 4
print_r($slice3);
echo  "<br>";

$slice4 = array_slice($array, 3, -2);
// pega 4 e 5
print_r($slice4);
echo  "<br>";
