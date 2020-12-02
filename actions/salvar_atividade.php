<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
</head>
<body>

<?php

    require "../bd.php";
    $conteudo = $_POST['conteudo'];

    $questao1 = $_POST['q1'];
    $questao2 = $_POST['q2'];
    $questao3 = $_POST['q3'];

    $op1q1 = $_POST['op1q1'];
    $op2q1 = $_POST['op2q1'];
    $op3q1 = $_POST['op3q1'];
    $op4q1 = $_POST['op4q1'];
    $op5q1 = $_POST['op5q1'];

    $op1q2 = $_POST['op1q2'];
    $op2q2 = $_POST['op2q2'];
    $op3q2 = $_POST['op3q2'];
    $op4q2 = $_POST['op4q2'];
    $op5q2 = $_POST['op5q2'];

    $op1q3 = $_POST['op1q3'];
    $op2q3 = $_POST['op2q3'];
    $op3q3 = $_POST['op3q3'];
    $op4q3 = $_POST['op4q3'];
    $op5q3 = $_POST['op5q3'];

    $correta1 = $_POST['c1'];
    $correta2 = $_POST['c2'];
    $correta3 = $_POST['c3'];

    $feed1 = $_POST['feed1'];
    $feed2 = $_POST['feed2'];
    $feed3 = $_POST['feed3'];

    
    $sql = "INSERT INTO atividade (conteudo, questao1, questao2, questao3, op1q1,op2q1,op3q1,op4q1,op5q1, op1q2, op2q2, op3q2, op4q2, op5q2, op1q3, op2q3, op3q3, op4q3, op5q3, correta1, correta2, correta3, feed1, feed2, feed3) VALUES ('$conteudo', '$questao1', '$questao2', '$questao3', '$op1q1', '$op2q1', '$op3q1', '$op4q1', '$op5q1', '$op1q2', '$op2q2', '$op3q2', '$op4q2', '$op5q2', '$op1q3', '$op2q3', '$op3q3', '$op4q3', '$op5q3', $correta1, $correta2, $correta3, '$feed1', '$feed2', '$feed3')";
   mysqli_query($conexao, $sql);

   if ($sql) {
       echo "<script> alert('Atividade registrada com sucesso');  window.location.href='../users/pagina_professor.php'; </script>";
   }else{
    echo "<script> alert('Falha ao salvar atividade');  window.location.href='../users/adicionar_atividade'; </script>";
   }
?>

</body>
</html>