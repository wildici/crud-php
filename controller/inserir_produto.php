<?php

include '';

$numeroProduto = $_POST['numeroProduto'];
$nomeProduto = $_POST['nomeProduto'];
$qtdProduto = $_POST['qtdProduto'];
$categoriaProduto = $_POST['categoriaProduto'];
$fornecedorProduto = $_POST['fornecedorProduto'];

$sql = "INSERT INTO 'estoque'('nroproduto', 'nomeproduto', 'categoria', 'quantidade', 'fornecedor') VALUES ($numeroProduto, '$nomeProduto', '$categoriaProduto', $qtdProduto, '$fornecedorProduto')";