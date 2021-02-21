<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
</head>
<body>

<?php

    require "../bd.php";
    
    $id = $_POST['id'];

    $questao = $_POST['questao'];

    $op1 = $_POST['op1'];
    $op2 = $_POST['op2'];
    $op3 = $_POST['op3'];
    $op4 = $_POST['op4'];
    $op5 = $_POST['op5'];

    $correta = $_POST['c1'];
    $feed = $_POST['feed'];
  
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

    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
    $novo_nome = md5(time()).$extensao;
    $diretorio = "../users/fotos/";

    if (empty($extensao)) {
      $novo_nome = 'empty';
    }

    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);

    
    $sql = "UPDATE atividade SET idconteudo=$idconteudo, questao='$questao', op1='$op1', op2='$op2', op3='$op3', op4='$op4', op5='$op5', correta=$correta, feed='$feed', foto='$novo_nome' WHERE id = $id ";
   $resultado = mysqli_query($conexao, $sql);

   if ($resultado) {
       echo "<script> alert('Atividade atualizada com sucesso');  window.location.href='../users/pagina_professor.php'; </script>";
   }else{
    echo mysqli_error($conexao);
   }
?>

</body>
</html>