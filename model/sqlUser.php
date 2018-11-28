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
	$inser= "INSERT INTO `Utilisateur`(`nomUtilisateur`,`prenomUtilisateurs`,`pseudoUtilisateur`,`telUtilisateur`, `mailUtilisateur`,`mdpUtilisateur`,`roleUtilisateur`)
    VALUES(`$nomUtilisateur`,`$prenomUtilisateurs`,`$pseudoUtilisateur`,`$telUtilisateur`, `$mailUtilisateur`,`$mdpUtilisateur`,`$roleUtilisateur`)";
  return mysqli_query($c, $inser) or die("Erreur envoie");
 }
?>
