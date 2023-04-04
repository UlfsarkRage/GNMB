<?php
    $Nombre = $Nombre;
    $Fecha = $Fecha;

    $val = "1";
        while ($val = "1") {

            sleep(3);
            $currentLocation = 'C:/Users/Usuario/Downloads/Certificado_Laboral_'.$Nombre.' '.$Fecha.'.pdf';
            $newLocation = 'C:/xampp/htdocs/Proyectos/Documentos_Generados/Certificado_Laboral_'.$Nombre.' '.$Fecha.'.pdf';

            if(is_file($currentLocation))
            {

                $moved = rename($currentLocation, $newLocation);
                $val = "0";
            }else {
                  
            }
                
        }


?>