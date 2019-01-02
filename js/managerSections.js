$(document).ready(function(){
  $.ajax({
  url: 'data/dati.php',
  type: 'POST',
  data: {
    'CONTA' : 1,
  },
  success: function(response){
    data = JSON.parse(response);
   var totale = data.total;
   var attivi_m = data.attivo_m;
   var non_attivi_m = data.non_attivo_m;
   var attivi_c=data.attivo_c;
   var non_attivi_c=data.non_attivo_c;
   var bambino = data.bambino;
   console.log(data.non_attivo_m);

   $("#gocon").click(function() {
      window.location="congregati?ca="+attivi_c+"&cn="+non_attivi_c;
       });

   $("#go-to-secretaria").click(function() {
       window.location="secretaria?m="+attivi_m+"&c="+attivi_c+"&b="+bambino;
       });

   $("#g-t-secretaria").click(function() {
       window.location="secretaria?m="+attivi_m+"&c="+attivi_c+"&b="+bambino;
       });

    $("#gobam").click(function() {
           window.location="bambini?b="+bambino;
       });

  }
  });
});
