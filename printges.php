<!DOCTYPE html>
<html >
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <meta name="description" content="Site Generator Description">
  <title>Gestione utenti</title>
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

  alert(riga);
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
    if($("#cpastore").prop("checked")||$("#cprebitero").prop("checked")||$("#cevangelista").prop("checked")||$("#cdiacono").prop("checked")||$("#cmembro").prop("checked"))
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
   if(tipo==true&&att==true&&car==true&&lu==true)
     {
       return true;

     }
     else
     {
     return false;

     }

 }
	function mostra(){

		var op = document.getElementById("opzione");
        var valore = op.options[op.selectedIndex].value;
        if(valore==="S")
			{
				$("#parametri").hide();
				$("#selpersona").show();
				TIPO="S";
			}
		else{
				$("#selpersona").hide();
				$("#parametri").show();
				TIPO="M";
		}
	}

	function nuovariga()
	{
		var riga='<tr><td><input type="text" class="form-control"></td><td><input class="form-control" type="text"></td><td><input class="form-control" type="text"></td><td><input  class="form-control" type="email"></td><td><input class="form-control" type="password"></td><td><input  type="button" class="btn btn-success" id="add" onclick="aggiungi(this)" value="+">  </td><td><input type="button" class="btn btn-danger" id="add" value="X" onclick="elimina(this)"></td></tr>';
		$("#riga").append(riga);
	}

	function elimina(value)
	{
		var r = confirm("Confermi di eliminare utente?");
		  if (r == true) {
			//richiesta delete con dati (id)
			//se eliminato return code == ok, si rimuove
			$(value).parent().parent().remove();
		  } else {
			txt = "You pressed Cancel!";
		  }

	}
	function aggiungi(value)
	{

		/*$(this).closest('tr').find("input").each(function() {
        alert(this.value)
    });*/
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

		//alert(res);
		/*$(value).parent().parent().$("td").each(function()
			{
			  alert($(this).html());
			});*/
	}
	 function controlladefault(){
		$('#parametri input:checked').each(function() {
			$(this).parent().removeClass("btn-primary");
			$(this).parent().addClass("btn-dark");
		});
	 }

	function setta(value)
	{

		/*$(this).closest('tr').find("input").each(function() {
        alert(this.value)
    });*/
		var valore= $(value).closest('tr');
		var col1 = valore.find('td:eq(0)').text();
		var col2 = valore.find('td:eq(1)').text();
		var col3 = valore.find('td:eq(5)').find("input").val();
		$("#nome").val(col1);
		$("#cognome").val(col2);
		$("#ssid").val(col3);
		$("#chiudi").click();
		//var col4 = valore.find('td:eq(3)').find("input").val();
		//var col5 = valore.find('td:eq(4)').find("input").val();
		//var res= col1+' '+col2+' '+col3+' '+col4+' '+col5;
		//invia request post con dati e se retunr ok si posizionano come fissi
		//$(value).parent().parent().remove();
		/*var riga='<tr><td>'+col1+'</td><td>'+col2+'</td><td>'+col3+'</td><td>'+col4+'</td><td></td><td><input  type="button" class="btn btn-success" id="add" onclick="aggiungi(this)" value="+">  </td><td><input type="button" class="btn btn-danger" id="add" value="X" onclick="elimina(this)"></td></tr>';
		$("#riga").append(riga);
		*/
		//alert(res);
		/*$(value).parent().parent().$("td").each(function()
			{
			  alert($(this).html());
			});*/
	}

	function citta(field){

		luogo=field;
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
		}
	}


</script>

</head>
<body>
<div class="container">
 <div class="row">
	<div class="col-md-4">
	</div>
	<div class="col-md-4">
		<h4>Gest. stampe varie</h4>
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
						<input type="checkbox" name="options" id="cprebitero" autocomplete="off" value="c_pre"> Presbitero
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
		<caption>List of users</caption>
		<thead class="thead-dark">
			<th scope="col" >Nome</th>
			<th scope="col" >Cognome</th>
			<th scope="col" >Età</th>
			<th scope="col" >tipo</th>
			<th scope="col" >congr</th>
			<th scope="col" >Operazioni</th>
		</thead>
		<tbody id="riga" >
			<tr scope="row">
				<td>prima riga prima colona</td>
				<td>seconda riga 1 col</td>
				<td>terza riga 1 col</td>
				<td>nasafw</td>

				<td></td>
				<td> <input type="hidden" value="11"><input type="button" class="btn btn-dark" id="add" value="seleziona" onclick="setta(this)"></td>
			</tr>
			<tr scope="row">
				<td>prima riga 2colona</td>
				<td>seconda riga 2 col</td>
				<td>t12l</td>
				<td>nasafw</td>
				<td></td>
				<td> <input type="hidden" value="22">  <input type="button" class="btn btn-dark" id="add" value="seleziona" onclick="setta(this)"></td>
			</tr>
			<tr scope="row">
				<td>prima riga terxa colona</td>
				<td>seconda riga 3 col</td>
				<td>terza riga3 col</td>
				<td>nasafw</td>

				<td></td>
				<td><input type="hidden" value="33"><input type="button" class="btn btn-dark" id="add" value="seleziona" onclick="setta(this)"></td>
			</tr>
			<tr scope="row">
				<td>prima riga quarta colona</td>
				<td>seconda riga 4 col</td>
				<td>terza riga 4 col</td>
				<td>nasafw</td>

				<td></td>
				<td><input type="hidden" value="44"><input type="button" class="btn btn-dark" id="add" value="seleziona" onclick="setta(this)"></td>
			</tr>
		</tbody>
		</table>
		</div>
		</div>
		  </div>
		  <div class="modal-footer">
			<button id="chiudi" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary">Save changes</button>
		  </div>
		</div>
		</div>
	  </div>
	</div>
	</div>
</div>


</body>
</html>
