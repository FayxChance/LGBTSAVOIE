<?php
	function formulaireLogin(){
		echo "<p>Connexion</p>
		<form method='post' action='./action/login.php'>
			<p>
				<label for='pseudoLogin'>Pseudo</label>
				<input type='text' name='pseudoLogin'/>
			</p>
			<p>
				<label for='mdpLogin'>Mot de passe</label>
				<input type='password' name='mdpLogin' size='16'/>
			</p>
			<p>
				<label for='action'></label>
				<input type='submit' name='action' value='Connexion'/>
			</p>
		</form>

		<p>Inscription</p>
		<form method='post' action='./action/inscription.php'>
			<p>
				<label for='nomUtilisateur'>Nom</label>
				<input type='text' name='nomUtilisateur'/>
			</p>
			<p>
				<label for='prenomUtilisateur'>Prénom</label>
				<input type='text' name='prenomUtilisateur' />
			</p>
			<p>
				<label for='pseudoUtilisateur'>Pseudo</label>
				<input type='text' name='pseudoUtilisateur'/>
			</p>
			<p>
				<label for='telUtilisateur'>Téléphone</label>
				<input type='text' name='telUtilisateur'/>
			</p>
			<p>
				<label for='mailUtilisateur'>Adresse E-mail</label>
				<input type='text' name='mailUtilisateur'/>
			</p>
			<p>
				<label for='mdpUtilisateur'>Mot de passe</label>
				<input type='password' name='mdpUtilisateur'/>
			</p>
			<p>
				<label for='action'></label>
				<input type='submit' name='action' value='Inscription'/>
			</p>
		</form>";
	}

	function afficheActu() {
		include_once "./model/sqlUser.php";
		include_once "./model/sqlActu.php";
		$results = SelectAllActu();
		while ($row = mysqli_fetch_assoc($results)) {
			echo  "<ul><li>".$row["titreActus"]."</li>
					<li>".$row["dateActus"]."</li>
					<li>".$row["utilisateurActus"]."</li>
					<li>".$row["contenuActus"]."</li></ul>" ;
	  }
  }
	function afficheEvent(){
	include_once "./model/sqlEvent.php";
	$results = SelectAllEvent();
	while ($row = mysqli_fetch_assoc($results)) {
		echo "
		<ul>
			 <li>".$row["nomEvenement"]."</li>
			<li>".$row["descriptionEvenement"]."</li>
			 <li>".$row["dateEvenement"]."</li>
			<li>".$row["lieuEvenement"]."</li>
		 </ul>";
	 }
	}
