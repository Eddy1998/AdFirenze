<?php
session_start();
include 'conn.inc.php';
include 'data/funzioni.php';
$dbh = new PDO($conn, $user, $pass);
/*if(!isset($_SESSION['id']))
{
header('location: index.php');
}*/

?>
<!DOCTYPE html>
<html >
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="generator" content="Mobirise v4.8.7, mobirise.com">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
<link rel="shortcut icon" href="assets/images/img-1583-122x122.png" type="image/x-icon">
<meta name="description" content="Site Generator Description">
<title>Gestione Utenti</title>
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



<script>
 $(document).ready(function(){
	$('#add').on('click', function () {
         nuovariga();
     });

 });
	function nuovariga()
	{
		var riga='<tr><td><input type="text" class="form-control focus" ></td><td><input class="form-control" type="text" ></td><td><input class="form-control" type="text"  ></td><td><input  class="form-control" type="email"></td><td><input class="form-control" type="password"  ></td><td><button type="submit" class="btn btn-form display-4" name="salvamodifica" style="background-color: #329015;color:white" onclick="aggiungi(this)">salva</button> <button type="submit" class="btn btn-form display-4" name="salvamodifica" style="background-color: #e61e1e;color:white" onclick="annulla(this)">annulla</button> </td></tr>';
		$("#riga").append(riga);
    $('.focus').focus();
	}

	function elimina(value)
	{
      $("#notifica").click();
      $('#conferma').on('click', function () {

        var valore= $(value).closest('tr');
       var id = valore.find('td:eq(5)').find("input").val();
        $.post("data/dati.php",{'eliminautente': 1, 'id' : id }, function(response) {
          var json = JSON.parse(response);
          console.log(json);
          if(json.return=="OK")
          {
            $(value).parent().parent().remove();
            $("#mex").remove();
              $("#messaggio").append('  <div id="mex" class="alert alert-dark" role="alert">Utente Rimosso correttamente </div>');
              var idprova = <?php echo $_SESSION['id']; ?> ;
              
              if(idprova==id)
              {
                window.location="logout";
              }
            window.scrollTo(0, 0);

          }
          else
          {
            $("#mex").remove();
            $("#messaggio").append('  <div id="mex" class="alert alert-danger" role="alert">Errore durante Rimozione </div>');

            window.scrollTo(0, 0);

          }
        });
    });


	}

  function annulla(value)
	{

            $(value).parent().parent().remove();

	}


	function aggiungi(value)
	{


		var valore= $(value).closest('tr');
		var nome = valore.find('td:eq(0)').find("input").val();
		var cognome = valore.find('td:eq(1)').find("input").val();
		var username = valore.find('td:eq(2)').find("input").val();
		var email = valore.find('td:eq(3)').find("input").val();
		var password = valore.find('td:eq(4)').find("input").val();
		//invia request post con dati e se retunr ok si posizionano come fissi
    $.post("data/dati.php",{'salvautente': 1, 'nome' : nome, 'cognome':cognome, 'username':username, 'email':email,'password':password }, function(response) {
      var json = JSON.parse(response);
      console.log(json);
      if(json.return=="OK")
      {
        var id=json.id;
        $(value).parent().parent().remove();
    		var riga='<tr><td>'+nome+'</td><td>'+cognome+'</td><td>'+username+'</td><td>'+email+'</td><td></td><td>  <input type="hidden" value="'+id+'">    <button type="submit" class="btn btn-form display-4" name="salvamodifica" style="background-color: #e61e1e;color:white" onclick="elimina(this)">elimina</button></td></tr>';
    		$("#riga").append(riga);
        $("#mex").remove();
          $("#messaggio").append('  <div id="mex" class="alert alert-info" role="alert">Utente inserito correttamente </div>');

        window.scrollTo(0, 0);
      }
      else
      {
        $("#mex").remove();
        $("#messaggio").append('  <div id="mex" class="alert alert-danger" role="alert">Errore durante inserimento </div>');
        window.scrollTo(0, 0);

      }
    });

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

                       <img src="assets/images/img-1583-122x122.png" alt="logo" title="" style="height: 3.8rem;">

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
        <table class="table table-striped  table-bordered table-hover"   >
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
          <?php

          $sqlu =$dbh->prepare("SELECT id_user,nome_user,cognome_user,username_user,email_user FROM users ");
          $sqlu->execute();
          if ($sqlu->rowCount()>0)
          {
              while($row=$sqlu->fetch())
              {

                echo '<tr><td>'.$row['nome_user'].'</td><td>'.$row['cognome_user'].'</td><td>'.$row['username_user'].'</td><td>'.$row['email_user'].'</td><td></td><td><input type="hidden" value="'.$row['id_user'].'">  <button type="submit" class="btn btn-form display-4" name="salvamodifica" style="background-color: #e61e1e;color:white" onclick="elimina(this)">elimina</button></td></tr>';
              }

          }
          ?>
        </tbody>
        </table>
      </div>


      </div>
  </div>

  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg" id="notifica" style="display:none">
  </button>

  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
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
  </div>


</section>

<script src="assets/web/assets/jquery/jquery.min.js"></script>
<script src="assets/tether/tether.min.js"></script>
<script src="assets/popper/popper.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/smoothscroll/smooth-scroll.js"></script>
<script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
<script src="assets/dropdown/js/script.min.js"></script>
<script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
<script src="assets/mbr-tabs/mbr-tabs.js"></script>
<script src="assets/theme/js/script.js"></script>



</body>
</html>
