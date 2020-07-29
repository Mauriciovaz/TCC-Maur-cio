<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastro</title>
	<meta charset="utf-8">
  <script type="text/javascript" src="js/jquery-3.4.1.js"> </script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="layout.css">
</head>
<body>
<nav>
    <div class="nav-wrapper #1976d2 blue darken-2">
      <a class="brand-logo center"></a>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
      <li><a href="index.php"> Voltar</a></li>
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
          <span class="card-title center">Cadastro de usuário <i class="small material-icons">account_circle</i></span>
         </legend>
         <br>
          <div class="formulario">
          	<form action="cadastrar.php" method="POST" enctype="multipart/form-data">
              <p class="formulario">E-mail: 
              <br>
              <br>
              <input type="text" name="email" id="formularioInterno" required minlength="1" maxlength="100"></p>
              <br>
          		<p class="formulario">Nome de Usuário: 
              <br>
              <br>
              <input type="text" name="nome" id="formularioInterno" required minlength="1" maxlength="30"></p>
              <br>
          		<p class="formulario">Senha: 
              <br>
              <br>
              <input type="password" name="senha" id="formularioInterno" required minlength="8" maxlength="12"></p>
          		<br>
              <br>
              <div class="file-field input-field">
              <div class="btn">
              <span>Foto de perfil</span>
              <input type="file" name="foto" required>
              </div>
              <div class="file-path-wrapper">
              <input class="file-path validate" type="text">
              </div>
              </div>
              <br>
              <br>
              <center>
          		<button class="btn waves-effect waves-light  #1976d2 blue darken-2" type="submit" name="action">registrar
                <i class="material-icons right">group_add</i>
                </button>
              </center>
          	</form>
          </div>
          <br>
         </fieldset>
        </div>
      </div>
    </div>
  </div>

</body>
</html>