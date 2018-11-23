<?php
    include "../../model/sqlActu.php";
   
   
    deleteActu($_POST["idEvent"]);
  

    header("Location:../../index.php?actionAdmin=actu&actionUtilisateur=actu");
?>