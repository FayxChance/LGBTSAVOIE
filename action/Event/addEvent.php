<?php
    include_once "../../model/sqlEvent.php";
    include_once "../verif.php";
    if(empty($_SESSION['error'])){
    inserEvent($_POST["idEventAjout"],$_POST["nomEvent"],$_POST["descriptionEvent"],$_POST["dateEvent"],$_POST["lieuEvent"]);
    unset($_SESSION['data']);
  }
    header("location:../../index.php?actionAdmin=agenda&actionUtilisateur=agenda");
?>
