<!DOCTYPE html>
<html>
<head>
	<title>Página aluno</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="../js/jquery-3.4.1.js"> </script>
  <script type="text/javascript" src="../js/materialize.min.js"></script>
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="../design/layout.css">
    <link rel="stylesheet" href="../owlcarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../owlcarousel/dist/assets/owl.theme.default.min.css">
    <script src="../js/jquery.mask.min"></script>
    <script src="../owlcarousel/dist/owl.carousel.min.js"></script>
</head>
<body>
<script type="text/javascript">
  $(document).ready(function(){
    $('.sidenav').sidenav();
  });

  $(document).ready(function(){
  $(".owl-carousel").owlCarousel();
});
</script>
<?php

session_start();

require "../bd.php";

$email = $_SESSION['email'];

$sql = "SELECT * FROM cadastro WHERE email = '$email'";
$foto = mysqli_query($conexao, $sql);
if(mysqli_num_rows($foto) > 0){ 
while ($dados = mysqli_fetch_array($foto)) { 

$resultFoto = $dados['foto'];
?>
 <nav>
    <div class="nav-wrapper #1976d2 blue darken-2"> 

        <a href="#" data-target="slide-out" class="sidenav-trigger show-on-large" style="margin-left: 4px;"><i class="material-icons">menu</i></a>

    </div>
  </nav>
  <br>
   <center>
   <img src="../design/logo.png">
   </center>

  <ul id="slide-out" class="sidenav" style="background-color: #1976d2;">
    <li>
      <div class="user-view">
      <img  class="circle" style="width: 200px; height: 200px;" src="../fotos/<?php echo $resultFoto; ?>">
      <span class="white-text name" style="font-family: arial; font-weight: bold; font-size: 20px;">
      <blockquote><?php $nome = $_SESSION['nome']; echo "$nome" ?> </blockquote>
      </span>
      <span class="white-text email" style="font-size: 17px;"><?php echo "$email" ?></span>
      <a href="#" data-target="slide-out1" class="sidenav-trigger show-on-large" style="color: white; font-size: 17px; font-family: arial;"> Configurações </a>
     </div>
     </li>
    <li>
    <a class="waves-effect" href="../actions/sair.php" style="color: white; font-size: 17px; font-family: arial;">Sair</a>
    </li>
  </ul>

  <ul id="slide-out1" class="sidenav" style="background-color: #1976d2;">
  <?php

   $sql = "SELECT * FROM cadastro WHERE email='$email'";
   $resultado = mysqli_query($conexao,$sql);
   if (mysqli_num_rows($resultado) > 0) {
     while ($linha = mysqli_fetch_array($resultado)) {
       
    ?>

    <form action="../actions/aluno/info/alterar.php" method="POST" enctype="multipart/form-data">
    <img  src="../fotos/<?php echo $resultFoto; ?>" class="circle" style="width: 200px; height: 200px;">
    <div class="file-field input-field">
        <div class="btn">
          <span>Alterar foto</span>
              <input type="file" name="foto" value="<?php echo $linha['foto'];?>">
              </div>
              <div class="file-path-wrapper">
              <input class="file-path validate" type="text" name="foto1" value="<?php echo $linha['foto'];?>" style="width: 50%;">
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
  
  <center>
<h4 style="color: white; -webkit-text-stroke-width: 2.5px; -webkit-text-stroke-color: #000; font-size: 60px; font-family: arial; margin-left: 10px; margin-right: 10px;" class="z-depth-3">Conteúdos</h4>
</center>
  <div class="row">
     <div class="owl-carousel owl-theme owl-loaded">
        <div class="owl-stage-outer">
           <div class="owl-stage">
          <?php
          require "../bd.php";
          $sql2 = "SELECT * FROM materia";
          $resultado2 = mysqli_query($conexao,$sql2);
          
          if(mysqli_num_rows($resultado) > 0){
          while ($linha = mysqli_fetch_array($resultado2)) {
          ?>
          <div class="owl-item">
          <div class="col s12 m12">
          <div class="card small hoverable z-depth-3" style="background-color: white;">
            <nav >
              <div class="nav-wrapper #1976d2 blue darken-2">
                <a class="brand-logo center">Informações</a>
              </div>
            </nav>
           
            <div >
              <p style="margin-left: 10px; font-family: arial; font-size: 18px;">Título: <?php echo $linha['titulo']?></p>
              
            </div>
             
            <p style="color: red; font-size: 15px; margin-left: 4px">Para ler o conteúdo, clique na opção abaixo.</p>

            <div class="card-action" style="background-color: #9fa8da;">
             <center> <a href="conteudo.php?id=<?php echo $linha['id']; ?>" target="_blank" style="color: black; font-weight: bold;"> Acessar o conteúdo</a> </center>
            
          </div>
          </div>
          </div>
        </div>
<?php
          }
          }
           

?>

</div>
</div>
</div>
</div>

<?php
}
}
?>
</body>
</html>