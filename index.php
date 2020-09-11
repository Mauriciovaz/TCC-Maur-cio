<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>EducaContábil</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="design/layout.css">

</head>
<body>



<div class="section" style="background-color: #7FFFD4;">
<div class="row">
    <div class="col s12 m6 push-m3">
      <div class="card nav-wrapper">
        <nav>
                  <div class="nav-wrapper #1976d2 blue darken-2">
                  <a class="brand-logo center"> Login <i class="small material-icons">account_circle</i> </a>
                  </div>
              </nav>
        <div class="card-content white-text">
                 
          <div class="formulario">
          	<form method="POST" action="actions/login.php">
          		<p class="formulario">E-mail: 
              <br>
              <br>
              <input type="email" name="email" id="formularioInterno" required minlength="8" maxlength="50" ></p>
          		<br>
          		<p class="formulario">Senha: 
              <br>
              <br>
              <input type="password" name="senha" id="formularioInterno" required minlength="8" maxlength="30"></p>
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
         
        </div>

      </div>

    </div>
 
  </div>


  <header>
    <svg class="waves" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">

    <path class="wave1" fill="rgb(255,255,255)" fill-opacity="1" d="M0,128L12.6,128C25.3,128,51,128,76,144C101.1,160,126,192,152,170.7C176.8,149,202,75,227,53.3C252.6,32,278,64,303,85.3C328.4,107,354,117,379,106.7C404.2,96,429,64,455,69.3C480,75,505,117,531,165.3C555.8,213,581,267,606,256C631.6,245,657,171,682,154.7C707.4,139,733,181,758,197.3C783.2,213,808,203,834,165.3C858.9,128,884,64,909,85.3C934.7,107,960,213,985,224C1010.5,235,1036,149,1061,128C1086.3,107,1112,149,1137,170.7C1162.1,192,1187,192,1213,181.3C1237.9,171,1263,149,1288,122.7C1313.7,96,1339,64,1364,69.3C1389.5,75,1415,117,1427,138.7L1440,160L1440,320L1427.4,320C1414.7,320,1389,320,1364,320C1338.9,320,1314,320,1288,320C1263.2,320,1238,320,1213,320C1187.4,320,1162,320,1137,320C1111.6,320,1086,320,1061,320C1035.8,320,1011,320,985,320C960,320,935,320,909,320C884.2,320,859,320,834,320C808.4,320,783,320,758,320C732.6,320,707,320,682,320C656.8,320,632,320,606,320C581.1,320,556,320,531,320C505.3,320,480,320,455,320C429.5,320,404,320,379,320C353.7,320,328,320,303,320C277.9,320,253,320,227,320C202.1,320,177,320,152,320C126.3,320,101,320,76,320C50.5,320,25,320,13,320L0,320Z"></path>

    <path class="wave2" fill="#0099ff" fill-opacity="1" d="M0,96L0,288L36.9,288L36.9,256L73.8,256L73.8,64L110.8,64L110.8,320L147.7,320L147.7,64L184.6,64L184.6,128L221.5,128L221.5,128L258.5,128L258.5,224L295.4,224L295.4,288L332.3,288L332.3,224L369.2,224L369.2,160L406.2,160L406.2,32L443.1,32L443.1,96L480,96L480,128L516.9,128L516.9,160L553.8,160L553.8,32L590.8,32L590.8,288L627.7,288L627.7,256L664.6,256L664.6,224L701.5,224L701.5,288L738.5,288L738.5,288L775.4,288L775.4,32L812.3,32L812.3,160L849.2,160L849.2,192L886.2,192L886.2,0L923.1,0L923.1,256L960,256L960,0L996.9,0L996.9,160L1033.8,160L1033.8,64L1070.8,64L1070.8,256L1107.7,256L1107.7,256L1144.6,256L1144.6,0L1181.5,0L1181.5,288L1218.5,288L1218.5,192L1255.4,192L1255.4,96L1292.3,96L1292.3,256L1329.2,256L1329.2,32L1366.2,32L1366.2,320L1403.1,320L1403.1,192L1440,192L1440,320L1403.1,320L1403.1,320L1366.2,320L1366.2,320L1329.2,320L1329.2,320L1292.3,320L1292.3,320L1255.4,320L1255.4,320L1218.5,320L1218.5,320L1181.5,320L1181.5,320L1144.6,320L1144.6,320L1107.7,320L1107.7,320L1070.8,320L1070.8,320L1033.8,320L1033.8,320L996.9,320L996.9,320L960,320L960,320L923.1,320L923.1,320L886.2,320L886.2,320L849.2,320L849.2,320L812.3,320L812.3,320L775.4,320L775.4,320L738.5,320L738.5,320L701.5,320L701.5,320L664.6,320L664.6,320L627.7,320L627.7,320L590.8,320L590.8,320L553.8,320L553.8,320L516.9,320L516.9,320L480,320L480,320L443.1,320L443.1,320L406.2,320L406.2,320L369.2,320L369.2,320L332.3,320L332.3,320L295.4,320L295.4,320L258.5,320L258.5,320L221.5,320L221.5,320L184.6,320L184.6,320L147.7,320L147.7,320L110.8,320L110.8,320L73.8,320L73.8,320L36.9,320L36.9,320L0,320L0,320Z"></path>

    <path class="" fill="rgb(244,164,96)" fill-opacity="1" d="M0,0L17.1,10.7C34.3,21,69,43,103,48C137.1,53,171,43,206,58.7C240,75,274,117,309,160C342.9,203,377,245,411,240C445.7,235,480,181,514,154.7C548.6,128,583,128,617,117.3C651.4,107,686,85,720,80C754.3,75,789,85,823,122.7C857.1,160,891,224,926,213.3C960,203,994,117,1029,90.7C1062.9,64,1097,96,1131,96C1165.7,96,1200,64,1234,53.3C1268.6,43,1303,53,1337,96C1371.4,139,1406,213,1423,250.7L1440,288L1440,320L1422.9,320C1405.7,320,1371,320,1337,320C1302.9,320,1269,320,1234,320C1200,320,1166,320,1131,320C1097.1,320,1063,320,1029,320C994.3,320,960,320,926,320C891.4,320,857,320,823,320C788.6,320,754,320,720,320C685.7,320,651,320,617,320C582.9,320,549,320,514,320C480,320,446,320,411,320C377.1,320,343,320,309,320C274.3,320,240,320,206,320C171.4,320,137,320,103,320C68.6,320,34,320,17,320L0,320Z"></path>
</svg>
  </header>

</div>
<script type="text/javascript" src="js/materialize.min.js"></script>

<style type="text/css">
  
  header{
    position: relative;
    margin: 0px;
    width: 100%;
    }

    .waves{
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    top: 0px;
    }
    
    section{
    display: flex;
    }

    .wave1{
  animation: moveWave1 3s 0.5s ease-in-out infinite alternate;
 
    }

    @keyframes moveWave1{
      from{
        transform: translateX(200px);
      }
    }

    .wave2{
      animation: moveWavedois 3s 0.5s ease-in-out infinite alternate;
     
    }

    @keyframes moveWavedois{
      from{
        transform: translateY(200px);
      }
    }



</style>

</body>
</html>