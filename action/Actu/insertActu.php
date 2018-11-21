<?php
    include "./model/sqlActu.php";
    inserActu($_POST["titreActu"],$_POST["dateActu"],$_POST["contenuActu"]);
    header "location:index.php?actionAdmin=actu&actionUtilisateur=actu";
?>