<?php


require_once "vista/REPORTES/fpdf184/fpdf.php";

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello World!');
$pdf->Output();




?>