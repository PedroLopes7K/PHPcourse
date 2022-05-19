<?php

echo 5;
echo "<br>";
echo 5 + 6;
echo "<br>";
echo -9;
echo "<br>";
echo 5- 8;

if(is_int(7)) { // true
  echo "É um inteiro <br>";
}

if(is_int("Não e um inteiro") ) { // false
  echo "Não é inteiro 2 <br>";

}
$a = 19;
if(is_int($a) ) {
  echo "É um inteiro 3 !";
}
