<?php
// UM LOOP DENTRO DE OUTRO
$externo = "Loop externo <br> <br>";
$interno = "Loop interno <br>";

$x = 1;
while ($x <= 3) {
  echo $x . " " . $externo;

  $i = 1;

  while ($i <= 5) {
    if ($i === 5) {
      echo $interno . "<br>";
      break;
    }
    echo $interno;
    $i++;
  }

  $x++;
}
