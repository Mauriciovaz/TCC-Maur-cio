<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="../js/jquery-3.4.1.js"> </script>
 	 <script type="text/javascript" src="../js/materialize.min.js"></script>
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
</head>
<body style="background-color: #7FFFD4; font-family: arial;">

<nav id="navbar" style="background-color: #1976d2;">
    <div class="nav-wrapper"> 
    
    </div>
  </nav>


 <div class="row">

   <?php
   require "../bd.php";
   $sql3 = "SELECT nome, id FROM conteudo";
   $resultnome = mysqli_query($conexao, $sql3);

   
   while ($dadosnome = mysqli_fetch_array($resultnome)) {
    $idconteudo = $dadosnome['id'];
    ?>
      <h4 id="tituloconteudo" class="center" style="color: white; -webkit-text-stroke-width: 2.5px; -webkit-text-stroke-color: #000; font-size: 60px; font-family: arial; margin-left: 10px; margin-right: 10px;" class="z-depth-3"><?php echo $dadosnome['nome']; ?></h4>
      <ul>
        <?php
        $sql4 = "SELECT atividade.idconteudo, atividade.id, atividade.questao FROM atividade INNER JOIN conteudo where atividade.idconteudo = conteudo.id and atividade.idconteudo = $idconteudo order by atividade.idconteudo asc";
        $resultado3 = mysqli_query($conexao, $sql4);
        if (mysqli_num_rows($resultado3) > 0) {
        
          while ($dadosatividade = mysqli_fetch_array($resultado3)) {
        ?>
        
        <div class="row">
   	  	 <div class="col s12 m4 push-m4">
     	 <div class="card blue-grey darken-1">
     	  <div class="card-content black-text" style="background-color: white">
          <p><?php echo $dadosatividade['questao']; ?></p>
        </div>
        <div class="card-action" style="background-color: white">
         <a class="waves-effect waves-light btn" href="atividade.php?id=<?php echo $dadosatividade['id']; ?>" target="_blank" style="background-color: blue; color: white;">Acessar atividade</a>
        </div>
      </div>
    </div>
  </div>
        


        
        <?php
    
      }
  
      }else{
      ?>
        <p style="text-align: center"> Nenhum resultado encontrado! </p>
      <?php
      }
      ?>
      </ul>
    <?php
   }
   ?>

</div>

</body>
</html>