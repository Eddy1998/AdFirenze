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
	if(json.profilo[0].tipo=="bambino")
	{
		prepara_bambino();
	}
	else if(json.profilo[0].tipo=="congregato")
	{
		prepara_congregato();
	}
       $("#nome,#utente,#nomege").append(json.profilo[0].nome);
       $("#nome2").val(json.profilo[0].nome);
	if(json.profilo[0].cognome==null)
	{
	    $("#cognome ").append("--non indicato--");
	    $("#cognome2").val("NV");
	}
	else
	{
	   $("#cognome ").append(json.profilo[0].cognome);
           $("#cognome2").val(json.profilo[0].cognome);
	}

	if(json.profilo[0].indirizzo==null)
	{
	    $("#indirizzo ").append("--non indicato--");
		$("#indirizzo2 ").val("NV");
	}
	else
	{
	   $("#indirizzo ").append(json.profilo[0].indirizzo);
		$("#indirizzo2 ").val(json.profilo[0].indirizzo);
	}

       if(json.profilo[0].citta==null)
	{
	   $("#citta ").append("--non indicato--");
		$("#citta2 ").val("NV");
	}
	else
	{
	   $("#citta ").append(json.profilo[0].citta);
		 $("#citta2 ").val(json.profilo[0].citta);
	}

       if(json.profilo[0].cap==null)
	{
	   $("#cap ").append("--non indicato--");
		$("#cap2 ").val("NV");
	}
	else
	{
	  $("#cap ").append(json.profilo[0].cap);
		$("#cap2 ").val(json.profilo[0].cap);
	}

	 if(json.profilo[0].data_di_nascita==null)
	{
	   $("#nascita ").append("--non indicato--");
		$("#nascita2 ").val("NV");
	}
	else
	{
	  $("#nascita ").append(json.profilo[0].data_di_nascita);
		$("#nascita2 ").val(json.profilo[0].data_di_nascita);
	}

	if(json.profilo[0].sesso==null)
	{
	  $("#sesso ").append("--non indicato--");
		$("#sesso2 ").append("NV");
	}
	else
	{
	 $("#sesso ").append(json.profilo[0].sesso);
		$("#sesso2 ").val(json.profilo[0].sesso);
	}

	if(json.profilo[0].telefono==null)
	{
	  $("#telefono ").append("--non indicato--");
		$("#telefono2 ").val("NV");
	}
	else
	{
	 $("#telefono ").append(json.profilo[0].telefono);
		$("#telefono2 ").val(json.profilo[0].telefono);
	}

	if(json.profilo[0].nazionalita==null)
	{
	  $("#nazionalita ").append("--non indicato--");
		$("#nazionalita2 ").append("NV");
	}
	else
	{
	 $("#nazionalita ").append(json.profilo[0].nazionalita);
		$("#nazionalita2 ").val(json.profilo[0].nazionalita);
	}

	if(json.profilo[0].stato_civile==null)
	{
	  $("#statocivile ").append("--non indicato--");
    	$("#statocivile2").val ("NV");
	}
	else
	{
	 $("#statocivile ").append(json.profilo[0].stato_civile);
		$("#statocivile2 ").val(json.profilo[0].stato_civile);
	}

	if(json.profilo[0].data_di_matrimonio==null)
	{
	   $("#matrimonio ").append("--non indicato--");
		$("#matrimonio2 ").val("NV");
	}
	else
	{
	  $("#matrimonio ").append(json.profilo[0].data_di_matrimonio);
		$("#matrimonio2 ").val(json.profilo[0].data_di_matrimonio);
	}

	if(json.profilo[0].nome_coniuge==null)
	{
	   $("#nome-coniuge ").append("--non indicato--");
		$("#nome-coniuge2 ").val("NV");
	}
	else
	{
	  $("#nome-coniuge ").append(json.profilo[0].nome_coniuge);
		$("#nome-coniuge2 ").val(json.profilo[0].nome_coniuge);
	}


       if(json.profilo[0].cognome_coniuge==null)
       {
          $("#cognome-coniuge ").append("--non indicato--");
	       $("#cognome-coniuge2 ").val("NV");
       }
       else
       {
	   $("#cognome-coniuge ").append(json.profilo[0].cognome_coniuge);
	       $("#cognome-coniuge2 ").val(json.profilo[0].cognome_coniuge);
       }

       if(json.profilo[0].numero_figli==null)
       {
           $("#numero-figli ").append("--non indicato--");
	       $("#numero-figli2 ").val("NV");
       }
       else
       {
	        $("#numero-figli ").append(json.profilo[0].numero_figli);
	       $("#numero-figli2 ").val(json.profilo[0].numero_figli);
       }


       if(json.mex.figli=="trovato")
       {

	       var k,conta;
       for(var i=0;i<json.figli.length;i++)
       {
          k = i+1;
	  conta++;
	  $("#nfiglio"+k).show();
          $("#cfiglio"+k).show();

	  if(json.figli[i].nome_figlio==null)
          {
           $("#nome-figlio-"+k).append("--non indicato--");
	       $("#nome-figlio-"+k+"2").val("NV");
          }
          else
          {
	       $("#nome-figlio-"+k).append(json.figli[i].nome_figlio);
	       $("#nome-figlio-"+k+"2").val(json.figli[i].nome_figlio);
           }

	    if(json.figli[i].cognome_figlio==null)
          {
           $("#cognome-figlio-"+k).append("--non indicato--");
	       $("#cognome-figlio-"+k+"2").val("NV");
          }
          else
          {
	       $("#cognome-figlio-"+k).append(json.figli[i].cognome_figlio);
	       $("#cognome-figlio-"+k+"2").val(json.figli[i].cognome_figlio);
           }
       }
	//uscita da for, si controlla quanti sono stati valorizzati
	  var h=0;
	       for(var m=conta;m<5;m++)
	  {
		 h=m+1;
		  //si riempono con nv(non valorizzati) quelli che non hanno dati inseriti dalla secretaria
	  	$("#nome-figlio-"+h+"2").val("NV");
		  $("#cognome-figlio-"+h+"2").val("NV");
	  }

     }
	      else
	      {
	      	for(var m=1;m<6;m++)
		  {
			  //si riempono con nv(non valorizzati) quelli che non hanno dati inseriti dalla secretaria
			$("#nome-figlio-"+m+"2").val("NV");
			  $("#cognome-figlio-"+m+"2").val("NV");
		  }

	      }

	if(json.profilo[0].nome_padre==null)
	{
	   $("#nome-padre ").append("--non indicato--");
		$("#nome-padre2 ").val("NV");
	}
	else
	{
	   $("#nome-padre ").append(json.profilo[0].nome_padre);
		$("#nome-padre2 ").val(json.profilo[0].nome_padre);
	}

     	if(json.profilo[0].nome_madre==null)
	{
	   $("#nome-madre ").append("--non indicato--");
		$("#nome-madre2 ").val("NV");
	}
	else
	{
	   $("#nome-madre ").append(json.profilo[0].nome_madre);
		$("#nome-madre2 ").val(json.profilo[0].nome_madre);
	}

       if(json.profilo[0].data_di_battesimo==null)
	{
	   $("#data-battesimo ").append("--non indicato--");
		$("#data-battesimo2 ").val("NV");
	}
	else
	{
	   $("#data-battesimo ").append(json.profilo[0].data_di_battesimo);
		$("#data-battesimo2 ").val(json.profilo[0].data_di_battesimo);
	}

	if(json.profilo[0].luogo_battesimo==null)
	{
	   $("#luogo-battesimo ").append("--non indicato--");
		$("#luogo-battesimo2 ").val("NV");
	}
	else
	{
	   $("#luogo-battesimo ").append(json.profilo[0].luogo_battesimo);
		$("#luogo-battesimo2 ").val(json.profilo[0].luogo_battesimo);
	}

	if(json.profilo[0].data_arrivo==null)
	{
	   $("#data-arrivo ").append("--non indicato--");
		 $("#data-arrivo2 ").val("NV");
	}
	else
	{
	   $("#data-arrivo ").append(json.profilo[0].data_arrivo);
		$("#data-arrivo2").val(json.profilo[0].data_arrivo);
	}

        if(json.profilo[0].battezzato_con_spirito_santo==null)
	{
	   $("#battezzato-spirito").append("--non indicato--");
		$("#battezzato-spirito2").val("NV");
	}
	else
	{
 	   if(json.profilo[0].battezzato_con_spirito_santo=='S')
	   {
		$("#battezzato-spirito ").append("Si");
		$("#battezzato-spirito2").val("S");
	   }
	   else {
	   	$("#battezzato-spirito ").append("No");
		$("#battezzato-spirito2").val("N");
	   }

	}

	if(json.profilo[0].numero_tessera==null)
	{
	   $("#numero-tessera ").append("--non indicato--");
		$("#numero-tessera2 ").val("NV");
	}
	else
	{
	   $("#numero-tessera ").append(json.profilo[0].numero_tessera);
		$("#numero-tessera2 ").val(json.profilo[0].numero_tessera);
	}

       	if(json.profilo[0].carico_in_chiesa==null)
	{
	   $("#carico ").append("--non indicato--");
		$("#carico2 ").val("NV");
	}
	else
	{
	    $("#carico ").append(json.profilo[0].carico_in_chiesa);
		$("#carico2 ").val(json.profilo[0].carico_in_chiesa);
	}


	if(json.profilo[0].osservazioni==null)
	{
	  $("#osservazioni ").append("--non indicato--");
		$("#osservazioni2 ").val("NV");
	}
	else
	{
	    $("#osservazioni ").append(json.profilo[0].osservazioni);
		$("#osservazioni2").val(json.profilo[0].osservazioni);
	}

	if(json.consacrato[0].data_diacono==null && json.consacrato[0].luogo_diacono==null)
	{
 	  $("#datadiacono , #luogodiacono").hide();
		$("#data-diacono2 , #luogo-diacono2").val("NV");
	}
	else
	{
		if(json.consacrato[0].data_diacono==null)
		{
			$("#data-diacono").append("--non indicato--");
			$("#data-diacono2").val("NV");
		}
		else
		{
			//da gestire le date, nella parte hidden e visualizzata
			$("#data-diacono ").append(json.consacrato[0].data_diacono);
			$("#data-diacono2 ").val(json.consacrato[0].data_diacono);
		}
		if(json.consacrato[0].luogo_diacono==null)
		{
			$("#luogo-diacono").append("--non indicato--");
			$("#luogo-diacono2").val("NV");
		}
		else
		{
			//da gestire le date, nella parte hidden e visualizzata
			$("#luogo-diacono ").append(json.consacrato[0].luogo_diacono);
			$("#luogo-diacono2").val(json.consacrato[0].luogo_diacono);
		}
	}

	if(json.consacrato[0].data_presbitero==null && json.consacrato[0].luogo_presbitero==null)
	{
 	  $("#datapresbitero , #luogopresbitero").hide();
		$("#data-presbitero2 ,#luogo-presbitero2 ").val("NV");
	}
	else
	{
		if(json.consacrato[0].data_presbitero==null)
		{
			$("#data-presbitero").append("--non indicato--");
			$("#data-presbitero2").val("NV");
		}
		else
		{
			//da gestire le date, nella parte hidden e visualizzata
			$("#data-presbitero ").append(json.consacrato[0].data_presbitero);
			$("#data-presbitero2 ").val(json.consacrato[0].data_presbitero);
		}
		if(json.consacrato[0].luogo_presbitero==null)
		{
			$("#luogo-presbitero").append("--non indicato--");
			$("#luogo-presbitero2").val("NV");
		}
		else
		{
			//da gestire le date, nella parte hidden e visualizzata
			$("#luogo-presbitero ").append(json.consacrato[0].luogo_presbitero);
			$("#luogo-presbitero2 ").val(json.consacrato[0].luogo_presbitero);
		}
	}

	if(json.consacrato[0].data_evangelista==null && json.consacrato[0].luogo_evangelista==null)
	{
 	  $("#dataevangelista , #luogoevangelista").hide();
		$("#data-evangelista2 , #luogo-evangelista2").val("NV");
	}
	else
	{
		if(json.consacrato[0].data_evangelista==null)
		{
			$("#data-evangelista").append("--non indicato--");
			$("#data-evangelista2").val("NV");
		}
		else
		{
			//da gestire le date, nella parte hidden e visualizzata
			$("#data-evangelista ").append(json.consacrato[0].data_evangelista);
			$("#data-evangelista2 ").val(json.consacrato[0].data_evangelista);
		}
		if(json.consacrato[0].luogo_evangelista==null)
		{
			$("#luogo-evangelista").append("--non indicato--");
			$("#luogo-evangelista2").append("NV");
		}
		else
		{
			//da gestire le date, nella parte hidden e visualizzata
			$("#luogo-evangelista ").append(json.consacrato[0].luogo_evangelista);
			$("#luogo-evangelista2 ").val(json.consacrato[0].luogo_evangelista);
		}
	}

	if(json.consacrato[0].data_pastore==null && json.consacrato[0].luogo_pastore==null)
	{
 	  $("#datapastore , #luogopastore").hide();
		$("#data-pastore2 , #luogo-pastore2").val("NV");
	}
	else
	{
		if(json.consacrato[0].data_pastore==null)
		{
			$("#data-pastore").append("--non indicato--");
			$("#data-pastore2").val("NV");
		}
		else
		{
			//da gestire le date, nella parte hidden e visualizzata
			$("#data-pastore ").append(json.consacrato[0].data_pastore);
			$("#data-pastore2 ").val(json.consacrato[0].data_pastore);
		}
		if(json.consacrato[0].luogo_pastore==null)
		{
			$("#luogo-pastore").append("--non indicato--");
			$("#luogo-pastore2").val("NV");
		}
		else
		{
			//da gestire le date, nella parte hidden e visualizzata
			$("#luogo-pastore ").append(json.consacrato[0].luogo_pastore);
			$("#luogo-pastore2 ").val(json.consacrato[0].luogo_pastore);
		}
	}
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
function prepara_congregato()
        {
         $('#numero-tessera').parent().hide();
          $('#carico').parent().hide();
          $('#data-battesimo').parent().hide();
          $('#luogo-battesimo').parent().hide();
        }
        function prepara_bambino()
        {
          $("#statocivile").parent().hide();
          $("#matrimonio").parent().hide();
          $("#nome-coniuge").parent().hide();
          $("#cognome-coniuge").parent().hide();
          $('#numero').parent().hide();
          $('#nome-figlio-1').parent().hide();
          $('#cognome-figlio-1').parent().hide();
          $('#nome-figlio-2').parent().hide();
          $('#cognome-figlio-2').parent().hide();
          $('#nome-figlio-3').parent().hide();
          $('#cognome-figlio-3').parent().hide();
          $('#nome-figlio-4').parent().hide();
          $('#cognome-figlio-4').parent().hide();
          $('#nome-figlio-5').parent().hide();
          $('#cognome-figlio-5').parent().hide();
          $("#data-battesimo").parent().hide();
          $('#luogo-battesimo').parent().hide();
          $('#data-arrivo').parent().hide();
          $('#battezzato-spirito').parent().hide();
          //$('#settore').parent().hide();
          $("#numero-tessera").parent().hide();
          $("#carico").parent().hide();
          $("#osservazioni").parent().hide();
        }
        function prepara_nuovo_membro()
        {

          $('#membro').show();
          $("#statocivile").parent().show();
          $("#matrimonio").parent().show();
          $("#nome-coniuge").parent().show();
          $("#cognome-coniuge").parent().show();
          $('#numero').parent().show();
          $('#nome-figlio-1').parent().show();
          $('#cognome-figlio-1').parent().show();
          $('#nome-figlio-2').parent().show();
          $('#cognome-figlio-2').parent().show();
          $('#nome-figlio-3').parent().show();
          $('#cognome-figlio-3').parent().show();
          $('#nome-figlio-4').parent().show();
          $('#cognome-figlio-4').parent().show();
          $('#nome-figlio-5').parent().show();
          $('#cognome-figlio-5').parent().show();
          $("#data-battesimo").parent().show();
          $('#luogo-battesimo').parent().show();
          $('#data-arrivo').parent().show();
          $('#battezzato-spirito').parent().show();
          $('#settore').parent().show();
          $("#numero-tessera").parent().show();
          $("#carico").parent().show();
          $("#osservazioni").parent().show();
        }
