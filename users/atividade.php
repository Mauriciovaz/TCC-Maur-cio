<!DOCTYPE html>
<html>
<head>
	<title>Atividade</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="../js/jquery-3.4.1.js"> </script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
  	<link rel="stylesheet" type="text/css" href="../design/layout.css">
</head>
<body>
	<nav style="background-color: #1976d2;">
    <div class="nav-wrapper">
    </div>
  </nav>
<?php
 require '../bd.php';
 $id = $_GET['id'];
 $sql = "SELECT atividade.questao, conteudo.nome, atividade.op1, atividade.op2, atividade.op3, atividade.op4, atividade.op5, atividade.feed, atividade.correta, atividade.foto  FROM atividade, conteudo WHERE atividade.id = '$id' AND conteudo.id = atividade.idconteudo";
 $result = mysqli_query($conexao,$sql);
 while ($linha = mysqli_fetch_array($result)){
?>
<form action='' method="POST" id="form1">
  <div class="row">
    <div class="col s12 m6 push-m3">
      <div class="card white">
        <div class="card-content black-text">
          <span class="card-title" align="center"> <?php echo $linha['nome'] ?> </span>
          <br>
          <!-- QUESTÃO 1 -->

         <div style="font-weight: bold; font-size: 18px; font-family: arial;"> <?php echo $linha['questao'] ?> </div>
         <br>

         <div align="center">
          <?php
          if ($linha['foto'] != 'empty') {
          ?>
          <img class="materialboxed" width="500" height="450" src="fotos/<?php echo $linha['foto']; ?>">
          <?php
          }
          ?>
        </div>

      	<label>
        <input name="q1" type="radio" value="1" />
        <span style="color: black; margin-left: 20px; font-size: 15px; font-family: arial;"><?php echo $linha['op1'] ?></span>
      	</label>
      	<br>
      	<label>
        <input name="q1" type="radio" value="2"/>
        <span style="color: black; margin-left: 20px; font-size: 15px; font-family: arial;"><?php echo $linha['op2'] ?></span>
      	</label>
      	<br>
      	<label>
        <input name="q1" type="radio" value="3"/>
        <span style="color: black; margin-left: 20px; font-size: 15px; font-family: arial;"><?php echo $linha['op3'] ?></span>
      	</label>
      	<br>
      	<label>
        <input name="q1" type="radio" value="4"/>
        <span style="color: black; margin-left: 20px; font-size: 15px; font-family: arial;"><?php echo $linha['op4'] ?></span>
      	</label>
      	<br>
      	<label>
        <input name="q1" type="radio" value="5"/>
        <span style="color: black; margin-left: 20px; font-size: 15px; font-family: arial;"><?php echo $linha['op5'] ?></span>
      	</label>
    	
    	<br>
    	<br>
        
        <?php 
        $correta = $linha['correta'];
        $feed = $linha['feed'];
         ?>
        
        <center>
        <input type="submit" value="Enviar" class="btn">
        </center>
        </div>
      </div>
    </div>
  </div>
</form>
<div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Parabéns! você acertou essa questão!</h4>
      <p>Feedback dessa questão: <br> <?php echo "$feed"; ?> </p>
    </div>
    <div class="modal-footer">
      <a href="../users/pagina_aluno.php" class="modal-close waves-effect waves-green btn-flat white-text green">Ok</a>
    </div>
  </div>

  <div id="modal2" class="modal">
    <div class="modal-content">
      <h4>Que pena! você errou essa questão!</h4>
      <p>Feedback dessa questão: <br> <?php echo "$feed"; ?> </p>
    </div>
    <div class="modal-footer">
      <a href="../users/pagina_aluno.php" class="modal-close waves-effect waves-green btn-flat white-text red">Ok</a>
    </div>
  </div>
<?php
}
?>
<script type="text/javascript">
$(document).ready(function (){
  $('.modal').modal();
  $(document).on("submit", "#form1", function() { 

  var opcaocheck = document.querySelector('input[name="q1"]:checked').value;
  var correta = <?php echo $correta; ?>;


   if(correta == opcaocheck){
        $('#modal1').modal('open');
        event.preventDefault();
      }else{
        $('#modal2').modal('open');
        event.preventDefault();
      }
      

  });
});
</script>
</body>
</html>