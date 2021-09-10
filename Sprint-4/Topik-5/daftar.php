<?php session_start();?>

<?php require 'controller.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styleee.css">
</head>
<body>
<form action="" method="POST">
    <div class="container">
        <div class="form">
            <div class="heading">
                <img src="img/avatar.svg" class="logo">
                <h1>Registrasi</h1>
            </div>
            <!--Form-->
            <div class="wrap2">
                <input type="text" name="user" placeholder="Email/ Username">
                <span class="focus-input2"></span>
            </div>
            <div class="wrap2">
                <input type="password" name="pass" placeholder="Password">
                <span class="focus-input2"></span>
            </div>
            <button name="daftar" type="submit" class="btn">daftar</button>
            <br><br>
            <a href="index.php">back</a>
        </div>
        <!--Image-->
        <div class="image">
            <img src="605598.jpg" width="100%" height="50%">
        </div>
    </div>

<?php  require 'footer.php'; ?>
