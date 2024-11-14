<?php 

session_start();

include "database.php";

if (!isset($_SESSION['user_id'])) {
    header("Location: tela_de_login.php");
    exit();
}

$id_usuario = $_SESSION['id_usuario'];
$nome_contato = $_POST["nome_contato"];
$email_contato = $_POST["email_contato"];
$telefone_contato = $_POST["telefone_contato"];


$sql_insert_contatos = "INSERT INTO contatos (nome, email, telefone, id_usuario) VALUES ('$nome_contato', '$email_contato', '$telefone_contato', '$id_usuario')";

if (mysqli_query($conexao, $sql_insert_contatos)){
    header("Location: agenda.php");
}
else{
    echo "Erro ao adicionar o contato";
}