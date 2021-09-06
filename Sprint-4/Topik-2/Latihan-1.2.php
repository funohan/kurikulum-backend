<?php 

require "Latihan-1.1.php";
$data = $pdo->getDataPOST();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang</title>
</head>
<body>
    <h2>Metode Post Data</h2>
    <form action="Latihan-1.1.php" method="post">
        <label for="nama">Nama Barang : </label>
        <input type="text" name="nama" id="nama">
        <label for="harga">Harga : </label>
        <input type="text" name="harga" id="harga">
        <button type="submit" name="submit">Masukkan!</button>
    </form>

    <br>

    <table class="table-post" border="3" cellspacing="1" cellpadding="7">
        <thead class="post">
            <th>No</th>
            <th>Nama Barang</th>
            <th>Harga Barang</th>
            <th>Aksi </th>
        </thead>
        <tbody>
        
        <?php $no = 1; ?>
        <?php foreach( $data as $barang ) : ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $barang; ?></td>
                <td> 
                   <a href="Latihan-1.4.php?id= <?= $barang["id"]; ?>">Update</a> |
                   <a href="Latihan-1.3.php?id= <?= $barang["id"]; ?>">Delete</a>
             </td>
            </tr>
        <?php $no++; ?>
        <?php endforeach; ?>
        
        </tbody>
    </table>   

</body>
</html>


