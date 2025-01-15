<?php
include 'contato.class.php';
$contato = new Contato();

if(!empty($_GET['id'])){
    $id = $_GET['id'];

    $info = $contato->getContatoEspecifico($id);

    if(empty($info['email'])){
        header("Location: index.php");
        exit;
    }
} else {
    header("Location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar Contato</h1>

    <form method="POST" action="editar_submit.php">
        <input type="hidden" name="id" value="<?php echo $info['id']; ?>" />

        Nome:<br/>
        <input type="text" name="nome" value="<?php echo $info['nome']; ?>" /><br/><br/>

        Email:<br/>
        <?php echo $info['email']; ?><br/><br/>

        <input type="submit" value="Salvar Alterações" />

        <button class="container_botao"><a href="index.php">Voltar</a></button>
    </form>
</body>
</html>

