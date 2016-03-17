<?php
  class Produit {

    private $ProductID;
    private $ProductName;
    private $CategoryID;
    private $UnitPrice;
    private $UnitsInStock;

  /* ------------------------------------------------------------------------ */
    /**
     * Get the value of Product
     *
     * @return mixed
     */
    public function getProductID()
    {
        return $this->ProductID;
    }

    /**
     * Set the value of Product
     *
     * @param mixed ProductID
     *
     * @return self
     */
    public function setProductID($ProductID)
    {
        $this->ProductID = $ProductID;

        return $this;
    }

    /**
     * Get the value of Product Name
     *
     * @return mixed
     */
    public function getProductName()
    {
        return $this->ProductName;
    }

    /**
     * Set the value of Product Name
     *
     * @param mixed ProductName
     *
     * @return self
     */
    public function setProductName($ProductName)
    {
        $this->ProductName = $ProductName;

        return $this;
    }

    /**
     * Get the value of Category
     *
     * @return mixed
     */
    public function getCategoryID()
    {
        return $this->CategoryID;
    }

    /**
     * Set the value of Category
     *
     * @param mixed CategoryID
     *
     * @return self
     */
    public function setCategoryID($CategoryID)
    {
        $this->CategoryID = $CategoryID;

        return $this;
    }

    /**
     * Get the value of Unit Price
     *
     * @return mixed
     */
    public function getUnitPrice()
    {
        return $this->UnitPrice;
    }

    /**
     * Set the value of Unit Price
     *
     * @param mixed UnitPrice
     *
     * @return self
     */
    public function setUnitPrice($UnitPrice)
    {
        $this->UnitPrice = $UnitPrice;

        return $this;
    }

    /**
     * Get the value of Units In Stock
     *
     * @return mixed
     */
    public function getUnitsInStock()
    {
        return $this->UnitsInStock;
    }

    /**
     * Set the value of Units In Stock
     *
     * @param mixed UnitsInStock
     *
     * @return self
     */
    public function setUnitsInStock($UnitsInStock)
    {
        $this->UnitsInStock = $UnitsInStock;

        return $this;
    }

  /* ------------------------------------------------------------------------ */

  public static function listeProduits(){
    include ("./includes/connexion_bdd.php");

    $req_selectionListeProduits = $connexion_bdd->query("
      SELECT *
      FROM Products
    ");

    $selectionListeProduits = $req_selectionListeProduits->fetchAll();

    return $selectionListeProduits;
  }
}
