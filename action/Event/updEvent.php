<?php
    include "./model/sqlEvent.php";
    updateEvent($_POST["idEvent"],$_POST["updateProjet"],$_POST["updateNom"],$_POST["updateDescription"],$_POST["updateDate"],$_POST["updateLieu"]);
    header "location:index.php?actionAdmin=agenda&actionUtilisateur=agenda";
?>