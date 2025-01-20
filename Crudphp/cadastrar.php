<?php
include 'contato.class.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

    if (!empty($email) && !empty($nome)) {
        $contato = new Contato();
        $contato->criarContato($email, $nome); // Método a ser criado na classe Contato
        header('Location: index.php');
    } else{
        header('Location: index.php');
    }
}
?>