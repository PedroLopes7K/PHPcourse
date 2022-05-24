<?php


class Pessoa
{

  public $nome;
  public $idade;
  public $nacionalidade;

  // os parametros recebidos iram preencher as propriedades do objeto
  function __construct($nome, $idade, $nacionalidade)
  {
    $this->nome = $nome;
    $this->idade = $idade;
    $this->nacionalidade = $nacionalidade;
  }
}

$pedro = new Pessoa('Pedro', 20, "Brasileiro");

echo "$pedro->nome tem $pedro->idade anos";
