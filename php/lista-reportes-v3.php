<?php
require('../reporte/fpdf.php');

class PDFReporte extends FPDF{
    function Header()
    {
        $this -> Image('../img/ucateci.png', 170, 8 ,80);
        $this -> SetFont('Arial', 'B', 16);
        $this -> Cell(80);
        $this -> Cell(30, 10, 'Lista de Estudiantes', 0, 0, 'C');
        $this-> Ln(7);

        $this -> SetFont('Arial','B',14);
        $this -> Cell(0,25,"Materia:");
        $this -> SetFont('Arial','I',14);
        $this -> Cell(-124,25,"Diseno de Sistemas", 0, 0, 'R');
        $this-> Ln(7);

        $this -> SetFont('Arial','B',14);
        $this -> Cell(0,25,"Profesor:");
        $this -> SetFont('Arial','I',14);
        $this -> Cell(-134,25,"Harold Tejada", 0, 0, 'R');
        $this-> Ln(7);

        $this -> SetFont('Arial','B',14);
        $this -> Cell(0,25,"Curso:");
        $this -> SetFont('Arial','I',14);
        $this -> Cell(-152,25,"H2-2020", 0, 0, 'R');

        //Salto de Pagina
        $this -> Ln(20);
    }

    function Footer()
    {
        //Definir posicion final
        $this-> SetY(-15);

        //Definir tipo de letra
        $this -> SetFont('Arial', 'I', 8);

        //Formato de Salida
        $this->Cell(0, 10, 'Pag.'.$this -> PageNo().'/{nb}', 0, 0, 'C');
    }
}
// Defino parametros para nombres y matriculas.
$mysqli=new mysqli("localhost","report","reporte01","bd_estudiantes");
$consulta="SELECT * FROM estudiantes";
$resultado=$mysqli->query($consulta);

// Empezar a trabajar con el reporte
$pdf = new PDFReporte();

$pdf -> AliasNbPages();
$pdf -> AddPage();
$pdf -> SetFillColor(255, 255, 255);
$pdf -> SetDrawColor(255, 179, 0);

$pdf -> cell(35,7,'Matricula',0,0,'C',True);
$pdf -> cell(60,7,'Nombre',0,0,'C',TRUE);
$pdf -> cell(60,7,'Apellido',0,0,'C',TRUE);
$pdf -> cell(20,7,utf8_decode('Calificación'),0,0,'C',TRUE);

//Asignar borde  a la linea
$pdf->SetLineWidth(1);

$pdf -> Line(15,65,190,65);
$pdf -> Ln(15);
$pdf -> SetFont('Arial','',12);
$pdf -> SetLineWidth(0);
$pdf -> SetFillColor(230, 230, 230);
$pdf -> SetDrawColor(255, 255, 255);

while($row=$resultado->fetch_assoc()){
    $pdf->cell(41,10,$row['matricula'],1,0,'C',True);
    $pdf->cell(60,10,$row['nombres'],1,0,'C',TRUE);
    $pdf->cell(60,10,$row['apellidos'],1,0,'C',TRUE);
    $pdf->cell(20,10,$row['calif'],1,0,'C',TRUE);
    $pdf->Ln();
}

$pdf -> Output();
?>