<?php

class Perhitungan{

    public static function keliling_persegi($p, $l){
        if ($p==0 || $l==0){
            throw new Exception("Masukkan angka yang benar.!");
            echo "\n";
        }
        return 2*($p+$l);
    }
    public static function luas_persegi($p, $l){
        if ($p==0 || $l==0){
            throw new Exception("Masukkan angka yang benar.!");
            echo "\n";
        }
        return ($p*$l);
    }
    public static function keliling_lingkaran($k){
        if ($k==0){
            throw new Exception("Masukkan angka yang benar.!");
            echo "\n";
        }
        return 2*3.14*($k);
    }
    public static function luas_lingkaran($r){
        if ($r==0){
            throw new Exception("Masukkan angka yang benar.!");
            echo "\n";
        }
        return 3.14*($r*$r);
    }
    public static function keliling_trapesium($s1, $s2, $s3, $s4){
        if ($s1==0 || $s2==0 || $s3==0 || $s4==0){
            throw new Exception("Masukkan angka yang benar.!");
            echo "\n";
        }
        return ($s1+$s2+$s3+$s4);
    }
    public static function luas_trapesium($a,$b,$t){
        if ($a==0 || $b==0 || $t==0){
            throw new Exception("Masukkan angka yang benar.!");
            echo "\n";
        }
        return ($a+$b)*t/2;
    }

} 
$menghitung= new Perhitungan;
echo "<><><><><><><><><><><><><><><><><><><><><>\n";
echo "|||             Menghitung             |||\n";
echo "<><><><><><><><><><><><><><><><><><><><><>\n";
echo "/\ ~~~~~~~~~~~~~~~ /+\ ~~~~~~~~~~~~~~~~ /\ \n";
echo "|| ~~~~~~~~~~~~~~~ | | ~~~~~~~~~~~~~~~~ /\ \n";
echo " \n";
echo " 1. Menghitung keliling persegi panjang.\n";
echo " 2. Menghitung luas persegi panjang.\n";
echo " 3. Menghitung keliling lingkaran.\n";
echo " 4. Menghitung luas lingkaran\n";
echo " 5. Menghitung keliling trapesium.\n";
echo " 6. Menghitung luas trapesium.\n";
echo " \n";
echo " \n";
echo " Mau menghitung apa..?silahkan pilih!: ";

$pilih = trim(fgets(STDIN));

switch ($pilih) {
    case 1:
        echo "<><><><><><><><><><><><><>\n";
        echo "|||      Keliling      |||\n";
        echo "<><><><><><><><><><><><><>\n";
        echo "Panjang : ";
        $Panjang = (int)trim(fgets(STDIN));
        echo "Lebar : ";
        $Lebar = (int)trim(fgets(STDIN));
        try {
            $hasil=Perhitungan::keliling_persegi($Panjang, $Lebar);
            echo "Keliling : ".$hasil;
            echo "\n";
        } catch (Exception $ex) {
            echo "Terjadi eror pada".$ex->getFile(). "\n Baris ke".$ex->getLine()."\n";
            echo $ex->getMessage();
        }
        break;

    case 2:
        echo "<><><><><><><><><><><><><>\n";
        echo "|||        Luas        |||\n";
        echo "<><><><><><><><><><><><><>\n";
        echo "Panjang : ";
        $Panjang = (int)trim(fgets(STDIN));
        echo "Lebar : ";
        $Lebar = (int)trim(fgets(STDIN));
        try {
            $hasil=Perhitungan::luas_persegi($Panjang, $Lebar);
            echo "Luas : ".$hasil;
            echo "\n";
        } catch (Exception $ex) {
            echo "Terjadi eror pada : ".$ex->getFile(). "\n Baris ke : ".$ex->getLine()."\n";
            echo $ex->getMessage();
        }
        break;

    case 3:
        echo "<><><><><><><><><><><><><>\n";
        echo "|||      Keliling      |||\n";
        echo "<><><><><><><><><><><><><>\n";
        echo "Jari-Jari : ";
        $keliling=trim(fgets(STDIN));
        try {
            $hasil=Perhitungan::keliling_lingkaran($keliling);
            echo "Keliling : ".$hasil;
            echo "\n";
        } catch (Exception $th) {
            echo "Terjadi eror pada : ".$th->getFile(). "\nBaris ke : ".$th->getLine()."\n";
            echo $th->getMessage();
        }
        break;

    case 4:
        echo "<><><><><><><><><><><><><>\n";
        echo "|||        Luas        |||\n";
        echo "<><><><><><><><><><><><><>\n";
        echo "r : ";
        $Jari=trim(fgets(STDIN));
        try {
            $hasil=Perhitungan::luas_lingkaran($keliling);
            echo "Luas : ".$hasil;
            echo "\n";
        } catch (Exception $th) {
            echo "Terjadi eror pada : ".$th->getFile(). "\nBaris ke : ".$th->getLine()."\n";
            echo $th->getMessage();
        }
        break;  

    case 5:
        echo "<><><><><><><><><><><><><>\n";
        echo "|||      Keliling      |||\n";
        echo "<><><><><><><><><><><><><>\n";
        echo "Alas : ";
        $Alas = trim(fgets(STDIN));
        echo "Atas : ";
        $Atas = trim(fgets(STDIN));
        echo "Kanan : ";
        $Kanan = trim(fgets(STDIN));
        echo "Kiri : ";
        $Kiri = trim(fgets(STDIN));
        try {
            $hasil=Perhitungan::keliling_trapesium($Alas,$Atas,$Kanan,$Kiri);
            echo "Keliling : ".$hasil;
            echo "\n";
        } catch (Exception $th) {
            echo "Terjadi eror pada : ".$th->getFile(). "\nBaris ke : ".$th->getLine()."\n";
            echo $th->getMessage();
        }
        break;

    case 6:
        echo "<><><><><><><><><><><><><>\n";
        echo "|||        Luas        |||\n";
        echo "<><><><><><><><><><><><><>\n";
        echo "Atas : ";
        $Atas= trim(fgets(STDIN));
        echo "Alas : ";
        $Alas= trim(fgets(STDIN));
        echo "Tinggi : ";
        $Tinggi= trim(fgets(STDIN));
        try {
            $hasil=Perhitungan::luas_trapesium($Atas,$Alas,$Tinggi);
            echo "Luas : ".$hasil;
            echo "\n";
        } catch (Exception $th) {
            echo "Terjadi eror pada : ".$th->getFile(). "\nBaris ke : ".$th->getLine()."\n";
            echo $th->getMessage();
        }        
        break;
    default:
        echo "Terjadi kesalahan, silahkan masukkan perintah yang benar.";
        echo "\n";
        break;        
   
}

?>
