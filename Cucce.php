<?php
require_once __DIR__ . "/Articolo.php";

class Cucce extends Articolo{
    public $taglia;
    public $materiale;

    function __construct($_nome, $_produttore, $_prezzo, $_taglia, $_materiale)
    {
        parent::__construct($_nome, $_produttore, $_prezzo);
        $this->taglia = $_taglia;
        $this->materiale = $_materiale;
        
    }

}



?>