<?php
session_start();
include 'data/funzioni.php';
include 'conn.inc.php';

/*if(!isset($_SESSION['user']))
{
header('location: index.php');
}*/?>

<!DOCTYPE html>
<html >
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/img-1583-122x122.png" type="image/x-icon">
  <meta name="description" content="Site Generator Description">
  <title>Secretaria</title>
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
                      AD Firenze
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
                  </div></li><li class="nav-item">
                    <a class="nav-link link text-white display-4" href="ricerca" aria-expanded="false">Ricerca</a>
                  </li>
                </ul>
            <div class="navbar-buttons mbr-section-btn">

              <a class="btn btn-sm btn-white display-4" href="logout">
                <span class="mbri-logout mbr-iconfont mbr-iconfont-btn"></span>Esci</a></div>
        </div>
    </nav>
</section>

<section class="engine"><a href="#"></a></section><section class="header5 cid-ra7VjoS0aO" id="header5-j">




    <div class="container">
        <div class="row justify-content-center">
            <div class="mbr-white col-md-10">
                <h1 class="mbr-section-title align-center pb-3 mbr-fonts-style display-1"><strong><br><br>Secretaria</strong></h1>
                <p class="mbr-text align-center display-5 pb-3 mbr-fonts-style"></p>

            </div>
        </div>
    </div>


</section>

<section class="counters1 counters cid-ra7V6nwkc8" id="counters1-i">





    <div class="container">
        <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2">
            Dati importanti</h2>
        <h3 class="mbr-section-subtitle mbr-fonts-style display-5"></h3>

        <div class="container pt-4 mt-2">
            <div class="media-container-row">
                <div class="card p-3 align-center col-12 col-md-6 col-lg-4">
                    <div class="panel-item p-3">
                        <div class="card-img pb-3">
                            <span class="mbr-iconfont mobi-mbri-users mobi-mbri"></span>
                        </div>

                        <div class="card-text" >
                            <h3 class="count pt-3 pb-3 mbr-fonts-style display-2" id="c-membri">
                              <?php echo visualizza("MA"); ?>
                            </h3>
                            <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">Membri</h4>
                            <p class="mbr-content-text mbr-fonts-style display-7">I membri che vengono contati sono quelli attivi</p>
                        </div>
                    </div>
                </div>


                <div class="card p-3 align-center col-12 col-md-6 col-lg-4">
                    <div class="panel-item p-3">
                        <div class="card-img pb-3">
                            <span class="mbr-iconfont mobi-mbri-user mobi-mbri"></span>
                        </div>
                        <div class="card-text">
                            <h3 class="count pt-3 pb-3 mbr-fonts-style display-2" id="c-congregati">
                                   <?php echo visualizza("CA"); ?>
                            </h3>
                            <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">Congregati</h4>
                            <p class="mbr-content-text mbr-fonts-style display-7">Chi frequenta e non è membro, viene considerato congregato</p>
                        </div>
                    </div>
                </div>

                <div class="card p-3 align-center col-12 col-md-6 col-lg-4">
                    <div class="panel-item p-3">
                        <div class="card-img pb-3">
                            <span class="mbr-iconfont mobi-mbri-extension mobi-mbri"></span>
                        </div>
                        <div class="card-text">
                            <h3 class="count pt-3 pb-3 mbr-fonts-style display-2" id="c-bambini">
                               <?php echo visualizza("BB"); ?>
                            </h3>
                            <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">
                                Bambini</h4>
                            <p class="mbr-content-text mbr-fonts-style display-7">La quantità di bambini che sono registrati</p>
                        </div>
                    </div>
                </div>



            </div>
        </div>
   </div>
</section>

<section class="carousel slide cid-ra804XGu70" data-interval="false" id="slider1-k">



    <div class="full-screen"><div class="mbr-slider slide carousel" data-pause="true" data-keyboard="false" data-ride="false" data-interval="false"><ol class="carousel-indicators"><li data-app-prevent-settings="" data-target="#slider1-k" data-slide-to="0"></li><li data-app-prevent-settings="" data-target="#slider1-k" class=" active" data-slide-to="1"></li><li data-app-prevent-settings="" data-target="#slider1-k" data-slide-to="2"></li></ol><div class="carousel-inner" role="listbox"><div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/mbr-1920x1342.jpg);"><div class="container container-slide"><div class="image_wrapper"><div class="mbr-overlay"></div><img src="assets/images/mbr-1920x1342.jpg"><div class="carousel-caption justify-content-center"><div class="col-10 align-center"><h2 class="mbr-fonts-style display-1"><strong>MEMBRI</strong></h2><p class="lead mbr-text mbr-fonts-style display-5">Gestisci i dati anagrafici dei membri.
<br>Puoi aggiungere modificare e disattivare i membri</p>
<div class="mbr-section-btn" buttons="0">
  <a class="btn  btn-white-outline display-4" href="membri">Vai a membri</a>
</div>
</div>
</div>
</div></div></div><div class="carousel-item slider-fullscreen-image active" data-bg-video-slide="false" style="background-image: url(assets/images/mbr-1-1920x1920.jpg);"><div class="container container-slide"><div class="image_wrapper"><div class="mbr-overlay"></div><img src="assets/images/mbr-1-1920x1920.jpg"><div class="carousel-caption justify-content-center"><div class="col-10 align-center"><h2 class="mbr-fonts-style display-1"><strong>CONGREGATI</strong></h2><p class="lead mbr-text mbr-fonts-style display-5">Gestisci i dati anagrafici delle persone che congregano.
<br>Possono diventare membri</p>
<div class="mbr-section-btn" buttons="0">
  <a class="btn btn-primary display-4" href="congregati">Vai a congregati<br>
  </a>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/mbr-2-1920x1280.jpg);">
  <div class="container container-slide">
    <div class="image_wrapper">
      <div class="mbr-overlay">
      </div>
      <img src="assets/images/mbr-2-1920x1280.jpg">
      <div class="carousel-caption justify-content-center">
        <div class="col-10 align-right">
          <h2 class="mbr-fonts-style display-1">
            <strong>BAMBINI</strong>
          </h2>
          <p class="lead mbr-text mbr-fonts-style display-5">Gestisci i dati anagrafici dei più piccoli</p>
          <div class="mbr-section-btn" buttons="0">
            <a class="btn  btn-white-outline display-4" href="bambini">Vai a Bambini</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#slider1-k">
  <span aria-hidden="true" class="mbri-left mbr-iconfont">
  </span><span class="sr-only">Previous</span>
</a><a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next" href="#slider1-k">
  <span aria-hidden="true" class="mbri-right mbr-iconfont">
  </span><span class="sr-only">Next</span>
</a>
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
