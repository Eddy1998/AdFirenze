<?php
session_start();
include 'conn.inc.php';
include 'data/funzioni.php';
$dbh = new PDO($conn, $user, $pass);
?>
<!DOCTYPE html>
<html >
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <link rel="shortcut icon" href="assets/images/img-1583-122x122.png" type="image/x-icon">
  <meta name="description" content="Site Generator Description">
  <title>Servizio Stampe Varie</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<style>


</style>
<script>
var luogo="";
var final="pdf";
 $(document).ready(function(){
			//controlladefault();
	//$("#selpersona").hide();
	//$("#parametri").hide();
	$('#add').on('click', function () {
         nuovariga();
     });

	 $('#opzione').on('change', function () {
        mostra();
    });


	$("#cerca").on("keyup", function() {
		var value = $(this).val().toLowerCase();
		$("#riga tr").filter(function() {
		  $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
		});
	  });

	$('#print').on('click', function () {
    var linkfinale="?tipo=M";


		//controlla che ci sia almeno un check per ogni sezione
		if(controllomultiplo())
    {
      var ss = coda(linkfinale);
        window.final=ss;

        window.open('pdf'+window.final);
    }


     });

     $('#printsingola').on('click', function () {
       var linkfinale="";


          if($("#ssid").val()!="")
          {
              var identi= $("#ssid").val();
              linkfinale+="?tipo=S&id="+identi;
              window.open('pdf'+linkfinale);
            }
            else {
              alert("ERROR");
            }


         });



 });

function coda(riga)
{

  $("#parametri").find("input").each(function() {
    if($(this).prop("checked"))
    {

      var valore=$(this).val();
      riga=riga+"&"+valore+"=1";
    }

  });


  return riga;
}
 function controllomultiplo()
 {
   var tipo=true,att=true,car=true,lu=true;
     if($("#cmembri").prop("checked")||$("#ccongregati").prop("checked")||$("#cbambini").prop("checked"))
     {
       tipo=true;
     }
     else
     {
       tipo=false;
     }
   if($("#attivic").prop("checked")||$("#attivicn").prop("checked") )
   {
       att=true;
   }
   else
   {
     att=false;
   }
    if($("#cpastore").prop("checked")||$("#cpresbitero").prop("checked")||$("#cevangelista").prop("checked")||$("#cdiacono").prop("checked")||$("#cmembro").prop("checked"))
    {
     car=true;
    }
    else
    {
    car=false;
    }
   if( $("#cfi").prop("checked")||$("#cpi").prop("checked")||$("#cpra").prop("checked")||$("#cce").prop("checked"))
   {
     lu=true;
   }
   else
   {
   lu=false;
   }

   if($("bmembri").prop("checked"))
   {
   if(tipo==true&&att==true&&car==true&&lu==true)
     {
       return true;

     }
     else
     {
     return false;

     }
   }
   else {
     if(tipo==true&&att==true&&lu==true)
       {
         return true;

       }
       else
       {
       return false;

       }
   }

 }


	function aggiungi(value)
	{


		var valore= $(value).closest('tr');
		var col1 = valore.find('td:eq(0)').find("input").val();
		var col2 = valore.find('td:eq(1)').find("input").val();
		var col3 = valore.find('td:eq(2)').find("input").val();
		var col4 = valore.find('td:eq(3)').find("input").val();
		var col5 = valore.find('td:eq(4)').find("input").val();
		var res= col1+' '+col2+' '+col3+' '+col4+' '+col5;
		//invia request post con dati e se retunr ok si posizionano come fissi
		$(value).parent().parent().remove();
		var riga='<tr><td>'+col1+'</td><td>'+col2+'</td><td>'+col3+'</td><td>'+col4+'</td><td></td><td><input  type="button" class="btn btn-success" id="add" onclick="aggiungi(this)" value="+">  </td><td><input type="button" class="btn btn-danger" id="add" value="X" onclick="elimina(this)"></td></tr>';
		$("#riga").append(riga);


	}
	 function controlladefault(){
		$('#parametri input:checked').each(function() {
			$(this).parent().removeClass("btn-primary");
			$(this).parent().addClass("btn-dark");
		});
	 }

	function setta(value)
	{


		var valore= $(value).closest('tr');
		var col1 = valore.find('td:eq(0)').text();
		var col2 = valore.find('td:eq(1)').text();
		var col3 = valore.find('td:eq(4)').find("input").val();
		$("#nome").val(col1);
		$("#cognome").val(col2);
		$("#ssid").val(col3);
		$("#chiudi").click();

	}

	function attivaopzione(field)
	{
		//$("#"+field).prop("checked", false);
			$("#"+field).parent().parent().find("input").each(function() {
				if($(this).prop("checked")==false)
				{
					$(this).parent().click();
				}

			});

	}

	function controllo(field)
	{
		if($("#"+field).prop('checked'))

		{
			$("#carico2").show();

		}
		else
		{
			$("#carico2").hide();
      if($("#cpastore").prop("checked"))
      {
        $("#cpastore").parent().click();
      }
      if($("#cpresbitero").prop("checked"))
      {
        $("#cpresbitero").parent().click();
      }
      if($("#cevangelista").prop("checked"))
      {
        $("#cevangelista").parent().click();
      }
      if($("#cdiacono").prop("checked"))
      {
        $("#cdiacono").parent().click();
      }
      if($("#cmembro").prop("checked"))
      {
        $("#cmembro").parent().click();
      }
		}
	}


