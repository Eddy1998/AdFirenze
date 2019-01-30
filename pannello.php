<?php
session_start();
include 'data/funzioni.php';
include 'conn.inc.php';

if(!isset($_SESSION['user']))
{
  header('location: index.php');
}?>

<!DOCTYPE html>
<html >
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/img-1583-122x122.png" type="image/x-icon">
  <meta name="description" content="Site Generator Description">
  <title>Menu principale</title>
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
    <script type="text/javascript" src="js/managerSections.js"> </script>
    <script type="text/javascript">
          $(document).ready(function(){

        });


    </script>


</head>
<body>
  <section class="menu cid-ra7UN4a71u" once="menu" id="menu1-d">



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

                         <img src="assets/images/img-1583-122x122.png" alt="logo" title="" style="height: 3.8rem;">

                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="home">
                      ADM Firenze
                    </a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
              <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="home.php">
                      <span class="mobi-mbri mobi-mbri-home mbr-iconfont mbr-iconfont-btn"></span>home</a>
                </li>
                <li class="nav-item dropdown"><a class="nav-link link text-white dropdown-toggle display-4" href="#" data-toggle="dropdown-submenu" aria-expanded="false">Nuovo</a>
                  <div class="dropdown-menu"><a class="text-white dropdown-item display-4" href="nuovo.php?new=M">Membro</a>
                    <a class="text-white dropdown-item display-4" href="nuovo.php?new=C" aria-expanded="false">Congregato</a>
                    <a class="text-white dropdown-item display-4" href="nuovo.php?new=B" aria-expanded="false">Bambino<br></a>
                  </div></li>
                  <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="ricerca" aria-expanded="false">Ricerca</a>
                  </li>
                  <li class="nav-item">
                        <a class="nav-link link text-white display-4" href="serviziostampe">
                          <span class="mobi-mbri mbr-iconfont mbr-iconfont-btn"></span>Stampe</a>
                    </li>
                </ul>
            <div class="navbar-buttons mbr-section-btn">

              <a class="btn btn-sm btn-white display-4" href="logout">
                <span class="mbri-logout mbr-iconfont mbr-iconfont-btn"></span>Esci</a></div>
        </div>
    </nav>
