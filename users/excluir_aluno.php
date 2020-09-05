<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="../js/jquery-3.4.1.js"> </script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="../design/layout.css">
</head>
<body>

<nav>
    <div class="nav-wrapper #1976d2 blue darken-2"> 
      <a href="lista_alunos.php" style="margin-left: 4px;">Voltar</a>
    </div>
  </nav>

<br>

<div class="row">
    <div class="col s12 m8 push-m2 z-depth-3">
      <div class="card" style="background-color: white;">
        <div class="card-content white-text">
          <form action="exclusao_de_aluno.php" method="GET">
            <?php
            $id = $_GET['id'];
            ?>
          <fieldset>
            <legend class="center" style="color: black; font-size: 25px; font-weight: bold;">Motivo da exclusão:</legend>
          <br>
               	 <div class="row">
               	  <div style="color: black; margin-left: 20px; font-size: 20px; font-weight: bold;">Motivo: 
               	  </div>
                  <div class="input-field col s12">
                  <center>
                  <textarea id="motivo" class="materialize-textarea" style="width: 90%; text-align: left; height: 200px;" name="motivo" placeholder="Descreva o motivo pela exclusão do aluno" maxlength="10000" minlength="1" required></textarea>
                  </div>
                </center>
               </div>
               <input type="hidden" name="id" value="<?php echo $id; ?>">
          <br>
          <center>
          <a href="lista_alunos.php" class="btn" style="background-color: red;"> Cancelar</a>
          <input type="submit" name="excluir" class="btn" value="excluir">
          </center>
          </fieldset>
          </form>
         
        </div>
      </div>
    </div>
  </div>

</body>
</html>