</script>

</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">
        <img src="assets/images/img-1583-122x122.png" width="30" height="30" class="d-inline-block align-top" alt="">
        AD Firenze
      </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="secretaria">secretaria</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">tesoreria</a>
      </li>

    </ul>
  </div>
  </nav>


  <section class="counters1 counters cid-ra81Nt6vpJ" id="counters1-n" >
<div class="container">
 <div class="row">
	<div class="col-md-4">
	</div>
	<div class="col-md-4">
      <h2 ><b>Servizio Stampe varie</b></h2>

	</div>
	<div class="col-md-4">
	</div>
	<div class="col-md-2">
	</div>
	<div class="col-md-8">
	<div>

	</div>
	<div>
		<div class="input-group mb-3">
		  <h4>Stampa singola :</h4>
		</div>
	</div>
	<div class="form-group">
		<div class="input-group" id="selpersona">
			<div class="input-group-prepend">
				<button type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-example-modal-lg" id="notifica">
				Seleziona</button>
			</div>
			<input type="text" class="form-control" id="nome">
			<input type="text" class="form-control" id="cognome">
			<input type="hidden" class="form-control" id="ssid">
		</div>
	</div>

	<div class="container">
		<div class="row ">
			<div class="col-md-3">
			</div>
			<div class="col-md-6">
				<div class="input-group">
					<button type="button" id="printsingola" class="btn btn-info btn-lg btn-block">Visualizza stampa Singola</button>

				</div>
				<br>
					<br>
					<br>
			</div>
			<div class="col-md-3">
			</div>

		</div>
	</div>

	<hr>


	<div id="parametri">
		<div>
			<div class="input-group mb-3">
			  <h4>Stampa Multipla :</h4>
			</div>
		</div>
		<div class="form-group">
			<label >Tipo persona</label><br>

			<div class="btn-group btn-group-toggle" data-toggle="buttons">
				<label id="bmembri" class="btn btn-outline-primary active">
				<input type="checkbox" name="options" id="cmembri"  value="t_m" onchange="controllo(this.id)"  checked> Membri
				</label>
				<label id="bcongregati" class="btn btn-outline-primary ">
				<input type="checkbox" name="options" id="ccongregati"  value="t_c"> Congregati
				</label>
				<label class="btn btn-outline-primary ">
				<input type="checkbox" name="options" id="cbambini"  value="t_b" > Bambini
				</label>
			</div>
		</div>
	    <div class="form-group">
			<label for="inputAddress2">Attività</label><br>
			<div class="btn-group btn-group-toggle" data-toggle="buttons">
				<label class="btn btn-outline-primary active">
					<input type="checkbox" name="options" id="attivic" value="a_a" autocomplete="off" checked >Attivi
				</label>
				<label class="btn btn-outline-primary ">
					<input type="checkbox" name="options" id="attivicn" value="a_n" autocomplete="off">Non attivi
				</label>
			</div>
		</div>
		<div class="form-row">
			<div class="form-group col-md-12" id="carico2">
				<label for="inputCity">Carico</label><br>

				<div class="btn-group btn-group-toggle" data-toggle="buttons" id="carico">
					<label class="btn btn-outline-primary active">
						<input type="checkbox" name="options" id="cpastore" autocomplete="off" value="c_par" checked> Pastore
					</label>
					<label class="btn btn-outline-primary">
						<input type="checkbox" name="options" id="cevangelista" autocomplete="off" value="c_e"> Evangelista
					</label>
					<label class="btn btn-outline-primary">
						<input type="checkbox" name="options" id="cpresbitero" autocomplete="off" value="c_pre"> Presbitero
					</label>
					<label class="btn btn-outline-primary">
						<input type="checkbox" name="options" id="cdiacono" autocomplete="off" value="c_di"> Diacono
					</label>
					<label class="btn btn-outline-primary">
						<input type="checkbox" name="options" id="cmembro" autocomplete="off" value="c_m"> Membro
					</label>
				</div>
			</div>
			<div class="form-group col-md-12">
				<label for="inputState">Congregazione</label><br>

				<div class="btn-group btn-group-toggle" data-toggle="buttons">
					<label class="btn btn-outline-primary active">
						<input type="checkbox" name="options" id="cfi" autocomplete="off" value="l_fi" checked> Firenze
					</label>
					<label class="btn btn-outline-primary">
						<input type="checkbox" name="options" id="cpi" autocomplete="off" value="l_pi"> Pisa
					</label>
					<label class="btn btn-outline-primary">
						<input type="checkbox" name="options" id="cpra" autocomplete="off" value="l_pra" > Prato
					</label>
					<label class="btn btn-outline-primary">
						<input type="checkbox" name="options" id="cce" autocomplete="off" value="l_ce"> Cecina
					</label>
				</div>
			</div>
		</div>
	</div>
	<!--<input type="button" class="btn btn-primary" id="add" value="Add">
	<br>-->
	</div>
	<div class="col-md-2">
	</div>
 </div>
