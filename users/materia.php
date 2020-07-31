<!DOCTYPE html>
<html>
<head>
	<title>Adicionar conteúdo</title>
	<meta charset="utf-8">
	<script type="text/javascript" src="../js/jquery-3.4.1.js"> </script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="../design/layout.css">
</head>
<body>

<nav>
    <div class="nav-wrapper #1976d2 blue darken-2"> 
      <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="pagina_professor.php">Voltar</a></li>
      </ul>
    </div>
  </nav>
  <br>
  <br>
<div class="row">
    <div class="col s12 m8 push-m2">
      <div class="card #f3e5f5 purple lighten-5">
        <div class="card-content white-text">
        <fieldset>
          <legend style="font-family: arial; font-size: 30px; color: black;" align="center">Adicionar Conteúdo</legend>
          <br>
          <form action="../actions/salvar_materia.php" method="POST">
          <center>
          <div style="margin-left: 50px; color: black; font-size: 20px; font-family: arial; font-weight: bold;">Título: 
          <input type="text" name="titulo" style="width: 40%; margin-left: 20px;" placeholder="Adicione aqui o título" maxlength="100" minlength="1">
          </div>
          </center>
          <br>
               	 <div class="row">
               	  <div style="color: black; margin-left: 50px; font-size: 20px; font-weight: bold;">Conteúdo: 
               	  </div>
                  <div class="input-field col s12">
                  <center>
                  <textarea id="textarea1" class="materialize-textarea" style="width: 90%; text-align: left;" name="conteudo" placeholder="Adicionar conteúdo" maxlength="10000" minlength="1"></textarea>
                  
                  </div>
                </center>
               </div>
          <br>
          <center>
          <input type="submit" name="salvar" class="btn" value="salvar">
          </center>
          </form>
         </fieldset>
        </div>
      </div>
    </div>
  </div>

</body>
</html>