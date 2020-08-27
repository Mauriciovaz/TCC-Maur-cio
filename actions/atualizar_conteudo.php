<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>


<?php


include "../bd.php";

$id= $_POST['id'];
$titulo = $_POST['titulo'];
$conteudo = $_POST['conteudo'];


$sql = "UPDATE materia SET id='$id', titulo='$titulo', conteudo='$conteudo' WHERE id=$id";

$resultado = mysqli_query($conexao,$sql);

mysqli_close($conexao);
if ($resultado) {
	header("Location: ../users/pagina_professor.php");
}
else{
	echo "erro";
}

?>


</body>
</html>


