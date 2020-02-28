<?php

require('C:\AppServ\www\psw4\fpdf\fpdf.php');

class PDF extends fpdf
{
    function Header()
    {
        // $this->Image('')
        $this->SetFont('Arial', 'B', 15);
        $this->Cell (30);
        $this->Cell(120,10, ' XXXXXXXXx', 0, 0, 'C');
        $this->Ln(20);
    }

    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', ' I', 8);
        $this->Cell(0,10, 'Pagina' . $this -> PageNo().'/{nb}',0,0,'C');

    }
}




?>