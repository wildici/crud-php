<?php

    include('conexao.php');
    //include('password.php');

    $nome = $_POST['nomeUsuario'];
    $email = $_POST['emailUsuario'];
    $senha = $_POST['senhaUsuario'];

    $sql = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

    $inserir = mysqli_query($conexao, $sql);

    if($inserir) {
        header('Location: http://localhost/crud-php/view/painel.php');
    } else {
        echo 'Erro ao cadastrar usuário';
    }