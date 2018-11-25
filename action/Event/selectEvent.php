<?php
    include_once "./model/sqlEvent.php";
    deleteEvent($_POST["idEvent"]);
    header ("location:index.php?actionAdmin=event&actionUtilisateur=event");
?>
