<?php

$ranking = [
  "Pedro" => 23,
  "Amanda" => 45,
  "Lucas" => 12,
  "Paula" => 17
];
// ordena o array associativo pelo valor em ordem do maior ao menor
arsort($ranking);
?>

<table border="1">
  <thead>
    <th>nome</th>
    <th>pontos</th>
  </thead>
  <?php foreach ($ranking as $nome => $pontos) : ?>
    <tr>
      <td><?= $nome ?></td>
      <td><?= $pontos ?></td>
    </tr>
  <?php endforeach ?>
</table>