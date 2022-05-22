<?php

$array = [
  [1, 2, 3, 4],
  [5, 6, 7, 8],
  [9, 10, 11, 12]
];

for ($i = 0; $i < count($array); $i++) {
  echo "Array $i <br>";
  print_r($array[$i]);
  echo "<br>";
  echo "<br>";
  for ($x = 0; $x < count($array[$i]); $x++) {
    echo $array[$i][$x] . "<br>";
  }
}
