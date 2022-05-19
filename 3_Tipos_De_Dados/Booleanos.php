<?php
// 0, 0.0 "0", [] e NUll são considerados false

echo true; // imprime 1
echo "<br>";
echo false; // não imprime nada

if (true) {
  echo "É verdadeiro! <br>";
}

if (5 > 2) {
  echo "É verdadeiro 2! <br>";
}

$podeEntrar = true;

if ($podeEntrar) {
  echo "Acesso liberado! <br>";
}

if (is_bool($podeEntrar)) {
  echo "Variavel é booleana 1!";
}
if (is_bool(0)) {
  echo "Variavel é booleana 2!";
}
