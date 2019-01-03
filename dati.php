<?php
date_default_timezone_set('Europe/Rome');
session_start();
	include ('conn.inc.php');

try{
     $dbh = new PDO($conn, $user, $pass);
          if (isset($_POST['ALL']))
         {

                  $jsondataT=array();
                  $sqlu =$dbh->prepare("SELECT *, md5(id) AS ssid, DATE_FORMAT(p.data_nascita, '%d/%m/%Y' ) AS data_di_nascita,DATE_FORMAT(p.data_matrimonio,  '%d/%m/%Y' ) AS data_di_matrimonio, DATE_FORMAT(p.data_battesimo,  '%d/%m/%Y' ) AS data_di_battesimo, DATE_FORMAT(p.data_arrivo_in_chiesa,  '%d/%m/%Y' ) AS data_arrivo  FROM persone p ORDER BY p.cognome ASC;");

                     $sqlu->execute();
                    if ($sqlu->rowCount()>0)
                    {

                        while($row=$sqlu->fetch())
                        {
                            $jsondataT["dati"][]=$row;
                        }


												$sqlu =$dbh->prepare("SELECT count(*) as totale, (select count(*)  from persone p WHERE attivo='S') as attivi, (select count(*)  from persone p WHERE attivo='N') as non_attivi   FROM persone");

									      $sqlu->execute();
								        $row=$sqlu->fetch();

  											$jsondataT["contatore"]=$row;
								       echo json_encode($jsondataT);


                  	}
                   else
                   {
                        echo json_encode("not_found");
                   }
                    exit();
            }
						if (isset($_POST['NAMES']))
	        	{

						 				$value =$_POST['valore'];
	                  $jsondataT=array();

	                  $sqlu =$dbh->prepare("SELECT nome, cognome, id  FROM persone  WHERE LOWER(nome) LIKE concat('%', LOWER(:value), '%')  OR LOWER(cognome) LIKE concat('%', LOWER(:value), '%') ORDER BY nome ASC LIMIT 15");
										$sqlu->bindValue(":value", $value);
	                     $sqlu->execute();
	                    if ($sqlu->rowCount()>0)
	                    {

	                        while($row=$sqlu->fetch())
	                        {
	                            $jsondataT["names"][]=$row;
	                        }
												  echo json_encode($jsondataT);
	                  	}
	                   else
	                   {
	                        echo json_encode("not_found");
	                   }
	                    exit();
	          }
         if (isset($_POST['M']))
         {

                  $jsondataT=array();
                  $sqlu =$dbh->prepare("SELECT p.*, md5(id) AS ssid, DATE_FORMAT(p.data_nascita,  '%d/%m/%Y' ) AS data_di_nascita,DATE_FORMAT(p.data_matrimonio,  '%d/%m/%Y' ) AS data_di_matrimonio, DATE_FORMAT(p.data_battesimo,  '%d/%m/%Y' ) AS data_di_battesimo, DATE_FORMAT(p.data_arrivo_in_chiesa,  '%d/%m/%Y' ) AS data_arrivo  FROM persone p WHERE tipo_persona='membro' ORDER BY p.cognome ASC;");

                     $sqlu->execute();
                    if ($sqlu->rowCount()>0)
                    {

                        while($row=$sqlu->fetch())
                        {
                            $jsondataT["dati"][]=$row;
                        }
												$sqlu =$dbh->prepare("SELECT count(*) as totale, (select count(*)  from persone p WHERE attivo='S' and tipo_persona='membro') as attivi, (select count(*)  from persone p WHERE attivo='N' and tipo_persona='membro') as non_attivi   FROM persone WHERE tipo_persona='membro'");

									      $sqlu->execute();
								        $row=$sqlu->fetch();

  											$jsondataT["contatore"]=$row;
                        echo json_encode($jsondataT);
                    }
                   else
                   {
                        echo json_encode("not_found");
                   }
                    exit();
         }
       if (isset($_POST['C']))
      {

              $jsondata=array();
              $sqld =$dbh->prepare("SELECT p.*, md5(id) AS ssid, DATE_FORMAT(p.data_nascita,  '%d/%m/%Y' ) AS data_di_nascita,DATE_FORMAT(p.data_matrimonio,  '%d/%m/%Y' ) AS data_di_matrimonio, DATE_FORMAT(p.data_arrivo_in_chiesa, '%d/%m/%Y' ) AS data_arrivo  FROM persone p WHERE tipo_persona='congregato' ORDER BY p.cognome ASC;");
                 $sqld->execute();
                if ($sqld->rowCount()>0)
                {

                    while($row=$sqld->fetch())
                    {
                        $jsondata["dati"][]=$row;

                    }

										$sqld =$dbh->prepare("SELECT count(*) as totale, (select count(*)  from persone p WHERE attivo='S' and tipo_persona='congregato') as attivi, (select count(*)  from persone p WHERE attivo='N' and tipo_persona='congregato') as non_attivi   FROM persone WHERE tipo_persona='congregato'");

										$sqld->execute();
										$row=$sqld->fetch();

										$jsondata["contatore"]=$row;
                    echo json_encode($jsondata);
                   }
               else
               {
                     echo json_encode("not_found");
               }
                exit();
      }
     if (isset($_POST['B'])) {


                  $jsondata=array();
                  $sql =$dbh->prepare("SELECT *, md5(id) AS ssid, DATE_FORMAT(p.data_nascita,  '%d/%m/%Y' ) AS data_di_nascita FROM persone p WHERE p.tipo_persona='bambino' ORDER BY p.cognome ASC;");
                  $sql->execute();

                    if ($sql->rowCount()>0)
                    {

                        while($row=$sql->fetch())
                        {
                            $jsondata["dati"][]=$row;
                        }
												$sql =$dbh->prepare("SELECT count(*) as totale  FROM persone WHERE tipo_persona='bambino'");

												$sql->execute();
												$row=$sql->fetch();

												$jsondata["contatore"]=$row;
                           echo json_encode($jsondata);
                      }
                      else
                     {
                           echo json_encode("not_found");
                     }
                      exit();
        }

    if (isset($_POST['ONE'])) {


            $id=$_POST["ssid"];
						//	$id="17e62166fc8586dfa4d1bc0e1742c08b";

					   $jsondata=array();
             $sql =$dbh->prepare("SELECT p.*,DATE_FORMAT(p.data_nascita,  '%d/%m/%Y' ) AS data_di_nascita,DATE_FORMAT(p.data_matrimonio,  '%d/%m/%Y' ) AS data_di_matrimonio, DATE_FORMAT(p.data_battesimo,  '%d/%m/%Y' ) AS data_di_battesimo, DATE_FORMAT(p.data_arrivo_in_chiesa,  '%d/%m/%Y' ) AS data_arrivo  FROM persone p WHERE md5(id)=:id ORDER BY p.cognome ASC;");
              $sql->bindValue(":id", $id);
             $sql->execute();

            if ($sql->rowCount()>0)
                {

                  while($row=$sql->fetch())
                  {
										//da rivedere nel caso ci siano errori
                        $jsondata["profilo"][]=$row;

												$genere = $row['sesso'];
												$numero = $row['numero_figli'];
                   }

									 //se esiste si cerca nella tabella se esistono figli collegati
									 //controllando prima se è padre o madre e se ha figli
									 	if($numero>0)
										{

											if($genere=="Maschile")
											{
												$quer="SELECT * FROM figli_persone WHERE md5(id_padre)=:id";

											}
											else
											{
												$quer="SELECT * FROM figli_persone WHERE md5(id_madre)=:id";
											}
											$sql1 =$dbh->prepare($quer);
											$sql1->bindValue(":id", $id);

												$sql1->execute();
											if ($sql1->rowCount()>0)
											{
												while($row=$sql1->fetch())
			                  {
													//da rivedere nel caso ci siano errori
			                        $jsondata["figli"][]=$row;


			                   }
										 	}
											else {
														$jsondata["figli"][]="not_found";

													}
										}

									 	// se esiste si cerca nella tabella di consacrato
									 	$sql2 =$dbh->prepare("SELECT * FROM consacrato WHERE md5(id_persona)=:id");
										$sql2->bindValue(":id", $id);
										$sql2->execute();

										if ($sql2->rowCount()>0)
										{
											while($row=$sql2->fetch())
		                  {
												//da rivedere nel caso ci siano errori
		                        $jsondata["consacrato"][]=$row;

		                   }
									 	}
										else {
													$jsondata["consacrato"][]="not_found";
										}
										//se esiste si cerca un'immagine di profilo
										$sql3 =$dbh->prepare("SELECT * FROM immagini WHERE md5(id_persona)=:id");
										$sql3->bindValue(":id", $id);
										$sql3->execute();
										if ($sql3->rowCount()>0)
										{
											$row=$sql3->fetch();
											$immagine=base64_encode($row['img']);
											$jsondata["immagine"]["foto"]=$immagine;
											$jsondata["immagine"]["type"]=$row['type'];
											$jsondata["immagine"]["id"]=$row['id'];
											$jsondata["immagine"]["id_persona"]=$row['id_persona'];


									 	}
										else {
													$jsondata["immagine"][]="not_found";
										}


                   echo json_encode($jsondata);
                }
            else
                {

								           echo json_encode("not_found");
                }
               exit();
        }


				if (isset($_POST['CONTA']))
	 		{
	 						$jsondata=array();
	 						$sqld =$dbh->prepare("SELECT count(*) as total,
																	(select count(*)  from persone p WHERE attivo='S'and tipo_persona='membro') as attivo_m,
																	(select count(*)  from persone p WHERE attivo='N' and tipo_persona='membro') as non_attivo_m,
																  (select count(*)  from persone p WHERE attivo='S' and tipo_persona='congregato') as attivo_c,
																	(select count(*)  from persone p WHERE attivo='N' and tipo_persona='congregato') as non_attivo_c,
																	(SELECT count(*) from persone p where tipo_persona='bambino') as bambino FROM persone ");
	 						$sqld->execute();
	 									while($row=$sqld->fetch())
										{
	 									$jsondata=$row;
									 }
	 									echo json_encode($jsondata);
	 							exit();
	 		}
  }
  catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
  }
	catch ( Exception $e ) { echo 'ERRORE GENERICO: ' . $e->getMessage();}
?>
