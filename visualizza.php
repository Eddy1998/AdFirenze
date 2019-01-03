  <?php
session_start();
include 'conn.inc.php';
/*if(!isset($_SESSION['user']))
{
header('location: index.php');
}*/
if(!isset($_GET['ssid']))
{
  //errore, utente non specificato
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
  <title>Visualizza</title>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/view-profile.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
      $("#nascita3").append("2012-01-10");

    });
       function goBack()
    {
      window.history.back()
    }
  //<button type="button" class="btn btn-danger" onclick="goBack()">Correggi</button>
  </script>


</head>
<body>
  <section class="menu cid-ra8sZROvHU" once="menu" id="menu1-1f">



    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm bg-color transparent">
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

                         <img src="assets/images/img-1583-122x122.png" alt="logo" title="" style="height: 3.8rem;">

                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="home">AD Firenze</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
              <li class="nav-item dropdown">
                    <a class="nav-link link text-white dropdown-toggle display-4" href="" data-toggle="dropdown-submenu" aria-expanded="false">
                      <span class="mbri-extension mbr-iconfont mbr-iconfont-btn">
                      </span>Sezione</a><div class="dropdown-menu">
                        <a class="text-white dropdown-item display-4" href="secretaria">
                          <span class="mobi-mbri mobi-mbri-opened-folder mbr-iconfont mbr-iconfont-btn">
                          </span>Secretaria</a>
                          <a class="text-white dropdown-item display-4" href="#" aria-expanded="false">
                            <span class="mobi-mbri mobi-mbri-cash mbr-iconfont mbr-iconfont-btn">
                            </span>Tesoreria</a>
                          </div>
                </li>
                <li class="nav-item dropdown open">
                  <a class="nav-link link text-white dropdown-toggle display-4" href="" data-toggle="dropdown-submenu" aria-expanded="true">
                    <span class="mobi-mbri mobi-mbri-plus mbr-iconfont mbr-iconfont-btn">
                    </span>Nuovo</a>
                    <div class="dropdown-menu">
                      <a class="text-white dropdown-item display-4" href="nuovo.php?new=M">
                        <span class="mobi-mbri mobi-mbri-user-2 mbr-iconfont mbr-iconfont-btn">
                      </span>&nbsp; &nbsp; &nbsp; &nbsp;Membro</a>
                      <a class="text-white dropdown-item display-4" href="nuovo.php?new=C" aria-expanded="false">
                        <span class="mobi-mbri mobi-mbri-user mbr-iconfont mbr-iconfont-btn">
                        </span>Congregato</a>
                      <a class="text-white dropdown-item display-4" href="nuovo.php?new=B" aria-expanded="false">
                        <span class="mobi-mbri mobi-mbri-rocket mbr-iconfont mbr-iconfont-btn">
                        </span>&nbsp; &nbsp; &nbsp; Bambino</a>
                    </div>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link link text-white display-4" href="ricerca" aria-expanded="false">
                            <span class="mobi-mbri mobi-mbri-search mbr-iconfont mbr-iconfont-btn">
                            </span>Ricerca</a>
                          </li>
                        </ul>
            <div class="navbar-buttons mbr-section-btn">

                 <a class="btn btn-sm btn-white display-4" href="logout">
                   <span class="mbri-logout mbr-iconfont mbr-iconfont-btn">
                   </span>Esci</a>
                 </div>
        </div>
    </nav>
</section>

<section class="engine"><a href=""></a></section><section class="mbr-section info2 cid-ra8sZQWUdy" id="info2-1e">





    <div class="container">
        <div class="row main justify-content-center">
            <div class="media-container-column col-12 col-lg-3 col-md-4">

            </div>
            <div class="media-container-column title col-12 col-lg-7 col-md-6">
                <h2 class="align-right mbr-bold mbr-white pb-3 mbr-fonts-style display-2">Dati di 'user'</h2>
                <h3 class="mbr-section-subtitle align-right mbr-light mbr-white mbr-fonts-style display-5">Stai vedendo i dati di 'user', puoi modificarli ma non eliminarli</h3>
            </div>
        </div>
    </div>
</section>



