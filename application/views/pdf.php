<?php

class pdf extends libraries
{
 $this->load->libraries();
//a4 width:219 mm
//default margin :10mm each side
//writable horizontal:219-(10*2)=189mm

$pdf=new FPDF('p','mm','A4');
$pdf->AddPage();

//set font to arial, bold, 14pt
$pdf->setFont('Arial','B',14);

//cell(width,height,text,border,endline,[align])
$pdf->cell(130,5,'',1,0);
$pdf->cell(59,5,'',1,1);

$pdf->Output();

}

?>