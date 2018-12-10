<?php
    session_start();
    unset($_SESSION['error']);
    if(isset($_POST['insererActu']) && $_POST['insererActu']=='Ajouter une Actu'){
      if(!empty($_POST['titreActu']) && preg_match("/[a-z0-9A-Z_\-\_\']/",$_POST['titreActu']) && strlen($_POST['titreActu'])<100){
        unset($_SESSION["error"]["titreActu"]);
        $_SESSION['data']['titreActu']=$_POST['titreActu'];
      }
      else{
        $_SESSION['error']['titreActu']="Erreur dans le titre.";
      }
      if(!empty($_POST['dateActu'])){
        unset($_SESSION['error']['dateActu']);
        $_SESSION['data']['dateActu']=$_POST['dateActu'];

      }
      else {
        $_SESSION['error']['dateActu']="Entrer une date.";
      }
      if(!empty($_POST['contenuActu']) && preg_match("/[a-z0-9A-Z_\-\_\']/",$_POST['contenuActu'])){
        unset($_SESSION['error']['contenuActu']);
        $_SESSION['data']['contenuActu']=$_POST['contenuActu'];
      }
      else {
        $_SESSION['error']['contenuActu']="Entrer un contenu.";
      }
    }else if(isset($_POST['insererEvent']) && $_POST['insererEvent']=='Ajouter un evenement') {
      if(!empty($_POST['nomEvent']) && preg_match("/[a-z0-9A-Z_\-\_\']/",$_POST['nomEvent']) && strlen($_POST['nomEvent'])<100){
        unset($_SESSION["error"]["nomEvent"]);
        $_SESSION['data']['nomEvent']=$_POST['nomEvent'];
      }
      else{
        $_SESSION['error']['nomEvent']="Erreur dans le nom.";
      }
      if(!empty($_POST['dateEvent'])){
        unset($_SESSION['error']['dateEvent']);
        $_SESSION['data']['dateEvent']=$_POST['dateEvent'];
      }
      else {
        $_SESSION['error']['dateEvent']="Entrer une date.";
      }
      if(!empty($_POST['descriptionEvent']) && preg_match("/[a-z0-9A-Z_\-\_\']/",$_POST['descriptionEvent'])){
        unset($_SESSION['error']['descriptionEvent']);
        $_SESSION['data']['descriptionEvent']=$_POST['descriptionEvent'];
      }
      else {
        $_SESSION['error']['descriptionEvent']="Entrer un description.";
      }
      if(!empty($_POST['lieuEvent']) && preg_match("/[a-z0-9A-Z_\-\_\']/",$_POST['lieuEvent'])){
        unset($_SESSION['error']['lieuEvent']);
        $_SESSION['data']['lieuEvent']=$_POST['lieuEvent'];
      }
      else {
        $_SESSION['error']['lieuEvent']="Entrer un lieu.";
      }

    } else if(isset($_POST['insererProjet']) && $_POST['insererProjet']=='Ajouter un projet'){
      if(!empty($_POST['titreProjet']) && preg_match("/[a-z0-9A-Z_\-\_\']/",$_POST['titreProjet']) && strlen($_POST['titreProjet'])<100){
        unset($_SESSION["error"]["titreProjet"]);
        $_SESSION['data']['titreProjet']=$_POST['titreProjet'];
      }
      else{
        $_SESSION['error']['titreProjet']="Erreur dans le titre.";
      }
      if(!empty($_POST['descriptionProjet']) && preg_match("/[a-z0-9A-Z_\-\_\']/",$_POST['descriptionProjet'])){
        unset($_SESSION['error']['descriptionProjet']);
        $_SESSION['data']['descriptionProjet']=$_POST['descriptionProjet'];
      }
      else {
        $_SESSION['error']['descriptionProjet']="Entrer un description.";
      }
    }
  ?>
