<?php
  session_start();
  include "./includes/header.php";
?>
<?php
  if ($_SESSION['role']==1) {include "./action/actionAdmin.php";}
  include "./action/actionUtilisateur.php";
  include "./includes/footer.php";
?>
