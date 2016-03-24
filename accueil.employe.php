<?php
  include ("includes/header2.php");
?>


    <div class="row">
      <h2>PROFIL EMPLOYE</h2>
      <hr>

      <div class="row">

        <section class="col-md-5">
          <table class="table table-bordered table-condensed table-responsive">
            <thead>
              <tr>
                <th>Civilité</th>
                <th>Nom</th>
                <th>Prenom</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><?php echo $employe->getTitleOfCourtesy() ;?></td>
                <td><?php echo $employe->getLastName() ;?></td>
                <td><?php echo $employe->getFirstName() ;?></td>
              </tr>
            </tbody>
          </table>
        </section>

        <section class="col-md-4">
          <table class="table table-bordered table-condensed table-responsive">
            <thead>
              <tr>
                <th>Fonction</th>
                <th>Responsable</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><?php echo $employe->getTitle() ;?></td>
                <td><?php echo $employe->getResponsable() ;?></td>
              </tr>
            </tbody>
          </table>
        </section>

        <section class="col-md-3">
          <table class="table table-bordered table-condensed table-responsive">
            <thead>
              <tr>
                <th>Identifiant</th>
                <th>Login</th>
                <th>Pass</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><?php echo $employe->getEmployeeID() ;?></td>
                <td><?php echo $employe->getLogin() ;?></td>
                <td><?php echo $employe->getPass() ;?></td>
              </tr>
            </tbody>
          </table>
        </section>

      </div><!-- Fermeture de row -->

      <div class="row">

        <section class="col-md-12">
          <table class="table table-bordered table-condensed table-responsive">
            <thead>
              <tr>
                <th>Adresse</th>
                <th>Ville</th>
                <th>Code Postal</th>
                <th>Region</th>
                <th>Pays</th>
                <th>Telephone</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><?php echo $employe->getAddress() ;?></td>
                <td><?php echo $employe->getCity() ;?></td>
                <td><?php echo $employe->getPostalCode() ;?></td>
                <td><?php echo $employe->getRegion() ;?></td>
                <td><?php echo $employe->getCountry() ;?></td>
                <td><?php echo $employe->getHomePhone() ;?></td>
              </tr>
            </tbody>
          </table>
        </section>

      </div><!-- Fermeture row-->

    </div><!-- Fermeture row Profil employé-->

    <div class="row">
      <h2>CLIENTS</h2>
      <hr>

      <a id="lien" h>Changer</a>
<div id="item" class="collapse">
  Contenu
</div>


    </div><!-- Fermeture row Clients-->



  


<?php
  include ("includes/footer.php");
?>
