<?php

class Car
{
  // variaveis publicas podem ser acessadas fora do escopo do obj

  // propriedades definidas como public
  public $rodas = 4;
  public $aro = 20;
  // propriedades podem ser definidas em cada obj ao longo do código
  public $cor;

  function ligar()
  {
    echo "Carro ligado!";
  }
}

$gol = new Car;
$gol->rodas;
$gol->cor = "Cinza";
