<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://kit.fontawesome.com/9ba2058a11.js" crossorigin="anonymous"></script>
    <title>Tela de Login</title>
</head>
<body>
    
        <div class="card text-center" id="telaLogin">
            <img src="assets/img/logoLogin.png" alt="..." width="100px" height="100px">
            <div class="card-body">
            <h5 class="card-title">Digite seu e-mail e senha para acessar</h5>
                <form>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="usuario" placeholder="E-mail" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" autocomplete="off">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                    <p class="font-weight-normal mt-3">Não tem uma conta? <a href="http://localhost/crud-php/view/cadastrar_usuario.php">Cadastre-se</a> </p>
                </form>
            </div>
        </div>

    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    
</body>
</html>