<?php

include ('conexao.php');

$numeroProduto = $_POST['numeroProduto'];
$nomeProduto = $_POST['nomeProduto'];
$qtdProduto = $_POST['qtdProduto'];
$categoriaProduto = $_POST['categoriaProduto'];
$fornecedorProduto = $_POST['fornecedorProduto'];

$sql = "INSERT INTO estoque (nroproduto, nomeproduto, categoria, quantidade, fornecedor) VALUES ($numeroProduto, '$nomeProduto', '$categoriaProduto', $qtdProduto, '$fornecedorProduto')";

$inserir = mysqli_query($conexao, $sql);

if($inserir) {
    header('Location: http://localhost/crud-php/view/listar_produtos.php');
} else {
    echo 'Erro ao cadastrar produto';
}