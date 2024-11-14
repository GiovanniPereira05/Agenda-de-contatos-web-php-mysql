<?php

    include "../agendaCode/database.php";

    $email_usuario = $_POST['email'];
    $senha_usuario = $_POST['senha'];

    $senha_hash = password_hash($senha_usuario, PASSWORD_DEFAULT);

    $sql_insert_usuarios = "INSERT INTO usuarios (email, senha) VALUES ('$email_usuario', '$senha_hash')";

    if (mysqli_query($conexao, $sql_insert_usuarios)){
        header("location: tela_de_login.php"); 
    } 
    else{
        echo "Erro ao cadastrar";
    }
