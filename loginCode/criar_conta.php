<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar conta</title>
    <link rel="stylesheet" href="../styles/loginStyle.css">
</head>
<body>
<main id="formContainer">
<h1>Criar conta</h1>
<button onclick="darkMode()" id="darkModeButton">Dark Mode</button>
<form action="cadastro_usuario.php" method="post">
    <label for="email">Email </label>
    <input type="email" name="email" id="email">

    <label for="senha">Senha </label>
    <input type="password" name="senha" id="senha">

    <input type="submit" value="Criar conta">
    <a href="index.php">Voltar</a>
</form>
</main>
<script src="../scripts/script.js"></script>
</body>
</html>