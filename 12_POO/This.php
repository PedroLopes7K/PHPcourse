<?php

class Animal
{
  public $nome;
  function escolherNome($animaNome)
  {
    // referenciando nome pelo this
    $this->nome = $animaNome;
  }

  function latir()
  {
    return  "au au <br>";
  }

  function latirForte()
  {
    // referenciando uma funcao pelo this
    return strtoupper($this->latir());
  }
}

$dog = new Animal;
$dog->escolherNome('Brutos');
echo $dog->nome . "<br>";

echo $dog->latirForte();
