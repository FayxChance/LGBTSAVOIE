<?php

  function estInscrit($idProjet,$idPersonne){
    global $c;
    $requete="SELECT * FROM `Assoc` WHERE idProjet=$idProjet AND idUtilisateur=$idPersonne";
    return mysqli_query($c,$requete);
  }
  function allInscrit($idProjet){
    global $c;
    $requete="SELECT `idUtilisateur` FROM `Assoc` WHERE idProjet=$idProjet";
    return mysqli_query($c,$requete);
  }
  function inscriptionUser($idProjet,$idPersonne){
    global $c;
    $requete="INSERT INTO `Assoc`(`idProjet`, `idUtilisateur`)  VALUES ($idProjet,$idPersonne)";
    var_dump($requete);
    return mysqli_query($c,$requete);
  }
  function deleteUserProjet($idProjet,$idPersonne){
    global $c;
    $requete="DELETE FROM `Assoc` WHERE idProjet=$idProjet AND idUtilisateur=$idPersonne";
    return mysqli_query($c,$requete);
  }
 ?>
