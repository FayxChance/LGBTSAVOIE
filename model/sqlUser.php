<?php
  include_once "../includes/db.php";
  function selectUtilisateur($id){
    global $c;
    $select="SELECT `idUtilisateur`, `nomUtilisateur`, `prenomUtilisateur`, `pseudoUtilisateur`, `telUtilisateur`, `mailUtilisateur`, `mdpUtilisateur`, `roleUtilisateur` FROM `Utilisateur` WHERE  idUtilisateur=$id";
    return mysqli_query($c, $select);
  }

  function selectAllUtilisateurs(){
  global $c;
  $select="SELECT `idUtilisateur`, `nomUtilisateur`, `prenomUtilisateur`, `pseudoUtilisateur`, `telUtilisateur`, `mailUtilisateur`, `mdpUtilisateur`, `roleUtilisateur` FROM `Utilisateur`  ";
  return mysqli_query($c, $select) ;
 }

  function insertUtilisateur($nomUtilisateur, $prenomUtilisateurs, $pseudoUtilisateur, $telUtilisateur, $mailUtilisateur, $mdpUtilisateur, $roleUtilisateur){
  global $c;
  $inser= "INSERT INTO `Utilisateur`(`nomUtilisateur`, `prenomUtilisateur`, `pseudoUtilisateur`, `telUtilisateur`, `mailUtilisateur`, `mdpUtilisateur`, `roleUtilisateur`) VALUES ('$nomUtilisateur','$prenomUtilisateurs','$pseudoUtilisateur','$telUtilisateur', '$mailUtilisateur','$mdpUtilisateur','$roleUtilisateur')";
  return mysqli_query($c, $inser);
 }

  function deleteUtilisateur($id){
  include_once "../../includes/db.php";
  $delete= "DELETE FROM `Utilisateur` WHERE `Utilisateur`.`idUtilisateur`=$id";
  return mysqli_query($c, $delete); ;
}

?>
