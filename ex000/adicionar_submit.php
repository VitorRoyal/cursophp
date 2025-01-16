<?php
include 'contato.class.php';
$contato = new Contato();

if(!empty($_POST['email'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    if($contato->criarContato($email, $nome)){
        header("Location: index.php");
    } else {
        echo "Email já existe!";
    }
} else {
    header("Location: index.php");
}
?>