<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo3</title>
</head>
<body>
<?php
$annee = 2023;

if (($annee % 4 == 0 && $annee % 100 != 0) || $annee % 400 == 0) {
    echo "$annee est bissextile.";
} else {
    echo "$annee n'est pas bissextile.";
}
?>   
</body>
</html>