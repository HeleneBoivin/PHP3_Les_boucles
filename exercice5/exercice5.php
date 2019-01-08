<!DOCTYPE HTML>
<html>
<head>
  <title>Exercice5</title>
  <h3>PHP - Partie 3 - Exercice 5</h3>
</head>
<body>
  <p>En allant de 1 à 15 avec un pas de 1. Afficher le message "On y arrive presque".</p>
  <?php
  for ($nomber = 1; $nomber <= 15; $nomber = $nomber+1)
  {
    ?>
    <p><?php echo $nomber . ' On y arrive presque'?></p>
    <?php
  }
  ?>
</body>
</html>
