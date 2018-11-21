<?php
  echo getcwd();
  include "../includes/db.php";
  function selectUtilisateur($id)
  {
    global $c;
    $select="SELECT (`nomUtilisateur`,`prenomUtilisateurs`,`pseudoUtilisateur`,`telUtilisateur`,`mailUtilisateur`,`mdpUtilisateur`,`roleUtilisateur`,`fonctionUtilisateur`) FROM Utilisateur (`nomUtilisateur`,`prenomUtilisateurs`,`pseudoUtilisateur`,`telUtilisateur`,`mailUtilisateur`,`mdpUtilisateur`,`roleUtilisateur`,`fonctionUtilisateur`)
    WHERE id=$id";
    return mysqli_query($c, $select);
  }

function selectAllUtilisateurs()
{
  global $c;
  $select="SELECT * FROM Utilisateur WHERE 1";
  return mysqli_query($c, $select) ;
}
