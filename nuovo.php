<?php
session_start();
include 'conn.inc.php';
if(!isset($_SESSION['id']))
{
header('location: index');
}
?>
<!DOCTYPE html>
<html >
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/img-1583-122x122.png" type="image/x-icon">
  <meta name="description" content="Site Generator Description">
  <title>Nuovo</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <script src="assets/bootstrap/js/script.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"/>
  <script type="text/javascript" src="js/action-new.js"></script>
  <style>
  input[type="file"] {
                      display: none;
                    }
  .thumb {
            height: 170px;
            margin: 10px 5px 0 0;
          }
  </style>
  <script type="text/javascript">
  $(document).ready(function(){


    // we define and invoke a function
    nascondere();
    nascondecons();
    hidebutton();
    //nascondi_figli();
    $('#statocivile').on('change', function () {
        dissattiva();
    });
   $('#opzione').on('change', function () {
        cambia();
    });
    $('#numero').on('change', function () {
        myFunction();
    });
    $('#carico').on('change', function () {
       consacrazione();
   });

    $('#button-elimina').on('click', function () {
         $('#list').children().remove();
         hidebutton();
           $('#img-ad').show();
             $('#erroredimensione').text('');
     });

     $('#cognome').focusout( function(){
		  var nome  = $('#nome').val();
		  var cognome = $('#cognome').val();

		  $.ajax({
			url: 'data/dati.php',
			type: 'post',
			data: {
				'registrato_check' : 1,
				'nome' : nome,
        'cognome' : cognome,
			},
			success: function(response){
			  if (response == 'ESISTE' ) {
          //$('#persona-esistente').text('');
              $('#persona-esistente').text(nome+' '+cognome);
                $('#mymodal').modal('show');
			  }
			}
		  });
		 });

    <?php $res = @$_GET['new'];
    if($res=='M')
    { ?>
      //preparo membro
      document.getElementById("opzione").selectedIndex = 1;
      cambia();
      $("#titolo-tipo, #titolo-opzione").hide();
    <?php }
    else if($res=='C') { ?>
      //preparo congregato
      document.getElementById("opzione").selectedIndex = 2;
      cambia();
      $("#titolo-tipo, #titolo-opzione").hide();
    <?php }
    else if($res=='B')
    { ?>
      //prepato bambino/a
      document.getElementById("opzione").selectedIndex = 3;
      cambia();
      $("#titolo-tipo, #titolo-opzione").hide();
    <?php
    } ?>

  });
 </script>


</head>
<body >
  <section class="menu cid-ra8qrTrM44" once="menu" id="menu1-16">



    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="home.php">
                         <img src="assets/images/img-1583-122x122.png" alt="logo" title="" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="home.php">ADM Firenze</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-white display-4" href="home.php"><span class="mobi-mbri mobi-mbri-home mbr-iconfont mbr-iconfont-btn"></span>Home</a>
                </li>
                <li class="nav-item"><a class="nav-link link text-white display-4" href="ricerca.php" aria-expanded="false"><span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn"></span>Ricerca</a></li></ul>
            <div class="navbar-buttons mbr-section-btn">  <a class="btn btn-sm btn-white display-4" href="logout.php"><span class="mbri-logout mbr-iconfont mbr-iconfont-btn"></span>Esci</a></div>
        </div>
    </nav>
</section>

