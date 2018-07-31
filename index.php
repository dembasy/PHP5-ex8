<?php
// tableau ou on stocke les mois
$arrayMonths = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'décembre');
 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title> exercice 1</title>
  </head>
  <body>
    <p>
      <?php
      // for loop, on definition la condition et le pas puis on retourne le resultat 
      for ($allMonths = 0; $allMonths < count($allMonths); $allMonths++) {
        echo $arrayMonths[$allMonths]. ' ';
      }
        ?>
    </p>
  </body>
</html>
