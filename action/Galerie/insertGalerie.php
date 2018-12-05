<?php
chdir('/var/www/private/web/LGBTSAVOIE/LGBTSAVOIE/image');
$PATH=realpath(NULL);
$nomIm=$_FILES['file']['name'];
$cheminImage =$PATH."/".$nomIm;
echo ($cheminImage);
echo("</br>");
echo($_FILES['file']['tmp_name']);
move_upload_file($_FILES['file']['tmp_name'],$cheminImage);
?>