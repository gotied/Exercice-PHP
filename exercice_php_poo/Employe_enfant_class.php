<?php
// 7 //
class Enfant {
    private $age;
    private $age2;

    public function __construct($age, $age2) {
        $this->age = $age;
        $this->age2 = $age2;
    }

    public function age() {
        return $this->age;
    }
    public function age2() {
        return $this->age2;
    }
}
?>