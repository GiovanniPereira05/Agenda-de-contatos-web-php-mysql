<?php
session_start();

if (!isset($_SESSION['id_usuario'])) {
    header("Location: ../loginCode/tela_de_login.php");
    exit();
}

include "database.php";

$id_usuario = $_SESSION['id_usuario'];

if (isset($_POST["pesquisa"])){
            $pesquisa = $_POST["pesquisa"];
            $sql_listar_contatos = "SELECT * FROM contatos WHERE id_usuario = '$id_usuario' AND nome LIKE '%$pesquisa%'";
} else{
    $sql_listar_contatos = "SELECT * FROM contatos WHERE id_usuario = '$id_usuario'";
}

$resultado = mysqli_query($conexao, $sql_listar_contatos);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contatos</title>
    <link rel="stylesheet" href="../styles/agendaStyle.css">
</head>
<body>
    <form action="" method="post">
    <input type="text" name="pesquisa" id="pesquisa">
    <input type="submit" value="Pesquisar">
    </form>
<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th></th>
            <th></th>
        </tr>
        </thead>
    <tbody>
        <?php while($dados = mysqli_fetch_assoc($resultado)): ?>
        <tr>
            <td><?php echo $dados["nome"]; ?> </td>
            <td><?php echo $dados["email"]; ?> </td>
            <td><?php echo $dados["telefone"]; ?> </td>
            <td><a class="edit_delete" href="excluir_contato.php?id=<?php echo $dados['id']; ?>" onclick="return confirm('Tem certeza que deseja excluir?');">Excluir</a></td>
            <td><a class="edit_delete" href="editar_contato.php?id=<?php echo $dados['id']; ?>">Editar</a></td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>
    <a href="form_contatos.php">Formulario</a>
    <a href="../loginCode/index.php">Voltar pra tela de login</a>
</body>
</html>