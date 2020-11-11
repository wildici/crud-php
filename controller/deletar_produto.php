<?php

    include('conexao.php');

    $id = $_GET['id'];

    $sql = "DELETE FROM estoque WHERE id_estoque = $id";

    $deletar = mysqli_query($conexao, $sql);

    if($deletar) {
        header('Location: http://localhost/crud-php/view/listar_produtos.php');
    } else {
        echo ' Erro ao excluir produto! ';
    }