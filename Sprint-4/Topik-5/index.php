<?php  

session_start();
if (isset($_SESSION["masuk"])) {
	header("Location: ../Topik-1/Latihan-1.2.php");
	exit; 
}
require 'controller.php'; 
if(isset($_POST["login"])){
	$pdo->formLogin();
	$_SESSION["username"] = true;
  }

?>

<?php require 'header.php'; ?>
<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form action="" method="POST">
				<img src="640956.jpg">
				<h2 class="title">Selamat Datang</h2>
				<!-- <?php if(isset($error)): ?>
        		<p style="color:red; font-style:italic; ">Username/Password Salah</p>
       			 <?php endif; ?> -->
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		
           		   		<input type="text" class="input" name="user" placeholder="Masukkan Nama">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<input type="password" class="input" name="pass" placeholder="Masukkan Sandi">
            	   </div>
            	</div>
            	<input type="checkbox" name="remember" id="remember" >
                <label for="remember" style="color:black"><i>Ingat Aku</i></label>
                <br>
            	<input type="submit" class="btn" value="Masuk" name="login" >
                <a href="daftar.php" name="daftar">Daftar</a>
            </form>
        </div>
    </div>
<?php require 'footer.php'; ?>
