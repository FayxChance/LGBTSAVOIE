<?php

  function selectUtilisateur($id)
  {
      $select="SELECT (`nomUtilisateur`,`prenomUtilisateurs`,`pseudoUtilisateur`,`telUtilisateur`,`mailUtilisateur`,`mdpUtilisateur`,`roleUtilisateur`,`fonctionUtilisateur`) FROM Utilisateurs (`nomUtilisateur`,`prenomUtilisateurs`,`pseudoUtilisateur`,`telUtilisateur`,`mailUtilisateur`,`mdpUtilisateur`,`roleUtilisateur`,`fonctionUtilisateur`)
      WHERE id=$id";
      return mysqli_query($c, $select);
  }

function selectAllUtilisateurs()
{
    $select="SELECT * FROM Utilisateurs ";
    return mysqli_query($c, $select) ;
}
