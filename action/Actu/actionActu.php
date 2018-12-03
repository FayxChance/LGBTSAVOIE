<?php include_once "./model/sqlActu.php";
 ?>
<form method="POST" action="./action/Actu/deleteActu.php">
   <label for="Supprimer">Supprimer une Actus</label><br/>
    <select name="champIdDelete">
		  <?php
      $res=selectAllActu();
			  while( $row =mysqli_fetch_assoc($res)){
				  echo '<option value="'.$row["idActus"].'">'.$row["titreActus"].'</option>';
			  }
		?>
		</select>
		<input class="bouton"  type="submit" name="supprimerActu" value="Supprimer "> </br>
</form>



<form method="POST" action="./action/Actu/insertActu.php">
	<p> Ajouter une actualité </p>
	<label for="ajout"/>titre :</label>
		<input  type="text" name="titreActu"><br/>
	<label for="ajout"/>date :</label>
		<input  type="date" name="dateActu"><br/>
    <label for="ajout"/>utilisateur :</label>
		<input  type="number" name="utilisateurActu"><br/>
     <label for="ajout"/>contenu :</label>
		<input  type="text" name="contenuActu"><br/>

	<input class="bouton" type="submit" name="insererActu" value="Ajouter une Actu"><br/>
</form>
