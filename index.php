?>
<!DOCTYPE html>
 <html > <head> <meta charset="utf-8"> <title>PRESTAPPME</title> <link rel="stylesheet" href="css/reset.css"> <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'> <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'> <link rel="stylesheet" href="css/style.css"> 
 <style type="text/css">
  body { background-image: url(logo.png);
  background-color: #999;
   background-repeat: no-repeat;
    } 
   </style> </head> <body> <div class="pen-title"> </div> <div class="container"> <div style="filter:alpha(opacity=50); opacity:0.5;"
  class="card"></div> <div style="background-color: rgba(0, 139, 139, 0.5)" class="card"> <h1 class="title">INGRESAR</h1>
       <p>&nbsp;</p> 
     <div class="input-container"> 
  
   <div class="bar"></div> </div> <div class="input-container">
    <input type="password" id="Password" required/> <label for="Password">Contraseña</label> <div class="bar">
  </div> 
  </div>
   <div class="button-container"> 
    
   <button class="myButton" onclick="document.location.href='inicio/index.php'" ><span><a class="myLink">INGRESAR</a></span></button> 
   </div>
   <br>
    <div class="pen-title2">
     <div class="button-container"> <input type="checkbox" name="condiciones" checked="checked"/> <span2>Recuerdame</span2> </div> </div> <div class="footer"><a href=""> <h6>Olvidaste tu contraseña?</h6></a></div> </form> </div> <div class="card alt"> <div class="toggle"></div> <h1 class="title">Registrate <div class="close"></div> </h1> <form> <div class="input-container"> <input type="text" id="Username" required/> <label for="Username">telefono</label> <div class="bar"></div> </div> <div class="input-container"> <input type="text" id="Username" required/> <label for="Username">Nombre completo</label> <div class="bar"></div> </div> <div class="input-container"> <input type="text" id="Username" required/> <label for="Username">Email</label> <div class="bar"></div> </div> <div class="input-container"> <input type="password" id="Password" required/> <label for="Password">Contraseña</label> <div class="bar"></div> </div> <div class="input-container"> <input type="password" id="Repeat Password" required/> <label for="Repeat Password">Confirma Contraseña</label> <div class="bar"></div> </div> <div class="button-container">
     <button class="myButton" onclick="document.location.href='inicio/validacion.php'" ><span><a class="myLink">Valida tu facebook</a></span></button> 
      <button><span>Guardar</span> </button>
   
     </div> </form> </div> </div> <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> <script src="js/index.js"></script> </body> </html> 
<?php