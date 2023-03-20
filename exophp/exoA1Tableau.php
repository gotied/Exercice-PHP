<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExoA1</title>
</head>
<body>
<?php
$annee = array(
    "janvier" => "31",
    "fevrier" => "28",
    "mars" => "31",
    "avril" => "30",
    "mai" => "31",
    "juin" => "30",
    "juillet" => "31",
    "aout" => "31",
    "septembre" => "30",
    "octobre" => "31",
    "novembre" => "30",
    "decembre" => "31",
);
foreach($annee as $mois => $jours){
    echo '<table border="1" width="20%">';
    echo '<tbody>';
    echo '<tr>';
    echo '<td>'.$mois.'</td>'; 
    echo '<td>'.$jours.' jours'.'</td>';
    echo '</tr>';
    echo '</tbody>';
    echo '</table>';}
?> 
  
</body>
</html>