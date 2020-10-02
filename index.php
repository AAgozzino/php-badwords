<?php
  // Variabile parola
  $word = $_GET["word"];
  $length = strlen($word);
  $par = "L’autunno è sempre stata la mia stagione preferita. Il tempo in cui tutto esplode con la sua ultima bellezza, come se la natura si fosse risparmiata tutto l’anno per il gran finale. Non ho mai pensato di avere paura dell’autunno.";
  $par_bad_word = str_replace($word, "***", $par);
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
    <p><?php echo $par_bad_word ?></p>
  </body>
</html>