<section class="engine"><a href="#"></a></section><section class="mbr-section info2 cid-ra8qrR3M2J" id="info2-14">





    <div class="container">
        <div class="row main justify-content-center">
            <div class="media-container-column col-12 col-lg-3 col-md-4">

            </div>
            <div class="media-container-column title col-12 col-lg-7 col-md-6">
                <h2 class="align-right mbr-bold mbr-white pb-3 mbr-fonts-style display-2">Aggiungi al registro</h2>
                <h3 class="mbr-section-subtitle align-right mbr-light mbr-white mbr-fonts-style display-5">
                    Inserisci i dati del nuovo membro, congregato o bambino/a</h3>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section form3 cid-ra8rRktZ5P" id="form3-1d">





    <div class="container">
        <div class="row justify-content-center" id="titolo-tipo">
            <div class="title col-12 col-lg-8">
                <h2 class="align-center pb-2 mbr-fonts-style display-2">TIPO</h2>
                <h3 class="mbr-section-subtitle align-center pb-5 mbr-light mbr-fonts-style display-5">
                    Membro, congregato o bambino</h3>
            </div>
        </div>

        <div class="row py-2 justify-content-center" id="titolo-opzione">
            <div class="col-12 col-lg-8  col-md-8 " data-form-type="formoid">
                <div class="row row-sm-offset">
                  <div class="col-md-3 multi-horizontal"></div>
                    <div class="col-md-6 multi-horizontal">
        						<select class="form-control" placeholder="scegli" id="opzione">
                    <option selected disabled>Scegli un'opzione</option>
        						<option value="M">Membro</option>
        						<option value="C">Congregato</option>
        						<option value="B">Bambino/a</option>
        						</select>
                  </div>
                  <div class="col-md-3 multi-horizontal"></div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="mbr-section form1 cid-ra8qCZsALE" id="membro" >
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2" id="modulo"></h2>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">
                    Inserisci i dati richiesti.
                </h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
                    <form name="modulo" class="mbr-form" action="esito.php" method="post" enctype="multipart/form-data">
                      <input  type="hidden" class="form-control"  name="attivo" value="S">
                      <input  type="hidden" class="form-control" name="tipo" id="tipo" value="">
                      <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
                        <div class="row row-sm-offset">

                            <div class="col-md-3 multi-horizontal" data-for="">
                            </div>

                            <div class="col-md-3 multi-horizontal" data-for="">
                              <div class="form-group">
                                <label class="form-control-label mbr-fonts-style display-7" for="files"><b>Foto</b> (Max 1MB)</label><br>

                                  <label id="button-elimina">
                                  <a class="nav-link link text-black display-4" ><span class="mobi-mbri mobi-mbri-trash mbr-iconfont mbr-iconfont-btn"></span></a>
                                 </label>


                              <label for="files" id="button-modifica">
                                 <a class="nav-link link text-black display-4" ><span class="mobi-mbri mobi-mbri-update mbr-iconfont mbr-iconfont-btn"></span></a>
                              </label>
                              <div id="erroredimensione" style="color:red;">
                              </div>
                              <div id="img-ad">
                                 <label for="files">
                                  <a>
                                   <img src="assets/images/add.png" alt="logo"  title="" style="height: 150px;  margin-left: 50px; margin-bottom: 20px;">
                                  </a>
                                 </label>
                              </div>
                              <div id="in-file">
                                <input  type="file" name="files" id="files"/>
                              </div>
                              </div>
                              <div>
                                <output id="list"></output>
                              </div>


                            </div>


                              <div class="col-md-3 multi-horizontal" data-for="" id="bottoni-file">

                              </div>


                            <div class="col-md-6 multi-horizontal" data-for="nome">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="nome"><b>Nome</b></label>
                                    <input type="text" class="form-control" name="nome" data-form-field="Name" required="" id="nome" >
                                </div>
                            </div>
                            <div class="col-md-6 multi-horizontal" data-for="cognome">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="cognome"><b>Cognome</b></label>
                                    <input type="text" class="form-control" name="cognome" id="cognome">
                                </div>
                            </div>
                            <div class="col-md-6 multi-horizontal" data-for="indirizzo">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="indirizzo"><b>Indirizzo</b></label>
                                    <input type="text" class="form-control" name="indirizzo"  id="indirizzo" />
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" data-for="Citta">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="citta"><b>Città</b></label>
                                    <input type="text" class="form-control" name="citta"  id="citta">
                                </div>
                            </div>
                            <div class="col-md-2 multi-horizontal" data-for="cap">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="cap"><b>CAP</b></label>
                                    <input type="text" class="form-control" name="cap" id="cap">
                                </div>
                            </div>

                            <div class="col-md-4 multi-horizontal" data-for="nascita">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="nascita"><b>Data di nascita</b></label>
                                    <input type="date" class="form-control" name="nascita"  id="nascita" maxlength="10" required>
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" data-for="sesso">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="sesso" required=""><b>Genere</b></label>
                                    <select  class="form-control" name="sesso" id="sesso" >
                                    <option value="" disabled selected>Scegli un'opzione..</option>
                                    <option value="Maschile">Maschile</option>
                                    <option value="Femminile">Femminile</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" data-for="telefono">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="telefono"><b>Numero di Telefono</b></label>
                                    <input type="number" class="form-control" name="telefono"  id="telefono">
                                </div>
                            </div>

                            <div class="col-md-8 multi-horizontal" data-for="nazionalita">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="nazionalita"><b>Nazionalità</b></label>
                                    <select  class="form-control" name="nazionalita"  id="nazionalita">
                                    <option></option>
                                    <?php
                                        $dbh = new PDO($conn,$user,$pass);
                                        $stm=$dbh->prepare('SELECT nome_stati FROM stati order by nome_stati');
                                        $stm->execute();
                                        while ($row=$stm->fetch()) {
                                            echo "<option value='".$row['nome_stati']."'>" . $row['nome_stati'] ."</option>";
                                        }

                                      ?>
                                    </select>
                                  </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" >
                            </div>
                            <div class="col-md-8 multi-horizontal" data-for="statocivile">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="statocivile"><b>Stato civile</b></label>
                                    <select  id="statocivile" class="form-control" name="statocivile">
                                    <option value="" disabled selected>Scegli un'opzione..</option>
                                    <option value="Cebile/nubile">Cebile/nubile</option>
                                    <option value="Fidanzato/a">Fidanzato/a</option>
                                    <option value="Coniugato/a">Coniugato/a</option>
                                    <option value="Divorziato/a">Divorziato/a</option>
                                    <option value="Vedovo/a">Vedovo/a</option>
                                    </select>
                                  </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" data-for="matrimonio">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="matrimonio"><b>Data di matrimonio</b></label>
                                    <input type="date" class="form-control" name="matrimonio"  id="matrimonio" maxlength="10">
                                </div>
                            </div>
                            <div class="col-md-6 multi-horizontal" data-for="nome-coniuge">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="nome-coniuge"><b>Nome coniuge</b></label>
                                    <input type="text" class="form-control" name="nome-coniuge"  id="nome-coniuge" list="nomecon" onkeyup="opciones('nome-coniuge','nomecon')" oninput="rellena('nome-coniuge','cognome-coniuge','nomecon')">
                                    <datalist id="nomecon">
                                    </datalist>
                                </div>
                            </div>
                            <div class="col-md-6 multi-horizontal" data-for="cognome-coniuge">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="cognome-coniuge"><b>Cognome coniuge</b></label>
                                    <input type="text" class="form-control" name="cognome-coniuge"  id="cognome-coniuge">
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" data-for="numero-figli">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="numero"><b>Numero di figli</b></label>
                                    <select  id="numero" class="form-control" name="numero-figli"  >
                                    <option value="0" selected>0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-8 multi-horizontal" >
                            </div>

                            <div id="nfiglio1" class="col-md-6 multi-horizontal" data-for="nome-figlio-1">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="nome-figlio-1"><b>Nome figlio 1</b></label>
                                    <input type="text" class="form-control" name="nome-figlio-1" id="nome-figlio-1"  list="nomefi1" onkeyup="opciones('nome-figlio-1','nomefi1')" oninput="rellena('nome-figlio-1','cognome-figlio-1','nomefi1')">
                                    <datalist id="nomefi1">
                                    </datalist>
                                </div>
                            </div>
                            <div id="cfiglio1" class="col-md-6 multi-horizontal" data-for="cognome-figlio-1">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="cognome-figlio-1"><b>Cognome figlio 1</b></label>
                                    <input type="text" class="form-control" name="cognome-figlio-1" id="cognome-figlio-1">
                                </div>
                            </div>

                            <div id="nfiglio2" class="col-md-6 multi-horizontal" data-for="nome-figlio-2">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="nome-figlio-2"><b>Nome figlio 2</b></label>
                                    <input type="text" class="form-control" name="nome-figlio-2"  id="nome-figlio-2" list="nomefi2" onkeyup="opciones('nome-figlio-2','nomefi2')" oninput="rellena('nome-figlio-2','cognome-figlio-2','nomefi2')">
                                    <datalist id="nomefi2">
                                    </datalist>
                                </div>
                            </div>
                            <div id="cfiglio2" class="col-md-6 multi-horizontal" data-for="cognome-figlio-2">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="cognome-figlio-2"><b>Cognome figlio 2</b></label>
                                    <input type="text" class="form-control" name="cognome-figlio-2"  id="cognome-figlio-2">
                                </div>
                            </div>
                            <div id="nfiglio3" class="col-md-6 multi-horizontal" data-for="nome-figlio-3">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="nome-figlio-3"><b>Nome figlio 3</b></label>
                                    <input type="text" class="form-control" name="nome-figlio-3" id="nome-figlio-3" list="nomefi3" onkeyup="opciones('nome-figlio-3','nomefi3')" oninput="rellena('nome-figlio-3','cognome-figlio-3','nomefi3')">
                                    <datalist id="nomefi3">
                                    </datalist>
                                </div>
                            </div>
                            <div  id="cfiglio3" class="col-md-6 multi-horizontal" data-for="cognome-figlio-3">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="cognome-figlio-3"><b>Cognome figlio 3</b></label>
                                    <input type="text" class="form-control" name="cognome-figlio-3"  id="cognome-figlio-3">
                                </div>
                            </div>
                            <div id="nfiglio4" class="col-md-6 multi-horizontal" data-for="nome-figlio-4">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="nome-figlio-4"><b>Nome figlio 4</b></label>
                                    <input type="text" class="form-control" name="nome-figlio-4"  id="nome-figlio-4" list="nomefi4" onkeyup="opciones('nome-figlio-4','nomefi4')" oninput="rellena('nome-figlio-4','cognome-figlio-4','nomefi4')">
                                    <datalist id="nomefi4">
                                    </datalist>
                                </div>
                            </div>
                            <div id="cfiglio4" class="col-md-6 multi-horizontal" data-for="cognome-figlio-4">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="cognome-figlio-4"><b>Cognome figlio 4</b></label>
                                    <input type="text" class="form-control" name="cognome-figlio-4"  id="cognome-figlio-4">
                                </div>
                            </div>
                            <div id="nfiglio5" class="col-md-6 multi-horizontal" data-for="nome-figlio-5">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="nome-figlio-5"><b>Nome figlio 5</b></label>
                                    <input type="text" class="form-control" name="nome-figlio-5"  id="nome-figlio-5" list="nomefi5" onkeyup="opciones('nome-figlio-5','nomefi5')" oninput="rellena('nome-figlio-5','cognome-figlio-5','nomefi5')">
                                    <datalist id="nomefi5">
                                    </datalist>
                                </div>
                            </div>
                            <div id="cfiglio5" class="col-md-6 multi-horizontal" data-for="cognome-figlio-5">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="cognome-figlio-5"><b>Cognome figlio 5</b></label>
                                    <input type="text" class="form-control" name="cognome-figlio-5"  id="cognome-figlio-5">
                                </div>
                            </div>
                            <div class="col-md-8 multi-horizontal" >
                            </div>
                            <div class="col-md-6 multi-horizontal" data-for="nome-padre">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="nome-padre"><b>Nome e cognome padre</b></label>
                                    <input type="text" class="form-control" name="nome-padre"  id="nome-padre" list="nomepadre" onkeyup="opciones('nome-padre','nomepadre')" oninput="rellena('nome-padre',' ','nomepadre')">
                                    <datalist id="nomepadre">
                                    </datalist>
                                </div>
                            </div>
                            <div class="col-md-6 multi-horizontal" data-for="nome-madre">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="nome-madre"><b>Nome e cognome madre</b></label>
                                    <input type="text" class="form-control" name="nome-madre"  id="nome-madre" list="nomemadre" onkeyup="opciones('nome-madre','nomemadre')" oninput="rellena('nome-madre',' ','nomemadre')">
                                    <datalist id="nomemadre">
                                    </datalist>
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" data-for="data-battesimo">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="data-battesimo"><b>Data di battesimo</b></label>
                                    <input type="date" class="form-control" name="data-battesimo" id="data-battesimo" maxlength="10">
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" data-for="luogo-battesimo">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="luogo-battesimo"><b>Luogo di battesimo</b></label>
                                    <input type="text" class="form-control" name="luogo-battesimo" id="luogo-battesimo">
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" >
                            </div>
                            <div class="col-md-3 multi-horizontal" data-for="battezzato-spirito">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="battezzato-spirito"><b>Batt. Spirito Santo</b></label>
                                    <select  class="form-control" name="battezzato-spirito" id="battezzato-spirito">
                                    <option value="" disabled selected>Scegli un'opzione..</option>
                                    <option value="S">Si</option>
                                    <option value="N">No</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4 multi-horizontal" data-for="data-arrivo">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="data-arrivo"><b>Data di arrivo in chiesa</b></label>
                                    <input type="date" class="form-control" name="data-arrivo" id="data-arrivo" maxlength="10">
                                </div>
                            </div>

                            <div class="col-md-5 multi-horizontal" data-for="settore">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="settore"><b>Congregazione</b></label>
                                    <select  class="form-control" name="settore" id="settore" required>
                                    <option value="" disabled selected>Scegli luogo</option>
                                    <option value="Firenze">Firenze</option>
                                    <option value="Pisa">Pisa</option>
                                    <option value="Prato">Prato</option>
                                    <option value="Cecina">Cecina</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4 multi-horizontal" data-for="tessera">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="numero-tessera"><b>Numero di tessera</b></label>
                                    <input type="text" class="form-control" name="tessera"  maxlength="6"  id="numero-tessera">
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" data-for="carico">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="carico"><b>Carico in chiesa</b></label>
                                    <select  class="form-control" name="carico"  required="" id="carico">
                                    <option value="" disabled selected>Scegli un'opzione..</option>
                                    <option value="Pastore">Pastore</option>
                                    <option value="Missionario/a">Missionario/a</option>
                                   <option value="Evangelista">Evangelista</option>
                                   <option value="Presbitero">Presbitero</option>
                                   <option value="Diacono/Diaconessa">Diacono/Diaconessa</option>
                                   <option value="Cooperatore/Cooperatrice">Cooperatore/Cooperatrice</option>
                                   <option value="Membro">Membro</option>
                                    </select>
                                </div>
                            </div>
                            <div id="datapastore" class="col-md-6 multi-horizontal" data-for="data-pastore">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="data-pastore"><b>Data consacrazione a Pastore</b></label>
                                    <input type="date" class="form-control" name="data-pastore"  id="data-pastore">
                                </div>
                            </div>
                            <div id="luogopastore" class="col-md-6 multi-horizontal" data-for="luogo-pastore">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="luogo-pastore"><b>Luogo di consacrazione - Pastore</b></label>
                                    <input type="text" class="form-control" name="luogo-pastore"  id="luogo-pastore">
                                </div>
                            </div>
                            <div id="datamissionario" class="col-md-6 multi-horizontal" data-for="data-missionario">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="data-missionario"><b>Data consacrazione a Missionario</b></label>
                                    <input type="date" class="form-control" name="data-missionario"  id="data-missionario">
                                </div>
                            </div>
                            <div id="luogomissionario" class="col-md-6 multi-horizontal" data-for="luogo-missionario">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="luogo-Missionario"><b>Luogo di consacrazione - Missionario</b></label>
                                    <input type="text" class="form-control" name="luogo-missionario"  id="luogo-missionario">
                                </div>
                            </div>

                            <div id="dataevangelista" class="col-md-6 multi-horizontal" data-for="data-evangelista">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="data-evangelista"><b>Data consacrazione a Evangelista</b></label>
                                    <input type="date" class="form-control" name="data-evangelista" id="data-evangelista">
                                </div>
                            </div>
                            <div  id="luogoevangelista" class="col-md-6 multi-horizontal" data-for="luogo-evangelista">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="luogo-evangelista"><b>Luogo di consacrazione - Evangelista</b></label>
                                    <input type="text" class="form-control" name="luogo-evangelista"  id="luogo-evangelista">
                                </div>
                            </div>
                            <div id="datapresbitero" class="col-md-6 multi-horizontal" data-for="data-presbitero">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="data-presbitero"><b>Data consacrazione a Presbitero</b></label>
                                    <input type="date" class="form-control" name="data-presbitero"  id="data-presbitero">
                                </div>
                            </div>
                            <div id="luogopresbitero" class="col-md-6 multi-horizontal" data-for="luogo-presbitero">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="luogo-presbitero"><b>Luogo di consacrazione - Presbitero</b></label>
                                    <input type="text" class="form-control" name="luogo-presbitero"  id="luogo-presbitero">
                                </div>
                            </div>
                            <div id="datadiacono" class="col-md-6 multi-horizontal" data-for="data-diacono">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="data-diacono"><b>Data consacrazione a Diacono</b></label>
                                    <input type="date" class="form-control" name="data-diacono" id="data-diacono">
                                </div>
                            </div>
                            <div id="luogodiacono" class="col-md-6 multi-horizontal" data-for="luogo-diacono">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="luogo-diacono"><b>Luogo di consacrazione - Diacono</b></label>
                                    <input type="text" class="form-control" name="luogo-diacono" id="luogo-diacono">
                                </div>
                            </div>
                            <div id="datacooperatore" class="col-md-6 multi-horizontal" data-for="data-cooperatore">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="data-cooperatore"><b>Data consacrazione a Cooperatore</b></label>
                                    <input type="date" class="form-control" name="data-cooperatore" id="data-cooperatore">
                                </div>
                            </div>
                            <div id="luogocooperatore" class="col-md-6 multi-horizontal" data-for="luogo-cooperatore">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="luogo-cooperatore"><b>Luogo di consacrazione - Cooperatore</b></label>
                                    <input type="text" class="form-control" name="luogo-cooperatore" id="luogo-cooperatore">
                                </div>
                            </div>





                        </div>
                        <div class="form-group" data-for="osservazioni">
                            <label class="form-control-label mbr-fonts-style display-7" for="osservazioni"><b>Osservazioni</b></label>
                            <textarea type="text" class="form-control" name="osservazioni" maxlength="500" rows="6"  id="osservazioni"></textarea>
                        </div>


                        <span class="input-group-btn"><button  type="submit" class="btn btn-primary btn-form display-4" name="newmembro">REGISTRA</button></span>
                    </form>
            </div>
        </div>
    </div>

    <div id="mymodal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog ">
       <div class="modal-content">
          <div class="modal-content">
          <div class="modal-header">

        <div class="input-group">
          <div class="input-group-prepend">
          <h4  >Attenzione!</h4>
          </div>
        </div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body "><div class="input-group">
                <h5>Sembra che <b id="persona-esistente"></b> è già presente nel registro, ti consigliamo di verificare prima di continuare con la registrazione per evitare duplicazioni.</h5>
          </div>
          </div>
          <div class="modal-footer">
            <button  id="chiudi" type="button" class="btn btn-primary" data-dismiss="modal" >OK</button>
          </div>
        </div>
        </div>
      </div>
    </div>
     <div id="genitore-mex" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog ">
       <div class="modal-content">
          <div class="modal-content">
          <div class="modal-header">

        <div class="input-group">
          <div class="input-group-prepend">
          <h4  ><b>Messaggio:</b></h4>
          </div>
        </div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body "><div class="input-group">
                <h5>I seguenti campi sono stati autocompilati con i dati del genitore(padre) scelto:</h5><br>
                <h5><ul>
                   <li>nome genitore (madre)</li>
                    <li>Indirizzo</li>
                    <li>Città</li>
                    <li>CAP</li>
                    <li>Indirizzo</li>
                    <li>Numero di telefono</li>
                    <li>Nazionalità</li>
                    <li>Congregazione</li>
                </ul></h5><br>
                <h5>Prima di registrare il bambino/a, controlla che i dati coincidano con quelli desiderati per evitare futuri errori.</h5>
          </div>
          </div>
          <div class="modal-footer">
            <button  id="chiudi" type="button" class="btn btn-primary" data-dismiss="modal" >OK</button>
          </div>
        </div>
        </div>
      </div>
    </div>

