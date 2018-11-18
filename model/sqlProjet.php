<?php
  function selectProjet()
  {
      $select= "SELECT (`auteurProjet`,`titreProjet`,`descriptionProjet`) FROM `Projet`(`auteurProjet`,`titreProjet`,`descriptionProjet`)";
      return mysqli_query($c, $select) or die("Erreur envoie");
  }

 function deleteProjet($id)
 {
     $delete= "DELETE (`auteurProjet`,`titreProjet`,`descriptionProjet`) FROM `Projet`(`auteurProjet`,`titreProjet`,`descriptionProjet`) WHERE id=$id ";
     return mysqli_query($c, $delete) or die("Erreur envoie");
 }

   function inserProjet($nom, $titre, $description)
   {
       $inser= "INSERT INTO `Projet`(`auteurProjet`,`titreProjet`,`descriptionProjet`)
                    VALUES($nom,$titre,$description)";
       return mysqli_query($c, $inser) or die("Erreur envoie");
   }
