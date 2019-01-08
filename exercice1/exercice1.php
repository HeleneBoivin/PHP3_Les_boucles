<!DOCTYPE HTML>
<html>
<head>
<title>Exercice1</title>
<h3>PHP - Partie 3 - Exercice 1</h3>
</head>
<body>
<p>Créer une variable et l'initialiser à 0.
Tant que cette variable n'atteint pas 10, il faut :</p>
<ul>
  <li>l'afficher</li>
  <li>l'incrementer</li>
</ul>
<?php
$nombre = 0;
while ($nombre<=10)
{
  echo "<p>Le nombre est $nombre</p>";
  $nombre++;
  }
?>
</body>
</html>
