<?php
  include ("includes/header.php");
  include_once ("classes/Personnel.class.php");

  $listePersonnel = Personnel::listePersonnel();

  /*echo "<pre>";
  print_r ($listePersonnel);
  echo "</pre>";*/
?>

<div class="panel panel-primary">
<table class="table table-striped table-condensed">
  <div class="panel-heading">
    <h3 class="panel-title">Personnel de Northwind</h3>
  </div>
  <thead>
    <tr>
      <th>Nom</th>
      <th>Prenom</th>
      <th>Fonctions</th>
      <th>Adresse</th>
      <th>Ville</th>
    </tr>
  </thead>
  <tbody>
<?php
    foreach ($listePersonnel as $employe){
?>
    <tr>
      <td><?php echo $employe["LastName"]?></td>
      <td><?php echo $employe["FirstName"]?></td>
      <td><?php echo $employe["Title"]?></td>
      <td><?php echo $employe["Address"]?></td>
      <td><?php echo $employe["City"]?></td>
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
