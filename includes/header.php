<?php
  session_start();
  include_once "./includes/db.php";
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
    <nav class="headerNav">
      <ul class="headerUl">
        <li class="headerLi" id="headerLiIndex"><a class="headerA" href="index.php?actionUtilisateur=index  "                               >   Accueil       </a></li>
        <li class="headerLi" id="headerLiActu"><a class="headerA" href="index.php?actionUtilisateur=actu   "      >   Actus         </a></li>
        <li class="headerLi" id="headerLiAgenda"><a class="headerA" href="index.php?actionUtilisateur=agenda "    >   Agenda        </a></li>
        <li class="headerLi" id="headerLiProjet"><a class="headerA" href="index.php?actionUtilisateur=projet "    >   Projets       </a></li>
        <li class="headerLi" id="headerLiGalerie"><a class="headerA" href="index.php?actionUtilisateur=galerie"   >   Galerie       </a></li>
        <li class="headerLi" id="headerLiLogin"><a class="headerA" href="index.php?actionUtilisateur=login  "     >   Connexion/Inscription      </a></li>
        <li class="headerLi" id="headerLiContact"><a class="headerA" href="index.php?actionUtilisateur=contact"   >   Contact       </a></li>
      </ul>
      <script type="text/javascript" >
      var idMenu = ["headerLiIndex","headerLiActu","headerLiAgenda","headerLiProjet","headerLiGalerie","headerLiLogin"];
      var idMenuBool = [false,false,false,false,false,false];
      var color = ['red','green','blue','orange','purple','yellow'];
      var i=0;
      while (i<idMenu.length) {
        var rand =Math.floor((Math.random() * idMenu.length) + 1);
        console.log(rand);
        if (!idMenuBool[rand]) {
          var elem = document.getElementById(idMenu[i]);
          elem.style.background=color[rand];
          idMenuBool[rand]=true;
        }
        else {
          i--;
        }
        i++;
      }
      </script>
      <?php
        if ($_SESSION['role']==1) {
          echo '
              <ul class="headerUl">
                <li class="headerLi"><a class="headerA" href="index.php?actionAdmin=index&actionUtilisateur=index  "     >   Accueil       </a></li>
                <li class="headerLi"><a class="headerA" href="index.php?actionAdmin=actu&actionUtilisateur=actu   "      >   Actus         </a></li>
                <li class="headerLi"><a class="headerA" href="index.php?actionAdmin=agenda&actionUtilisateur=agenda "    >   Agenda        </a></li>
                <li class="headerLi"><a class="headerA" href="index.php?actionAdmin=projet&actionUtilisateur=projet "    >   Projets       </a></li>
                <li class="headerLi"><a class="headerA" href="index.php?actionAdmin=galerie&actionUtilisateur=galerie"   >   Galerie       </a></li>
                <li class="headerLi"><a class="headerA" href="index.php?actionAdmin=login&actionUtilisateur=login  "     >   Connexion/Inscription      </a></li>
                <li class="headerLi"><a class="headerA" href="index.php?actionAdmin=contact&actionUtilisateur=contact"   >   Contact       </a></li>
              </ul>
            ';
        }
       ?>
    </nav>

  </header>
  <main>
