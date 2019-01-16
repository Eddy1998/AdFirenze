<?php
session_start();
include ('conn.inc.php');

try{
	$dbh = new PDO($conn, $user, $pass);
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		 if (isset($_POST['disattivautente']))
		{
						$ssid = $_POST['ssid'];

						  $sqlu =$dbh->prepare("UPDATE persone SET attivo='N' WHERE md5(id)=:ssid");
							$sqlu->bindValue(":ssid", $ssid);
								if($sqlu->execute())
								{
                    header("Location: visualizza?id=".$ssid."&success=1");

								}
								else {
								    header("Location: visualizza?id=".$ssid."&success=9");
								}

			 }
       if (isset($_POST['attivautente']))
     {
             $ssid = $_POST['ssid'];

               $sqlu =$dbh->prepare("UPDATE persone SET attivo='S' WHERE md5(id)=:ssid");
               $sqlu->bindValue(":ssid", $ssid);
                 if($sqlu->execute())
                 {
                      header("Location: visualizza?id=".$ssid."&success=1");

                 }
                 else {
                     header("Location: visualizza?id=".$ssid."&success=9");
                 }

        }
      }
      catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
      }
      catch ( Exception $e ) { echo 'ERRORE GENERICO: ' . $e->getMessage();}

?>
