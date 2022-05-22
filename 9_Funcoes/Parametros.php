<?php

// se um argumento e definido, ele precisa ser passado, se não resultará em erro.
function velocidadeMaxima($vel)
{
  if (is_int($vel) || is_float($vel)) {
    echo "O caaro tem a velocidade maxima de $vel km/h <br>";
  } else {
    echo "A velocidade precisar ser um numero! <br>";
  }
}
velocidadeMaxima(200);
velocidadeMaxima(167);
// causaria erro
// velocidadeMaxima()
$velocidade = 120;
velocidadeMaxima($velocidade);
// ignora parametro desnecessario
velocidadeMaxima($velocidade, "parametro2");
