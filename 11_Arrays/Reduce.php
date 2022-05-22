<?php
$array = [1, 2, 3, 4, 5];
$array2 = ["Pedro ", "tem ", 20, " anos"];

function soma($a, $b)
{
  return $a + $b;
}

function concat($a, $b)
{
  return $a . $b;
}
// o nome da funão como string
$resultado = array_reduce($array, "soma");
echo $resultado;
echo "<br>";

echo $resultado2 = array_reduce($array2, "concat");
