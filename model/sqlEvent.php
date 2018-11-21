<?php
    function selectEvent($id)
    {
      $select= "SELECT (`idProjet`,`nomEvenement`,`descriptionEvenement`,`dateEvenement`,`lieuEvenement`) FROM `Evenement`(`idProjet`,`nomEvenement`,`descriptionEvenement`,`dateEvenement`,`lieuEvenement`) WHERE id=$id";
      return mysqli_query($c, $select) or die("Erreur envoie");
    }

    function deleteEvent($id)
    {
     $delete= "DELETE (`idProjet`,`nomEvenement`,`descriptionEvenement`,`dateEvenement`,`lieuEvenement`) FROM `Evenement`(`idProjet`,`nomEvenement`,`descriptionEvenement`,`dateEvenement`,`lieuEvenement`) WHERE id=$id ";
     return mysqli_query($c, $delete) or die("Erreur envoie");
    }

    function inserEvent($id, $nom, $description, $date, $lieu)
    {
       $inser= "INSERT INTO `Evenement`(`idProjet`,`nomEvenement`,`descriptionEvenement`,`dateEvenement`,`lieuEvenement`)
                    VALUES('$id','$nom','$description','$date','$lieu')";
       return mysqli_query($c, $inser) or die("Erreur envoie");
    }

    function selectAllEvent()
    {
        global $c;
        $selectAll= "SELECT * FROM `Evenement`(`idProjet`,`nomEvenement`,`descriptionEvenement`,`dateEvenement`,`lieuEvenement`)";
        return mysqli_query($c, $selectAll) or die("Erreur envoie");
    }

    function updateEvent($id,$idProjet,$nom,$description,$date,$lieu);
    {
        global $c;
        $update= "UPDATE `Evenement` SET `idProjet`=$idProjet,`nomEvenement`=$nom,`descriptionEvenement`=$description,`dateEvenement`=$date,`lieuEvenement`=$lieu WHERE `Evenement`.`idEvent`=$id";
        mysqli_query($c,$update) or die ("Erreur envoie");
    }
?>