<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo1</title>
</head>
<body>
<?php
$date = "14/07/2019";
$dateObj = DateTime::createFromFormat('d/m/Y', $date);
if ($dateObj !== false) {
    $numero_semaine = $dateObj->format('W');
    echo "Le numéro de semaine pour la date $date est : $numero_semaine";
} else {
    echo "Format de date invalide";
}
?>   
</body>
</html>