<section class="tabs3 cid-ra8uzLCEiU" id="tabs3-1n">





    <div class="container">


    </div>
    <div class="container-fluid">
        <div class="row tabcont">
            <ul class="nav nav-tabs pt-3 mt-5" role="tablist">
                <li class="nav-item mbr-fonts-style">
                  <a class="nav-link active show display-7" role="tab" data-toggle="tab" href="#tabs3-1n_tab0" aria-selected="true">
                        Modifica Dati
                  </a>
                </li>
                <li class="nav-item mbr-fonts-style">
                  <a class="nav-link  active show display-7" role="tab" data-toggle="tab" href="#tabs3-1n_tab1" aria-selected="true">
                        Disattiva
                  </a>
                </li>
                <li class="nav-item mbr-fonts-style">
                  <a class="nav-link  active show display-7" role="tab" data-toggle="tab" href="#tabs3-1n_tab1" aria-selected="true">
                          Annulla
                  </a>
                </li>
                <li class="nav-item mbr-fonts-style">
                  <a class="nav-link  active show display-7" role="tab" data-toggle="tab" href="#tabs3-1n_tab1" aria-selected="true">
                          Stampa
                  </a>
                </li>
            </ul>
        </div>
    </div>

</section>

<section class="mbr-section form1 cid-ra8sZTfFwo" id="form1-1h">




    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">MODULO</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">
                    Modifica i dati di 'user'</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">

                    <form name="modulo" class="mbr-form" action="esito.php" method="post">
                         <?php
                            <?php if(isset($_GET['ssid']))
                              {       
                            ?>
                              <input type="hidden" id="ssid" value="<?php echo $_GET['ssid'];?>"></input>
                              <?php 
                            }
                            ?>
                          <div class="row row-sm-offset">
                            <div class="col-md-6 multi-horizontal" >
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7"  style="color:gray"><b>Nome</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="nome"> </b></label>
                                </div>
                            </div>
                            <div class="col-md-6 multi-horizontal" >
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" style="color:gray"><b>Cognome</b></label><br>
                                      <label class="form-control-label mbr-fonts-style display-7" for="cognome"><b id="cognome"> </b></label>

                                </div>
                            </div>
                            <div class="col-md-6 multi-horizontal" >
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7"  style="color:gray"><b>Indirizzo</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="indirizzo"> </b></label>

                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" >
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7"  style="color:gray"><b>Città</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="citta"> </b></label>


                                </div>
                            </div>
                            <div class="col-md-2 multi-horizontal" >
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7"  style="color:gray"><b>CAP</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="cap"> </b></label>

                                </div>
                            </div>

                            <div class="col-md-4 multi-horizontal" >
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7"  style="color:gray"><b>Data di nascita</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="nascita"> </b></label>

                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" >
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7"  style="color:gray"><b>Genere</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="sesso"> </b></label>


                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" >
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7"  style="color:gray"><b>Numero di Telefono</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="telefono"> </b></label>
                                    
                                </div>
                            </div>

                            <div class="col-md-8 multi-horizontal" >
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7"  style="color:gray"><b>Nazionalità</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="nazionalita"> </b></label>
                              
                                  </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" >
                            </div>
                            <div class="col-md-8 multi-horizontal" >
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7"  style="color:gray"><b>Stato civile</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="statocivile"> </b></label>
                                    
                                  </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" >
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7"  style="color:gray"><b>Data di matrimonio</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="matrimonio"> </b></label>
                                    
                                </div>
                            </div>
                            <div class="col-md-6 multi-horizontal" >
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7"  style="color:gray"><b>Nome coniuge</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="nome-coniuge"> </b></label>
                                  
                                </div>
                            </div>
                            <div class="col-md-6 multi-horizontal" >
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7"  style="color:gray"><b>Cognome coniuge</b></label><br>
                                      <label class="form-control-label mbr-fonts-style display-7"  ><b id="cognome-coniuge"> </b></label>
                                 
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" >
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7"  style="color:gray"><b>Numero di figli</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="numero-figli"> </b></label>
                              
                                </div>
                            </div>
                            <div class="col-md-8 multi-horizontal" >
                            </div>

                            <div id="nfiglio1" class="col-md-6 multi-horizontal" >
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7"  style="color:gray"><b>Nome figlio 1</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="nome-figlio-1"> </b></label>
                                    
                                </div>
                            </div>
                            <div id="cfiglio1" class="col-md-6 multi-horizontal" >
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7"  style="color:gray"><b>Cognome figlio 1</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="cognome-figlio-1"> </b></label>
                                  
                                </div>
                            </div>

                            <div id="nfiglio2" class="col-md-6 multi-horizontal" >
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7"  style="color:gray"><b>Nome figlio 2</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="nome-figlio-2"> </b></label>
                                  
                                </div>
                            </div>
                            <div id="cfiglio2" class="col-md-6 multi-horizontal" >
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7"  style="color:gray"><b>Cognome figlio 2</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="cognome-figlio-2"> </b></label>
                                 
                                </div>
                            </div>
                            <div id="nfiglio3" class="col-md-6 multi-horizontal" >
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7"  style="color:gray"><b>Nome figlio 3</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="nome-figlio-3"> </b></label>
                                  
                                </div>
                            </div>
                            <div  id="cfiglio3" class="col-md-6 multi-horizontal" >
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7"  style="color:gray"><b>Cognome figlio 3</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="cognome-figlio-3"> </b></label>
                                   
                                </div>
                            </div>
                            <div id="nfiglio4" class="col-md-6 multi-horizontal" >
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7"  style="color:gray"><b>Nome figlio 4</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="nome-figlio-4"> </b></label>
                                  
                                </div>
                            </div>
                            <div id="cfiglio4" class="col-md-6 multi-horizontal" >
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" style="color:gray"><b>Cognome figlio 4</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="cognome-figlio-4"> </b></label>
                                  
                                </div>
                            </div>
                            <div id="nfiglio5" class="col-md-6 multi-horizontal">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7"  style="color:gray"><b>Nome figlio 5</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="nome-figlio-5"> </b></label>
                                  
                                </div>
                            </div>
                            <div id="cfiglio5" class="col-md-6 multi-horizontal">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" style="color:gray"><b>Cognome figlio 5</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="cognome-figlio-5"> </b></label>
                                  
                                </div>
                            </div>
                            <div class="col-md-8 multi-horizontal" >
                            </div>
                            <div class="col-md-6 multi-horizontal" >
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7"  style="color:gray"><b>Nome e cognome padre</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="nome-padre"> </b></label>
                                  
                                </div>
                            </div>
                            <div class="col-md-6 multi-horizontal" >
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7"  style="color:gray"><b>Nome e cognome madre</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="nome-madre"> </b></label>
                                  
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" >
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7"  style="color:gray"><b>Data di battesimo</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="data-battesimo"> </b></label>
                                  </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" >
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7"  style="color:gray"><b>Luogo di battesimo</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="luogo-battesimo"> </b></label>
                                  
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" >
                            </div>
                            <div class="col-md-4 multi-horizontal">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7"  style="color:gray"><b>Data di arrivo in chiesa</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="data-arrivo"> </b></label>
                                  
                                </div>
                            </div>
                            <div class="col-md-8 multi-horizontal" >
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" style="color:gray"><b>Battezzato con Spirito Santo</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="battezzato-spirito"> </b></label>
                                   <!-- <select  class="form-control" name="battezzato-spirito" id="battezzato-spirito">
                                    <option value="" disabled selected>Scegli un'opzione..</option>
                                    <option value="S">Si</option>
                                    <option value="N">No</option>
                                    </select>-->
                                </div>
                            </div>

                            <div class="col-md-4 multi-horizontal" >
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7"  style="color:gray"><b>Numero di tessera</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="numero-tessera"> </b></label>
                                    
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7"  style="color:gray"><b>Carico in chiesa</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="carico"> </b></label>
                                   
                                </div>
                            </div>
                            
                            <div id="datadiacono" class="col-md-6 multi-horizontal" >
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" ><b>Data consacrazione a Diacono</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="data-diacono"> </b></label>
                                    
                                </div>
                            </div>
                            <div id="luogodiacono" class="col-md-6 multi-horizontal" >
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" ><b>Luogo di consacrazione - Diacono</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="luogo-diacono"> </b></label>  
                                  
                                </div>
                            </div>

                            <div id="datapresbitero" class="col-md-6 multi-horizontal" >
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" ><b>Data consacrazione a Presbitero</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="data-presbitero"> </b></label>  
                                  
                                </div>
                            </div>
                            <div id="luogopresbitero" class="col-md-6 multi-horizontal" >
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" ><b>Luogo di consacrazione - Presbitero</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="luogo-presbitero"> </b></label>  
                                  
                                </div>
                            </div>
                            <div id="dataevangelista" class="col-md-6 multi-horizontal">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" ><b>Data consacrazione a Evangelista</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="data-evangelista"> </b></label>  
                                  
                                </div>
                            </div>
                            <div  id="luogoevangelista" class="col-md-6 multi-horizontal" >
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" ><b>Luogo di consacrazione - Evangelista</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="luogo-evangelista"> </b></label>
                                  
                                </div>
                            </div>
                            <div id="datapastore" class="col-md-6 multi-horizontal" >
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" ><b>Data consacrazione a Pastore</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="data-pastore"> </b></label>
                                  
                                </div>
                            </div>
                            <div id="luogopastore" class="col-md-6 multi-horizontal">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7"><b>Luogo di consacrazione - Pastore</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="luogo-pastore"> </b></label>
                                  
                                </div>
