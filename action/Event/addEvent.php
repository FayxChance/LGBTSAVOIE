<?php

    include "../../model/sqlActu.php";
    inserActu($_POST["projetEvent"],$_POST["nomEvent"],$_POST["descriptionEvent"],$_POST["dateEvent"],$_POST["lieuEvent"]);
    header("location:../../index.php?actionAdmin=agenda&actionUtilisateur=agenda");
?>
