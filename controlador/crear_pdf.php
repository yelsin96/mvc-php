<?php
//Incluimos el fichero de conexion
//include_once("dbconect.php");
//Incluimos la libreria PDF
include_once('vista/fpdf/fpdf.php');
require_once("modelo/index.php");

class PDF extends FPDF
{
    // Funcion encargado de realizar el encabezado
    function Header()
    {
        // Logo
        $this->Image('vista/img/logo.jpg',10,-1,70);
        $this->SetFont('Arial','B',13);
        // Move to the right
        $this->Cell(80);
        // Title
        $this->Cell(95,10,'Lista de productos',1,0,'C');
        // Line break
        $this->Ln(20);
    }
    // Funcion pie de pagina
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
    }
    function generar(){
        $producto 	=	new Modelo();
        $result=$producto->mostrar("productos","1");

        $pdf = new PDF();
        //header
        $pdf->AddPage();
        //foter page
        $pdf->AliasNbPages();
        $pdf->SetFont('Arial','B',12);
        // Declaramos el ancho de las columnas
        $w = array(15, 80, 20, 30,30);
        //Declaramos el encabezado de la tabla
        $pdf->Cell(15,12,'ID',1);
        $pdf->Cell(80,12,'NOMBRE',1);
        $pdf->Cell(20,12,'PRECIO',1);
        $pdf->Cell(30,12,'PROVEDOR',1);
        $pdf->Cell(30,12,'CATEGORIA',1);
        $pdf->Ln();
        $pdf->SetFont('Arial','',12);
        //Mostramos el contenido de la tabla
        foreach ($result as $key => $value)
        {
            foreach ($value as $row){
                $pdf->Cell($w[0],6,$row['id'],1);
                $pdf->Cell($w[1],6,$row['nombre'],1);
                $pdf->Cell($w[2],6,$row['precio'],1);
                $pdf->Cell($w[3],6,number_format($row['id_provedor']),1);
                $pdf->Cell($w[3],6,$row['id_categoria'],1);
                $pdf->Ln();
            }
        }
        $pdf->Output();
    }
}


?>