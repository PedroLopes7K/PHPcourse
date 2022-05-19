<?php

echo NULL;

$nome = null;

if (is_null($nome)) {
  echo "Nome é nulo";
}

// reatribuindo valor
$nome = 'lucas';
if (is_null($nome)) {
  echo "Nome não é nulo";
}
