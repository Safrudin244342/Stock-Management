<?php

class Product {

    public $db;

    public function __construct() {
        $this->db = db();
    }

    private function getListProduct() {
        $sql = "SELECT Barang.IdBarang as id,Barang.NamaBarang,Barang.Keterangan,Pengguna.NamaPengguna FROM Barang JOIN Pengguna ON Barang.IdPengguna=Pengguna.IdPengguna WHERE mark IS NULL;";
        $result = $this->db->query($sql);

        return $result;
    }

    private function getProduct($id) {
        $sql = "SELECT * FROM Barang WHERE IdBarang='" . $id . "'";
        $result = $this->db->query($sql);

        return mysqli_fetch_assoc($result);
    }

    function productPage(): void {
        $tableHeaders = ["ID", "Nama", "Keterangan", "PIC"];
        $tableColoums = $this->getListProduct();
        $tableCommands = ["Update", "Delete"];

        require preg_replace('#\[/\]{1}#', '/', BASE_PATH . "view/Product.php");
    }
    
    function addProductPage(): void {
        require preg_replace('#\[/\]{1}#', '/', BASE_PATH . "view/AddProduct.php");
    }   

    function addProduct(): void {
        $userID = $_COOKIE['userID'];
        $name = $_POST["tName"];
        $desc = $_POST["tDesc"];
        $satuan = $_POST['tSatuan'];

        $sql = "INSERT INTO Barang(NamaBarang, Keterangan, Satuan, IdPengguna) VALUES ('" . $name . "','" . $desc . "','" . $satuan . "','" . $userID . "');";
        $result = $this->db->query($sql);

        header("location: ./product");
    }

    function updateProductPage(): void {
        $product = $this->getProduct($_GET['productId']);
        $name = $product['NamaBarang'];
        $desc = $product['Keterangan'];
        $satuan = $product['Satuan'];
        require preg_replace('#\[/\]{1}#', '/', BASE_PATH . "view/updateProduct.php");
    }  

    function updateProduct(): void {
        $productId = $_GET['productId'];
        $name = $_POST["tName"];
        $desc = $_POST["tDesc"];
        $satuan = $_POST['tSatuan'];

        $sql = "UPDATE Barang SET NamaBarang='" . $name . "', Keterangan='" . $desc . "', Satuan='" . $satuan . "' WHERE IdBarang='" . $productId . "';";
        $result = $this->db->query($sql);

        header("location: ./product");
    }

    function deleteProduct(): void {
        $productId = $_GET['productId'];

        $sql = "UPDATE Barang SET mark='remove' WHERE IdBarang='" . $productId . "';";
        $result = $this->db->query($sql);

        header("location: ./product");
    }

}

?>