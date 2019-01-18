$(document).ready(function(){
  $("#disattiva, #attiva").hide();
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
   $("#attivo2").val(json.profilo[0].attivo);
   if(json.profilo[0].attivo=="S")
   {
     $("#disattiva").show();
   }
   else {
     $("#attiva").show();
     $("#mexatt").append("NON ATTIVO");
   }
    $("#id2").val(json.profilo[0].id);
   $("#tipo").append(json.profilo[0].tipo_persona);
   $("#tipo2").val(json.profilo[0].tipo_persona);
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
	   $("#indirizzo ").append(json.profilo[0].indirizzo);
		$("#indirizzo2 ").val(json.profilo[0].indirizzo);
	}

       if(json.profilo[0].citta==null)
	{
	   $("#citta ").append("--non indicato--");

	}
	else
	{
	   $("#citta ").append(json.profilo[0].citta);
		 $("#citta2 ").val(json.profilo[0].citta);
	}

       if(json.profilo[0].cap==null)
	{
	   $("#cap ").append("--non indicato--");

	}
	else
	{
	  $("#cap ").append(json.profilo[0].cap);
		$("#cap2 ").val(json.profilo[0].cap);
	}

	 if(json.profilo[0].data_di_nascita==null)
	{
	   $("#nascita ").append("--non indicato--");

	}
	else
	{
	  $("#nascita ").append(json.profilo[0].data_di_nascita);
		$("#nascita2 ").val(json.profilo[0].data_di_nascita);
	}

	if(json.profilo[0].sesso==null)
	{
	  $("#sesso ").append("--non indicato--");

	}
	else
	{
	 $("#sesso ").append(json.profilo[0].sesso);
		$("#sesso2 ").val(json.profilo[0].sesso);
	}

	if(json.profilo[0].telefono==null)
	{
	  $("#telefono ").append("--non indicato--");

	}
	else
	{
	 $("#telefono ").append(json.profilo[0].telefono);
		$("#telefono2 ").val(json.profilo[0].telefono);
	}

	if(json.profilo[0].nazionalita==null)
	{
	  $("#nazionalita ").append("--non indicato--");

	}
	else
	{
	 $("#nazionalita ").append(json.profilo[0].nazionalita);
		$("#nazionalita2 ").val(json.profilo[0].nazionalita);
	}

	if(json.profilo[0].stato_civile==null)
	{
	  $("#statocivile ").append("--non indicato--");

	}
	else
	{
	 $("#statocivile ").append(json.profilo[0].stato_civile);
		$("#statocivile2 ").val(json.profilo[0].stato_civile);
	}

	if(json.profilo[0].data_di_matrimonio==null)
	{
	   $("#matrimonio ").append("--non indicato--");

	}
	else
	{
	  $("#matrimonio ").append(json.profilo[0].data_di_matrimonio);
		$("#matrimonio2 ").val(json.profilo[0].data_di_matrimonio);
	}

	if(json.profilo[0].nome_coniuge==null)
	{
	   $("#nome-coniuge ").append("--non indicato--");

	}
	else
	{
	  $("#nome-coniuge ").append(json.profilo[0].nome_coniuge);
		$("#nome-coniuge2 ").val(json.profilo[0].nome_coniuge);
	}


       if(json.profilo[0].cognome_coniuge==null)
       {
          $("#cognome-coniuge ").append("--non indicato--");

       }
       else
       {
	   $("#cognome-coniuge ").append(json.profilo[0].cognome_coniuge);
	       $("#cognome-coniuge2 ").val(json.profilo[0].cognome_coniuge);
       }

       if(json.profilo[0].numero_figli==null)
       {
           $("#numero-figli ").append("--non indicato--");

       }
       else
       {
	        $("#numero-figli ").append(json.profilo[0].numero_figli);
	       $("#numero-figli2 ").val(json.profilo[0].numero_figli);
       }


       if(json.mex=="trovato")
       {
      	  if(json.figli[0].nome_figlio_1==null)
          {
           $("#nome-figlio-1").append("--non indicato--");

          }
          else
          {
            $("#nfiglio1").show();
            $("#cfiglio1").show();
	       $("#nome-figlio-1").append(json.figli[0].nome_figlio_1);
	       $("#nome-figlio-12").val(json.figli[0].nome_figlio_1);
           }

	    if(json.figli[0].cognome_figlio_1==null)
          {
           $("#cognome-figlio-1").append("--non indicato--");

          }
          else
          {
	       $("#cognome-figlio-1").append(json.figli[0].cognome_figlio_1);
	       $("#cognome-figlio-12").val(json.figli[0].cognome_figlio_1);
           }

           if(json.figli[0].nome_figlio_2==null)
           {
            $("#nome-figlio-2").append("--non indicato--");

           }
           else
           {
             $("#nfiglio2").show();
             $("#cfiglio2").show();
 	       $("#nome-figlio-2").append(json.figli[0].nome_figlio_2);
 	       $("#nome-figlio-22").val(json.figli[0].nome_figlio_2);
            }

 	    if(json.figli[0].cognome_figlio_2==null)
           {
            $("#cognome-figlio-2").append("--non indicato--");

           }
           else
           {
 	       $("#cognome-figlio-2").append(json.figli[0].cognome_figlio_2);
 	       $("#cognome-figlio-22").val(json.figli[0].cognome_figlio_2);
            }

            if(json.figli[0].nome_figlio_3==null)
            {
             $("#nome-figlio-3").append("--non indicato--");

            }
            else
            {
              $("#nfiglio3").show();
              $("#cfiglio3").show();
  	       $("#nome-figlio-3").append(json.figli[0].nome_figlio_3);
  	       $("#nome-figlio-32").val(json.figli[0].nome_figlio_3);
             }

  	    if(json.figli[0].cognome_figlio_3==null)
            {
             $("#cognome-figlio-3").append("--non indicato--");

            }
            else
            {
  	       $("#cognome-figlio-3").append(json.figli[0].cognome_figlio_3);
  	       $("#cognome-figlio-32").val(json.figli[0].cognome_figlio_3);
             }

             if(json.figli[0].nome_figlio_4==null)
             {
              $("#nome-figlio-4").append("--non indicato--");

             }
             else
             {
               $("#nfiglio4").show();
               $("#cfiglio4").show();
   	       $("#nome-figlio-4").append(json.figli[0].nome_figlio_4);
   	       $("#nome-figlio-42").val(json.figli[0].nome_figlio_4);
              }

   	    if(json.figli[0].cognome_figlio_4==null)
             {
              $("#cognome-figlio-4").append("--non indicato--");

             }
             else
             {
   	       $("#cognome-figlio-4").append(json.figli[0].cognome_figlio_4);
   	       $("#cognome-figlio-42").val(json.figli[0].cognome_figlio_4);
              }

              if(json.figli[0].nome_figlio_5==null)
              {
               $("#nome-figlio-5").append("--non indicato--");

              }
              else
              {
                $("#nfiglio5").show();
                $("#cfiglio5").show();
    	       $("#nome-figlio-5").append(json.figli[0].nome_figlio_5);
    	       $("#nome-figlio-52").val(json.figli[0].nome_figlio_5);
               }

    	    if(json.figli[0].cognome_figlio_5==null)
              {
               $("#cognome-figlio-5").append("--non indicato--");

              }
              else
              {
    	       $("#cognome-figlio-5").append(json.figli[0].cognome_figlio_5);
    	       $("#cognome-figlio-52").val(json.figli[0].cognome_figlio_5);
               }



   }


	if(json.profilo[0].nome_padre==null)
	{
	   $("#nome-padre ").append("--non indicato--");

	}
	else
	{
	   $("#nome-padre ").append(json.profilo[0].nome_padre);
		$("#nome-padre2 ").val(json.profilo[0].nome_padre);
	}

     	if(json.profilo[0].nome_madre==null)
	{
	   $("#nome-madre ").append("--non indicato--");

	}
	else
	{
	   $("#nome-madre ").append(json.profilo[0].nome_madre);
		$("#nome-madre2 ").val(json.profilo[0].nome_madre);
	}

       if(json.profilo[0].data_di_battesimo==null)
	{
	   $("#data-battesimo ").append("--non indicato--");

	}
	else
	{
	   $("#data-battesimo ").append(json.profilo[0].data_di_battesimo);
		$("#data-battesimo2 ").val(json.profilo[0].data_di_battesimo);
	}

	if(json.profilo[0].luogo_battesimo==null)
	{
	   $("#luogo-battesimo ").append("--non indicato--");

	}
	else
	{
	   $("#luogo-battesimo ").append(json.profilo[0].luogo_battesimo);
		$("#luogo-battesimo2 ").val(json.profilo[0].luogo_battesimo);
	}

	if(json.profilo[0].data_arrivo==null)
	{
	   $("#data-arrivo ").append("--non indicato--");

	}
	else
	{
	   $("#data-arrivo ").append(json.profilo[0].data_arrivo);
		$("#data-arrivo2").val(json.profilo[0].data_arrivo);
	}

  if(json.profilo[0].congregazione==null)
  {
     $("#congregazione ").append("--non indicato--");

  }
  else
  {
     $("#congregazione ").append(json.profilo[0].congregazione);
    $("#congregazione2 ").val(json.profilo[0].congregazione);
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

	}
	else
	{
	   $("#numero-tessera ").append(json.profilo[0].numero_tessera);
		$("#numero-tessera2 ").val(json.profilo[0].numero_tessera);
	}

       	if(json.profilo[0].carico_in_chiesa==null)
	{
	   $("#carico ").append("--non indicato--");

	}
	else
	{
	    $("#carico ").append(json.profilo[0].carico_in_chiesa);
		$("#carico2 ").val(json.profilo[0].carico_in_chiesa);
	}


	if(json.profilo[0].osservazioni==null)
	{
	  $("#osservazioni ").append("--non indicato--");

	}
	else
	{
	    $("#osservazioni ").append(json.profilo[0].osservazioni);
		$("#osservazioni2").val(json.profilo[0].osservazioni);
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
			$("#data-diacono ").append(json.consacrato[0].data_diacono);
			$("#data-diacono2 ").val(json.consacrato[0].data_diacono);
		}
		if(json.consacrato[0].luogo_diacono==null)
		{
			$("#luogo-diacono").append("--non indicato--");

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
			$("#data-presbitero ").append(json.consacrato[0].data_presbitero);
			$("#data-presbitero2 ").val(json.consacrato[0].data_presbitero);
		}
		if(json.consacrato[0].luogo_presbitero==null)
		{
			$("#luogo-presbitero").append("--non indicato--");

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
			$("#data-evangelista ").append(json.consacrato[0].data_evangelista);
			$("#data-evangelista2 ").val(json.consacrato[0].data_evangelista);
		}
		if(json.consacrato[0].luogo_evangelista==null)
		{
			$("#luogo-evangelista").append("--non indicato--");

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
			$("#data-pastore ").append(json.consacrato[0].data_pastore);
			$("#data-pastore2 ").val(json.consacrato[0].data_pastore);
		}
		if(json.consacrato[0].luogo_pastore==null)
		{
			$("#luogo-pastore").append("--non indicato--");

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
