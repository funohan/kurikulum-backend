<?php

class ConnectPDO {

    protected   $username = "funouhan",
                $password = "funouhan";

    public function __construct()
    {
        $this->db = new PDO("mysql:host=localhost;dbname=Toko", $this->username, $this->password);
    }

    public function getDataPOST() {
        $query = "SELECT * FROM Barang";
        $data = $this->db->prepare($query);
        $data->execute();
        $result = $data->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function createDataPOST() {
        $nama_Barang = $_POST["nama_Barang"];
        $harga_Barang = $_POST["harga_Barang"];

        $query = "INSERT INTO Barang (nama_Barang, harga_Barang) VALUES (:nama_Barang, :harga_Barang)";
        $data = $this->db->prepare($query);
        ($data->execute([':nama_Barang'=>$nama_Barang, ':harga_Barang'=>$harga_Barang]));
        header("Location: Latihan-1.2.php");
    }

    public function deleteDataPOST() {
        
        $id=$_GET['id'];

        $query = "DELETE FROM Barang WHERE id = :id";
        $data = $this->db->prepare($query);
        ($data->execute([':id'=>$id]));

        header("Location: Latihan-1.2.php");
    }

    public function ambilDataPOST() {
        $id = $_GET['id'];

        $query = "SELECT * FROM Barang WHERE id =:id ";
        $data = $this->db->prepare($query);
        ($data->execute([':id'=>$id]));
        $result = $data->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function updateDataPOST() {
        $id = $_GET['id'];
        $nama_Barang = $_POST['nama_Barang'];
        $harga_Barang = $_POST['harga_Barang'];

        $query ="UPDATE Barang SET nama_Barang =:nama_Barang, harga_Barang =:harga_Barang WHERE id =:id";                                                           
        $data = $this->db->prepare($query);
        ($data->execute([':nama_Barang'=>$nama_Barang, ':harga_Barang'=>$harga_Barang, ':id'=>$id]));
        header("Location: Latihan-1.2.php");
    }
}

$pdo = new ConnectPDO;

if (isset($_POST['submit'])) {
    $pdo->createDataPOST();
}

if (isset($_POST['update'])) {
    $pdo->updateDataPOST();
}

if (isset($_POST['register'])) { 
    if ($pdo->registerDataPOST() > 0) {
        echo "<script>
                alert('Congratulations');
              </script>";
    }else {
        
    }
}

?>
