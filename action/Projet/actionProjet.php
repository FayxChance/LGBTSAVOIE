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
