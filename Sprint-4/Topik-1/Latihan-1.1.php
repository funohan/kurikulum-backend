<?php

require "Latihan-1.2.php";
$UI = $pdo->getDataPOST();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OlShop</title>
</head>
<body>
    <h2>Silahkan masukkan data berikut!</h2>
    <form action="Latihan-1.2.php" method="post">
        <label for="namaBarang">Nama Barang : </label>
        <input type="text" name="namaBarang" id="namaBarang">
        <label for="hargaBarang">Harga Barang : </label>
        <input type="text" name="hargaBarang" id="hargaBarang">
        <input type="submit" name="submit" value="Tambah">
    </form>

    <br>

    <table class="table-post" border="1" cellspacing="0" cellpadding="5">
        <thead class="post">
            <th>No</th>
            <th>Nama Barang</th>
            <th>Harga Barang</th>
        </thead>
        <tbody>
        
        <?php $no = 1; ?>
        <?php foreach( $UI as $ui ) : ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $ui['namaBarang']; ?></td>
                <td><?= $ui['hargaBarang']; ?></td>
            </tr>
        <?php $no++; ?>
        <?php endforeach; ?>
        
        </tbody>
    </table>
    



    

</body>
</html>