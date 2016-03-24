<?php

  // le nom de la classe commence aussi par une majuscule : respect de la notation PEAR.
  class Personnel{

    // le '_' est issue de la notation PEAR.
    private $_EmployeeID;
    private $_LastName;
    private $_FirstName;
    private $_Title;
    private $_TitleOfCourtesy;
    private $_BirthDate;
    private $_HireDate;
    private $_Address;
    private $_City;
    private $_Region;
    private $_PostalCode;
    private $_Country;
    private $_HomePhone;
    private $_ReportsTo;
    private $_Salary;
    private $_Login;
    private $_Pass;
    private $_Responsable;

    // Déclaration de variables constantes, tjrs en majuscule.
    //const VAR_CONSTANTE = "val";
    //const VAR_CONSTANTE2 = "autre_val";

  /* ------------------------------------------------------------------------ */
  /* ----- ACCESSEURS ------------------------------------------------------- */
  /* ------------------------------------------------------------------------ */

    /**
     * Get the value of Employee
     *
     * @return mixed
     */
    public function getEmployeeID() { return $this->_EmployeeID; }
    /**
     * Get the value of Last Name
     *
     * @return mixed
     */
    public function getLastName() { return $this->_LastName; }
    /**
     * Get the value of First Name
     *
     * @return mixed
     */
    public function getFirstName() { return $this->_FirstName; }
    /**
     * Get the value of Title
     *
     * @return mixed
     */
    public function getTitle() { return $this->_Title; }
    /**
     * Get the value of Title Of Courtesy
     *
     * @return mixed
     */
    public function getTitleOfCourtesy() { return $this->_TitleOfCourtesy; }
    /**
     * Get the value of Birth Date
     *
     * @return mixed
     */
    public function getBirthDate() { return $this->_BirthDate; }
    /**
     * Get the value of Hire Date
     *
     * @return mixed
     */
    public function getHireDate() { return $this->_HireDate; }
    /**
     * Get the value of Address
     *
     * @return mixed
     */
    public function getAddress() { return $this->_Address; }
    /**
     * Get the value of City
     *
     * @return mixed
     */
    public function getCity() { return $this->_City; }
    /**
     * Get the value of Postal Code
     *
     * @return mixed
     */
    public function getPostalCode() { return $this->_PostalCode; }
    /**
     * Get the value of Region
     *
     * @return mixed
     */
    public function getRegion() { return $this->_Region; }
    /**
     * Get the value of Country
     *
     * @return mixed
     */
    public function getCountry() { return $this->_Country; }
    /**
     * Get the value of Home Phone
     *
     * @return mixed
     */
    public function getHomePhone() { return $this->_HomePhone; }
    /**
     * Get the value of Reports To
     *
     * @return mixed
     */
    public function getReportsTo() { return $this->_ReportsTo; }
    /**
     * Get the value of Salary
     *
     * @return mixed
     */
    public function getSalary() { return $this->_Salary; }
    /**
     * Get the value of Login
     *
     * @return mixed
     */
    public function getLogin() { return $this->_Login; }
    /**
     * Get the value of Pass
     *
     * @return mixed
     */
    public function getPass() { return $this->_Pass; }
    /**
     * Get the value of Employee
     *
     * @return mixed
     */
    public function getResponsable() { return $this->_Responsable; }

  /* ------------------------------------------------------------------------ */
  /* ----- MUTATEURS ------------------------------------------------------- */
  /* ------------------------------------------------------------------------ */

    /**
     * Set the value of Employee
     *
     * @param mixed EmployeeID
     *
     * @return self
     */
    public function setEmployeeID($EmployeeID)
    {
      $this->_EmployeeID = $EmployeeID;

      return $this;
    }
    /**
     * Set the value of Last Name
     *
     * @param mixed LastName
     *
     * @return self
     */
    public function setLastName($LastName)
    {
      $this->_LastName = $LastName;

      return $this;
    }
    /**
     * Set the value of First Name
     *
     * @param mixed FirstName
     *
     * @return self
     */
    public function setFirstName($FirstName)
    {
      $this->_FirstName = $FirstName;

      return $this;
    }
    /**
     * Set the value of Title
     *
     * @param mixed Title
     *
     * @return self
     */
    public function setTitle($Title)
    {
      $this->_Title = $Title;

      return $this;
    }
    /**
     * Set the value of Title Of Courtesy
     *
     * @param mixed TitleOfCourtesy
     *
     * @return self
     */
    public function setTitleOfCourtesy($TitleOfCourtesy)
    {
      $this->_TitleOfCourtesy = $TitleOfCourtesy;

      return $this;
    }
    /**
     * Set the value of Birth Date
     *
     * @param mixed BirthDate
     *
     * @return self
     */
    public function setBirthDate($BirthDate)
    {
      $this->_BirthDate = $BirthDate;

      return $this;
    }
    /**
     * Set the value of Hire Date
     *
     * @param mixed HireDate
     *
     * @return self
     */
    public function setHireDate($HireDate)
    {
      $this->_HireDate = $HireDate;

      return $this;
    }
    /**
     * Set the value of Address
     *
     * @param mixed Address
     *
     * @return self
     */
    public function setAddress($Address)
    {
      $this->_Address = $Address;

      return $this;
    }
    /**
     * Set the value of City
     *
     * @param mixed City
     *
     * @return self
     */
    public function setCity($City)
    {
      $this->_City = $City;

      return $this;
    }
    /**
     * Set the value of Region
     *
     * @param mixed Region
     *
     * @return self
     */
    public function setRegion($Region)
    {
      $this->_Region = $Region;

      return $this;
    }
    /**
     * Set the value of Postal Code
     *
     * @param mixed PostalCode
     *
     * @return self
     */
    public function setPostalCode($PostalCode)
    {
      $this->_PostalCode = $PostalCode;

      return $this;
    }
    /**
     * Set the value of Country
     *
     * @param mixed Country
     *
     * @return self
     */
    public function setCountry($Country)
    {
      $this->_Country = $Country;

      return $this;
    }
    /**
     * Set the value of Home Phone
     *
     * @param mixed HomePhone
     *
     * @return self
     */
    public function setHomePhone($HomePhone)
    {
      $this->_HomePhone = $HomePhone;

      return $this;
    }
    /**
     * Set the value of Reports To
     *
     * @param mixed ReportsTo
     *
     * @return self
     */
    public function setReportsTo($ReportsTo)
    {
      $this->_ReportsTo = $ReportsTo;

      return $this;
    }
    /**
     * Set the value of Salary
     *
     * @param mixed Salary
     *
     * @return self
     */
    public function setSalary($Salary)
    {
      $this->_Salary = $Salary;

      return $this;
    }
    /**
     * Set the value of Login
     *
     * @param mixed Login
     *
     * @return self
     */
    public function setLogin($Login)
    {
      $this->_Login = $Login;

      return $this;
    }
    /**
     * Set the value of Pass
     *
     * @param mixed Pass
     *
     * @return self
     */
    public function setPass($Pass)
    {
      $this->_Pass = $Pass;

      return $this;
    }
    /**
     * Set the value of Employee
     *
     * @param mixed EmployeeID
     *
     * @return self
     */
    public function setResponsable($Responsable)
    {
      $this->_Responsable = $Responsable;

      return $this;
    }

  /* ------------------------------------------------------------------------ */


  // Fonction d'hydratation.
  private function hydrate(array $donnees) {
    foreach ($donnees as $key => $val) {
      $method = "set".$key;
      if (method_exists($this, $method)) {
        $this->$method($val);
      }
    }
  }

  // Définition du constructeur, tjrs en public !
  public function __construct(array $tabl){
    self::hydrate($tabl);
  }





























  // Méthode statique qui appartient à la classe et non à l'objet -- Donc pas de $this !!
  public static function connexion_employe($inLogin, $inPass) {
    include ("../includes/connexion_bdd.php");
    include_once ("Base.class.php");
    $employe_en_cours_de_connexion = Base::selection_2p("Employees", $inLogin, $inPass, $connexion_bdd);
    return $employe_en_cours_de_connexion;
  }

  public function responsable($inID) {
    include ("includes/connexion_bdd.php");
    include_once ("Base.class.php");
    $responsable_employe = Base::selection_1p("Employees", $inID, $connexion_bdd);
    $this->setResponsable($responsable_employe["LastName"]);
  }

  public function modifier_employe() {

  }

  public function supprimer_employe() {

  }


}// Balise de fermeture de la classe
