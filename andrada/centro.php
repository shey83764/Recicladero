<?php
class Centro{
    //atributo
    private $id;
    public $ubicacion;
    public $capacidad;
    //constructor
    public function __construct($ca="50x30"){
        $this->id="numero";
        $this->capacidad=$ca;
    }
    //metodos
    public function getcapacidad(){
        $this->capacidad;
    }
    public fuction setcapacidad($ca){
        if(is_numeric($ca) AND strlen($ca)==6){
            $this->capacidad=$ca;
        }
        else{ 
        echo "error"
    }
}
}
$id1= new Centro();
echo "<pre>";
print_r($id1);