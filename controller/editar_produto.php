<?php
    include ('conexao.php');
    $id = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://kit.fontawesome.com/9ba2058a11.js" crossorigin="anonymous"></script>
    <title>Alterar Produto</title>
</head>
<body>
    <div class="container" id="tamanhoContainer">
        <h3 class="text-center my-5">Alterar Produto</h3>
        <form action="atualizar_produto.php" method="post">
            <?php 
                $sql = "SELECT * FROM estoque WHERE id_estoque = $id";
                $buscar = mysqli_query($conexao, $sql);

                while ($array = mysqli_fetch_array($buscar)) {
                    $id_estoque =           $array['id_estoque'];
                    $nroProduto =           $array['nroproduto'];
                    $nomeProduto =          $array['nomeproduto'];
                    $categoriaProduto =     $array['categoria'];
                    $qtdProduto =           $array['quantidade'];
                    $fornecedorProduto =    $array['fornecedor'];
                
            ?>
            <div class="form-group">
                <label for="IDnumeroProduto">Nro Produto</label>
                <input type="number" class="form-control" id="IDnumeroProduto" name="numeroProduto" value="<?php echo $nroProduto ?>" disabled>
                <input type="number" class="form-control" id="IDnumeroProduto" name="id" style="display: none" value="<?php echo $id ?>"> 
            </div>

            <div class="form-group">
                <label for="IDnomeProduto">Nome Produto</label>
                <input type="text" class="form-control" id="IDnomeProduto" name="nomeProduto" value="<?php echo $nomeProduto ?>">
            </div>

            <div class="form-group">
                <label for="IDqtdProduto">Quantidade</label>
                <input type="number" class="form-control" id="IDqtdProduto" name="qtdProduto" value="<?php echo $qtdProduto ?>">
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

            <button class="btn btn-success mt-5 btn-block font-weight-bold" type="submit">Alterar</button>
            <button class="btn btn-outline-danger btn-block">Voltar</button>

                <?php } ?>
        </form>
    </div>

    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    
</body>
</html>