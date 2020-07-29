<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <link rel="stylesheet" type="text/css" href="layout.css">
    <style type="text/css">
    </style>
</head>
<body>
<nav>
    <div class="nav-wrapper #1976d2 blue darken-2">
      <a class="brand-logo center"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li>
          
        </li>
        <li>
         
        </li>
      </ul>
    </div>
  </nav>
<br><br>

<div class="row">

    <div class="col s12 m6 push-m3">
      <div class="card nav-wrapper">
        <div class="card-content white-text">
        <fieldset>
        <legend class="center">
          <span class="card-title center">Login <i class="small material-icons">account_circle</i></span>
         </legend>
         <br>
          <div class="formulario">
          	<form method="POST" action="login.php">
          		<p class="formulario">E-mail: 
              <br>
              <br>
              <input type="text" name="email" id="formularioInterno" required minlength="8" maxlength="30"></p>
          		<br>
          		<p class="formulario">Senha: 
              <br>
              <br>
              <input type="password" name="senha" id="formularioInterno" required minlength="8" maxlength="12"></p>
          		<br>
          		<button class="btn waves-effect waves-light #1976d2 blue darken-2" type="submit" name="entrar">Entrar
                <i class="material-icons right">chevron_right</i>
                </button>
                <br>
                <br>
                <a href="cadastro.php" class="link"> Não possui cadastro? Clique aqui para se cadastrar. </a>
          	</form>
          </div>
          <br>
         </fieldset>
        </div>
      </div>
    </div>
 
  </div>


<script type="text/javascript" src="js/materialize.min.js"></script>
</body>
</html>