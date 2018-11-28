<?php
include_once "./model/sqlLogin.php";
?>

<form method="POST" action="./action/Login/deleteLogin.php">
   <label for="Supprimer">Supprimer un utilisateur</label><br/>
		<select name="idUtilisateur">
		<?php
			$res=selectAllUtilisateurs();
			while($row = mysqli_fetch_assoc($res)){
				echo"<option value='".$row["idUtilisateur"]."'>";
				echo $row["nomUtilisateur"];
				echo"</option>";
			}
		?>
		</select>
		<input  type="submit" name="supprimerUtilisateur" value="Supprimer "> </br>
</form>