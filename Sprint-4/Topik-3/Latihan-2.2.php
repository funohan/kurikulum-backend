<?php 

session_start();

if(isset($_COOKIE['id']) && isset($_COOKIE['key'])){
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    if ($key === 'funohan') {
        $_SESSION['login'] = true;
    }
    
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password  = $_POST['password'];
    if ($username == 'funohan' && $password == '11111111') {
        $_SESSION['login'] = true;
        if (isset($_POST["remember"])) {        
            setcookie('id',"id", time()+60 );
            setcookie('key', $username,time()+60);           
        }

        header("Location: Latihan-2.1.php");
        exit;
    }else 
    {
        $error = true;   
    }
    
}
if(isset($_SESSION["login"])) {
    header("Location: Latihan-2.1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Akun</title>
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
