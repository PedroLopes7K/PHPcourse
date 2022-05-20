<?php
$idade1 = 19;
$idade2 = 17;
$idade3 = '23';
$maiorIdade = 18;

if ($idade1 >= $maiorIdade) {
  echo "Idade 1 é maior de idade!";
} else {
  echo "Idade 1 é menor de idade!";
}
echo "<br>";
if ($idade2 >= $maiorIdade) {
  echo "Idade 2 é maior de idade!";
} else {
  echo "Idade 2 é menor de idade!";
}
echo "<br>";

if ($idade3 >= $maiorIdade && is_int($idade3) == true) {
  echo "Idade 3 é maior de idade!";
} else if (is_int($idade3) == false) {
  echo "Idade 3 não é valida!";
} else {
  echo "Idade 3 é menor de idade!";
}
