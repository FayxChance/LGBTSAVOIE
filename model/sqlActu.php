<?php
  include_once "../../includes/db.php";
  function selectActu($id){
      global $c;
      $select= "SELECT (`titreActus`,`dateActus`,`utilisateurActus`,`contenuActus`) FROM `Actu`(`titreActus`,`dateActus`,`utilisateurActus`,`contenuActus`) WHERE id=$id";
      return mysqli_query($c, $select);
  }
  function selectLastActu(){
    global $c;
    $select="SELECT * FROM `Actu` ORDER BY `dateActus` DESC LIMIT 2";
    return mysqli_query($c,$select);
  }
  function deleteActu($id){
    global $c;
    $sql="DELETE FROM `Actu` WHERE `Actu`.`idActus` = $id";
    return mysqli_query($c,$sql);
 }
  function inserActu($titre, $date, $utilisateur, $contenu){
       global $c;
       $inser= "INSERT INTO `Actu`( `titreActus`, `dateActus`, `utilisateurActus`, `contenuActus`)
       VALUES('$titre', '$date', $utilisateur, '$contenu')";
       return mysqli_query($c, $inser) ;
   }
  function selectAllActu(){
    global $c;
    $selectAll= "SELECT * FROM `Actu` WHERE 1 ORDER BY `dateActus` DESC";
    return mysqli_query($c, $selectAll) ;
  }
  function updateActu($id,$contenu,$titre){
        global $c;
        $update= "UPDATE `Actu` SET `titreActu`=$titre,`contenuActu`=$contenu WHERE `Actu`.`idActu`=$id";
        mysqli_query($c,$update);
    }
?>
