<?php

//classe eo molde do objeto
class Pessoa
{

  // metodo são funçoes
  function falar()
  {
    echo "Olá pessoal!";
  }
}

// podemos definr as propriedades ao longo do codigo
$pedro = new Pessoa();

// adiciona propriedade ao objeto
$pedro->nome = "Pedro";

echo $pedro->nome;
echo "<br>";

$pedro->falar();
