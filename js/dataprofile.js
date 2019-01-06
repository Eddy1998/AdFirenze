$(document).ready(function(){
   if(($('#id').length))
    {
      var id=$('#id').val();
	    //se non funziona, il link è senza i due punti
        console.log(id);

      $.post("data/dati.php",{'ONE': 1, 'ssid' : id }, function(response) {
        var json = JSON.parse(response);
        console.log('cccc');
          console.log(json);
         /*
	 var image = new Image();
image.src = 'data:image/png;base64,iVBORw0K...';
document.body.appendChild(image);*/
	      //vengono valorizzati id dati e controlli per mostrare quta di form ( n figli, consacrato nome figli)
    /*   $("#attivo2 ,#attivo ").append();
       $("#tipo2 ,#tipo ").append();*/
       $("#nome2 ,#nome").append(json.profilo[0].nome);
       $("#cognome2 ,#cognome ").append(json.profilo[0].cognome);
       $("#indirizzo2 ,#indirizzo ").append(json.profilo[0].indirizzo);
       $("#citta2 ,#citta ").append(json.profilo[0].citta);
       $("#cap2 ,#cap ").append(json.profilo[0].cap);
       $("#nascita2 ,#nascita ").append(json.profilo[0].data_di_nascita);
       $("#sesso2 ,#sesso ").append(json.profilo[0].sesso);
       $("#telefono2 ,#telefono ").append(json.profilo[0].telefono);
       $("#nazionalita2 ,#nazionalita ").append(json.profilo[0].nazionalita);
       $("#statocivile2 ,#statocivile ").append(json.profilo[0].stato_civile);
       $("#matrimonio2 ,#matrimonio ").append(json.profilo[0].data_di_matrimonio);
       $("#nome-coniuge2 ,#nome-coniuge ").append(json.profilo[0].nome_coniuge);
       if(json.profilo[0].cognome_coniuge==null)
       {
         alert('vuotoooo');
       }
       $("#cognome-coniuge2 ,#cognome-coniuge ").append(json.profilo[0].cognome_coniuge);
       $("#numero-figli2 ,#numero-figli ").append(json.profilo[0].numero_figli);

       for(var i=0;i<json.figli.length;i++)
       {
         var k = i+1;
          $("#nome-figlio-"+k+"2 ,#nome-figlio-"+k).append(json.figli[i].nome_figlio);
          $("#cognome-figlio-"+k+"2 ,#cognome-figlio-"+k).append(json.figli[i].cognome_figlio);
       }

       $("#nome-padre2 ,#nome-padre ").append(json.profilo[0].nome_padre);
       $("#nome-madre2 ,#nome-madre ").append(json.profilo[0].nome_madre);
       $("#data-battesimo2 ,#data-battesimo ").append(json.profilo[0].data_di_battesimo);
       $("#luogo-battesimo2 ,#luogo-battesimo ").append(json.profilo[0].luogo_battesimo);
       $("#data-arrivo2 ,#data-arrivo ").append(json.profilo[0].data_arrivo);
       $("#battezzato-spirito2 ,#battezzato-spirito ").append(json.profilo[0].battezzato_con_spirito_santo);
       $("#numero-tessera2 ,#numero-tessera ").append(json.profilo[0].numero_tessera);
       $("#carico2 ,#carico ").append(json.profilo[0].carico_in_chiesa);
       /*$("#data-diacono2 ,#data-diacono ").append();
       $("#luogo-diacono2 ,#luogo-diacono ").append();
       $("#data-presbitero2 ,#data-presbitero ").append();
       $("#luogo-presbitero2 ,#luogo-presbitero ").append();
       $("#data-evangelista2 ,#data-evangelista ").append();
       $("#luogo-evangelista2 ,#luogo-evangelista ").append();
       $("#data-pastore2 ,#data-pastore ").append();
       $("#luogo-pastore2 ,#luogo-pastore ").append();*/
       $("#osservazioni2 ,#osservazioni ").append(json.profilo[0].osservazioni);


      });
    }
    else
    {
      alert("id persona non specificato : ERROR");
    }






	});
