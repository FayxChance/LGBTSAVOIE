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
	<input class="champ" type="text" name="nomEvent" value='<?php if(isset($_SESSION['data']['nomEvent'])){
    echo $_SESSION['data']['nomEvent'];
  } ?>'><br/>
	<label for="ajout"/>description :</label>
	<input class="champ"  type="text" name="descriptionEvent" value='<?php if(isset($_SESSION['data']['descriptionEvent'])){
    echo $_SESSION['data']['descriptionEvent'];
  } ?>'><br/>
  <label for="ajout"/>date :</label>
	<input class="champ" type="date" name="dateEvent" value='<?php if(isset($_SESSION['data']['dateEvent'])){
    echo $_SESSION['data']['dateEvent'];
  } ?>' ><br/>
  <label for="ajout"/>lieu :</label>
	<input class="champ"  type="text" name="lieuEvent" value='<?php if(isset($_SESSION['data']['lieuEvent'])){
    echo $_SESSION['data']['lieuEvent'];
  } ?>'><br/>
  <label for="ajout"/>projet associé :</label>
  <select name="idEventAjout">
  <?php
  include_once "./model/sqlProjet.php";
    $res=selectAllProjet();
    while($row = mysqli_fetch_assoc($res)){
      echo"<option value='".$row["idProjet"]."'>";
      echo $row["titreProjet"];
      echo"</option>";
    }
  ?>
  </select>
  <input class="bouton" type="submit" name="insererEvent" value="Ajouter un evenement"><br/>
  <?php include_once "./model/erreur.php";unset($_SESSION['error']);?>

</form>
</div>
</div>
