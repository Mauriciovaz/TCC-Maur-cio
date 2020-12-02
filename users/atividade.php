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
 $sql = "SELECT * FROM atividade WHERE id = '$id'";
 $result = mysqli_query($conexao,$sql);
 while ($linha = mysqli_fetch_array($result)){
?>
<form action="../actions/resultado.php" method="POST">
  <div class="row">
    <div class="col s12 m6 push-m3">
      <div class="card white">
        <div class="card-content black-text">
          <span class="card-title" align="center"> <?php echo $linha['conteudo'] ?> </span>
          <br>
          <!-- QUESTÃO 1 -->
         <div style="font-weight: bold; font-size: 18px; font-family: arial;"> <?php echo $linha['questao1'] ?> </div>
         <br>

         
      	<label>
        <input name="q1" type="radio" value="1" />
        <span style="color: black; margin-left: 20px; font-size: 15px; font-family: arial;"><?php echo $linha['op1q1'] ?></span>
      	</label>
      	<br>
      	<label>
        <input name="q1" type="radio" value="2"/>
        <span style="color: black; margin-left: 20px; font-size: 15px; font-family: arial;"><?php echo $linha['op2q1'] ?></span>
      	</label>
      	<br>
      	<label>
        <input name="q1" type="radio" value="3"/>
        <span style="color: black; margin-left: 20px; font-size: 15px; font-family: arial;"><?php echo $linha['op3q1'] ?></span>
      	</label>
      	<br>
      	<label>
        <input name="q1" type="radio" value="4"/>
        <span style="color: black; margin-left: 20px; font-size: 15px; font-family: arial;"><?php echo $linha['op4q1'] ?></span>
      	</label>
      	<br>
      	<label>
        <input name="q1" type="radio" value="5"/>
        <span style="color: black; margin-left: 20px; font-size: 15px; font-family: arial;"><?php echo $linha['op5q1'] ?></span>
      	</label>
    	
    	<br>
    	<br>
        
        <!-- QUESTÃO 2 -->

    	<div style="font-weight: bold; font-size: 18px; font-family: arial;"> <?php echo $linha['questao2'] ?> </div>
         <br>

         
      	<label>
        <input name="q2" type="radio" value="1" />
        <span style="color: black; margin-left: 20px; font-size: 15px; font-family: arial;"><?php echo $linha['op1q2'] ?></span>
      	</label>
      	<br>
      	<label>
        <input name="q2" type="radio" value="2"/>
        <span style="color: black; margin-left: 20px; font-size: 15px; font-family: arial;"><?php echo $linha['op2q2'] ?></span>
      	</label>
      	<br>
      	<label>
        <input name="q2" type="radio" value="3"/>
        <span style="color: black; margin-left: 20px; font-size: 15px; font-family: arial;"><?php echo $linha['op3q2'] ?></span>
      	</label>
      	<br>
      	<label>
        <input name="q2" type="radio" value="4"/>
        <span style="color: black; margin-left: 20px; font-size: 15px; font-family: arial;"><?php echo $linha['op4q2'] ?></span>
      	</label>
      	<br>
      	<label>
        <input name="q2" type="radio" value="5"/>
        <span style="color: black; margin-left: 20px; font-size: 15px; font-family: arial;"><?php echo $linha['op5q2'] ?></span>
      	</label>

      	<br>
      	<br>

      	<!-- QUESTÃO 3 -->

    	<div style="font-weight: bold; font-size: 18px; font-family: arial;"> <?php echo $linha['questao3'] ?> </div>
         <br>

         
      	<label>
        <input name="q3" type="radio" value="1" />
        <span style="color: black; margin-left: 20px; font-size: 15px; font-family: arial;"><?php echo $linha['op1q3'] ?></span>
      	</label>
      	<br>
      	<label>
        <input name="q3" type="radio" value="2"/>
        <span style="color: black; margin-left: 20px; font-size: 15px; font-family: arial;"><?php echo $linha['op2q3'] ?></span>
      	</label>
      	<br>
      	<label>
        <input name="q3" type="radio" value="3"/>
        <span style="color: black; margin-left: 20px; font-size: 15px; font-family: arial;"><?php echo $linha['op3q3'] ?></span>
      	</label>
      	<br>
      	<label>
        <input name="q3" type="radio" value="4"/>
        <span style="color: black; margin-left: 20px; font-size: 15px; font-family: arial;"><?php echo $linha['op4q3'] ?></span>
      	</label>
      	<br>
      	<label>
        <input name="q3" type="radio" value="5"/>
        <span style="color: black; margin-left: 20px; font-size: 15px; font-family: arial;"><?php echo $linha['op5q3'] ?></span>
      	</label>
        
        <br>
        <br>
        <input type="hidden" name="ativ1" value="<?php echo $linha['questao1'] ?>">
        <input type="hidden" name="ativ2" value="<?php echo $linha['questao2'] ?>">
        <input type="hidden" name="ativ3" value="<?php echo $linha['questao3'] ?>">

        <input type="hidden" name="correta1" value="<?php echo $linha['correta1'] ?>">
        <input type="hidden" name="correta2" value="<?php echo $linha['correta2'] ?>">
        <input type="hidden" name="correta3" value="<?php echo $linha['correta3'] ?>">

        <input type="hidden" name="feed1" value="<?php echo $linha['feed1'] ?>">
        <input type="hidden" name="feed2" value="<?php echo $linha['feed2'] ?>">
        <input type="hidden" name="feed3" value="<?php echo $linha['feed3'] ?>">

        <center>
        <input type="submit" value="Enviar" class="btn">
        </center>
        </div>
      </div>
    </div>
  </div>
</form>
<?php
}
?>
</body>
</html>