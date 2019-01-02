<?php
session_start();
	include ('conn.inc.php');
try{

       if(isset($_POST['loginuser'])){

       $dbh = new PDO($conn,$user,$pass);
       $stm=$dbh->prepare("SELECT * FROM users WHERE (LOWER(email_user)=LOWER(:u)||LOWER(username_user)=LOWER(:u)) AND password_user=:p;");
       $stm->bindValue(":u",$_POST['email']);
       $stm->bindValue(":p",$_POST['password']);
       $stm->execute();
      if($stm->rowCount()>0)
      {
        $row=$stm->fetch();
        $_SESSION['user_admin']=$row['id_user'];
        $_SESSION['username']=$row['nome_user'];

      header('location: home');
      }
         else
         {
           header('location: index?err=1');
         }
       }
  }
  catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
  }
?>
