<?php

include "database.php";

$id_contato = $_GET["id"];

$sql_select_id = "SELECT * FROM contatos WHERE id = $id_contato";

$resultado_consulta_id = mysqli_query($conexao, $sql_select_id);

$dados_id = mysqli_fetch_assoc($resultado_consulta_id);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de edição de contato</title>
</head>
<body>
    <form action="cadastro_contato.php" method="post">
        <label for="nome_contato">Nome:</label>
        <input type="text" name="nome_contato" id="nome_contato" value="<?php echo $dados_id["nome"]?>">
        <label for="email_contato">Email:</label>
        <input type="email" name="email_contato" id="email_contato" value="<?php echo $dados_id["email"]?>">
        <label for="telefone_contato">Telefone:</label>
        <input type="tel" name="telefone_contato" id="telefone_contato" pattern="^\(\d{2}\) \d{5}-\d{4}$" title="Por favor, informe o número no padrão (11) 11111-1111" value="<?php echo $dados_id["telefone"]?> ">
        <input type="submit" value="Adicionar contato">
    </form>
    <a href="agenda.php">agenda.php</a>
</body>
</html>