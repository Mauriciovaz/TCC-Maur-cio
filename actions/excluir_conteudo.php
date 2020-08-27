<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>

</body>
</html>
<?php
include "../bd.php";
$id = $_GET['id'];

$sql = "DELETE FROM materia WHERE id=$id";
$resultado = mysqli_query($conexao, $sql);

if ($resultado) {
	echo "<script>alert('Conteúdo excluido com sucesso!'); window.location.href='../users/lista_conteudo.php'; </script>";
}else{
	echo "<script>alert('Falha ao excluir conteúdo!'); window.location.href='../users/lista_conteudo.php'; </script>";
}
?>