<?php
  include("../includes/fonctions.php");
  spl_autoload_register("chargerClasse"); // On enregistre la fonction chargerClasse() pour qu'elle soit appelée à l'instanciation d'une classe non déclarée.
  session_start();


  if (!empty($_POST["login"]) && !empty($_POST["pass"])) {
    $login = $_POST["login"];
    $pass = $_POST["pass"];

    // On fait ici appel à une méthode statique de la classe Personnel.
    $req_employe_connecte = Personnel::connexion_employe($login, $pass);

    if ($req_employe_connecte->rowCount() == 1) {
      $employe_connecte = $req_employe_connecte->fetch();

      // Instanciation de la classe Personnel avec l'instance $employe.
      $employe = new Personnel($employe_connecte["EmployeeID"]);
      $_SESSION["employe"] = $employe;

      if ($employe_connecte["ReportsTo"] == null) {
        header("location:../emplcnt.php");
      }
      else {
        header("location:../page.employe.php");
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
