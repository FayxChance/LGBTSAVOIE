<?php
 include "./model/sqlEvent.php";
 $results = SelectAllEvent();
 while ($row = mysqli_fetch_assoc($results)) {
   echo "
   <ul>
      <li>".$row["nomEvenement"]."</li>
			<li>".$row["descriptionEvenement"]."</li>
      <li>".$row["dateEvenement"]."</li>
		  <li>".$row["lieuEvenement"]."</li>
    </ul>";
  }
 ?>
