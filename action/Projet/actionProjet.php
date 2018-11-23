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

 <form method="POST" action="./action/Actu/insertActu.php">
 	<p> Ajouter une actualité </p>
 	<label for="ajout"/>titre :</label>
 		<input  type="text" name="titreActu"><br/>
 	<label for="ajout"/>date :</label>
 		<input  type="date" name="dateActu"><br/>
     <label for="ajout"/>utilisateur :</label>
 		<input  type="number" name="utilisateurActu"><br/>
      <label for="ajout"/>contenu :</label>
 		<input  type="text" name="contenuActu"><br/>

 	<input  type="submit" name="insererActu" value="Ajouter une Actu"><br/>
 </form>
