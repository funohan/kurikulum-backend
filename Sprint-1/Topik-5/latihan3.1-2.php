<?php

echo "\n";
echo ".=.=.=.=.=.=.=.=.=.=.=.=.=.=.=.\n";
echo "    Panjang trapesium    \n";
echo ".=.=.=.=.=.=.=.=.=.=.=.=.=.=.=.\n";
echo "\n";
function luas($a,$a2,$t){
    return($a+$a2)*$t/2;
}
$funtion_luas=function($a,$a2,$t){
    return($a+$a2)*$t/2;
};
echo "panjang alas atas trapesium = ";
$alas_atas=trim(fgets(STDIN));
echo "pajang alas bawah trapesium = ";
$alas_bawah=trim(fgets(STDIN));
echo "tinggi trapesium = ";
$tinggi=trim(fgets(STDIN));
echo "luas trapesium = ".$funtion_luas($alas_atas,$alas_bawah,$tinggi);
echo "\n";
echo "\n";
echo ".=.=.=.=.=.=.=.=.=.=.=.=.=.=.=.\n";
echo "Arigatou Gozaimasu\n";
echo ".=.=.=.=.=.=.=.=.=.=.=.=.=.=.=.\n";
echo "\n";

?>
