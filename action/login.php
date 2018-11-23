<?php
	session_start();
	include "../model/sqlUser.php";
	$res=selectAllUtilisateurs();

	while (	$row=mysqli_fetch_assoc($res)){
		if( $_POST['pseudoLogin']==$row['pseudoUtilisateur'] && $_POST['mdpLogin']==$row['mdpUtilisateur'] ){
			$_SESSION['connecte']=true;
			$_SESSION['role']=$row['roleUtilisateur'];
		}
	}
	header("Location:../index.php");
?>
