<?php

  switch ($_GET['actionAdmin']) {
    case 'index':
      include_once ".";
      break;
    case 'actu':
      include_once "./action/Actu/actionActu.php";
      break;
    case 'agenda':
      include_once "./action/Event/actionEvent.php";
      break;
    case 'projet':
      include_once "./action/Projet/actionProjet.php";
      break;
    case 'galerie':
      include_once "./action/Galerie/actionGalerie.php";
      break;
    /*case 'contact':
      include_once "./includes/contact.php";
      break;*/
    default:
      include_once ".";
      break;
    }
?>
