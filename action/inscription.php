<?php

    include_once "../model/sqlUser.php";
    inserUtilisateur($_POST["nomUtilisateur"],$_POST["prenomUtilisateur"],$_POST["pseudoUtilisateur"],$_POST["mailUtilisateur"],$_POST["mdpUtilisateur"],$_POST["telUtilisateur"]);
    header("Location:../../index.php?actionUtilisateur=index");
?>
