<?php
$PATH=realpath('../../images');
$nomIm=$_FILES['file']['name'];
$cheminImage =$PATH."/".$nomIm;
echo ($cheminImage);
echo("</br>");
echo($_FILES['file']['tmp_name']);
move_uploaded_file($_FILES['file']['tmp_name'],$cheminImage);
echo("yolo");
?>