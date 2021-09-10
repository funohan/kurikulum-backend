<?php

class KoneksiPDO{
  protected $username="funouhan",
            $password="funouhan",
            $servername="localhost";
  public function __construct()
  {
    $this->db=new PDO("mysql:host=$this->servername;dbname=Users",$this->username, $this->password);
  }
  public function createUserBaru()
  {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    $query = "INSERT INTO Akun (username, password) VALUES (:user,:pass)";
    $data=$this->db->prepare($query);
    ($data->execute([':username'=>$user,':password'=>$pass]));
    header("Location: index.php");
  }

    public function formLogin()
    {
      $user = $_POST['username'];
      $pass = $_POST['password'];

        
        $query="SELECT * FROM Akun WHERE username=:user AND password=:pass";
        $data=$this->db->prepare($query);
        ($data->execute([':username'=>$user,':password'=>$pass]));
          $count = $data->rowCount();
          if($count > 0){
            header("Location: ../Topik-1/Latihan-1.2.php");
          }else{
            echo"Maaf anda belum memiliki hak akses pada blog ini, silahkan daftar terlebih dahulu.";
          }
    }   
}
  
$pdo=new KoneksiPDO;
if (isset($_POST['daftar'])) {
  $pdo->createUserBaru();
}
