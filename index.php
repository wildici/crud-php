<?php include("controller/conexao.php");?>
<?php
    session_start();

    if (isset($_POST["usuario"])) {
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];

        $login = "SELECT * FROM usuario WHERE email = '$usuario' AND senha = '$senha'";
        $acesso = mysqli_query($conexao, $login);

        if (!$acesso) {
            die("Falha na consulta ao banco");
        }

        $informacao = mysqli_fetch_assoc($acesso);

        if (empty($informacao)) {
            $msg = "Login sem sucesso!";
        } else {
            $_SESSION["user_portal"] = $informacao["id_usuario"];
            header("location:view/painel.php");
        }
    }
?>
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
            <div class="text-center">
                <img src="assets/img/logoLogin.png" alt="..." width="100px" height="100px">
            </div>
            <div class="card-body">
            <h5 class="card-title mb-3">Digite seu e-mail e senha para acessar</h5>
                <form action="http://localhost/crud-php/index.php" method="post">
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" name="usuario" placeholder="E-mail" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" autocomplete="off">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                    <p class="font-weight-normal mt-3">Não tem uma conta? <a href="view/cadastrar_usuario.php">Cadastre-se</a> </p>
                </form>
            </div>
        </div>

    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    
</body>
</html>