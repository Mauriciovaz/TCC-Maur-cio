<?php
include("../bd.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Editar atividade</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="../js/jquery-3.4.1.js"> </script>
  	<script type="text/javascript" src="../js/materialize.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
  	<link rel="stylesheet" type="text/css" href="../design/layout.css">
  	 <script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
     <script type="text/javascript" src="../ckeditor/adapters/jquery.js"></script>
     <script type="text/javascript" src="../ckeditor/config.js"></script>
</head>
<body>

<nav>
    <div class="nav-wrapper" style="background-color: #1976d2;"> 
    </div>
  </nav>

<br>

<?php
$id = $_GET['id'];

$sql1 = "SELECT * FROM atividade WHERE id = $id";
$resultado1 = mysqli_query($conexao, $sql1);

$linha = mysqli_fetch_array($resultado1);

?>

<form action="update.php" method="POST" enctype="multipart/form-data">
<div class="row">
    <div class="col s12 m6 push-m3">
      <div class="card white">
        <div class="card-content black-text">

          <p style="font-weight: bold; margin-left: 2px;">Conteúdo que a atividade se refere: </p>
          <div class="col s3 m5">
          <?php
          $sql = "SELECT nome, id FROM conteudo";
          $resultado = mysqli_query($conexao, $sql);
          ?>
          <div id="titulo">
          <select name="idconteudo">
            <?php
            while ($dados = mysqli_fetch_array($resultado)) {
            ?>
            <option value="<?php echo $dados['id']; ?>"><?php echo $dados['nome']; ?></option>
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
          <br>
          <br>
          <br>
          
          
          <p style="font-weight: bold; margin-left: 2px;">
            Conteúdo da atividade: <br>
          <textarea id="atividade" name="questao" required><?php echo $linha['questao']; ?></textarea>
          <br></p>

          <p>Opção 1: </p> <input type="text" value="<?php echo $linha['op1']; ?>" name="op1" required>
          <p>Opção 2: </p> <input type="text" value="<?php echo $linha['op2']; ?>" name="op2" required>
          <p>Opção 3: </p> <input type="text" value="<?php echo $linha['op3']; ?>" name="op3" required>
          <p>Opção 4: </p> <input type="text" value="<?php echo $linha['op4']; ?>" name="op4" required>
          <p>Opção 5: </p> <input type="text" value="<?php echo $linha['op5']; ?>" name="op5" required>

          <br>

          
          <span style="font-weight: bold;">Feedback dessa questão: </span> <br><br>
          <textarea id="feed1" name="feed" required><?php echo $linha['feed']; ?></textarea>

          <div class="col s3 m6">
            Selecione a opção correta: <br>
          <select name="c1" required>
            <option disabled selected> Opção correta da questão:</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
         </div>
          <br>
          <br>
          <br>

          <input type="hidden" name="id" value="<?php echo $id; ?>">

          <div class="file-field input-field">
      <div class="btn">
        <span>Foto</span>
        <input type="file" name="arquivo">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" style="max-width: 45%">
      </div>
    </div>
          <center>
          <input type="submit" value="Salvar" class="btn">
          </center>

        </div>
      </div>
    </div>
  </div>

          
          
          
          
</form>
<script src="../ckeditor/ckeditor.js"> </script>
<script>
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
     CKEDITOR.replace('atividade');  
     CKEDITOR.replace('atividade2');
     CKEDITOR.replace('atividade3');

     CKEDITOR.replace('feed1');
     CKEDITOR.replace('feed2');
     CKEDITOR.replace('feed3');   

     $(document).ready(function(){
    $('select').formSelect();
  });   
 </script>
</body>
</html>