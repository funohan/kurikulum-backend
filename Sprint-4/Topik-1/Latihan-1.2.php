<?php

class ConnectPDO {

    protected   $username = "funouhan",
                $password = "funouhan";

    public function __construct()
    {
        $this->db = new PDO("mysql:host=localhost;dbname=tugas1", $this->username, $this->password);
    }

    public function getDataPOST() {
        $query = "SELECT * FROM UI";
        $data = $this->db->prepare($query);
        $data->execute();
        $result = $data->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function createDataPOST() {
        $namaBarang    = $_POST["namaBarang"];
        $hargaBarang  = $_POST["hargaBarang"];

        $query = "INSERT INTO UI (namaBarang, hargaBarang) VALUES ('$namaBarang', '$hargaBarang')";
        $data = $this->db->prepare($query);
        $data->execute();

        header("Location: Latihan-1.1.php");
    }

}

$pdo = new ConnectPDO;

if (isset($_POST['submit'])) {
    $pdo->createDataPOST();
}

?>