</section>







 <!--INIZIO PROVA-->
 <section class="engine"><a ></a></section>
  <section class="tabs3 cid-rgbf8XZiJ2" id="tabs3-2" style="margin-top:5em">




    <div class="container">
        <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
           Menu principale
        </h2>

    </div>
    <div class="container-fluid">
        <div class="row tabcont">
            <ul class="nav nav-tabs pt-3 mt-5" role="tablist">
                <li class="nav-item mbr-fonts-style"><a class="nav-link active show display-7" role="tab" data-toggle="tab" href="#tabs3-2_tab0" aria-selected="true">
                        Secretaria
                    </a></li>
                <li class="nav-item mbr-fonts-style"><a class="nav-link  active show display-7" role="tab" data-toggle="tab" href="#tabs3-2_tab1" aria-selected="true">
                        Tesoreria
                    </a></li>
                <li class="nav-item mbr-fonts-style"><a class="nav-link active show display-7" role="tab" data-toggle="tab" href="#tabs3-2_tab2" aria-selected="true">
                        Altro
                    </a></li>



            </ul>
        </div>
    </div>

    <div class="container">
        <div class="row px-1">
            <div class="tab-content">
                <div id="tab1" class="tab-pane in active mbr-table" role="tabpanel">
                    <div class="row tab-content-row">
                        <div class="col-xs-12 col-md-6 col-lg-4">
                            <h3 class="plan-title align-center mbr-fonts-style display-5">
                                Registro
                            </h3>
                            <hr>
                            <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                                <a href="ricerca">Visualizza tutti</a>
                            </h4>
                             <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                              <a href="membri"> Membri</a>
                            </h4>
                           <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                               <a href="congregati">Congregati</a>
                            </h4>
                             <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                             <a href="bambini">  Bambini</a>
                            </h4>
                            <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                               <a href="nuovo"> Aggiungi Nuovo</a>
                            </h4>

                        </div>

                        <div class="col-xs-12 col-md-6 col-lg-4">
                            <h3 class="plan-title  align-center mbr-fonts-style display-5">
                                Stampe
                            </h3>
                            <hr>
                             <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                               <a href="serviziostampe">Scheda di dati</a>
                            </h4>
                            <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                               <a href=""> Certificati</a>
                            </h4>
                          <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                                <a href="">Carte</a>
                            </h4>
                             <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                              <a href=""> Compleanni</a>
                            </h4>

                        </div>

                        <div class="col-xs-12 col-md-6 col-lg-4">
                             <h3 class="plan-title align-center mbr-fonts-style display-5">
                                Altro
                            </h3>
                            <hr>

                            <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                              <a href=""></a>
                            </h4>
                        </div>


                    </div>
                </div>

                <div id="tab2" class="tab-pane  mbr-table" role="tabpanel">
                    <div class="row tab-content-row">
                        <div class="col-xs-12 col-md-6 col-lg-4">
                            <h3 class="plan-title align-center mbr-fonts-style display-5">
                                Entrate
                            </h3>
                            <hr>
                            <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                                <a href="">Visualizza Entrate</a>
                            </h4>
                             <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                              <a href=""></a>
                            </h4>
                           <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                               <a href=""></a>
                            </h4>
                             <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                             <a href="">  </a>
                            </h4>
                            <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                               <a href=""></a>
                            </h4>

                        </div>

                        <div class="col-xs-12 col-md-6 col-lg-4">
                            <h3 class="plan-title  align-center mbr-fonts-style display-5">
                                Uscite
                            </h3>
                            <hr>
                             <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                               <a href="serviziostampe">Visualizza Uscite</a>
                            </h4>
                            <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                               <a href=""> </a>
                            </h4>
                          <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                                <a href=""></a>
                            </h4>
                             <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                              <a href=""></a>
                            </h4>

                        </div>

                        <div class="col-xs-12 col-md-6 col-lg-4">
                             <h3 class="plan-title align-center mbr-fonts-style display-5">
                                Dichiarazioni
                            </h3>
                            <hr>

                            <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                              <a href=""></a>
                            </h4>
                        </div>


                    </div>
                </div>

                <div id="tab3" class="tab-pane  mbr-table" role="tabpanel">
                    <div class="row tab-content-row">
                        <div class="col-xs-12 col-md-6 col-lg-4">
                            <h3 class="plan-title align-center mbr-fonts-style display-5">
                                Utenti
                            </h3>
                            <hr>
                            <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                                <a href="utenti">Gestione Utenti</a>
                            </h4>
                             <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                              <a href=""> </a>
                            </h4>
                           <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                               <a href=""></a>
                            </h4>
                             <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                             <a href=""></a>
                            </h4>
                            <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                               <a href=""> </a>
                            </h4>

                        </div>

                        <div class="col-xs-12 col-md-6 col-lg-4">
                            <h3 class="plan-title  align-center mbr-fonts-style display-5">
                                ...
                            </h3>
                            <hr>
                             <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                               <a href=""></a>
                            </h4>
                            <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                               <a href=""></a>
                            </h4>
                          <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                                <a href=""></a>
                            </h4>
                             <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                              <a href=""></a>
                            </h4>

                        </div>

                        <div class="col-xs-12 col-md-6 col-lg-4">
                             <h3 class="plan-title align-center mbr-fonts-style display-5">
                               ...
                            </h3>
                            <hr>

                            <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                              <a href=""></a>
                            </h4>
                        </div>

                    </div>
                </div>

                <div id="tab4" class="tab-pane  mbr-table" role="tabpanel">
                    <div class="row tab-content-row">
                        <div class="col-xs-12 col-md-6 col-lg-4">
                            <div class="card-img ">
                                <span class="mbri-responsive mbr-iconfont"></span>
                            </div>
                            <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                                MOBILE FRIENDLY
                            </h4>
                            <p class="mbr-section-text  align-center mbr-fonts-style display-7">
                                Nessuna azione speciale richiesta, tutti i siti che crei con Mobirise sono ottimizzati per i dispositivi mobili. Non devi creare una versione mobile speciale del tuo sito, si adatterà automagicamente.
                            </p>
                        </div>

                        <div class="col-xs-12 col-md-6 col-lg-4">
                            <div class="card-img ">
                                <span class="mbri-responsive mbr-iconfont"></span>
                            </div>
                            <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                                MOBILE FRIENDLY
                            </h4>
                            <p class="mbr-section-text  align-center mbr-fonts-style display-7">
                                Nessuna azione speciale richiesta, tutti i siti che crei con Mobirise sono ottimizzati per i dispositivi mobili. Non devi creare una versione mobile speciale del tuo sito, si adatterà automagicamente.
                            </p>
                        </div>

                        <div class="col-xs-12 col-md-6 col-lg-4">
                            <div class="card-img ">
                                <span class="mbri-responsive mbr-iconfont"></span>
                            </div>
                            <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                                MOBILE FRIENDLY
                            </h4>
                            <p class="mbr-section-text  align-center mbr-fonts-style display-7">
                                Nessuna azione speciale richiesta, tutti i siti che crei con Mobirise sono ottimizzati per i dispositivi mobili. Non devi creare una versione mobile speciale del tuo sito, si adatterà automagicamente.
                            </p>
                        </div>


                    </div>
                </div>

                <div id="tab5" class="tab-pane  mbr-table" role="tabpanel">
                    <div class="row tab-content-row">
                        <div class="col-xs-12 col-md-6 col-lg-4">
                            <div class="card-img ">
                                <span class="mbri-bootstrap mbr-iconfont"></span>
                            </div>
                            <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                                È FACILE E SEMPLICE
                            </h4>
                            <p class="mbr-section-text  align-center mbr-fonts-style display-7">
                                Riduci i tempi di sviluppo con il costruttore di siti web drag-and-drop. Rilascia i blocchi nella pagina, modifica i contenuti in linea e pubblica - nessuna competenza tecnica richiesta.
                            </p>
                        </div>

                        <div class="col-xs-12 col-md-6 col-lg-4">
                            <div class="card-img ">
                                <span class="mbri-bootstrap mbr-iconfont"></span>
                            </div>
                            <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                                È FACILE E SEMPLICE
                            </h4>
                            <p class="mbr-section-text  align-center mbr-fonts-style display-7">
                                Riduci i tempi di sviluppo con il costruttore di siti web drag-and-drop. Rilascia i blocchi nella pagina, modifica i contenuti in linea e pubblica - nessuna competenza tecnica richiesta.
                            </p>
                        </div>

                        <div class="col-xs-12 col-md-6 col-lg-4">
                            <div class="card-img ">
                                <span class="mbri-bootstrap mbr-iconfont"></span>
                            </div>
                            <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                                È FACILE E SEMPLICE
                            </h4>
                            <p class="mbr-section-text  align-center mbr-fonts-style display-7">
                                Riduci i tempi di sviluppo con il costruttore di siti web drag-and-drop. Rilascia i blocchi nella pagina, modifica i contenuti in linea e pubblica - nessuna competenza tecnica richiesta.
                            </p>
                        </div>


                    </div>
                </div>

                <div id="tab6" class="tab-pane  mbr-table" role="tabpanel">
                    <div class="row tab-content-row">
                        <div class="col-xs-12 col-md-6 col-lg-4">
                            <div class="card-img ">
                                <span class="mbri-extension mbr-iconfont"></span>
                            </div>
                            <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                                BLOCCHI SITO WEB ALLA MODA
                            </h4>
                            <p class="mbr-section-text  align-center mbr-fonts-style display-7">
                                Scegli tra una vasta selezione di blocchi già pronti : intro a tutto schermo, carosello di bootstrap, slider, galleria con immagini reattive, scrolling parallax, intestazione fissa e altro ancora.
                            </p>
                        </div>

                        <div class="col-xs-12 col-md-6 col-lg-4">
                            <div class="card-img ">
                                <span class="mbri-extension mbr-iconfont"></span>
                            </div>
                            <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                                BLOCCHI SITO WEB ALLA MODA
                            </h4>
                            <p class="mbr-section-text  align-center mbr-fonts-style display-7">
                                Scegli tra una vasta selezione di blocchi già pronti : intro a tutto schermo, carosello di bootstrap, slider, galleria con immagini reattive, scrolling parallax, intestazione fissa e altro ancora.
                            </p>
                        </div>

                        <div class="col-xs-12 col-md-6 col-lg-4">
                            <div class="card-img ">
                                <span class="mbri-extension mbr-iconfont"></span>
                            </div>
                            <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                                BLOCCHI SITO WEB ALLA MODA
                            </h4>
                            <p class="mbr-section-text  align-center mbr-fonts-style display-7">
                                Scegli tra una vasta selezione di blocchi già pronti : intro a tutto schermo, carosello di bootstrap, slider, galleria con immagini reattive, scrolling parallax, intestazione fissa e altro ancora.
                            </p>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!--FINE-->


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/ytplayer/jquery.mb.ytplayer.min.js"></script>
  <script src="assets/vimeoplayer/jquery.mb.vimeo_player.js"></script>
  <script src="assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/slidervideo/script.js"></script>


 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>
