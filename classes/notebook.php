<?php

include_once __DIR__ . '/genral-prod.php';

class Notebook extends GeneralProd{
    // PROPERTIES
    public $processore;
    public $ram;
    public $storage;
    public $scheda_video;
    public $schermo;

    // CONSTRUCTOR
    public function __construct($name, $model, $price, $availability, $processore, $ram, $storage, $scheda_video, $schermo) {
        parent::__construct($name, $model, $price, $availability);
        $this->processore = $processore;
        $this->ram = $ram;
        $this->storage = $storage;
        $this->scheda_video = $scheda_video;
        $this->schermo = $schermo;
    }

    // METHODS
}