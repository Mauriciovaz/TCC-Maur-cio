<!DOCTYPE html>
<html>
<head>
	<title>Página aluno</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="../js/jquery-3.4.1.js"> </script>
  <script type="text/javascript" src="../js/materialize.min.js"></script>
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

    <link rel="stylesheet" href="../owlcarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="../owlcarousel/dist/assets/owl.theme.default.min.css">
    <script src="../js/jquery.mask.min"></script>
    <script src="../owlcarousel/dist/owl.carousel.min.js"></script>
    <style type="text/css">
      html{
      background-color: #7FFFD4;
    }
    nav{
      background-color: #1976d2;
    }
    html[dark]{
      background-color: #808080;
    }
    #navbar[dark]{
      background-color: black;
    }
    #acessar_conteudo{
      background-color: #1976d2;
    }

    </style>
</head>
<body>
<script type="text/javascript">
  $(document).ready(function(){
    $('.sidenav').sidenav();
  });

  $(document).ready(function(){
  $(".owl-carousel").owlCarousel();
});

  $(document).ready(function(){
    $('.modal').modal();
  });

// Background com tema escuro:
document.addEventListener('DOMContentLoaded', () => {
    const html = document.querySelector('html')
    const inputDarkMode = document.getElementById('input-dark-mode')
        
    inputDarkMode.addEventListener('change', () => {
        if(inputDarkMode.checked){
            html.setAttribute("dark", "true")
        }else{
            html.removeAttribute("dark")
        }
    })
})

// Navbar com tema escuro: 
document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.getElementById('navbar')
    const inputDarkMode = document.getElementById('input-dark-mode')
        
    inputDarkMode.addEventListener('change', () => {
        if(inputDarkMode.checked){
            navbar.setAttribute("dark", "true")
        }else{
            navbar.removeAttribute("dark")
        }
    })
})


</script>
<?php

session_start();

require "../bd.php";

$email = $_SESSION['email'];

$sql = "SELECT * FROM usuarios WHERE email = '$email'";
$foto = mysqli_query($conexao, $sql);
if(mysqli_num_rows($foto) > 0){ 
while ($dados = mysqli_fetch_array($foto)) { 

$resultFoto = $dados['foto'];
?>
 <nav id="navbar">
    <div class="nav-wrapper"> 

        <a href="#" data-target="slide-out" class="sidenav-trigger show-on-large" style="margin-left: 4px;"><i class="material-icons">menu</i></a>

        <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="atividades.php" target="_blank">Atividades</a></li>
      </ul>
    </div>
  </nav>
  <br>

   <center>
   
   <img src="../design/logo.png" style="width: 50%; height: auto;">
   
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
      <div style="color: white;">
      Ativar o modo escuro:
      <div class="switch">
      <label for="input-dark-mode">
        <a class="button"></a>
        <input type="checkbox" id="input-dark-mode">
        <span class="lever"></span>
      </label>
      </div>
      </div>
     </div>
     </li>
    <li>
    <a class="waves-effect" href="../actions/sair.php" style="color: white; font-size: 17px; font-family: arial;">Sair</a>
    </li>
  </ul>

  <ul id="slide-out1" class="sidenav" style="background-color: #1976d2;">
  <?php

   $sql = "SELECT * FROM usuarios WHERE email='$email'";
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
   <br>
   <br>
   <a data-target="modal1" class="btn modal-trigger" style="text-decoration: none;">Excluir minha conta</a>

  </ul>
<div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Você tem certeza?</h4>
    </div>
    <div class="modal-footer">
      <a href="../actions/aluno/info/excluirConta.php" class="modal-close waves-effect waves-green btn-flat" style="background-color: green; color: white;">Sim</a>
      <a href="pagina_aluno.php" class="modal-close waves-effect waves-green btn-flat" style="background-color: red; color: white;">Não</a>
    </div>
  </div>

  <center>
<h4 style="color: white; -webkit-text-stroke-width: 2.5px; -webkit-text-stroke-color: #000; font-size: 60px; font-family: arial; margin-left: 10px; margin-right: 10px;" class="z-depth-3">Conteúdos</h4>
</center>
  <div class="row">
     <div class="owl-carousel owl-theme owl-loaded" id="carousel1">
        <div class="owl-stage-outer">
           <div class="owl-stage">
          <?php
          require "../bd.php";
          $sql2 = "SELECT conteudo.nome, materia.id FROM conteudo  INNER JOIN materia  ON materia.idconteudo = conteudo.id";
          $resultado2 = mysqli_query($conexao,$sql2);
          
          if(mysqli_num_rows($resultado) > 0){
          while ($linha = mysqli_fetch_array($resultado2)) {
          ?>
          <div class="owl-item">
          <div class="col s12 m12">
          <div class="card small hoverable z-depth-5" id="card" style="border-style: solid; border-color: #1976d2; border-radius: 8px;">
            <nav id="navbar1">
              <div class="nav-wrapper">
                <a class="brand-logo center">Informações</a>
              </div>
            </nav>
           
            <div >
              <p style="margin-left: 10px; font-family: arial; font-size: 18px;">Título: <?php echo $linha['nome']?></p>
              
            </div>
             
            <p style="font-size: 15px; margin-left: 10px">Para ler o conteúdo, clique na opção abaixo.</p>

            <div class="card-action" id="acessar_conteudo">
             <center> <a href="conteudo.php?id=<?php echo $linha['id']; ?>" target="_blank" style="font-weight: bold;"> Acessar o conteúdo</a> </center>
            
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

<footer class="page-footer" style="background-color: #1976d2">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Quem Nós Somos?</h5>
                <p class="grey-text text-lighten-4">Somos uma equipe de desenvolvimento web, oferecemos nossos produtos para facilitar a vida das pessoas. O site EducaContábil é um site com o objetivo de melhorar o ensino de contabilidade e garantir o aprendizado dos alunos. </p>
              </div>
              
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2020 Maurício Vaz Flores
            </div>
          </div>
        </footer>

<style type="text/css">
  #tituloconteudo{
    padding: 8px;
    background-color: #1976d2;
    font-weight: bold;
    font-size: 24px;
    color: white;
  }
</style>

<script type="text/javascript">
  $("#carousel1").owlCarousel({
    responsive: {
  0:{
    items: 1
  },
  600:{
    items: 2
  },
  700:{
    items: 3
  },
  1000: {
    items: 5
  }
}
  });

</script>

</body>
</html>