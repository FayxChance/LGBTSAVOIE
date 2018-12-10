<div class="formulairesCIS">
<form method="POST" action="./action/Galerie/insertGalerie.php" enctype="multipart/form-data">
	<p> Ajouter une image </p>
	<label for="file"/>Image</label>
		<input type="file" name="file"><br/>
		<input class="bouton" type="submit" name="insererGalerie" value="Upload une image"><br/>
		<?php include_once "./model/erreur.php";?>

</form>
</div>
