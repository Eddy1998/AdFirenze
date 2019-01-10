<?php
session_start();
include 'conn.inc.php';
/*if(!isset($_SESSION['user']))
{
header('location: index.php');
}*/
$ssid=$_POST['ssid'];
$tipo=$_POST["tipo"];
$attivo=$_POST["attivo"];

$tessera=$_POST["tessera"];

$nome=$_POST["nome"];
$cognome=$_POST["cognome"];

$carico=$_POST["carico"];


$indirizzo=$_POST["indirizzo"];


  $citta=$_POST["citta"];


  $cap=$_POST["cap"];


  $telefono=$_POST["telefono"];


  $nazionalita=$_POST["nazionalita"];

  $sesso=$_POST["sesso"];


  $rawdate = htmlentities($_POST["nascita"]);
  $nascita = date('Y-m-d', strtotime($rawdate));


  $stato_civile=$_POST["statocivile"];


  $data_matrimonio=$_POST["matrimonio"];


  $nome_coniuge=$_POST["nome-coniuge"];

  $cognome_coniuge=$_POST["cognome-coniuge"];


  $numero_figli=$_POST["numero-figli"];


  $nome_padre=$_POST["nome-padre"];


  $nome_madre=$_POST["nome-madre"];


  $rawdate1 = htmlentities($_POST["data-battesimo"]);
  $data_battesimo = date('Y-m-d', strtotime($rawdate1));


  $luogo_battesimo=$_POST["luogo-battesimo"];

  $rawdate2 = htmlentities($_POST["data-arrivo"]);
  $data_arrivo = date('Y-m-d', strtotime($rawdate2));


  $battezzato_spirito=$_POST["battezzato-spirito"];


  $congregazione=$_POST["congregazione"];


  $osservazioni=$_POST["osservazioni"];


  $rawdate9 = htmlentities($_POST["data-diacono"]);
  $data_diacono = date('Y-m-d', strtotime($rawdate9));


  $rawdate8 = htmlentities($_POST["data-presbitero"]);
    $data_presbitero = date('Y-m-d', strtotime($rawdate8));

  $rawdate7 = htmlentities($_POST["data-evangelista"]);
  $data_evangelista = date('Y-m-d', strtotime($rawdate7));

  $rawdate6 = htmlentities($_POST["data-pastore"]);
  $data_pastore = date('Y-m-d', strtotime($rawdate6));

  $luogo_diacono=$_POST["luogo-diacono"];

  $luogo_presbitero=$_POST["luogo-presbitero"];

  $luogo_evangelista=$_POST["luogo-evangelista"];

  $luogo_pastore=$_POST["luogo-pastore"];

  $nome_figlio_1=$_POST["nome-figlio-1"];

  $cognome_figlio_1=$_POST["cognome-figlio-1"];

  $nome_figlio_2=$_POST["nome-figlio-2"];

  $cognome_figlio_2=$_POST["cognome-figlio-2"];

  $nome_figlio_3=$_POST["nome-figlio-3"];

  $cognome_figlio_3=$_POST["cognome-figlio-3"];

  $nome_figlio_4=$_POST["nome-figlio-4"];

  $cognome_figlio_4=$_POST["cognome-figlio-4"];

  $nome_figlio_5=$_POST["nome-figlio-5"];

  $cognome_figlio_5=$_POST["cognome-figlio-5"];

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
  <title>Modifica</title>
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
     var statocivile = "<?php echo  $stato_civile; ?>";
     var tipo = "<?php echo  $tipo; ?>";
     var sesso ="<?php echo $sesso; ?>";
     var nazionalita ="<?php echo $nazionalita ?>";
     var numero_figli = "<?php echo  $numero_figli; ?>";
     var battezzato_spirito = "<?php echo  $battezzato_spirito; ?>";
     var congregazione  = "<?php echo  $congregazione; ?>";
     var carico = "<?php echo  $carico; ?>"; 
     
    seleziona("opzione",tipo);
    seleziona("sesso",sesso);
    seleziona("statocivile",statocivile );
    seleziona("nazionalita", nazionalita);
    seleziona("numero", numero_figli);
    seleziona("battezzato-spirito", battezzato_spirito);
    seleziona("settore",congregazione );
    seleziona("carico",carico );
    // we define and invoke a function
  //  nascondere();
  //  nascondecons();
  //  hidebutton();
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
});
    function seleziona(id,value)
    {
      $("#"+id+" option").each(function(){
        if($(this).val()==value){
          $(this).attr("selected","selected");
           }
      });
    }
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
                <span class="navbar-caption-wrap"><a class="navbar-caption text-white display-4" href="home.php">AD Firenze</a></span>
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
                <h2 class="align-left mbr-bold mbr-white pb-3 mbr-fonts-style display-2">Modifica i dati</h2>

            </div>
        </div>
    </div>

