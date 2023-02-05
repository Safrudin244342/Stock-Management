<?php

class Transaksi {

    public $db;

    public function __construct() {
        $this->db = db();
    }

    function getSales() {
        $sql = "SELECT Penjualan.IdPenjualan as id, Barang.NamaBarang, Penjualan.JumlahPenjualan, Penjualan.HargaJual, Pengguna.NamaPengguna FROM Penjualan JOIN Barang ON Penjualan.IdBarang=Barang.IdBarang JOIN Pengguna ON Penjualan.IdBarang=Pengguna.IdPengguna ORDER BY id ASC;";
        $result = $this->db->query($sql);

        return $result;
    }

    function getPurchase() {
        $sql = "SELECT Pembelian.IdPembelian as id, Barang.NamaBarang, Pembelian.JumlahPembelian, Pembelian.HargaBeli, Pengguna.NamaPengguna FROM Pembelian JOIN Barang ON Pembelian.IdBarang=Barang.IdBarang JOIN Pengguna ON Pembelian.IdPengguna=Pengguna.IdPengguna ORDER BY id ASC;";
        $result = $this->db->query($sql);

        return $result;
    }
    
    function transaksiPage(): void {
        $tableHeaders1 = ["ID", "Nama", "Jumlah", "Harga", "PIC"];
        $tableColoums1 = $this->getSales();

        $tableHeaders2 = ["ID", "Nama", "Jumlah", "Harga", "PIC"];
        $tableColoums2 = $this->getPurchase();

        require preg_replace('#\[/\]{1}#', '/', BASE_PATH . "view/Transaksi.php");
    }
}

?>