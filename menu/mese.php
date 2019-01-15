<?php
session_start();
header("Content-Type: application/pdf;charset=utf-8");
	include ('conn.inc.php');
	
try{

       //if(isset($_POST['loginuser'])){
       /*$ssid='26';
       $imm='17';
       $dbh = new PDO($conn,$user,$pass);
       $stm=$dbh->prepare("SELECT * FROM persone WHERE id=:ssid;");
       $stm->bindValue(":ssid",$ssid);
       $stm->execute();
      if($stm->rowCount()>0)
      {
         
         $row= $stm->fetch(); 
        
       */ 
//orizonatle         
//posiciones linea orizontal : de 0 a 210
//            linea vertical : de 0 a 297
//   mitad de linea orizontal: 105
//   mitad de linea vertical : 148.5
//inizia a XY(20,15)
//colocre sfondo dati (220,220,220)
$valore = 'gennaio.pdf';

require('fpdf/fpdf.php');

class PDF extends FPDF
{
    
 
} // FIN Class PDF



$pdf = new FPDF();

$pdf->AddPage('L','A4');
$pdf->Rect(10, 10, 135, 190, 'D');
$pdf->Rect(153, 10, 135, 190, 'D');
//coordinate A(x,y) B(x,y) C(x,y) D(x,y) (&pdfnameobject), in senso orario partendo dall'alto a sinistra
/*cuadrado(10,10,140,10,140,200,10,200,$pdf); 
cuadrado(150,10,290,10,290,200,150,200,$pdf); */

$pdf->AddPage('L','A4'); 
//$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(10, 10, 135, 190, 'D');
$pdf->Rect(153, 10, 135, 190, 'D');
/* $pdf->Line(150, 20, 180, 20);
 $pdf->Line(180, 20, 180, 55);
 $pdf->Line(180, 55, 150, 55);
 $pdf->Line(150, 55, 150, 20);  */      
      /*
            $pdf->Setfont('Arial','',20);
            $pdf->SetXY(154,35);
            $pdf->Cell(15,6,'FOTO',0,1);
            $pdf->Line(150, 20, 180, 20);
            $pdf->Line(180, 20, 180, 55);
            $pdf->Line(180, 55, 150, 55);
            $pdf->Line(150, 55, 150, 20);
        }*/

//stampa qr code di profilo
//$n = 152;
/* $pdf->Setfont('Arial','',7);
$pdf->SetXY(152,98);
$pdf->Cell(15,6,'Per uso interno',0,1);
$pdf->Line(153, 103, 172, 103);
$pdf->Line(172, 103, 172, 122);
$pdf->Line(172, 122, 153, 122);
$pdf->Line(153, 122, 153, 103);
$qrcode->displayFPDF($pdf, 155, 105, 15);*/

//$pdf->SetFont('Arial','B',16);
//$pdf->Cell(40,10,'Hello World!');
//$pdf->Output();
//se agrega el logo
/*$pdf->Image('assets/images/img-1583-122x122.png',20,25,-200);

$pdf->Setfont('Arial','',24);
$pdf->SetXY(38,30);
$pdf->Cell(15,6,'ADM Firenze',0,1);

$pdf->Setfont('Arial','',20);
$pdf->SetXY(55,45);
$pdf->Cell(15,6,'Scheda di dati - '.$tipo,0,1);

*/
/*if(empty($immagine))
{
$pdf->SetXY(154,50);
$pdf->Cell(15,6,'FOTO',0,1);

//$pdf->SetTextColor(0);
$pdf->Line(150, 35, 180, 35);
$pdf->Line(180, 35, 180, 70);
$pdf->Line(180, 70, 150, 70);
$pdf->Line(150, 70, 150, 35);
}
else
{*/
   //$pdf->Image($immagine,150,35,-200);
//}


//$pdf->Setfont('Arial','B',10);


$pdf->SetAuthor("ADFirenze",true);
$pdf->SetTitle("Cronogramma mese" , true);
$pdf->Output(I,$valore,true); //Salida al navegador
 /*}
         else
         {
           header('location: index.php?err=1');
         }
      //}*/
  }
  catch (PDOException $e) {
    echo 'errore pdf: ' . $e->getMessage();
  }

?>
