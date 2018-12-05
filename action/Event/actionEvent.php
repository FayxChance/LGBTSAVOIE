<?php
include_once "./model/sqlEvent.php";
?>
<div class="formulairesCIS">
<div class=divDelete>
<form method="POST" action="./action/Event/delEvent.php">
   <label for="Supprimer">Supprimer un evenement</label><br/>
		<select name="idEvent">
		<?php
			$res=selectAllEvent();
			while($row = mysqli_fetch_assoc($res)){
				echo"<option value='".$row["idEvenement"]."'>";
				echo $row["nomEvenement"];
				echo"</option>";
			}
		?>
		</select>
		<input class="bouton" type="submit" name="supprimerEvent" value="Supprimer "> </br>
</form>
</div>

<div class="divAjouter">
<form method="POST" action="./action/Event/addEvent.php">
	<p> Ajouter un evenement </p>
	<label for="ajout"/>nom :</label>
		<input  type="text" name="nomEvent"><br/>
	<label for="ajout"/>description :</label>
		<input  type="text" name="descriptionEvent"><br/>
    <label for="ajout"/>date :</label>
		<input  type="date" name="dateEvent"><br/>
     <label for="ajout"/>lieu :</label>
		<input  type="text" name="lieuEvent"><br/>
    <label for="ajout"/>projet associé :</label>
		<input  type="number" name="projetEvent"><br/>

	<input class="bouton" type="submit" name="insererEvent" value="Ajouter un evenement"><br/>
</form>
</div>
</div>



<!--<form method="POST" action="updEvent.php">
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
</form>-->
