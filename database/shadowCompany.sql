-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Feb 05, 2023 at 01:33 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shadowCompany`
--

-- --------------------------------------------------------

--
-- Table structure for table `Barang`
--

CREATE TABLE `Barang` (
  `IdBarang` int NOT NULL,
  `NamaBarang` varchar(255) DEFAULT NULL,
  `Keterangan` varchar(255) DEFAULT NULL,
  `Satuan` varchar(255) DEFAULT NULL,
  `IdPengguna` int DEFAULT NULL,
  `mark` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Barang`
--

INSERT INTO `Barang` (`IdBarang`, `NamaBarang`, `Keterangan`, `Satuan`, `IdPengguna`, `mark`) VALUES
(1, 'hp', 'smartphone terbaru', 'pcs', 1, 'remove'),
(2, 'meja1', 'meja kantor', 'pcs', 1, NULL),
(3, 'shampo', 'pembersih rambut', 'pcs', 2, NULL),
(4, 'pepsodent', 'pembersih gigi', 'pcs', 2, NULL),
(5, 'sapu', 'alat bersih bersih', 'pcs', 2, NULL),
(6, 'kain pel', 'alat bersih bersih', 'pcs', 2, NULL),
(7, 'kemoceng', 'alat bersih bersih', 'pcs', 2, NULL),
(8, 'sapu tangan', 'alat bersih bersih', 'pcs', 2, NULL),
(9, 'tisu', 'alat bersih bersih', 'pcs', 2, NULL),
(10, 'kipas', 'alat elektronik', 'pcs', 2, NULL),
(11, 'tv', 'alat elektronik', 'pcs', 2, NULL),
(12, 'radio', 'alat elektronik', 'pcs', 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `HakAkses`
--

CREATE TABLE `HakAkses` (
  `IdAkses` int NOT NULL,
  `NamaAkses` varchar(255) DEFAULT NULL,
  `Keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `HakAkses`
--

INSERT INTO `HakAkses` (`IdAkses`, `NamaAkses`, `Keterangan`) VALUES
(1, 'admin', 'Akses penuh ke sistem'),
(2, 'staff', 'Akses terbatas ke sistem'),
(3, 'manager', 'Akses untuk mengelola produk dan penjualan'),
(4, 'finance', 'Akses ke laporan keuangan'),
(5, 'inventory', 'Akses untuk mengelola inventaris'),
(6, 'marketing', 'Akses ke kampanye pemasaran'),
(7, 'purchasing', 'Akses ke pesanan pembelian'),
(8, 'sales', 'Akses ke data penjualan'),
(9, 'customer service', 'Akses ke tugas layanan pelanggan'),
(10, 'shipping', 'Akses ke tugas pengiriman dan logistik');

-- --------------------------------------------------------

--
-- Table structure for table `Pembelian`
--

CREATE TABLE `Pembelian` (
  `IdPembelian` int NOT NULL,
  `IdBarang` int DEFAULT NULL,
  `JumlahPembelian` int DEFAULT NULL,
  `HargaBeli` int DEFAULT NULL,
  `IdPengguna` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Pembelian`
--

INSERT INTO `Pembelian` (`IdPembelian`, `IdBarang`, `JumlahPembelian`, `HargaBeli`, `IdPengguna`) VALUES
(1, 1, 90, 2000, 2),
(2, 2, 23, 2000, 2),
(3, 3, 34, 4000, 2),
(4, 4, 72, 8000, 2),
(5, 5, 18, 1000, 2),
(6, 6, 94, 2000, 2),
(7, 7, 34, 3000, 2),
(8, 8, 56, 2000, 2),
(9, 9, 27, 9000, 2),
(10, 10, 83, 10000, 2),
(11, 1, 12, 2500, 2),
(12, 2, 65, 2500, 2),
(13, 3, 92, 4500, 2),
(14, 4, 45, 8500, 2),
(15, 5, 12, 1500, 2),
(16, 6, 90, 2500, 2),
(17, 7, 84, 3500, 2),
(18, 8, 12, 2500, 2),
(19, 9, 45, 9500, 2),
(20, 10, 63, 10500, 2);

-- --------------------------------------------------------

--
-- Table structure for table `Pengguna`
--

CREATE TABLE `Pengguna` (
  `IdPengguna` int NOT NULL,
  `NamaPengguna` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `NamaDepan` varchar(255) DEFAULT NULL,
  `NamaBelakang` varchar(255) DEFAULT NULL,
  `NoHP` varchar(255) DEFAULT NULL,
  `Alamat` varchar(255) DEFAULT NULL,
  `idAkses` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Pengguna`
--

INSERT INTO `Pengguna` (`IdPengguna`, `NamaPengguna`, `Password`, `NamaDepan`, `NamaBelakang`, `NoHP`, `Alamat`, `idAkses`) VALUES
(1, 'admin', 'password123', 'abdul', 'azis', '012345', 'Jakarta', 1),
(2, 'staff1', 'password123', 'safar', 'udin', '012345', 'Jakarta', 2),
(3, 'manager1', 'password123', 'abdul', 'akbar', '012345', 'Jakarta', 3),
(4, 'finance1', 'password123', 'putri', 'asna', '012345', 'Jakarta', 4),
(5, 'inventory1', 'password123', 'lika', 'aulia', '012345', 'Jakarta', 5),
(6, 'marketing1', 'password123', 'joe', 'biden', '012345', 'Jakarta', 6),
(7, 'purchasing1', 'password123', 'albert', 'putin', '012345', 'Jakarta', 7),
(8, 'sales1', 'password123', 'zalen', 'bowo', '012345', 'Jakarta', 8),
(9, 'customer_service1', 'password123', 'bowo', 'adi', '012345', 'Jakarta', 9),
(10, 'shipping1', 'password123', 'kipli', 'aldo', '012345', 'Jakarta', 10);

-- --------------------------------------------------------

--
-- Table structure for table `Penjualan`
--

CREATE TABLE `Penjualan` (
  `IdPenjualan` int NOT NULL,
  `IdBarang` int DEFAULT NULL,
  `JumlahPenjualan` int DEFAULT NULL,
  `HargaJual` int DEFAULT NULL,
  `IdPengguna` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Penjualan`
--

INSERT INTO `Penjualan` (`IdPenjualan`, `IdBarang`, `JumlahPenjualan`, `HargaJual`, `IdPengguna`) VALUES
(1, 1, 10, 3000, 2),
(2, 2, 15, 3000, 2),
(3, 3, 20, 5000, 2),
(4, 4, 23, 9000, 2),
(5, 5, 14, 2000, 2),
(6, 6, 16, 3000, 2),
(7, 7, 9, 4000, 2),
(8, 8, 4, 3000, 2),
(9, 9, 12, 10000, 2),
(10, 10, 25, 11000, 2),
(11, 1, 29, 3500, 2),
(12, 2, 6, 3500, 2),
(13, 3, 15, 5500, 2),
(14, 4, 14, 9500, 2),
(15, 5, 18, 2500, 2),
(16, 6, 4, 3500, 2),
(17, 7, 25, 4500, 2),
(18, 8, 27, 3500, 2),
(19, 9, 21, 10500, 2),
(20, 10, 20, 11500, 2);

-- --------------------------------------------------------

--
-- Table structure for table `userRoles`
--

CREATE TABLE `userRoles` (
  `idRole` int NOT NULL,
  `roleName` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userRoles`
--

INSERT INTO `userRoles` (`idRole`, `roleName`, `description`) VALUES
(6, 'admin', 'have full access'),
(8, 'staff', 'have access to functional operation'),
(9, 'manager', 'full access'),
(10, 'sales', 'Access to sales');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Barang`
--
ALTER TABLE `Barang`
  ADD PRIMARY KEY (`IdBarang`),
  ADD KEY `IdPengguna` (`IdPengguna`);

--
-- Indexes for table `HakAkses`
--
ALTER TABLE `HakAkses`
  ADD PRIMARY KEY (`IdAkses`);

--
-- Indexes for table `Pembelian`
--
ALTER TABLE `Pembelian`
  ADD PRIMARY KEY (`IdPembelian`),
  ADD KEY `IdBarang` (`IdBarang`),
  ADD KEY `IdPengguna` (`IdPengguna`);

--
-- Indexes for table `Pengguna`
--
ALTER TABLE `Pengguna`
  ADD PRIMARY KEY (`IdPengguna`),
  ADD KEY `idAkses` (`idAkses`);

--
-- Indexes for table `Penjualan`
--
ALTER TABLE `Penjualan`
  ADD PRIMARY KEY (`IdPenjualan`),
  ADD KEY `IdBarang` (`IdBarang`),
  ADD KEY `IdPengguna` (`IdPengguna`);

--
-- Indexes for table `userRoles`
--
ALTER TABLE `userRoles`
  ADD PRIMARY KEY (`idRole`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Barang`
--
ALTER TABLE `Barang`
  MODIFY `IdBarang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `HakAkses`
--
ALTER TABLE `HakAkses`
  MODIFY `IdAkses` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Pembelian`
--
ALTER TABLE `Pembelian`
  MODIFY `IdPembelian` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `Pengguna`
--
ALTER TABLE `Pengguna`
  MODIFY `IdPengguna` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `Penjualan`
--
ALTER TABLE `Penjualan`
  MODIFY `IdPenjualan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `userRoles`
--
ALTER TABLE `userRoles`
  MODIFY `idRole` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Barang`
--
ALTER TABLE `Barang`
  ADD CONSTRAINT `Barang_ibfk_1` FOREIGN KEY (`IdPengguna`) REFERENCES `Pengguna` (`IdPengguna`);

--
-- Constraints for table `Pembelian`
--
ALTER TABLE `Pembelian`
  ADD CONSTRAINT `Pembelian_ibfk_1` FOREIGN KEY (`IdBarang`) REFERENCES `Barang` (`IdBarang`),
  ADD CONSTRAINT `Pembelian_ibfk_2` FOREIGN KEY (`IdPengguna`) REFERENCES `Pengguna` (`IdPengguna`);

--
-- Constraints for table `Pengguna`
--
ALTER TABLE `Pengguna`
  ADD CONSTRAINT `Pengguna_ibfk_1` FOREIGN KEY (`idAkses`) REFERENCES `HakAkses` (`IdAkses`);

--
-- Constraints for table `Penjualan`
--
ALTER TABLE `Penjualan`
  ADD CONSTRAINT `Penjualan_ibfk_1` FOREIGN KEY (`IdBarang`) REFERENCES `Barang` (`IdBarang`),
  ADD CONSTRAINT `Penjualan_ibfk_2` FOREIGN KEY (`IdPengguna`) REFERENCES `Pengguna` (`IdPengguna`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
