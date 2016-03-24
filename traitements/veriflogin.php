<?php
  include ("../includes/connexion_bdd.php");
  require ("../classes/Autoloader.class.php");
  Autoloader::register();

  if (!empty($_POST["login"]) && !empty($_POST["pass"])) {

    // On sécurise l'accés à la bdd en s'assurant que l'utilisateur rentre ce qu'on attend qu'il rentre.
    //$login = ConnexionEmploye::securite_bdd($_POST["login"]);
    //$pass = ConnexionEmploye::securite_bdd($_POST["pass"]);
    $login = $_POST["login"];
    $pass = $_POST["pass"];

    // Instanciation de la classe ClassesManager pour créer un objet de gestion de l'employé qui va se connecter.
    $gestion_employe = new ClassesManager($connexion_bdd);

    // On utilise le nouvel objet de gestion de l'employe pour le connecter.
    $connexion_employe = $gestion_employe->connexion($login, $pass);

    // Si l'employé est présent en base de données...
    if ($connexion_employe->rowCount() == 1) {

      // On stock ses infos dans le tableau $employe_connecte.
      $employe_connecte = $connexion_employe->fetch();

      // Instanciation de la classe Personnel avec l'instance $employe.
      $employe = new Personnel($employe_connecte);
      $nomResponsable = $gestion_employe->responsable($employe);
      $employe->setResponsable($nomResponsable);
      session_start();
      $_SESSION["employe"] = $employe;

      if ($employe_connecte["ReportsTo"] == null) {
        header("location:../emplcnt.php");
      }
      else {
        header("location:../accueil.employe.php");
      }

    }
    else {
      header("location:../index.php?msg=errauth");
    }
  }
  else {
    header("location:../index.php?msg=noaccess");
  }

?>
