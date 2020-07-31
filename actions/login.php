<?php

require "../bd.php";
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];
$entrar = $_POST['entrar'];

if (isset($entrar)) {
           
    $verifica = mysqli_query($conexao,"SELECT * FROM cadastro WHERE email = 
    '$email' AND senha = '$senha'") or die("erro ao selecionar");
      if (mysqli_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('E-mail e/ou senha incorretos');window.location
        .href='../index.php';</script>";
        die();
      }else{
        $array = mysqli_fetch_array($verifica);
        if ($array['tipo'] == 'administrador') {
          header("Location: ../users/pagina_administrador.php");
        }
        if ($array['tipo'] == 'professor') {
          setcookie("nome",$array['nome']);
          header("Location: ../users/pagina_professor.php");
        }
        if ($array['tipo'] == 'aluno') {
          
          $_SESSION['nome'] = $array['nome'];
          $_SESSION['email'] = $email;
          header("Location: ../users/pagina_aluno.php");
        }
        
      }
  }

?>