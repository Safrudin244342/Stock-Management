<?php

class Laporan {

    public $db;

    public function __construct() {
        $this->db = db();
    }
    
    function laporanPage(): void {
        $tableHeaders = ["Nama", "Profit"];
        $tableColoums = $this->getProfit();
        require preg_replace('#\[/\]{1}#', '/', BASE_PATH . "view/Laporan.php");
    }

    function getProfit() {
        $sql = "SELECT t1.NamaBarang, ((t1.HargaJual * t1.TotalPenjualan) - (t2.HargaBeli * t1.TotalPenjualan)) AS Profit FROM ( SELECT Barang.NamaBarang, SUM(Penjualan.JumlahPenjualan) AS TotalPenjualan, AVG(Penjualan.HargaJual) AS HargaJual FROM Penjualan JOIN Barang ON Barang.IdBarang = Penjualan.IdBarang GROUP BY Barang.NamaBarang ) AS t1 JOIN ( SELECT Barang.NamaBarang, AVG(Pembelian.HargaBeli) AS HargaBeli FROM Pembelian JOIN Barang ON Barang.IdBarang = Pembelian.IdBarang GROUP BY Barang.NamaBarang ) AS t2 ON t1.NamaBarang = t2.NamaBarang;";
        $result = $this->db->query($sql);

        return $result;
    }
}

?>