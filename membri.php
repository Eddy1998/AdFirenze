<?php
session_start();
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
  <title>Membri</title>
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/datatables/data-tables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/animatecss/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript">
        $(document).ready(function(){
          var Div, contenuto;

          <?php $res = @$_GET['success'];
          if($res==1)
          {
            ?>
            Div = document.getElementById("messaggio");
            contenuto = document.createTextNode("MEMBRO AGGIUNTO CON SUCCESSO");
            Div.append(contenuto);
            $('#messaggio').delay(5000).fadeOut();
          <?php }
          else if($res==9) { ?>

            Div = document.getElementById("messaggio");
            contenuto = document.createTextNode("ERRORE");
            document.getElementById('messaggio').style.color = 'red';
            Div.append(contenuto);
            $('#messaggio').delay(5000).fadeOut();
          <?php } ?>
        });
</script>

</head>
<body>
  <section class="menu cid-ra81NrMM5L" once="menu" id="menu1-l">



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
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="home.php">AD Firenze</a></span>
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item">
                    <a class="nav-link link text-white display-4" href="home.php">
                      <span class="mobi-mbri mobi-mbri-home mbr-iconfont mbr-iconfont-btn"></span>
                      Home</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link link text-white dropdown-toggle display-4"  data-toggle="dropdown-submenu" aria-expanded="false">
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
                    <a class="nav-link link text-white display-4" href="ricerca.php" aria-expanded="false">
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

<section class="engine"><a href=""></a></section><section class="mbr-section info2 cid-ra84WTzLfa" id="info2-r">




    <div class="container">
        <div class="row main justify-content-center">
            <div class="media-container-column col-12 col-lg-3 col-md-4">
                <div class="mbr-section-btn align-left py-4"><a class="btn btn-primary display-4" href="nuovo.php?new=M"><span class="mobi-mbri mobi-mbri-plus mbr-iconfont mbr-iconfont-btn"></span>Nuovo<br>Membro<br>
                    </a></div>
            </div>
            <div class="media-container-column title col-12 col-lg-7 col-md-6">
                <h2 class="align-right mbr-bold mbr-white pb-3 mbr-fonts-style display-2">
                    Sezione membri</h2>
                <h3 class="mbr-section-subtitle align-right mbr-light mbr-white mbr-fonts-style display-5">
                    Gestisci i dati anagrafici dei membri</h3>
                <h3 class="mbr-section-subtitle align-right mbr-light mbr-white mbr-fonts-style display-5" >
                  <b id="messaggio"></b></h3>
            </div>
        </div>
    </div>
</section>

<section class="counters1 counters cid-ra81Nt6vpJ" id="counters1-n">





    <div class="container">



        <div class="container pt-4 mt-2">
            <div class="media-container-row">
                <div class="card p-3 align-center col-12 col-md-6">
                    <div class="panel-item p-3">
                        <div class="card-img pb-3">
                            <span class="mbr-iconfont mobi-mbri-users mobi-mbri"></span>
                        </div>

                        <div class="card-text">
                            <h3 class="count pt-3 pb-3 mbr-fonts-style display-2">
                                  100
                            </h3>
                            <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">&nbsp;Membri attivi</h4>

                        </div>
                    </div>
                </div>


                <div class="card p-3 align-center col-12 col-md-6">
                    <div class="panel-item p-3">
                        <div class="card-img pb-3">
                            <span class="mbr-iconfont mobi-mbri-error mobi-mbri"></span>
                        </div>
                        <div class="card-text">
                            <h3 class="count pt-3 pb-3 mbr-fonts-style display-2">
                                  200
                            </h3>
                            <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">Membri non attivi</h4>

                        </div>
                    </div>
                </div>





            </div>
        </div>
   </div>
</section>

<section class="section-table cid-ra83F73ZSR" id="table1-q">



  <div class="container container-table">
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">Elenco dei membri</h2>

      <div class="table-wrapper">
        <div class="container">
          <div class="row search">
            <div class="col-md-6"></div>
            <div class="col-md-6">
                <div class="dataTables_filter">
                  <label class="searchInfo mbr-fonts-style display-7">Cerca:</label>
                  <input class="form-control input-sm" disabled="">
                </div>
            </div>
          </div>
        </div>

        <div class="container scroll">
          <table class="table isSearch" cellspacing="0">
            <thead>
              <tr class="table-heads ">




              <th class="head-item mbr-fonts-style display-7">
                      NOME</th><th class="head-item mbr-fonts-style display-7">
                      ETÀ</th><th class="head-item mbr-fonts-style display-7">
                      DATA</th><th class="head-item mbr-fonts-style display-7">
                      STIPENDIO</th></tr>
            </thead>

            <tbody>




            <tr>




              <td class="body-item mbr-fonts-style display-7">Jeanna Schmal</td><td class="body-item mbr-fonts-style display-7">44</td><td class="body-item mbr-fonts-style display-7">2016-10-17</td><td class="body-item mbr-fonts-style display-7">$317.000</td></tr><tr>




              <td class="body-item mbr-fonts-style display-7">Caren Rials</td><td class="body-item mbr-fonts-style display-7">35</td><td class="body-item mbr-fonts-style display-7">2013-04-12</td><td class="body-item mbr-fonts-style display-7">$445.500</td></tr><tr>




              <td class="body-item mbr-fonts-style display-7">Leon Rogol</td><td class="body-item mbr-fonts-style display-7">66</td><td class="body-item mbr-fonts-style display-7">2016-05-22</td><td class="body-item mbr-fonts-style display-7">$152.558</td></tr><tr>




              <td class="body-item mbr-fonts-style display-7">Shala Barrera</td><td class="body-item mbr-fonts-style display-7">70</td><td class="body-item mbr-fonts-style display-7">2016-05-15</td><td class="body-item mbr-fonts-style display-7">$459.146</td></tr></tbody>
          </table>
        </div>
        <div class="container table-info-container">
          <div class="row info">
            <div class="col-md-6">
              <div class="dataTables_info mbr-fonts-style display-7">
                <span class="infoBefore">Mostrati</span>
                <span class="inactive infoRows"></span>
                <span class="infoAfter">inserimenti</span>
                <span class="infoFilteredBefore">(filtrato da</span>
                <span class="inactive infoRows"></span>
                <span class="infoFilteredAfter"> voci totali)</span>
              </div>
            </div>
            <div class="col-md-6"></div>
          </div>
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
  <script src="assets/datatables/jquery.data-tables.min.js"></script>
  <script src="assets/datatables/data-tables.bootstrap4.min.js"></script>
  <script src="assets/theme/js/script.js"></script>


 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>
