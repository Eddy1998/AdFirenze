<?php
session_start();


?>
<!DOCTYPE html>
<html >
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v4.8.7, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/img-1583-122x122.png" type="image/x-icon">
  <meta name="description" content="">
  <title>Accesso</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">



</head>
<body>
  <section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-0">



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
                   <a href="home">
                        <img src="assets/images/img-1583-122x122.png" alt="ADM" style="height: 3.8rem;">
                   </a>
               </span>
               <span class="navbar-caption-wrap">
                   <a class="navbar-caption text-white display-4" href="home">
                       ADM Firenze
                   </a>
               </span>
           </div>
       </div>
       <!-- Inizio utente-->
       <?php
       if(isset($_SESSION['id']))
       {
          ?>

       <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
             <li class="nav-item dropdown">
                   <a class="nav-link link text-white dropdown-toggle display-4" href="secretaria" data-toggle="dropdown-submenu" aria-expanded="false">
                     <span class="mbri-pages mbr-iconfont mbr-iconfont-btn">
                     </span>
                       Secretaria</a>
                       <div class="dropdown-menu">
                         <div class="dropdown">
                           <a class="text-white dropdown-item dropdown-toggle display-4" href=" " data-toggle="dropdown-submenu" aria-expanded="false">
                             Registro</a>
                           <div class="dropdown-menu dropdown-submenu">
                             <a class="text-white dropdown-item display-4" href="ricerca">Visualizza Tutti</a>
                             <div class="dropdown">
                               <a class="text-white dropdown-item dropdown-toggle display-4" href="membri" data-toggle="dropdown-submenu" aria-expanded="false">
                                 Membri</a>
                                 <div class="dropdown-menu dropdown-submenu">
                                   <a class="text-white dropdown-item display-4" href="membri">Tutti</a>
                                   <a class="text-white dropdown-item display-4" href="nuovo?new=M">Nuovo</a>
                                 </div>
                               </div>
                               <div class="dropdown">
                                 <a class="text-white dropdown-item dropdown-toggle display-4" href="congregati" data-toggle="dropdown-submenu" aria-expanded="false">
                                   Congregati</a>
                                   <div class="dropdown-menu dropdown-submenu">
                                     <a class="text-white dropdown-item display-4" href="congregati">
                                       Tutti</a>
                                       <a class="text-white dropdown-item display-4" href="nuovo?new=C">
                                         Nuovo</a>
                                       </div>
                                     </div>
                                     <div class="dropdown">
                                       <a class="text-white dropdown-item dropdown-toggle display-4" href="bambini" data-toggle="dropdown-submenu">
                                         Bambini</a>
                                         <div class="dropdown-menu dropdown-submenu">
                                           <a class="text-white dropdown-item display-4" href="bambini">
                                             Tutti</a>
                                             <a class="text-white dropdown-item display-4" href="nuovo?new=B">
                                               Nuovo</a>
                                             </div>
                                           </div>
                                           <a class="text-white dropdown-item display-4" href="nuovo">
                                             Aggiungi Nuovo</a>
                                           </div>
                                         </div>
                                         <div class="dropdown">
                                           <a class="text-white dropdown-item dropdown-toggle display-4" href="" data-toggle="dropdown-submenu" aria-expanded="false">
                                             Stampe</a>
                                             <div class="dropdown-menu dropdown-submenu">
                                               <a class="text-white dropdown-item display-4" href="serviziostampe">
                                                 Scheda dati</a>
                                                 <a class="text-white dropdown-item display-4" href=" ">
                                                   Certificati</a>
                                                   <a class="text-white dropdown-item display-4" href=" ">
                                                     Carte</a>
                                                     <a class="text-white dropdown-item display-4" href="compleanni">
                                                       Compleanni</a>
                                                     </div>
                                                   </div>
                                                   <div class="dropdown">
                                                     <a class="text-white dropdown-item dropdown-toggle display-4" href=" " data-toggle="dropdown-submenu" aria-expanded="false">
                                                       Altro</a>
                                                       <div class="dropdown-menu dropdown-submenu">
                                                         <a class="text-white dropdown-item display-4" href=" ">
                                                           ...</a>
                                                         </div>
                                                       </div>
                                                     </div>
               </li>
               <li class="nav-item dropdown">
                 <a class="nav-link link text-white dropdown-toggle display-4" href=" " data-toggle="dropdown-submenu" aria-expanded="false">
                   <span class="mbri-credit-card mbr-iconfont mbr-iconfont-btn"></span>
                       Tesoreria</a>
                       <div class="dropdown-menu">
                         <div class="dropdown">
                           <a class="text-white dropdown-item dropdown-toggle display-4" href=" " data-toggle="dropdown-submenu" aria-expanded="false">
                             Entrate</a>
                             <div class="dropdown-menu dropdown-submenu">
                               <a class="text-white dropdown-item display-4" href=" ">
                                 Visualizza tutte</a>
                               </div>
                             </div>
                             <div class="dropdown">
                               <a class="text-white dropdown-item dropdown-toggle display-4" href=" " data-toggle="dropdown-submenu" aria-expanded="false">
                                 Uscite</a>
                                 <div class="dropdown-menu dropdown-submenu">
                                   <a class="text-white dropdown-item display-4" href=" ">
                                     Visualizza utte</a>
                                   </div>
                                 </div>
                               </div>
                             </li>
               <li class="nav-item dropdown">
                   <a class="nav-link link text-white dropdown-toggle display-4" href=" " data-toggle="dropdown-submenu" aria-expanded="false">
                     <span class="mbri-setting mbr-iconfont mbr-iconfont-btn"></span>
                       Altro</a>
                       <div class="dropdown-menu">
                         <div class="dropdown">
                           <a class="text-white dropdown-item dropdown-toggle display-4" href=" " data-toggle="dropdown-submenu" aria-expanded="false">
                             Utenti</a>
                             <div class="dropdown-menu dropdown-submenu">
                               <a class="text-white dropdown-item display-4" href="utenti">Gestione Utenti</a>
                             </div>
                           </div>
                         </div>
               </li>
             </ul>
           <div class="navbar-buttons mbr-section-btn">
             <a class="btn btn-sm btn-warning display-4" href="logout">
               <span class="mbri-logout mbr-iconfont mbr-iconfont-btn"></span>
               Esci</a>
             </div>
       </div>

        <?php
      }
      ?>
<!--Fine utente
     -->
   </nav>
</section>

<section class="engine"><a href=""></a></section><section class="header13 cid-ra7JYQ8nAY mbr-fullscreen mbr-parallax-background" id="header13-3">



  <div class="mbr-overlay" style="opacity: 0.7; background: linear-gradient(45deg, #ffffb3, #0f7699);;">
  </div>

    <div class="container">


        <h1 class="mbr-section-title align-center pb-3 mbr-white mbr-bold mbr-fonts-style display-1"><p>
            </p><br><br><p>404</p></h1>

        <h3 class="mbr-section-subtitle mbr-fonts-style display-5">
            La pagina richiesta non esiste</h3>
        <div class="container mt-5 pt-5 pb-5">
            <div class="media-container-column" data-form-type="formoid">


                <form class="form-inline" action="home" method="post">


                    <div class="buttons-wrap"><button href="" class="btn btn-primary display-4" type="submit" role="button">HOME<br></button></div>
                </form>
            </div>
        </div>
    </div>




</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/popper/popper.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/smoothscroll/smooth-scroll.js"></script>
  <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
  <script src="assets/playervimeo/vimeo_player.js"></script>
  <script src="assets/parallax/jarallax.min.js"></script>
  <script src="assets/theme/js/script.js"></script>


 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>
