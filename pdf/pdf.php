<?php
  ob_start();
  require'fpdf/fpdf.php';

  $pdf =new FPDF();//el contructuro puede aceptar diferentes parametros tamaño de la hoja etc
  $pdf->AddPage();
  $pdf->SetFont('Arial','B',15); // tipo, negritaetc,tamaño
  $pdf->Cell(100,10,'prubea creacion depdf',1,1,'C');//largo_celda,alto_celda,texto,borde 1 y 0, salto de linea 1 y 0, centrado
  $pdf->Cell(100,10,'prubea creacion depdf',1,1,'C');

  $pdf->MultiCell(100,10,'textodoaljdaiohdasoidhasidadadsadasd ad adsa ',1,'L');//este es por si el contenido de la celda supera el tamaño de la celda, con los mismo parametros

  $pdf->Output();
 
?>
