$(document).ready(function(){
   if(($('#ssid').length))
    {
      var partenzaP=$('#ssid').val();
	    //se non funziona, il link è senza i due punti
      $.post( "../data/dataprofile.php", function(response ) {
         /*
	 var image = new Image();
image.src = 'data:image/png;base64,iVBORw0K...';
document.body.appendChild(image);*/
	      //vengono valorizzati id dati e controlli per mostrare quta di form ( n figli, consacrato nome figli)
       $("#attivo2 ,#attivo ").append();
       $("#tipo2 ,#tipo ").append();
       $("#nome2 ,#nome").append();
       $("#cognome2 ,#cognome ").append();
       $("#indirizzo2 ,#indirizzo ").append();
       $("#citta2 ,#citta ").append();
       $("#cap2 ,#cap ").append();
       $("#nascita2 ,#nascita ").append();
       $("#sesso2 ,#sesso ").append();
       $("#telefono2 ,#telefono ").append();
       $("#nazionalita2 ,#nazionalita ").append();
       $("#statocivile2 ,#statocivile ").append();
       $("#matrimonio2 ,#matrimonio ").append();
       $("#nome-coniuge2 ,#nome-coniuge ").append();
       $("#cognome-coniuge2 ,#cognome-coniuge ").append();
       $("#numero-figli2 ,#numero-figli ").append();
       $("#nome-figlio-12 ,#nome-figlio-1 ").append();
       $("#cognome-figlio-12 ,#cognome-figlio-1 ").append();
       $("#nome-figlio-22 ,#nome-figlio-2 ").append();
       $("#cognome-figlio-22 ,#cognome-figlio-2 ").append();
       $("#nome-figlio-32 ,#nome-figlio-3 ").append();
       $("#cognome-figlio-32 ,#cognome-figlio-3 ").append();
       $("#nome-figlio-42 ,#nome-figlio-4 ").append();
       $("#cognome-figlio-42 ,#cognome-figlio-4 ").append();
       $("#nome-figlio-52 ,#nome-figlio-5 ").append();
       $("#cognome-figlio-52 ,#cognome-figlio-5 ").append();
       $("#nome-padre2 ,#nome-padre ").append();
       $("#nome-madre2 ,#nome-madre ").append();
       $("#data-battesimo2 ,#data-battesimo ").append();
       $("#luogo-battesimo2 ,#luogo-battesimo ").append();
       $("#data-arrivo2 ,#data-arrivo ").append();
       $("#battezzato-spirito2 ,#battezzato-spirito ").append();
       $("#numero-tessera2 ,#numero-tessera ").append();
       $("#carico2 ,#carico ").append();
       $("#data-diacono2 ,#data-diacono ").append();
       $("#luogo-diacono2 ,#luogo-diacono ").append();
       $("#data-presbitero2 ,#data-presbitero ").append();
       $("#luogo-presbitero2 ,#luogo-presbitero ").append();
       $("#data-evangelista2 ,#data-evangelista ").append();
       $("#luogo-evangelista2 ,#luogo-evangelista ").append();
       $("#data-pastore2 ,#data-pastore ").append();
       $("#luogo-pastore2 ,#luogo-pastore ").append();
       $("#osservazioni2 ,#osservazioni ").append();


      },"json");
    }
    else 
    {
      alert("id persona non specificato : ERROR");
    }
	

          
			  
			
		 
	});		
