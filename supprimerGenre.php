<?php include "header.php";
include "connexionPdo.php";
$num=$_GET['num'];        
    
$req=$monPdo->prepare("delete from genre where num = :num ");
$req->bindParam(':num',$num);
$nb=$req->execute();



if($nb == 1){
  $_SESSION['message']=["success"=>" La nationalité a bien été supprimée"];
}else{
  $_SESSION['message']=["success"=>" La nationalité a bien été supprimée"];
}
header('location: listeDesGenres.php');
exit();
?>


