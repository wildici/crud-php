<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Formulário de Cadastro</title>
</head>
<body>
    <div class="container" id="tamanhoContainer">
        <h3 class="text-center my-5">Formulário de Cadastro</h3>
        <form action="/controller/inserir_produto.php" method="post">

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
                    <option value="">Selecione...</option>
                    <option value="periferico">Periférico</option>
                    <option value="hardware">Hardware</option>
                    <option value="celulares">Celulares</option>
                </select>
            </div>

            <div class="form-group">
                <label for="IDfornecedorProduto">Fornecedor</label>
                <select class="form-control" id="IDfornecedorProduto" name="fornecedorProduto">
                    <option value="">Selecione...</option>
                    <option value="fornecedorA">Fornecedor A</option>
                    <option value="fornecedorB">Fornecedor B</option>
                    <option value="fornecedorC">Fornecedor C</option>
                </select>
            </div>

            <!-- 
            <div class="form-group">
                <label for="exampleFormControlFile1">Example file input</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
             -->

            <button class="btn btn-primary mt-5 btn-block font-weight-bold" type="submit">Cadastrar</button>
            <button class="btn btn-danger btn-block">Voltar</button>

        </form>
    </div>

    <script src="js/bootstrap.min.js"></script>
    
</body>
</html>