<?php

//DIVIDIR ARRAYS

$array = range(1, 10);

$arrays = array_chunk($array, 2);

print_r($arrays);
echo "<br>";


for ($i = 0; $i < count($arrays); $i++) {
  $atual = $i + 1;
  echo "Array $atual <br>";
  for ($x = 0; $x < count($arrays[$i]) - 1; $x++) {
    echo $arrays[$i][$x] . ", "  . $arrays[$i][$x + 1] . "<br>";
  }
}
