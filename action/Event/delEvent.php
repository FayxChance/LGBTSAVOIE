<?php
    include "./model/sqlEvent.php";
    deleteEvent($_POST["idEvent"]);
    header "location:index.php?actionAdmin=agenda&actionUtilisateur=agenda";
?>