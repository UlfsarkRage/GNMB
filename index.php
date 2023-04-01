<?php

session_start();
session_destroy();

?>
<!DOCTYPE html>
<html lang="es">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta http-equiv='cache-control' content='no-cache'>
      <meta http-equiv='expires' content='0'>
      <meta http-equiv='pragma' content='no-cache'>
      <link rel="stylesheet" type="text/css" href="css/icons/flaticon.css"> 
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <script src="js/jquery-3.6.0.min.js"></script>
     
      <link rel="stylesheet" href="css/styleslogin.css?n=1">
      <link rel="shortcut icon" href="../Materials/LogoTP.png" />

      <title>DevLab</title>
      
  </head>


  <body >
    <div id="logueo" style="margin:5% auto; overflow:hidden; display:flex; justify-content:space-around;">
      <center>
        <form class="form-signin" id="frm" style="width: min-content; display:block;">
            <div>
              <center>
                <img src="Materials/HOME red.png">
              </center>
            </div>     
            <div class="form-group" style="margin-bottom:0%;">
            
              <span class="inputWithIcon" style="margin-right:40%;">
                <input    name="usuario" id="inputUsuario"  required="" type="text" placeholder="Usuario">
                <i class="flaticon-usuario" aria-hidden="true"></i>
              </span>
            </div>
            <div class="form-group" >
              <span class="inputWithIcon1" style="margin-right:40%;">
                  <input  name="pass" id="inputPass" required type="password" placeholder="Contraseña" autocomplete="off">
                  <i class="flaticon-clave" aria-hidden="true"></i>
              </span>
            </div>
            <div class="form-group" id="msj_Login">

            </div>    
            <div id="loading" class="rounded" style="display:none;">
                  <img src="materials/loading.gif" alt="" style="width:50px">
            </div>
            <div>
              <button  class="btn btn-lg  text-white btn-block" type="submit" id="login_btn" >Ingresa</button>
            </div>
            <br>
            <div class="redirect">
              <a href="PswRecovery.php">Olvidaste tu contraseña?</a>
              <a href="registro.php">O registrate!</a>
            </div>
        </form>
      </center>
    </div>
  </body>

  
  <footer>
    <center>
      <div style="display: flex; justify-content:space-between; margin:0% 3%; position:absolute; width:100%;   ">
        <div style="max-width: 40%;">
          <span class="derechos"  style="margin:auto; ">DESIGNED, DEVELOPED & POWERED BY DEVLAB</span>
          <br>
          <span class="derechos"  style="margin:auto;">ALL RIGHTS RESERVED @TELEPERFORMANCE COLOMBIA</span>
        </div>
        
        <div style="max-width: 20%;">
          <img style="max-width: 70%;" src="Materials/DevlabBlack.png">
        </div>
      </div>
    </center>
  </footer>
  
  <script src="js/login.js"></script>
</html>