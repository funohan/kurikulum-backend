<?php

//=================================MSQLI===============================================


$servername = "localhost";
$username = "funouhan";
$password = "funouhan";
$database = "PondokIT";

// membuat koneksi
$conn = mysqli_connect ($servername, $username, $password, $database);

// mengecek koneksi
if (!$conn) {
    die("[---------------------------Connection failed Gaes.!!!---------------------------]" . mysqli_connect_error()); 
}
echo "[---------------------------Connection succesfully---------------------------]";
mysqli_close($conn);

//=====================================================================================

//================================PDO==================================================


// $servername = "localhost";
// $username = "funouhan";
// $password = "funouhan";
// // $database = "PondokIT";

// try {
//     $conn = new PDO("mysql:host=$servername;dbnama=PondokIT", $username, $password);
//     // errornya
//     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     // jika berhasil
//     echo "[-----------------------------Connection successfully---------------------------]"; 
//     }
// catch(PDOException $e)
//     {
//     // jika gagal 
//     echo "[---------------------------Connection failed Gaes.!!!---------------------------] " . $e->getMessage();
//     }
 
//======================================================================================

?>
