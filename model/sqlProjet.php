 <?php
  include "../../includes/db.php";
  function selectAllProjet(){
    global $c;
    $select= "SELECT `idProjet`, `auteurProjet`, `titreProjet`, `descriptionProjet` FROM `Projet` WHERE 1";
    return mysqli_query($c, $select);
  }
 function deleteProjet($id){
   global $c;
   $delete= "DELETE FROM `Projet` WHERE `Projet`.`idProjet`=$id";
   return mysqli_query($c, $delete);
 }
 function inserProjet($titre, $description,$idPersonne){
  global $c;
  echo gettype($idPersonne);
  $inser= "INSERT INTO `Projet` (`titreProjet`,`auteurProjet`, `descriptionProjet`) VALUES ('$titre',$idPersonne , '$description' )";
  return mysqli_query($c, $inser) or die(mysqli_error($c));
  }
