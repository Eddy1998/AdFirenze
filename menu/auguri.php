<?php
session_start();
header("Content-Type: application/pdf;charset=utf-8");
	include ('../conn.inc.php');
	//require_once('fpdi2/src/autoload.php');

try{
    //$prova = $_POST['giorno1'];
    $mese = $_POST['mese'];
    $luogo = $_POST['settore'];




//orizonatle
//posiciones linea orizontal : de 0 a 210
//            linea vertical : de 0 a 297
//   mitad de linea orizontal: 105
//   mitad de linea vertical : 148.5
//inizia a XY(20,15)
//colocre sfondo dati (220,220,220)
$valore = 'gennaio.pdf';

require('../fpdf/fpdf.php');

class PDF extends FPDF
{


} // FIN Class PDF

$pdf = new FPDF();

$linee="";
$dbh = new PDO($conn,$user,$pass);
//$pdf->Addpage();
//$pdf->AddFont('auguri','','Qarmic sans Abridged.php');
//$pdf->SetFont('auguri','',13);
$pdf->SetFont('Arial','',13);
$pdf->SetXY(10,10);
//$pdf->Cell(15,6,'Certificato',0,1);*/
$pdf->AddPage();

$m=50;
$n=60;
$stm=$dbh->prepare("SELECT nome,cognome, DATE_FORMAT(data_nascita, '%d/%m' ) AS nato FROM persone WHERE MONTH(data_nascita)=:numero AND congregazione=:congre AND tipo_persona<>'bambino' ORDER BY nato");
$stm->bindValue(":numero",$mese);
$stm->bindValue(":congre",$luogo);
$stm->execute();
 if($stm->rowCount()>0)
  {

     while($row= $stm->fetch())
     {

        $pdf->SetXY(30,$n);
        $pdf->Cell(15,6,$row['nome'].' '.$row['cognome'],0,1);
        //$n+=5;
        $pdf->SetXY(150,$n);
        $pdf->Cell(15,6,$row['nato'],0,1);
        $n+=8;


     }

  }
  $n+=10;


  $stm=$dbh->prepare("SELECT nome,cognome, DATE_FORMAT(data_nascita, '%d/%m' ) AS nato FROM persone WHERE MONTH(data_nascita)=:numero AND congregazione=:congre AND tipo_persona='bambino' ORDER BY nato");
$stm->bindValue(":numero",$mese);
$stm->bindValue(":congre",$luogo);
$stm->execute();
 if($stm->rowCount()>0)
  {
      $pdf->SetXY(30,$n);
      $pdf->SetFont('Arial','',23);
	//$pdf->SetFont('auguri','',23);
    $pdf->Cell(15,6,'Bambini :',0,1);
	$pdf->SetFont('Arial','',13);
	//$pdf->SetFont('auguri','',13);
    $n+=12;
     while($row= $stm->fetch())
     {

        $pdf->SetXY(30,$n);
        $pdf->Cell(15,6,$row['nome'].' '.$row['cognome'],0,1);
        //$n+=5;
        $pdf->SetXY(150,$n);
        $pdf->Cell(15,6,$row['nato'],0,1);
        $n+=8;


     }

  }
  $n+=10;
 $jsondataT=array();
    $dati=array();

  $stm=$dbh->prepare("SELECT nome,cognome,nome_coniuge,cognome_coniuge,sesso, DATE_FORMAT(data_matrimonio, '%d/%m' ) AS data_di_matrimonio, nome_coniuge, cognome_coniuge FROM persone WHERE MONTH(data_matrimonio)=:numero AND congregazione=:congre AND tipo_persona<>'bambino'");
    $stm->bindValue(":numero",$mese);
    $stm->bindValue(":congre",$luogo);
    $stm->execute();
    //$x=32;
    //$x1=100;
    //$y=25;
     if($stm->rowCount()>0)
          {
             $pdf->SetXY(30,$n);
             $pdf->SetFont('Arial','',23);
  //$pdf->SetFont('auguri','',23);
    $pdf->Cell(15,6,'Anniversari di matrimonio : ',0,1);
	$pdf->SetFont('Arial','',13);
	//$pdf->SetFont('auguri','',13);
    $n+=12;
             while($row= $stm->fetch())
             {
                 $jsondataT["dati"][]=$row;


             }

          }
      $indice =count($jsondataT["dati"]);


      for($i=0;$i<$indice;$i++)
      {
          if($jsondataT["dati"][$i]['sesso']=="Maschile")
          {
              $chiave=trim($jsondataT["dati"][$i]['nome'])."&".trim($jsondataT["dati"][$i]['nome_coniuge']);
          }
          else
          {
              $chiave=trim($jsondataT["dati"][$i]['nome_coniuge'])."&".trim($jsondataT["dati"][$i]['nome']);
          }
         // $jsondataT['']
          if (array_key_exists($chiave, $dati)) {

            }
            else{
                $dati[$chiave]=$jsondataT["dati"][$i]['data_di_matrimonio'];
            }
      }

  //si ordinano le date degli Anniversari di matrimonio

 		asort($dati);


    foreach($dati as $key => $value)
    {

         $nomi = explode("&",$key);
         $stampan= $nomi[0].' & '.$nomi[1];

        $pdf->SetXY(30,$n);
        $pdf->Cell(15,6,$stampan,0,1);
        //$n+=5;
        $pdf->SetXY(150,$n);
        $pdf->Cell(15,6,$value,0,1);
        $n+=8;

    }







$pdf->SetAuthor("ADM Firenze",true);
$pdf->SetTitle("Compleanni" , true);
//$pdf->Output(I,$valore,true);
$pdf->Output();
//Salida al navegador
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
