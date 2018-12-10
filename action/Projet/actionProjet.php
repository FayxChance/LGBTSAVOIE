<?php include_once "./model/sqlProjet.php";
 ?>
 <div class="formulairesCIS">
   <div class="divDelete">
    <form class="" action="./action/Projet/deleteProjet.php" method="post">
      <label for="supprimer">Supprimer un projet</label>
      <select class="" name="champIdDelete">
     <?php
     $res=selectAllProjet();
     while( $row =mysqli_fetch_assoc($res)){
       echo '<option value="'.$row["idProjet"].'">'.$row["titreProjet"].'</option>';
     }
   ?>
   </select>
   <input class="bouton" type="submit" name="supprProjet" value="Suppression">
 </form>
</div>
 <div class="divAjouter">
 <form method="POST" action="./action/Projet/insertProjet.php">
 	<p> Ajouter un projet </p>
 	<label for="ajout"/>titre :</label>
 	<input class="champ" type="text" name="titreProjet" value='<?php if(isset($_SESSION['data']['titreProjet'])){
    echo $_SESSION['data']['titreProjet'];
  } ?>'><br/>
  <label for="ajout"/>description :</label>
 	<input class="champ" type="text" name="descriptionProjet" value='<?php if(isset($_SESSION['data']['descriptionProjet'])){
    echo $_SESSION['data']['descriptionProjet'];
  } ?>'><br/>
 	<input class="bouton" type="submit" name="insererProjet" value="Ajouter un projet"><br/>
  <?php include_once "./model/erreur.php";unset($_SESSION['error']);?>

 </form>
</div>
</div>
