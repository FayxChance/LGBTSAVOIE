<?php
  function selectEvent($id)
  {
      $select= "SELECT (`idProjet`,`nomEvenement`,`descriptionEvenement`,`dateEvenement`,`lieuEvenement`) FROM `Evenement`(`idProjet`,`nomEvenement`,`descriptionEvenement`,`dateEvenement`,`lieuEvenement`) WHERE id=$id";
      return mysqli_query($c, $select) or die("Erreur envoie");
  }
  
  function SelectAllEvent()
  {
	$select= "SELECT (`idProjet`,`nomEvenement`,`descriptionEvenement`,`dateEvenement`,`lieuEvenement`) FROM `Evenement`(`idProjet`,`nomEvenement`,`descriptionEvenement`,`dateEvenement`,`lieuEvenement`)";
    return mysqli_query($c, $select) or die("Erreur envoie");
  }
  

 function deleteEvent($id)
 {
     $delete= "DELETE (`idProjet`,`nomEvenement`,`descriptionEvenement`,`dateEvenement`,`lieuEvenement`) FROM `Evenement`(`idProjet`,`nomEvenement`,`descriptionEvenement`,`dateEvenement`,`lieuEvenement`) WHERE id=$id ";
     return mysqli_query($c, $delete) or die("Erreur envoie");
 }

   function inserEvent($id, $nom, $description, $date, $lieu)
   {
       $inser= "INSERT INTO `Evenement`(`idProjet`,`nomEvenement`,`descriptionEvenement`,`dateEvenement`,`lieuEvenement`)
                    VALUES('$id','$nom','$description','$date','$lieu')";
       return mysqli_query($c, $inser) or die("Erreur envoie");
   }
