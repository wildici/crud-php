<?php

    include('conexao.php');

    $id                 =   $_POST['id'];
    $nomeProduto        =   $_POST['nomeProduto'];
    $qtdProduto         =   $_POST['qtdProduto'];
    $categoriaProduto   =   $_POST['categoriaProduto'];
    $fornecedorProduto  =   $_POST['fornecedorProduto'];

    $sql = "UPDATE estoque SET nomeproduto='$nomeProduto', categoria='$categoriaProduto', quantidade=$qtdProduto, fornecedor='$fornecedorProduto' WHERE id_estoque = $id";

    $atualizar = mysqli_query($conexao, $sql);

    if($atualizar) {
        header('Location: http://localhost/crud-php/view/listar_produtos.php');
    } else {
        echo ' Erro ao alterar produto! ';
    }