<?php
include_once "backendFake.php";
?>

<h1>Seja bem-vindo ao nosso site</h1>
<p><?= $nome; ?> veja as nossas ofertas</p>

<h2>Confira nossos principais produtos</h2>


<!-- exibindo dados dinâmicos -->
<ul>
  <?php foreach ($produtos as $produto) : ?>
    <li><?= $produto; ?></li>
  <?php endforeach; ?>
</ul>