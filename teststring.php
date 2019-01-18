<?php
//session_start();
//header("Content-Type: application/pdf;charset=utf-8");
	include ('conn.inc.php');

try{
    //$prova = $_POST['giorno1'];
    $jsondataT=array();
    $dati=array();
    $mese = 12;
    $luogo = "Firenze";
    $dbh = new PDO($conn,$user,$pass);
    $stm=$dbh->prepare("SELECT nome,cognome,nome_coniuge,cognome_coniuge, DATE_FORMAT(data_matrimonio, '%d/%m' ) AS data_di_matrimonio FROM persone WHERE MONTH(data_matrimonio)=:numero AND congregazione=:congre");
    $stm->bindValue(":numero",$mese);
    $stm->bindValue(":congre",$luogo);
    $stm->execute();
    if($stm->rowCount()>0)
      {

         while($row= $stm->fetch())
         {
             $jsondataT["user"][]=$row;

         }

      }
      $indice =count($jsondataT["user"]);
      echo $indice;
      $indico =0;
      /*for($i=0;$i<$indice;$i++)
      {
          $indice =count($dati['user']);
          //if($jsondataT['user'][$i]['nome']==$dati[])
        echo $jsondataT['user'][$i]['nome'];
      }*/

    //query per select di ogni mese
    /*SELECT * FROM persone WHERE MONTH(data_nascita)=7 */
       //if(isset($_POST['loginuser'])){
       /*$ssid='26';
       $imm='17';
       $dbh = new PDO($conn,$user,$pass);
       $stm=$dbh->prepare("SELECT * FROM persone WHERE id=:ssid;");
       $stm->bindValue(":ssid",$ssid);
       $stm->execute();
      if($stm->rowCount()>0)
      {

         $row= $stm->fetch();

       */

    }
 catch (PDOException $e) {
    echo 'errore pdf: ' . $e->getMessage();
  }
?>
