<?php
  include "./includes/db.php";
  function selectActu($id)
  {
      $select= "SELECT (`titreActus`,`dateActus`,`utilisateurActus`,`contenuActus`) FROM `Actu`(`titreActus`,`dateActus`,`utilisateurActus`,`contenuActus`) WHERE id=$id";
      return mysqli_query($c, $select) or die("Erreur envoie");
  }

  function SelectAllActu()
  {
	  global $c;
	  $select= "SELECT * FROM `Actu` WHERE 1";
    return mysqli_query($c, $select) or die("Erreur envoie");
  }

 function deleteActu($id)
 {
     $delete= "DELETE (`titreActus`,`dateActus`,`utilisateurActus`,`contenuActus`) FROM `Actu`(`titreActus`,`dateActus`,`utilisateurActus`,`contenuActus`) WHERE id=$id ";
     return mysqli_query($c, $delete) or die("Erreur envoie");
 }

   function inserActu($titre, $date, $utilisateur, $contenu)
   {
       $inser= "INSERT INTO `Actu`(`titreActus`,`dateActus`,`utilisateurActus`,`contenuActus`)
       VALUES('$titre', '$date', '$utilisateur', '$contenu')";
       return mysqli_query($c, $inser) or die("Erreur envoie");
   }
