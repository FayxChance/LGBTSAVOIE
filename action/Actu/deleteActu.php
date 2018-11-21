<?php
    include "./model/sqlActu.php";
    deleteActu($_POST["idActus"]);
    header "location:index.php?actionAdmin=actu&actionUtilisateur=actu";
?>