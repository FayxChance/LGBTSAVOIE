<?php
    include_once "../../model/sqlAssoc.php";
    deleteUtilisateur($_POST["idUtilisateur"]);
    header("Location:../../index.php?actionAdmin=index&actionUtilisateur=index");
?>
