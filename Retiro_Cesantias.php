<?php
// include class
require('fpdf/fpdf.php');
include("Conexion.php");


if(isset($_POST['Identificación_2'])){

    $ID = $_POST['Identificación_2'];
    if(!empty($ID)){

        $sql = "select * from empleados where Numero_Documento = ".$ID." and Fecha_Salida is null";
        $Cn1 = mysqli_query($conexion, $sql);
        $Exist = mysqli_fetch_array($Cn1);

        if( $Exist[2] != null ){
    
            
            $Fecha = date("j, n, Y");
            $Fecha_Hora = date("d-m-Y h:i:s");
            $Nombre = $Exist[2];
            $Cargo = $Exist[5];
            $Salario = $Exist[7];
            $Fecha_Ingreso = $Exist[3];
            $Correo = $Exist[6];
            

            if (!empty($Nombre)) {

            
            
                // create document
                $pdf = new FPDF();
                $pdf->AddPage();

                // config document
                $pdf->SetTitle('Solicitud_Retiro_Cesantias');
                $pdf->SetAuthor('GNMB');
                $pdf->SetCreator('GNMB');

                // add title

                $pdf->SetFont('Arial', 'B', 24);
                $pdf->Cell(0, 10, ' '  , 0, 1);
                $pdf->Ln();
                $pdf->Ln();
            
                $pdf->Cell(0, 10, 'Bogota, ' . $Fecha , 0, 1);
                $pdf->Ln();
                $pdf->Ln();
                $pdf->Ln();
                //$pdf->Cell(0, 10,  'Hola ' . $Nombre , 0, 1);
                //$pdf->Ln();
                //$pdf->Cell(0, 10,  'Hola ' . $Nombre , 0, 1);
                //$pdf->Ln();
                $pdf->SetFont('Arial', 'B', 16);
                $pdf->Cell(0, 8, 'A quien corresponda: ' , 0, 1);
                $pdf->Ln();
                $pdf->Cell(0, 8, 'ASUNTO: Retiro Parcial de Cesantias  ' , 0, 1);
                $pdf->Ln();
                $pdf->Ln();

                // add text
                $pdf->SetFont('Arial', '', 12);
                $pdf->MultiCell(0, 7, utf8_decode('Según lo dispuesto en el artículo 21 de la Ley 1429 de 2010 (que modificó el Art. 256 del Código Sustantivo del Trabajo) y a la aclaración contenida en la Carta Circular 011 del 7 de Febrero de 2011 del Ministerio de la Protección Social, nos permitimos informarles que hemos autorizado el retiro parcial de vivienda del funcionario(a) señalado más adelante, en las siguientes condiciones: '), 0, 1);
                $pdf->Ln();
                $pdf->MultiCell(0, 7, utf8_decode('Nombre del funcionario: '.$Nombre.'.'), 0, 1);
                $pdf->MultiCell(0, 7, utf8_decode('Identificación: '.$ID.'.'), 0, 1);
                $pdf->MultiCell(0, 7, utf8_decode('Valor a retirar: __________________'), 0, 1);
                $pdf->MultiCell(0, 7, utf8_decode('Concepto del retiro: __________________'), 0, 1);
                $pdf->Ln();
                
                
                $pdf->Ln();
                $pdf->Ln();
                $pdf->Ln();
                $pdf->MultiCell(0, 7, utf8_decode('Nicolas Murcia Buitrago'), 0, 1);
                $pdf->MultiCell(0, 7, utf8_decode('Gerente de Recursos Humanos'), 0, 1);
                $pdf->Ln();


                $pdf->Output('F', 'C:\xampp\htdocs\Proyectos\Documentos_Generados\Retiro_Cesantias_'.$Nombre.' '.$Fecha.'.pdf');
            
                $file = file_get_contents('C:\xampp\htdocs\Proyectos\Documentos_Generados\Retiro_Cesantias_'.$Nombre.' '.$Fecha.'.pdf');

                $base64_pdf = base64_encode($file);
                
                $sql = "insert into seguimiento_uso (`Numero_Documento`, `Nombre`, `Fecha`, `Tipo_Solicitud`, `A_donde_se_envia`, `Base_64`) VALUES ('$ID','$Nombre',current_timestamp(),'Retiro Cesantias','$Correo','$base64_pdf')";
                mysqli_query($conexion, $sql);

                mysqli_close($conexion);
                echo "<script> alert('Se han descargado los archivos correctamente'); </script>";
                
                echo "<script> window.location='DG.php'; </script>";
            
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
                mysqli_close($conexion);
            }
        
        }
        else {
            mysqli_close($conexion);
            echo "<script> alert('Usted no es colaborador actual en la compañia'); </script>";
            echo "<script> window.location='DG.php'; </script>";
        }
    }else{

        mysqli_close($conexion);
        echo "<script> alert('Ingrese un número de documento valido'); </script>";
        
        echo "<script> window.location='DG.php'; </script>";

    }

}