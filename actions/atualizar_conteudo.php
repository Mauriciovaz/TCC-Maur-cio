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
$conteudo = $_POST['conteudo'];

if (!empty($_POST['outro'])) {
        $outro = $_POST['outro'];
        $sql1 = "INSERT INTO conteudo (nome) VALUES ('$outro')";
        mysqli_query($conexao, $sql1);

        $sql2 = "SELECT id FROM conteudo WHERE nome = '$outro'";
        $resultado2 = mysqli_query($conexao, $sql2);
        $dados = mysqli_fetch_array($resultado2);
        $idconteudo = $dados['id'];
    }else{
        $idconteudo = $_POST['idconteudo'];
    }


$sql = "UPDATE materia SET id='$id', idconteudo = $idconteudo, conteudo='$conteudo' WHERE id=$id";

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


