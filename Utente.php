<?php

require_once __DIR__ . "/ControlloUtente.php";

class Utente {
    use ControllUtente;

    public $cart = [];
    public $pagamneto;


    public function aggiungiProdotto($prodotto) {
        if (get_parent_class($prodotto) !== "Articolo") {
            throw new Exception("Prodotto non riconosciuto");
        }
        if (!$prodotto->available) {
            throw new Exception("Prodotto non è disponibile");
        }
        $this->cart[] = $prodotto;
    }
}

?>