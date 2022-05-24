<?php

class Humano
{
  // constantens não podem ser alteradas durante o programa 
  // não precisam de cifrão
  public const Olhos = 2;
  public const pernas = 2;


  function mostrarConstante()
  {
    // usamos o self ao inves do this
    echo self::Olhos . "<br>";
  }
}

$pedro = new Humano;

// sintaex para acessar constante
echo $pedro::Olhos;
