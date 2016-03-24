<?php
  include ("includes/header.php");
  include ("includes/messages.php");
?>

    <section class="row formulaire">

      <form class="col-md-offset-3 col-lg-3" method="POST" action="./traitements/veriflogin.php">
        <legend>Northwind - Espace employé</legend>
          <label for="login">Identifiant : </label>
          <input type="text" id="login" name="login" class="form-control">
          <label for="pass">Pass : </label>
          <input type="password" id="pass" name="pass" class="form-control">
          <br>
          <button type=submit class="btn btn-primary btn-sm">S'identifier</button>
      </form>

      <div class="col-lg-3">
        <legend>Vue d'ensemble</legend>
          <ul class="list-group">
            <a href="listepersonnel.php" class="list-group-item">
              <span class="glyphicon glyphicon-chevron-right pull-right"></span>Employés
            </a>
            <a href="listeproduits.php" class="list-group-item">
              <span class="glyphicon glyphicon-chevron-right pull-right"></span>Produits
            </a>
            <a href="hierarchie.php" class="list-group-item">
              <span class="glyphicon glyphicon-chevron-right pull-right"></span>Hiérarchie
            </a>
          </ul>
      </div>

    </section>

<?php
  include ("includes/footer.php");
?>
