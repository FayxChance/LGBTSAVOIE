<?php
include "./includes/header.php";
include "./model/sqlEvent.php";
?>

<form method="POST" action="delEvent.php">	
   <label for="Supprimer">Supprimer un evenement</label><br/>
		<select name="idEvent">
		<?php 
			
			while($row = mysqli_fetch_assoc(selectAllEvent())){
				echo"<option value='".$row["idEvent"]."'>";
				echo $row["titreEvent"];
				echo"</option>";
			}
		?>
		</select>
		<input  type="submit" name="supprimerEvent" value="Supprimer "> </br>
</form>



<form method="POST" action="addEvent.php">	
	<p> Ajouter un enenement </p>
	<label for="ajout"/>nom :</label>
		<input  type="text" name="nomEvent"><br/>
	<label for="ajout"/>desctiption :</label>
		<input  type="date" name="descriptionEvent"><br/>
    <label for="ajout"/>dete :</label>
		<input  type="integer" name="dateEvent"><br/>
     <label for="ajout"/>lieu :</label>
		<input  type="text" name="lieuEvent"><br/>
    <label for="ajout"/>projet associé :</label>
		<input  type="integer" name="projetEvent"><br/>

	<input  type="submit" name="insererEvent" value="Ajouter un evenement"><br/>
</form>



<form method="POST" action="updEvent.php">
    <label for="update">Nouveau nom</label><br/>
		<input type="text" name="updateNom"><br/>
     <label for="update">Nouveau description</label><br/>
        <input type="text" name="updateDescription"><br/>
    <label for="update">Nouveau date</label><br/>
        <input type="date" name="updateDate"><br/>
    <label for="update">Nouveau lieu</label><br/>
        <input type="text" name="updateLieu"><br/>
    <label for="update">Nouveau projet associé</label><br/>
        <input type="integer" name="updateProjet"><br/>


	<input  type="submit" name="updateEvent" value="update">
</form>