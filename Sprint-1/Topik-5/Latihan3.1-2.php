<?php
{echo "\n";
echo ".=.=.=.=.=.=.=.=.=.=.=.=.=.=.=.\n";
echo "Menentukan luas lingkaran      \n";
echo ".=.=.=.=.=.=.=.=.=.=.=.=.=.=.=.\n";
echo "\n";
};  
function luas($r){
    return($r*$r)*3.14;
};    
$funtion_luas=function($r){
    return($r*$r)*3.14;
};
echo "Tentukan panjang jari-jari lingkaran = ";
$Jari_Jari=trim(fgets(STDIN));
echo "\n";
echo "++++++++++++++++++++++++++++++\n";
echo "luas lingkaran = ".$funtion_luas($Jari_Jari);
echo "\n";

echo "\n";
echo ".=.=.=.=.=.=.=.=.=.=.=.=.=.=.=.\n";
 echo "Arigatou Gozaimasu\n";
echo ".=.=.=.=.=.=.=.=.=.=.=.=.=.=.=.\n";
echo "\n";

?>
