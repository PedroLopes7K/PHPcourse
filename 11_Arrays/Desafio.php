<?php

$pessoas = [
  "Pedro" => 20,
  "Matheus" => 19,
  "Lucas" => 23,
  "Paulo" => 30
];

?>

<table border="1">
  <tr>
    <th>Nome</th>
    <th>Idade</th>
  </tr>
  <?php foreach ($pessoas as $pessoa => $idade) :  ?>
    <tr>
      <td><?= $pessoa ?></td>
      <td><?= $idade ?></td>
    </tr>

  <?php endforeach; ?>
</table>