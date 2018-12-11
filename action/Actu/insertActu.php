<?php

    include_once "../../model/sqlActu.php";
    include_once "../verif.php";
    if(empty($_SESSION['error'])){
    inserActu($_POST["titreActu"],$_POST["dateActu"],1,$_POST["contenuActu"]);
    unset($_SESSION['data']);
    }
    header("Location:../../index.php?actionAdmin=actu&actionUtilisateur=actu");
?>
