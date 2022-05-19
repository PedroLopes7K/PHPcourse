<?php

// VARIAVELDE VARIAVEL

$x = 'Nome';
echo "$x <br>";


// essa variavel tem o nome igual ao valor da variavel de referencia, no caso 'Nome'
$$x = "Matheus";
// Nome = "Matheus"

echo "$Nome <br>";

// Outro exemplo

$b = 'pedroIdade';
$$b = 19;

echo "A idade de Pedro é $pedroIdade";
