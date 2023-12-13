<?php
include_once('config.php');
$email = $_POST['email'];
$senha = $_POST['senha'];

print_r('email: ' . $email);
print_r('<br>');
print_r('Senha: ' . $senha);

$sql = "SELECT * FROM professor WHERE email = '$email' and senha = '$senha'";

$result = $conexao->query($sql);

print_r($sql);
print_r($result);
?>