<?php

$a = 1.4;

echo $a;
echo "<br>";
echo 12.567;
echo "<br>";
echo 12.6 + 34.21;
echo "<br>";
echo 5 + 7.6;

echo "<br>";
echo "<br>";

$b = "teste";
$u = 3.56;

if (is_float($b)) {
  echo "É float 1 <br>";
}
if (is_float($u)) {
  echo "É float 2!<br>";
}

if (is_float(7)) {
  echo "E float 3!";
}
