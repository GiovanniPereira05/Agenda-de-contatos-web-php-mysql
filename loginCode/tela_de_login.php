<?php

include "../agendaCode/database.php";
session_start();

if (isset($_POST['email']) && isset($_POST['senha'])) {
    $email_usuario = $_POST['email'];
    $senha_usuario = $_POST['senha'];

    $sql_select_usuario = "SELECT * FROM usuarios WHERE email = '$email_usuario'";
    $resultado = mysqli_query($conexao, $sql_select_usuario);

    if (mysqli_num_rows($resultado) > 0) {
        $dados_usuario = mysqli_fetch_assoc($resultado);

        if (password_verify($senha_usuario, $dados_usuario['senha'])) {
            $_SESSION['id_usuario'] = $dados_usuario['id']; 

            header("Location: ../agendaCode/agenda.php");
            exit();
        } else {
            echo "Senha incorreta!";
        }
    } else {
        echo "Usuário não encontrado!";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../styles/loginStyle.css">
</head>

<body>
    <main id="formContainer">
        <form action="" method="post">
            <label for="email">Email </label>
            <input type="email" name="email" id="email" required>

            <label for="senha">Senha</label>
            <input type="password" name="senha" id="senha" required>

            <input type="submit" value="Logar">
            <a href="criar_conta.php">Criar conta</a>
            <a href="">Esqueci minha senha</a>
        </form>
    </main>
</body>

</html>