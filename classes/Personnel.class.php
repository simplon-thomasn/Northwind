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
    const VAR_CONSTANTE = "val";
    const VAR_CONSTANTE2 = "autre_val"

  /* ------------------------------------------------------------------------ */
  /* ----- ACCESSEURS ------------------------------------------------------- */
  /* ------------------------------------------------------------------------ */
    /**
     * Get the value of Employee
     *
     * @return mixed
     */
    public function getEmployeeID(){ return $this->_EmployeeID; }

    /**
     * Set the value of Employee
     *
     * @param mixed EmployeeID
     *
     * @return self
     */
    public function setEmployeeID($EmployeeID)
    {
        $this->EmployeeID = $EmployeeID;

        return $this;
    }

    /**
     * Get the value of Last Name
     *
     * @return mixed
     */
    public function getLastName()
    {
        return $this->LastName;
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
        $this->LastName = $LastName;

        return $this;
    }

    /**
     * Get the value of First Name
     *
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->FirstName;
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
        $this->FirstName = $FirstName;

        return $this;
    }

    /**
     * Get the value of Title
     *
     * @return mixed
     */
    public function getTitle()
    {
        return $this->Title;
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
        $this->Title = $Title;

        return $this;
    }

    /**
     * Get the value of Title Of Courtesy
     *
     * @return mixed
     */
    public function getTitleOfCourtesy()
    {
        return $this->TitleOfCourtesy;
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
        $this->TitleOfCourtesy = $TitleOfCourtesy;

        return $this;
    }

    /**
     * Get the value of Birth Date
     *
     * @return mixed
     */
    public function getBirthDate()
    {
        return $this->BirthDate;
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
        $this->BirthDate = $BirthDate;

        return $this;
    }

    /**
     * Get the value of Hire Date
     *
     * @return mixed
     */
    public function getHireDate()
    {
        return $this->HireDate;
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
        $this->HireDate = $HireDate;

        return $this;
    }

    /**
     * Get the value of Address
     *
     * @return mixed
     */
    public function getAddress()
    {
        return $this->Address;
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
        $this->Address = $Address;

        return $this;
    }

    /**
     * Get the value of City
     *
     * @return mixed
     */
    public function getCity()
    {
        return $this->City;
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
        $this->City = $City;

        return $this;
    }

    /**
     * Get the value of Region
     *
     * @return mixed
     */
    public function getRegion()
    {
        return $this->Region;
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
        $this->Region = $Region;

        return $this;
    }

    /**
     * Get the value of Postal Code
     *
     * @return mixed
     */
    public function getPostalCode()
    {
        return $this->PostalCode;
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
        $this->PostalCode = $PostalCode;

        return $this;
    }

    /**
     * Get the value of Country
     *
     * @return mixed
     */
    public function getCountry()
    {
        return $this->Country;
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
        $this->Country = $Country;

        return $this;
    }

    /**
     * Get the value of Home Phone
     *
     * @return mixed
     */
    public function getHomePhone()
    {
        return $this->HomePhone;
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
        $this->HomePhone = $HomePhone;

        return $this;
    }

    /**
     * Get the value of Reports To
     *
     * @return mixed
     */
    public function getReportsTo()
    {
        return $this->ReportsTo;
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
        $this->ReportsTo = $ReportsTo;

        return $this;
    }

    /**
     * Get the value of Salary
     *
     * @return mixed
     */
    public function getSalary()
    {
        return $this->Salary;
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
        $this->Salary = $Salary;

        return $this;
    }

    /**
     * Get the value of Login
     *
     * @return mixed
     */
    public function getLogin()
    {
        return $this->Login;
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
        $this->Login = $Login;

        return $this;
    }

    /**
     * Get the value of Pass
     *
     * @return mixed
     */
    public function getPass()
    {
        return $this->Pass;
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
        $this->Pass = $Pass;

        return $this;
    }

    /**
     * Get the value of Employee
     *
     * @return mixed
     */
    public function getResponsable()
    {
        return $this->Responsable;
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
        $this->Responsable = $Responsable;

        return $this;
    }
    /* ------------------------------------------------------------------------ */
    /* ----- ACCESSEURS ------------------------------------------------------- */
    /* ------------------------------------------------------------------------ */
  /* ------------------------------------------------------------------------ */


  // Définition du constructeur, tjrs en public !
  public function __construct($inID){
    include ("../includes/connexion_bdd.php");
    include_once ("Base.class.php");
    $info_employe_connecte = Base::selection_1p("Employees", $inID, $connexion_bdd);

    $this->setEmployeeID($info_employe_connecte["EmployeeID"]);
    $this->setLastName($info_employe_connecte["LastName"]);
    $this->setFirstName($info_employe_connecte["FirstName"]);
    $this->setTitle($info_employe_connecte["Title"]);
    $this->setTitleOfCourtesy($info_employe_connecte["TitleOfCourtesy"]);
    $this->setBirthDate($info_employe_connecte["BirthDate"]);
    $this->setHireDate($info_employe_connecte["HireDate"]);
    $this->setAddress($info_employe_connecte["Address"]);
    $this->setCity($info_employe_connecte["City"]);
    $this->setRegion($info_employe_connecte["Region"]);
    $this->setPostalCode($info_employe_connecte["PostalCode"]);
    $this->setCountry($info_employe_connecte["Country"]);
    $this->setHomePhone($info_employe_connecte["HomePhone"]);
    $this->setReportsTo($info_employe_connecte["ReportsTo"]);
    $this->setSalary($info_employe_connecte["Salary"]);
    $this->setLogin($info_employe_connecte["Login"]);
    $this->setPass($info_employe_connecte["Pass"]);
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
