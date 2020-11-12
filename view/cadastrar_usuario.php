<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://kit.fontawesome.com/9ba2058a11.js" crossorigin="anonymous"></script>
    <title>Formulário de Cadastro</title>
</head>
<body>
    <div class="container" id="tamanhoContainer">
        <h3 class="text-center my-5">Cadastro Usuário</h3>
        <form action="../controller/inserir_usuario.php" method="post">

            <div class="form-group">
                <label for="nomeUsuario">Nome</label>
                <input type="text" class="form-control" id="nomeUsuario" name="nomeUsuario" placeholder="Digite seu nome de usuário" autofocus>
            </div>

            <div class="form-group">
                <label for="emailUsuario">E-mail</label>
                <input type="email" class="form-control" id="emailUsuario" name="emailUsuario" placeholder="Digite seu e-mail">
            </div>

            <div class="form-group">
                <label for="senhaUsuario">Senha</label>
                <input type="password" class="form-control" id="senhaUsuario" name="senhaUsuario" placeholder="Senha">
            </div>

            <div class="form-group">
                <label for="senhaUsuario2">Confirmar senha</label>
                <input type="password" class="form-control" id="senhaUsuario2" name="senhaUsuario2" placeholder="Confirmar senha">
                <small id="emailHelp" class="form-text text-muted">A senha deve ter entre 4 e 12 caracteres.</small>
            </div>

            <!-- 
            <div class="form-group">
                <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
             -->

            <button class="btn btn-primary mt-5 btn-block font-weight-bold" type="submit">Cadastrar</button>
            <a class="btn btn-outline-danger btn-block" href="http://localhost/crud-php/" role="button">Voltar</a>

        </form>
    </div>

    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    
</body>
</html>