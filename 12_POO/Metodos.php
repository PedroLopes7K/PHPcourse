<?php

use Pessoa as GlobalPessoa;

class Pessoa
{

  function falar()
  {
    echo "Boa tarde! <br>";
  }

  function somar($a, $b)
  {
    echo $a + $b . "<br>";
  }
}
$pedro = new Pessoa;
$pedro->falar();
$lucas = new Pessoa;
$lucas->somar(4, 7);
