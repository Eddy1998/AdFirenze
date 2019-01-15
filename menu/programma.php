<?php
session_start();
	include ('../conn.inc.php'); 
	setlocale(LC_ALL, 'it_IT.UTF-8');

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
                $("#area").append('<div class="areadilavoro"><h5>Giorno :'+day+' '+conta+' '+month+'</h5><textarea   id="giorno'+i+'" name="giorno'+i+'" type="text" onkeyup="countChar(this)"></textarea><p id="charNum"></p></div>')
            }
        

        
    }
    function countChar(val) {
        var len = val.value.length;
        if (len >= 500) {
          val.value = val.value.substring(0, 500);
        } else {
          $('#charNum').text(500 - len);
        }
      };
    
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
