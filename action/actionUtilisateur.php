<?php
  switch ($_GET['actionUtilisateur']) {
    case 'index':
      include_once ".";
      break;
    case 'actu':
      include_once "../includes/actu.php";
      break;
    case 'agenda':
      include_once "../includes/agenda.php";
      break;
    case 'projet':
      include_once "../includes/projet.php";
      break;
    case 'galerie':
      include_once "../includes/galerie.php";
      break;
    case 'login':
      include_once "../includes/login.php";
      break;
    case 'contact':
      include_once "../includes/contact.php";
      break;
    default:
      include_once ".";
      break;
  }