</div>
<div class="container">
	<div class="row ">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
			<div class="input-group">
				<button type="button" id="print" class="btn btn-success btn-lg btn-block">Visualizza stampa</button>
			</div>
		</div>
		<div class="col-md-4">
		</div>
	</div>
</div>

<div class="container">
	<div class="row">


	<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
	   <div class="modal-content">
		  <div class="modal-content">
		  <div class="modal-header">

			<div class="input-group">
			  <div class="input-group-prepend">
				<label class="input-group-text" for="inputGroupSelect01">Cerca persona</label>
			  </div>

			  <input type="text" class="form-control" id="cerca">
			</div>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body "><div class="input-group">
		  <div class="table-responsive-xl">

			<table id="risultati" class="table table-striped  table-bordered table-hover" width="100%"  >
		<caption>Elenco persone registrate</caption>
		<thead class="thead-dark">
			<th scope="col" >Nome</th>
			<th scope="col" >Cognome</th>
			<th scope="col" >Congregazione</th>
			<th scope="col" >Sezione</th>
			<th scope="col" >Operazioni</th>
		</thead>
		<tbody id="riga" >
      <?php

      $sqlu =$dbh->prepare("SELECT id,nome,cognome,tipo_persona,congregazione FROM persone ");
      $sqlu->execute();
      if ($sqlu->rowCount()>0)
      {
          while($row=$sqlu->fetch())
          {

            echo '<tr><td>'.$row['nome'].'</td><td>'.$row['cognome'].'</td><td>'.$row['congregazione'].'</td><td>'.$row['tipo_persona'].'</td><td><input type="hidden" value="'.$row['id'].'">  <button type="submit" class="btn btn-form display-4" name="" style="background-color: #e61e1e;color:white" onclick="setta(this)">Scegli</button></td></tr>';
          }

      }
      ?>
		</tbody>
		</table>
		</div>
		</div>
		  </div>
		  <div class="modal-footer">
			<button id="chiudi" type="button" class="btn btn-secondary" data-dismiss="modal">Chiudi</button>

		  </div>
		</div>
		</div>
	  </div>
	</div>
	</div>
</div>
</section>

</body>
</html>
