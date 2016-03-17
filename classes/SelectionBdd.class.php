<?php
  class SelectionBdd {


    

    public function __construct($table){
      include ("./includes/connexion_bdd.php");

      $req_selectionBdd = $connexion_bdd->query("
        SELECT *
        FROM ".$table."
      ");

      $selectionBdd = $req_selectionBdd->fetchAll();

      return $selectionBdd;
    }

  }
