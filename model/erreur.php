<?php session_start();
  if(!empty($_SESSION['error'])){
      foreach ($_SESSION['error'] as $erreur) {
        echo $erreur."<br>";
      }
  }
?>
