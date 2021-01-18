<?php

include_once __DIR__ . '/genral-prod.php';

class Smartphone extends GeneralProd {
    // PROPERTIES
    public $sistema_operativo;
    public $storage;
    public $ram;
    public $camera;
    public $schermo;

    // CONSTRUCTOR
    public function __construct($name, $model, $price, $availability, $sistema_operativo, $storage, $ram, $camera, $schermo) {
        parent::__construct($name, $model, $price, $availability);
        $this->sistema_operativo = $sistema_operativo;
        $this->storage = $storage;
        $this->ram = $ram;
        $this->camera = $camera;
        $this->schermo = $schermo; 
    }
}
