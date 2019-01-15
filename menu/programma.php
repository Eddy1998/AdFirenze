<?php
session_start();
	include ('../conn.inc.php'); 
	setlocale(LC_ALL, 'it_IT.UTF-8');
	if(isset($_POST['crea']))
	{
	     $prova = $_POST['giorno1'];
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

require('../fpdf/fpdf.php');

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
$pdf->Setfont('Arial','',20);
$pdf->SetXY(154,35);
$pdf->Cell(15,6,$prova,0,1);
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
//$pdf->Output(I,$valore,true);
$output =$pdf->Output('','S');
$output = base64_encode($output);
//Salida al navegador
 /*}
         else
         {
           header('location: index.php?err=1');
         }
      //}*/
     

	}
	try{
    ?>
<!DOCTYPE html>
<html >
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="../assets/images/img-1583-122x122.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Programma mensile</title>
  <link rel="stylesheet" href="../assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="../assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="../assets/tether/tether.min.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="../assets/dropdown/css/style.css">
  <link rel="stylesheet" href="../assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="../assets/theme/css/style.css">
  <link rel="stylesheet" href="../assets/mobirise/css/mbr-additional.css" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript">
  var campi=0;
  var days = ['Domenica','Lunedì','Martedì','Mercoledì','Giovedì','Venerdì','Sabato'];
        var months = ['Gennaio','Febbraio','Marzo','Aprile','Maggio','Giugno','Luglio','Agosto','Settembre','Ottobre','Novembre','Dicembre'];
  $(document).ready(function(){
      
    //alert(day+' '+month);
      $('#mese').on('change', function () {
              cambialayout();
          });
      
     
    });
    function cambialayout()
    {
        
        $('.areadilavoro').remove();    
        var anno= $("#danno").val();
        var anno=Number(anno);
        var ele = document.getElementById("mese");
        var mese = ele.options[ele.selectedIndex].value;
       
        var numero = giorni(mese,anno);
        var mese = Number(mese)-1;
        var conta=0;
            for(var i=1;i<=numero;i++)
            {
                conta++;
                
                var now = new Date(anno,mese,conta);
      
                var day = window.days[ now.getDay() ];
                var month = window.months[ now.getMonth() ];
                $("#area").append('<div class="areadilavoro"><h5>Giorno :'+day+' '+conta+' '+month+'</h5><textarea   id="giorno'+i+'" name="giorno'+i+'" type="text"></textarea></div>')
            }
        

        
    }
    
    function giorni(month, year) {
     
        return new Date(year, month, 0).getDate();
    }
    function goBack()
    {
      window.history.back()
    }
  //<button type="button" class="btn btn-danger" onclick="goBack()">Correggi</button>
  </script>


</head>
<body>
    Anno : <?php echo date("Y"); ?> <br> 
    <input id="danno" type="hidden" value="<?php echo date("Y"); ?>">
    Mese: <select id="mese">
        <option selected>Seleziona Mese</option>    
        <option value="01">Gennaio</option>
        <option value="02">Febbraio</option>
        <option value="03">Marzo</option>
        <option value="04">Aprile</option>
        <option value="05">Maggio</option>
        <option value="06">Giugno</option>
        <option value="07">Luglio</option>
        <option value="08">Agosto</option>
        <option value="09">Settembre</option>
        <option value="10">Ottobre</option>
        <option value="11">Novembre</option>
        <option value="12">Dicembre</option>
    </select>	
    <br>
    <hr>
    <form action="mese" method="POST" target="_blank">
    <div id="area">
  
    </div>
    <input type="submit" value="Crea Documento" name="crea">
   
</form>
 <div>
     
     <html>
    <head></head>
    <body>
        <div id="topBar" > <a href ="#" onclick="load_home()"> HOME </a> </div>
    <div id ="content" class="col-md-12"> 
    <?php
    if(isset($_POST['crea']))
    { 
         ?>
    <embed src="data:application/pdf;base64,<?php echo $output ?>" type='application/pdf'  width="1000" height="500">
    <?php
    }
    ?>
    </div>
    <script>
          function load_home(){
                document.getElementById("content").innerHTML='<object type="type/html" ></object>';
      }
    </script>

        
        
    </body>
</html>
 </div>
    
</body>
</html>








<?php
}
  catch (PDOException $e) {
    echo 'errore pdf: ' . $e->getMessage();
  }

?>
