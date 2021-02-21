<?php


session_start();
$email = $_SESSION['email'];


require "bd.php";

$sql = "DELETE FROM usuarios WHERE email='$email'";
$resultado = mysqli_query($conexao,$sql);

if ($resultado) {
	echo "<script> alert('Cadastro deletado com sucesso!'); window.location.href='../../../index.php' </script>";
}else{
	echo "<script> alert('Falha ao deletar cadastro!'); window.location.href='../../../users/pagina_aluno.php' </script>";
}

?>