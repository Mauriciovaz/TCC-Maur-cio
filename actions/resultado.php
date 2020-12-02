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
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];

$correta1 = $_POST['correta1'];
$correta2 = $_POST['correta2'];
$correta3 = $_POST['correta3'];

$ativ1 = $_POST['ativ1'];
$ativ2 = $_POST['ativ2'];
$ativ3 = $_POST['ativ3'];

$feed1 = $_POST['feed1'];
$feed2 = $_POST['feed2'];
$feed3 = $_POST['feed3'];

$pontuacao = 0;
$porcentagem = 0;

if ($q1 == $correta1) {
	$pontuacao = $pontuacao + 10;
}
if ($q2 == $correta2) {
	$pontuacao = $pontuacao + 10;
}
if ($q3 == $correta3) {
	$pontuacao = $pontuacao + 10;
}

$porcentagem = ($pontuacao * 100) / 30;
$porcentagem = round($porcentagem, 0);

?>

<nav style="background-color: #1976d2;">
    <div class="nav-wrapper">
    </div>
</nav>

<div class="row">
    <div class="col s12 m6 push-m3">
      <div class="card white">
        <div class="card-content black-text">
        	<span class="card-title" align="center"> Resultado </span>
        	<div style="color: green; font-weight: bold; font-family: arial;">
	           <?php
	           if ($q1 == $correta1) {
	             echo "$ativ1 // Correta <br>";
	             
                }
	           ?>
	           
	        </div>

	        <div style="color: red; font-weight: bold; font-family: arial;">
	           <?php
	           if ($q1 != $correta1) {
	             echo "$ativ1 // Errada <br>";
	             
              }
	           ?>
	           
	        </div>
	         <?php
              echo "Feedback da questão 1: $feed1";
            ?>
	        <br>
	        <div style="color: green; font-weight: bold; font-family: arial;">
	           <?php
	           if ($q2 == $correta2) {
	             echo "$ativ2 // Correta <br>";
	         
                }
	           
	           ?>
	           
	        </div>
	        
	        <div style="color: red; font-weight: bold; font-family: arial;">
	           <?php
	           if ($q2 != $correta2) {
	             echo "$ativ2 // Errada <br>";
	             
              }
	           
	           ?>
	           
	        </div>
	         <?php
              echo "Feedback da questão 2: $feed2";
            ?>
	        <br>
	        <div style="color: green; font-weight: bold; font-family: arial;">
	           <?php
	           if ($q3 == $correta3) {
	             echo "$ativ3 // Correta <br>";
	             
              }
	           ?>
	           
	        </div>
	       
	        <div style="color: red; font-weight: bold; font-family: arial;">
	           <?php
	           if ($q3 != $correta3) {
	             echo "$ativ3 // Errada <br>";
	             
              }
	           ?>

	        </div>
	         <?php
              echo "Feedback da questão 3: $feed3";
            ?>
           <br>
           <br>
           <div style="color: black; font-weight: bold; font-family: arial;">
           <?php
           echo "Seu resultado: $porcentagem%";
           ?>
           </div>

        </div>
      </div>
    </div>
</div>

</body>
</html>