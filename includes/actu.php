<?php
  session_start();
  include "./model/sqlUser.php";
  include "./model/sqlActu.php";
  include "./model/affichage.php";
  $id=1;
  $utilisateur=selectUtilisateur($id);
  echo mysqli_fetch_assoc($utilisateur["idUtilisateur"]);
