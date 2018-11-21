<?php
    include "./model/sqlActu.php";
    inserActu($_POST["idActu"],$_POST["idActu"],$_POST["idActu"],$_POST["idActu"]);
    header "location:index.php?actionAdmin=actu&actionUtilisateur=actu";
?>