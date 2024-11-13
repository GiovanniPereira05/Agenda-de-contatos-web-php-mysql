<?php

include "database.php";

$sql_listar = "SELECT * FROM contatos";
$resultado = mysqli_query($conexao, $sql_listar);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
        </tr>
    </thead>
    <tbody>
        <?php while($dados = mysqli_fetch_assoc($resultado)): ?>
        <tr>
            <td><?php echo $dados["nome"]; ?> </td>
            <td><?php echo $dados["email"]; ?> </td>
            <td><?php echo $dados["telefone"]; ?> </td>
            <td><a href="excluir_contato.php?id=<?php echo $dados['id']; ?>" onclick="return confirm('Tem certeza que deseja excluir?');">Excluir</a></td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>
    <a href="form_contatos.php">formulario</a>
</body>
</html>


<!-- INSERT INTO `contatos` (`id`, `nome`, `email`, `telefone`) VALUES (NULL, 'Giovanni', 'Giovanni@gmail.com', '12345678'); -->