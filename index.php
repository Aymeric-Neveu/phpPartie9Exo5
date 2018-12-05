<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Exercice 5</title>
  </head>
  <body>
    <?php
    $dateOfTheDay = new DateTime('now');
    $beginOfTheday = new DateTime('16-05-2016');
    $calcul = $dateOfTheDay->diff($beginOfTheday);
    echo 'il y a '. $calcul->format('%a') . ' jours d\'écarts ';
    ?>
  </body>
</html>
