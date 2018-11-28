<?php

	function selectAllUtilisateurs(){
		global $c;
		$select="SELECT `idUtilisateur`, `nomUtilisateur`, `prenomUtilisateur`, `pseudoUtilisateur`, `telUtilisateur`, `mailUtilisateur`, `mdpUtilisateur`, `roleUtilisateur` FROM `Utilisateur`  ";
		return mysqli_query($c, $select) ;
	}
 
	function deleteUtilisateur($id){
		global $c;
		$sql="DELETE FROM `Utilisateur` WHERE `Utilisateur`.`idUtilisateur` = $id";
		return mysqli_query($c,$sql);
	}