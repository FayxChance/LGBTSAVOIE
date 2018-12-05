<?php
$PATH=realpath('../../images');
$nomIm=$_FILES['file']['name'];
$cheminImage =$PATH."/".$nomIm;
echo ($cheminImage);
echo("</br>");
var_dump($_FILES);
echo($_FILES[$_POST['file']]['tmp_name']);
$transfert = move_uploaded_file($_FILES['file']['tmp_name'],$cheminImage);
if($transfert) { echo "reussi";}else{ echo "non reussi";}
echo("yolo");
?>
