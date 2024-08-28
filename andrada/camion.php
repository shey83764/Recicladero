<?php
class camion{

 private $patente;
 public $capacidad;
 public function __construct($pat = "1920MLK"){
    $this->setpatente($pat);
    $this->capacidad="39x50";
    }

    public function getpatente(){
        return $this->patente;
    }
    
    public function setpatente($pat){
        if (strlen($pat)==7) {
            // Hace una separacion a los 4 digitos
            $divisor = str_split($pat, 4);
            // Los une con guion medio
            $this->patente = implode('-', $divisor);
        }else {
            echo "Error";
        }
    }
}

$camion1= new camion();

echo "La capacidad es $camion1->capacidad <br>";

echo "<pre>";
print_r($camion1);