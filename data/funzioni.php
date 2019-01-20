<?php
function visualizza($field)
{
  include ('conn.inc.php');
  $dbh = new PDO($conn, $user, $pass);
  $sqld =$dbh->prepare("SELECT count(*) as total,
                      (select count(*)  from persone p WHERE attivo='S'and tipo_persona='membro') as attivo_m,
                      (select count(*)  from persone p WHERE attivo='N' and tipo_persona='membro') as non_attivo_m,
                      (select count(*)  from persone p WHERE attivo='S' and tipo_persona='congregato') as attivo_c,
                      (select count(*)  from persone p WHERE attivo='N' and tipo_persona='congregato') as non_attivo_c,
                      (SELECT count(*) from persone p where tipo_persona='bambino') as bambino FROM persone ");
  $sqld->execute();
  $row=$sqld->fetch();
  if($field=="TT")
  {
      return $row['total'];
  }
  else if($field=="MA")
  {
    return $row['attivo_m'];
  }
  else if($field=="MN")
  {
    return $row['non_attivo_m'];
  }
  else if($field=="CA")
  {
    return $row['attivo_c'];
  }
  else if($field=="CN")
  {
    return $row['non_attivo_c'];
  }
  else if($field=="BB")
  {
    return $row['bambino'];
  }
}

function calcola($field)
{
  if($field!=null)
  {
  $birthDate = explode("/", $field);
  $data= $birthDate[2]."-".$birthDate[1]."-".$birthDate[0];
  $from = new DateTime($data);
  $to   = new DateTime('today');
  $anno= $from->diff($to)->y;
  return $anno;
}
}
//converte  una stringa in qualunque tipo di lettera (UPPER and LOWER) in soltanto prima lettera di ogni parola in maiuscolo
function converte($field)
{
  if($field!=null)
  {
    $field =trim($field);
    $data = explode(" ", $field);

    $indice = count($data);
    for($i=0;$i<$indice;$i++)
    {
      $basso=strtolower($data[$i]);
      $composto=ucfirst($basso);
      $nuovo.=$composto;
      $nuovo.=' ';
    }
    $nuovo=trim($nuovo);
    return $nuovo;
  }
}
/*function controllautente($id)
{
  include ('conn.inc.php');
  $dbh = new PDO($conn, $user, $pass);
  $sqld =$dbh->prepare("SELECT nome from users where  id_user=:id ");
  $sqld->bindValue(":id",$id);
  $sqld->execute();
  if($sqld->rowCount()>0)
  {

  }
  else {
      header("Location: logout");
  }

}*/


?>
