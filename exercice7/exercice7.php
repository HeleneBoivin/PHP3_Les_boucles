<!DOCTYPE HTML>
<html>
<head>
  <title>Exercice5</title>
  <h3>PHP - Partie 3 - Exercice 5</h3>
</head>
<body>
  <p>En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.</p>
  <?php
  for ($nomber = 1; $nomber <= 100; $nomber += 15)
  {
    ?>
    <p><?php echo $nomber . ' On tient le bon bout'?></p>
    <?php
  }
  ?>
</body>
</html>
