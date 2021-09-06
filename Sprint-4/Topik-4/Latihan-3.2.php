<?php 

session_start();


$conn = mysqli_connect("localhost","funouhan","funouhan","Akun");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }

    return $rows;
}



if(isset($_COOKIE['id']) && isset($_COOKIE['key'])){
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    $result = mysqli_query($conn, "SELECT * FROM User where id = $id");
    $row = mysqli_fetch_assoc($result);
    if ($key === hash('zay1212', $row['username'])){
        $_SESSION['login'] = true;
    }
    
}

if(isset($_SESSION["login"])) {
    header("Location: Latihan-3.1.php");
    exit;
}

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM User WHERE username = '$username'");
    if ( mysqli_num_rows($result) === 1){

        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"]) ){
            $_SESSION ["login"] = true;
            if(isset($_POST['remember']) ){
                setcookie('id', $row['id'], time()+60);
                setcookie('key', hash('zay1212', $row['username']),time()+60);
            }
            header("Location: Latihan-3.1.php");
            exit;
        }
    }
    $error = true;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akun</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <h1>Login Akun</h1>
    <?php if(isset($error)) {?>
            <p style="color: red; font-style:italic; ">username/password salah</p>
    <?php } ?>
    <form action="" method="post">
        <label class="input">
            Username : <br>
            <input type="text" name="username" id="username">
        </label>
        <br>
        <label class="input">
            Password : <br>
            <input type="password" name="password" id="password">
        </label>
        <label>
            Remember me :
            <input type="checkbox" name="remember" id="remember">
        </label>
        <br>
        <button type="submit" name="login" class="button">Login</button>
    </form>
    </div>
</body>
</html> 
