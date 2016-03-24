<?php

  // Définition de la classe ClassesManager qui gérera les conexions bdd.
  class ClassesManager {

    private $_dao; // Instance de PDO.

    /* ----- MUTATEUR ----- */

      /**
      * [setDao description]
      * @param [type] $dao [description]
      */
      public function setDao($dao) {
        $this->_dao = $dao;
      }

    /* ---------------------------------------------------------------------- */

    public function __construct($dao) {
      $this->setDao($dao);
    }

    public function connexion($inLogin, $inPass) {
      $req_connexion_employe = $this->_dao->prepare("
        SELECT *
        FROM Employees
        WHERE Login = :login AND Pass = :pass
      ");

      $req_connexion_employe->bindValue(":login", $inLogin, PDO::PARAM_STR);
      $req_connexion_employe->bindValue(":pass", $inPass, PDO::PARAM_STR);

      $req_connexion_employe->execute();

      return $req_connexion_employe;
    }

    public function responsable(Personnel $perso) {


      $req_selec_responsable = $this->_dao->query("
        SELECT LastName
        FROM Employees
        WHERE EmployeeID = ".(int) $perso->getReportsTo());

      $selec_responsable = $req_selec_responsable->fetch(PDO::FETCH_ASSOC);

      return $selec_responsable['LastName'];

    }// Fermeture fonction responsable().




  }//Fermeture de la classe ClassesManager
