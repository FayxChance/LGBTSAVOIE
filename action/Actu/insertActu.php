<?php

    include "../../model/sqlActu.php";
    inserActu($_POST["titreActu"],$_POST["dateActu"],$_POST["utilisateurActu"],$_POST["contenuActu"]);
    header("Location:../../index.php?actionAdmin=actu&actionUtilisateur=actu");
?>
