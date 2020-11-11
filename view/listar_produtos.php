<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <script src="https://kit.fontawesome.com/9ba2058a11.js" crossorigin="anonymous"></script>
    <title>Listagem de Produtos</title>
</head>
<body>
    <div class="container">
    <h3 class="text-center my-5">Lista de Produtos</h3>
    <div class="table-responsive">
        <table class="table table-bordered text-center">
            <thead>
                <tr class="bg-primary text-light">
                <th scope="col">Nro</th>
                <th scope="col">Nome</th>
                <th scope="col">Categoria</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Fornecedor</th>
                <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php 
                        include ('../controller/conexao.php');
                        $sql = "SELECT * FROM estoque";
                        $busca = mysqli_query($conexao, $sql);

                        while ($array = mysqli_fetch_array($busca)) {
                            $id_estoque =           $array['id_estoque'];
                            $nroProduto =           $array['nroproduto'];
                            $nomeProduto =          $array['nomeproduto'];
                            $categoriaProduto =     $array['categoria'];
                            $qtdProduto =           $array['quantidade'];
                            $fornecedorProduto =    $array['fornecedor'];
                        
                    ?>
                    <tr>
                        <td><?php echo $nroProduto ?></td>
                        <td><?php echo $nomeProduto ?></td>
                        <td><?php echo $categoriaProduto ?></td>
                        <td><?php echo $qtdProduto ?></td>
                        <td><?php echo $fornecedorProduto ?></td>
                        <td>
                            <a class="btn btn-warning btn-sm text-light my-2" href="../controller/editar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="fas fa-pen"></i></a>
                            <a class="btn btn-danger btn-sm text-light" href="../controller/deletar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                        <?php 
                            }
                        ?>

                </tr>
                
            </tbody>
        </table>
    </div>
        <a class="btn btn-outline-danger my-3" href="http://localhost/crud-php/" role="button">Voltar</a>
    </div>

    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/jquery-3.5.1.min.js"></script>
    
</body>
</html>