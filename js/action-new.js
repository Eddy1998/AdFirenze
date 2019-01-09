

      function opciones()
      {
        var valore = $("#nome-coniuge").val();
        if(!valore==' ' ||!valore==null)
        {
            console.log(valore);
            $.ajax({
            url: 'dati.php',
            type: 'POST',
            data: {
              'NAMES' : 1,
              'valore': valore,
            },
            success: function(response){
                var data = JSON.parse(response);
                //console.log(data);
                var indice = data.names.length;
                $('#nomecon option').remove();
                for(var i=0;i<indice;i++)
                {

                  var valori = data.names[i].nome + '  '+ data.names[i].cognome;

                  $("#nomecon").append($("<option>").attr('value', valori).text(valori));
                }
            }
            });
          }
      }
      function opciones1()
      {
        var valore = $('#nome-figlio-1').val();
        if(!valore==' ' ||!valore==null)
        {
            console.log(valore);
            $.ajax({
            url: 'dati.php',
            type: 'POST',
            data: {
              'NAMES' : 1,
              'valore': valore,
            },
            success: function(response){
                var data = JSON.parse(response);
                //console.log(data);
                var indice = data.names.length;
                $('#nomefi1 option').remove();
                for(var i=0;i<indice;i++)
                {

                  var valori = data.names[i].nome + '  '+ data.names[i].cognome;

                  $("#nomefi1").append($("<option>").attr('value', valori).text(valori));
                }
            }
            });
          }
      }

      function rellena()
      {
        var val = document.getElementById("nome-coniuge").value;
        var opts = document.getElementById('nomecon').childNodes;
        for (var i = 0; i < opts.length; i++) {
          if (opts[i].value === val) {
            // An item was selected from the list!
            // yourCallbackHere()
            var salto = opts[i].value.split("  ");
            $("#nome-coniuge").val(salto[0]);
            $("#cognome-coniuge").val(salto[1]);
            $(':focus').blur()
            break;
          }
        }
      }

      function rellena1()
      {
        var val = document.getElementById("nome-figlio-1").value;
        var opts = document.getElementById('nomefi1').childNodes;
        for (var i = 0; i < opts.length; i++) {
          if (opts[i].value === val) {
            // An item was selected from the list!
            // yourCallbackHere()
            var salto = opts[i].value.split("  ");
            $("#nome-figlio-1").val(salto[0]);
            $("#cognome-figlio-1").val(salto[1]);
            $(':focus').blur()
            break;
          }
        }
      }
      function opciones2()
      {
        var valore = $('#nome-figlio-2').val();
        if(!valore==' ' ||!valore==null)
        {
            console.log(valore);
            $.ajax({
            url: 'dati.php',
            type: 'POST',
            data: {
              'NAMES' : 1,
              'valore': valore,
            },
            success: function(response){
                var data = JSON.parse(response);
                //console.log(data);
                var indice = data.names.length;
                $('#nomefi2 option').remove();
                for(var i=0;i<indice;i++)
                {

                  var valori = data.names[i].nome + '  '+ data.names[i].cognome;

                  $("#nomefi2").append($("<option>").attr('value', valori).text(valori));
                }
            }
            });
          }
      }
      function rellena2()
      {
        var val = document.getElementById("nome-figlio-2").value;
        var opts = document.getElementById('nomefi2').childNodes;
        for (var i = 0; i < opts.length; i++) {
          if (opts[i].value === val) {
            // An item was selected from the list!
            // yourCallbackHere()
            var salto = opts[i].value.split("  ");
            $("#nome-figlio-2").val(salto[0]);
            $("#cognome-figlio-2").val(salto[1]);
            $(':focus').blur()
            break;
          }
        }
      }

      function opciones3()
      {
        var valore = $('#nome-figlio-3').val();
        if(!valore==' ' ||!valore==null)
        {
            console.log(valore);
            $.ajax({
            url: 'dati.php',
            type: 'POST',
            data: {
              'NAMES' : 1,
              'valore': valore,
            },
            success: function(response){
                var data = JSON.parse(response);
                //console.log(data);
                var indice = data.names.length;
                $('#nomefi3 option').remove();
                for(var i=0;i<indice;i++)
                {

                  var valori = data.names[i].nome + '  '+ data.names[i].cognome;

                  $("#nomefi3").append($("<option>").attr('value', valori).text(valori));
                }
            }
            });
          }
      }
      function rellena3()
      {
        var val = document.getElementById("nome-figlio-3").value;
        var opts = document.getElementById('nomefi3').childNodes;
        for (var i = 0; i < opts.length; i++) {
          if (opts[i].value === val) {
            // An item was selected from the list!
            // yourCallbackHere()
            var salto = opts[i].value.split("  ");
            $("#nome-figlio-3").val(salto[0]);
            $("#cognome-figlio-3").val(salto[1]);
            $(':focus').blur()
            break;
          }
        }
      }

      function opciones4()
      {
        var valore = $('#nome-figlio-4').val();
        if(!valore==' ' ||!valore==null)
        {
            console.log(valore);
            $.ajax({
            url: 'dati.php',
            type: 'POST',
            data: {
              'NAMES' : 1,
              'valore': valore,
            },
            success: function(response){
                var data = JSON.parse(response);
                //console.log(data);
                var indice = data.names.length;
                $('#nomefi4 option').remove();
                for(var i=0;i<indice;i++)
                {

                  var valori = data.names[i].nome + '  '+ data.names[i].cognome;

                  $("#nomefi4").append($("<option>").attr('value', valori).text(valori));
                }
            }
            });
          }
      }
      function rellena4()
      {
        var val = document.getElementById("nome-figlio-4").value;
        var opts = document.getElementById('nomefi4').childNodes;
        for (var i = 0; i < opts.length; i++) {
          if (opts[i].value === val) {
            // An item was selected from the list!
            // yourCallbackHere()
            var salto = opts[i].value.split("  ");
            $("#nome-figlio-4").val(salto[0]);
            $("#cognome-figlio-4").val(salto[1]);
            $(':focus').blur()
            break;
          }
        }
      }

      function opciones5()
      {
        var valore = $('#nome-figlio-5').val();
        if(!valore==' ' ||!valore==null)
        {
            console.log(valore);
            $.ajax({
            url: 'dati.php',
            type: 'POST',
            data: {
              'NAMES' : 1,
              'valore': valore,
            },
            success: function(response){
                var data = JSON.parse(response);
                //console.log(data);
                var indice = data.names.length;
                $('#nomefi5 option').remove();
                for(var i=0;i<indice;i++)
                {

                  var valori = data.names[i].nome + '  '+ data.names[i].cognome;

                  $("#nomefi5").append($("<option>").attr('value', valori).text(valori));
                }
            }
            });
          }
      }
      function rellena5()
      {
        var val = document.getElementById("nome-figlio-5").value;
        var opts = document.getElementById('nomefi5').childNodes;
        for (var i = 0; i < opts.length; i++) {
          if (opts[i].value === val) {
            // An item was selected from the list!
            // yourCallbackHere()
            var salto = opts[i].value.split("  ");
            $("#nome-figlio-5").val(salto[0]);
            $("#cognome-figlio-5").val(salto[1]);
            $(':focus').blur()
            break;
          }
        }
      }


      function opcionespadre()
      {
        var valore = $('#nome-padre').val();
        if(!valore==' ' ||!valore==null)
        {
            console.log(valore);
            $.ajax({
            url: 'dati.php',
            type: 'POST',
            data: {
              'NAMES' : 1,
              'valore': valore,
            },
            success: function(response){
                var data = JSON.parse(response);
                //console.log(data);
                var indice = data.names.length;
                $('#nomepadre option').remove();
                for(var i=0;i<indice;i++)
                {

                  var valori = data.names[i].nome + '  '+ data.names[i].cognome;

                  $("#nomepadre").append($("<option>").attr('value', valori).text(valori));
                }
            }
            });
          }
      }
      function rellenapadre()
      {
        var val = document.getElementById("nome-padre").value;
        var opts = document.getElementById('nomepadre').childNodes;
        for (var i = 0; i < opts.length; i++) {
          if (opts[i].value === val) {
            // An item was selected from the list!
            // yourCallbackHere()
            var salto = opts[i].value.split("  ");
            $("#nome-padre").val(salto[0]+' '+salto[1]);
            //$("#cognome-figlio-5").val(salto[1]);
            $(':focus').blur()
            break;
          }
        }
      }

      function opcionesmadre()
      {
        var valore = $('#nome-madre').val();
        if(!valore==' ' ||!valore==null)
        {
            console.log(valore);
            $.ajax({
            url: 'dati.php',
            type: 'POST',
            data: {
              'NAMES' : 1,
              'valore': valore,
            },
            success: function(response){
                var data = JSON.parse(response);
                //console.log(data);
                var indice = data.names.length;
                $('#nomemadre option').remove();
                for(var i=0;i<indice;i++)
                {

                  var valori = data.names[i].nome + '  '+ data.names[i].cognome;

                  $("#nomemadre").append($("<option>").attr('value', valori).text(valori));
                }
            }
            });
          }
      }
      function rellenamadre()
      {
        var val = document.getElementById("nome-madre").value;
        var opts = document.getElementById('nomemadre').childNodes;
        for (var i = 0; i < opts.length; i++) {
          if (opts[i].value === val) {
            // An item was selected from the list!
            // yourCallbackHere()
            var salto = opts[i].value.split("  ");
            $("#nome-madre").val(salto[0]+' '+salto[1]);
            //$("#cognome-figlio-5").val(salto[1]);
            $(':focus').blur()
            break;
          }
        }
      }



      function nascondi_figli()
      {
        for(var k =1;k<6;k++)
        {
          $("#nfiglio"+k).hide();
          $("#cfiglio"+k).hide();
        }

      }
      function nascondere()
      {
        $('#membro').hide();
      }
      function azzeravalori()
      {
       document.getElementById("nome").value=null;
       document.getElementById("cognome").value=null;
       document.getElementById("indirizzo").value=null;
       document.getElementById("citta").value=null;
       document.getElementById("cap").value="";
       document.getElementById("nascita").value=null;
       document.getElementById("sesso").selectedIndex = 0;
       document.getElementById("telefono").value=null;
       document.getElementById("nazionalita").selectedIndex = 0;
       document.getElementById("statocivile").selectedIndex = 0;
       document.getElementById("matrimonio").value=null;
       document.getElementById("nome-coniuge").value=null;
       document.getElementById("cognome-coniuge").value=null;
       document.getElementById("numero").selectedIndex = 0;
       document.getElementById("nome-figlio-1").value=null;
       document.getElementById("cognome-figlio-1").value=null;
       document.getElementById("nome-figlio-2").value=null;
       document.getElementById("cognome-figlio-2").value=null;
       document.getElementById("nome-figlio-3").value=null;
       document.getElementById("cognome-figlio-3").value=null;
       document.getElementById("nome-figlio-4").value=null;
       document.getElementById("cognome-figlio-4").value=null;
       document.getElementById("nome-figlio-5").value=null;
       document.getElementById("cognome-figlio-5").value=null;
       document.getElementById("nome-padre").value=null;
       document.getElementById("nome-madre").value=null;
       document.getElementById("data-battesimo").value=null;
       document.getElementById("luogo-battesimo").value=null;
       document.getElementById("data-arrivo").value=null;
       document.getElementById("battezzato-spirito").selectedIndex = 0;
       document.getElementById("settore").selectedIndex = 0;
       document.getElementById("numero-tessera").value=null;
       document.getElementById("carico").selectedIndex = 0;
       document.getElementById("osservazioni").value=null;
       nascondi_figli();
      }
      function prepara_congregato()
      {
        $('#membro').show();
        prepara_nuovo_membro();
        document.getElementById("carico").required = false;
        document.getElementById("tipo").value="congregato";
        $('#numero-tessera').parent().hide();
        $('#carico').parent().hide();
        $('#data-battesimo').parent().hide();
        $('#luogo-battesimo').parent().hide();
      }
      function prepara_bambino()
      {
        document.getElementById("carico").required = false;
        document.getElementById("tipo").value="bambino";
        $('#membro').show();
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
        document.getElementById("tipo").value="membro";
        document.getElementById("carico").required = true;
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
      function cambia()
      {
        azzeravalori();
        var op = document.getElementById("opzione");
        var valore = op.options[op.selectedIndex].value;
        if(valore==="M")
        {
          document.getElementById('modulo').innerHTML="MODULO MEMBRO";
          $('#membro').show();
          prepara_nuovo_membro();
        }
        else if(valore==="C")
        {
          document.getElementById('modulo').innerHTML="MODULO CONGREGATO";
          prepara_congregato();
        }
        else if(valore==="B")
        {
          document.getElementById('modulo').innerHTML="MODULO BAMBINO/A";
          prepara_bambino();
        }

      }
      function dissattiva()
      {

        var ele = document.getElementById("statocivile");
        var stato = ele.options[ele.selectedIndex].value;
        if(stato==='Cebile/nubile')
        {
          $("#matrimonio").prop('disabled', true);
          $("#nome-coniuge").prop('disabled', true);
          $("#cognome-coniuge").prop('disabled', true);
        }
        else {
          $("#matrimonio").prop('disabled', false);
          $("#nome-coniuge").prop('disabled', false);
          $("#cognome-coniuge").prop('disabled', false);

        }
      }

     function myFunction() {
       //nsacondo tutti
       var i=0,j=0;
       for(i=1;i<6;i++)
       {
        $("#nfiglio"+i).hide();
        $("#cfiglio"+i).hide();
       }
       var qta=0;
       var e = document.getElementById("numero");
       var numero = e.options[e.selectedIndex].value;
       var number=0;
       switch(numero)
       {
         case '0':
            number=0;
         break;
         case '1':
            number=1;
         break;
         case '2':
            number=2;
         break;
         case '3':
            number=3;
         break;
         case '4':
            number=4;
         break;
         case '5':
            number=5;
         break;
       }
       for (var j=1;j<number+1;j++)
        {
          $("#nfiglio"+j).show();
          $("#cfiglio"+j).show();
        }

     }
     function consacrazione() {

      nascondecons();
      var e = document.getElementById("carico");
      var numero = e.options[e.selectedIndex].value;
      switch(numero)
      {
        case 'Pastore':
             $("#datadiacono").show();
             $("#luogodiacono").show();
             $("#datapresbitero").show();
             $("#luogopresbitero").show();
             $("#dataevangelista").show();
             $("#luogoevangelista").show();
             $("#datapastore").show();
             $("#luogopastore").show();
        break;
        case 'Evangelista':
            $("#datadiacono").show();
             $("#luogodiacono").show();
             $("#datapresbitero").show();
             $("#luogopresbitero").show();
             $("#dataevangelista").show();
             $("#luogoevangelista").show();
        break;
        case 'Presbitero':
            $("#datadiacono").show();
             $("#luogodiacono").show();
             $("#datapresbitero").show();
             $("#luogopresbitero").show();
        break;
        case 'Diacono':
           $("#datadiacono").show();
             $("#luogodiacono").show();
        break;

        case  'Diaconessa':
           $("#datadiacono").show();
             $("#luogodiacono").show();
        break;

      }

    }

    function nascondecons()
      {
           $("#datadiacono").hide();
           $("#luogodiacono").hide();
           $("#datapresbitero").hide();
           $("#luogopresbitero").hide();
           $("#dataevangelista").hide();
           $("#luogoevangelista").hide();
           $("#datapastore").hide();
           $("#luogopastore").hide();
      }


     function hidebutton()
     {

       $('#button-elimina').hide();
       $('#button-modifica').hide();
     }
     function mostrabottoni()
     {
       $('#button-elimina').show();
       $('#button-modifica').show();
     }
