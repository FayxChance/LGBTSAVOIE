<?php include_once "./model/sqlActu.php";

 ?>
<div class="formulairesCIS">
  <div class=divDelete>
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
  </div>

<div class="divAjouter">

  <form method="POST" action="./action/Actu/insertActu.php">
	   <p> Ajouter une actualité </p>
	    <label for="ajout"/>titre :</label>
		    <input class="champ" type="text" name="titreActu" value='<?php if(isset($_SESSION['data']['titreActu'])){
          echo $_SESSION['data']['titreActu'];
        } ?>'><br/>
	    <label for="ajout"/>date :</label>
		    <input class="champ" type="date" name="dateActu" value='<?php if(isset($_SESSION['data']['dateActu'])){
          echo $_SESSION['data']['dateActu'];
        } ?>'><br/>
      <label for="ajout"/>contenu :</label>
		    <input class="champ" type="text" name="contenuActu" value='<?php if(isset($_SESSION['data']['contenuActu'])){
          echo $_SESSION['data']['contenuActu'];
        } ?>'><br/>
	      <input class="bouton" type="submit" name="insererActu" value="Ajouter une Actu"><br/>
        <?php include_once "./model/erreur.php";unset($_SESSION['error']);?>

  </form>
</div>
</div>
