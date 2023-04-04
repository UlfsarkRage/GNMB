<?php
// include class
require('fpdf/fpdf.php');
include("Conexion.php");


if(isset($_POST['Identificación_1'])){

    $ID = $_POST['Identificación_1'];
    $sql = "select * from empleados where Numero_Documento = ".$ID." and Fecha_Salida is null";
    $Cn1 = mysqli_query($conexion, $sql);
    $Exist = mysqli_fetch_array($Cn1);

    if( $Exist[2] != null ){
   
        //Asignacion de datos a las variables
        $Fecha = date("j, n, Y");
        $Fecha_Hora = date("d-m-Y h:i:s");
        $Nombre = $Exist[2];
        $Cargo = $Exist[5];
        $Salario = $Exist[7];
        $Fecha_Ingreso = $Exist[3];
        $Correo = $Exist[6];
        
        
        //$base64_pdf = "N/AA";
        //$sql = "insert into seguimiento_uso (`Numero_Documento`, `Nombre`, `Fecha`, `Tipo_Solicitud`, `A_donde_se_envia`, `Base_64`) VALUES ('$ID','$Nombre',current_timestamp(),'Certificado Laboral','$Correo','$base64_pdf')";

        

        

        if (!empty($Nombre)) {


                    
            // create document
            $pdf = new FPDF();
            $pdf->AddPage();

            // config document
            $pdf->SetTitle('Solicitud_Certificado_Laboral');
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
            $pdf->Cell(0, 8, 'ASUNTO: Certificado Laboral  ' , 0, 1);
            $pdf->Ln();
            $pdf->Ln();

            // add text
            $pdf->SetFont('Arial', '', 12);
            $pdf->MultiCell(0, 7, utf8_decode('Por este medio le informo que el señor '.$Nombre. ' identificado con el  número de documento '.$ID.' se desempeña en el sector de IT como '.$Cargo.' desde el '.$Fecha_Ingreso.'.'), 0, 1);
            $pdf->Ln();
            $pdf->MultiCell(0, 7, utf8_decode('Durante ese período ha estado percibiendo un salario promedio bruto de: '.$Salario.' COP.'), 0, 1);
            $pdf->Ln();
            $pdf->Ln();
            $pdf->MultiCell(0, 7, utf8_decode('Le entregamos la presente constancia de trabajo, para los fines que estime conveniente.'), 0, 1);
            $pdf->Ln();
            $pdf->Ln();
            $pdf->Ln();
            $pdf->Ln();
            $pdf->Ln();
            $pdf->MultiCell(0, 7, utf8_decode('Nicolas Murcia Buitrago'), 0, 1);
            $pdf->MultiCell(0, 7, utf8_decode('Gerente de Recursos Humanos'), 0, 1);
            $pdf->Ln();

            // add image
            //$pdf->Image('assets/fpdf-code.png', null, null, 180);
            //$Ruta = "C:\xampp\htdocs\Proyectos\Documentos_Generados";
            // output file
            $pdf->Output('F', 'C:\xampp\htdocs\Proyectos\Documentos_Generados\Certificado_Laboral_'.$Nombre.' '.$Fecha.'.pdf');
            //$pdf->Output('Certificado_Laboral_'.$Nombre.' '.$Fecha.'.pdf','D');

            $file = file_get_contents('C:\xampp\htdocs\Proyectos\Documentos_Generados\Certificado_Laboral_'.$Nombre.' '.$Fecha.'.pdf');

            $base64_pdf = base64_encode($file);
            //$base64_pdf = "N/AA";
            $sql = "insert into seguimiento_uso (`Numero_Documento`, `Nombre`, `Fecha`, `Tipo_Solicitud`, `A_donde_se_envia`, `Base_64`) VALUES ('$ID','$Nombre',current_timestamp(),'Certificado Laboral','$Correo','$base64_pdf')";
            mysqli_query($conexion, $sql);
        

            

            mysqli_close($conexion);
            echo "<script> alert('Se han descargado los archivos correctamente'); </script>";
            //echo "<script> setTimeout(\"location.href='DG.php'\",1000) </script>";
            echo "<script> window.location='DG.php'; </script>";

           
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
            mysqli_close($conexion);
        }
            

        //include("Movimiento_Archivo.php");

        

       
    }
    else {
        mysqli_close($conexion);
        echo "<script> alert('Usted no es colaborador actual en la compañia'); </script>";
        //echo "<script> setTimeout(\"location.href='DG.php'\",1000) </script>";
        echo "<script> window.location='DG.php'; </script>";
    }

}