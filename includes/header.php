<?php
  session_start();
  include_once "./includes/db.php";
  include_once "./model/affichage.php";
  ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> LGBT+ SAVOIE </title>
    <link rel="stylesheet" href="./style/style.css">

  </head>
  <body>
  <header>
    &nbsp;
    <h1 class="headerH1">LGBT + SAVOIE</h1>
	<?php
	afficheEtatConnexion();
	?>
    <nav class="headerNav">
      <?php
        afficheUlUtilisateur();
        afficheUlAdmin();
       ?>
    <script type="text/javascript" src="./js/lgbt.js" ></script>

    </nav>

  </header>
  <main>
