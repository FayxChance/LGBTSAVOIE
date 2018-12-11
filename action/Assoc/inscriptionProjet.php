<?php
  include_once "../../model/sqlAssoc.php";
  include_once "../../includes/db.php";
  $inscrit=mysqli_fetch_assoc(estInscrit($_POST['idProjet'],$_POST['idConnecte']));
  var_dump($inscrit);
  if(is_null($inscrit)) {
    inscriptionUser($_POST['idProjet'],$_POST['idConnecte']);
  }
  header("Location:../../index.php?actionUtilisateur=projet");
 ?>
