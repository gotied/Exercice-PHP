<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.0">
    <title>Exo3</title>
</head>
<body>
<?php
$NbrCol = 12;
$NbrLigne = 12;
echo '<table border="1">';
echo '<tr>';
echo '<td>x * y</td>';
for ($y=0; $y<=$NbrCol; $y++) {
    echo '<td>'.$y.'</td>';
   }
echo '</tr>';
for ($x=0; $x<=$NbrLigne; $x++) {
   echo '<tr>';
   for ($y=0; $y<=$NbrCol; $y++) {
      if ($y==0) {
         echo '<td>'.$x.'</td>';
      }
      if ($x==$y) {
            echo '<td>';
         } else {
            echo '<td>';
         }
      echo $x*$y;
      echo '</td>';
   }
   echo '</tr>';
   $y=0;
}
echo '</table>';
?>  
</body>
</html>