</section>

<script>
           function archivo(evt) {
               var files = evt.target.files; // FileList object

               // Obtenemos la imagen del campo "file".
               for (var i = 0, f; f = files[i]; i++) {
                 //Solo admitimos imágenes.
                 if (!f.type.match('image.*')) {
                     continue;
                 }

                 var reader = new FileReader();

                 reader.onload = (function(theFile) {
                     return function(e) {
                       // Insertamos la imagen
                      document.getElementById("list").innerHTML = ['<img class="thumb"   src="', e.target.result,'" title="', escape(theFile.name),'" style=" margin-left: 50px; margin-bottom: 20px;" />'].join('');

                      mostrabottoni();
                      $('#img-ad').hide();
                      input = document.getElementById('files');
                      file = input.files[0];

                      if(file.size>1000000)
                      {
                        $('#erroredimensione').text("Immagine con dimensione superiore a 1MB, l'immagine non verra' inserita");

                      }
                      else {
                          $('#erroredimensione').text("");
                      }

                     };
                 })(f);

                 reader.readAsDataURL(f);
               }
           }

           document.getElementById('files').addEventListener('change', archivo, false);
   </script>

  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&language=it&libraries=places&key=AIzaSyDgPsOOliTK-_UaRltboADtrAhvTEMlDGc"></script>
  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/theme/js/script.js"></script>


 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>
