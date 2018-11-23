<?php include "./model/sqlProjet.php";
 ?>
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
   <input type="submit" name="supprProjet" value="Suppression">
 </form>

 <form method="POST" action="./action/Projet/insertProjet.php">
 	<p> Ajouter un projet </p>
 	<label for="ajout"/>titre :</label>
 		<input  type="text" name="titreProjet"><br/>
 	<label for="ajout"/>auteur :</label>
 		<input  type="date" name="auteurProjet"><br/>
     <label for="ajout"/>description :</label>
 		<input  type="number" name="descriptionProjet"><br/>

 	<input  type="submit" name="insererProjet" value="Ajouter un projet"><br/>
 </form>
