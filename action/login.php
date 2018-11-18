<?php
session_start();
include "./model/sqlUser.php";
include "verif.php";


while ($row = mysqli_fetch_assoc(selectAllUtilisateurs())) {
		if $_POST['pseudoLogin']==$row['pseudoUtilisateur'] and $_POST['mdpLogin']==$row['mdpUtilisateur'] {
		$_SESSION['connecte']=true;
		$_SESSION['role']=$row['roleUtilisateur'];
		}
	}	
?>