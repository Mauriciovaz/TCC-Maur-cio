<!DOCTYPE html>
<html>
<head>
	<title>Adicionar conteúdo</title>
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
      <a href="pagina_professor.php" style="margin-left: 4px;">Voltar</a>
    </div>
  </nav>
  <br>
  <br>
<div class="row">
    <div class="col s12 m8 push-m2 z-depth-3">
      <div class="card" style="background-color: #808080;">
        
        <div class="card-content white-text">
        
          <br>
          <form action="../actions/salvar_materia.php" method="POST">
          <fieldset>
            <legend class="center" style="color: black; font-size: 25px; font-weight: bold;">Adicionar Conteúdo</legend>
          <div style="margin-left: 10px; color: black; font-size: 20px; font-family: arial; font-weight: bold;">Título: 
          <input type="text" name="titulo" style="width: 40%; margin-left: 20px;" placeholder="Adicione aqui o título" maxlength="100" minlength="1" required>
          </div>
          
          <br>
               	 <div class="row">
               	  <div style="color: black; margin-left: 20px; font-size: 20px; font-weight: bold;">Conteúdo: 
               	  </div>
                  <div class="input-field col s12">
                  <center>
                  <textarea id="conteudo" class="materialize-textarea" style="width: 90%; text-align: left; height: 200px;" name="conteudo" placeholder="Adicionar conteúdo" maxlength="10000" minlength="1" required></textarea>
                  
                  </div>
                </center>
               </div>
               <script src="../ckeditor/ckeditor.js"> </script>
              <script>
                CKEDITOR.replace('conteudo');
               </script>
          <br>

          
          <center>
          <a href="pagina_professor.php" class="btn" style="background-color: red;"> Cancelar</a>
          <input type="submit" name="salvar" class="btn" value="salvar">
          </center>
          </fieldset>
          </form>
         
        </div>
      </div>
    </div>
  </div>

</body>
</html>