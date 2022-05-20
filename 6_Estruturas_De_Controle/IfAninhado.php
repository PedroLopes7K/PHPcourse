<?php

$num = 19;
$num2 = '34';

if (is_int($num) || is_float($num)) {
  $multiplicacao = $num * 3;
  // if aninhado (if dentro de outro if)
  if ($multiplicacao > 100) {
    echo "$num x 3 é maior que 100!";
  } else {
    echo "$num x 3 é menor que 100!";
  }
} else {
  echo "$num não é um numero!";
}
echo "<br>";
if (is_int($num2) || is_float($num2)) {
  $multiplicacao = $num2 * 3;
  // if aninhado (if dentro de outro if)
  if ($multiplicacao > 100) {
    echo "$num2 x 3 é maior que 100!";
  }
} else {
  echo "$num2 não é um numero!";
}
