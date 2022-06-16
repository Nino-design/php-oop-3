<?php
require_once __DIR__ . "/Cibo.php";
require_once __DIR__ . "/Cucce.php";
require_once __DIR__ . "/Utente.php";

$cibo_cani = new Cibo("Crocchette", "Frisky", 10, "Manzo", 300, 2024);
$cuccia_cani = new Cucce("Casetta", "Smith", 150, "XL", "Legno");
$nuovo_utente = new Utente();

var_dump($cibo_cani);
var_dump($cuccia_cani);

echo $cibo_cani->mostraDettagliArticolo();
echo $cuccia_cani->mostraDettagliArticolo();

try {
    $nuovo_utente->aggiungiProdotto($cibo_cani);
} catch (Exception $e) {
    echo "<br>" . $e->getMessage() . "<br>";
}

var_dump($nuovo_utente);


?>