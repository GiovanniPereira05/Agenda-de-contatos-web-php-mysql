<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cadastro_contato.php" method="post">
        <label for="nome_contato">Nome:</label>
        <input type="text" name="nome_contato" id="nome_contato">
        <label for="email_contato">Email:</label>
        <input type="email" name="email_contato" id="email_contato">
        <label for="telefone_contato">Telefone:</label>
        <input type="tel" name="telefone_contato" id="telefone_contato">
        <input type="submit" value="Adicionar contato">
    </form>

    <a href="agenda.php">agenda.php</a>
</body>
</html>