<?php
    include("../controller/conexao.php");
    session_start();

    if (isset($_SESSION["user_portal"])) {
        $user = $_SESSION["user_portal"];
    }

    $buscar = "SELECT nome FROM usuario WHERE id_usuario = {$user}";

    $sql = mysqli_query($conexao, $buscar);

    if (!$sql) {
        header("location:../index.php");
    }

    $sql = mysqli_fetch_assoc($sql);
    $nome = $sql["nome"];
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

<nav class="navbar navbar-dark bg-primary">
    <div class="container">
  <span class="navbar-brand mb-0 h1">Olá <?php echo $nome; ?> </span>
  
  <a href="../controller/logout.php"><span class="navbar-brand mb-0 h1"><i class="fas fa-power-off"></i></span></a> 
  </div>
</nav>

    <div class="container">
        <h3 class="text-center my-5">O que iremos fazer?</h3>
        <div class="row text-center">
            <div class="col-sm-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Adicionar Produto</h5>
                    <p class="card-text">Opção para cadastrar um novo produto no estoque.</p>
                    <a href="cadastrar_produto.php" class="btn btn-primary btn-lg"><i class="fas fa-plus-circle"></i></a>
                </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Procurar produto</h5>
                    <p class="card-text">Opção para procurar um produto no estoque.</p>
                    <a href="listar_produtos.php" class="btn btn-success btn-lg"><i class="fas fa-search"></i></a>
                </div>
                </div>
            </div>
            </div>

    </div>

    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    
</body>
</html>