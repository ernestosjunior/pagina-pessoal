<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$mensagem = $_POST['mensagem'];

$to = 'ernesto.sjunior@hotmail.com';
$subject = 'Nova Mensagem - Site';
$message = "Nome: $nome  \n E-mail: $email \n Telefone: $tel \n \n Mensagem: $mensagem \n";

mail($to, $subject, $message);
?>
