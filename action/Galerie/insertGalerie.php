<?php
$PATH=realpath("./image");
echo($PATH);
$nomIm=$_FILES['file']['name'];
$cheminImage =$PATH."/".$nomIm;
echo($cheminImage);
move_upload_file($_FILES['file']['tmp_name'],$cheminImage);

?>