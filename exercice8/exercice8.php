<!DOCTYPE HTML>
<html>
<head>
  <title>Exercice8</title>
  <h3>PHP - Partie 3 - Exercice 8</h3>
</head>
<body>
  <p>En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!.</p>
    <?php
    for ($nomber = 200; $nomber >= 0; $nomber -= 12)
  {
    ?>
    <p><?php echo $nomber . ' Enfin !!!'?></p>
    <?php
    }
  // $nombre = 200;
  // while ($nombre >=0)
  // {
  //   echo $nombre . ' Enfin !!!!' . '</br>';
  //   $nombre = $nombre - 12;
  // }
  ?>
</body>
</html>
