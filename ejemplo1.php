<?php
require('./reporte/fpdf.php');

$pdf = new FPDF();

$pdf -> AddPage();
$pdf -> SetFont('Arial', 'B', 16);
$pdf -> Cell(40, 40, 'Trabajando con reportes', 0 , 1);
$pdf -> Output();


?>