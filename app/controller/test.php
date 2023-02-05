function addProduct(): void {
    $userID = $_COOKIE['userID'];
    $name = $_POST["tName"];
    $desc = $_POST["tDesc"];
    $satuan = $_POST['tSatuan'];

    $sql = "INSERT INTO Barang(NamaBarang, Keterangan, Satuan, IdPengguna) VALUES ('" . $name . "','" . $desc . "','" . $satuan . "','" . $userID . "');";
    $result = $this->db->query($sql);

    header("location: /product");
}
