<?php

class Perhitungan{
    public static function keliling_persegi($p, $l){
        return 2*($p+$l);
    }
    public static function luas_persegi($p, $l){
        return ($p*$l);
    }
}
$menghitung = new Perhitungan;

echo "<><><><><><><><><><><><><><><><><><><><><>\n";
echo "|||          Persegi Panjang           |||\n";
echo "<><><><><><><><><><><><><><><><><><><><><>\n";
echo "/\ ~~~~~~~~~~~~~~~ /+\ ~~~~~~~~~~~~~~~~ /\ \n";
echo "|| ~~~~~~~~~~~~~~~ | | ~~~~~~~~~~~~~~~~ /\ \n";
echo " \n";
echo " 1. Menghitung keliling persegi panjang.\n";
echo " 2. Menghitung luas persegi panjang.\n";
echo " \n";
echo " \n";
echo "   Mau menghitung apa?silahkan pilih!:";

$pilih = trim(fgets(STDIN));

switch ($pilih) {
    case 1:
        echo "<><><><><><><><><><><><><>\n";
        echo "|||      Keliling      |||\n";
        echo "<><><><><><><><><><><><><>\n";
        echo "Panjang : ";
        $Panjang =(int)trim(fgets(STDIN));
        echo "Lebar   : ";
        $Lebar =(int)trim(fgets(STDIN));
        echo "Keliling : ".Perhitungan::keliling_persegi($Panjang, $Lebar)."\n";
        break;
    case 2:
        echo "<><><><><><><><><><><><><>\n";
        echo "|||        Luas        |||\n";
        echo "<><><><><><><><><><><><><>\n";
        echo "Panjang : ";
        $Panjang =(int)trim(fgets(STDIN));
        echo "Lebar   : ";
        $Lebar =(int)trim(fgets(STDIN));
        echo "Luas : ".Perhitungan::luas_persegi($Panjang, $Lebar)."\n";
        break;
        
    default:
        echo "Silahkan pilih ulang!\n";
        break;        
}

?>