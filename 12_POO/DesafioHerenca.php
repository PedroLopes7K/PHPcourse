<?php

class Humano
{
  public $sexo = "Masculino";
  public $idade = 20;

  function Falar()
  {
    echo "Eu sou um Humano <br>";
  }
}

class Professor extends Humano
{
  public $profissao = "Professor";

  function minhaProfissao()
  {
    echo "Eu sou um " . $this->profissao . "<br>";
  }

  function getFalar()
  {
    echo "Também sou ";
    $this->Falar();
  }
}

$pedro = new Humano;
$pedro->Falar();
$Lucas = new Professor;
$Lucas->minhaProfissao();
$Lucas->getFalar();
