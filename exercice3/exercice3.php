<!DOCTYPE HTML>
<html>
<head>
  <title>Exercice3</title>
  <h3>PHP - Partie 3 - Exercice 3</h3>
</head>
<body>
  <p>Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.
    Tant que la première variable n'est pas inférieure ou égale à 10 :</p>
    <ul>
      <li>multiplier la première variable avec la deuxième</li>
      <li>afficher le résultat</li>
      <li>décrémenter la première variable</li>
    </ul>
    <?php
    $count = 100;
    $random = rand (1, 100);
    while ($count>10){
      ?>
      <p><?php echo $count * $random  ; ?></p>
      <!-- <p><?= $count * $random  ; ?></p>  Autre méthode pour afficher - Attention sur monoligne.-->
      <?php $count--;
    }
    ?>
  </body>
  </html>
