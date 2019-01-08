<!DOCTYPE HTML>
<html>
<head>
  <title>Exercice6</title>
  <h3>PHP - Partie 3 - Exercice 6</h3>
</head>
<body>
  <p>En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon.</p>
  <?php
  for ($nomber = 20; $nomber >= 0; $nomber = $nomber-1)
  {
    ?>
    <p><?php echo $nomber . ' C\'est presque bon'?></p>
    <?php
  }
  ?>
</body>
</html>
