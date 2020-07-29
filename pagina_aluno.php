<!DOCTYPE html>
<html>
<head>
	<title>Página aluno</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="js/jquery-3.4.1.js"> </script>
  	<script type="text/javascript" src="js/materialize.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="layout.css">
</head>
<body>
<script type="text/javascript">
  $(document).ready(function(){
    $('.sidenav').sidenav();
  });
</script>
<?php

session_start();

require "bd.php";

$email = $_SESSION['email'];

$sql = "SELECT * FROM cadastro WHERE email = '$email'";
$foto = mysqli_query($conexao, $sql);
if(mysqli_num_rows($foto) > 0){ 
while ($dados = mysqli_fetch_array($foto)) { 

$resultFoto = $dados['foto'];
?>
 <nav>
    <div class="nav-wrapper #1976d2 blue darken-2">

    <div class="brand-logo center"> Logo </div>

      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="#" data-target="slide-out" class="sidenav-trigger show-on-large"><i class="material-icons">menu</i></a></li>
      </ul>

    </div>
  </nav>

  <ul id="slide-out" class="sidenav" style="background-color: #37474f;">
    <li><div class="user-view">
      <img  style="width: 100%;" src="fotos/<?php echo $resultFoto; ?>">
      <span class="white-text name" style="font-family: arial; font-weight: bold; font-size: 20px;"><blockquote><?php $nome = $_COOKIE['nome']; echo "$nome" ?> </blockquote></span>
      <span class="white-text email" style="font-size: 17px;"><?php echo "$email" ?></span>
      <a href="#" data-target="slide-out1" class="sidenav-trigger show-on-large"> Configurações </a>
    </div></li>
    <li>
    <a class="waves-effect" href="sair.php" style="color: white; font-size: 17px; font-family: arial;">Sair</a>
    </li>
  </ul>

  <ul id="slide-out1" class="sidenav" style="background-color: #37474f;">
  <?php

   $sql = "SELECT * FROM cadastro WHERE email='$email'";
   $resultado = mysqli_query($conexao,$sql);
   if (mysqli_num_rows($resultado) > 0) {
     while ($linha = mysqli_fetch_array($resultado)) {
       
    ?>

    <form action="alterar.php" method="POST" enctype="multipart/form-data">
    <img  style="width: 100%;" src="fotos/<?php echo $resultFoto; ?>">
    <div class="file-field input-field">
        <div class="btn">
          <span>Alterar foto</span>
              <input type="file" name="foto" value="<?php echo $linha['foto'];?>">
              </div>
              <div class="file-path-wrapper">
              <input class="file-path validate" type="text" name="foto1" value="<?php echo $linha['foto'];?>">
        </div>
    </div>
    
    <p style="font-weight: bold;"> Nome: <input type="text" name="nome" value="<?php echo $linha['nome'];?>" style="color: white; width: 75%"></p>
    <br>
    <p style="font-weight: bold;"> Senha: <input type="password" name="senha" value="<?php echo $linha['senha'];?>" style="color: white; width: 75%"></p>
    <br>
    <br>
    <div align="center">
     <a class="btn #ff1744 red accent-3" href="pagina_aluno.php" style="color: white;">Voltar</a>
     <button type="submit" class="btn #4caf50 green" style="color: white;">Salvar</button>
   </div>
      
    
   </form>
   
    <?php
     }
   }
   

   ?>
  </ul>
  
  

<?php
}
}
?>
</body>
</html>