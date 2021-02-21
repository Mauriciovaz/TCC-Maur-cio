<?php 
require "../bd.php";

$id = $_GET['id'];

$sql = "DELETE FROM atividade WHERE id = $id";
if (mysqli_query($conexao, $sql)) {
	echo "<script> alert('Atividade deletada com sucesso'); window.location.href='lista_atividade.php'; </script>";
}else{
	echo "<script> alert('Erro ao deletar atividade'); window.location.href='lista_atividade.php'; </script>";
}
?>