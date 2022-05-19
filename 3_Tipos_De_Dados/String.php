<?php
echo "Texto aspas duplas <br>";
echo 'texto aspas simples <br>';
echo "Ele disse 'olá' <br>";
echo 'Ele disse "olá" <br>';

$idade = 20;

// aspas duplas concatenam variaveis, aspas simples não
echo "Ele tem $idade anos <br>";
echo 'Ele tem $idade anos <br>';

$nome = "Pedro";
if (is_string($idade)) {
  echo "É uma string 1";
}
if (is_string($nome)) {
  echo "É uma string 2";
}
