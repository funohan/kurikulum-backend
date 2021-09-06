<?php

session_start();

if(!isset($_SESSION["login"])){
    header("Location: Latihan-2.2.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h1>Login Berhasil!!</h1>
    <a href="Latihan-2.3.php" class="button">Log Out</a>
    </div>
</body>
</html>

