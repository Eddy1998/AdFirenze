<?php
session_start();
include 'conn.inc.php';
$dbh = new PDO($conn, $user, $pass);
/*if(!isset($_SESSION['user']))
{
header('location: index.php');
}*/
if(!isset($_GET['id']))
{
//errore, utente non specificato
}


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
<title>Visualizza</title>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script>
 $(document).ready(function(){
	$('#add').on('click', function () {
         nuovariga();
     });


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
              <span class="navbar-caption-wrap"><a class="navbar-caption text-white" href="home">ADM Firenze</a></span>
          </div>
      </div>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">


      </div>
  </nav>
</section>











<section class="tabs3 cid-ra8uzLCEiU" id="tabs3-1n" style="margin-top: 80px;">


  <div class="container-fluid">
      <div class="row tabcont">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
            <div class="form-group">
            <label class="form-control-label" ><h2><b>Gestione Utenti</b><h2></label>
            <input type="button" class="btn btn-primary" id="add" value="Nuovo">
          </div>


        </div>
        <div class="col-md-4">
        </div>

      </div>
      <div class="row tabcont">
        <div class="col-md-1">
        </div>
        <div class="col-md-10">
        <table class="table table-striped  table-bordered table-hover"   >
        <caption>Lista di utenti - secretaria</caption>
        <thead class="thead-dark">
          <th scope="col" style="width: 188px;height: 50px;">Nome</th>
          <th scope="col" style="width: 188px;height: 50px;">Cognome</th>
          <th scope="col" style="width: 188px;height: 50px;">Username</th>
          <th scope="col" style="width: 188px;height: 50px;">Email</th>
          <th scope="col" style="width: 188px;height: 50px;">Password</th>
          <th colspan="2" style="width: 188px;height: 50px;">Operazioni</th>
        </thead>
        <tbody id="riga" >
          <tr >
            <td>nasdadsasdasdas</td>
            <td>nasdadasdsadasd</td>
            <td>naaaa</td>
            <td>nasafw</td>
            <td></td>
            <td></td>
            <td><input type="button" class="btn btn-danger" id="add" value="X" onclick="elimina(this)"></td>
          </tr>
        </tbody>
        </table>
      </div>
      <div class="col-md-1">
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
