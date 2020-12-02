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

    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
    $novo_nome = md5(time()).$extensao;
    $diretorio = "../users/fotos/";

    if (empty($extensao)) {
      $novo_nome = 'empty';
    }

    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);

    
    $sql = "INSERT INTO materia (titulo, conteudo, foto) VALUES ('$titulo', '$conteudo', '$novo_nome')";
   mysqli_query($conexao, $sql);

   if ($sql) {
    echo "<script>alert('Conteúdo salvo com sucesso'); window.location.href='../users/pagina_professor.php';</script>";
    }else{
  echo "<script>alert('Erro ao salvar'); window.location.href='../users/materia.php';</script>";
}

?>

</body>
</html>