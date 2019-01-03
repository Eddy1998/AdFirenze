$(document).ready(function(){
      if(($('#ssid').length))
      {
         $.post( "data/dati.php",{'ONE': 1 }, function(response) {
          /*
           var p=" <form action='prenota-viaggio' method='POST'><div class='col-sm-4' style='float:center;'>";
                         var s=" <div class='table-right wow fadeInUp' data-wow-delay='0.4s'><div class='pricing-details'>";
                            var data="<h2>Data :</h2> <span >"+response[i].dataviaggio+"</span><br>";
                             var viaggio=" <span >"+response[i].partenza+" - "+response[i].oPartenza+"</span><br> <span >"+response[i].arrivo+" - "+response[i].oArrivo+"</span>";
                              var aut=" <h2>Dati Conducente :</h2> <span >"+response[i].nome+", "+nascita+" anni</span><br>";
                             var prex="<span >Prezzo: "+response[i].importo+"€</span><br> <span>"+posti+"</span><br> <button class='btn btn-primary btn-action btn-fill prenotazione' type='submit'>Prenota</button>";
          var las="</div> </div></div><input type='hidden' name='idviaggio' value='"+response[i].idViaggio+"'> 
          */
         
         
        },"json");
      
      
      }
      
      

});
