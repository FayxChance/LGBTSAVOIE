<?php
  session_start();
  include_once "./includes/header.php";
?>
<?php
  if ($_SESSION['role']==1) {include_once "./action/actionAdmin.php";}
  include_once "./action/actionUtilisateur.php";
  include_once "./includes/footer.php";
?>
