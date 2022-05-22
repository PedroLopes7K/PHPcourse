<?php

$array = ["Pedro", "Olá", "Carro"];
// concatena o array 
$teste = implode(', ', $array);
echo $teste . "<br>";

function Multi()
{
  $num1 = 3;
  $num2 = 2;
  $num3 = 7;

  echo $num1 * $num2 * $num3 . "<br>";
}
Multi();
