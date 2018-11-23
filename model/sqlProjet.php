 <?php
  include "../../includes/db.php";
  function selectAllProjet()
  {
    global $c;
    $select= "SELECT `idProjet`, `auteurProjet`, `titreProjet`, `descriptionProjet` FROM `Projet` WHERE 1";
    return mysqli_query($c, $select);
  }

 function deleteProjet($id)
 {
   global $c;
   $delete= "DELETE FROM `Projet` WHERE `Projet`.`idProjet`=$id"; 
   return mysqli_query($c, $delete);
 }

   function inserProjet($nom, $titre, $description)
   {
       $inser= "INSERT INTO `Projet`(`auteurProjet`,`titreProjet`,`descriptionProjet`)
                    VALUES($nom,$titre,$description)";
       return mysqli_query($c, $inser);
   }
