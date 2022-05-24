<?php

trait Objeto
{
  public $propriedade = "Propriedade de Objeto";
  public function teste()
  {
    echo "Testando Trait de objeto <br>";
  }
}

trait Testando
{
  public function testando()
  {
    echo "Metodo da trait testando <br>";
  }
}

class Herdeiro
{
  // herdando tudo de objeto, assim como extends
  use Objeto;
  use Testando;
}

$x = new Herdeiro;
$x->teste();
$x->testando();
echo $x->propriedade;
