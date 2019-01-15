<?php
session_start();
	include ('conn.inc.php');
try{

       //if(isset($_POST['loginuser'])){
			 $query="SELECT * FROM persone WHERE ";
			 //tipo membro
			 if(isset($_GET['tipo']))
			 {
				 if($_GET['tipo']=="M")
				 {
			 if(isset($_GET['t_m']))
			 {
				 $query .= " tipo_persona='membro'";
			 }
			 //tipo CONGREGATO
			 if(isset($_GET['t_c']))
			 {
				 if(isset($_GET['t_m']))
				 {
					 	 $query .= " OR tipo_persona='congregato'";
				 }

				 else {
				 	$query .= " tipo_persona='congregato'";
				 }

			 }
			 //tipo BAMBINO
			 if(isset($_GET['t_b']))
			 {
				 if(isset($_GET['t_m'])||isset($_GET['t_c']))
				 {
					 $query .= " OR tipo_persona='bambino'";
				 }
				 else {

					$query .= " tipo_persona='bambino'";
				 }

			 }
			 //attivo attivo2
			 if(isset($_GET['a_a']))
			 {
				 $query .= " AND attivo='S'";
			 }
			 //attivo non attivo2
			 if(isset($_GET['a_n']))
			 {
				 if(isset($_GET['a_a']))
				 {
					 $query .= " OR attivo='N'";
				 }
				 else {
					 	$query .= " AND attivo='N'";

				 }

			 }
			 //carico pastore2
			 if(isset($_GET['c_par']))
			 {
				 	$query .= " AND carico_in_chiesa='Pastore'";
			 }
			 //carico evangelista
			 if(isset($_GET['c_e']))
			 {
				 if(isset($_GET['c_par']))
				 {
					 	$query .= " OR carico_in_chiesa='Evangelista'";
				 }
				 else {

					$query .= " AND carico_in_chiesa='Evangelista'";
				 }
			 }
			 //carico presbitero2
			 if(isset($_GET['c_pre']))
			 {
				 if(isset($_GET['c_par'])||isset($_GET['c_e']))
				 {
						$query .= " OR carico_in_chiesa='Presbitero'";
				 }
				 else {

					$query .= " AND carico_in_chiesa='Presbitero'";
				 }
			 }
			 //carico diacono2
			 if(isset($_GET['c_di']))
			 {
				 if(isset($_GET['c_par'])||isset($_GET['c_e'])||isset($_GET['c_pre']))
				{
					 $query .= " OR carico_in_chiesa='Diacono' OR carico_in_chiesa='Diaconessa'";
				}
				else {

				 $query .= " AND carico_in_chiesa='Diacono' OR carico_in_chiesa='Diaconessa'";
				}
			 }
			 //carico MEMBRO
			 if(isset($_GET['c_m']))
			 {
					 if(isset($_GET['c_par'])||isset($_GET['c_e'])||isset($_GET['c_pre'])||isset($_GET['c_di']))
					{
						 $query .= " OR carico_in_chiesa='Membro'";
					}
					else {

					 $query .= " AND carico_in_chiesa='Membro'";
					}
			 }
			 //luogo Firenze
			 if(isset($_GET['l_fi']))
			 {
				 	$query .=" AND congregazione='Firenze'";
			 }
			 //luogo Pisa
			 if(isset($_GET['l_pi']))
			 {
						 if(isset($_GET['l_fi']))
						 {
								$query .= " OR congregazione='Pisa'";
						 }
						 else {

							$query .= " AND congregazione='Pisa'";
						 }
			 }
			 //luogo Prato
			 if(isset($_GET['l_pra']))
			 {
					 if(isset($_GET['l_fi'])||isset($_GET['l_pi']))
					 {
							$query .= " OR congregazione='Prato'";
					 }
					 else {

						$query .= " AND congregazione='Prato'";
					 }
			 }
			 //luogo Cecina
			 if(isset($_GET['l_ce']))
			 {
					 if(isset($_GET['l_fi'])||isset($_GET['l_pi'])||isset($_GET['l_pra']))
					 {
							$query .= " OR congregazione='Cecina'";
					 }
					 else {

						$query .= " AND congregazione='Cecina'";
					 }
			 }
		 }
		 else if($_GET['tipo']=='S')
		 {
			 	if(isset($_GET['id']))
				{
					$identi=$_GET['id'];
			 		$query .= " id=:id";
				}
		 }
		 }
		 else
		 {
			 	header('location: printges?err=1');
		 }
       //$ssid='26';
       //$imm='16';
			 require('fpdf/fpdf.php');
			 class PDF extends FPDF
			 {

			 } // FIN Class PDF
			 $pdf = new FPDF();

       $dbh = new PDO($conn,$user,$pass);
       $stm=$dbh->prepare($query);
			 if($_GET['tipo']=="S")
			 {
			 $stm->bindValue(":id",$identi);
		 		}
       $stm->execute();
      if($stm->rowCount()>0)
      {

         while($row= $stm->fetch())
				 {



//posiciones linea orizontal : de 0 a 210
//            linea vertical : de 0 a 297
//   mitad de linea orizontal: 105
//   mitad de linea vertical : 148.5
//inizia a XY(20,15)
//colocre sfondo dati (220,220,220)


$msg = "https://adminadmfirenze.netsons.org/pdf";
$err = 'L';
require_once('qrcode.class.php');
$qrcode = new QRcode(utf8_encode($msg), $err);
$qrcode->disableBorder();


$nome=$row['nome'];
$cognome=$row['cognome'];

//nome file quando viene scaricato
$valore = $nome.' '.$cognome.'.pdf';

//$foto="";
$tipo=$row['tipo_persona'];
$nascita=$row['data_nascita'];
$genere=$row['sesso'];
$nazionalita=$row['nazionalita'];
$telefono=$row['telefono'];
$indirizzo=$row['indirizzo'];
$citta=$row['citta'];
$cap=$row['cap'];
$stato_civile=$row['stato_civile'];
$data_di_matrimonio=$row['data_matrimonio'];
if($row['numero_figli']==NULL)
{
    $numero_figli='0';
}
else
{
    $numero_figli=$row['numero_figli'];
}
$nome_coniuge=$row['nome_coniuge'];
$cognome_coniuge=$row['cognome_coniuge'];
$nome_padre=$row['nome_padre'];
$nome_madre=$row['nome_madre'];
$data_battesimo=$row['data_battesimo'];
$luogo_battesimo=$row['luogo_battesimo'];
if($row['battezzato_con_spirito_santo']=='S')
{
    $battezzato_ss='Si';
}
else {
    $battezzato_ss='No';
}
$data_arrivo=$row['data_arrivo_in_chiesa'];
$numero_tessera=$row['numero_tessera'];
$carico=$row['carico_in_chiesa'];
$data_diacono='';
$luogo_diacono='';
$data_presbitero='';
$luogo_presbitero='';
$data_evangelista='';
$luogo_evangelista='';
$data_pastore='';
$luogo_pastore='';
$osservazioni=$row['osservazioni'];


$pdf->AddPage();

      /*  $query=$dbh->prepare("SELECT * FROM immagini WHERE id=:id;");
        $query->bindValue(":id",$imm);
        $query->execute();
        if($query->rowCount()>0)
        {
            $pic=$query->fetch();
            if($pic['type']='image/jpeg')
            {
                if (file_put_contents('../tmp/picture.jpg', $pic['img']))
                {
                    $pdf->Image('../tmp/picture.jpg',150,35,-120,34);
                    // save/display image
                    unlink('../tmp/picture.jpg');
                }
            }
            else
                if($pic['type']='image/png')
            {
                if (file_put_contents('../tmp/picture.png', $pic['img']))
                {
                    $pdf->Image('../tmp/picture.png',150,35,-120,34);
                    // save/display image
                    unlink('../tmp/picture.png');
                }
            }
            else
                if ($pic['type']='image/gif')
            {
                if (file_put_contents('../tmp/picture.gif', $pic['img']))
                {
                    $pdf->Image('../tmp/picture.gif',150,35,-120,34);
                    // save/display image
                    unlink('../tmp/picture.gif');
                }
            }


        }
        else
        {*/
            $pdf->Setfont('Arial','',20);
            $pdf->SetXY(154,50);
            $pdf->Cell(15,6,'FOTO',0,1);
            $pdf->Line(150, 35, 180, 35);
            $pdf->Line(180, 35, 180, 70);
            $pdf->Line(180, 70, 150, 70);
            $pdf->Line(150, 70, 150, 35);
      //  }

//stampa qr code di profilo
$qrcode->displayFPDF($pdf, 160, 110, 20);

//$pdf->SetFont('Arial','B',16);
//$pdf->Cell(40,10,'Hello World!');
//$pdf->Output();
//se agrega el logo
//$pdf->Image('assets/images/img-1583-122x122.png',20,25,-200);
/*$pdf->Setfont('Arial','',5);
$pdf->SetXY(10,10);
$pdf->MultiCell(160,5,$query,0,'L');
$pdf->Ln(3);
*/
$pdf->Setfont('Arial','',24);
$pdf->SetXY(38,30);
$pdf->Cell(15,6,'ADM Firenze',0,1);

$pdf->Setfont('Arial','',20);
$pdf->SetXY(55,50);
$pdf->Cell(15,6,'Scheda di dati - '.$tipo,0,1);


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


$pdf->Setfont('Arial','B',10);

//PRIMA RIGA
//nome e cognome
//$pdf->SetTextColor(128);
$pdf->SetXY(20,60);
$pdf->Cell(15,6,'Nome e Cognome:',0,1);

//sfondo per i dati
$pdf->SetFillColor(230, 230, 230);
$pdf->Rect(20, 65, 115, 7, 'F');

//scrittura dati
//$pdf->SetTextColor(0);
$pdf->Setfont('Arial','',11);
$pdf->SetXY(20, 65);
$pdf->Cell(15,6,$nome.' '.$cognome,0,1);

//SECONDA RIGA
//data di nascita
$pdf->Setfont('Arial','B',10);
$pdf->SetXY(20, 72);
$pdf->Cell(15,6,'Data di nascita:',0,1);

//sfondo per i dati
//$pdf->SetFillColor(230, 230, 230);
$pdf->Rect(20, 77, 36, 7, 'F');

//scrittura dati
$pdf->Setfont('Arial','',11);
$pdf->SetXY(20, 77);
$pdf->Cell(15,6,$nascita,0,1);


//genere
$pdf->Setfont('Arial','B',10);
$pdf->SetXY(60, 72);
$pdf->Cell(15,6,'Genere:',0,1);

//sfondo per i dati
//$pdf->SetFillColor(220, 220, 220);
$pdf->Rect(57, 77, 30, 7, 'F');

//scrittura dati
$pdf->Setfont('Arial','',11);
$pdf->SetXY(57, 77);
$pdf->Cell(15,6,$genere,0,1);

//nazionalita
$pdf->Setfont('Arial','B',10);
$pdf->SetXY(90, 72);

$pdf->Cell(15,6,utf8_decode("Nazionalità:"),0,1);

//sfondo per i dati
//$pdf->SetFillColor(220, 220, 220);
$pdf->Rect(88, 77, 61, 7, 'F');

//scrittura dati
$pdf->Setfont('Arial','',11);
$pdf->SetXY(89, 77);
$pdf->Cell(15,6,$nazionalita,0,1);

//numero di telefono
$pdf->Setfont('Arial','B',10);
$pdf->SetXY(150, 72);
$pdf->Cell(15,6,"Numero di telefono:",0,1);

//sfondo per i dati
//$pdf->SetFillColor(220, 220, 220);
$pdf->Rect(150, 77, 37, 7, 'F');

//scrittura dati
$pdf->Setfont('Arial','',11);
$pdf->SetXY(150, 77);
$pdf->Cell(15,6,$telefono,0,1);

//TERZA RIGA

//Indirizzo
$pdf->Setfont('Arial','B',10);
$pdf->SetXY(20, 84);
$pdf->Cell(15,6,"Indirizzo:",0,1);

//sfondo per i dati
//$pdf->SetFillColor(220, 220, 220);
$pdf->Rect(20, 89, 90, 7, 'F');

//scrittura dati
$pdf->Setfont('Arial','',11);
$pdf->SetXY(20, 89);
$pdf->Cell(15,6,utf8_decode($indirizzo),0,1);

//Citta'
$pdf->Setfont('Arial','B',10);
$pdf->SetXY(110, 84);
$pdf->Cell(15,6,utf8_decode("Città:"),0,1);

//sfondo per i dati
//$pdf->SetFillColor(220, 220, 220);
$pdf->Rect(111, 89, 45, 7, 'F');

//scrittura dati
$pdf->Setfont('Arial','',11);
$pdf->SetXY(111, 89);
$pdf->Cell(15,6,$citta,0,1);

//CAP'
$pdf->Setfont('Arial','B',10);
$pdf->SetXY(160, 84);
$pdf->Cell(15,6,"CAP:",0,1);

//sfondo per i dati
//$pdf->SetFillColor(220, 220, 220);
$pdf->Rect(157, 89, 30, 7, 'F');

//scrittura dati
$pdf->Setfont('Arial','',11);
$pdf->SetXY(157, 89);
$pdf->Cell(15,6,$cap,0,1);

//QUARTA RIGA
//Stato civile
$pdf->Setfont('Arial','B',10);
$pdf->SetXY(20, 97);
$pdf->Cell(15,6,'Stato civile:',0,1);

//sfondo per i dati
//$pdf->SetFillColor(220, 220, 220);
$pdf->Rect(20, 102, 45, 7, 'F');

//scrittura dati
$pdf->Setfont('Arial','',11);
$pdf->SetXY(20, 102);
$pdf->Cell(15,6,$stato_civile,0,1);


//data di Matrimonio
$pdf->Setfont('Arial','B',10);
$pdf->SetXY(66, 97);
$pdf->Cell(15,6,'Data di Matrimonio:',0,1);

//sfondo per i dati
//$pdf->SetFillColor(220, 220, 220);
$pdf->Rect(66, 102, 36, 7, 'F');

//scrittura dati
$pdf->Setfont('Arial','',11);
$pdf->SetXY(66, 102);
$pdf->Cell(15,6,$data_di_matrimonio,0,1);

//numero di figli
$pdf->Setfont('Arial','B',10);
$pdf->SetXY(105, 97);
$pdf->Cell(15,6,'Numero di figli:',0,1);

//sfondo per i dati
//$pdf->SetFillColor(220, 220, 220);
$pdf->Rect(105, 102, 20, 7, 'F');

//scrittura dati
$pdf->Setfont('Arial','',11);
$pdf->SetXY(105, 102);
$pdf->Cell(15,6,$numero_figli,0,1);

//QUARTA RIGA
//nome coniuge
$pdf->Setfont('Arial','B',10);
$pdf->SetXY(20, 109);
$pdf->Cell(15,6,'Nome e Cognome Coniuge:',0,1);

//sfondo per i dati
//$pdf->SetFillColor(220, 220, 220);
$pdf->Rect(20, 114, 115, 7, 'F');

//scrittura dati
$pdf->Setfont('Arial','',11);
$pdf->SetXY(20, 114);
$pdf->Cell(15,6,$nome_coniuge.' '.$cognome_coniuge,0,1);


//nome padre
$pdf->Setfont('Arial','B',10);
$pdf->SetXY(20, 123);
$pdf->Cell(15,6,'Nome e Cognome Padre:',0,1);

//sfondo per i dati
//$pdf->SetFillColor(220, 220, 220);
$pdf->Rect(20, 128, 115, 7, 'F');

//scrittura dati
$pdf->Setfont('Arial','',11);
$pdf->SetXY(20, 128);
$pdf->Cell(15,6,$nome_padre,0,1);

//nome Madre
$pdf->Setfont('Arial','B',10);
$pdf->SetXY(20, 137);
$pdf->Cell(15,6,'Nome e Cognome Madre:',0,1);

//sfondo per i dati
//$pdf->SetFillColor(220, 220, 220);
$pdf->Rect(20, 142, 115, 7, 'F');

//scrittura dati
$pdf->Setfont('Arial','',11);
$pdf->SetXY(20, 142);
$pdf->Cell(15,6,$nome_madre,0,1);


//QUINTA RIGA
//data di battesimo
$pdf->Setfont('Arial','B',10);
$pdf->SetXY(20, 151);
$pdf->Cell(15,6,'Data di battesimo:',0,1);

//sfondo per i dati
//$pdf->SetFillColor(220, 220, 220);
$pdf->Rect(20, 156, 36, 7, 'F');

//scrittura dati
$pdf->Setfont('Arial','',11);
$pdf->SetXY(20, 156);
$pdf->Cell(15,6,$data_battesimo,0,1);


//luogo di battesimo
$pdf->Setfont('Arial','B',10);
$pdf->SetXY(58, 151);
$pdf->Cell(15,6,'Luogo di battesimo:',0,1);

//sfondo per i dati
//$pdf->SetFillColor(220, 220, 220);
$pdf->Rect(58, 156, 77, 7, 'F');

//scrittura dati
$pdf->Setfont('Arial','',11);
$pdf->SetXY(58, 156);
$pdf->Cell(15,6,utf8_decode($luogo_battesimo),0,1);

//battezzato con spirito
$pdf->Setfont('Arial','B',10);
$pdf->SetXY(136, 151);
$pdf->Cell(15,6,'Battezzato con lo Spirito Santo:',0,1);

//sfondo per i dati
//$pdf->SetFillColor(220, 220, 220);
$pdf->Rect(136, 156, 35, 7, 'F');

//scrittura dati
$pdf->Setfont('Arial','',11);
$pdf->SetXY(136, 156);
$pdf->Cell(15,6,$battezzato_ss,0,1);

//SESTA RIGA

//data di arrivo in chiesa, affiliazione
$pdf->Setfont('Arial','B',10);
$pdf->SetXY(20, 165);
$pdf->Cell(15,6,'Data di arrivo in chiesa/affiliazione:',0,1);

//sfondo per i dati
//$pdf->SetFillColor(220, 220, 220);
$pdf->Rect(20, 170, 36, 7, 'F');

//scrittura dati
$pdf->Setfont('Arial','',11);
$pdf->SetXY(20, 170);
$pdf->Cell(15,6,$data_arrivo,0,1);

//numero di tessera
$pdf->Setfont('Arial','B',10);
$pdf->SetXY(85, 165);
$pdf->Cell(15,6,'Numero di Tessera:',0,1);

//sfondo per i dati
//$pdf->SetFillColor(220, 220, 220);
$pdf->Rect(85, 170, 36, 7, 'F');

//scrittura dati
$pdf->Setfont('Arial','',11);
$pdf->SetXY(85, 170);
$pdf->Cell(15,6,$numero_tessera,0,1);

//carico in chiesa
$pdf->Setfont('Arial','B',10);
$pdf->SetXY(125, 165);
$pdf->Cell(15,6,'Carico in chiesa:',0,1);

//sfondo per i dati
//$pdf->SetFillColor(220, 220, 220);
$pdf->Rect(125, 170, 55, 7, 'F');

//scrittura dati
$pdf->Setfont('Arial','',11);
$pdf->SetXY(125, 170);
$pdf->Cell(15,6,$carico,0,1);

//SETTIMA RIGA
//data consacrazione
$pdf->Setfont('Arial','B',10);
$pdf->SetXY(50, 181);
$pdf->Cell(15,6,'Data consacrazione:',0,1);

//luogo consacrazionE
$pdf->SetXY(95, 181);
$pdf->Cell(15,6,'Luogo :',0,1);

//OTTAVA RIGA
//diacono
$pdf->SetXY(20, 188);
$pdf->Cell(15,6,'Diacono:',0,1);

//data diacono
//sfondo per i dati
//$pdf->SetFillColor(220, 220, 220);
$pdf->Rect(50, 188, 36, 7, 'F');

//scrittura dati
$pdf->Setfont('Arial','',11);
$pdf->SetXY(50, 188);
$pdf->Cell(15,6,$data_diacono,0,1);

//LUOGO diacono
//sfondo per i dati
//$pdf->SetFillColor(220, 220, 220);
$pdf->Rect(95, 188, 85, 7, 'F');

//scrittura dati
$pdf->Setfont('Arial','',11);
$pdf->SetXY(95, 188);
$pdf->Cell(15,6,$luogo_diacono,0,1);

//NONA RIGA
//presbitero
$pdf->Setfont('Arial','B',10);
$pdf->SetXY(20, 199);
$pdf->Cell(15,6,'Presbitero:',0,1);

//data presbitero
//sfondo per i dati
//$pdf->SetFillColor(220, 220, 220);
$pdf->Rect(50, 199, 36, 7, 'F');

//scrittura dati
$pdf->Setfont('Arial','',11);
$pdf->SetXY(50, 199);
$pdf->Cell(15,6,$data_presbitero,0,1);

//LUOGO presbitero
//sfondo per i dati
//$pdf->SetFillColor(220, 220, 220);
$pdf->Rect(95, 199, 85, 7, 'F');

//scrittura dati
$pdf->Setfont('Arial','',11);
$pdf->SetXY(95, 199);
$pdf->Cell(15,6,$luogo_presbitero,0,1);

//DECIMA RIGA
//evangelista
$pdf->Setfont('Arial','B',10);
$pdf->SetXY(20, 210);
$pdf->Cell(15,6,'Evangelista:',0,1);

//data evangelista
//sfondo per i dati
//$pdf->SetFillColor(220, 220, 220);
$pdf->Rect(50, 210, 36, 7, 'F');

//scrittura dati
$pdf->Setfont('Arial','',11);
$pdf->SetXY(50, 210);
$pdf->Cell(15,6,$data_evangelista,0,1);

//LUOGO evangelista
//sfondo per i dati
//$pdf->SetFillColor(220, 220, 220);
$pdf->Rect(95, 210, 85, 7, 'F');

//scrittura dati
$pdf->Setfont('Arial','',11);
$pdf->SetXY(95, 210);
$pdf->Cell(15,6,$luogo_evangelista,0,1);

//UNDICESIMA RIGA
//pastore
$pdf->Setfont('Arial','B',10);
$pdf->SetXY(20, 221);
$pdf->Cell(15,6,'Pastore:',0,1);

//data pastore
//sfondo per i dati
//$pdf->SetFillColor(220, 220, 220);
$pdf->Rect(50, 221, 36, 7, 'F');

//scrittura dati
$pdf->Setfont('Arial','',11);
$pdf->SetXY(50, 221);
$pdf->Cell(15,6,$data_pastore,0,1);

//LUOGO pastore
//sfondo per i dati
//$pdf->SetFillColor(220, 220, 220);
$pdf->Rect(95, 221, 85, 7, 'F');

//scrittura dati
$pdf->Setfont('Arial','',11);
$pdf->SetXY(95, 221);
$pdf->Cell(15,6,$luogo_pastore,0,1);

//osservazioni
$pdf->Setfont('Arial','B',10);
$pdf->SetXY(20, 231);
$pdf->Cell(15,6,"Osservazioni:",0,1);

//sfondo per i dati
//$pdf->SetFillColor(220, 220, 220);
$pdf->Rect(20, 236, 160, 30, 'F');


$pdf->Setfont('Arial','',11);
$pdf->SetXY(20, 236);
$pdf->MultiCell(160,5,$osservazioni,0,'L');
$pdf->Ln(3);

$pdf->SetDrawColor(160,160,160);
$pdf->SetLineWidth(0.2);
$pdf->Line(20, 274, 180, 274);
$pdf->Setfont('Arial','',7);
$pdf->SetTextColor(160,160,160);
$pdf->SetXY(20,276);
$pdf->Cell(15,0,"ADM Firenze - Via San gallo 113 b rosso 50129 Firenze",0,1);
$pdf->SetTextColor(0,0,0);
$pdf->SetDrawColor(0,0,0);

/*
$pdf->AddPage();
*/

}//chiusura while
$pdf->Output(); //Salida al navegador
}//chiusura if
         else
         {
           header('location: printges?err=1');
         }
      //}
  }
  catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
  }

?>
