<?php

class Perhitungan{

    public static function keliling_lingkaran($k){
        return 2*3.14*($k);
    }
    public static function luas_lingkaran($r){
        return 2*3.14*($r*$r);
    }
}
$menghitung = new Perhitungan;

echo "<><><><><><><><><><><><><><><><><><><><><>\n";
echo "|||             Lingkaran              |||\n";
echo "<><><><><><><><><><><><><><><><><><><><><>\n";
echo "/\ ~~~~~~~~~~~~~~~ /+\ ~~~~~~~~~~~~~~~~ /\ \n";
echo "|| ~~~~~~~~~~~~~~~ | | ~~~~~~~~~~~~~~~~ /\ \n";
echo " \n";
echo " 1. Menghitung keliling lingkaran.\n";
echo " 2. Menghitung luas lingkaran.\n";
echo " \n";
echo " \n";
echo "   Mau menghitung apa?silahkan pilih!:";

$pilih = trim(fgets(STDIN));

switch ($pilih) {
    case 1:
        echo "<><><><><><><><><><><><><>\n";
        echo "|||      Keliling      |||\n";
        echo "<><><><><><><><><><><><><>\n";
        echo "Jari-Jari : ";
        $keliling =(int)trim(fgets(STDIN));
        echo "Keliling : ".Perhitungan::keliling_lingkaran($keliling)."\n";
        break;
    case 2:
        echo "<><><><><><><><><><><><><>\n";
        echo "|||        Luas        |||\n";
        echo "<><><><><><><><><><><><><>\n";
        echo "r : ";
        $jari =(int)trim(fgets(STDIN));
        echo "Luas : ".Perhitungan::luas_lingkaran($jari)."\n";
        break;
        
    default:
        echo "Silahkan pilih ulang!\n";
        break;        
}

?>