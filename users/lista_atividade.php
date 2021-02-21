<!DOCTYPE html>
<html>
<head>
	<title>Lista de atividades</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="../js/jquery-3.4.1.js"> </script>
  <script type="text/javascript" src="../js/materialize.min.js"></script>
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
</head>
<body>
  <?php

session_start();

require "../bd.php";

$email = $_SESSION['email'];

if ($email != 'professor@gmail.com') {
echo "<script> window.location.href='../index.php'; </script>";
}

?>

 <nav style="background-color: #1976d2;">
    <div class="nav-wrapper" id="navbar"> 

      <div class="container">
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        
        <li>EducaContábil</li>

      </ul>
      </div>
    </div>
  </nav>

<div class="container">
  <h5>Atividades:</h5>


   <table>
        <thead>
          <tr>
              <th>Nome do conteúdo</th>
              <th>Enunciado</th>
              <th>Resposta correta</th>
          </tr>
        </thead>

        <?php
        $sql = "SELECT conteudo.nome, atividade.questao, atividade.correta, atividade.id FROM conteudo, atividade WHERE atividade.idconteudo = conteudo.id";
        $resultado = mysqli_query($conexao, $sql);
        ?>
        <tbody>
          <?php
          while ($dados = mysqli_fetch_array($resultado)) {
          ?>
          <tr>
          <td><?php echo $dados['nome']; ?></td>
          <td>
          <?php
          $enunciado = explode(" ", $dados['questao']);
          echo $enunciado[0]." ".$enunciado[1]." ".$enunciado[2]."..."; 
          ?>
          </td>
          <td><?php echo $dados['correta']; ?></td>
          <td><a class="btn-floating waves-effect waves-light blue" href="alteraratividade.php?id=<?php echo $dados['id']; ?>"><i class="material-icons">edit</i></a>
          <button class="btn-floating waves-effect waves-light red" onclick="confirmadelete(<?php echo $dados['id']; ?>)"><i class="material-icons">delete</i></button></td>
          </tr>
          <?php
          }
          ?>
        </tbody>
</div>

<script type="text/javascript">
  function confirmadelete(id){
    var result = confirm("Você deseja excluir essa atividade?");
    if (result == true) {
      window.location.href='excluiratividade.php?id='+id;
    }
  }
</script>

</body>
</html>