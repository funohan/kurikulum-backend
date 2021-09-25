<?php
function autoloadMamalia($class)
{
    $file = "mamalia/{$class}.php";
    if (is_readable($file)) {
        require $file;
    }
}
spl_autoload_register("autoloadMamalia");

function autoloadUnggas($class)
{
    $file = "unggas/{$class}.php";
    if (is_readable($file)) {
        require $file;
    }
}
spl_autoload_register("autoloadUnggas")

$Kucing = new kucing;
$Harimau = new harimau;
$Ayam = new ayam;
$Angsa = new angsa;
?>