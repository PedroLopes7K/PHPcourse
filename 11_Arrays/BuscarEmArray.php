<?php

// verifica se um item está presente no array
$array = ["Banana", "abacate", "laranja"];

if (in_array("Banana", $array)) {
  echo "O item está no array";
} else {
  echo "O item não está no array";
}
