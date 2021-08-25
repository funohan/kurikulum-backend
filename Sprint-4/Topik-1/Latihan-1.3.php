<?php   
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h2>Silahkan masukkan data berikut!</h2>
    <form action="" method="get">
        <label for="namaKurir">Nama Kurir:</label>
        <input type="text" name="namaKurir" id="namaKurir">
        <br><label for="namaPengirim">Nama Pengirim</label>
        <input type="text" name="namaPengirim" id="namaPengirim">
        <br><label for="asalBarang">Asal Barang :</label>
        <input type="text" name="asalBarang" id="asalBarang">
        <br><label for="tujuanBarang">Tujuan Barang :</label>
        <input type="text" name="tujuanBarang" id="tujuanBarang">
        <br><input type="submit" value="submit">
    </form>
<?php
    echo "Nama Kurir : " .$_GET['namaKurir']."<br>";
    echo "Nama Pengirim : " .$_GET['namaPengirim']."<br>";
    echo "Asal Barang : " .$_GET['asalBarang']."<br>";
    echo "Tujuan Barang : " .$_GET['tujuanBarang']."<br>";
?>
</body>
</html>