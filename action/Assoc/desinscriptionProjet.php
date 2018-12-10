<?php
  include_once "../../model/sqlAssoc.php";
  include_once "../../includes/db.php";
  $inscrit=mysqli_fetch_assoc(estInscrit($_POST['idProjetD'],$_POST['idConnecteD']));
  var_dump($inscrit);
  if(!is_null($inscrit)) {
    deleteUserProjet($_POST['idProjetD'],$_POST['idConnecteD']);
  }
  header("Location:../../index.php?actionUtilisateur=projet");
 ?>
