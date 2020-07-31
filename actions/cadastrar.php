<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
</head>
<body>

<?php

    require "../bd.php";
    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $tipo = 'aluno';
    
    $extensao = strtolower(substr($_FILES['foto']['name'], -4));
    $novo_nome = md5(time()).$extensao;
    $diretorio = "../fotos/";
    
  move_uploaded_file($_FILES['foto']['tmp_name'], $diretorio.$novo_nome);
    $sql = "INSERT INTO cadastro (tipo, email, nome, senha,foto) VALUES ('$tipo', '$email', '$nome', '$senha', '$novo_nome')";
   mysqli_query($conexao, $sql);

   if ($sql) {
    echo "<script>alert('Usuário cadastrado com sucesso'); window.location.href='../index.php';</script>";
    }else{
  echo "<script>alert('Erro ao cadastrar'); window.location.href='../cadastro.php';</script>";
}

?>

</body>
</html>

