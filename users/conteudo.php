<!DOCTYPE html>
<html>
<head>
	<title>Conteúdo</title>
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
      <ul class="left hide-on-med-and-down">
        
      </ul>
    </div>
  </nav>
<br>
<br>
<?php 

 require "../bd.php";
 $id = $_GET['id'];
 $sql = "SELECT * FROM materia WHERE id = '$id'";
 $resultado = mysqli_query($conexao, $sql);
 
  if(mysqli_num_rows($resultado) > 0){
          while ($linha = mysqli_fetch_array($resultado)) {
  ?>

<div class="row">
    <div class="col s12 m8 push-m2">
      <div class="card white">
        <div class="card-content">
        
        <center>
          <span class="card-title" style="font-size: 30px; font-weight: bold;"> <?php echo $linha['titulo']; ?> </span>
        </center>
       

        <div style="color: black; font-size: 18px;">
        	<?php echo $linha['conteudo']; ?>
        </div>
        </div>
      </div>
    </div>
  </div>

<?php  
}
}
?>
</body>
</html>