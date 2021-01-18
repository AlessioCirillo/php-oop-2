<?php
// GENERAL CLASS

class GeneralProd {
    // PROPERTIES
    public $name;
    public $availability;
    public $price;
    public $feature;

    // CONSTRUCTOR
    public function __construct($name, $model, $price, $availability) {
        $this->name = $name;
        $this->model = $model;
        $this->availability = $availability;
        $this->price = $price;
    }
    
    // METHODS
   
}