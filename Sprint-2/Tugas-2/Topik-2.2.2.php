<?php

class Perhitungan{
    public static function keliling_trapesium($s1, $s2, $s3, $s4) {
        return ($s1+$s2+$s3+$s4);
    }
    public static function luas_trapesium($a, $b, $t) {
        return ($a+$b)*$t/2;
    }
}
$menghitung = new Perhitungan;

echo "<><><><><><><><><><><><><><><><><><><><><>\n";
echo "|||             Trapesium              |||\n";
echo "<><><><><><><><><><><><><><><><><><><><><>\n";
echo "/\ ~~~~~~~~~~~~~~~ /+\ ~~~~~~~~~~~~~~~~ /\ \n";
echo "|| ~~~~~~~~~~~~~~~ | | ~~~~~~~~~~~~~~~~ /\ \n";
echo " \n";
echo " 1. Menghitung keliling Trapesium.\n";
echo " 2. Menghitung luas Trapesium.\n";
echo " \n";
echo " \n";
echo "  Mau menghitung apa?silahkan pilih!:";

$pilih = trim(fgets(STDIN));

switch ($pilih) {
    case 1:
        echo "<><><><><><><><><><><><><>\n";
        echo "|||      Keliling      |||\n";
        echo "<><><><><><><><><><><><><>\n";
        echo "Sisi Atas : ";
        $sisi_atas = trim(fgets(STDIN));
        echo "Alas : ";
        $alas = trim(fgets(STDIN));
        echo "Sisi Kanan : ";
        $sisi_kanan = trim(fgets(STDIN));
        echo "Sisi Kiri : ";
        $sisi_kiri = trim(fgets(STDIN));
        echo "Keliling : ".Perhitungan::keliling_trapesium($sisi_atas, $alas, $sisi_kanan, $sisi_kiri)."\n";
        break;
    case 2:
        echo "<><><><><><><><><><><><><>\n";
        echo "|||        Luas        |||\n";
        echo "<><><><><><><><><><><><><>\n";     
        echo "Sisi Atas : ";
        $sisi_atas = trim(fgets(STDIN));
        echo "Alas : ";
        $alas = trim(fgets(STDIN));
        echo "Tinggi : ";
        $tinggi = trim(fgets(STDIN));
        echo "Luas : ".Perhitungan::luas_trapesium($sisi_atas, $alas, $tinggi)."\n";
        break;        
}
?>