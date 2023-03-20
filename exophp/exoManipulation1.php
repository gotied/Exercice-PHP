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
$liens = file('ExoManipulation1.txt', FILE_IGNORE_NEW_LINES);

echo '<ul>';
foreach ($liens as $link) {
    echo '<li><a href="' . $link . '">' . $link . '</a></li>';
}
echo '</ul>';
?>

 
</body>
</html>