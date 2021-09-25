<?php
// function my_pet(){
//     $jenis = [
//         [
//             'Nama Hewan' => 'Lily',
//             'Jenis Hewan' => 'Kucing'
//         ],
//         [
//             'Nama Hewan' => 'Jacky',
//             'Jenis Hewan' => 'Burung Dara'
//         ],
//         [
//             'Nama Hewan' => 'Shally',
//             'Jenis Hewan' => 'Kelinci'
//         ]
//         ];
//         foreach ($jenis as $key){

//             echo "My Name Pet  :" . $key['Nama Hewan'] . "\n";
//             echo "My Type Pet  :" . $key['Jenis Hewan'] . "\n";
//             echo "\n";
//         }
// }
// my_pet();

// closure tanpa parameter
// $run = function(){
//     $data = [
//         'Nama' => 'Alannn',
//         'Divisi' => 'UX'
//     ];
//     echo $data['Nama'] . "<br>";
//     echo $data['Divisi'] . "<br>";
// };
// $run();
// closure dengan parameter
// $run = function($call){
//     echo $call['Nama']."<br>";
//     echo $call['Kelas']. "<br>";
// // print_r($call); //dgn print_r
// var_dump($call); //dgn var_dump
// };
// $data =[
//     'Nama' => 'Zizz ',
//     'Kelas' => 'Project'
// ];
// $run($data);

//function persegi
// function persegi($luas){
//     for($x=1; $x<=$luas; $x++){
//         for($y=1; $y<=$luas; $y++){
//             echo " * ";
//         }
//         echo "/n";
//     }
// }
// echo "Tentukan Panjang Sisi :  ";
// $sisi = trim(fgets(STDIN));
// persegi($sisi); 

// class dengan method menghitung luas persegi panjang
// class perhitungan{
//     public static function luas($p, $l){
//         return ($p*$l);
//     }
// }
// $pilih =trim(fgets(STDIN));
//     switch($pilih) {
//         case 1 : 
//             echo "Panjang Sisi :   ";
//             $Panjang = (int)(fgets(STDIN));
//             echo "Lebar Sisi   :   ";
//             $Lebar = (int)(fgets(STDIN));divisor
//             echo "Luas         :   ". perhitungan::luas($Panjang, $Lebar)."\n";
//     }

//tambahkan method construct ke class yang sudah dibuat
// class hallo{
//     function __construct(){
//         echo "Hallo guys..";
//     }
//     public static function luas($p, $l){
//         $luas = $p * $l;
//         return $luas;
//     }
// }
// $call = new hallo();
// class motor{
//     protected $nama = 'Sebastian';
//     public function jalan(){
//         return $this->nama;
//     }
// }
// class kendaraan extends motor{
//     public function jalan(){
//         return $this->nama;
//     }
// }
// $aksi_motor = new motor();
// $aksi_kendaraan = new kendaraan();
// echo $aksi_motor->jalan

// try {
//     hitung::persegi_panjang(5,4);
// }catch (\Throwable $th) {
//     echo $th->getMessage(). "<br>";
// }



?>