<?php
session_start();

date_default_timezone_set('Europe/Rome');
	include ('conn.inc.php');



try{
	$dbh = new PDO($conn, $user, $pass);
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		 if (isset($_POST['salvautente']))
		{
						$nome = $_POST['nome'];
						$cognome=$_POST['cognome'];
						$username=$_POST['username'];
						$email=$_POST['email'];
						$password=$_POST['password'];
						 $jsondataT=array();
						  $sqlu =$dbh->prepare("INSERT INTO users (nome_user,cognome_user,username_user,email_user,password_user) VALUES(:nome,:cognome,:username,:email,md5(:password))");
							$sqlu->bindValue(":nome", $nome);
							$sqlu->bindValue(":cognome", $cognome);
							$sqlu->bindValue(":username", $username);
							$sqlu->bindValue(":email", $email);
							$sqlu->bindValue(":password", $password);
								if($sqlu->execute())
								{

									$sqlu =$dbh->prepare("SELECT id_user FROM users ORDER BY id_user DESC limit 1");
									$sqlu->execute();
									if ($sqlu->rowCount()>0)
									{
										$row=$sqlu->fetch();
										$jsondataT["id"]=$row['id_user'];
										$jsondataT["return"]="OK";
									}

								}
								else {
									$jsondataT["return"]="KO";
								}
							echo json_encode($jsondataT);

			 }

			 if (isset($_POST['eliminautente']))
			{
							$id = $_POST['id'];

							 $jsondataT=array();
							  $sqlu =$dbh->prepare("DELETE FROM users WHERE id_user=:id");
								$sqlu->bindValue(":id", $id);
									if($sqlu->execute())
									{
										$jsondataT["return"]="OK";

									}
									else {
										$jsondataT["return"]="KO";
									}
								echo json_encode($jsondataT);

				 }

				 if (isset($_POST['eliminaimmagine']))
			 {
							 $id = $_POST['id'];

								$jsondataT=array();
								 $sqlu =$dbh->prepare("DELETE FROM immagini WHERE id_persona=:id");
								 $sqlu->bindValue(":id", $id);
									 if($sqlu->execute())
									 {
										 $jsondataT["return"]="OK";

									 }
									 else {
										 $jsondataT["return"]="KO";
									 }
								 echo json_encode($jsondataT);

					}



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



                  	}
                   else
                   {
                        echo json_encode("not_found");
                   }
									 echo json_encode($jsondataT);
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

	          }

						if (isset($_POST['NOME_FIGLI']))
						{

										$id =$_POST['id'];
										$jsondataT=array();

										$sqlu =$dbh->prepare("SELECT numero_figli FROM persone  WHERE id=:id");
										$sqlu->bindValue(":id", $id);
											 $sqlu->execute();
											if ($sqlu->rowCount()>0)
											{

													$row=$sqlu->fetch();
													$jsondataT["numero"]=$row['numero_figli'];

													$sqlu =$dbh->prepare("SELECT * FROM figli_persone WHERE id_padre=:id OR id_madre=:id");
													$sqlu->bindValue(":id", $id);
													$sqlu->execute();
												 if ($sqlu->rowCount()>0)
												 {
													 while($row=$sqlu->fetch())
													 {
														 $jsondataT['figli'][]=$row;
													 }
												 }
												 else {
													 	$jsondataT['figli']="N";
												 }
													echo json_encode($jsondataT);
											}
										 else
										 {
											 		$jsondataT["numero"]="0";
													$jsondataT['figli']="N";
													echo json_encode($jsondataT);
										 }

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

										$sqld =$dbh->prepare("SELECT count(*) as totale, (select count(*)  from persone p WHERE attivo='S' and tipo_persona='congregato') as attivi, (select count(*)  from persone p WHERE attivo='N' and tipo_persona='congregato') as non_attivi   FROM persone WHERE tipo_persona='congregato';");

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

    if(isset($_POST['ONE'])) {

           $id = $_POST['ssid'];
					//		$id="17e62166fc8586dfa4d1bc0e1742c08b";

					   $jsondata=array();
             $sql =$dbh->prepare("SELECT p.*,DATE_FORMAT(p.data_nascita,  '%d/%m/%Y' ) AS data_di_nascita,DATE_FORMAT(p.data_matrimonio,  '%d/%m/%Y' ) AS data_di_matrimonio, DATE_FORMAT(p.data_battesimo,  '%d/%m/%Y' ) AS data_di_battesimo, DATE_FORMAT(p.data_arrivo_in_chiesa,  '%d/%m/%Y' ) AS data_arrivo  FROM persone p WHERE md5(p.id)=:id;");
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

									 	$quer="";
											if($genere=="Femminile")
											{
												$quer="SELECT * FROM figli_persone WHERE md5(id_madre)=:id";
											}
											else {
													$quer="SELECT * FROM figli_persone WHERE md5(id_padre)=:id";
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
															$jsondata["mex"]="trovato";
			                   }

										 	}
											else {
														$jsondata["mex"]="not_found";
													}



									 	// se esiste si cerca nella tabella di consacrato
									 	$sql2 =$dbh->prepare("SELECT *,DATE_FORMAT(consacrato_diacono, '%d/%m/%Y' ) AS data_diacono,DATE_FORMAT(consacrato_presbitero, '%d/%m/%Y' ) AS data_presbitero, DATE_FORMAT(consacrato_evangelista, '%d/%m/%Y' ) AS data_evangelista,DATE_FORMAT(consacrato_pastore, '%d/%m/%Y' ) AS data_pastore FROM consacrato WHERE md5(id_persona)=:id");
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
