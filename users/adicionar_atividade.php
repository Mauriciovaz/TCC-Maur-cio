<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Adicionar atividade</title>
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

<form action="../actions/salvar_atividade.php" method="POST">
<div class="row">
    <div class="col s12 m6 push-m3">
      <div class="card white">
        <div class="card-content black-text">

          <p style="font-weight: bold; margin-left: 2px;">Conteúdo que a atividade se refere: </p>
          <div class="col s3 m5">
          <input type="text" name="conteudo" required>
           </div>
          <br>
          <br>
          <br>
          
          <span style="font-weight: bold;">Questão 1: </span> <br><br>
          <textarea id="atividade" name="q1" required> <label>Máximo 600 caracteres</label> </textarea>
          <br>

          <p>Opção 1: </p> <input type="text" name="op1q1" required>
          <p>Opção 2: </p> <input type="text" name="op2q1" required>
          <p>Opção 3: </p> <input type="text" name="op3q1" required>
          <p>Opção 4: </p> <input type="text" name="op4q1" required>
          <p>Opção 5: </p> <input type="text" name="op5q1" required>
        </div>
      </div>
    </div>
  </div>

<div class="row">
    <div class="col s12 m6 push-m3">
      <div class="card white">
        <div class="card-content black-text">

          <span style="font-weight: bold;">Questão 2: </span> <br><br>
          <textarea id="atividade2" name="q2" required> <label>Máximo 600 caracteres</label> </textarea>
          <br>

          <p>Opção 1: </p> <input type="text" name="op1q2" required>
          <p>Opção 2: </p> <input type="text" name="op2q2" required>
          <p>Opção 3: </p> <input type="text" name="op3q2" required>
          <p>Opção 4: </p> <input type="text" name="op4q2" required>
          <p>Opção 5: </p> <input type="text" name="op5q2" required>
        </div>
      </div>
    </div>
  </div>

<div class="row">
    <div class="col s12 m6 push-m3">
      <div class="card white">
        <div class="card-content black-text">

          <span style="font-weight: bold;">Questão 3: </span> <br><br>
          <textarea id="atividade3" name="q3" required> <label>Máximo 600 caracteres</label> </textarea>
          <br>

          <p>Opção 1: </p> <input type="text" name="op1q3" required> 
          <p>Opção 2: </p> <input type="text" name="op2q3" required>
          <p>Opção 3: </p> <input type="text" name="op3q3" required>
          <p>Opção 4: </p> <input type="text" name="op4q3" required>
          <p>Opção 5: </p> <input type="text" name="op5q3" required>
          
          <div class="col s3 m6">
          <select name="c1" required>
          	<option disabled selected> Opção correta da questão 1</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
         </div>

          <br>
          <div class="col s3 m6">
          <select name="c2" required>
            <option disabled selected> Opção correta da questão 2</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
          </select>
          </div>

          <br>
          <div class="col s3 m6">
          <select name="c3" required>
            <option disabled selected> Opção correta da questão 3</option>
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
          <br>
          <br>
          <br>
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
     CKEDITOR.replace('atividade');  
     CKEDITOR.replace('atividade2');
     CKEDITOR.replace('atividade3');      

     $(document).ready(function(){
    $('select').formSelect();
  });   
 </script>
</body>
</html>