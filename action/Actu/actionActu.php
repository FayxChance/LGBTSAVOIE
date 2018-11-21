<?php
include "./includes/header.php";

?>

<form method="POST" action="deleteActu.php">	
   <label for="Supprimer">Supprimer une Actus</label><br/>
		<select name="idActus">
		<?php 
			$affichage = "SELECT * FROM `Actu` WHERE 1";
			$results = mysqli_query($c,$affichage) or die ("erreur requete");
			while($row = mysqli_fetch_assoc($results)){
				echo"<option value='".$row["idActus"]."'>";
				echo $row["titreActus"];
				echo"</option>";
			}
		?>
		</select>
		<input  type="submit" name="supprimerActu" value="Supprimer "> </br>
</form>



<form method="POST" action="insertActu.php">	
	<p> Ajouter une performance </p>
	<label for="ajout"/>titre :</label>
		<input  type="text" name="titreActu"><br/>
	<label for="ajout"/>date :</label>
		<input  type="date" name="dateActu"><br/>
    <label for="ajout"/>utilisateur :</label>
		<input  type="integer" name="utilisateurActu"><br/>
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