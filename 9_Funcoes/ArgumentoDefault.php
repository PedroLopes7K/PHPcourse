<?php

// se nenhum parametro for passado, o default será usado
function teste($a = 'Teste')
{

  echo "O valor de a é $a <br>";
}
teste();
teste('Nome');

echo "<br>";
echo "<br>";

function teste2($nome, $sobrenome = 'Lopes')
{
  // retorna os argumentos da função
  print_r(func_get_args());
  echo "<br>";
  // retorna o numero de argumentos da função
  echo func_num_args() . "<br>";
  echo "Meu nome é $nome $sobrenome";
}
teste2('Pedro', 'Henrique');
