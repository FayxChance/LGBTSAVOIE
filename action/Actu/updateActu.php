<?php
    include "./model/sqlActu.php";
    updateActu($_POST["idActus"],$_POST["updateContenu"],$_POST["updateTitre"]);
    header "location:index.php?actionAdmin=actu&actionUtilisateur=actu";
?>