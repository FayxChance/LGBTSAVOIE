<?php
  session_start();
  include "./includes/header.php";
?>
<?php
  if ($_SESSION['role']==1) {
      include "./action/actionAdmin.php";
  } else {
      include "./action/actionUtilisateur.php";
  }
 ?>
<?php
  include "./includes/footer.php";
?>
