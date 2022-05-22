<?php

// transformar string em array

$frase = "testando explode <br>";

// o delimitador(no caso o espaço) precisa existir na string, caso contrario, retornara um array com apenas 1 indice(a string completa)
$fraseArray = explode(" ", $frase);
print_r($fraseArray);
echo "<br>";

$string = "Carro - Avião - Moto - Bicicleta";

$novaString = explode('-', $string);
print_r($novaString);
