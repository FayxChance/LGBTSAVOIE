<?php
include "../../includes/db.php";

  function selectEvent($id)
  {
      global $c;
      $select= "SELECT (`idProjet`,`nomEvenement`,`descriptionEvenement`,`dateEvenement`,`lieuEvenement`) FROM `Evenement`(`idProjet`,`nomEvenement`,`descriptionEvenement`,`dateEvenement`,`lieuEvenement`) WHERE id=$id";
      return mysqli_query($c, $select);
  }
  
  function SelectAllEvent()
  {
       global $c;
	$select= "SELECT * FROM `Evenement` WHERE 1";
    return mysqli_query($c, $select);
  }
  

 function deleteEvent($id)
 {
      global $c;
     $delete= "DELETE  FROM `Evenement` WHERE `Evenement`.`idEvenement`=$id ";
     return mysqli_query($c, $delete);
 }

   function inserEvent($id, $nom, $description, $date, $lieu)
   {
        global $c;
       $inser= "INSERT INTO `Evenement`(`idProjet`,`nomEvenement`,`descriptionEvenement`,`dateEvenement`,`lieuEvenement`)
                    VALUES('$id','$nom','$description','$date','$lieu')";
       return mysqli_query($c, $inser);
   }

?>
