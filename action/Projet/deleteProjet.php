<?php
include_once "../../model/sqlProjet.php";
echo $_POST['champIdDelete'];
deleteProjet($_POST["champIdDelete"]);
header("Location:../../index.php?actionAdmin=projet&actionUtilisateur=projet");
  ?>
