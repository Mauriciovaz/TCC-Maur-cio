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
   $materiaidconteudo = $linha['idconteudo'];
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
          <legend style="font-family: arial; font-size: 30px; color: black;" align="center">Editar Conteúdo</legend>
          <br>
          <form action="../actions/atualizar_conteudo.php" method="POST">
          <input type="hidden" name="id" value="<?php echo $linha['id'];?>">
           <p style="font-weight: bold; margin-left: 2px;">Conteúdo que a atividade se refere: </p>
          <div class="col s3 m5">
          <?php
          $sql3 = "SELECT nome, id FROM conteudo";
          $resultado3 = mysqli_query($conexao, $sql3);
          ?>
          <div id="titulo">
          <select name="idconteudo">
            <?php
            while ($dados = mysqli_fetch_array($resultado3)) {
            ?>
            <option <?php if ($dados['id'] == $materiaidconteudo) {?> selected <?php } ?> value="<?php echo $dados['id']; ?>"><?php echo $dados['nome']; ?></option>
            <?php
            }
            ?>
          </select>
          </div>
          <p>
             <label>
              <input id="check" onclick="esconde()" name="check" type="checkbox" />
              <span style="color: black">Outro? Qual?</span>
            </label>
          </p>
           </div>
           <div id="outro">
        <input type="text" placeholder="Digite aqui o nome do conteúdo" name="outro">
      </div>
          
          <br>
                 <div class="row">
                  <div style="color: black; margin-left: 20px; font-size: 20px; font-weight: bold; margin-top: 10%;">Conteúdo: 
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
<script type="text/javascript">
  $("#outro").hide();
function esconde(){
  if($("#check").is(":checked")) {
    $("#titulo").hide();
    $("#outro").show();
    }else{
    $("#titulo").show();
    $("#outro").hide();
    }
}
  $(document).ready(function(){
    $('select').formSelect();
  });
</script>
</body>
</html>