</div>
                          

                        </div>
                        <div class="form-group" >

                            <label class="form-control-label mbr-fonts-style display-7"  style="color:gray"><b>Osservazioni</b></label><br>
                              <output class="form-control-label mbr-fonts-style display-7" style="display: inline;" ><b id="osservazioni"> 
                              </b></output>

                        </div>
                        <input  type="hidden" class="form-control"  name="attivo" id="attivo2" value="S">
                        <input  type="hidden" class="form-control" name="tipo" id="tipo2" value="">
                        <input type="hidden" class="form-control" name="nome"  id="nome2" >
                        <input type="hidden" class="form-control" name="cognome" id="cognome2">
                        <input type="hidden" class="form-control" name="indirizzo"  id="indirizzo2" />
                        <input type="hidden" class="form-control" name="citta"  id="citta2">
                        <input type="hidden" class="form-control" name="cap" id="cap2">
                        <input type="hidden" class="form-control" name="nascita"  id="nascita2">
                        <input type="hidden" class="form-control" name="sesso"  id="sesso2">
                        <input type="hidden" class="form-control" name="telefono"  id="telefono2">
                       <input type="hidden" class="form-control" name="nazionalita"  id="nazionalita2">
                       <input type="hidden" class="form-control" name="statocivile"  id="statocivile2">
                       <input type="hidden" class="form-control" name="matrimonio"  id="matrimonio2" >  
                       <input type="hidden" class="form-control" name="nome-coniuge"  id="nome-coniuge2">  
                       <input type="hidden" class="form-control" name="cognome-coniuge"  id="cognome-coniuge2">
                      <input type="hidden" class="form-control" name="numero-figli"  id="numero-figli2">
                       <input type="hidden" class="form-control" name="nome-figlio-1" id="nome-figlio-12">  
                      <input type="hidden" class="form-control" name="cognome-figlio-1" id="cognome-figlio-12">  
                      <input type="hidden" class="form-control" name="nome-figlio-2"  id="nome-figlio-22">  
                      <input type="hidden" class="form-control" name="cognome-figlio-2"  id="cognome-figlio-22">  
                      <input type="hidden" class="form-control" name="nome-figlio-3" id="nome-figlio-32">  
                      <input type="hidden" class="form-control" name="cognome-figlio-3"  id="cognome-figlio-32">  
                      <input type="hidden" class="form-control" name="nome-figlio-4"  id="nome-figlio-42">  
                      <input type="hidden" class="form-control" name="cognome-figlio-4"  id="cognome-figlio-42">  
                      <input type="hidden" class="form-control" name="nome-figlio-5"  id="nome-figlio-52">  
                      <input type="hidden" class="form-control" name="cognome-figlio-5"  id="cognome-figlio-52">  
                      <input type="hidden" class="form-control" name="nome-padre"  id="nome-padre2">  
                      <input type="hidden" class="form-control" name="nome-madre"  id="nome-madre2">  
                      <input type="hidden" class="form-control" name="data-battesimo" id="data-battesimo2" >  
                      <input type="hidden" class="form-control" name="luogo-battesimo" id="luogo-battesimo2">  
                      <input type="hidden" class="form-control" name="data-arrivo" id="data-arrivo2" >
                       <input type="hidden" class="form-control" name="battezzato-spirito" id="battezzato-spirito2" >
                      <input type="hidden" class="form-control" name="tessera" id="numero-tessera2">
                       <input type="hidden" class="form-control" name="carico" id="carico2"> 
                      <input type="hidden" class="form-control" name="data-diacono" id="data-diacono2">
                      <input type="hidden" class="form-control" name="luogo-diacono" id="luogo-diacono2">
                      <input type="hidden" class="form-control" name="data-presbitero"  id="data-presbitero2">
                      <input type="hidden" class="form-control" name="luogo-presbitero"  id="luogo-presbitero2">
                      <input type="hidden" class="form-control" name="data-evangelista" id="data-evangelista2">  
                      <input type="hidden" class="form-control" name="luogo-evangelista"  id="luogo-evangelista2">  
                      <input type="hidden" class="form-control" name="data-pastore"  id="data-pastore2">  
                      <input type="hidden" class="form-control" name="luogo-pastore"  id="luogo-pastore2">
                      <textarea type="text" class="form-control" name="osservazioni"  id="osservazioni2" style="display:none;"></textarea>
                        <!--/////INSERT INTO user_date VALUES ('', '$name', STR_TO_DATE('$date', '%m/%d/%Y'))

                        link per caricamento 
https://stackoverflow.com/questions/5763096/i-want-to-display-a-waiting-animation-while-my-php-page-is-fetching-data-from-th
                        -->
                        

                        <span class="input-group-btn"><button href="" type="submit" class="btn btn-form btn-black display-4">MODIFICA</button></span>
                    </form>
            </div>
        </div>
    </div>
</section>








  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/mbr-tabs/mbr-tabs.js"></script>
  <script src="assets/theme/js/script.js"></script>


 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>
