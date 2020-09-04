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
<?php

   include "../bd.php";
   $id = $_GET['id'];
   $sql = "SELECT * FROM materia WHERE id=$id";
   $resultado = mysqli_query($conexao,$sql);
   $linha = mysqli_fetch_array($resultado);
   mysqli_close($conexao);
?>
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
      <div class="card #ffebee red lighten-5">
        <div class="card-content white-text">
        <fieldset>
          <legend style="font-family: arial; font-size: 30px; color: black;" align="center">Adicionar Conteúdo</legend>
          <br>
          <form action="../actions/atualizar_conteudo.php" method="POST">
          <input type="hidden" name="id" value="<?php echo $linha['id'];?>">
          <div style="margin-left: 10px; color: black; font-size: 20px; font-family: arial; font-weight: bold;">Título: 
          <input type="text" name="titulo" style="width: 40%; margin-left: 20px;" maxlength="100" minlength="1" value="<?php echo $linha['titulo'];?>" required>
          </div>
          
          <br>
                 <div class="row">
                  <div style="color: black; margin-left: 20px; font-size: 20px; font-weight: bold;">Conteúdo: 
                  </div>
                  <div class="input-field col s12">
                  <center>
                  <textarea id="conteudo" class="materialize-textarea" style="width: 90%; text-align: left; height: 200px;" name="conteudo" maxlength="10000" minlength="1" required>

                  <?php echo $linha['conteudo']; ?>
          
                  </textarea>
                  </div>
                </center>
               </div>
               <script src="../ckeditor/ckeditor.js" charset="utf-8"> </script>
              <script>
                CKEDITOR.replace('conteudo');
              </script>
          <br>
          <center>
          <a href="lista_conteudo.php" class="btn" style="background-color: red;"> Cancelar</a>
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