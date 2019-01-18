<?php
session_start();
include 'conn.inc.php';
if(!isset($_SESSION['username']))
{
   header('location: index.php');
}
?>
<!DOCTYPE html>
<html >
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/img-1583-122x122.png" type="image/x-icon">
  <meta name="description">
  <title>Home</title>
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


</head>
<body>
  <section class="menu cid-qTkzRZLJNu" once="menu" id="menu1-4">



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
                         <img src="assets/images/img-1583-122x122.png" alt="Logo" title="" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap">
                    <a class="navbar-caption text-white display-4" href="home.php">
                        AD Firenze
                    </a>
                </span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
              <li class="nav-item">
                    <a class="nav-link link text-white display-4" href="home">
                      <span class="mobi-mbri mobi-mbri-home mbr-iconfont mbr-iconfont-btn">
                      </span>home</a>
                </li>
                <li class="nav-item">
                      <a class="nav-link link text-white display-4" href="utenti">
                      Gest. utenti</a>
                  </li>
                <li class="nav-item dropdown">
                  <a class="nav-link link text-white dropdown-toggle display-4" href="" data-toggle="dropdown-submenu" aria-expanded="false">
                    <span class="mobi-mbri  mbr-iconfont mbr-iconfont-btn">
                    </span>Sezione</a>
                    <div class="dropdown-menu">
                      <a class="text-white dropdown-item display-4" href="secretaria">Secretaria</a>
                      <a class="text-white dropdown-item display-4" href="" aria-expanded="false">Tesoreria</a>
                      <a class="text-white dropdown-item display-4" href="" aria-expanded="false">Compleanni<br>
                        <a class="text-white dropdown-item display-4" href="" aria-expanded="false">Visitanti del giorno<br>
                      </a>
                    </div></li>
                  </ul>
            <div class="navbar-buttons mbr-section-btn">

                 <a class="btn btn-sm btn-white display-4" href="logout.php"><span class="mbri-logout mbr-iconfont mbr-iconfont-btn">
                 </span>Esci</a></div>
        </div>
    </nav>
</section>

<section class="engine"><a href="#"></a></section><section class="header11 cid-ra7S5vK1WU mbr-fullscreen" id="header11-b">

    <!-- Block parameters controls (Blue "Gear" panel) -->

    <!-- End block parameters -->


    <div class="container align-left">
        <div class="media-container-column mbr-white col-md-12">
            <h3 class="mbr-section-subtitle py-3 mbr-fonts-style display-5">Benvenuto/a <?php echo $_SESSION['username']; ?></h3>

            <p class="mbr-text py-3 mbr-fonts-style display-5">Gestisci tutti i dati della secretaria e tesoreria, in seguito, scegli una sezione</p>

        </div>
    </div>

    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>

<section class="carousel slide cid-ra7Tb8v6jc" data-interval="false" id="slider1-c">



    <div class="full-screen"><div class="mbr-slider slide carousel" data-pause="true" data-keyboard="false" data-ride="carousel" data-interval="6000">
      <ol class="carousel-indicators">

        <li data-app-prevent-settings="" data-target="#slider1-c" data-slide-to="0"></li>
        <li data-app-prevent-settings="" data-target="#slider1-c" class=" active" data-slide-to="1"></li>

     </ol>
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/mbr-1920x1278.jpg);">
          <div class="container container-slide">
            <div class="image_wrapper">
              <div class="mbr-overlay"></div>
              <img src="assets/images/mbr-1920x1278.jpg">
              <div class="carousel-caption justify-content-center">
                <div class="col-10 align-center">
                  <h2 class="mbr-fonts-style display-1">SECRETARIA</h2>
                  <p class="lead mbr-text mbr-fonts-style display-5">Gestisci i dati anagrafici dei membri e congregati</p>
                  <div class="mbr-section-btn" buttons="0">
                    <a class="btn  btn-white-outline display-4" href="secretaria" >Vai</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item slider-fullscreen-image active" data-bg-video-slide="false" style="background-image: url(assets/images/mbr-1-1920x1280.jpg);">
          <div class="container container-slide">
            <div class="image_wrapper">
              <div class="mbr-overlay"></div>
              <img src="assets/images/mbr-1-1920x1280.jpg">
              <div class="carousel-caption justify-content-center">
                <div class="col-10 align-center">
                  <h2 class="mbr-fonts-style display-1">TESORERIA</h2>
                  <p class="lead mbr-text mbr-fonts-style display-5">Gestisci gli ingressi, uscite, ecc</p>
                  <div class="mbr-section-btn" buttons="0">
                    <a class="btn btn-success display-4" href="">non acora disponibile...</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
                <a data-app-prevent-settings="" class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#slider1-c">
                  <span aria-hidden="true" class="mbri-left mbr-iconfont"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a data-app-prevent-settings="" class="carousel-control carousel-control-next" role="button" data-slide="next" href="#slider1-c">
                  <span aria-hidden="true" class="mbri-right mbr-iconfont"></span>
                  <span class="sr-only">Next</span>
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
