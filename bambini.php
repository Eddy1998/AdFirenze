<?php
session_start();
include 'data/funzioni.php';
include 'conn.inc.php';
/*if(!isset($_SESSION['user']))
{
header('location: index.php');
}*/
?>
<!DOCTYPE html>
<html >
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/img-1583-122x122.png" type="image/x-icon">
  <meta name="description" content="Site Generator Description">
  <title>Bambini</title>
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
          var Div, contenuto,data;

          <?php $res = @$_GET['success'];
          if($res==1)
          {
            ?>
            Div = document.getElementById("messaggio");
            contenuto = document.createTextNode("BAMBINO AGGIUNTO CON SUCCESSO");
            Div.append(contenuto);
            $('#messaggio').delay(5000).fadeOut();
          <?php }
          else if($res==9) { ?>
            Div = document.getElementById("messaggio");
            contenuto = document.createTextNode("ERRORE DURANTE INSERIMENTO");
            document.getElementById('messaggio').style.color = 'red';
            Div.append(contenuto);
            $('#messaggio').delay(5000).fadeOut();
          <?php } ?>
        });

        function visualizza(id)
        {
          window.location="visualizza?id="+id;
        }
</script>


</head>
<body>
  <section class="menu cid-ra86ZZ072n" once="menu" id="menu1-y">


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
    </nav>
</section>

<section class="engine"><a href=""></a></section><section class="mbr-section info2 cid-ra86ZWJarH" id="info2-w">





    <div class="container">
        <div class="row main justify-content-center">
            <div class="media-container-column col-12 col-lg-3 col-md-4">
                <div class="mbr-section-btn align-left py-4"><a class="btn btn-primary display-4" href="nuovo.php?new=B"><span class="mobi-mbri mobi-mbri-plus mbr-iconfont mbr-iconfont-btn"></span>Nuovo<br>
                    </a></div>
            </div>
            <div class="media-container-column title col-12 col-lg-7 col-md-6">
                <h2 class="align-right mbr-bold mbr-white pb-3 mbr-fonts-style display-2">
                    Sezione Bamini</h2>
                <h3 class="mbr-section-subtitle align-right mbr-light mbr-white mbr-fonts-style display-5">
                    Gestisci i dati anagrafici dei bambini</h3>
                <h3 class="mbr-section-subtitle align-right mbr-light mbr-white mbr-fonts-style display-5" >
                      <b id="messaggio"></b></h3>
            </div>
        </div>
    </div>
</section>

<section class="counters1 counters cid-ra86ZXyZJa" id="counters1-x">





    <div class="container">
        <h2 class="mbr-section-title pb-3 align-center mbr-fonts-style display-2">
            In questo momento ci sono</h2>


        <div class="container pt-4 mt-2">
            <div class="media-container-row">
                <div class="card p-3 align-center col-12 col-md-6">
                    <div class="panel-item p-3">
                        <div class="card-img pb-3">
                            <span class="mbr-iconfont mobi-mbri-users mobi-mbri"></span>
                        </div>

                        <div class="card-text">
                            <h3 class="count pt-3 pb-3 mbr-fonts-style display-2">
                                  <?php echo visualizza("BB"); ?>
                            </h3>
                            <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">Bambini in chiesa</h4>

                        </div>
                    </div>
                </div>








            </div>
        </div>
   </div>
</section>

<section class="section-table cid-ra86ZZCJxL" id="table1-z">



  <div class="container container-table">
      <h2 class="mbr-section-title mbr-fonts-style align-center pb-3 display-2">Elenco dei bamibini</h2>

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
                      Nome</th>
             <th class="head-item mbr-fonts-style display-7">
                      Cognome</th>
             <th class="head-item mbr-fonts-style display-7">
                      Età</th>
             <th class="head-item mbr-fonts-style display-7">
                      Data di Nascita</th>
                <th class="head-item mbr-fonts-style display-7">
                      Congregazione</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $dbh = new PDO($conn,$user,$pass);
                $sqld =$dbh->prepare("SELECT *, md5(id) AS ssid, DATE_FORMAT(p.data_nascita,  '%d-%m-%Y' ) AS data_di_nascita FROM persone p WHERE p.tipo_persona='bambino' ORDER BY p.nome ASC;");
                $sqld->execute();
                while ($row=$sqld->fetch()) {


                   $eta = calcola($row['data_di_nascita']);


                    echo '<tr onclick="visualizza(\'' . $row['ssid'] .'\');">';
                    echo "<td class='body-item mbr-fonts-style display-7'>" . $row['nome'] .    "</td>";
                    echo "<td class='body-item mbr-fonts-style display-7'>" . $row['cognome'] . "</td>";
                    echo "<td class='body-item mbr-fonts-style display-7'>" . $eta. "</td>";
                    echo "<td class='body-item mbr-fonts-style display-7'>" . $row['data_di_nascita'] . "</td>";
                  echo "<td class='body-item mbr-fonts-style display-7'>" . $row['congregazione'] . "</td>";
                    echo "</tr>";
                }

              ?>

            </tbody>
          </table>
        </div>
        <div class="container table-info-container">
          <div class="row info">
            <div class="col-md-6">
              <div class="dataTables_info mbr-fonts-style display-7">
                <span class="infoBefore">Totale:</span>
                <span class="inactive infoRows"></span>
                <span class="infoAfter">bambini</span>
                <span class="infoFilteredBefore"></span>
                <span class="inactive infoRows"></span>
                <span class="infoFilteredAfter"></span>
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
