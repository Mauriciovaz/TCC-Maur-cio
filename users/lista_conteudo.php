<!DOCTYPE html>
<html>
<head>
	<title> Lista de conteúdo </title>
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
    <div class="col s12 m8 push-m2">
      <div class="card #ffffff white">
        <div class="card-content white-text">
          <span class="card-title black-text center" style="font-weight: bold; font-family: arial;">Conteúdos</span>
          <div style="color: black; font-family: arial; font-weight: bold;">
          <?php
           require "../bd.php";

           echo '<table id="conteudos" class="highlight #e1f5fe light-blue lighten-5">';
	       echo '<tr class="#00e5ff cyan accent-3"> <th>Titulo</th> <th>Apagar</th> <th>Atualizar</th></tr>';
           $sql = "SELECT * FROM materia";
           $resultado = mysqli_query($conexao, $sql);

           while ($linha = mysqli_fetch_array($resultado)) {
           $id = $linha['id'];
		   $titulo = $linha['titulo'];

		   echo "<tr>";
		   echo "<td>" . $titulo . "</td>";
		   echo "<td><a href='../actions/excluir_conteudo.php?id=$id'> <img src='deletar.png' width='40px'> </a></td>";
		    echo "<td><a href='form_atualizar.php?id=$id'> <img src='atualizar.png' width='35px'> </a></td>";
		   echo "</tr>";
           }

          ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>