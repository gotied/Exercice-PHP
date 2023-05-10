<?php
// 1 / 4 / 7 //
class Employe {
    private $nom;
    private $prenom;
    private $date_embauche;
    private $fonction;
    private $salaire;
    private $service;
    private $magasin;
    private $enfant;

    public function __construct($nom, $prenom, $date_embauche, $fonction, $salaire, $service, $magasin, $enfant) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date_embauche = $date_embauche;
        $this->fonction = $fonction;
        $this->salaire = $salaire;
        $this->service = $service;
        $this->magasin = $magasin;
        $this->enfant = $enfant;
    }

    public function prenom() {
        return $this->prenom;
    }

    public function nom() {
        return $this->nom;
    }

    public function magasin() {
        return $this->magasin;
    }
    public function enfant() {
        return $this->enfant;
    }

    // 2 //
    public function anciennete() {
        $date_embauche = new DateTime($this->date_embauche);
        $date_actuelle = new DateTime();
        $diff = $date_actuelle->diff($date_embauche);
        return $diff->y;
    }

    // 3 //
    public function calculer_prime() {
        $annees_anciennete = $this->anciennete();
        $prime_annuelle = $this->salaire * 0.05 + $this->salaire * 0.02 * $annees_anciennete;
        return $prime_annuelle;
    }

   
    public function transfert_bancaire() {
        if (date('m') == 5 && date('d') == 5){
            $prime = $this->calculer_prime();
            $message = "Ordre de transfert envoyé à la banque pour un montant de " . $prime . " K euros. <br><br>";
            return $message;
        }
    }

    // 6 // 
    public function cheque_vacance() {
        return $this->anciennete() >= 1;
    }
    
    // 7 // 
    public function cheque_noel() {
        if($this->enfant()->age() > 0 && $this->enfant()->age() <= 10){
            $cheque_noel = 20;
            return $cheque_noel;
        }
        if ($this->enfant()->age() >= 11 && $this->enfant()->age() <= 15) {
            $cheque_noel = 30;
            return $cheque_noel;
        }
        if ($this->enfant()->age() >= 16 && $this->enfant()->age() <= 18) {
            $cheque_noel = 50;
            return $cheque_noel;
        }
        
    }
    public function cheque_noel1() {
        if ($this->enfant()->age2() == true) {
            if($this->enfant()->age2() > 0 && $this->enfant()->age2() <= 10){
                $cheque_noel = 20;
                return $cheque_noel;
            }
            if ($this->enfant()->age2() >= 11 && $this->enfant()->age2() <= 15) {
                $cheque_noel = 30;
                return $cheque_noel;
            }
            if ($this->enfant()->age2() >= 16 && $this->enfant()->age2() <= 18) {
                $cheque_noel = 50;
                return $cheque_noel;
            }
        }
    }
}
?>