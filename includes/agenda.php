<section class="agenda">
<?php
 include_once "./model/affichage.php";
 afficherSelectDate();
 if(isset($_POST['submitSelectDate'])){
    affichePeriode($_POST['jourDebut'],$_POST['jourFin']);
 }
 else {
   affichePeriode(date('Y-m-d'),date('Y-m-d',strtotime('+1 week')));
 }
 ?>
</section>
