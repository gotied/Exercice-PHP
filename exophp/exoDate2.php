<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo2</title>
</head>
<body>
<?php
$date_debut = strtotime('06-02-2023');
$date_fin = strtotime('31-03-2023');
$aujourdhui = time();

$diff_seconds = $date_fin - $aujourdhui;

$jours_restants = floor($diff_seconds / (60 * 60 * 24));

echo "Il reste " . $jours_restants . " jours avant la fin de la formation.";

?>   
</body>
</html>