<?php
  class Base {

    private static $_connexion_bdd;

    public static function securite_bdd($string) {
      if (ctype_digit($string)) {
        $string = inval($string);
      }
      else {
        $string = mysql_real_escape_string($string);
        $string = addcslashes($string, '%');
      }

      return $string;
    }

    public static function selectionTable($table, $obj_connexion_bdd) {
      $req_select = $obj_connexion_bdd->query("
        SELECT *
        FROM ".$table."
      ");

      $select = $req_select->fetchAll();

      return $select;
    }


    public static function selection_2p($table, $inLogin, $inPass, $obj_connexion_bdd){
      $req_selectionConnexion = $obj_connexion_bdd->prepare("
        SELECT *
        FROM ".$table."
        WHERE Login = :login AND Pass = :pass
      ");

      $req_selectionConnexion->execute(array(
        "login" => $inLogin,
        "pass" => $inPass
      ));

      return $req_selectionConnexion;
    }


    public static function selection_1p($table, $inID, $obj_connexion_bdd){
      $nomID = substr($table, 0, -1);
      $req_selectionEnregistrement = $obj_connexion_bdd->prepare("
        SELECT *
        FROM ".$table."
        WHERE ".$nomID."ID = :id
      ");

      $req_selectionEnregistrement->execute(array(
        "id" => $inID
      ));

      $selectionEnregistrement = $req_selectionEnregistrement->fetch();

      return $selectionEnregistrement;
    }//Fermeture fonction selectionEnregistrement

  }//Fermeture de la classe Base
