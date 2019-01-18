<?php
session_start();
include 'conn.inc.php';
if(isset($_SESSION['id']))
{
header('location: home');
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="assets/web/assets/jquery/jquery.min.js"></script>


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
                    <a href="#">
                         <img src="assets/images/img-1583-122x122.png" alt="Mobirise" title="" style="height: 3.8rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="#">AD Firenze</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">


        </div>
    </nav>
</section>

<section class="engine"><a href="#"></a></section><section class="header13 cid-ra7JYQ8nAY mbr-fullscreen mbr-parallax-background" id="header13-3">





    <div class="container">


        <h1 class="mbr-section-title align-center pb-3 mbr-white mbr-bold mbr-fonts-style display-1"><p>
        </p><br><br><p style="text-shadow: -1px 0 black, 0 2px black, 2px 0 black, 0 -1px black;">AD Firenze</p></h1>

        <h3 class="mbr-section-subtitle mbr-fonts-style display-5">
            Amministrazione</h3>
            <?php if(@$_GET['err']==1) { ?>
              <h3 class="mbr-section-subtitle mbr-fonts-style display-5" style="color:red">
                Credenziali non corrette</h3>
              <?php } ?>
        <div class="container mt-5 pt-5 pb-5">
            <div class="media-container-column" data-form-type="formoid">


                <form class="form-inline" action="access.php" method="post">


                    <div class="form-group">
                        <input type="text" class="form-control input-sm input-inverse" name="email" required="" placeholder="Username o Email" id="name-header13-3">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control input-sm input-inverse" name="password" required="" data-form-field="password" placeholder="Password" id="email-header13-3">
                    </div>
                    <div class="form-group">

                    </div>
                    <div class="buttons-wrap"><button href="" class="btn btn-primary display-4" type="submit" role="button" name="loginuser">Accedi<br></button></div>
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
