<?php
  session_start();
  include "./includes/header.php";
?>
<?php
  if ($_SESSION['role']=='admin') {
      include "./action/actionAdmin.php";
  } else {
      include "./action/actionUtilisateur.php";
  }
 ?>
<?php
  include "./includes/footer.php";
?>
