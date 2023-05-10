<?php
// 4 / 5 //
class Magasin {
    private $nom;
    private $adresse;
    private $code_postal;
    private $ville;
    private $mode_de_restauration;

    public function __construct($nom, $adresse, $code_postal, $ville, $mode_de_restauration) {
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->code_postal = $code_postal;
        $this->ville = $ville;
        $this->mode_de_restauration = $mode_de_restauration;
    }

    public function nom() {
        return $this->nom;
    }

    public function adresse() {
        return $this->adresse;
    }

    public function code_postal() {
        return $this->code_postal;
    }

    public function ville() {
        return $this->ville;
    }
    public function mode_de_restauration(){
        return $this->mode_de_restauration;
    }
}
?>