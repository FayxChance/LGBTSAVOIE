<?php
include_once "../../model/sqlProjet.php";
inserProjet($_POST["titreProjet"],$_POST["descriptionProjet"],1);
//header("location:../../index.php?actionAdmin=projet&actionUtilisateur=projet");
 ?>
