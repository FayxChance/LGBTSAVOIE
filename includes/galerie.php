<?php
  include_once "./model/affichage.php";
  // affichagePhotoSuivante();
  $tableauImage=scandir("./images/");
  unset($tableauImage[0]);
  unset($tableauImage[1]);
  $tableauImage=array_values($tableauImage);
  var_dump(intval(count($tableauImage)/10));
  var_dump(intval($_POST['image']));
  if(isset($_POST['submitImageSuiv'])&& intval($_POST['image'])<intval(count($tableauImage)/10)){
    affiche10images($_POST['image']+1);
  }
  else if(isset($_POST['submitImagePrec']) && $_POST['image']>0){
    affiche10images($_POST['image']-1);
  }
  else {
    affiche10images(0);
  }
 ?>
