<?php

echo "\n";
function calcRectangleArea($width, $length)  {
   echo ".=.=.=.=.=.=.=..=.=.=.=.=.=.=.=.\n";
    echo "Menghitug Luas Persegi Panjang. \n";
   echo ".=.=.=.=.=.=.=.=.=.=.=.=.=.=.=. \n";
echo "\n";   
    echo $width;

    $input = (int) fgets(STDIN);
    echo "Lebar persegi panjang : $input\n";
    echo $length;
    $input2 =(int) fgets(STDIN);
    echo "Panjang persegi panjang : $input2\n";
    $hasil = $input*$input2;
    echo "\n";
    echo "Luas Persegi panjang :$hasil\n";
   echo "+++++++++++++++++++++++++++++++\n";
};
calcRectangleArea("masukkan lebar persegi panjang  : ", "masukkan panjang persegi panjang : ");

echo "\n";
echo ".=.=.=.=.=.=.=.=.\n";
    echo "Arigatou Gozaimasu \n";
echo ".=.=.=.=.=.=.=.=.\n";
echo "\n";

?>
