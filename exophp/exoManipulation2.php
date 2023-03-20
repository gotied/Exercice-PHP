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
$liens = file('customers.csv');

echo '<table class="table">';

$custo = explode(',', $liens[0]);
echo '<thead><tr>';
foreach ($custo as $header) {
    echo '<th>' . $header . '</th>';
}
echo '</tr></thead>';

echo '<tbody>';
for ($i = 1; $i < count($liens); $i++) {
    $dat = explode(',', $liens[$i]);
    echo '<tr>';
    foreach ($dat as $field) {
        echo '<td>' . $field . '</td>';
    }
    echo '</tr>';
}
echo '</tbody></table>';

?>

 
</body>
</html>