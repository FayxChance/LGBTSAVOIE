<?php
echo  getcwd();

	session_start();
	include "./model/sqlUser.php";
	include "./model/sqlProjet.php";
	$results = selectAllProjet();

	while ($row = mysqli_fetch_assoc($results)) {
		$rowUser=mysqli_fetch_assoc(selectUtilisateur($row["auteurProjet"]));
		echo
		"<ul>
			<li>".$rowUser["pseudoUtilisateur"]."</li>
			<li>".$row["titreProjet"]."</li>
			<li>".$row["descriptionProjet"]."</li>
		</ul>" ;
  }
?>
