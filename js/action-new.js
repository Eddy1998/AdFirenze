

      function opciones(id,dataid)
      {
        var valore = $("#"+id).val();
        if(!valore==' ' ||!valore==null)
        {
            //console.log(valore);
            $.ajax({
            url: 'data/dati.php',
            type: 'POST',
            data: {
              'NAMES' : 1,
              'valore': valore,
            },
            success: function(response){
                var data = JSON.parse(response);
              if(data.names!="N")
              {

                //console.log(data);
                var indice = data.names.length;
                $('#'+dataid+' option').remove();
                for(var i=0;i<indice;i++)
                {

                  var valori = data.names[i].nome + '  '+ data.names[i].cognome+'  '+data.names[i].id;
                  var testo = data.names[i].nome + '  '+ data.names[i].cognome;

                  $('#'+dataid).append($("<option>").attr('value', valori).text(testo));
                }
              }

            }
            });
          }
      }


    function seleziona(id,value)
    {
      $("#"+id+" option").each(function(){
        if($(this).val()==value){
          $(this).attr("selected","selected");
           }
      });
    }

      function rellena(idinput,idcognome,idlist)
      {
        var val = document.getElementById(idinput).value;
        var opts = document.getElementById(idlist).childNodes;
        for (var i = 0; i < opts.length; i++) {
          if (opts[i].value === val) {
            // An item was selected from the list!
            // yourCallbackHere()
            if(idinput=="nome-padre"||idinput=="nome-madre")
            {
              var salto = opts[i].value.split("  ");
              var ident = salto[2];
              $("#"+idinput).val(salto[0]+' '+salto[1]);

              if($("#tipo").val()=="bambino")
              {
               $.ajax({
                  url: 'data/dati.php',
                  type: 'POST',
                  data: {
                    'ONE' : 1,
                    'ssid': ident,
                  },
                  success: function(response){
                      var data = JSON.parse(response);
                      console.log(data);
                     $("#indirizzo").val(data.profilo[0].indirizzo);
                        $("#citta").val(data.profilo[0].citta);
                        $("#cap").val(data.profilo[0].cap);
                    $("#telefono").val(data.profilo[0].telefono);
                    var nome =data.profilo[0].nome_coniuge;
                    var cognome = data.profilo[0].cognome_coniuge;
                    if(nome!= null && cognome != null)
                    {
                      $("#nome-madre").val(nome+' '+cognome);
                    }
                    else if(nome!= null && cognome === null)
                    {
                      $("#nome-madre").val(nome);
                    }
                    var nazio = data.profilo[0].nazionalita;
                    var congrega = data.profilo[0].congregazione;
                    seleziona("nazionalita",nazio);
                    seleziona("settore",congrega);
                    $("#genitore-mex").modal('show');
                  }
              });
              }
              $(':focus').blur();
            }
            else if(idinput=="nome-coniuge")
            {
              var salto = opts[i].value.split("  ");
              $("#"+idinput).val(salto[0]);
              $("#"+idcognome).val(salto[1]);
              var ident = salto[2];
              $(':focus').blur();

              $.ajax({
              url: 'data/dati.php',
              type: 'POST',
              data: {
                'NOME_FIGLI' : 1,
                'id': ident,
              },
              success: function(response){
                  var data = JSON.parse(response);
                  console.log(data);
                  if(!data.numero=="0")
                  {
                    var numero = data.numero;
                    numero=Number(numero);
                    document.getElementById("numero").selectedIndex = numero;
                      myFunction();
                      //console.log(data.figli[0].nome_figlio_1);
                      if(data.figli!="N")
                      {
                          //console.log("entra");
                      if(data.figli[0].cognome_figlio_1!=null)
                        {
                  	      $('#nome-figlio-1').val(data.figli[0].nome_figlio_1);
                        }
                        if(data.figli[0].cognome_figlio_1!=null)
                          {
                            $("#cognome-figlio-1").val(data.figli[0].cognome_figlio_1);
                          }
                      if(data.figli[0].nome_figlio_2!=null)
                        {
                  	      $('#nome-figlio-2').val(data.figli[0].nome_figlio_2);
                        }
                        if(data.figli[0].cognome_figlio_2!=null)
                          {
                            $("#cognome-figlio-2").val(data.figli[0].cognome_figlio_2);
                          }
                          if(data.figli[0].nome_figlio_3!=null)
                            {
                      	      $('#nome-figlio-3').val(data.figli[0].nome_figlio_3);
                            }
                        if(data.figli[0].cognome_figlio_3!=null)
                          {
                            $("#cognome-figlio-3").val(data.figli[0].cognome_figlio_3);
                          }
                          if(data.figli[0].nome_figlio_4!=null)
                            {
                      	      $('#nome-figlio-4').val(data.figli[0].nome_figlio_4);
                            }
                        if(data.figli[0].cognome_figlio_4!=null)
                          {
                            $("#cognome-figlio-4").val(data.figli[0].cognome_figlio_4);
                          }
                          if(data.figli[0].nome_figlio_5!=null)
                            {
                      	      $('#nome-figlio-5').val(data.figli[0].nome_figlio_5);
                            }
                        if(data.figli[0].cognome_figlio_5!=null)
                          {
                            $("#cognome-figlio-5").val(data.figli[0].cognome_figlio_5);
                          }

                      }
                  }


                  }

              });
            }
            else {
              var salto = opts[i].value.split("  ");
              $("#"+idinput).val(salto[0]);
              $("#"+idcognome).val(salto[1]);
              $(':focus').blur();
            }

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
        //$("#osservazioni").parent().hide();
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
        if(stato=='Cebile/nubile'||stato=='Fidanzato/a')
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
       var number=Number(numero);

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
             $("#datamissionario").show();
             $("#luogomissionario").show();
             $("#datacooperatore").show();
               $("#luogocooperatore").show();
        break;
        case 'Missionario/a':
            $("#datadiacono").show();
             $("#luogodiacono").show();
             $("#datapresbitero").show();
             $("#luogopresbitero").show();
             $("#dataevangelista").show();
             $("#luogoevangelista").show();
             $("#datamissionario").show();
             $("#luogomissionario").show();
             $("#datacooperatore").show();
               $("#luogocooperatore").show();
        break;
        case 'Evangelista':
            $("#datadiacono").show();
             $("#luogodiacono").show();
             $("#datapresbitero").show();
             $("#luogopresbitero").show();
             $("#dataevangelista").show();
             $("#luogoevangelista").show();
             $("#datacooperatore").show();
               $("#luogocooperatore").show();
        break;
        case 'Presbitero':
            $("#datadiacono").show();
             $("#luogodiacono").show();
             $("#datapresbitero").show();
             $("#luogopresbitero").show();
             $("#datacooperatore").show();
               $("#luogocooperatore").show();
        break;
        case 'Diacono/Diaconessa':
           $("#datadiacono").show();
             $("#luogodiacono").show();
             $("#datacooperatore").show();
               $("#luogocooperatore").show();
        break;

        case  'Cooperatore/Cooperatrice':
           $("#datacooperatore").show();
             $("#luogocooperatore").show();
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
           $("#datamissionario").hide();
           $("#luogomissionario").hide();
           $("#datacooperatore").hide();
           $("#luogocooperatore").hide();
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
