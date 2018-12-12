<?php
/*
$PATH=realpath('../../images');
$nomIm=$_FILES['file']['name'];
$cheminImage =$PATH."/".$nomIm;
echo ($cheminImage."<br>".$nomIm."<br>");
echo("</br>");
print_r($_FILES);
echo($_FILES['file']['tmp_name']);
<<<<<<< HEAD
move_uploaded_file($_FILES['file']['tmp_name'],$cheminImage);
=======
$transfert = move_uploaded_file($_FILES['file']['tmp_name'],$cheminImage);
if($transfert) { echo "reussi";}else{ echo "non reussi";}
echo("yolo");*/
?>


<?php
/*
$uploaddir = '../../images/';
$uploadfile = $uploaddir . basename($_FILES['file']['name']);

echo $uploadfile;
echo "\n"."../..".$_FILES['file']['tmp_name'];
echo '<pre>';
if (move_uploaded_file("../../".$_FILES['file']['tmp_name'], $uploadfile)) {
    echo "Le fichier est valide, et a été téléchargé
           avec succès. Voici plus d'informations :\n";
} else {
    echo "Attaque potentielle par téléchargement de fichiers.
          Voici plus d'informations :\n";
}

echo 'Voici quelques informations de débogage :';
print_r($_FILES);

echo '</pre>';*/
if(isset($_FILES['file'])){
      echo getcwd().'<br>';
      $errors= array();
      $file_name = $_FILES['file']['name'];
      $file_size =$_FILES['file']['size'];
      $file_tmp =$_FILES['file']['tmp_name'];
      $file_type=$_FILES['file']['type'];
      echo "../../images/".$file_name;

      $file_ext=strtolower(end(explode('.',$_FILES['file']['name'])));

      $expensions= array("jpeg","jpg","png");

      if(in_array($file_ext,$expensions)=== false){
         $errors[]="Mauvaise extension PNG ou JPG ou JPEG";
      }

      if($file_size > 10485760){
         $errors[]='Fichier trop gros';
      }
      if(empty($_FILES['file'])){
        $errors['error']="Fichier vide";
      }
      if(empty($errors)==true){
        var_dump($_FILES['file']);
         move_uploaded_file($file_tmp,"../../images/".$file_name);
         echo "Success";
      }
   }
  header("Location:../../index.php?actionAdmin=galerie&actionUtilisateur=galerie")
?>
