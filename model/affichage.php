<?php
	function formulaireLogin(){

		echo "<div class='formulairesCIS'><div class='divConnexion'>Connexion
		<form method='post' action='./action/login.php'>
			<p>
				<label for='pseudoLogin'>Pseudo</label>
				<input class='champ' type='text' name='pseudoLogin'/>
			</p>
			<p>
				<label for='mdpLogin'>Mot de passe</label>
				<input class='champ' type='password' name='mdpLogin' size='16'/>
			</p>
			<p>
				<label for='action'></label>
				<input class='bouton' type='submit' name='action' value='Connexion'/>
			</p>
		</form></div>
		<div class='divInscription'>Inscription
		<form method='post' action='./action/inscription.php'>
			<p>
				<label for='nomUtilisateur'>Nom</label>
				<input class='champ' type='text' name='nomUtilisateur'/>
			</p>
			<p>
				<label for='prenomUtilisateur'>Prénom</label>
				<input class='champ' type='text' name='prenomUtilisateur' />
			</p>
			<p>
				<label for='pseudoUtilisateur'>Pseudo</label>
				<input class='champ' type='text' name='pseudoUtilisateur'/>
			</p>
			<p>
				<label for='telUtilisateur'>Téléphone</label>
				<input class='champ' type='text' name='telUtilisateur'/>
			</p>
			<p>
				<label for='mailUtilisateur'>Adresse E-mail</label>
				<input class='champ' type='text' name='mailUtilisateur'/>
			</p>
			<p>
				<label for='mdpUtilisateur'>Mot de passe</label>
				<input class='champ' type='password' name='mdpUtilisateur'/>
			</p>
			<p>
				<label for='action'></label>
				<input class='bouton' type='submit' name='action' value='Inscription'/>
			</p>
		</form></div>";
		if ($_SESSION["role"]=='1'){
			include_once "./model/sqlUser.php";
			echo
			"<div class='divSuppression'> <form method='POST' action='./action/User/deleteUser.php'>
			<label for='Supprimer'>Supprimer un utilisateur</label><br/>
			<select name='idUtilisateur'>";
			$res =selectAllUtilisateurs();
			while($row = mysqli_fetch_assoc($res)){
				echo '<option value='.$row['idUtilisateur'].'>';
				echo $row['nomUtilisateur'];
				echo '</option>';
			}
			echo "</select>
			<input  class='bouton' type='submit' name='supprimerUtilisateur' value='Supprimer '> </br>
			</form></div></div>";
		}
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
		 "<div class='actuDiv'>
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
						<li class="headerLi"><a class="headerA" href="index.php?actionAdmin=login&actionUtilisateur=login  "     >   Gestion des utilisateurs      </a></li>
						<li class="headerLi"><a class="headerA" href="index.php?actionAdmin=contact&actionUtilisateur=contact"   >   Contact       </a></li>
					</ul>
				';
		}
	}
	function affichePeriode($jourDebut,$jourFin){
		include_once "./model/sqlEvent.php";
 		$result=selectEventPeriode($jourDebut,$jourFin);
		while($row=mysqli_fetch_assoc($result)){
			afficheEvent($row['dateEvenement']);
		}
	}
	function afficheEvent($jour){
		include_once "./model/sqlEvent.php";
		include_once "./model/sqlProjet.php";
		$result=selectEventJour($jour);
		while($row=mysqli_fetch_assoc($result)){
			$nomProjet=mysqli_fetch_assoc(selectProjet($row['idProjet']));
			echo
			"<div class='agendaDiv'>
				<h3 class='nomEvenement'>".$row['nomEvenement']." </h3>
				<h4 class='nomProjet'>Projet associé : ".$nomProjet['titreProjet']."</h4>
				<article class='descriptionEvenement'>".$row['descriptionEvenement']."</article>
				<p class='dateEvenement'>Date : ".$row['dateEvenement']."</p><br>
				<p class='lieuEvenement'>Lieu : ".$row['lieuEvenement']."</p><br>
			</div>";
		}
	}
	function afficherSelectDate(){
		if(!isset($_POST['submitSelectDate'])){$dateDebut=date('Y-m-d');$dateFin= date('Y-m-d',strtotime('+1 week'));} else {$dateDebut=$_POST['jourDebut'];$dateFin=$_POST['jourFin']; }
		echo "<form method='POST' action='./index.php?actionUtilisateur=agenda'>
		<section class='selectDateForm'>
		<input type='date' name='jourDebut' value='".$dateDebut."'/>
		<input type='date' name='jourFin' value='".$dateFin."'/><br></section>
		<section class='selectDateForm'><input type='submit' name='submitSelectDate' id='submitSelectDate'/></section>
		";

	}
