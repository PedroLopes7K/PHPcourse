<?php
// include once e require once podem ser adicionados apenas umavez
include_once "teste2.php";
include_once "teste2.php";
?>

<p>Testando Código</p>

<?php
// eles não geram erros, apenas não exibem o arquivo novamente
require_once "teste.php";
require_once "teste.php";
?>