<?php
include_once "../../model/sqlProjet.php";
inserProjet($_POST["titreProjet"],$_POST["descriptionProjet"],$_POST["auteurProjet"]);
header("location:../../index.php?actionAdmin=projet&actionUtilisateur=projet");
 ?>
