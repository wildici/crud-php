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
        <h3 class="text-center my-5">Formulário de Cadastro</h3>
        <form action="../controller/inserir_produto.php" method="post">

            <div class="form-group">
                <label for="IDnumeroProduto">Nro Produto</label>
                <input type="number" class="form-control" id="IDnumeroProduto" name="numeroProduto" placeholder="Insira o número do produto" autofocus>
            </div>

            <div class="form-group">
                <label for="IDnomeProduto">Nome Produto</label>
                <input type="text" class="form-control" id="IDnomeProduto" name="nomeProduto" placeholder="Insira o nome do produto">
            </div>

            <div class="form-group">
                <label for="IDqtdProduto">Quantidade</label>
                <input type="number" class="form-control" id="IDqtdProduto" name="qtdProduto" placeholder="Insira a quantidade de produto(s)">
            </div>

            <div class="form-group">
                <label for="IDcategoriaProduto">Categoria</label>
                <select class="form-control" id="IDcategoriaProduto" name="categoriaProduto">
                    <option value="">Selecione ...</option>
                    <option value="Periférico">Periférico</option>
                    <option value="Hardware">Hardware</option>
                    <option value="Smartphone">Smartphone</option>
                </select>
            </div>

            <div class="form-group">
                <label for="IDfornecedorProduto">Fornecedor</label>
                <select class="form-control" id="IDfornecedorProduto" name="fornecedorProduto">
                    <option value="">Selecione ...</option>
                    <option value="Fornecedor A">Fornecedor A</option>
                    <option value="Fornecedor B">Fornecedor B</option>
                    <option value="Fornecedor C">Fornecedor C</option>
                </select>
            </div>

            <!-- 
            <div class="form-group">
                <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
             -->

            <button class="btn btn-primary mt-5 btn-block font-weight-bold" type="submit">Cadastrar</button>
            <a class="btn btn-outline-danger btn-block" href="http://localhost/crud-php/view/painel.php" role="button">Voltar</a>

        </form>
    </div>

    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    
</body>
</html>