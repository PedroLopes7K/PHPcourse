<?php
function retornaDados($nome, $idade)
{
  $nome = "Olá $nome";
  $idade = "$idade anos";

  return [$nome, $idade];
}

$retorno = retornaDados('Pedro', 20);
print_r($retorno);
echo "<br>";

echo "$retorno[0] você tem $retorno[1]";
