<?php
    include "./model/sqlActu.php";
    deleteActu($_POST["idActu"]);
    header "location:index.php?actionAdmin=actu&actionUtilisateur=actu";
?>