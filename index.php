<?php
  include ("includes/header.php");
?>

    <section class="row formulaire">
      <form class="col-md-offset-3 col-lg-3">
        <legend>Northwind - Espace employé</legend>
          <label for="text">Identifiant : </label>
          <input id="login" type="text" class="form-control">
          <label for="text">Pass : </label>
          <input id="pass" type="password" class="form-control">
          <br>
          <button>S'identifier</button>
      </form>
      <form class="col-lg-3">
        <legend>Vue d'ensemble</legend>
          <ul class="list-group">
            <a href="listepersonnel.php" class="list-group-item">
              <span class="glyphicon glyphicon-chevron-right pull-right"></span>Employés
            </a>
            <a href="listeproduits.php" class="list-group-item">
              <span class="glyphicon glyphicon-chevron-right pull-right"></span>Produits
            </a>
          </ul>
      </form>
    </section>

<?php
  include ("includes/footer.php");
?>
