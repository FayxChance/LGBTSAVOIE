<?php
    include_once "../../model/sqlEvent.php";


    deleteEvent($_POST["idEvent"]);


    header("Location:../../index.php?actionAdmin=agenda&actionUtilisateur=agenda");
?>
