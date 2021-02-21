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
  	<link rel="stylesheet" type="text/css" href="../design/layout.css">
</head>
<body>

<?php

$q1 = $_POST['q1'];


$correta = $_POST['correta'];


$feed= $_POST['feed'];


if ($q1 == $correta) {
?>
<!-- Modal Structure -->
  <div id="modal1" class="modal">
    <div class="modal-content">
      <h4>Parabéns! você acertou essa questão!</h4>
      <p>Feedback dessa questão: <br> <?php echo "$feed"; ?> </p>
    </div>
    <div class="modal-footer">
      <a href="../users/pagina_aluno.php" class="modal-close waves-effect waves-green btn-flat white-text green">Ok</a>
    </div>
  </div>
<?php
}else{
?>
<!-- Modal Structure -->
  <div id="modal1" class="modal">
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
	$(document).ready(function(){
    $('.modal').modal();
    $('#modal1').modal('open');
  });
</script>
</body>
</html>