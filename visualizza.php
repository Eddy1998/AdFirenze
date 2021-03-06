<?php
session_start();
include 'conn.inc.php';
$dbh = new PDO($conn, $user, $pass);
/*if(!isset($_SESSION['user']))
{
header('location: index.php');
}*/
if(!isset($_GET['id']))
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
  <script type="text/javascript" src="js/dataprofile.js"></script>
  <script type="text/javascript">
  $(document).ready(function(){
        //$('#mymodal').modal(focus);
    });
       function goBack()
    {
      window.history.back()
    }

    function elimina()
    {
        $('#mymodal').modal('show');
        $('#conferma').on('click', function () {
        var tipo = $("#tipo2").val();
          var valore= $("#utentedaeliminare").val();
          $.post("data/dati.php",{'eliminaregistrato': 1, 'id' : valore }, function(response) {
            var json = JSON.parse(response);

            if(json=="OK")
            {
                  if(tipo=="membro")
                  {
                      window.location="membri?deleted=1";
                  }
                  else if(tipo=="congregato")
                  {
                    window.location="congregati?deleted=1";
                  }
                  else {
                    window.location="bambini?deleted=1";
                  }
            }
          });
      });


    }
  //<button type="button" class="btn btn-danger" onclick="goBack()">Correggi</button>
  </script>


</head>
<body>
  <section class="menu cid-ra8sZROvHU" once="menu" id="menu1-1f">



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

