<?php

$arr = [];

$x = 0;

while ($x < 100) {
  $x += 10;
  array_push($arr, $x);
}

print_r($arr);

$count = count($arr);

$y = 0;

while ($y < $count) {

  if ($arr[$y] === 30 || $arr[$y] == 70) {
    echo "Pulando <br>";
    $y++;
    continue;
  }

  echo "Valor $arr[$y] <br>";

  $y++;
}
