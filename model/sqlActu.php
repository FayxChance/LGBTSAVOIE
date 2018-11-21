<?php
  function selectActu($id)
  {
      global $c;
      $select= "SELECT (`titreActus`,`dateActus`,`utilisateurActus`,`contenuActus`) FROM `Actu`(`titreActus`,`dateActus`,`utilisateurActus`,`contenuActus`) WHERE id=$id";
      return mysqli_query($c, $select) or die("Erreur envoie");
  }

 function deleteActu($id)
 {
     global $c;
     $delete= "DELETE (`titreActus`,`dateActus`,`utilisateurActus`,`contenuActus`) FROM `Actu`(`titreActus`,`dateActus`,`utilisateurActus`,`contenuActus`) WHERE id=$id ";
     return mysqli_query($c, $delete) or die("Erreur envoie");
 }

   function inserActu($titre, $date, $utilisateur, $contenu)
   {
       global $c;
       $inser= "INSERT INTO `Actu`(`titreActus`,`dateActus`,`utilisateurActus`,`contenuActus`)
       VALUES('$titre', '$date', '$utilisateur', '$contenu')";
       return mysqli_query($c, $inser) or die("Erreur envoie");
   }

    function selectAllActu()
    {
        global $c;
        $selectAll= "SELECT * FROM `Actu`(`titreActus`,`dateActus`,`utilisateurActus`,`contenuActus`)";
        return mysqli_query($c, $selectAll) or die("Erreur envoie");
    }


    function updateTitreActu($id,$contenu,$titre);
    {
        global $c;
        $update= "UPDATE `Actu` SET `titreActu`=$titre,`contenuActu`=$contenu WHERE `Actu`.`idActu`=$id";
        mysqli_query($c,$update) or die ("Erreur envoie");
    }
?>