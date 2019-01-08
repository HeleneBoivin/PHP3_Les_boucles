<!DOCTYPE HTML>
<html>
<head>
  <title>Exercice2</title>
  <h3>PHP - Partie 3 - Exercice 2</h3>
</head>
<body>
  <p>Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.
    Tant que la première variable n'est pas supérieure à 20 :</p>
    <ul>
      <li>multiplier la première variable avec la deuxième</li>
      <li>afficher le résultat</li>
      <li>incrementer la première variable</li>
    </ul>
    <?php
    $count = 0;
    $random = rand(1, 100);
    while ($count<=20){
      ?>
      <p><?php echo $count * $random ; ?></p>
      <?php $count++;
    }
    ?>
  </body>
  </html>
