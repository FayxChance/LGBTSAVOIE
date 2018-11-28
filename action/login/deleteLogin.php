<?php
    include_once "../../model/sqlLogin.php";
    echo "yolo";
    echo $_POST['idUtilisateur'];
    deleteUtilisateur($_POST["idUtilisateur"]);
    echo "yolo";

    header("Location:../../index.php?actionAdmin=index&actionUtilisateur=index");
?>