<?php
include 'contato.class.php';

$contato = new Contato();

$contato->criarContato("teste", "teste@email.com")

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="./assets/js/main.js"></script>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Site teste de contatos</title>
</head>
<body>
    <div class="container">
        <div class="d-flex align-items-center mt-5 bg-secondary p-3 rounded">
            <h1 class="me-3">Contatos</h1>
            <a href="adicionar.php" class="btn btn-primary btn-sm text-white modal_ajax">Adicionar</a>
        </div>

        <table class="table table-striped table-bordered table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Ações</th>
                </tr>
            </thead>    

            <?php
            $lista = $contato->getAll();
            foreach($lista as $item):
            ?>
            <tr>
                <td><?php echo $item['id']; ?></td>
                <td><?php echo $item['nome']; ?></td>
                <td><?php echo $item['email']; ?></td>
                <td>
                <a href="editar.php?id=<?php echo $item['id']; ?>" class="btn btn-primary btn-sm modal_ajax text-white me-2">Editar</a>
                <a href="excluir.php?id=<?php echo $item['id']; ?>" class="btn btn-danger btn-sm text-white">Excluir</a>

                </td>
            </tr>

            <?php endforeach; ?>

        </table>

        <div class="modal_bg">
            <div class="modal_teste">

            </div>
        </div>
    </div>            
</body>
</html>
