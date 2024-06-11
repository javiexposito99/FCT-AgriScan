<?php
//============================================================+
// File name   : example_001.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 001 for TCPDF class
//               Default Header and Footer
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: Default Header and Footer
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Icluimos la libreria tcpdf.
include('C:/xampp/htdocs/FCT/library/tcpdf.php');

// Llamamos a la conexion con la BD.
require_once('./config.php');

// Limpiar la memoria.
ob_end_clean();

// Header estatico con nuestro logotipo.
class MYPDF extends TCPDF{
    public function Header(){
        $bMargin = $this -> getBreakMargin();
        $auto_page_break = $this -> AutoPageBreak;
        $this -> setAutoPageBreak(false,0);
        $img_file = dirname(__FILE__).'../img/logo-icono.jpeg';
        $this->Image($img_file,85 , 8, 20, 25, '', '', '', false, 30, '', false, false, 0);
        $this->setAutoPageBreak($auto_page_break, $bMargin);
        $this->setPageMark();
    }
}

// Iniciamos un nuevo pdf.
$pdf = new MYPDF(PDF_PAGE_ORIENTATION, 'mm', 'Letter', true, 'UTF-8', false);

// Establecer los margenes del PDF.
$pdf->setMargins(20, 35, 25);
$pdf->setHeaderMargin(20);
$pdf->setPrintFooter(false);
$pdf->setPrintHeader(true); // Eliminar la linea superior del documento PDF por defecto.
$pdf->setAutoPageBreak(true, PDF_MARGIN_BOTTOM); // Activar o desactivar el modo salto de página.

// Información del PDF.
$pdf->setCreator('Javier');
$pdf->setAuthor('Javier');
$pdf->setTitle('Cuaderno Agricola');

// Agregar la primera página.
$pdf->AddPage();
$pdf->setFont('helvetica','B',10); //Tipo de fuente y tamaño de la letra.
$pdf->setXY(150, 20);
$pdf->Write(0, 'Código: 0014ABC');
$pdf->setXY(150, 30);
$pdf->Write(0, 'Hora: '. date('d-m-Y'));
$pdf->setXY(150, 30);
$pdf->Write(0, 'Hora: '. date('h:i A'));


$canal= "WebDeveloper";
$pdf->setFont('helvetica','B',10); //Tipo de fuente y tamaño de la letra.
$pdf->setXY(15, 20); //Margen en X e Y.
$pdf->setTextColor(204, 0, 0);
$pdf->Write(0, 'Desarrollador: Javier');
$pdf->setTextColor(0, 0, 0); //Color negro.
$pdf->setXY(15, 25); //Margen en X e Y.
$pdf->Write(0, 'Canal: '. $canal);


$pdf->Ln(35); //Salto de linea.
$pdf->Cell(40,26,'',0,0,'C');
/*$pdf->setDrawColor(50, 0, 0, 0);
$pdf->setFillColor(100, 0, 0, 0);*/
$pdf->setTextColor(34,68,136);
//$pdf->setTextColor(255,204,0); //Amarillo
//$pdf->setTextColor(34,68,136); //Azul
//$pdf->setTextColor(153,204,0); //Verde
//$pdf->setTextColor(204,0,0); //Marron
//$pdf->setTextColor(245,245,205); //Gris claro
//$pdf->setTextColor(100,0,0); //Color carne
$pdf->setFont('helvetica','B',15);
$pdf->Cell(100,6,'LISTA DE EMPLEADOS',0,0,'C');


$pdf->Ln(10); //Salto de linea.
$pdf->setTextColor(0,0,0);

//Cabecera de la tabla.
$pdf->setFillColor(232, 232, 232);
$pdf->setFont('helvetica','B',12); // La B es para letras en Negritas.
$pdf->Cell(40,6,'Nombre',1,0,'C',1);
$pdf->Cell(60,6,'Email',1,0,'C',1);
$pdf->Cell(35,6,'Sueldo',1,0,'C',1);
$pdf->Cell(35,6,'Fecha Ingreso',1,1,'C',1);

/*El 1 despues de fecha de ingreso indica que hasta alli llega la linea.*/
$pdf->setFont('helvetica','',10);


//SQL para consultas Empleados.
$fechaInit = date("Y-m-d", strtotime($_POST['fecha_ingreso']));
$fechaFin = date("Y-m-d", strtotime($_POST['fechaFin']));

$sqlTrabajadores = ("SELECT * FROM trabajadores WHERE (fecha_ingreso>='$fechaInit' and fecha_ingreso");
//$sqlTrabajadores = ("SELECT * FROM trabajadores");
$query = mysqli_query($con, $sqlTrabajadores);

//$i = 1; Eso ya no debeiar de funcionar.

    while ($dataRow = mysqli_fetch_array($query)){
        $pdf->Cell(40,6,($dataRow['nombre']),1,0,'C');
        $pdf->Cell(60,6,($dataRow['email']),1,0,'C');
        $pdf->Cell(35,6,('$ '.$dataRow['sueldo']),1,0,'C');
        $pdf->Cell(35,6,(date('m-d-Y', strtotime($dataRow['fecha_ingreso']))),1,1,'C');

    }

$pdf->AddPage(); //Agregar una nueva pagina.

$pdf->Output('Resumen_Pedido_'.date('d_m_y').'.pdf','I');
//Output funciona que recibe 2 parametros, el nombre del archivo, ver archivo o descargar, la D es para forzar una descarga.



























