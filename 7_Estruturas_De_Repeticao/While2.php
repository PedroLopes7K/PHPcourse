<?php


$array = [5, "Pedro", true, false, 12.4, "Luana", "Beleza", 34, 67.45];

// count verifica o tamanho do array, e atribui a variavel x
$x = count($array);
$y = 0;

while ($y < $x) {

  if (is_string($array[$y])) {
    echo $array[$y] . "<br>";
  }

  $y++;
}
