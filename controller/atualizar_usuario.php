<?php

    include('conexao.php');

    $id      =   $_POST['id'];
    $nome    =   $_POST['nomeUsuario'];
    $email   =   $_POST['emailUsuario'];
    $senha   =   $_POST['novaSenha2'];

    $sql = "UPDATE usuario SET nome='$nome', email='$email', senha='$senha' WHERE id_usuario = $id";

    $atualizar = mysqli_query($conexao, $sql);

    if($atualizar) {
        $_SESSION["user_nome"] = $nome;
        header('Location: http://localhost/crud-php/view/painel.php');
    } else {
        echo ' Erro ao alterar usuário! ';
    }