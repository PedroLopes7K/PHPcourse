<?php

$x = 0;

while ($x < 10) {

  echo "O x é $x <br>";

  if ($x == 6) {
    echo "x chegou até $x, saindo do programa...<br> <br> ";
    break;
  }
  $x++;
}

$y = 4;
while ($y <= 30) {

  echo "$y <br>";

  if ($y == 24) {
    echo "Fim do programa.";
    break;
  }

  $y += 2;
}
