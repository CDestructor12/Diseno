<?php

require('./reporte/fpdf.php');
$fpdf = new FPDF();
$fpdf -> Addpage('PORTRAIT','A4');

class pdf extends FPDF
{
    public function header()
    {
        $this->SetFont('TIMES','B','10');
        $this -> setX(160);
        //$this->Write(5,"Colegio Agustiniano");
        $this -> Image('./img/ucateci.png',150,5,55.5,18);
    }

    public function footer()
    {
        $this ->SetFont('TIMES','B','10');
        $this ->setY(-15);
        $this ->Write(5,'La Vega, Republica Dominicana');
        //$this -> Image('fpdf/img/bandera.png',185,275,20,20,'png',"");
        $this->Setx(-30);
        $this->AliasNbPages('tpaginas');
        $this->Write(5,$this->PageNo().'/tpaginas');
        
    }
}

$fpdf = new pdf();


$fpdf->AddPage();
$fpdf->SetFont('Courier','B',16);
$fpdf->SetY(25);
$fpdf->Cell(0,5,"REPORTE DE ESTUDIANTES",0,0,"C");

//$fpdf->SetTextColor(45,47,250);
$fpdf->SetFont('Arial','B',14);
$fpdf->Ln();
$fpdf->Ln();
$fpdf->Cell(30,5,"Materia:");
$fpdf->SetFont('Arial','',14);$fpdf->Cell(20,5,"Sociologia");$fpdf->SetFont('Courier','B',14);$fpdf->Ln();
$fpdf->Cell(30,5,"Profesor:",0,0,"");
$fpdf->SetFont('Courier','',14);$fpdf->Cell(20,5,"Pedro Adames");$fpdf->SetFont('Courier','B',14);$fpdf->Ln();
$fpdf->Cell(30,5,"Curso:",0,0,"");
$fpdf->SetFont('Courier','',14);$fpdf->Cell(20,5,"J-145");$fpdf->SetFont('Courier','B',14);$fpdf->Ln(10);
$fpdf->SetFont('Arial','B',12);
//Asignaar color a la celda
$fpdf->SetFillColor(255, 255, 255);

//Asiganar color a el bolder
$fpdf->SetDrawColor(255, 179, 0);


//Asignar Color
//$fpdf->SetTextColor(143, 139, 129);

$fpdf->cell(35,7,'Matricula: ',0,0,'C',True);
$fpdf->cell(60,7,'Nombre: ',0,0,'C',TRUE);
$fpdf->cell(60,7,'Apellido: ',0,0,'C',TRUE);
$fpdf->cell(20,7,'Sexo: ',0,0,'C',TRUE);

//Asignar borde  a la linea
$fpdf->SetLineWidth(1);

//Asiganar una linea
$fpdf->Line(15,65,190,65);
$fpdf->Ln(15);
$fpdf->SetFont('Arial','',12);
$fpdf->SetLineWidth(0);
$fpdf->SetFillColor(230, 230, 230);
$fpdf->SetDrawColor(255, 255, 255);


$fpdf->cell(35,10,'2018-4774 ',1,0,'C',True);
$fpdf->cell(60,10,'Pedro ',1,0,'C',TRUE);
$fpdf->cell(60,10,'Abreu ',1,0,'C',TRUE);
$fpdf->cell(20,10,'M',1,0,'C',TRUE);
$fpdf->Ln();

$fpdf->cell(35,10,'2018-5744 ',1,0,'C',True);
$fpdf->cell(60,10,'Juan ',1,0,'C',TRUE);
$fpdf->cell(60,10,'Vasquez ',1,0,'C',TRUE);
$fpdf->cell(20,10,'M',1,0,'C',TRUE);
$fpdf->Ln();

$fpdf->cell(35,10,'2018-1454 ',1,0,'C',True);
$fpdf->cell(60,10,'Carlos ',1,0,'C',TRUE);
$fpdf->cell(60,10,'Gomez ',1,0,'C',TRUE);
$fpdf->cell(20,10,'M',1,0,'C',TRUE);
$fpdf->Ln();

$fpdf->cell(35,10,'2018-3744 ',1,0,'C',True);
$fpdf->cell(60,10,'Juan Mateo ',1,0,'C',TRUE);
$fpdf->cell(60,10,'Diaz',1,0,'C',TRUE);
$fpdf->cell(20,10,'M',1,0,'C',TRUE);
$fpdf->Ln();

$fpdf->cell(35,10,'2018-1478 ',1,0,'C',True);
$fpdf->cell(60,10,'Maria Camila ',1,0,'C',TRUE);
$fpdf->cell(60,10,'Abrue Lopez',1,0,'C',TRUE);
$fpdf->cell(20,10,'F',1,0,'C',TRUE);
$fpdf->Ln();

$fpdf->cell(35,10,'2018-8745 ',1,0,'C',True);
$fpdf->cell(60,10,'Carlos ',1,0,'C',TRUE);
$fpdf->cell(60,10,'Gomez ',1,0,'C',TRUE);
$fpdf->cell(20,10,'M',1,0,'C',TRUE);
$fpdf->Ln();

$fpdf->cell(35,10,'2018-6954 ',1,0,'C',True);
$fpdf->cell(60,10,'Frederick',1,0,'C',TRUE);
$fpdf->cell(60,10,'Suarez ',1,0,'C',TRUE);
$fpdf->cell(20,10,'M',1,0,'C',TRUE);
$fpdf->Ln();

$fpdf->cell(35,10,'2018-6187 ',1,0,'C',True);
$fpdf->cell(60,10,'Socorro',1,0,'C',TRUE);
$fpdf->cell(60,10,'Fernadez',1,0,'C',TRUE);
$fpdf->cell(20,10,'F',1,0,'C',TRUE);
$fpdf->Ln();

$fpdf->cell(35,10,'2018-7915 ',1,0,'C',True);
$fpdf->cell(60,10,'Darleny',1,0,'C',TRUE);
$fpdf->cell(60,10,'Cuevas',1,0,'C',TRUE);
$fpdf->cell(20,10,'F',1,0,'C',TRUE);
$fpdf->Ln();

$fpdf->cell(35,10,'2018-8847 ',1,0,'C',True);
$fpdf->cell(60,10,'Juan Marcos ',1,0,'C',TRUE);
$fpdf->cell(60,10,'Torrez ',1,0,'C',TRUE);
$fpdf->cell(20,10,'M',1,0,'C',TRUE);
$fpdf->Ln();

$fpdf->cell(35,10,'2018-1245 ',1,0,'C',True);
$fpdf->cell(60,10,'Juan Carlos ',1,0,'C',TRUE);
$fpdf->cell(60,10,'Cohen',1,0,'C',TRUE);
$fpdf->cell(20,10,'M',1,0,'C',TRUE);
$fpdf->Ln();


$fpdf->Output("","Registros de Estudiantes.pdf");