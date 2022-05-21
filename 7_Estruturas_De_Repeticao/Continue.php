<?php


// ao contrario do Break que encerra a execução do loop, o Continue pula para a proxima execução do loop

$a = 10;

while ($a > 0) {

  if ($a === 5 || $a === 8) {
    // echo "Pulou a execução $a <br>";
    $a--; // sem esse decremento entraria em um loop infinito
    continue;
  }
  echo "Executando o loop $a <br>";

  $a--;
}
