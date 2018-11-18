<?php
	session_start();
	function formulaire_login (){
		echo("
		<form method='post' action='login.php'>
		<p>
		<label for='pseudo_login'>Pseudo</label>
		<input type='text' name='pseudo_login'/>
		</p>
		<p>
		<label for='motdepasse_login'>Mot de passe</label>
		<input type='password' name='motdepasse_login' size='16'/>
		</p>
		<p>
		<label for='action'></label>
		<input type='submit' name='action' value='Connexion'/>
		</p>

		</form>");
	}
	include "sqlActu.php";
	include "sqlUser.php";
  function afficheActu(){
    $row= mysqli_fetch_assoc(selectActu());
    $utlisateur=mysqli_fetch_assoc(selectUtilisateur($row['utilisateurActus']));
    while ($row){
      echo "<section>
      <h2>".$row['titreActus'].						"</h2>
      <h4>".$utlisateur['nomUtilisateur']."</h4>
      <h4>".$row['dateActus'].						"</h4>
    	<p>" .$row['contenuActus'].					"</p>
      </section>";
      $row=mysqli_fetch_assoc($row);
      $utlisateur=mysqli_fetch_assoc($utilisateur);
    }
  }
  function afficheEvent(){
		while ($row = mysqli_fetch_assoc($results)){
      echo "<table>";
		    <tr>
      for (i=1; i<13; i++){
				echo"<th>".i."</th>"
          for (j=1; j<32 ;j++){
            echo"<tr>";
          }
      }
			echo "<th>Description</th>
      <th>Date</th>
      <th>Lieu</th>
			</tr>";
			echo "<tr>
			<td>".$row['id']."</td>
			<td>".$row['blague']."</td>
			</tr>";
	  }
	  echo "</table>";
	}
