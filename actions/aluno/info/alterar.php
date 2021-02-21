<?php

echo '<meta charset="UTF-8">';

include "bd.php";
session_start();

$email = $_SESSION['email'];
$nome = $_POST['nome'];
$senha = $_POST['senha'];
$foto1 = $_POST['foto1'];
$sql = "SELECT * FROM usuarios WHERE email='$email'";
   $resultado = mysqli_query($conexao,$sql);
   if (mysqli_num_rows($resultado) > 0) {
     while ($linha = mysqli_fetch_array($resultado)) {

     	if($foto1 != $linha['foto']){

     		$extensao = strtolower(substr($_FILES['foto']['name'], -4));
			$novo_nome = md5(time()).$extensao;
			$diretorio = "../../../fotos/";

  			move_uploaded_file($_FILES['foto']['tmp_name'], $diretorio.$novo_nome);

     	}else{
     		$novo_nome = $foto1;
     	}
       
    }
}

    $sql = " UPDATE usuarios SET nome='$nome', senha='$senha', foto='$novo_nome' WHERE email='$email' ";

$resultado = mysqli_query($conexao,$sql);

if ($resultado) {
	echo "<script> alert('Informações alteradas com sucesso. Favor, fazer login novamente.'); window.location.href='../../../index.php'; </script>";
}
else{
	echo "<script> alert('Erro ao alterar'); window.location.href='../../../index.php'; </script>";
}

?>