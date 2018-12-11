<?php
    include_once "../../model/sqlActu.php";
    deleteActu($_POST["champIdDelete"]);

    header("Location:../../index.php?actionAdmin=actu&actionUtilisateur=actu");
?>
