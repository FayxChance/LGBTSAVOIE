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
 	<input  type="text" name="titreProjet"><br/>
  <label for="ajout"/>description :</label>
 	<input  type="text" name="descriptionProjet"><br/>
  <label for="ajout"/>Auteur :</label>
 	<input  type="number" name="auteurProjet"><br/>
 	<input class="bouton" type="submit" name="insererProjet" value="Ajouter un projet"><br/>
 </form>
</div>
</div>
