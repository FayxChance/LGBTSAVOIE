<?php
	session_start();
	function formulaireLogin(){
		echo "		<div class='formulairesCIS'>";
		if(!$_SESSION['connecte']){
			if(issset($_SESSION['data']['pseudoLogin'])){
				$pseudoLogin=$_SESSION['data']['pseudoLogin'];
			} else {
				$pseudoLogin="";
			}
			if(issset($_SESSION['data']['nomUtilisateur'])){
				$nomUtilisateur=$_SESSION['data']['nomUtilisateur'];
			}else {
				$nomUtilisateur="";
			}
			if(issset($_SESSION['data']['prenomUtilisateur'])){
				$prenomUtilisateur=$_SESSION['data']['prenomUtilisateur'];
			}else {
				$prenomUtilisateur="";
			}
			if(issset($_SESSION['data']['pseudoUtilisateur'])){
				$pseudoUtilisateur=$_SESSION['data']['pseudoUtilisateur'];
			}else {
				$pseudoUtilisateur="";
			}
			if(issset($_SESSION['data']['telUtilisateur'])){
				$telUtilisateur=$_SESSION['data']['telUtilisateur'];
			}else {
				$telUtilisateur="";
			}
			if(issset($_SESSION['data']['mailUtilisateur'])){
				$mailUtilisateur=$_SESSION['data']['mailUtilisateur'];
			}else {
				$mailUtilisateur="";
			}
		echo "
			<div class='divConnexion'>Connexion
				<form method='post' action='./action/login.php'>
					<p>
						<label for='pseudoLogin'>Pseudo</label>
						<input class='champ' type='text' name='pseudoLogin' value='".$."'/>
					</p>
					<p>
						<label for='mdpLogin'>Mot de passe</label>
						<input class='champ' type='password' name='mdpLogin' size='16'/>
					</p>
					<p>
						<label for='action'></label>
						<input class='bouton' type='submit' name='actionLogin' value='Connexion'/>
					</p>
				</form>
			</div>
			<div class='divAjouter'>Inscription
				<form method='post' action='./action/inscription.php'>
					<p>
						<label for='nomUtilisateur'>Nom</label>
						<input class='champ' type='text' name='nomUtilisateur' value='".$nomUtilisateur."'/>
					</p>
					<p>
						<label for='prenomUtilisateur'>Prénom</label>
						<input class='champ' type='text' name='prenomUtilisateur' value='".$prenomUtilisateur."' />
					</p>
					<p>
						<label for='pseudoUtilisateur'>Pseudo</label>
						<input class='champ' type='text' name='pseudoUtilisateur' value='".$pseudoUtilisateur."'/>
					</p>
					<p>
						<label for='telUtilisateur'>Téléphone</label>
						<input class='champ' type='text' name='telUtilisateur' value='".$telUtilisateur."'/>
					</p>
					<p>
						<label for='mailUtilisateur'>Adresse E-mail</label>
						<input class='champ' type='text' name='mailUtilisateur'
						value='".$mailUtilisateur."'/>
					</p>
					<p>
						<label for='mdpUtilisateur'>Mot de passe</label>
						<input class='champ' type='password' name='mdpUtilisateur'/>
					</p>
					<p>
						<label for='action'></label>
						<input class='bouton' type='submit' name='actionInscription' value='Inscription'/>
					</p>
				</form>
			</div>";
			include_once "./model/erreur.php";unset($_SESSION['error']);		}
		if ($_SESSION["role"]=='1'){
			include_once "./model/sqlUser.php";
			echo
			"<div class='divDelete'> <form method='POST' action='./action/User/deleteUser.php'>
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
		echo "<div class='actu'> <h1 style='text-align:center;color:purple;margin:20px auto;'>Actualités</h1>";
		while ($row = mysqli_fetch_assoc($results)) {
			$resultUser=selectUtilisateur($row['utilisateurActus']);
			$rowUser=mysqli_fetch_assoc($resultUser);
			afficheUneActu($row['titreActus'],$row['dateActus'],$rowUser['pseudoUtilisateur'],$row['contenuActus']);
	  }
		echo "</div>";
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
				<article class='descriptionActu'>".$contenu."</article>
				<p class='auteurActu'>Auteur : ".$utilisateur."</p>
				<p class='dateActu'>Date : ".$date."</p>
			</div>";
	}
	function affichageBoutonProjet($id){
		include_once "./includes/sqlAssoc.php";
		$inscrit=mysqli_fetch_assoc(estInscrit($id,$_SESSION['idConnecte']));
		if(is_null($inscrit)){
			echo "
				<form action='./action/Assoc/inscriptionProjet.php' method='POST' class='formBoutonInscriptionProjet'>
				<input type='text' hidden name='idProjet' value='$id'/>
				<input type='text' hidden name='idConnecte' value='".$_SESSION['idConnecte']."'/>
				<span><input type='submit' name='inscriptionProjet' value='Inscription au projet' class='bouton'/></span>
				</form>";
		}
		else {
			echo "<form action='./action/Assoc/desinscriptionProjet.php' method='POST' class='formBoutonInscriptionProjet'>
			<input type='text' hidden name='idProjetD' value='$id'/>
			<input type='text' hidden name='idConnecteD' value='".$_SESSION['idConnecte']."'/>
			<span><input type='submit' name='inscriptionProjetD' value='Se desinscrire' class='bouton'/></span>
			</form>";
		}
	}
	function afficheUnProjet($id,$auteur,$titre,$description,$utilisateurInscrit){

		include_once "./model/sqlUser.php";

		echo
		 "<div class='projetDiv'>
				<h3>".$titre."</h3>
				<article class='descriptionProjet'>".$description."</article>
				<p class='auteurProjet'>Auteur : ".$auteur. " Participant : ";
			$rowInscrit=mysqli_fetch_assoc($utilisateurInscrit);
			while ($rowInscrit) {
				$resultUser=selectUtilisateur($rowInscrit['idUtilisateur']);
				$nomUser=mysqli_fetch_assoc($resultUser);
				echo " ".$nomUser['pseudoUtilisateur'];
				$rowInscrit=mysqli_fetch_assoc($utilisateurInscrit);

			}
			echo "</p>";

		if($_SESSION['connecte']){
			affichageBoutonProjet($id);
		}
		echo "</div>";
	}
	function afficheAllProjet() {
		include_once "./model/sqlUser.php";
		include_once "./model/sqlProjet.php";
		include_once "./model/sqlAssoc.php";
		echo "<div class='projet'><h1 style='text-align:center;color:purple;margin:20px auto;'>Projets</h1>";
		$results = selectAllProjet();
		while (	$row = mysqli_fetch_assoc($results)) {
			$resultUserInscrit=allInscrit($row['idProjet']);
			$resultUser=selectUtilisateur($row['auteurProjet']);
			$rowUser=mysqli_fetch_assoc($resultUser);
			afficheUnProjet($row['idProjet'],$rowUser['pseudoUtilisateur'],$row['titreProjet'],$row['descriptionProjet'],$resultUserInscrit);
	  }
		echo "</div>";
	}
	function afficheEtatConnexion(){
		echo "<section class='headerConnexion'>";
		if (!$_SESSION['connecte']){
			echo "Vous n'êtes pas connecté. ";
			echo  "<a id='lienConnexion' href='index.php?actionUtilisateur=login'>Connexion/Inscription</a>";
		}
		else {
			echo "Vous êtes connecté en tant que : ".$_SESSION['pseudoConnecte'].". ";
			echo "<a id='lienConnexion' href='./action/logout.php'>Se déconnecter</a>";
		}
		echo "</section>";
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
		echo "<div class='agenda' ><h1 style='text-align:center;color:purple;margin:20px auto;'>Agenda</h1>";
		while($row=mysqli_fetch_assoc($result)){
			afficheEvent($row['dateEvenement']);
		}
		echo "</div>";
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
		<section class='selectDateForm'><input class='bouton' type='submit' name='submitSelectDate' id='submitSelectDate'value='Choix période'/></section>
		";

	}
	function afficheUneImage($nomImage){
		echo "
			<img src='./images/".$nomImage."' class='galerieImage'></img>
		";
	}
	function affiche10images($indicePhoto){
		$tableauImage=scandir("./images/");
		unset($tableauImage[0]);
		unset($tableauImage[1]);

		$tableauImage=array_values($tableauImage);
		echo "<div class='galerie'> ";
		affichePostImage($tableauImage);
		echo "<div class='divImage'>";
		echo "<div class='ligneImage'>";
		for ($i=0+10*$indicePhoto; $i <10*$indicePhoto+5; $i++) {
			if(!is_null($tableauImage[$i])){
				afficheUneImage($tableauImage[$i]);
			}
		}
		echo "</div>";
		echo "<div class='ligneImage'>";
		for ($i=5+10*$indicePhoto; $i <10*$indicePhoto+10; $i++) {
			if(!is_null($tableauImage[$i])){
				afficheUneImage($tableauImage[$i]);
			}
		}
		echo "</div>";
		echo "</div>";
		echo "</div>";
	}
	function affichePostImage($tableau){
		if(isset($_POST['submitImageSuiv']) && $_POST['image']< intval(count($tableau)/10)) {
			$_POST['image']++;
		}
		else if(isset($_POST['submitImagePrec']) && $_POST['image']>1){
			$_POST['image']--;
		}
		else {
			$_POST['image']=0;
		}
		echo "
		<form method='POST' action='./index.php?actionUtilisateur=galerie' class='selectPageImage'>
			<input type='submit' name='submitImagePrec' value='<' class='bouton'/>
			<span>".$_POST['image']."</span>
			<input type='text' name='image' hidden value='".$_POST['image']."' />
			<input type='submit' name='submitImageSuiv' value='>' class='bouton'/>
			";

		echo "</form>";
	}
