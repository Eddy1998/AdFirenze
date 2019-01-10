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
<div class="row">
<div class="col-md-4">
</div>
<div class="col-md-4">
	<h4>Gest. Ut</h4>
	
</div>
<div class="col-md-4">
</div>

<div class="col-md-4">
</div>
<div class="col-md-4">
	
	<input type="button" class="btn btn-primary" id="add" value="Add">
	<br>
<br>
</div>
<div class="col-md-4">
</div>


<div class="row">

<div class="col-md-12">
<div class="col-md-1">
</div>
<div class="col-md-10">



	<table class="table table-striped  table-bordered table-hover" width="100%"  style="margin-left: 5em; margin-right: 5em;">
	<caption>List of users</caption>
	<thead class="thead-dark">
		<th scope="col" style="width: 188px;height: 50px;">Nome</th>
		<th scope="col" style="width: 188px;height: 50px;">Cognome</th>
		<th scope="col" style="width: 188px;height: 50px;">Username</th>
		<th scope="col" style="width: 188px;height: 50px;">Email</th>
		<th scope="col" style="width: 188px;height: 50px;">Password</th>
		<th colspan="2" style="width: 188px;height: 50px;">Operazioni</th>
	</thead>
	<tbody id="riga" >
		<tr scope="row">
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





</body>
</html>
