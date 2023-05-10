<?php 
class Personnage {
    
    private $nom;
    private $prenom;
    private $age;
    private $sexe;

    function setNom($nom){
        echo $this->nom = $nom; 
    }
    function setPrenom($prenom){
        echo "<br>".$this->prenom = $prenom;
    }
}
?>