<?php

$nome = "Pedro Henrique";
?>


<form action="">

  <div>
    <!-- short ta usada para exibir conteudo php -->
    <input type="text" value="<?= $nome; ?>">
  </div>
  <div>
    <input type="submit" value="enviar">
  </div>
</form>