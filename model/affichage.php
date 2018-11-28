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
	function afficheAllActu() {
		include_once "./model/sqlUser.php";
		include_once "./model/sqlActu.php";
		$results = selectAllActu();
		while ($row = mysqli_fetch_assoc($results)) {
			$resultUser=selectUtilisateur($row['utilisateurActus']);
			$rowUser=mysqli_fetch_assoc($resultUser);
			afficheUneActu($row['titreActus'],$row['dateActus'],$rowUser['pseudoUtilisateur'],$row['contenuActus']);
	  }
  }
	function afficheLastActu(){
		include_once "./model/sqlUser.php";
		include_once "./model/sqlActu.php";
		$results = selectLastActu();
		while ($row = mysqli_fetch_assoc($results)){
			$resultUser=selectUtilisateur($row['utilisateurActus']);
			$rowUser=mysqli_fetch_assoc($resultUser);
			afficheUneActu($row['titreActus'],$row['dateActus'],$rowUser['pseudoUtilisateur'],$row['contenuActus']);
		}
	}
	function afficheUneActu($titre,$date,$utilisateur,$contenu){
		echo
		 "<div class='actu'>
				<h3>".$titre."</h3>
				<article>".$contenu."</article>
				<span>Auteur : ".$utilisateur."</span>
				<span>Date : ".$date."</span>
			</div>";
	}

	function afficheUnProjet($auteur,$titre,$description){
		echo
		 "<div class='actu'>
				<h3>".$titre."</h3>
				<article>".$description."</article>
				<span>Auteur : ".$auteur."</span>
			</div>";
	}

	function afficheAllProjet() {
		include_once "./model/sqlUser.php";
		include_once "./model/sqlProjet.php";
		$results = selectAllProjet();
		while ($row = mysqli_fetch_assoc($results)) {
			$resultUser=selectUtilisateur($row['auteurProjet']);
			$rowUser=mysqli_fetch_assoc($resultUser);
			afficheUnProjet($rowUser['pseudoUtilisateur'],$row['titreProjet'],$row['descriptionProjet']);
	  }
	}


	function afficheEtatConnexion(){
		if (!$_SESSION['connecte']){
			echo "Vous n'êtes pas connecté.";
			echo  "<a href='index.php?actionUtilisateur=login'>Connexion/Inscription</a>"; 
		}
		else {
			echo "Vous êtes connecté en tant que : ".$_SESSION['pseudoConnecte'].".";
			echo "<a href='./action/logout.php'>Se déconnecter</a>";
			
		}
		
	
	
	}

	function afficheUlUtilisateur(){
		echo '
		<ul class="headerUl">
			<li class="headerLi" ><a id="headerAIndex" class="headerA" href="index.php?actionUtilisateur=index  "                               >   Accueil       </a></li>
			<li class="headerLi" ><a id="headerAActu" class="headerA" href="index.php?actionUtilisateur=actu   "      >   Actus         </a></li>
			<li class="headerLi" ><a id="headerAAgenda" class="headerA" href="index.php?actionUtilisateur=agenda "    >   Agenda        </a></li>
			<li class="headerLi" ><a id="headerAProjet" class="headerA" href="index.php?actionUtilisateur=projet "    >   Projets       </a></li>
			<li class="headerLi" ><a id="headerAGalerie" class="headerA" href="index.php?actionUtilisateur=galerie"   >   Galerie       </a></li>';
			if(!$_SESSION['connecte']){
				echo '
				<li class="headerLi" ><a id="headerALogin" class="headerA" href="index.php?actionUtilisateur=login  "     >   Connexion/Inscription      </a></li>';
			}
			else {
				echo '<li class="headerLi" ><form action="./action/logout.php" method="POST"><input id="headerALogin" class="headerA"  value="Deconnexion" type="submit"   ></form></li>';
			}
			echo '<li class="headerLi" ><a id="headerAContact" class="headerA" href="index.php?actionUtilisateur=contact"   >   Contact       </a></li>
		</ul>';
	}
	function afficheUlAdmin(){
		if ($_SESSION['role']==1) {
			echo '
					<ul class="headerUl">
						<li class="headerLi"><a class="headerA" href="index.php?actionAdmin=index&actionUtilisateur=index  "     >   Accueil       </a></li>
						<li class="headerLi"><a class="headerA" href="index.php?actionAdmin=actu&actionUtilisateur=actu   "      >   Actus         </a></li>
						<li class="headerLi"><a class="headerA" href="index.php?actionAdmin=agenda&actionUtilisateur=agenda "    >   Agenda        </a></li>
						<li class="headerLi"><a class="headerA" href="index.php?actionAdmin=projet&actionUtilisateur=projet "    >   Projets       </a></li>
						<li class="headerLi"><a class="headerA" href="index.php?actionAdmin=galerie&actionUtilisateur=galerie"   >   Galerie       </a></li>
						<li class="headerLi"><a class="headerA" href="index.php?actionAdmin=login&actionUtilisateur=login  "     >   Connexion/Inscription      </a></li>
						<li class="headerLi"><a class="headerA" href="index.php?actionAdmin=contact&actionUtilisateur=contact"   >   Contact       </a></li>
					</ul>
				';
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
