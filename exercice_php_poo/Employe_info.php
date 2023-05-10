<?php
// 1 //
require_once('Employe_class.php');

// 2 //
echo "<h3>------------------------------// 2 //-------------------------------</h3>";

$employe1 = new Employe("Dupont", "Jean", "2015-01-01", "Comptable", 30, "Comptabilité", "", "");

echo $employe1->prenom() . " " . $employe1->nom() . " a été embauché il y a " . $employe1->anciennete() . " ans. <br><br>";

// 3 //
echo "<h3>------------------------------// 3 //-------------------------------</h3>";

$employe2 = new Employe("Martin", "Marie", "2015-11-20", "Comptable", 30, "Comptabilité", "", "");
$employe3 = new Employe("Lefebvre", "Pierre", "2012-03-10", "Commercial", 35, "Ventes", "", "");
$employe4 = new Employe("Benoit", "Sophie", "2017-09-01", "Secrétaire", 25, "Administratif", "", "");
$employe5 = new Employe("Garcia", "Manuel", "2009-01-05", "Directeur", 60, "Direction", "", "");

$employes = array($employe1, $employe2, $employe3, $employe4, $employe5);

foreach($employes as $employe){
    $prime = $employe->calculer_prime();
    echo "La prime de " . $employe->prenom() . " " . $employe->nom() . " est de " . $prime . " K euros. <br><br>";
    echo $employe->transfert_bancaire();  
}  

// 4 //
echo "<h3>------------------------------// 4 //-------------------------------</h3>";
require_once('Magasin_class.php');

$magasin1 = new Magasin("Jarditou", "12 Rue de la Paix", "80000", "Amiens", "", "");
$employe6 = new Employe("Durand", "Victor", "2017-06-01", "Vendeur", 25, "Vente", $magasin1, "");

$magasin_de_employe6 = $employe6->magasin();
echo $employe6->prenom() . " " . $employe6->nom() . " travaille dans le magasin : <br>" . $magasin_de_employe6->nom() . "<br>" . $magasin_de_employe6->adresse() . "<br>" . $magasin_de_employe6->code_postal() . " " . $magasin_de_employe6->ville();

// 5 //
echo "<h3>------------------------------// 5 //-------------------------------</h3>";

$magasin2 = new Magasin("Jarditou", "60 Rue du Faubourg Saint-Honoré", "75008", "Paris", "ticket restaurant");
$magasin3 = new Magasin("Jarditou", "125 Boulevard Clemenceau", "69002", "Lyon", "self");
$magasin4 = new Magasin("Jarditou", "Rue du Maréchal Leclerc", "31000", "Toulouse", "ticket restaurant");

$employe7 = new Employe("Moreau", "Léa", "2023-01-22", "Conseillère clientèle", 27, "Service à la clientèle", $magasin2, "");
$employe8 = new Employe("Leroy", "Emma", "2021-11-18", "Vendeur", 25, "Vente", $magasin3, "");
$employe9 = new Employe("Roux", "Thomas", "2019-01-10", "Vendeur", 25, "Vente", $magasin4, "");
$employe10 = new Employe("Fournier", "Alexandre", "2023-03-01", "Coordinateur des ventes", 28, "Gestion des ventes", $magasin3, "");

$employe_restauration = array($employe7, $employe8, $employe9, $employe10);

foreach($employe_restauration as $mode_de_restauration){
    echo $mode_de_restauration->prenom() . " " . $mode_de_restauration->nom() . " travaille dans le magasin : <br>" . $mode_de_restauration->magasin()->nom() . " / " . $mode_de_restauration->magasin()->ville() . "<br> Mode de restauration : <br>" . $mode_de_restauration->magasin()->mode_de_restauration() . "<br>";
    echo "<br>";
}

// 6 //
echo "<h3>------------------------------// 6 //-------------------------------</h3>";

$employe_cheque = array($employe6, $employe7, $employe8, $employe9, $employe10);

foreach ($employe_cheque as $cheque_vacance) {
    if ($cheque_vacance->cheque_vacance()) {
        echo $cheque_vacance->prenom().' '.$cheque_vacance->nom().' peut bénéficier de chèques-vacances. <br><br>';
    } else {
        echo $cheque_vacance->prenom().' '.$cheque_vacance->nom().' ne peut pas bénéficier de chèques-vacances. <br><br>';
    }
}

// 7 //
echo "<h3>------------------------------// 7 //-------------------------------</h3>";

require_once('Employe_enfant_class.php');

$enfant1 = new Enfant(8, 12);
$enfant2 = new Enfant(14, "");
$enfant3 = new Enfant(17, 5);

$employe11 = new Employe("Dupont", "Paul", "2023-02-07", "Développeur web", 27, "Informatique", $magasin2, $enfant1);
$employe12 = new Employe("Simon", "Camille", "2021-06-09", "Chef de produit", 30, "Marketing", $magasin3, $enfant2);
$employe13 = new Employe("Morel", "Lucie", "2019-04-30", "Responsable des ressources humaines", 26, "Ressources humaines", $magasin4, $enfant3);
$employe14 = new Employe("Dumont", "Maxime", "2020-11-23", "Commercial", 25, "Vente", $magasin1, "");

$employe_noel = array($employe11, $employe12, $employe13, $employe14);

foreach ($employe_noel as $cheque_noel) {
    if ($cheque_noel->enfant() == true) {
       if ($cheque_noel->enfant()->age2() == true) { 
        echo $cheque_noel->prenom() . " " . $cheque_noel->nom() . " a le droit à un chèque noël de " . $cheque_noel->cheque_noel() . "€ et d'un deuxième chèque noël de " . $cheque_noel->cheque_noel1() . "€. <br><br>";
        }
        else {
        echo $cheque_noel->prenom() . " " . $cheque_noel->nom() . " a le droit à un chèque noël de " . $cheque_noel->cheque_noel() . "€. <br><br>";
        }
    }
    else {
        echo $cheque_noel->prenom() . " " . $cheque_noel->nom() . " n'a pas le droit à un chèque de noël.";
    }
}
?>