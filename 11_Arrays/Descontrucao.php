<?php

// DESCONSTRUIR UM ARRAY
$pessoa = ["Pedro", 19, "programador"];

list($nome, $idade, $profissao) = $pessoa;

echo $nome . "<br>";
echo $idade . "<br>";
echo $profissao . "<br>";
