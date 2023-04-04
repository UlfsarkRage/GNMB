<?php
 include("Readme.php");
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Materials/LilMC.png" />
    <link rel="stylesheet" href="css/Estilos.css">
    <link rel="stylesheet" href="css/ebtn.css">
    <script src="js/jquery-3.6.0.min.js"></script>
    <title>Generador de documentos</title>
</head>

<body>
    <header class="nav-bar">
        <div class="nav-bar-item">
            <a><img src="Materials/LilMC.png" width="50" height="50" alt="MC Logo"></a>
        </div>
        <div class="nav-bar-item">
            <a><img src="Materials/GNMB.png" width="150" height="50" alt="GNMB Logo"></a>
        </div>
    </header>  

    <div class="Tittle2">
        <h1>Generador de Documentos</h1>
    </div>


    <div class="container">
        
        <div class="login-container">
           
            <!--Selector del tipo de consulta-->
            <div class="selector">
                <div class="CTittle3">
                    <label class="Tittle3">Documento a Generar</label>
                </div>
                <div class="BSelector">
                    <select name="Tipo" id="selector1" onchange="M1(this.value);" required >
                        <option value="0">Seleccione</option>
                        <option value="b1">Certificado Laboral</option>
                        <option value="b2">Retiro de Cesantias</option>
                        <option value="b3">Apertura de Cuenta</option>
                    </select>
                </div>
            </div>


            <!--Cuadros para ingreso de datos-->

            <div class="selector" id="b1">
                <form id="form1" action="Certificado_Laboral.php" method="POST" target="_blank">
                    <div class="selector">
                        <div class="BSelector">
                            <label class="Identificación_1" for="Identificación_1">Ingrese número de identificación</label>
                        </div>
                        <div class="BSelector">
                            <input type="number" name="Identificación_1">
                        </div>
                    </div>
                    <div class="botonera" style="display: flex; margin:5%; justify-content:space-around;">
                        <div class="contbtn1"> <!--Boton de buscar-->
                            <a href="#" class="btn-neon">
                                <span id="span1"></span>
                                <span id="span2"></span>
                                <span id="span3"></span>
                                <span id="span4"></span>
                                <button type="submit" name="buscar" class="btn boton">Generar</button>
                            </a>
                        </div>
                    </div>
                </form>
            </div>

            <div class="selector" id="b2">
                <form id="form2" action="Retiro_Cesantias.php" method="POST" target="_blank">
                    <div class="selector">
                        <div class="BSelector">
                            <label class="Identificación_2" for="Identificación_2">Ingrese número de identificación</label>
                        </div>
                        <div class="BSelector">
                            <input type="number" name="Identificación_2">
                        </div>
                    </div>
                    <div class="botonera" style="display: flex; margin:5%; justify-content:space-around;">
                        <div class="contbtn1"> <!--Boton de buscar-->
                            <a href="#" class="btn-neon">
                                <span id="span1"></span>
                                <span id="span2"></span>
                                <span id="span3"></span>
                                <span id="span4"></span>
                                <button type="submit" name="buscar" class="btn boton">Generar</button>
                            </a>
                        </div>
                    </div>
                </form>
            </div>

            <div class="selector" id="b3">
                <form id="form3" action="Apertura_Cuenta.php" method="POST" target="_blank">
                    <div class="selector">
                        <div class="BSelector">
                            <label class="Identificación_3" for="Identificación_3">Ingrese número de identificación</label>
                        </div>
                        <div class="BSelector">
                            <input type="number" name="Identificación_3">
                        </div>
                    </div>
                    <div class="botonera" style="display: flex; margin:5%; justify-content:space-around;">
                        <div class="contbtn1"> <!--Boton de buscar-->
                            <a href="#" class="btn-neon">
                                <span id="span1"></span>
                                <span id="span2"></span>
                                <span id="span3"></span>
                                <span id="span4"></span>
                                <button type="submit" name="buscar" class="btn boton">Generar</button>
                            </a>
                        </div>
                    </div>
                </form>
            </div>

        </div>
        

    </div>

    <!--Script del selector del tipo de consulta-->
    <script type="text/javascript" src="js/Selector1.js"></script>
</body>


</html>