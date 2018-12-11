 <?php
  include_once "../../includes/db.php";
  function selectAllProjet(){
    global $c;
    $select= "SELECT `idProjet`, `auteurProjet`, `titreProjet`, `descriptionProjet` FROM `Projet` WHERE 1";
    return mysqli_query($c, $select);
  }
  function selectProjet($id) {
    global $c;
    $select= "SELECT `idProjet`, `auteurProjet`, `titreProjet`, `descriptionProjet` FROM `Projet` WHERE idProjet=$id";
    return mysqli_query($c, $select);
  }
 function deleteProjet($id){
   global $c;
   $delete= "DELETE FROM `Projet` WHERE `Projet`.`idProjet`=$id";
   return mysqli_query($c, $delete);
 }
 function inserProjet($titre, $description,$idPersonne){
  global $c;
  $idPersonne=intval($idPersonne);
  $titre=mysqli_real_escape_string($c,$titre);
  $description=mysqli_real_escape_string($c,$description);

  $inser= "INSERT INTO `Projet`(`auteurProjet`, `titreProjet`, `descriptionProjet`) VALUES ($idPersonne,'$titre','$description')";
  echo $inser;
  return mysqli_query($c, $inser);
  }
