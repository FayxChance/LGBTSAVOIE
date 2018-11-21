<?php
    include "./model/sqlEvent.php";
    selectAllEvent();
    header "location:index.php?actionAdmin=agenda&actionUtilisateur=agenda";
?>