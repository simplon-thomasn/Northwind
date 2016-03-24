<?php

  include ("includes/connexion_bdd.php");

  //Verifier s'il a des subordonnés
  function hierarchie($tabEmpl, $idBoss, $decal) {
    for ($i = 0; $i < count($tabEmpl); $i++) {
      if ($tabEmpl[$i]["ReportsTo"] == $idBoss) {
        //Si oui, on les affiche et on recommence
        echo $decal." ".$tabEmpl[$i]["LastName"]."<br>";
        //Sinon, on passe au suivant
        hierarchie ( $tabEmpl, $tabEmpl[$i]["EmployeeID"], $decal."---");
      }
    }
  }

  //Récupérer les infos en bdd.
    $req_recInfos = $connexion_bdd->query("
      SELECT *
      FROM Employees
    ");

    $recInfos = $req_recInfos->fetchAll();

    foreach ($recInfos as $key =>$employe) {

      //Trouver le plus haut gradé.
      if ($employe["ReportsTo"] == null) {
        //On l'affiche
        echo $employe['LastName']."<br>";
        hierarchie($recInfos, $employe["EmployeeID"], "---");
      }
    }
