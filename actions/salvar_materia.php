<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
</head>
<body>

<?php

    require "../bd.php";
    $titulo = $_POST['titulo'];
    $conteudo = $_POST['conteudo'];
    
    $sql = "INSERT INTO materia (titulo, conteudo) VALUES ('$titulo', '$conteudo')";
   mysqli_query($conexao, $sql);

   if ($sql) {
    echo "<script>alert('Conteúdo salvo com sucesso'); window.location.href='../users/pagina_professor.php';</script>";
    }else{
  echo "<script>alert('Erro ao salvar'); window.location.href='../users/materia.php';</script>";
}

?>

</body>
</html>