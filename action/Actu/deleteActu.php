<?php
    include_once "../../model/sqlActu.php";
    echo "yolo";
    echo $_POST['champIdDelete'];
    deleteActu($_POST["champIdDelete"]);
    echo "yolo";

    header("Location:../../index.php?actionAdmin=actu&actionUtilisateur=actu");
?>
