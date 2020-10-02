<?php
  // Variabile parola
  $word = $_GET["word"];
  $length = strlen($word);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>La parola inserita è: <?php echo $word ?></h1>
    <h2>Lunghezza parola: <?php echo $length ?></h2>
  </body>
</html>
