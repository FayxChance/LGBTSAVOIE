<?php

    include_once "../model/sqlUser.php";
    insertUtilisateur($_POST["nomUtilisateur"],$_POST["prenomUtilisateur"],$_POST["pseudoUtilisateur"],$_POST["telUtilisateur"],$_POST["mailUtilisateur"],$_POST["mdpUtilisateur"],2);
    header("Location:../index.php?actionUtilisateur=index");
?>
