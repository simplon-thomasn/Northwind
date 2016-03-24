<?php
  include ("includes/header.php");
  include ("includes/connexion_bdd.php");
  include_once ("classes/Base.class.php");

  $listeProduits = Base::selection("Products", $connexion_bdd);
?>

<div class="panel panel-primary">
<table class="table table-striped table-condensed">
  <div class="panel-heading">
    <h3 class="panel-title">Produits - Northwind</h3>
  </div>
  <thead>
    <tr>
      <th>Article</th>
      <th>Prix Unitaire</th>
      <th>Quantité en stock</th>
    </tr>
  </thead>
  <tbody>
<?php
    foreach ($listeProduits as $article){
?>
    <tr>
      <td><?php echo $article["ProductName"]?></td>
      <td><?php echo $article["UnitPrice"]?></td>
      <td><?php echo $article["UnitsInStock"]?></td>
    </tr>
<?php
    }
?>
  </tbody>
</table>
<a href="index.php" class="btn pull-right">Retour</a>
</div>
<?php
  include ("includes/footer.php");
?>
