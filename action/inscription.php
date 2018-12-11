<?php

    include_once "../model/sqlUser.php";
    include_once "./verif.php";
    var_dump($_SESSION['data']);
    var_dump(is_numeric("+33665557986"));
    if(empty($_SESSION['error'])){
      insertUtilisateur($_POST["nomUtilisateur"],$_POST["prenomUtilisateur"],$_POST["pseudoUtilisateur"],$_POST["telUtilisateur"],$_POST["mailUtilisateur"],$_POST["mdpUtilisateur"],2);
      unset($_SESSION['data']);
    }

    header("Location:../index.php?actionUtilisateur=login");
?>
