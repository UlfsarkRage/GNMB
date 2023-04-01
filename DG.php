<?php

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Materials/LilMC.png" />
    <script src="../js/jquery-3.6.0.min.js"></script>
    <title>Decoder</title>
</head>

<style>
    header {
        background-color: black;
        height: 55px;
        display: flex;
        justify-content: space-between;
    }
    .headerlogo {
        display: flex;
        justify-content: flex-end;
        margin: 0% 0.5%;

    }
    
    .headerlogo a{
        color: white;
        text-decoration: none;
        font-weight: bold;

    }
    .headerlogo img{
        height:5vh; 
        margin:2% 0;

    }
</style>
<header>

    <?php



    ?>

    
    <div class="headerlogo">
        <a href="../inicio2.php"><img src="Materials/LilMC.png" alt=""></a>
    </div>
    <div class="headerlogo">
        <img src="../Materials/DevlabWhite.png" alt="">
    </div>

</header>


<style>
    @font-face {
        
        font-family: "Sancoale";
        src: url('../fuentes/SancoaleSoftenedMedium.otf');
    }
    body{
        font-family: 'Sancoale', sans-serif;
        margin: 0;
        min-height: 100%;
        background-image: url(../Materials/FondoestaticoWH.png);
        /*background-repeat: no-repeat;
        background-size: cover;*/
        overflow: scroll;
        background-attachment: fixed;
   

    }

    .busqueda {
        width: 90%;
        resize: none;
        height: 40vh;
        
        
    }

    #b1 {
        display: block;
        width: 100%;
        height: 48vh;
        margin-top: 10%;
        background-color: rgba(250, 0, 67, 0.1);
        border-radius: 1rem;
    }
    #b2  {
        display: none;
        width: 100%;
        height: 48vh;
        margin-top: 10%;
        background-color: rgba(250, 0, 67, 0.1);
        border-radius: 1rem;
    }
    #b3 {
        display: none;
        width: 100%;
        height: 48vh;
        margin-top: 10%;
        background-color: rgba(250, 0, 67, 0.1);
        border-radius: 1rem;
    }
    #b4 {
        display: none;
        width: 100%;
        height: 48vh;
        margin-top: 10%;
        background-color: rgba(250, 0, 67, 0.1);
        border-radius: 1rem;
    }
    .containerp {
        margin-top: 5%;
        display: flex;
    }
    #decoder{
        max-width: 100%;
    }
    .login-container {
        margin: 0% 3%;
        min-width: 20%;
        max-width: 20.5%;
    }
    .selector {
        margin: 5%;
       
    }
    #selector1 {
        height: 25px;
        width: 90%;
        font-weight: bold;
        font-family: 'Sancoale', sans-serif;
        font-size: 110%;

    
    }
    h3 {
        color: red;
        margin-bottom: 1%;
        margin-left: 5%;
        height: 25px;
        text-shadow: whitesmoke 2px 2px;
        font-size: 170%;
        font-weight: bold;
        display: inline-flex;
        margin-top: 8px;
    }

    .boton {
        font-family: 'Sancoale', sans-serif;
        background-color: rgba(250, 0, 67, 0.2);
        border-radius: 1rem;
        width: 100%;

    }
    .contbtn {
        width: 45%;
    }
</style>

<body>
    <div class="containerp" >
        <!--Columna del selector-->
        <div class="login-container">

            <!--Script del selector del tipo de consulta-->
            <script type="text/javascript" src="js/Selector1.js"></script>

            <!--Selector del tipo de consulta-->
            <div class="selector">
                <p>Seleccione el tipo de documento</p>
                <center>
                    <select name="Tipo" id="selector1" onchange="M1(this.value);">

                        <!--<option value="0">Selecciona</option>-->
                        <option value="b1">Certificado laboral</option>
                        <option value="b2">Retiro de cesantias</option>
                        <option value="b3">Apertura de cuenta</option>
                        <!--<option value="b4">Camel</option>-->

                    </select>
                </center>
            </div>
            <!--Cuadros para ingreso de datos-->
            <div id="b1">
                <form id="form1" action="Certificado_Laboral.php" method="POST" target="_blank">

                    <h3 class="titulos">Ingrese nombre 1</h3>
                    <center>
                        <textarea class="busqueda" name="texto1" ></textarea>
                    </center>
         
                    <div class="botonera" style="display: flex; margin:5%; justify-content:space-around;">
                        <!--Boton de buscar-->
                        <div class="contbtn">
                            
                            <button type="submit" name="buscar" class="btn boton">Buscar</button>

                        </div>
                    </div>
                    
                </form>
            
            </div>
            <div id="b2">
                <form id="form2" action="Retiro_Cesantias.php" method="POST" target="_blank">

                    <h3 class="titulos">Ingrese nombre 2</h3>
                    <center>
                        <textarea class="busqueda" name="texto2" ></textarea>
                    </center>

                    <div class="botonera" style="display: flex; margin:5%; justify-content:space-around;">
                        <!--Boton de buscar-->
                        <div class="contbtn">
                            
                            <button type="submit" name="buscar" class="btn boton">Buscar</button>

                        </div>
                    </div>

                    </form>
            
            </div>
            <div id="b3">
                <form id="form1" action="Apertura_Cuenta.php" method="POST" target="_blank">

                    <h3 class="titulos">Ingrese nombre 3</h3>
                    <center>
                        <textarea class="busqueda" name="texto3" ></textarea>
                    </center>

                    <div class="botonera" style="display: flex; margin:5%; justify-content:space-around;">
                        <!--Boton de buscar-->
                        <div class="contbtn">
                            
                            <button type="submit" name="buscar" class="btn boton">Buscar</button>

                        </div>
                    </div>

                </form>
            
            </div>
        </div>
        

    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>


</html>