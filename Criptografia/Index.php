<?php
// UTILIZANDO BASE64
// com base64 podemos criptografar e descriptografar
$senha = "Pedro1234";

$novaSenha = base64_encode($senha);
echo "Base64: " . $novaSenha . "<br>";
echo "Sua senha é: " . base64_decode($novaSenha);

echo "<hr>";
echo "<br>";
// ,d5 e sha1 são criptografias de mão unica, podem apenas criptografar
echo "MD5: " . md5($senha) . "<br>";
echo "SHA1: " . sha1($senha) . "<br>";


echo "<hr>";
echo "<br>";
// PASSWORD HASH
// BEM MAIS SEGURO
$senha2 = "testando@123";

// pode receber um terceiro parametro opcional
$senhaSegura = password_hash($senha2, PASSWORD_DEFAULT);
echo "Sua senha: " . $senha2 . "<br>";
echo "Senha hash: " . $senhaSegura . "<br>";

// PARA REALIZAR COMPARAÇÃO NO BANCO
echo "<br>";

if (password_verify($senha2, $senhaSegura)) {
  echo "Senha válida!";
} else {
  echo "Senha invalida!";
}
