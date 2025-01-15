<?php
include 'contato.class.php';
$contato = new Contato();

if(!empty($_POST['id'])){
    $nome = $_POST['nome'];
    $id = $_POST['id'];

    $contato->atualizaContato($nome ,$id);

    header("Location: index.php");
}