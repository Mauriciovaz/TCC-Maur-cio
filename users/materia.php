<!DOCTYPE html>
<html>
<head>
	<title>Adicionar conteúdo</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="../js/materialize.min.js"></script>
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  	<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="../ckeditor/adapters/jquery.js"></script>
    <script type="text/javascript" src="../ckeditor/config.js"></script>
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
      <a href="pagina_professor.php" style="margin-left: 4px;">Voltar</a>
    </div>
  </nav>
  <br>
  <br>
<div class="row">
    <div class="col s12 m8 push-m2 " >
      <div class="card">
        
        <div class="card-content" id="card">
        
          <br>
          <form action="../actions/salvar_materia.php" method="POST" enctype="multipart/form-data">
          <fieldset>
            <legend class="center" style="font-size: 25px; font-weight: bold;">Adicionar Conteúdo</legend>
          <div style="margin-left: 10px; font-size: 20px; font-family: arial; font-weight: bold;">Título: 
          <input type="text" name="titulo" style="width: 40%; margin-left: 20px;" placeholder="Adicione aqui o título" maxlength="100" minlength="1" required>
          </div>
          
          <br>
               	 <div class="row">
               	  <div style="margin-left: 20px; font-size: 20px; font-weight: bold;">Conteúdo: 
               	  </div>
                  <div class="input-field col s12">
                  <center>
                  <textarea id="conteudo" class="materialize-textarea" style="width: 90%; text-align: left; height: 200px;" name="conteudo" placeholder="Adicionar conteúdo" maxlength="10000" minlength="1" required></textarea>
                  
                  </div>
                </center>
               </div>
               <script src="../ckeditor/ckeditor.js"> </script>
              <script>
               CKEDITOR.replace('conteudo');
                
               </script>
          <br>

          <div class="file-field input-field">
      <div class="btn">
        <span>Foto</span>
        <input type="file" name="arquivo">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text" style="max-width: 45%">
      </div>
    </div>

          <p style="margin-left: 8px;">Ativar o modo escuro:</p>
          <div class="switch">
          <label for="input-dark-mode">
          <a class="button"></a>
          <input type="checkbox" id="input-dark-mode">
          <span class="lever"></span>
          </label>
          </div>
          <center>
          <a href="pagina_professor.php" class="btn" style="background-color: red;"> Cancelar</a>
          <input type="submit" name="salvar" class="btn" value="salvar">
          </center>
          </fieldset>
          </form>
         
        </div>
      </div>
    </div>
  </div>
  
</body>
</html>