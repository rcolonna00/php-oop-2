<?php 

class Tecnologia {
    public $genere;

    public $marca;

    public $modello;

    public $memoria;

    public $ram;

    public function __construct($_genere, $_marca, $_modello) {
        $this->genere = $_genere;
        $this->marca = $_marca;
        $this->modello = $_modello;
    }

    public function getInfoData() {
        return[
            'genere' => $this->genere,
            'marca' => $this->marca,
            'modello' => $this->modello,
            'memoria' => $this->memoria,
            'ram' => $this->ram
        ];
    }
}

?>