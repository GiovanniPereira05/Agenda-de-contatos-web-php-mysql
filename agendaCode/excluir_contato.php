<?php 

include "database.php";

$id_contato = $_GET["id"];
$sql_excluir_por_id = "DELETE FROM contatos WHERE id = $id_contato";

if (mysqli_query($conexao, $sql_excluir_por_id)){
    header("Location: agenda.php");
}
else{
    echo "Erro";
}
