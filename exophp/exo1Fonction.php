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
$url = "https://www.reddit.com/";
$titre = "Reddit Hug";

function lien($url, $titre){
    echo '<a href="'.$url.'">'.$titre.'</a>';
}

lien($url, $titre);
?>


</body>
</html>