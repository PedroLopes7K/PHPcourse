<?php

function soma($n1, $n2)
{
  return $n1 + $n2;
}
soma(4, 7);

echo soma(4, 7);

function Ola($nome, $idade)
{
  return "Olá, me chamo $nome é tenhos $idade anos! <br>";
}
echo Ola('Pedro', 20);

?>

<h1>Resultado: <?= soma(7, 12); ?> </h1>
<br>
<p><?= Ola('Pedro', 20); ?></p>

<?php

$array = [4, 7, 16, 23, 2, 5];
function maiorQueSete($arr)
{
  $array2 = [];
  if (is_array($arr)) {
    foreach ($arr as $num) {
      if ($num >= 7) {
        array_push($array2, $num);
      }
    }
    return $array2;
  } else {
    echo "Insira um array!";
  }
}
print_r(maiorQueSete($array));
?>