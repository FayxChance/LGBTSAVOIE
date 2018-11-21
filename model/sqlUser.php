<?php
  include "../includes/db.php";
  function selectUtilisateur($id)
  {
    global $c;
    $select="SELECT (`nomUtilisateur`,`prenomUtilisateurs`,`pseudoUtilisateur`,`telUtilisateur`,`mailUtilisateur`,`mdpUtilisateur`,`roleUtilisateur`) FROM Utilisateur (`nomUtilisateur`,`prenomUtilisateurs`,`pseudoUtilisateur`,`telUtilisateur`,`mailUtilisateur`,`mdpUtilisateur`,`roleUtilisateur`) WHERE id=$id";
    return mysqli_query($c, $select);
  }

function selectAllUtilisateurs()
{
  global $c;
  $select="SELECT (`nomUtilisateur`,`prenomUtilisateurs`,`pseudoUtilisateur`,`telUtilisateur`,`mailUtilisateur`,`mdpUtilisateur`,`roleUtilisateur`) FROM Utilisateur (`nomUtilisateur`,`prenomUtilisateurs`,`pseudoUtilisateur`,`telUtilisateur`,`mailUtilisateur`,`mdpUtilisateur`,`roleUtilisateur`)";
  return mysqli_query($c, $select) ;
 }
  
function insertUtilisateur($nomUtilisateur, $prenomUtilisateurs, $pseudoUtilisateur, $telUtilisateur, $mailUtilisateur, $mdpUtilisateur, $roleUtilisateur)
 {
	$inser= "INSERT INTO `Utilisateur`(`nomUtilisateur`,`prenomUtilisateurs`,`pseudoUtilisateur`,`telUtilisateur`, `mailUtilisateur`,`mdpUtilisateur`,`roleUtilisateur`)
    VALUES(`$nomUtilisateur`,`$prenomUtilisateurs`,`$pseudoUtilisateur`,`$telUtilisateur`, `$mailUtilisateur`,`$mdpUtilisateur`,`$roleUtilisateur`)";
    return mysqli_query($c, $inser) or die("Erreur envoie");
 }
