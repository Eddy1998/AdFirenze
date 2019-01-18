<?php
session_start();

  include ('conn.inc.php');
    $dbh = new PDO($conn,$user,$pass);
      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  try
  {

    function stampaok($ssid)
    {
      header("Location: ../visualizza?id=$ssid&success=1");
      //redirect($ssid,"OK");
    }
    function stampako($ssid)
    {
      header("Location: ../visualizza?id=$ssid&success=9");
      //redirect($ssid,"KO");
    }

    function esiste($nome,$cognome)
    {
      require('conn.inc.php');
      $dbh = new PDO($conn,$user,$pass);
      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql=$dbh->prepare("SELECT * FROM figli_persone WHERE LOWER(nome_figlio_1)=LOWER(:nome) AND LOWER(cognome_figlio_1)=LOWER(:cognome)||LOWER(nome_figlio_2)=LOWER(:nome) AND LOWER(cognome_figlio_2)=LOWER(:cognome)||LOWER(nome_figlio_3)=LOWER(:nome) AND LOWER(cognome_figlio_3)=LOWER(:cognome)||LOWER(nome_figlio_4)=LOWER(:nome) AND LOWER(cognome_figlio_4)=LOWER(:cognome)||LOWER(nome_figlio_5)=LOWER(:nome) AND LOWER(cognome_figlio_5)=LOWER(:cognome) LIMIT 1;");
      $sql->bindValue(":nome",$nome);
      $sql->bindValue(":cognome",$cognome);
      $sql->execute();
      if ($sql->rowCount()>0) {
          $row = $sql->fetch();
          return $row['id'];
        }
        else return "no";

    }
    function aggiorna($id,$n1,$c1,$n2,$c2,$n3,$c3,$n4,$c4,$n5,$c5,$sesso,$idriga)
    {
        require('conn.inc.php');
        if($sesso=="Maschile")
        {
          $prima="id_padre";
          // $riga ="UPDATE figli_persone SET id_padre=:id WHERE LOWER(nome_figlio)=LOWER(:nome) AND LOWER(cognome_figlio)=LOWER(:cognome);";
        }
       else
       {
         $prima="id_madre";
       }
       $riga ="UPDATE figli_persone SET ".$prima."=:id, nome_figlio_1=:n1, cognome_figlio_1=:c1, nome_figlio_2=:n2,cognome_figlio_2=:c2, nome_figlio_3=:n3,cognome_figlio_3=:c3, nome_figlio_4=:n4,cognome_figlio_4=:c4, nome_figlio_5=:n5,cognome_figlio_5=:c5  WHERE id=:idriga;";


       $dbh = new PDO($conn,$user,$pass);
       $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql1=$dbh->prepare($riga);
       $sql1->bindValue(":id",$id);
       $sql1->bindValue(":idriga",$idriga);
       $sql1->bindValue(":n1",$n1);
       $sql1->bindValue(":c1",$c1);
       $sql1->bindValue(":n2",$n2);
       $sql1->bindValue(":c2",$c2);
       $sql1->bindValue(":n3",$n3);
       $sql1->bindValue(":c3",$c3);
       $sql1->bindValue(":n4",$n4);
       $sql1->bindValue(":c4",$c4);
       $sql1->bindValue(":n5",$n5);
       $sql1->bindValue(":c5",$c5);
       if($sql1->execute())
       {
         return "OK";
       }
       else return "KO";
    }

    function inserisci($id,$n1,$c1,$n2,$c2,$n3,$c3,$n4,$c4,$n5,$c5,$sesso)
    {
        if($sesso=="Maschile")
        {
          $in = "INSERT INTO figli_persone(id_padre,nome_figlio_1,cognome_figlio_1,nome_figlio_2,cognome_figlio_2,nome_figlio_3,cognome_figlio_3,nome_figlio_4,cognome_figlio_4,nome_figlio_5,cognome_figlio_5)";
          // $riga = "INSERT INTO figli_persone(id_padre,nome_figlio,cognome_figlio) VALUES (:id,:nome,:cognome);";
        }
       else
       {
         $in = "INSERT INTO figli_persone(id_madre,nome_figlio_1,cognome_figlio_1,nome_figlio_2,cognome_figlio_2,nome_figlio_3,cognome_figlio_3,nome_figlio_4,cognome_figlio_4,nome_figlio_5,cognome_figlio_5)";

         //$in = "id_padre";

       }
       $prein=$in." VALUES (:id,:n1,:c1,:n2,:c2,:n3,:c3,:n4,:c4,:n5,:c5)";
       //$postin=",nome_figlio_1,cognome_figlio_1,nome_figlio_2,cognome_figlio_2,nome_figlio_3,cognome_figlio_3,nome_figlio_4,cognome_figlio_4,nome_figlio_5,cognome_figlio_5) VALUES (:id,:n1,:c1,:n2,:c2,:n3,:c3,:n4,:c4,:n5,:c5);"
       //$riga = "INSERT INTO figli_persone(".$in.",nome_figlio_1,cognome_figlio_1,nome_figlio_2,cognome_figlio_2,nome_figlio_3,cognome_figlio_3,nome_figlio_4,cognome_figlio_4,nome_figlio_5,cognome_figlio_5) VALUES (:id,:n1,:c1,:n2,:c2,:n3,:c3,:n4,:c4,:n5,:c5);";
      // $riga=$prein.$in.$postin;
       require('conn.inc.php');
       $dbh = new PDO($conn,$user,$pass);
       $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       $sql1=$dbh->prepare($prein);
       $sql1->bindValue(":id",$id);
       $sql1->bindValue(":n1",$n1);
       $sql1->bindValue(":c1",$c1);
       $sql1->bindValue(":n2",$n2);
       $sql1->bindValue(":c2",$c2);
       $sql1->bindValue(":n3",$n3);
       $sql1->bindValue(":c3",$c3);
       $sql1->bindValue(":n4",$n4);
       $sql1->bindValue(":c4",$c4);
       $sql1->bindValue(":n5",$n5);
       $sql1->bindValue(":c5",$c5);
       if($sql1->execute())
       {
         return "OK";
       }
       else return "KO";
    }

      if(isset($_POST['salvamodifica']))
      {
        $ssid=$_POST['ssid'];
        $id=$_POST['id'];
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
      $query=$dbh->prepare("UPDATE persone SET tipo_persona=:tipo_persona,
         attivo=:attivo, numero_tessera=:numero_tessera,
          congregazione=:congregazione, nome=:nome,
           cognome=:cognome, carico_in_chiesa=:carico,
            indirizzo=:indirizzo, citta=:citta, cap=:cap,
             telefono=:telefono, nazionalita=:nazionalita,
              sesso=:sesso, data_nascita=:data_nascita,
               stato_civile=:stato_civile, data_matrimonio=:data_matrimonio,
                nome_coniuge=:nome_coniuge, cognome_coniuge=:cognome_coniuge,
                 numero_figli=:numero_figli, nome_padre=:nome_padre, nome_madre=:nome_madre,
                  data_battesimo=:data_battesimo, luogo_battesimo=:luogo_battesimo,
                  data_arrivo_in_chiesa=:data_arrivo_in_chiesa,
                   battezzato_con_spirito_santo=:battezzato_con_spirito_santo,
                    osservazioni=:osservazioni WHERE md5(id)=:id");
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
        stampako($ssid);
      }
      else {
        /*$query=$dbh->prepare("SELECT id FROM persone WHERE nome=:nome AND cognome=:cognome AND carico_in_chiesa=:carico LIMIT 1;");
        $query->bindValue(":nome",$nome);
        $query->bindValue(":cognome",$cognome);
        $query->bindValue(":carico",$carico);
        $query->execute();
        $idrisultante=$query->fetch();
        $id_genitore = $idrisultante['id'];*/
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
              $sql=$dbh->prepare("UPDATE immagini SET img=:img,type=:type WHERE md5(id_persona)=:ssid;");
              $immagine = file_get_contents( $_FILES['files']['tmp_name'] );
              $type= $_FILES['files']['type'] ;
              $sql->bindValue(":ssid",$ssid);
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
              $query=$dbh->prepare("UPDATE consacrato SET consacrato_diacono=:consacrato_diacono,
                luogo_diacono=:luogo_diacono, consacrato_presbitero=:consacrato_presbitero,
                 luogo_presbitero=:luogo_presbitero, consacrato_evangelista=:consacrato_evangelista,
                  luogo_evangelista=:luogo_evangelista, consacrato_pastore=:consacrato_pastore,
                  luogo_pastore=:luogo_pastore WHERE md5(id_persona)=:id;");

              $query->bindValue(":id",$ssid);
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
                  stampako($ssid);
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

          $e1=0;
          $e2=0;
          $e3=0;
          $e4=0;
          $e5=0;
          if(!$nome_figlio_1==NULL){
//se esiste uupdate altrimenti insert into

              $ritorno=esiste($nome_figlio_1,$cognome_figlio_1);
              if($ritorno!="no")
              {
                $e1=$ritorno;
              }
          }

            if(!$nome_figlio_2==NULL){
  //se esiste uupdate altrimenti insert into
                  $ritorno=esiste($nome_figlio_2,$cognome_figlio_2);
                  if($ritorno!="no")
                  {
                    $e2=$ritorno;
                  }
            }
              if(!$nome_figlio_3==NULL){
    //se esiste uupdate altrimenti insert into
                  $ritorno=esiste($nome_figlio_3,$cognome_figlio_3);
                  if($ritorno!="no")
                  {
                    $e3=$ritorno;
                  }
              }
                if(!$nome_figlio_4==NULL){
      //se esiste uupdate altrimenti insert into
                      $ritorno=esiste($nome_figlio_4,$cognome_figlio_4);
                      if($ritorno!="no")
                      {
                        $e4=$ritorno;
                      }
                }
                  if(!$nome_figlio_5==NULL){
        //se esiste uupdate altrimenti insert into
                      $ritorno=esiste($nome_figlio_5,$cognome_figlio_5);
                      if($ritorno!="no")
                      {
                        $e5=$ritorno;
                      }
                  }

                  if($e1!=0||$e2!=0||$e3!=0||$e4!=0||$e5!=0)
                  {
                    $risultato=aggiorna($id_genitore,$nome_figlio_1,$cognome_figlio_1,$nome_figlio_2,$cognome_figlio_2,$nome_figlio_3,$cognome_figlio_3,$nome_figlio_4,$cognome_figlio_4,$nome_figlio_5,$cognome_figlio_5,$sesso,$e1);
                  }
                  else {
                    $risultato=inserisci($id_genitore,$nome_figlio_1,$cognome_figlio_1,$nome_figlio_2,$cognome_figlio_2,$nome_figlio_3,$cognome_figlio_3,$nome_figlio_4,$cognome_figlio_4,$nome_figlio_5,$cognome_figlio_5,$sesso);
                  }
                  if($risultato=="OK")
                  {
                    stampaok($ssid);
                  }
                  else {
                    stampako($ssid);
                  }



            }
            else
              {
                  stampaok($ssid);
              }

      }
  }
}
  catch (PDOException $e) {
    echo "Qualcosa e'' andato storto, contattare assistenza segnalando questo messaggio: " . $e->getMessage();
  }
  catch ( Exception $ex ) { echo 'ERRORE GENERICO: contattare assistenza segnalando questo messaggio: ' . $ex->getMessage();

  /*$query=$dbh->prepare("DELETE FROM persone WHERE id=:id;");
  $query->bindValue(":id",$id_genitore);
  if($query->execute())
  {
   echo 'ultimo inserimento eliminato';
  }*/
}
?>
