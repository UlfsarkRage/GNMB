<?php
// include class
require('fpdf/fpdf.php');
include("Conexion.php");


if(isset($_POST['Identificación_3'])){

    $ID = $_POST['Identificación_3'];
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
        

        $sql = "insert into seguimiento_uso (`Numero_Documento`, `Nombre`, `Fecha`, `Tipo_Solicitud`, `A_donde_se_envia`, `Base_64`) VALUES ('$ID','$Nombre',current_timestamp(),'Apertura de cuenta bancaria','$Correo','N/A')";

        if (mysqli_query($conexion, $sql)) {

          
        
            // create document
            $pdf = new FPDF();
            $pdf->AddPage();

            // config document
            $pdf->SetTitle('Solicitud_Apertura_Cuenta_Bancaria');
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
            $pdf->Cell(0, 8, 'ASUNTO: Apertura de cuenta bancaria  ' , 0, 1);
            $pdf->Ln();
            $pdf->Ln();

            // add text
            $pdf->SetFont('Arial', '', 12);
            $pdf->MultiCell(0, 7, utf8_decode('Cordialmente solicito nos colaboran con la apertura de cuenta de nomina del señor(a)  '.$Nombre.' Identificado con la CC '.$ID.' quien se encuentra firmando contrato y es indispensable para la culminación y legalización del proceso de contratación. Teniendo en cuenta que se debe consignar la nomina a una cuenta de ahorros.'), 0, 1);
            $pdf->Ln();
            $pdf->Ln();
            $pdf->Ln();
            $pdf->Ln();
            $pdf->Ln();
            $pdf->MultiCell(0, 7, utf8_decode('Nicolas Murcia Buitrago'), 0, 1);
            $pdf->MultiCell(0, 7, utf8_decode('Gerente de Recursos Humanos'), 0, 1);
            $pdf->Ln();

            // add image
            $pdf->Image('Materials/Navidaddog.jpg', null, null, 50);

            // output file
            $pdf->Output('I', 'Solicitud_Apertura_Cuenta_Bancaria'.$Nombre.'.pdf');
            mysqli_close($conexion);
           
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

}