</section>

<section class="mbr-section form3 cid-ra8rRktZ5P" id="form3-1d">






</section>

<section class="mbr-section form1 cid-ra8qCZsALE" id="membro" >

    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" data-form-type="formoid">
                    <form name="modulo" class="mbr-form" action="data/managerdb.php" method="POST" enctype="multipart/form-data">


                      <input  type="hidden" class="form-control"  name="attivo" value="<?php echo $attivo; ?>">
                      <input  type="hidden" class="form-control"  name="ssid" value="<?php echo $ssid; ?>">
                      
                      <!--<input  type="hidden" class="form-control" name="tipo" id="tipo" value="">-->
                      <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
                        <div class="row row-sm-offset">

                          <div class="col-md-4 multi-horizontal" data-for="">
                          </div>
                          <div class="col-md-4 multi-horizontal" data-for="">
                            <div class="form-group">
                            <label class="form-control-label mbr-fonts-style display-7" for="nome"><b>Tipo</b></label>
                            <select class="form-control" placeholder="scegli" id="opzione">
                            <option selected disabled>Scegli un'opzione</option>
                						<option value="membro">Membro</option>
                						<option value="congregato">Congregato</option>
                						<option value="bambino">Bambino/a</option>
                						</select>
                          </div>
                          </div>
                          <div class="col-md-4 multi-horizontal" data-for="">
                          </div>

                            <div class="col-md-3 multi-horizontal" data-for="">
                            </div>

                            <div class="col-md-3 multi-horizontal" data-for="">
                              <div class="form-group">
                                <label class="form-control-label mbr-fonts-style display-7" for="files"><b>Foto</b> (Max 60KB)</label><br>

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
                                    <input type="text" class="form-control" name="nome" data-form-field="Name" required="" id="nome" value="<?php echo $nome; ?>">
                                </div>
                            </div>
                            <div class="col-md-6 multi-horizontal" data-for="cognome">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="cognome"><b>Cognome</b></label>
                                    <input type="text" class="form-control" name="cognome" id="cognome" value="<?php echo $cognome; ?>">
                                </div>
                            </div>
                            <div class="col-md-6 multi-horizontal" data-for="indirizzo">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="indirizzo"><b>Indirizzo</b></label>
                                    <input type="text" class="form-control" name="indirizzo"  id="indirizzo" value="<?php echo $indirizzo; ?>"/>
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" data-for="Citta">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="citta"><b>Città</b></label>
                                    <input type="text" class="form-control" name="citta"  id="citta" value="<?php echo $citta; ?>">
                                </div>
                            </div>
                            <div class="col-md-2 multi-horizontal" data-for="cap">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="cap"><b>CAP</b></label>
                                    <input type="text" class="form-control" name="cap" id="cap" value="<?php echo $cap; ?>">
                                </div>
                            </div>

                            <div class="col-md-4 multi-horizontal" data-for="nascita">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="nascita"><b>Data di nascita</b></label>
                                    <input type="date" class="form-control" name="nascita"  id="nascita" maxlength="10" value="<?php echo $nascita; ?>">
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
                                    <input type="number" class="form-control" name="telefono"  id="telefono" value="<?php echo $telefono; ?>">
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
                                    <input type="date" class="form-control" name="matrimonio"  id="matrimonio" maxlength="10" value="<?php echo $data_matrimonio; ?>">
                                </div>
                            </div>
                            <div class="col-md-6 multi-horizontal" data-for="nome-coniuge">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="nome-coniuge"><b>Nome coniuge</b></label>
                                    <input type="text" class="form-control" name="nome-coniuge"  id="nome-coniuge" list="nomecon" onkeyup="opciones()" oninput="rellena()" value="<?php echo $nome_coniuge; ?>">
                                    <datalist id="nomecon">
                                    </datalist>
                                </div>
                            </div>
                            <div class="col-md-6 multi-horizontal" data-for="cognome-coniuge">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="cognome-coniuge"><b>Cognome coniuge</b></label>
                                    <input type="text" class="form-control" name="cognome-coniuge"  id="cognome-coniuge" value="<?php echo $cognome_coniuge; ?>">
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
                                    <input type="text" class="form-control" name="nome-figlio-1" id="nome-figlio-1"  list="nomefi1" onkeyup="opciones1()" oninput="rellena1()" value="<?php echo $nome_figlio_1; ?>">
                                    <datalist id="nomefi1">
                                    </datalist>
                                </div>
                            </div>
                            <div id="cfiglio1" class="col-md-6 multi-horizontal" data-for="cognome-figlio-1">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="cognome-figlio-1"><b>Cognome figlio 1</b></label>
                                    <input type="text" class="form-control" name="cognome-figlio-1" id="cognome-figlio-1" value="<?php echo $cognome_figlio_1; ?>">
                                </div>
                            </div>

                            <div id="nfiglio2" class="col-md-6 multi-horizontal" data-for="nome-figlio-2">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="nome-figlio-2"><b>Nome figlio 2</b></label>
                                    <input type="text" class="form-control" name="nome-figlio-2"  id="nome-figlio-2" list="nomefi2" onkeyup="opciones2()" oninput="rellena2()" value="<?php echo $nome_figlio_2; ?>">
                                    <datalist id="nomefi2">
                                    </datalist>
                                </div>
                            </div>
                            <div id="cfiglio2" class="col-md-6 multi-horizontal" data-for="cognome-figlio-2">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="cognome-figlio-2"><b>Cognome figlio 2</b></label>
                                    <input type="text" class="form-control" name="cognome-figlio-2"  id="cognome-figlio-2" value="<?php echo $cognome_figlio_2; ?>">
                                </div>
                            </div>
                            <div id="nfiglio3" class="col-md-6 multi-horizontal" data-for="nome-figlio-3">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="nome-figlio-3"><b>Nome figlio 3</b></label>
                                    <input type="text" class="form-control" name="nome-figlio-3" id="nome-figlio-3" list="nomefi3" onkeyup="opciones3()" oninput="rellena3()" value="<?php echo $nome_figlio_3; ?>">
                                    <datalist id="nomefi3">
                                    </datalist>
                                </div>
                            </div>
                            <div  id="cfiglio3" class="col-md-6 multi-horizontal" data-for="cognome-figlio-3">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="cognome-figlio-3"><b>Cognome figlio 3</b></label>
                                    <input type="text" class="form-control" name="cognome-figlio-3"  id="cognome-figlio-3" value="<?php echo $cognome_figlio_3; ?>">
                                </div>
                            </div>
                            <div id="nfiglio4" class="col-md-6 multi-horizontal" data-for="nome-figlio-4">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="nome-figlio-4"><b>Nome figlio 4</b></label>
                                    <input type="text" class="form-control" name="nome-figlio-4"  id="nome-figlio-4" list="nomefi4" onkeyup="opciones4()" oninput="rellena4()" value="<?php echo $nome_figlio_4; ?>">
                                    <datalist id="nomefi4">
                                    </datalist>
                                </div>
                            </div>
                            <div id="cfiglio4" class="col-md-6 multi-horizontal" data-for="cognome-figlio-4">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="cognome-figlio-4"><b>Cognome figlio 4</b></label>
                                    <input type="text" class="form-control" name="cognome-figlio-4"  id="cognome-figlio-4" value="<?php echo $cognome_figlio_4; ?>">
                                </div>
                            </div>
                            <div id="nfiglio5" class="col-md-6 multi-horizontal" data-for="nome-figlio-5">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="nome-figlio-5"><b>Nome figlio 5</b></label>
                                    <input type="text" class="form-control" name="nome-figlio-5"  id="nome-figlio-5" list="nomefi5" onkeyup="opciones5()" oninput="rellena5()" value="<?php echo $nome_figlio_5; ?>">
                                    <datalist id="nomefi5">
                                    </datalist>
                                </div>
                            </div>
                            <div id="cfiglio5" class="col-md-6 multi-horizontal" data-for="cognome-figlio-5">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="cognome-figlio-5"><b>Cognome figlio 5</b></label>
                                    <input type="text" class="form-control" name="cognome-figlio-5"  id="cognome-figlio-5" value="<?php echo $cognome_figlio_5; ?>">
                                </div>
                            </div>
                            <div class="col-md-8 multi-horizontal" >
                            </div>
                            <div class="col-md-6 multi-horizontal" data-for="nome-padre">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="nome-padre"><b>Nome e cognome padre</b></label>
                                    <input type="text" class="form-control" name="nome-padre"  id="nome-padre" list="nomepadre" onkeyup="opcionespadre()" oninput="rellenapadre()" value="<?php echo $nome_padre; ?>">
                                    <datalist id="nomepadre">
                                    </datalist>
                                </div>
                            </div>
                            <div class="col-md-6 multi-horizontal" data-for="nome-madre">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="nome-madre"><b>Nome e cognome madre</b></label>
                                    <input type="text" class="form-control" name="nome-madre"  id="nome-madre" list="nomemadre" onkeyup="opcionesmadre()" oninput="rellenamadre()" value="<?php echo $nome_madre; ?>">
                                    <datalist id="nomemadre">
                                    </datalist>
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" data-for="data-battesimo">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="data-battesimo"><b>Data di battesimo</b></label>
                                    <input type="date" class="form-control" name="data-battesimo" id="data-battesimo" maxlength="10" value="<?php echo $data_battesimo; ?>">
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" data-for="luogo-battesimo">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="luogo-battesimo"><b>Luogo di battesimo</b></label>
                                    <input type="text" class="form-control" name="luogo-battesimo" id="luogo-battesimo" value="<?php echo $luogo_battesimo; ?>">
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
                                    <input type="date" class="form-control" name="data-arrivo" id="data-arrivo" maxlength="10" value="<?php echo $data_arrivo; ?>">
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
                                    <input type="text" class="form-control" name="tessera"  maxlength="6"  id="numero-tessera" value="<?php echo $tessera; ?>">
                                </div>
                            </div>
                            <div class="col-md-4 multi-horizontal" data-for="carico">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="carico"><b>Carico in chiesa</b></label>
                                    <select  class="form-control" name="carico"  required="" id="carico">
                                    <option value="" disabled selected>Scegli un'opzione..</option>
                                    <option value="Pastore">Pastore</option>
                                   <option value="Evangelista">Evangelista</option>
                                   <option value="Presbitero">Presbitero</option>
                                   <option value="Diacono">Diacono</option>
                                   <option value="Diaconessa">Diaconessa</option>
                                   <option value="Cooperatore">Cooperatore</option>
                                   <option value="Cooperatrice">Cooperatrice</option>
                                   <option value="Membro">Membro</option>
                                    </select>
                                </div>
                            </div>

                            <div id="datadiacono" class="col-md-6 multi-horizontal" data-for="data-diacono">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="data-diacono"><b>Data consacrazione a Diacono</b></label>
                                    <input type="date" class="form-control" name="data-diacono" id="data-diacono" value="<?php echo $data_diacono; ?>">
                                </div>
                            </div>
                            <div id="luogodiacono" class="col-md-6 multi-horizontal" data-for="luogo-diacono">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="luogo-diacono"><b>Luogo di consacrazione - Diacono</b></label>
                                    <input type="text" class="form-control" name="luogo-diacono" id="luogo-diacono" value="<?php echo $luogo_diacono; ?>">
                                </div>
                            </div>

                            <div id="datapresbitero" class="col-md-6 multi-horizontal" data-for="data-presbitero">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="data-presbitero"><b>Data consacrazione a Presbitero</b></label>
                                    <input type="date" class="form-control" name="data-presbitero"  id="data-presbitero" value="<?php echo $data_presbitero; ?>">
                                </div>
                            </div>
                            <div id="luogopresbitero" class="col-md-6 multi-horizontal" data-for="luogo-presbitero">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="luogo-presbitero"><b>Luogo di consacrazione - Presbitero</b></label>
                                    <input type="text" class="form-control" name="luogo-presbitero"  id="luogo-presbitero" value="<?php echo $luogo_presbitero; ?>">
                                </div>
                            </div>
                            <div id="dataevangelista" class="col-md-6 multi-horizontal" data-for="data-evangelista">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="data-evangelista"><b>Data consacrazione a Evangelista</b></label>
                                    <input type="date" class="form-control" name="data-evangelista" id="data-evangelista" value="<?php echo $data_evangelista; ?>">
                                </div>
                            </div>
                            <div  id="luogoevangelista" class="col-md-6 multi-horizontal" data-for="luogo-evangelista">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="luogo-evangelista"><b>Luogo di consacrazione - Evangelista</b></label>
                                    <input type="text" class="form-control" name="luogo-evangelista"  id="luogo-evangelista" value="<?php echo $luogo_evangelista; ?>">
                                </div>
                            </div>
                            <div id="datapastore" class="col-md-6 multi-horizontal" data-for="data-pastore">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="data-pastore"><b>Data consacrazione a Pastore</b></label>
                                    <input type="date" class="form-control" name="data-pastore"  id="data-pastore" value="<?php echo $data_pastore; ?>">
                                </div>
                            </div>
                            <div id="luogopastore" class="col-md-6 multi-horizontal" data-for="luogo-pastore">
                                <div class="form-group">
                                    <label class="form-control-label mbr-fonts-style display-7" for="luogo-pastore"><b>Luogo di consacrazione - Pastore</b></label>
                                    <input type="text" class="form-control" name="luogo-pastore"  id="luogo-pastore" value="<?php echo $luogo_pastore; ?>">
                                </div>
                            </div>


                        </div>
                        <div class="form-group" data-for="osservazioni">
                            <label class="form-control-label mbr-fonts-style display-7" for="osservazioni"><b>Osservazioni</b></label>
                            <textarea type="text" class="form-control" name="osservazioni" maxlength="500" rows="6"  id="osservazioni" value=""><?php echo $osservazioni; ?></textarea>
                        </div>
                        <div class="row row-sm-offset">

                          <div class="col-md-2 multi-horizontal" >
                          </div>
                          <div class="col-md-4 multi-horizontal" >
                            <!-- da rivedere se non funziona, cambiato a type "button"-->
                            <span class="input-group-btn"><button  type="button" onClick="window.location.href='visualizza'" class="btn  btn-form display-4"  style="background-color: #232323;color:white">ANNULLA</button></span>

                          </div>
                          <div class="col-md-4 multi-horizontal" >
                            <span class="input-group-btn"><button  type="submit" class="btn btn-form display-4" name="salvamodifica" style="background-color: #0066ff;color:white">SALVA</button></span>

                          </div>
                          <div class="col-md-2 multi-horizontal" >
                          </div>
                        </div>

                        </form>
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
                    ///cambiato dimensione massima accettabile
                      if(file.size>1000000)
                      {
                        $('#erroredimensione').text("Immagine con dimensione superiore a 60KB, l'immagine non verra' inserita");

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
