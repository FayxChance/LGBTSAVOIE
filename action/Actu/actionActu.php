<?php
include "./includes/header.php";
include "./model/sqlActu.php";
?>

<form method="POST" action="deleteActu.php">	
   <label for="Supprimer">Supprimer une Actu</label><br/>
		<select name="idActus">
		<?php 
			
			while($row = mysqli_fetch_assoc(selectAllActu())){
				echo"<option value='".$row["idActus"]."'>";
				echo $row["titreActus"];
				echo"</option>";
			}
		?>
		</select>
		<input  type="submit" name="supprimerActu" value="Supprimer "> </br>
</form>



<form method="POST" action="insertActu.php">	
	<p> Ajouter une Actu </p>
	<label for="ajout"/>titre :</label>
		<input  type="text" name="titreActu"><br/>
	<label for="ajout"/>date :</label>
		<input  type="date" name="dateActu"><br/>
     <label for="ajout"/>contenu :</label>
		<input  type="text" name="contenuActu"><br/>

	<input  type="submit" name="insererActu" value="Ajouter une Actu"><br/>
</form>



<form method="POST" action="updateActu.php">
    <label for="update">Nouveau titre</label><br/>
		<input type="text" name="updateTitre"><br/>
     <label for="update">Nouveau contenu</label><br/>
        <input type="text" name="updateContenu"><br/>


	<input  type="submit" name="updateActu" value="update">
</form>