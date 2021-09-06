<?php

require 'Latihan-1.1.php';

$data = $pdo->ambilDataPOST();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Method POST</h2>
        <form action="Latihan-1.1.php" method="post">
            <input type="hidden" name="id" value="<?= $data["id"]; ?>">
            <label for="nama">Nama Barang : </label>
            <input type="text" name="nama" id="nama" require value="<?= $data["nama"]; ?>">
            <label for="harga">Harga : </label>
            <input type="text" name="harga" id="harga" require value="<?= $data["harga"]; ?>">
            <button type="submit" name="update">Update</button>
            <button type="submit" name="back"><a href="Latihan-1.2.php" >Back</a></button>
        </form>
    
</body>
</html>

