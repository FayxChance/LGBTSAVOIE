<?php

	include_once "./model/sqlUser.php";
	include_once "./model/sqlActu.php";
	$results = SelectAllActu();
	while ($row = mysqli_fetch_assoc($results)) {
		echo  "<ul><li>".$row["titreActus"]."</li>
				<li>".$row["dateActus"]."</li>
				<li>".$row["utilisateurActus"]."</li>
				<li>".$row["contenuActus"]."</li></ul>" ;
  }
?>
