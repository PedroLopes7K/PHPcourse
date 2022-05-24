<?php

interface Caracteristicas
{
  // todos os metodos e atributos da interface são obrigatorios de existirem nas classes que vão usala 
  public function falar();

  const nome = "Matheus";
}

class Humano implements Caracteristicas
{
  public $idade = 30;
  public function falar()
  {
    echo "Olá interface <br>";
  }
  public function dizeNome()
  {
    echo "Eu sou o " . self::nome . "<br>";
  }
}

$matheus = new Humano;
$matheus->falar();
$matheus->dizeNome();
