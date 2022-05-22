<?php
// removendo tags html de um texto
$textoHtml = "<p> Meu nome.</p><div> uma div</div> <p>outro parágrafo</p>";

echo $textoHtml;

// sem as tags html
echo strip_tags($textoHtml);
