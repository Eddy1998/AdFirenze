<?php
session_start();
include '../data/funzioni.php';
include '../conn.inc.php';
$dbh = new PDO($conn, $user, $pass);
/*if(!isset($_SESSION['user']))
{
header('location: index.php');
}*/

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
<title>Gestione Stampe</title>
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
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



<script>
var luogo="";
 $(document).ready(function(){

	//$("#selpersona").hide();
	$("#parametri").hide();
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

    $('#notifica').on('click', function () {
         $('#cerca').val("");
     });

		$('#print').on('click', function () {
         alert(luogo);
     });
	 //cliccato bottone modifica
	 //$("#notifica").click();

	 /*$('.btn-success').on('click', function () {
         txt = $(this).parent().parent().parents('tr').find("td:eq(1)").text();
		console.log(txt);
     });*/

	 $(".table tbody").on('click', 'btn',function(){
	 alert('ss');
		/*var valore= $(this).closest('tr');
		var col1 = valore.find('td:eq(0)').text();
		var col2 = valore.find('td:eq(1)').text();
		var col3 = valore.find('td:eq(2)').text();
		var col4 = valore.find('td:eq(3)').text();
		var col5 = valore.find('td:eq(4)').text();
		var res= col1+' '+col2+' '+col3+' '+col4+' '+col5;
		alert(res);
		alert('ss');*/
	 });



 });

	function mostra(){

		var op = document.getElementById("opzione");
        var valore = op.options[op.selectedIndex].value;
        if(valore==="S")
			{
				$("#parametri").hide();
				$("#selpersona").show();
			}
		else{
				$("#selpersona").hide();
				$("#parametri").show();
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
    //$("#cerca").val("");
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

</script>

</head>
<body>
<section class="menu cid-ra8sZROvHU" once="menu" id="menu1-1f">



  <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color ">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <div class="hamburger">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
          </div>
      </button>
      <div class="menu-logo">
          <div class="navbar-brand">
              <span class="navbar-logo">

                       <img src="../assets/images/img-1583-122x122.png" alt="logo" title="" style="height: 3.8rem;">

              </span>
              <span class="navbar-caption-wrap"><a class="navbar-caption text-white" href="home">AD Firenze</a></span>
          </div>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">


      </div>
  </nav>
</section>


<section class="tabs3 cid-ra8uzLCEiU" id="tabs3-1n" style="margin-top: 85px;">


  <div class="container-fluid">
      <div class="row tabcont">
        <div class="col-md-4">
          <label class="form-control-label" ><b>Attenzione</b></label><br>
          <div class="alert alert-warning" role="alert">
          <b>L'elenco non puo' rimanere vuoto</b>
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
            <label class="form-control-label" ><h2><b>Gestione Utenti</b><h2></label>
            <input type="button" class="btn btn-primary" id="add" value="Nuovo">
          </div>

        </div>
        <div class="col-md-4" id="messaggio">
            <label class="form-control-label" ><b>Messaggi:</b></label><br>


        </div>

      </div>
      <div class="row tabcont">

        <div class="col-md-12">
        <!--<table class="table table-striped  table-bordered table-hover"   >
        <caption>Elenco utenti - secretaria e tesoreria</caption>
        <thead class="thead-dark">
          <th scope="col" style="width: 188px;height: 50px;">Nome</th>
          <th scope="col" style="width: 188px;height: 50px;">Cognome</th>
          <th scope="col" style="width: 150px;height: 50px;">Username</th>
          <th scope="col" style="width: 188px;height: 50px;">Email</th>
          <th scope="col" style="width: 188px;height: 50px;">Password</th>
          <th scope="col" style="width: 210px;height: 50px;">Operazioni</th>
        </thead>
        <tbody id="riga" >
          <?php/*

          $sqlu =$dbh->prepare("SELECT id_user,nome_user,cognome_user,username_user,email_user FROM users ");
          $sqlu->execute();
          if ($sqlu->rowCount()>0)
          {
              while($row=$sqlu->fetch())
              {

                echo '<tr><td>'.$row['nome_user'].'</td><td>'.$row['cognome_user'].'</td><td>'.$row['username_user'].'</td><td>'.$row['email_user'].'</td><td></td><td><input type="hidden" value="'.$row['id_user'].'">  <button type="submit" class="btn btn-form display-4" name="salvamodifica" style="background-color: #e61e1e;color:white" onclick="elimina(this)">elimina</button></td></tr>';
              }

          }
          */?>
        </tbody>
      </table>-->
      </div>


      </div>
  </div>

  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg" id="notifica" style="display:none">
  </button>

  <!--<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
     <div class="modal-content">
        <div class="modal-content">
        <div class="modal-header">

  		<div class="input-group">
  		  <div class="input-group-prepend">
  			<h4  >Conferma Eliminazione</h4>
  		  </div>
  		</div>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body "><div class="input-group">
      	  <div class="table-responsive-xl">

              <h5>Confermi di eliminale l'utente selezionato?<br>L'utente non potrà essere recuperato.</h5>
      	</div>
      	</div>
        </div>
        <div class="modal-footer">

          <button id="conferma" type="button" class="btn btn-primary" data-dismiss="modal">Conferma</button>
          <button  id="chiudi" type="button" class="btn btn-secondary" data-dismiss="modal" >Annulla</button>
        </div>
      </div>
      </div>
    </div>
  </div>-->


  <div class="row">
  <div class="col-md-4">
  </div>
  <div class="col-md-4">
  	<h4>Gest. STAMPE varie</h4>

  </div>
  <div class="col-md-4">
  </div>

  <div class="col-md-2">
  </div>
  <div class="col-md-8">
  	<div >
  		<label class="input-group"> specificare parametri</label>


  	</div>
  	<div >
  			<div class="input-group mb-3">
  			  <div class="input-group-prepend">
  				<label class="input-group-text" for="inputGroupSelect01">Tipo stampa</label>
  			  </div>
  			  <select class="custom-select" id="opzione">
  				<option value="S" selected >Singola</option>
  				<option value="M">Multipla</option>

  			  </select>
  			</div>

  		</div>

  	<div class="input-group" id="selpersona">
  	  <div class="input-group-prepend">
  		<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg" id="notifica">
  		Seleziona</button>
  	  </div>
  	  <input type="text" class="form-control" id="nome">
  	  <input type="text" class="form-control" id="cognome">
  	  <input type="hidden" class="form-control" id="ssid">
  	</div>

  		<div id="parametri">
  			<div class="form-group">
      <label for="inputAddress">Address</label>
      <div class="btn-group btn-group-toggle" data-toggle="buttons">
  				  <label class="btn btn-secondary active">
  					<input type="radio" name="options" id="option1" autocomplete="off" checked> Tutti
  				  </label>
  				  <label class="btn btn-secondary ">
  					<input type="radio" name="options" id="option1" autocomplete="off" > sing
  				  </label>
  				  <label class="btn btn-secondary">
  					<input type="radio" name="options" id="option2" autocomplete="off">
  							<label class="btn btn-secondary">
  							<input type="checkbox" name="options" id="option2" autocomplete="off"> MEB
  						  </label>
  						  <label class="btn btn-secondary">
  							<input type="checkbox" name="options" id="option3" autocomplete="off"> CR
  						  </label>
  						  <label class="btn btn-secondary">
  							<input type="checkbox" name="options" id="option3" autocomplete="off"> BM
  						  </label>
  				  </label>

  				</div>
    </div>
    <div class="form-group">
      <label for="inputAddress2">Address 2</label>
      <div class="btn-group btn-group-toggle" data-toggle="buttons">
  				  <label class="btn btn-secondary active">
  					<input type="radio" name="options" id="option1" autocomplete="off" checked> TUTTI
  				  </label>
  				  <label class="btn btn-secondary">
  					<input type="radio" name="options" id="option2" autocomplete="off">ATT
  				  </label>
  				  <label class="btn btn-secondary">
  					<input type="radio" name="options" id="option3" autocomplete="off"> NN
  				  </label>
  				</div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">City</label>
       <div class="btn-group btn-group-toggle" data-toggle="buttons">

  				<label class="btn btn-secondary active">
  					<input type="radio" name="options" id="option1" autocomplete="off" checked> Tutti
  				  </label>
  				  <label class="btn btn-secondary">
  					<input type="radio" name="options" id="option1" autocomplete="off" > sinf
  				  </label>

  				  <label class="btn btn-secondary active">
  					<input type="checkbox" name="options" id="option1" autocomplete="off" checked> prt
  				  </label>
  				  <label class="btn btn-secondary">
  					<input type="checkbox" name="options" id="option2" autocomplete="off"> ev
  				  </label>
  				  <label class="btn btn-secondary">
  					<input type="checkbox" name="options" id="option3" autocomplete="off"> pr
  				  </label>
  				  <label class="btn btn-secondary">
  					<input type="checkbox" name="options" id="option3" autocomplete="off"> dc
  				  </label>
  				</div>
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">State</label>
        <div class="btn-group btn-group-toggle" data-toggle="buttons">

  					<label class="btn btn-secondary active">
  					<input type="radio" name="options" id="option1" autocomplete="off" checked> Tutti
  				  </label>
  				  <label class="btn btn-secondary">
  					<input type="radio" name="options" id="option1" autocomplete="off" > sinf
  				  </label>

  				  <label class="btn btn-secondary active">
  					<input type="checkbox" name="options" id="option1" autocomplete="off" checked> tt
  				  </label>
  				  <label class="btn btn-secondary">
  					<input type="checkbox" name="options" id="option2" autocomplete="off" onchange="citta('fire')"> f
  				  </label>
  				  <label class="btn btn-secondary">
  					<input type="checkbox" name="options" id="option3" autocomplete="off"> p
  				  </label>
  				  <label class="btn btn-secondary">
  					<input type="checkbox" name="options" id="option3" autocomplete="off"> pr
  				  </label>
  				  <label class="btn btn-secondary">
  					<input type="checkbox" name="options" id="option3" autocomplete="off"> c
  				  </label>
  				</div>
      </div>













  			</div>
  			</div>
  	<!--<input type="button" class="btn btn-primary" id="add" value="Add">
  	<br>-->

  <br>
  </div>

  </div>
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
        <div class="modal-body container">


          <table id="risultati" class="table    table-hover table-sm " colspan="0" cellspacing="0"  >
  	<caption>List of users</caption>
  	<thead class="thead-dark">
  		<th  >Nome</th>
  		<th  >Cognome</th>
  		<th >Età</th>
  		<th  >sezione</th>
  		<th  >congr</th>
  		<th  >Operazioni</th>
  	</thead>
  	<tbody id="riga" >

      <?php


    $sqld =$dbh->prepare("SELECT p.*, md5(id) AS ssid, DATE_FORMAT(p.data_nascita,  '%d/%m/%Y' ) AS data_di_nascita,DATE_FORMAT(p.data_matrimonio,  '%d/%m/%Y' ) AS data_di_matrimonio, DATE_FORMAT(p.data_arrivo_in_chiesa, '%d/%m/%Y' ) AS data_arrivo  FROM persone p ORDER BY p.cognome ASC;");
    $sqld->execute();
    while ($row=$sqld->fetch()) {

     $eta = calcola($row['data_di_nascita']);

        echo '<tr scope="row">';
        echo "<td>" . $row['nome'] . "</td>";
        echo "<td>" .$row['cognome']. "</td>";
        echo "<td>" . $eta . "</td>";

        if($row['tipo_persona']=="bambino")
        {
          $sezione="Bambini";
        }
        else if ($row['tipo_persona']=="membro")
        {
          $sezione="Membri";
        }
        else
        {
          $sezione="Congregati";
        }

        echo "<td>" . $sezione. "</td>";
        echo "<td >" . $row['congregazione'] . "</td>";
        echo "<td><input type='hidden' value='".$row['id']."'>  <input type='button' class='btn btn-dark' id='add' value='seleziona' onclick='setta(this)'></td>";

        echo "</tr>";
    }
    ?>




  	</tbody>
  	</table>


        </div>
        <div class="modal-footer">
          <button id="chiudi" type="button" class="btn btn-secondary" data-dismiss="modal">Annulla</button>

        </div>
      </div>
      </div>
    </div>
  </div>





  </div>





</section>

<script src="../assets/web/assets/jquery/jquery.min.js"></script>
<script src="../assets/tether/tether.min.js"></script>
<script src="../assets/popper/popper.min.js"></script>
<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/smoothscroll/smooth-scroll.js"></script>
<script src="../assets/viewportchecker/jquery.viewportchecker.js"></script>
<script src="../assets/dropdown/js/script.min.js"></script>
<script src="../assets/touchswipe/jquery.touch-swipe.min.js"></script>
<script src="../assets/mbr-tabs/mbr-tabs.js"></script>
<script src="../assets/theme/js/script.js"></script>



</body>
</html>
