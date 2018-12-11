<?php
include_once "../../model/sqlProjet.php";
include_once "../verif.php";
if(empty($_SESSION['error'])){
  inserProjet($_POST["titreProjet"],$_POST["descriptionProjet"],1);
  unset($_SESSION['data']);
}
header("Location:../../index.php?actionAdmin=projet&actionUtilisateur=projet");
 ?>
