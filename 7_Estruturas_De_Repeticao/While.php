<?php

$x = 30;


// o loop bloqueia a execução do codigo
while ($x >= 1) {
  echo $x . "<br>";

  $x = $x - 1;
}

echo "Código continua... <br>";


$y = 0;

while ($y <= 100) {

  if ($y % 2 == 0) {
    echo $y . " é par! <br>";
  }
  $y++;
}
