<?php
    session_start();

    if (!isset($_SESSION["user_portal"])) {
        header("location:../index.php");
    }
?>


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
        <form action="../controller/atualizar_usuario.php" method="post">
            <div class="form-group">
                <label for="nomeUsuario">Nome</label>
                <input type="text" class="form-control" id="nomeUsuario" name="nomeUsuario" value="<?php echo $_SESSION["user_nome"]; ?>">
                <input type="text" class="form-control" id="id" name="id" style="display: none" value="<?php echo $_SESSION["user_portal"]; ?>">
            </div>

            <div class="form-group">
                <label for="emailUsuario">E-mail</label>
                <input type="email" class="form-control" id="emailUsuario" name="emailUsuario" value="<?php echo $_SESSION["user_email"]; ?>">
            </div>

            <div class="form-group">
                <label for="senhaUsuario">Senha antiga</label>
                <input type="password" class="form-control" id="senhaUsuario" name="senhaUsuario" placeholder="Senha antiga">
            </div>

            <div class="form-group">
                <label for="senhaUsuario2">Nova senha</label>
                <input type="password" class="form-control" id="senhaUsuario2" name="senhaUsuario2" placeholder="Nova senha">
            </div>

            <div class="form-group">
                <label for="senhaUsuario2">Confirmar nova senha</label>
                <input type="password" class="form-control" id="novaSenha2" name="novaSenha2" placeholder="Confirmar nova senha">
                <small id="emailHelp" class="form-text text-muted">Lembrando que a senha precisa ter entre 4 e 12 caracteres.</small>
            </div>

            <!-- 
            <div class="form-group">
                <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
             -->

            <button class="btn btn-success mt-5 btn-block font-weight-bold" type="submit">Cadastrar</button>
            <a class="btn btn-outline-danger btn-block" href="http://localhost/crud-php/view/painel.php" role="button">Voltar</a>
        </form>
    </div>

    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    
</body>
</html>