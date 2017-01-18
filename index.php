<?php
$entier = array(
  1 => 8,4,2,9,3,7,6,5,1,4, );

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tableau entier</title>
  </head>
  <body>
    <ul>


    <?php
foreach ($entier as $key => $value) {
echo "<li>
$value
</li>";
}
echo "Le nombre d'élément dans le tableau est : " ,count($entier);
if(array_key_exists('5', $entier)){
  echo "<p>
  Le tableau contien la valeur 5
  </p>";
}else{
  echo "<p>
  Le tableau ne contient pas la valeur 5
  </p>";
}
if(array_key_exists('14', $entier)){
  echo "<p>
  Le tableau contient la clef 14
  </p>";
}else{
  echo "<p>
  Le tableau ne contient pas la clef 14
  </p>";
}
$indice = array_search(7, $entier);
echo "<p>
$indice
</p>";


     ?>

      </ul>
      <ul>
        <?php
        foreach ($_SERVER as $key => $value) {
echo "<li>$value</li>";
        }
        ?>
      </ul>
  </body>
</html>
