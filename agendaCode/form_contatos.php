<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/loginStyle.css">
</head>
<body>
<main id="formContainer">
    <button onclick="darkMode()" id="darkModeButton">Dark Mode</button>
    <form action="cadastro_contato.php" method="post">
        <label for="nome_contato">Nome:</label>
        <input type="text" name="nome_contato" id="nome_contato" required>

        <label for="email_contato">Email:</label>
        <input type="email" name="email_contato" id="email_contato">

        <label for="telefone_contato">Telefone:</label>
        <input type="tel" name="telefone_contato" id="telefone_contato" pattern="^\(\d{2}\) \d{5}-\d{4}$" title="Por favor, informe o número no padrão (11) 11111-1111">

        <input type="submit" value="Adicionar contato">
    </form>
</main>
    <a href="agenda.php">Ir para a agenda de contatos</a>
    <script src="../scripts/script.js"></script>
</body>
</html>