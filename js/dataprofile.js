$(document).ready(function(){
   if(($('#id').length))
    {
      var id=$('#id').val();
	    //se non funziona, il link è senza i due punti
        console.log(id);

      $.post("data/dati.php",{'ONE': 1, 'ssid' : id }, function(response) {
        var json = JSON.parse(response);
          nascondi_figli()
          console.log(json);
         /*
	 var image = new Image();
image.src = 'data:image/png;base64,iVBORw0K...';
document.body.appendChild(image);*/
	      //vengono valorizzati id dati e controlli per mostrare quta di form ( n figli, consacrato nome figli)
    /*   $("#attivo2 ,#attivo ").append();
       $("#tipo2 ,#tipo ").append();*/
       $("#nome,#utente,#nomege").append(json.profilo[0].nome);
       $("#nome2").val(json.profilo[0].nome);
	if(json.profilo[0].cognome==null)
	{
	    $("#cognome ").append("--non indicato--");
	}
	else
	{
	   $("#cognome ").append(json.profilo[0].cognome);
     $("#cognome2").val(json.profilo[0].cognome);
	}

	if(json.profilo[0].indirizzo==null)
	{
	    $("#indirizzo ").append("--non indicato--");
	}
	else
	{
	   $("#indirizzo2 ,#indirizzo ").append(json.profilo[0].indirizzo);
	}

       if(json.profilo[0].citta==null)
	{
	   $("#citta ").append("--non indicato--");
	}
	else
	{
	   $("#citta2 ,#citta ").append(json.profilo[0].citta);
	}

       if(json.profilo[0].cap==null)
	{
	   $("#cap ").append("--non indicato--");
	}
	else
	{
	  $("#cap2 ,#cap ").append(json.profilo[0].cap);
	}

	 if(json.profilo[0].data_di_nascita==null)
	{
	   $("#nascita ").append("--non indicato--");
	}
	else
	{
	  $("#nascita2 ,#nascita ").append(json.profilo[0].data_di_nascita);
	}

	if(json.profilo[0].sesso==null)
	{
	  $("#sesso ").append("--non indicato--");
	}
	else
	{
	 $("#sesso2 ,#sesso ").append(json.profilo[0].sesso);
	}

	if(json.profilo[0].telefono==null)
	{
	  $("#telefono ").append("--non indicato--");
	}
	else
	{
	 $("#telefono2 ,#telefono ").append(json.profilo[0].telefono);
	}

	if(json.profilo[0].nazionalita==null)
	{
	  $("#nazionalita ").append("--non indicato--");
	}
	else
	{
	 $("#nazionalita2 ,#nazionalita ").append(json.profilo[0].nazionalita);
	}

	if(json.profilo[0].stato_civile==null)
	{
	  $("#statocivile ").append("--non indicato--");
    $("#statocivile2").val ("NaN");
	}
	else
	{
	 $("#statocivile2 ,#statocivile ").append(json.profilo[0].stato_civile);
	}

	if(json.profilo[0].data_di_matrimonio==null)
	{
	   $("#matrimonio ").append("--non indicato--");
	}
	else
	{
	  $("#matrimonio2 ,#matrimonio ").append(json.profilo[0].data_di_matrimonio);
	}

	if(json.profilo[0].nome_coniuge==null)
	{
	   $("#nome-coniuge ").append("--non indicato--");
	}
	else
	{
	  $("#nome-coniuge2 ,#nome-coniuge ").append(json.profilo[0].nome_coniuge);
	}


       if(json.profilo[0].cognome_coniuge==null)
       {
          $("#cognome-coniuge ").append("--non indicato--");
       }
       else
       {
	   $("#cognome-coniuge2 ,#cognome-coniuge ").append(json.profilo[0].cognome_coniuge);
       }

       if(json.profilo[0].numero_figli==null)
       {
           $("#numero-figli ").append("--non indicato--");
       }
       else
       {
	        $("#numero-figli2 ,#numero-figli ").append(json.profilo[0].numero_figli);
       }


       if(json.mex.figli=="trovato")
       {
       for(var i=0;i<json.figli.length;i++)
       {
         var k = i+1;
	        $("#nfiglio"+k).show();
          $("#cfiglio"+k).show();
          $("#nome-figlio-"+k+"2 ,#nome-figlio-"+k).append(json.figli[i].nome_figlio);
          $("#cognome-figlio-"+k+"2 ,#cognome-figlio-"+k).append(json.figli[i].cognome_figlio);
       }
     }

	if(json.profilo[0].nome_padre==null)
	{
	   $("#nome-padre ").append("--non indicato--");
	}
	else
	{
	   $("#nome-padre2 ,#nome-padre ").append(json.profilo[0].nome_padre);
	}

     	if(json.profilo[0].nome_madre==null)
	{
	   $("#nome-madre ").append("--non indicato--");
	}
	else
	{
	   $("#nome-madre2 ,#nome-madre ").append(json.profilo[0].nome_madre);
	}

       if(json.profilo[0].data_di_battesimo==null)
	{
	   $("#data-battesimo ").append("--non indicato--");
	}
	else
	{
	   $("#data-battesimo2 ,#data-battesimo ").append(json.profilo[0].data_di_battesimo);
	}

	if(json.profilo[0].luogo_battesimo==null)
	{
	   $("#luogo-battesimo ").append("--non indicato--");
	}
	else
	{
	   $("#luogo-battesimo2 ,#luogo-battesimo ").append(json.profilo[0].luogo_battesimo);
	}

	if(json.profilo[0].data_arrivo==null)
	{
	   $("#data-arrivo ").append("--non indicato--");
	}
	else
	{
	   $("#data-arrivo2 ,#data-arrivo ").append(json.profilo[0].data_arrivo);
	}

        if(json.profilo[0].battezzato_con_spirito_santo==null)
	{
	   $("#battezzato-spirito").append("--non indicato--");
	}
	else
	{
 	   if(json.profilo[0].battezzato_con_spirito_santo=='S')
	   {
		$("#battezzato-spirito ").append("Si");
		$("#battezzato-spirito2").append("S");
	   }
	   else {
	   	$("#battezzato-spirito ").append("No");
		$("#battezzato-spirito2").append("N");
	   }

	}

	if(json.profilo[0].numero_tessera==null)
	{
	   $("#numero-tessera ").append("--non indicato--");
	}
	else
	{
	   $("#numero-tessera2 ,#numero-tessera ").append(json.profilo[0].numero_tessera);
	}

       	if(json.profilo[0].carico_in_chiesa==null)
	{
	   $("#carico ").append("--non indicato--");
	}
	else
	{
	    $("#carico2 ,#carico ").append(json.profilo[0].carico_in_chiesa);
	}


	if(json.profilo[0].osservazioni==null)
	{
	  $("#osservazioni ").append("--non indicato--");
	}
	else
	{
	    $("#osservazioni2 ,#osservazioni ").append(json.profilo[0].osservazioni);
	}

	if(json.consacrato[0].data_diacono==null && json.consacrato[0].luogo_diacono==null)
	{
 	  $("#datadiacono , #luogodiacono").hide();
	}
	else
	{
		if(json.consacrato[0].data_diacono==null)
		{
			$("#data-diacono").append("--non indicato--");
		}
		else
		{
			//da gestire le date, nella parte hidden e visualizzata
			$("#data-diacono2 ,#data-diacono ").append(json.consacrato[0].data_diacono);
		}
		if(json.consacrato[0].luogo_diacono==null)
		{
			$("#luogo-diacono").append("--non indicato--");
		}
		else
		{
			//da gestire le date, nella parte hidden e visualizzata
			$("#luogo-diacono2 ,#luogo-diacono ").append(json.consacrato[0].luogo_diacono);
		}
	}

	if(json.consacrato[0].data_presbitero==null && json.consacrato[0].luogo_presbitero==null)
	{
 	  $("#datapresbitero , #luogopresbitero").hide();
	}
	else
	{
		if(json.consacrato[0].data_presbitero==null)
		{
			$("#data-presbitero").append("--non indicato--");
		}
		else
		{
			//da gestire le date, nella parte hidden e visualizzata
			$("#data-presbitero2 ,#data-presbitero ").append(json.consacrato[0].data_presbitero);
		}
		if(json.consacrato[0].luogo_presbitero==null)
		{
			$("#luogo-presbitero").append("--non indicato--");
		}
		else
		{
			//da gestire le date, nella parte hidden e visualizzata
			$("#luogo-presbitero2 ,#luogo-presbitero ").append(json.consacrato[0].luogo_presbitero);
		}
	}

	if(json.consacrato[0].data_evangelista==null && json.consacrato[0].luogo_evangelista==null)
	{
 	  $("#dataevangelista , #luogoevangelista").hide();
	}
	else
	{
		if(json.consacrato[0].data_evangelista==null)
		{
			$("#data-evangelista").append("--non indicato--");
		}
		else
		{
			//da gestire le date, nella parte hidden e visualizzata
			$("#data-evangelista2 ,#data-evangelista ").append(json.consacrato[0].data_evangelista);
		}
		if(json.consacrato[0].luogo_evangelista==null)
		{
			$("#luogo-evangelista").append("--non indicato--");
		}
		else
		{
			//da gestire le date, nella parte hidden e visualizzata
			$("#luogo-evangelista2 ,#luogo-evangelista ").append(json.consacrato[0].luogo_evangelista);
		}
	}

	if(json.consacrato[0].data_pastore==null && json.consacrato[0].luogo_pastore==null)
	{
 	  $("#datapastore , #luogopastore").hide();
	}
	else
	{
		if(json.consacrato[0].data_pastore==null)
		{
			$("#data-pastore").append("--non indicato--");
		}
		else
		{
			//da gestire le date, nella parte hidden e visualizzata
			$("#data-pastore2 ,#data-pastore ").append(json.consacrato[0].data_pastore);
		}
		if(json.consacrato[0].luogo_pastore==null)
		{
			$("#luogo-pastore").append("--non indicato--");
		}
		else
		{
			//da gestire le date, nella parte hidden e visualizzata
			$("#luogo-pastore2 ,#luogo-pastore ").append(json.consacrato[0].luogo_pastore);
		}
	}

       /*$("#data-diacono2 ,#data-diacono ").append();
       $("#luogo-diacono2 ,#luogo-diacono ").append();
       $("#data-presbitero2 ,#data-presbitero ").append();
       $("#luogo-presbitero2 ,#luogo-presbitero ").append();
       $("#data-evangelista2 ,#data-evangelista ").append();
       $("#luogo-evangelista2 ,#luogo-evangelista ").append();
       $("#data-pastore2 ,#data-pastore ").append();
       $("#luogo-pastore2 ,#luogo-pastore ").append();*/



      });
    }
    else
    {
      alert("id persona non specificato : ERROR");
    }
});



 function nascondi_figli()
        {
          for(var k =1;k<6;k++)
          {
            $("#nfiglio"+k).hide();
            $("#cfiglio"+k).hide();
          }
        }
