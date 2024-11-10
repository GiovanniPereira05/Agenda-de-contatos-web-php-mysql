<?php 

include "database.php";

$nome_contato = $_POST["nome_contato"];
$email_contato = $_POST["email_contato"];
$telefone_contato = $_POST["telefone_contato"];

$sql_insert = "INSERT INTO contatos (nome, email, telefone) VALUES ('$nome_contato', '$email_contato', '$telefone_contato')";


if (mysqli_query($conexao, $sql_insert)){
    header("Location: agenda.php");
}
else{
    echo "Erro ao adicionar o contato";
}