<?php

    echo "==========================\n";
    echo " Menentukan luas segitiga \n";
    echo "==========================\n\n";

function luas($a,$t){
    return ($a*$t)/2;
}
$funtion_luas=function($a,$t){
    return ($a*$t)/2;
};
echo "alas = ";
$alas = trim(fgets(STDIN));
echo "tinggi = ";
$tinggi = trim(fgets(STDIN));
echo "luas = ".$funtion_luas($alas,$tinggi);
echo "\n";

echo "==========================\n";
echo "Arigatou Gozaimasu\n";
echo "==========================\n";

?>
