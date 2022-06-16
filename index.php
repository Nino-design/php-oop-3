<?php
require_once __DIR__ . "/Cibo.php";
require_once __DIR__ . "/Cucce.php";

$cibo_cani = new Cibo("Crocchette", "Frisky", 10, "Manzo", 300, 2024);
$cuccia_cani = new Cucce("Casetta", "Smith", 150, "XL", "Legno");

var_dump($cibo_cani);
var_dump($cuccia_cani);

echo $cibo_cani->mostraDettagliArticolo();
echo $cuccia_cani->mostraDettagliArticolo();





?>