<section class="engine"><a href=""></a></section><section class="mbr-section info2 cid-ra8sZQWUdy" id="info2-1e">





    <div class="container">
        <div class="row main justify-content-center">
            <div class="media-container-column col-12 col-lg-3 col-md-4">

            </div>
            <div class="media-container-column title col-12 col-lg-7 col-md-6">
                <h2 class="align-right mbr-bold mbr-white pb-3 mbr-fonts-style display-2">Dati di <b id="nomege"></b></h2>
                <h3 class="mbr-section-subtitle align-right mbr-light mbr-white mbr-fonts-style display-5">Stai vedendo i dati di <b id="utente"></b>, puoi modificarli ma non eliminarli</h3>
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

                <li class="nav-item mbr-fonts-style" id="disattiva">
                <form action="attivita" method="POST">
                    <input type="hidden"  name="ssid" value="<?php echo $_GET['id']; ?>"></input>
                   <span class="input-group-btn"><button href="" type="submit" name="disattivautente" class="btn btn-form display-4" style="background-color:#dc3545; color:white">DISATTIVA</button></span>
                 </form>
                </li>

                <li class="nav-item mbr-fonts-style" id="attiva">
                  <form action="attivita" method="POST">
                    <input type="hidden"  name="ssid" value="<?php echo $_GET['id']; ?>"></input>
                <span class="input-group-btn"><button href="" type="submit" name="attivautente"  class="btn btn-form display-4" style="background-color:#28a745; color:white">ATTIVA</button></span>
              </form>
                </li>
                <li class="nav-item mbr-fonts-style" >
                  <form action="pdf" method="POST">
                    <input type="hidden"  name="ssid" value="<?php echo $_GET['id']; ?>"></input>

                <span class="input-group-btn"><button href="" type="submit" name="stampautente" class="btn btn-form btn-black display-4">STAMPA</button></span>
              </form>
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
                <h5 class="align-center" style="color:red" id="mexatt"></h5>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">

                    <form name="modulo" class="mbr-form" action="modifica" method="post">

                            <?php if(isset($_GET['id']))
                              {
                            ?>
                              <input type="hidden" id="id" name="ssid" value="<?php echo $_GET['id']; ?>"></input>
                              <?php
                            }
                            ?>
                          <div class="row row-sm-offset">

                            <div class="col-md-4 multi-horizontal" data-for="">
                            </div>
                            <div class="col-md-4 multi-horizontal" data-for="">
                              <div class="form-group">
                              <label class="form-control-label mbr-fonts-style display-7" style="color:gray"><b>Tipo</b></label><br>
                              <label class="form-control-label mbr-fonts-style display-7"  ><b id="tipo"> </b></label>

                            </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" data-for="">
                            </div>
                            <div class="col-md-3 multi-horizontal" >
                            </div>

                            <div class="col-md-3 multi-horizontal" >
                              <div class="form-group">
                                <label class="form-control-label mbr-fonts-style display-7" style="color:gray"><b>Foto</b></label><br>

                              <div id="foto">
                                <?php if(isset($_GET['id']))
                                  {
                                    $id=$_GET['id'];
                                    $sql3 =$dbh->prepare("SELECT * FROM immagini WHERE md5(id_persona)=:id");
                										$sql3->bindValue(":id", $id);
                                    $sql3->execute();
                                    if ($sql3->rowCount()>0)
                                    {
                                      $ris = $sql3->fetch(); ?>
                                      <img src="data: <?php echo $ris['type']; ?>;base64,<?php echo base64_encode($ris['img']); ?>"  height="150px" alt="foto" />
                                      <?php
                                    }
                                    else { ?>
                                            <label class="form-control-label mbr-fonts-style display-7"  ><b> Nessuna foto inserita</b></label>
                                  <?php  }
                                ?>
                                  <input type="hidden" id="id" name="id" value="<?php echo $_GET['id']; ?>"></input>
                                  <?php
                                }
                                ?>
                              </div>
                              </div>
                            </div>


                              <div class="col-md-3 multi-horizontal" data-for="" id="bottoni-file">

                              </div>


                            <div class="col-md-6 multi-horizontal" >
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7"  style="color:gray"><b>Nome</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="nome"> </b></label>
                                </div>
                            </div>
                            <div class="col-md-6 multi-horizontal" >
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" style="color:gray"><b>Cognome</b></label><br>
                                      <label class="form-control-label mbr-fonts-style display-7" ><b id="cognome"> </b></label>

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
                            <div class="col-md-3 multi-horizontal" >
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" style="color:gray"><b>Batt.  Spirito Santo</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="battezzato-spirito"> </b></label>

                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7"  style="color:gray"><b>Data di arrivo in chiesa</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="data-arrivo"> </b></label>

                                </div>
                            </div>
                            <div class="col-md-5 multi-horizontal">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" style="color:gray"><b>Congregazione</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="congregazione"> </b></label>
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
                            <div id="datapastore" class="col-md-6 multi-horizontal" >
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" style="color:gray"><b>Data consacrazione a Pastore</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="data-pastore"> </b></label>

                                </div>
                            </div>
                            <div id="luogopastore" class="col-md-6 multi-horizontal">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" style="color:gray"><b>Luogo di consacrazione - Pastore</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="luogo-pastore"> </b></label>

                                </div>
                              </div>
                              <div id="datamissionario" class="col-md-6 multi-horizontal" >
                                  <div class="form-group">
                                      <label class="form-control-label mbr-fonts-style display-7" style="color:gray"><b>Data consacrazione a Missionario</b></label><br>
                                      <label class="form-control-label mbr-fonts-style display-7"  ><b id="data-missionario"> </b></label>

                                  </div>
                              </div>
                              <div id="luogomissionario" class="col-md-6 multi-horizontal">
                                  <div class="form-group">
                                      <label class="form-control-label mbr-fonts-style display-7" style="color:gray"><b>Luogo di consacrazione - Missionario</b></label><br>
                                      <label class="form-control-label mbr-fonts-style display-7"  ><b id="luogo-missionario"> </b></label>

                                  </div>
                                </div>
                              <div id="dataevangelista" class="col-md-6 multi-horizontal">
                                  <div class="form-group">
                                      <label class="form-control-label mbr-fonts-style display-7" style="color:gray"><b>Data consacrazione a Evangelista</b></label><br>
                                      <label class="form-control-label mbr-fonts-style display-7"  ><b id="data-evangelista"> </b></label>

                                  </div>
                              </div>
                              <div  id="luogoevangelista" class="col-md-6 multi-horizontal" >
                                  <div class="form-group">
                                      <label class="form-control-label mbr-fonts-style display-7" style="color:gray"><b>Luogo di consacrazione - Evangelista</b></label><br>
                                      <label class="form-control-label mbr-fonts-style display-7"  ><b id="luogo-evangelista"> </b></label>

                                  </div>
                              </div>
                              <div id="datapresbitero" class="col-md-6 multi-horizontal" >
                                  <div class="form-group">
                                      <label class="form-control-label mbr-fonts-style display-7" style="color:gray" ><b>Data consacrazione a Presbitero</b></label><br>
                                      <label class="form-control-label mbr-fonts-style display-7"  ><b id="data-presbitero"> </b></label>

                                  </div>
                              </div>
                              <div id="luogopresbitero" class="col-md-6 multi-horizontal" >
                                  <div class="form-group">
                                      <label class="form-control-label mbr-fonts-style display-7" style="color:gray" ><b>Luogo di consacrazione - Presbitero</b></label><br>
                                      <label class="form-control-label mbr-fonts-style display-7"  ><b id="luogo-presbitero"> </b></label>

                                  </div>
                              </div>
                            <div id="datadiacono" class="col-md-6 multi-horizontal" >
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" style="color:gray"><b>Data consacrazione a Diacono</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="data-diacono"> </b></label>

                                </div>
                            </div>
                            <div id="luogodiacono" class="col-md-6 multi-horizontal" >
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" style="color:gray" ><b>Luogo di consacrazione - Diacono</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="luogo-diacono"> </b></label>

                                </div>
                            </div>
                            <div id="datacooperatore" class="col-md-6 multi-horizontal" >
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7"  style="color:gray"><b>Data consacrazione a Cooperatore</b></label><br>
                                  <label class="form-control-label mbr-fonts-style display-7"  ><b id="data-cooperatore"> </b></label>
                                </div>
                            </div>
                            <div id="luogocooperatore" class="col-md-6 multi-horizontal" >
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7"  style="color:gray"><b>Luogo di consacrazione - Cooperatore</b></label><br>
                                    <label class="form-control-label mbr-fonts-style display-7"  ><b id="luogo-cooperatore"> </b></label>
                                </div>
                            </div>





                        </div>
                        <div class="form-group" >

                            <label class="form-control-label mbr-fonts-style display-7"  style="color:gray"><b>Osservazioni</b></label><br>
                              <output class="form-control-label mbr-fonts-style display-7" style="display: inline;" ><b id="osservazioni">
                              </b></output>

                        </div>
                        <input  type="hidden" class="form-control"  name="attivo" id="attivo2">
                        <input  type="hidden" class="form-control" name="tipo" id="tipo2" >
                        <input  type="hidden" class="form-control" name="id" id="id2" >
                        <input type="hidden" class="form-control" name="nome"  id="nome2" >
                        <input type="hidden" class="form-control" name="cognome" id="cognome2">
                        <input type="hidden" class="form-control" name="indirizzo"  id="indirizzo2" />
                        <input type="hidden" class="form-control" name="citta"  id="citta2">
                        <input type="hidden" class="form-control" name="cap" id="cap2">
                        <input type="hidden" class="form-control" name="nascita"  id="nascita2">
                        <input type="hidden" class="form-control" name="sesso"  id="sesso2">
                        <input type="hidden" class="form-control" name="telefono"  id="telefono2">
                       <input type="hidden" class="form-control" name="nazionalita"  id="nazionalita2">
                       <input type="hidden" name="statocivile"  id="statocivile2">
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
                      <input type="hidden" class="form-control" name="congregazione" id="congregazione2" >
                       <input type="hidden" class="form-control" name="battezzato-spirito" id="battezzato-spirito2" >
                      <input type="hidden" class="form-control" name="tessera" id="numero-tessera2">
                       <input type="hidden" class="form-control" name="carico" id="carico2">
                       <input type="hidden" class="form-control" name="data-cooperatore" id="data-cooperatore2">
                       <input type="hidden" class="form-control" name="luogo-cooperatore" id="luogo-cooperatore2">
                      <input type="hidden" class="form-control" name="data-diacono" id="data-diacono2">
                      <input type="hidden" class="form-control" name="luogo-diacono" id="luogo-diacono2">
                      <input type="hidden" class="form-control" name="data-presbitero"  id="data-presbitero2">
                      <input type="hidden" class="form-control" name="luogo-presbitero"  id="luogo-presbitero2">
                      <input type="hidden" class="form-control" name="data-evangelista" id="data-evangelista2">
                      <input type="hidden" class="form-control" name="luogo-evangelista"  id="luogo-evangelista2">
                      <input type="hidden" class="form-control" name="data-missionario" id="data-missionario2">
                      <input type="hidden" class="form-control" name="luogo-missionario"  id="luogo-missionario2">
                      <input type="hidden" class="form-control" name="data-pastore"  id="data-pastore2">
                      <input type="hidden" class="form-control" name="luogo-pastore"  id="luogo-pastore2">
                      <textarea type="text" class="form-control" name="osservazioni"  id="osservazioni2" style="display:none;"></textarea>


                        <span class="input-group-btn"><button href="" type="submit" class="btn btn-form btn-black display-4">MODIFICA</button></span>
                    </form>
                    <br>
                    <br>
                      <div class="row">
                      <div class="col-md-2">
                      </div>
                      <div class="col-md-8">
                        <div class="alert alert-danger" role="alert" style="background-color:#f8d7da; color:#491217; margin-top:20px">
                      <h4 class="alert-heading"><b>Danger zone</b></h4>
                      <p id="eliminazione">Elimina </p>
                      <p class="mb-0">Dopo questa operazione, i dati non potranno essere recuperati</p>
                      <hr>
                      <input type="hidden" id="utentedaeliminare">
                      <span class="input-group-btn" ><button href="" type="submit" class="btn btn-form display-4" style="background-color:#dc3545; color:white" onclick="elimina();">ELIMINA</button></span>
                    </div>
                      </div>
                    <div class="col-md-2">
                    </div>
                  </div>

            </div>
        </div>
    </div>


    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg" id="notifica" style="display:none">
    </button>

    <div id="mymodal" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog ">
       <div class="modal-content">
          <div class="modal-content">
          <div class="modal-header">

    		<div class="input-group">
    		  <div class="input-group-prepend">
    			<h4  >Conferma Eliminazione</h4>
    		  </div>
    		</div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body "><div class="input-group">
        	  <div class="table-responsive-xl">

                <h5>Confermi l'eliminazione?<br>I dati non potranno essere recuperati.</h5>
        	</div>
        	</div>
          </div>
          <div class="modal-footer">

            <button id="conferma" type="button" class="btn btn-secondary" data-dismiss="modal">Conferma</button>
            <button  id="chiudi" type="button" class="btn btn-primary" data-dismiss="modal" >Annulla</button>
          </div>
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
  <script src="assets/mbr-tabs/mbr-tabs.js"></script>
  <script src="assets/theme/js/script.js"></script>


 <div id="scrollToTop" class="scrollToTop mbr-arrow-up"><a style="text-align: center;"><i></i></a></div>
    <input name="animation" type="hidden">
  </body>
</html>
