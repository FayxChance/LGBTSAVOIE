/*<?php
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
echo("yolo");
?> */
<?php
// Dans les versions de PHP antiéreures à 4.1.0, la variable $HTTP_POST_FILES
// doit être utilisée à la place de la variable $_FILES.

$uploaddir = '../../images/';
$uploadfile = $uploaddir . basename($_FILES['file']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
    echo "Le fichier est valide, et a été téléchargé
           avec succès. Voici plus d'informations :\n";
} else {
    echo "Attaque potentielle par téléchargement de fichiers.
          Voici plus d'informations :\n";
}

echo 'Voici quelques informations de débogage :';
print_r($_FILES);

echo '</pre>';

?>
>>>>>>> fdf69cf0cb261e952933a5756de40cd7ab8fc8d7
