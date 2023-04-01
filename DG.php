<?php

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Materials/LilMC.png" />
    <link rel="stylesheet" href="css/Estilos.css">
    <script src="../js/jquery-3.6.0.min.js"></script>
    <title>Generador de documentos</title>
</head>


<header>

    <?php


    ?>

    
    <div class="headerlogo">
        <a href="../inicio2.php"><img src="Materials/LilMC.png" alt=""></a>
    </div>
    <div class="headerlogo">
        <img src="Materials/GNMB.png" alt="">
    </div>

</header>



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