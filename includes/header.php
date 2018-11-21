<?php
  session_start();
  include "./includes/db.php";
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
    <h1>LGBT + SAVOIE</h1>
    <nav>
      <ul>
        <li><a href="index.php?actionUtilisateur=index  "                               >   Accueil       </a></li>
        <li><a href="index.php?actionUtilisateur=actu   "      >   Actus         </a></li>
        <li><a href="index.php?actionUtilisateur=agenda "    >   Agenda        </a></li>
        <li><a href="index.php?actionUtilisateur=projet "    >   Projets       </a></li>
        <li><a href="index.php?actionUtilisateur=galerie"   >   Galerie       </a></li>
        <li><a href="index.php?actionUtilisateur=login  "     >   Connexion/Inscription      </a></li>
        <li><a href="index.php?actionUtilisateur=contact"   >   Contact       </a></li>
      </ul>
    </nav>
    <?php
      if ($_SESSION['role']==1) {
        echo '  <nav>
            <ul>
              <li><a href="index.php?actionAdmin=index&actionUtilisateur=index  "     >   Accueil       </a></li>
              <li><a href="index.php?actionAdmin=actu&actionUtilisateur=actu   "      >   Actus         </a></li>
              <li><a href="index.php?actionAdmin=agenda&actionUtilisateur=agenda "    >   Agenda        </a></li>
              <li><a href="index.php?actionAdmin=projet&actionUtilisateur=projet "    >   Projets       </a></li>
              <li><a href="index.php?actionAdmin=galerie&actionUtilisateur=galerie"   >   Galerie       </a></li>
              <li><a href="index.php?actionAdmin=login&actionUtilisateur=login  "     >   Connexion/Inscription      </a></li>
              <li><a href="index.php?actionAdmin=contact&actionUtilisateur=contact"   >   Contact       </a></li>
            </ul>
          </nav>';
      }
     ?>
  </header>
  <main>
