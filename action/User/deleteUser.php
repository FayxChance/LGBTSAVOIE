<?php
    include_once "../../model/sqlUser.php";
    echo getcwd();
    deleteUtilisateur($_POST["idUtilisateur"]);
    header("Location:../../index.php?actionAdmin=index&actionUtilisateur=index");
?>
