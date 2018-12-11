<?php
include_once "../../includes/db.php";

  function selectEvent($id)
  {
      global $c;
      $select= "SELECT (`idProjet`,`nomEvenement`,`descriptionEvenement`,`dateEvenement`,`lieuEvenement`) FROM `Evenement`(`idProjet`,`nomEvenement`,`descriptionEvenement`,`dateEvenement`,`lieuEvenement`) WHERE id=$id";
      return mysqli_query($c, $select);
  }

  function selectAllEvent()
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
    $nom=mysqli_real_escape_string($c,$nom);
    $description=mysqli_real_escape_string($c,$description);
    $lieu=mysqli_real_escape_string($c,$lieu);
    $inser= "INSERT INTO `Evenement`(`idProjet`,`nomEvenement`,`descriptionEvenement`,`dateEvenement`,`lieuEvenement`) VALUES($id,'$nom','$description','$date','$lieu')";
    return mysqli_query($c, $inser);
 }
 function selectEventJour($jour){
   global $c;
   $sql= "SELECT `idEvenement`, `idProjet`, `nomEvenement`, `descriptionEvenement`, `dateEvenement`, `lieuEvenement` FROM `Evenement` WHERE `dateEvenement`='$jour' ORDER BY `dateEvenement` ASC";
   return mysqli_query($c,$sql);
 }
 function selectEventPeriode($jourDebut,$jourFin){
   global $c;
   $sql="SELECT `dateEvenement` FROM `Evenement` WHERE dateEvenement>='$jourDebut' AND dateEvenement<='$jourFin' ORDER BY `dateEvenement` ASC";
   return mysqli_query($c,$sql);
 }

?>
