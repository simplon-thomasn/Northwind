<?php

  // Fonction pour le chargement d'une classe.
  function chargerClasse($classe) {
    require "../classes/".$classe.".class.php"; // On inclut la classe passée en paramètre.
  }

 ?>
