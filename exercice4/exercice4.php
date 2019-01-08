<!DOCTYPE HTML>
<html>
<head>
  <title>Exercice4</title>
  <h3>PHP - Partie 3 - Exercice 4</h3>
</head>
<body>
  <p>Créer une variable et l'initialiser à 1. Tant que cette variable n'atteint pas 10, il faut :</p>
  <ul>
    <li>l'afficher</li>
    <li>l'incrementer de la moitié de sa valeur</li>
  </ul>
  <?php
  for ($nomber = 1; $nomber < 10; $nomber = $nomber + ($nomber / 2)){
    ?>
    <p><?php echo $nomber?></p>
    <?php
  }
  ?>
</body>
</html>
