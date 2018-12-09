<?php
  include_once "../../model/sqlAssoc.php";
  include_once "../../includes/db.php";
  $inscrit=mysqli_fetch_assoc(estInscrit($_POST['idProjet'],$_POST['idConnecte']));
  if(is_null($inscrit)) {
    inscriptionUser($_POST['idProjet'],$_POST['idConnecte']);
  }
  header("Location:../../index.php?actionUtilisateur=projet");
 ?>
