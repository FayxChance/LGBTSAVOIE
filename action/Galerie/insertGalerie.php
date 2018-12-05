<?php
$PATH=realpath("./../image");
$nomIm=$_FILES['file']['name'];
$cheminImage =$PATH."/".$nomIm;
echo($cheminImage);
echo($nomIm);
move_upload_file($_FILES['file']['tmp_name'],$cheminImage);

?>