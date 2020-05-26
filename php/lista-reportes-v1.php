<?php
require('/xampp/htdocs/diseno/reporte/fpdf.php');

class PDFReporte extends FPDF{
    function Header()
    {
        $this -> Image('../img/ucateci.png', 10, 8 ,80);
        $this -> SetFont('Arial', 'B', 16);
        
        $this -> Cell(80);

        $this -> Cell(30, 10, 'Lista de Estudiantes', 0, 0, 'C');
        $this -> Cell(-32, 30, 'Diseno de Sistemas', 0, 0, 'C');

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
$pdf -> SetFont('Times', '', 12);
for($a=0;$a<=7;$a++){
    $pdf -> Cell(0,40,'2018-'.$matriculas[$a].' | '.$nombres[$a].' '.$apellidos[$a],0,0);
    $pdf -> Ln(7);
}
$pdf -> Output();
?>