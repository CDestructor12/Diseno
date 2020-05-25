<?php
require('./reporte/fpdf.php');

class PDFReporte extends FPDF{
    function Header()
    {
        $this -> Image('./img/ucateci.png', 170, 8 ,80);
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
$nombres=array('Juan Manuel','Joseph','Michael','Jeferson','Joe','Carlos','Samuel','Stiben');
$apellidos=array('Vargas','Tiburcio','Garcia','Gomez','Gonzalez','Perez','Lopez','Rodriguez');
$matriculas=array('0000','6504','8461','5486','1105','1005','6548','1148');


// Empezar a trabajar con el reporte
$pdf = new PDFReporte();

$pdf -> AliasNbPages();
$pdf -> AddPage();
$pdf -> SetFillColor(255, 255, 255);
$pdf -> SetDrawColor(255, 179, 0);

$pdf -> cell(35,7,'Matricula: ',0,0,'C',True);
$pdf -> cell(60,7,'Nombre: ',0,0,'C',TRUE);
$pdf -> cell(60,7,'Apellido: ',0,0,'C',TRUE);
$pdf -> cell(20,7,'Sexo: ',0,0,'C',TRUE);

//Asignar borde  a la linea
$pdf->SetLineWidth(1);

$pdf -> Line(15,65,190,65);
$pdf -> Ln(15);
$pdf -> SetFont('Arial','',12);
$pdf -> SetLineWidth(0);
$pdf -> SetFillColor(230, 230, 230);
$pdf -> SetDrawColor(255, 255, 255);
for($a=0;$a<=7;$a++){
    $pdf -> cell(35,10,'2018-'.$matriculas[$a],1,0,'C',True);
    $pdf -> cell(60,10,$nombres[$a],1,0,'C',TRUE);
    $pdf -> cell(60,10,$apellidos[$a],1,0,'C',TRUE);
    $pdf -> cell(20,10,'M',1,0,'C',TRUE);
    $pdf -> Ln();
}
$pdf -> Output();
?>