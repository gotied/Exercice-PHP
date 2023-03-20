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
function complex_password($password) {
   if (strlen($password) < 8) {
        return false;
    }
    
    if (!preg_match("/\d/", $password)) {
        return false;
    }
    
    if (!preg_match("/[a-z]/", $password) || !preg_match("/[A-Z]/", $password)) {
        return false;
    }
    return true;
}

$resultat = complex_password("TopSecret42");
var_dump($resultat); 

 
?>   
</body>
</html>
