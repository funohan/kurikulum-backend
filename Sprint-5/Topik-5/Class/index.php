<?php
require 'persegi.php';

$luas = new Hitung\Luas;

echo "Panjang  : ";
$p = trim(fgets(STDIN));
echo "Lebar    : ";
$l = trim(fgets(STDIN));
echo "Luas persegi panjang adalah  : ".$luas->luas_persegi($p, $l)."\n";

?>