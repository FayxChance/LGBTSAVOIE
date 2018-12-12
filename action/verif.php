<?php
    session_start();
    unset($_SESSION['error']);
    echo "yolo";

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
        $_SESSION['error']['descriptionEvent']="Entrer une description.";
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
        $_SESSION['error']['descriptionProjet']="Entrer une description.";
      }
    } else if(isset($_POST['actionLogin']) && $_POST['actionLogin']=='Connexion') {

        if(!empty($_POST['pseudoLogin']) && preg_match("/[a-z0-9A-Z_\-\_\']/",$_POST['pseudoLogin']) && strlen($_POST['pseudoLogin'])<20){
          unset($_SESSION["error"]["pseudoLogin"]);
          $_SESSION['data']['pseudoLogin']=$_POST['pseudoLogin'];

        }
        else{
          $_SESSION['error']['pseudoLogin']="Erreur dans le pseudo.";
        }
        if(!empty($_POST['mdpLogin']) && preg_match("/[a-z0-9A-Z_\-\_\']/",$_POST['mdpLogin']) && strlen($_POST['mdpLogin'])<16){
          unset($_SESSION["error"]["mdpLogin"]);
          $_SESSION['data']['mdpLogin']=$_POST['mdpLogin'];
        }
        else{
          $_SESSION['error']['mdpLogin']="Erreur dans le mot de passe.";
        }

    } else if(isset($_POST['actionInscription']) && $_POST['actionInscription']=='Inscription') {
        if(!empty($_POST['nomUtilisateur']) && preg_match("/[a-z0-9A-Z_\-\_\']/",$_POST['nomUtilisateur']) && strlen($_POST['nomUtilisateur'])<20){
          unset($_SESSION["error"]["nomUtilisateur"]);
          $_SESSION['data']['nomUtilisateur']=$_POST['nomUtilisateur'];
        }
        else{
          $_SESSION['error']['nomUtilisateur']="Erreur dans le nom.";
        }
        if(!empty($_POST['prenomUtilisateur']) && preg_match("/[a-z0-9A-Z_\-\_\']/",$_POST['prenomUtilisateur']) && strlen($_POST['prenomUtilisateur'])<20){
          unset($_SESSION["error"]["prenomUtilisateur"]);
          $_SESSION['data']['prenomUtilisateur']=$_POST['prenomUtilisateur'];
        }
        else{
          $_SESSION['error']['prenomUtilisateur']="Erreur dans le prenom.";
        }
        if(!empty($_POST['pseudoUtilisateur']) && preg_match("/[a-z0-9A-Z_\-\_\']/",$_POST['pseudoUtilisateur']) && strlen($_POST['pseudoUtilisateur'])<20){
          unset($_SESSION["error"]["pseudoUtilisateur"]);
          $_SESSION['data']['pseudoUtilisateur']=$_POST['pseudoUtilisateur'];
        }
        else{
          $_SESSION['error']['pseudoUtilisateur']="Erreur dans le pseudo.";
        }
        if(!empty($_POST['telUtilisateur']) && preg_match("/[0-9]/",$_POST['telUtilisateur']) && strlen($_POST['telUtilisateur'])<13 && is_numeric($_POST['telUtilisateur'])){
          unset($_SESSION["error"]["telUtilisateur"]);
          $_SESSION['data']['telUtilisateur']=$_POST['telUtilisateur'];
        }
        else{
          $_SESSION['error']['telUtilisateur']="Erreur dans le teléphone.";
        }
        if(!empty($_POST['mailUtilisateur']) && preg_match('/^[^0-9][_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/',$_POST['mailUtilisateur'])){
          unset($_SESSION["error"]["mailUtilisateur"]);
          $_SESSION['data']['mailUtilisateur']=$_POST['mailUtilisateur'];
        }
        else{
          $_SESSION['error']['mailUtilisateur']="Erreur dans le mail.";
        }
        if(!empty($_POST['mdpUtilisateur']) && preg_match("/[a-z0-9A-Z_\-\_\']/",$_POST['mdpUtilisateur']) && strlen($_POST['mdpUtilisateur'])<16){
          unset($_SESSION["error"]["mdpUtilisateur"]);
          $_SESSION['data']['mdpUtilisateur']=$_POST['mdpUtilisateur'];
        }
        else{
          $_SESSION['error']['mdpUtilisateur']="Erreur dans le mot de passe.";
        }

    }
  ?>
