<?php
require('./reporte/fpdf.php');

class PDFReporte extends FPDF{
    function Header()
    {
        $this -> Image('./img/python-img.png', 10, 8 ,33);
        $this -> SetFont('Arial', 'B', 16);
        
        $this -> Cell(80);

        $this -> Cell(30, 10, 'Python SRL', 0, 0, 'C');

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

// Empezar a trabajar con el reporte
$pdf = new PDFReporte();

$pdf -> AliasNbPages();
$pdf -> AddPage();
$pdf -> SetFont('Times', '', 12);
$pdf -> Output();

?>