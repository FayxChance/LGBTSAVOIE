<?php
  function selectRole()
  {
      $select= "SELECT (`idRole`,`roleRole`) FROM `Role`(`idRole`,`roleRole`) WHERE id=$id";
      return mysqli_query($c, $select) or die("Erreur envoie");
  }
