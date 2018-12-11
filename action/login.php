<?php
	session_start();
	include_once "../model/sqlUser.php";
	echo "yolo";

	include_once "./verif.php";
	if(empty($_SESSION['error'])){
		$res=selectAllUtilisateurs();
		while (	$row=mysqli_fetch_assoc($res)){
			if( $_POST['pseudoLogin']==$row['pseudoUtilisateur'] && $_POST['mdpLogin']==$row['mdpUtilisateur'] ){
				$_SESSION['connecte']=true;
				$_SESSION['role']=$row['roleUtilisateur'];
				$_SESSION['pseudoConnecte']=$row['pseudoUtilisateur'];
				$_SESSION['idConnecte']=$row['idUtilisateur'];
			}
		}
		unset($_SESSION['data']);
	}
	header("Location:../index.php?actionUtilisateur=index");
?>
