<!DOCTYPE html>
<html>
<head>
	<title>Conteúdo</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="../js/jquery-3.4.1.js"> </script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <style type="text/css">
       html{
       background-color: #7FFFD4;
       }
       nav{
        background-color: #1976d2;
        }
        html[dark]{
        background-color: #808080;
        }
        #navbar[dark]{
        background-color: black;
        }
        #card{
          background-color: rgb(255,255,255);
          color: rgb(0,0,0);
        }
        #card[dark]{
        background-color: #696969;
        color: white;
        }
     </style>
</head>
<body>
<script type="text/javascript">
  // Background com tema escuro:
    document.addEventListener('DOMContentLoaded', () => {
    const html = document.querySelector('html')
    const inputDarkMode = document.getElementById('input-dark-mode')
        
    inputDarkMode.addEventListener('change', () => {
        if(inputDarkMode.checked){
            html.setAttribute("dark", "true")
        }else{
            html.removeAttribute("dark")
        }
    })
})

// Navbar com tema escuro: 
document.addEventListener('DOMContentLoaded', () => {
    const navbar = document.getElementById('navbar')
    const inputDarkMode = document.getElementById('input-dark-mode')
        
    inputDarkMode.addEventListener('change', () => {
        if(inputDarkMode.checked){
            navbar.setAttribute("dark", "true")
        }else{
            navbar.removeAttribute("dark")
        }
    })
})

// Card com tema escuro:
document.addEventListener('DOMContentLoaded', () => {
    const card = document.getElementById('card')
    const inputDarkMode = document.getElementById('input-dark-mode')
        
    inputDarkMode.addEventListener('change', () => {
        if(inputDarkMode.checked){
            card.setAttribute("dark", "true")
        }else{
            card.removeAttribute("dark")
        }
    })
})
</script>
<nav id="navbar">
    <div class="nav-wrapper"> 
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
      <div class="card" id="card">
        <div class="card-content">
        <p style="margin-left: 8px;">Ativar o modo escuro:</p>
          <div class="switch">
          <label for="input-dark-mode">
          <a class="button"></a>
          <input type="checkbox" id="input-dark-mode">
          <span class="lever"></span>
          </label>
          </div>
        <center>
          <span class="card-title" style="font-size: 30px; font-weight: bold;"> <?php echo $linha['titulo']; ?> </span>
        </center>
       

        <div style="font-size: 15px;">
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