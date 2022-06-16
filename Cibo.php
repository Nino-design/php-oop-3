<?php
require_once __DIR__ . "/Articolo.php";

class Cibo extends Articolo{
    public $gusto;
    public $peso;
    public $scadenza;


    function __construct($_nome, $_produttore, $_prezzo,$_gusto,$_peso,$_scadenza)
    {
        parent::__construct($_nome, $_produttore, $_prezzo);
        $this->gusto = $_gusto;
        $this->peso = $_peso;
        $this->scadenza = $_scadenza;

    }
}
?>