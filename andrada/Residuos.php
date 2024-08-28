<?php
//no se puede modificar las cosas en private  
class Residuos {
    //atributos, private es para no modificar
 public $reciclable;
 public $biodegradable;
 public $tipo;
 public $peso;
 public $volumen;
 // constructor 
    public function __construct($R,$p="59 kg",$v="222"){
    $this->reciclable=$R;
    $this->peso=$p;
    $this->volumen=$v;
    }
     //metodo
     function hola(){
        echo"hola como estas $this->reciclable";
     }
     //se aplicaria con peso y volumen
     public function getvolumen(){
        return $this->volumen;
     }
     public function setvolumen($vol){
        if(is_numeric($vol) AND strlen($vol)==8 ){
        $this->volumen=$vol;
     }else{
        echo"error";
     }
    }
}

$residuos1= new Residuos("papel");
$residuos2= new Residuos("vidrio","59 kg");

echo "El reciclable es $residuos1->reciclable<br>";
$residuos2->reciclable="carton";
echo "El reciclable es $residuos2->reciclable<br>";
$residuos1->hola();
$residuos2->setvolumen("222");
echo "<pre>";
print_r($residuos1);

      