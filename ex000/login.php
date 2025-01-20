<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-lg p-4" style="width: 100%; max-width: 400px;">
            <h3 class="text-center mb-4">Login</h3>
            <form>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Digite seu email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="password" placeholder="Digite sua senha">
                </div>
                    <a href="index.php" class="btn btn-primary w-100 text-decoration-none">Entrar</a>
                <div class="text-center mt-3">
                    <button type="button" class="btn btn-link text-decoration-none" data-bs-toggle="modal" data-bs-target="#registerModal">Cadastrar-se</button>
                </div>
            </form>

            <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="registerModalLabel">Cadastre-se</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="cadastrar.php" method="POST">
                                <div class="mb-3">
                                    <label for="registerNome" class="form-label">Nome</label>
                                    <input type="text" class="form-control" id="registerNome" name="nome" placeholder="Digite o nome" required>
                                </div>
                                <div class="mb-3">
                                    <label for="registerEmail" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="registerEmail" name="email" placeholder="Digite o email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="registerSenha" class="form-label">Senha</label>
                                    <input type="password" class="form-control" id="registerSenha" name="senha" placeholder="Digite a senha" required>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
