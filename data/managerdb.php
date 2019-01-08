<?php
session_start();

  include ('conn.inc.php');
  try
  {
    function redirect($tipo, $success)
    {
      ?>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script type="text/javascript">
          $(document).ready(function(){
            $.ajax({
            url: 'dati.php',
            type: 'POST',
            data: {
              'CONTA' : 1,
            },
            success: function(response){
              data = JSON.parse(response);
              console.log(data);
             var totale = data.total;
             var attivi_m = data.attivo_m;
             var non_attivi_m = data.non_attivo_m;
             var attivi_c=data.attivo_c;
             var non_attivi_c=data.non_attivo_c;
             var bambino = data.bambino;
             <?php
             if($success=="OK" && $tipo=="membro")
             {
               ?>
                   window.location="membri?ma="+attivi_m+"&mn="+non_attivi_m+"&success=1";
               <?php
             }
              else if ($success=="OK" && $tipo=="congregato")
              {
                ?>
                   window.location="congregati?ca="+attivi_c+"&cn="+non_attivi_c+"&success=1";
                <?php
              }
              else if ($success=="OK" && $tipo=="bambino")
              {
                ?>
                  window.location="bambini?bb="+bambino+"&success=1";
                <?php
              }
              else if ($success=="KO" && $tipo=="membro")
              {
                ?>
                   window.location="membri?ma="+attivi_m+"&mn="+non_attivi_m+"&err=9";
                <?php
              }
              else if ($success=="KO" && $tipo=="congregato")
              {
                ?>
                   window.location="congregati?ca="+attivi_c+"&cn="+non_attivi_c+"&err=9";
                <?php
              }
              else if ($success=="KO" && $tipo=="bambino")
              {
                ?>
                    window.location="bambini?bb="+bambino+"&err=9";
                <?php
              }
              ?>
            }
            });
          });
      </script>
      <?php
    }
    function stampaok($tipo)
    {
      redirect($tipo,"OK");
    }
    function stampako($tipo)
    {
      redirect($tipo,"KO");
    }
      $dbh = new PDO($conn,$user,$pass);
      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      if(isset($_POST['AGGIORNA']))
      { 
        $ssid=$_POST['ssid'];
        $tipo=$_POST["tipo"];
        $attivo=$_POST["attivo"];
        if (empty($_POST["tessera"])){
          $tessera =NULL;
        }
        else {
        $tessera=$_POST["tessera"];
        }
        $nome=$_POST["nome"];
        $cognome=$_POST["cognome"];
        if (empty($_POST["carico"])){
          $carico =NULL;
        }
        else {
        $carico=$_POST["carico"];
        }
        if (empty($_POST["indirizzo"])){
          $indirizzo =NULL;
        }
        else {
        $indirizzo=$_POST["indirizzo"];
        }
        if (empty($_POST["citta"])){
          $citta =NULL;
        }
        else {
          $citta=$_POST["citta"];
        }
        if (empty($_POST["cap"])){
          $cap=NULL;
        }
        else {
          $cap=$_POST["cap"];
        }
        if (empty($_POST["telefono"])){
          $telefono=NULL;
        }
        else {
          $telefono=$_POST["telefono"];
        }
        if (empty($_POST["nazionalita"])){
          $nazionalita=NULL;
        }
        else {
          $nazionalita=$_POST["nazionalita"];
        }
        if (empty($_POST["sesso"])){
          $sesso=NULL;
        }
        else {
          $sesso=$_POST["sesso"];
        }
        if (empty($_POST["nascita"])){
          $nascita=NULL;
        }
        else {
          $rawdate = htmlentities($_POST["nascita"]);
          $nascita = date('Y-m-d', strtotime($rawdate));
        }
        if (empty($_POST["stato-civile"])){
          $stato_civile=NULL;
        }
        else {
          $stato_civile=$_POST["stato-civile"];
        }
        if (empty($_POST["matrimonio"])){
          $data_matrimonio=NULL;
        }
        else {
          $data_matrimonio=$_POST["matrimonio"];
        }
        if (empty($_POST["nome-coniuge"])){
          $nome_coniuge=NULL;
        }
        else {
          $nome_coniuge=$_POST["nome-coniuge"];
        }
        if (empty($_POST["cognome-coniuge"])){
          $cognome_coniuge=NULL;
        }
        else {
          $cognome_coniuge=$_POST["cognome-coniuge"];
        }
        if (empty($_POST["numero-figli"])){
          $numero_figli='0';
        }
        else {
          $numero_figli=$_POST["numero-figli"];
        }
        if (empty($_POST["nome-padre"])){
          $nome_padre=NULL;
        }
        else {
          $nome_padre=$_POST["nome-padre"];
        }
        if (empty($_POST["nome-madre"])){
          $nome_madre=NULL;
        }
        else {
          $nome_madre=$_POST["nome-madre"];
        }
        if (empty($_POST["data-battesimo"])){
          $data_battesimo=NULL;
        }
        else {
          $rawdate1 = htmlentities($_POST["data-battesimo"]);
          $data_battesimo = date('Y-m-d', strtotime($rawdate1));
        }
        if (empty($_POST["luogo-battesimo"])){
          $luogo_battesimo=NULL;
        }
        else {
          $luogo_battesimo=$_POST["luogo-battesimo"];
        }
        if (empty($_POST["data-arrivo"])){
          $data_arrivo=NULL;
        }
        else {
          $rawdate2 = htmlentities($_POST["data-arrivo"]);
          $data_arrivo = date('Y-m-d', strtotime($rawdate2));
        }
        if (empty($_POST["battezzato-spirito"])){
          $battezzato_spirito=NULL;
        }
        else {
          $battezzato_spirito=$_POST["battezzato-spirito"];
        }
        if (empty($_POST["settore"])){
          $congregazione=NULL;
        }
        else {
          $congregazione=$_POST["settore"];
        }
        if (empty($_POST["osservazioni"])){
          $osservazioni=NULL;
        }
        else {
          $osservazioni=$_POST["osservazioni"];
        }
      $query=$dbh->prepare("UPDATE persone SET tipo_persona=:tipo_persona, attivo=:attivo, numero_tessera=:numero_tessera, congregazione=:congregazione, nome=:nome, cognome=:cognome, carico_in_chiesa=:carico_in_chiesa, indirizzo=:indirizzo, citta=:citta, cap=:cap, telefono=:telefono, nazionalita=:nazionalita, sesso=:sesso, data_nascita=:data_nascita, stato_civile=:stato_civile, data_matrimonio=:data_matrimonio, nome_coniuge=:nome_coniuge, cognome_coniuge=:cognome_coniuge, numero_figli=:numero_figli, nome_padre=:nome_padre, nome_madre=:nome_madre, data_battesimo=:data_battesimo, luogo_battesimo=:luogo_battesimo, data_arrivo_in_chiesa=:data_arrivo_in_chiesa, battezzato_con_spirito_santo=:battezzato_con_spirito_santo, osservazioni=:osservazioni
      WHERE md5(id)=:id"); 
    /*  $query=$dbh->prepare("INSERT INTO persone(tipo_persona, attivo, numero_tessera,congregazione, nome, cognome, carico_in_chiesa, indirizzo, citta, cap, telefono, nazionalita, sesso, data_nascita, stato_civile, data_matrimonio, nome_coniuge, cognome_coniuge, numero_figli, nome_padre,  nome_madre,  data_battesimo, luogo_battesimo, data_arrivo_in_chiesa, battezzato_con_spirito_santo, osservazioni)
      VALUES(:tipo_persona,:attivo,:numero_tessera,:congregazione, :nome, :cognome, :carico, :indirizzo, :citta, :cap, :telefono, :nazionalita, :sesso, :data_nascita, :stato_civile, :data_matrimonio, :nome_coniuge, :cognome_coniuge, :numero_figli, :nome_padre, :nome_madre,:data_battesimo,:luogo_battesimo,:data_arrivo_in_chiesa,:battezzato_con_spirito_santo,:osservazioni);");
      */
      $query->bindValue(":id",$ssid);  
      $query->bindValue(":tipo_persona",$tipo);
      $query->bindValue(":attivo",$attivo);
      $query->bindValue(":numero_tessera",$tessera);
      $query->bindValue(":congregazione",$congregazione);
      $query->bindValue(":nome",$nome);
      $query->bindValue(":cognome",$cognome);
      $query->bindValue(":carico",$carico);
      $query->bindValue(":indirizzo",$indirizzo);
      $query->bindValue(":citta",$citta);
      $query->bindValue(":cap",$cap);
      $query->bindValue(":telefono",$telefono);
      $query->bindValue(":nazionalita",$nazionalita);
      $query->bindValue(":sesso",$sesso);
      $query->bindValue(":data_nascita",$nascita);
      $query->bindValue(":stato_civile",$stato_civile);
      $query->bindValue(":data_matrimonio",$data_matrimonio);
      $query->bindValue(":nome_coniuge",$nome_coniuge);
      $query->bindValue(":cognome_coniuge",$cognome_coniuge);
      $query->bindValue(":numero_figli",$numero_figli);
      $query->bindValue(":nome_padre",$nome_padre);
      $query->bindValue(":nome_madre",$nome_madre);
      $query->bindValue(":data_battesimo",$data_battesimo);
      $query->bindValue(":luogo_battesimo",$luogo_battesimo);
      $query->bindValue(":data_arrivo_in_chiesa",$data_arrivo);
      $query->bindValue(":battezzato_con_spirito_santo",$battezzato_spirito);
      $query->bindValue(":osservazioni",$osservazioni);
      if(!$query->execute())
      {
        stampako($tipo);
      }
      else {
        $query=$dbh->prepare("SELECT id FROM persone WHERE nome=:nome AND cognome=:cognome AND carico_in_chiesa=:carico LIMIT 1;");
        $query->bindValue(":nome",$nome);
        $query->bindValue(":cognome",$cognome);
        $query->bindValue(":carico",$carico);
        $query->execute();
        $idrisultante=$query->fetch();
        $id_genitore = $idrisultante['id'];
        //si inserisce i dati di consacrazione e l'immagine di profilo, nel caso esistano
        if ($_FILES['files']['size'] > 0 )
        {
            // cover_image is empty (and not an error)
          /*  if(!inserisci_immagine($id_genitore)==='ok')
            {
              echo 'error';
            }*/
            switch ( $_FILES['files']['error'] ) {
              case UPLOAD_ERR_OK:
                  break;
              case UPLOAD_ERR_NO_FILE:
                  throw new RuntimeException( 'Nessun file è stato trasmesso.' );
                  break;
              case UPLOAD_ERR_INI_SIZE:
              case UPLOAD_ERR_FORM_SIZE:
                  throw new RuntimeException( 'Eccede la dimensione massima del file, ritorna e inserisci di nuovo i dati, con un immagine di dimensioni inferiore a 60KB.' );
                  break;
              default:
                  throw new RuntimeException( 'Errore sconosciuto.' );
            }
            if ( false === $ext = array_search(
              $_FILES['files']['type'],
                  array('jpg' => 'image/jpeg',
                  'png' => 'image/png',
                  'gif' => 'image/gif',
                  ), true )
            ) {
              throw new RuntimeException( "Formato immagine non valido.\nO il file non è un'immagine." );
            }
              $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              $sql=$dbh->prepare("INSERT INTO immagini (id_persona,img,type) VALUES (:id_persona,:img,:type)");
              $immagine = file_get_contents( $_FILES['files']['tmp_name'] );
              $type= $_FILES['files']['type'] ;
              $sql->bindValue(":id_persona",$id_genitore);
              $sql->bindValue(":img",$immagine);
              $sql->bindValue(":type",$type);
            if(!$sql->execute())
            {
                echo 'ERROR';
            }
            unset( $_FILES, $handle, $immagine );
        }
        else {
        }
          //controllo carico in chiesa
        if($carico === 'Pastore' || $carico === 'Evangelista' || $carico==='Presbitero' || $carico ==='Diacono' || $carico==='Diaconessa')
        {
            if(!empty($_POST['data-diacono']) || !empty($_POST['luogo-diacono']) || !empty($_POST['data-presbitero']) || !empty($_POST['luogo-presbitero']) || !empty($_POST['data-evangelista']) || !empty($_POST['luogo-evangelista']) || !empty($_POST['data-pastore']) || !empty($_POST['luogo-pastore']) )
            {
              if (empty($_POST["data-diacono"])){
                $data_diacono=NULL;
              }
              else {
                $rawdate9 = htmlentities($_POST["data-diacono"]);
                $data_diacono = date('Y-m-d', strtotime($rawdate9));
              }
              if (empty($_POST["data-presbitero"])){
                $data_presbitero=NULL;
              }
              else {
                $rawdate8 = htmlentities($_POST["data-presbitero"]);
                  $data_presbitero = date('Y-m-d', strtotime($rawdate8));
              }
              if (empty($_POST["data-evangelista"])){
                $data_evangelista=NULL;
              }
              else {
                $rawdate7 = htmlentities($_POST["data-evangelista"]);
                $data_evangelista = date('Y-m-d', strtotime($rawdate7));
              }
              if (empty($_POST["data-pastore"])){
                $data_pastore=NULL;
              }
              else {
                $rawdate6 = htmlentities($_POST["data-pastore"]);
                $data_pastore = date('Y-m-d', strtotime($rawdate6));
              }
              if (empty($_POST["luogo-diacono"])){
                $luogo_diacono=NULL;
              }
              else {
                $luogo_diacono=$_POST["luogo-diacono"];
              }
              if (empty($_POST["luogo-presbitero"])){
                $luogo_presbitero=NULL;
              }
              else {
                $luogo_presbitero=$_POST["luogo-presbitero"];
              }
              if (empty($_POST["luogo-evangelista"])){
                $luogo_evangelista=NULL;
              }
              else {
                $luogo_evangelista=$_POST["luogo-evangelista"];
              }
              if (empty($_POST["luogo-pastore"])){
                $luogo_pastore=NULL;
              }
              else {
                $luogo_pastore=$_POST["luogo-pastore"];
              }
              $query=$dbh->prepare("INSERT INTO consacrato (id_persona,consacrato_diacono,luogo_diacono,consacrato_presbitero,luogo_presbitero,consacrato_evangelista,luogo_evangelista,consacrato_pastore,luogo_pastore)
              VALUES (:id_persona,:consacrato_diacono,:luogo_diacono,:consacrato_presbitero,:luogo_presbitero,:consacrato_evangelista,:luogo_evangelista,:consacrato_pastore,:luogo_pastore)");
              $query->bindValue(":id_persona",$id_genitore);
              $query->bindValue(":consacrato_diacono",$data_diacono);
              $query->bindValue(":luogo_diacono",$luogo_diacono);
              $query->bindValue(":consacrato_presbitero",$data_presbitero);
              $query->bindValue(":luogo_presbitero",$luogo_presbitero);
              $query->bindValue(":consacrato_evangelista",$data_evangelista);
              $query->bindValue(":luogo_evangelista",$luogo_evangelista);
              $query->bindValue(":consacrato_pastore",$data_pastore);
              $query->bindValue(":luogo_pastore",$luogo_pastore);
              if(!$query->execute())
              {
                  echo 'ERROR - Inserimento dati di consacrazione';
              }
          }
      }
      //fine controllo carico in chiesa
        if($numero_figli > 0)
        {
          if (empty($_POST["nome-figlio-1"])){
            $nome_figlio_1=NULL;
          }
          else {
            $nome_figlio_1=$_POST["nome-figlio-1"];
          }
          if (empty($_POST["cognome-figlio-1"])){
           $cognome_figlio_1=NULL;
          }
          else {
            $cognome_figlio_1=$_POST["cognome-figlio-1"];
          }
          if (empty($_POST["nome-figlio-2"])){
            $nome_figlio_2=NULL;
          }
          else {
            $nome_figlio_2=$_POST["nome-figlio-2"];
          }
          if (empty($_POST["cognome-figlio-2"])){
            $cognome_figlio_2=NULL;
          }
          else {
            $cognome_figlio_2=$_POST["cognome-figlio-2"];
          }
          if (empty($_POST["nome-figlio-3"])){
            $nome_figlio_3=NULL;
          }
          else {
            $nome_figlio_3=$_POST["nome-figlio-3"];
          }
          if (empty($_POST["cognome-figlio-3"])){
            $cognome_figlio_3=NULL;
          }
          else {
            $cognome_figlio_3=$_POST["cognome-figlio-3"];
          }
          if (empty($_POST["nome-figlio-4"])){
            $nome_figlio_4=NULL;
          }
          else {
            $nome_figlio_4=$_POST["nome-figlio-4"];
          }
          if (empty($_POST["cognome-figlio-4"])){
            $cognome_figlio_4=NULL;
          }
          else {
            $cognome_figlio_4=$_POST["cognome-figlio-4"];
          }
          if (empty($_POST["nome-figlio-5"])){
            $nome_figlio_5=NULL;
          }
          else {
            $nome_figlio_5=$_POST["nome-figlio-5"];
          }
          if (empty($_POST["cognome-figlio-5"])){
            $cognome_figlio_5=NULL;
          }
          else {
            $cognome_figlio_5=$_POST["cognome-figlio-5"];
          }
          function esiste($nome,$cognome)
          {
            require('conn.inc.php');
            $dbh = new PDO($conn,$user,$pass);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql=$dbh->prepare("SELECT * FROM figli_persone WHERE LOWER(nome_figlio)=LOWER(:nome) AND LOWER(cognome_figlio)=LOWER(:cognome);");
            $sql->bindValue(":nome",$nome);
            $sql->bindValue(":cognome",$cognome);
            $sql->execute();
            	if ($sql->rowCount()>0) {
                return "si";
              }
              else return "no";
          }
          function aggiorna($id,$nomefiglio,$cognomefiglio,$sesso,$tipo)
          {
              if($sesso=="Maschile")
              {
                 $riga ="UPDATE figli_persone SET id_padre=:id WHERE LOWER(nome_figlio)=LOWER(:nome) AND LOWER(cognome_figlio)=LOWER(:cognome);";
              }
             else
             {
               $riga ="UPDATE figli_persone SET id_madre=:id WHERE LOWER(nome_figlio)=LOWER(:nome) AND LOWER(cognome_figlio)=LOWER(:cognome);";
             }
             require('conn.inc.php');
             $dbh = new PDO($conn,$user,$pass);
             $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             $sql1=$dbh->prepare($riga);
             $sql1->bindValue(":id",$id);
             $sql1->bindValue(":nome",$nomefiglio);
             $sql1->bindValue(":cognome",$cognomefiglio);
             if($sql1->execute())
             {
               return "OK";
             }
             else return "KO";
          }
          function inserisci($id,$nomefiglio,$cognomefiglio,$sesso,$tipo)
          {
              if($sesso=="Maschile")
              {
                 $riga = "INSERT INTO figli_persone(id_padre,nome_figlio,cognome_figlio) VALUES (:id,:nome,:cognome);";
              }
             else
             {
                $riga = "INSERT INTO figli_persone(id_madre,nome_figlio,cognome_figlio) VALUES (:id,:nome,:cognome);";
             }
             require('conn.inc.php');
             $dbh = new PDO($conn,$user,$pass);
             $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             $sql1=$dbh->prepare($riga);
             $sql1->bindValue(":id",$id);
             $sql1->bindValue(":nome",$nomefiglio);
             $sql1->bindValue(":cognome",$cognomefiglio);
             if($sql1->execute())
             {
               return "OK";
             }
             else return "KO";
          }
          if(!$nome_figlio_1==NULL){
//se esiste uupdate altrimenti insert into
            if(esiste($nome_figlio_1,$cognome_figlio_1)=="si")
            {
               if(aggiorna($id_genitore,$nome_figlio_1,$cognome_figlio_1,$sesso,$tipo)=="OK")
               {
                  stampaok($tipo);
               }
               else
               {
                 stampako($tipo);
               }
            }
            else
            {
                if(inserisci($id_genitore,$nome_figlio_1,$cognome_figlio_1,$sesso,$tipo)=="OK")
                {
                    stampaok($tipo);
                }
                else
                {
                  stampako($tipo);
                }
            }
          }
            if(!$nome_figlio_2==NULL){
  //se esiste uupdate altrimenti insert into
              if(esiste($nome_figlio_2,$cognome_figlio_2)=="si")
              {
                 if(aggiorna($id_genitore,$nome_figlio_2,$cognome_figlio_2,$sesso,$tipo)=="OK")
                 {
                    stampaok($tipo);
                 }
                 else
                 {
                   stampako($tipo);
                 }
              }
              else
              {
                  if(inserisci($id_genitore,$nome_figlio_2,$cognome_figlio_2,$sesso,$tipo)=="OK")
                  {
                      stampaok($tipo);
                  }
                  else
                  {
                    stampako($tipo);
                  }
              }
            }
              if(!$nome_figlio_3==NULL){
    //se esiste uupdate altrimenti insert into
                if(esiste($nome_figlio_3,$cognome_figlio_3)=="si")
                {
                   if(aggiorna($id_genitore,$nome_figlio_3,$cognome_figlio_3,$sesso,$tipo)=="OK")
                   {
                      stampaok($tipo);
                   }
                   else
                   {
                     stampako($tipo);
                   }
                }
                else
                {
                    if(inserisci($id_genitore,$nome_figlio_3,$cognome_figlio_3,$sesso,$tipo)=="OK")
                    {
                        stampaok($tipo);
                    }
                    else
                    {
                      stampako($tipo);
                    }
                }
              }
                if(!$nome_figlio_4==NULL){
      //se esiste uupdate altrimenti insert into
                  if(esiste($nome_figlio_4,$cognome_figlio_4)=="si")
                  {
                     if(aggiorna($id_genitore,$nome_figlio_4,$cognome_figlio_4,$sesso,$tipo)=="OK")
                     {
                        stampaok($tipo);
                     }
                     else
                     {
                       stampako($tipo);
                     }
                  }
                  else
                  {
                      if(inserisci($id_genitore,$nome_figlio_4,$cognome_figlio_4,$sesso,$tipo)=="OK")
                      {
                          stampaok($tipo);
                      }
                      else
                      {
                        stampako($tipo);
                      }
                  }
                }
                  if(!$nome_figlio_5==NULL){
        //se esiste uupdate altrimenti insert into
                    if(esiste($nome_figlio_5,$cognome_figlio_5)=="si")
                    {
                       if(aggiorna($id_genitore,$nome_figlio_5,$cognome_figlio_5,$sesso,$tipo)=="OK")
                       {
                          stampaok($tipo);
                       }
                       else
                       {
                         stampako($tipo);
                       }
                    }
                    else
                    {
                        if(inserisci($id_genitore,$nome_figlio_5,$cognome_figlio_5,$sesso,$tipo)=="OK")
                        {
                            stampaok($tipo);
                        }
                        else
                        {
                          stampako($tipo);
                        }
                    }
                  }
            }
            else
              {
                  stampaok($tipo);
              }
            }
  }
}
  catch (PDOException $e) {
    echo "Qualcosa e'' andato storto, contattare assistenza segnalando questo messaggio: " . $e->getMessage();
  }
  catch ( Exception $e ) { echo 'ERRORE GENERICO: ' . $e->getMessage();
  echo $id_genitore;
  $query=$dbh->prepare("DELETE FROM persone WHERE id=:id;");
  $query->bindValue(":id",$id_genitore);
  if($query->execute())
  {
   echo 'ultimo inserimento eliminato';
  }
}
?>
