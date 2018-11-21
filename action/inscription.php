<?php
	include "../model/sqlUser.php";
	insertUtilisateur($_POST[nomUtilisateur], $_POST[prenomUtilisateur], $_POST[pseudoUtilisateur], $_POST[telUtilisateur], $_POST[mailUtilisateur], $_POST[mdpUtilisateur]);
	header("Location:");
?>