-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 09, 2021 at 11:02 AM
-- Server version: 10.3.29-MariaDB-cll-lve
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adry2296_aplikasipertanian`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_admin`
--

CREATE TABLE `table_admin` (
  `UserName` varchar(20) NOT NULL,
  `psw_admin` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_admin`
--

INSERT INTO `table_admin` (`UserName`, `psw_admin`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `table_bukutamu`
--

CREATE TABLE `table_bukutamu` (
  `Id` int(5) NOT NULL,
  `tanggal_input` date NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `table_customer`
--

CREATE TABLE `table_customer` (
  `username` varchar(64) NOT NULL,
  `psw_user` varchar(64) NOT NULL,
  `Nik` varchar(64) NOT NULL,
  `Nama` varchar(25) NOT NULL,
  `Alamat` varchar(25) NOT NULL,
  `No.Telepon` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_customer`
--

INSERT INTO `table_customer` (`username`, `psw_user`, `Nik`, `Nama`, `Alamat`, `No.Telepon`) VALUES
('2018010063', '25f9e794323b453885f5181f1b624d0b', '12345678', 'sontiana lumbanraja', 'medan', '085297993114');

-- --------------------------------------------------------

--
-- Table structure for table `table_pemesanan`
--

CREATE TABLE `table_pemesanan` (
  `Kd_pemesanan` int(11) NOT NULL,
  `Nik` varchar(64) NOT NULL,
  `Nama` varchar(16) NOT NULL,
  `Alamat` text NOT NULL,
  `No_Telepon` varchar(13) NOT NULL,
  `Kd_Pupuk` varchar(16) NOT NULL,
  `Jlh_Pesanan` varchar(5) NOT NULL,
  `tanggal_transaksi` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_pemesanan`
--

INSERT INTO `table_pemesanan` (`Kd_pemesanan`, `Nik`, `Nama`, `Alamat`, `No_Telepon`, `Kd_Pupuk`, `Jlh_Pesanan`, `tanggal_transaksi`) VALUES
(1, '12345678', 'Sontiana Lumbanr', 'Sidikalang Jl.Tigabaru', '085297993114', 'PCPO002', '50 KG', '2021-06-24 18:44:36'),
(2, '12345678', 'Widya Safitri ', 'Jl.merdeka Lubuk Pakam', '082376890432', 'PPU002', '100 K', '2021-06-24 18:48:46'),
(3, '12345678', 'ani brasa', 'laksa', '123456789', 'PPK003', '40 KG', '2021-06-24 18:58:58'),
(4, '12345678', 'tania', 'tigabaru', '085297993114', 'PCA001', '5 bot', '2021-06-24 18:59:24'),
(5, '12345678', 'Budi', 'sidikalang', '1234567', 'PCK001', '2 bot', '2021-06-24 18:59:55'),
(6, '12345678', 'Triarta', 'Jl.merdeka Lubuk Pakam', '082376890432', 'PCPO002', '5 bot', '2021-06-24 19:00:37'),
(7, '12345678', 'Putra', 'Jl.merdeka Lubuk Pakam', '085297993114', 'PPHOO1', '25 KG', '2021-06-24 19:01:11'),
(8, '12345678', 'Boski', 'Kabanjahe', '082376890432', 'PPHOO1', '20 KG', '2021-06-24 19:02:20'),
(9, '12345678', 'Vier', 'Kabanjahe', '085297993114', 'PCPO002', '5 bot', '2021-06-24 19:02:51'),
(10, '12345678', 'Agung', 'laksa', '08754', 'PPK003', '15 KG', '2021-06-24 19:04:08'),
(11, '12345678', 'anisa bahar', 'Sidikalang Jl.Tigabaru', '082376890432', 'PCPO002', '2 bot', '2021-06-26 10:16:16'),
(12, '12345678', 'Lantiria', 'Kabanjahe', '085297993114', 'PCK001', '2 bot', '2021-07-01 09:31:57');

-- --------------------------------------------------------

--
-- Table structure for table `table_pupuk`
--

CREATE TABLE `table_pupuk` (
  `Kd_pupuk` varchar(16) NOT NULL,
  `Nm_pupuk` varchar(64) NOT NULL,
  `Harga` varchar(20) NOT NULL,
  `Stok` varchar(20) NOT NULL,
  `Gambar` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_pupuk`
--

INSERT INTO `table_pupuk` (`Kd_pupuk`, `Nm_pupuk`, `Harga`, `Stok`, `Gambar`) VALUES
('PCA001', 'AMONIA', '30.000', '100  botol', 'Ammonia.jpg'),
('PCK001', 'KASARIN', '20000', '100  botol', ''),
('PCPO002', 'PUPUK ORGANK', '60.000', '150 botol', 'JUAL_PUPUK_ORGANIK_CAIR_PETANI_ANDALAN.jpg'),
('PPHOO1', 'HUMUS', '20.000', '500 kg', '9d714144f51f59b687c36d5c3395d404818e18d9.jpeg'),
('PPK003', 'PUPUK KANDANG', '25000', '500 KG', 'pupuk-kandang-di-lahan-min.webp'),
('PPU002', 'urea', '30.000', '500 KG', 'urea.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `table_transaksi`
--

CREATE TABLE `table_transaksi` (
  `Kode_Pupuk` varchar(16) NOT NULL,
  `Tgl_Transaksi` datetime NOT NULL,
  `Nama` varchar(25) NOT NULL,
  `Pesanan` varchar(64) NOT NULL,
  `Harga` varchar(64) NOT NULL,
  `Total_Pembayaran` varchar(64) NOT NULL,
  `Jumlah_Pesanan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_transaksi`
--

INSERT INTO `table_transaksi` (`Kode_Pupuk`, `Tgl_Transaksi`, `Nama`, `Pesanan`, `Harga`, `Total_Pembayaran`, `Jumlah_Pesanan`) VALUES
('PCA001', '2021-06-24 18:59:24', 'tania', 'AMONIA', '30.000', '150', '5 bot'),
('PCK001', '2021-06-24 18:59:55', 'Budi', 'KASARIN', '20000', '40000', '2 bot'),
('PCPO002', '2021-06-24 18:44:36', 'Sontiana Lumbanr', 'PUPUK ORGANK', '60.000', '3000', '50 KG'),
('PPHOO1', '2021-06-24 19:01:11', 'Putra', 'HUMUS', '20.000', '500', '25 KG'),
('PPK003', '2021-06-24 18:58:58', 'ani brasa', 'PUPUK KANDANG', '25000', '1000000', '40 KG'),
('PPU002', '2021-06-24 18:48:46', 'Widya Safitri ', 'urea', '30.000', '3000', '100 K');

-- --------------------------------------------------------

--
-- Table structure for table `table_validasipemesanan`
--

CREATE TABLE `table_validasipemesanan` (
  `Kd_pemesanan` varchar(16) NOT NULL,
  `Nik` varchar(64) NOT NULL,
  `Status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `table_validasipemesanan`
--

INSERT INTO `table_validasipemesanan` (`Kd_pemesanan`, `Nik`, `Status`) VALUES
('1', '12345678', 'Valid'),
('10', '12345678', ''),
('11', '12345678', ''),
('12', '12345678', ''),
('2', '12345678', 'Valid'),
('3', '12345678', 'Valid'),
('4', '12345678', 'Valid'),
('5', '12345678', ''),
('6', '12345678', ''),
('7', '12345678', ''),
('8', '12345678', ''),
('9', '12345678', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_admin`
--
ALTER TABLE `table_admin`
  ADD PRIMARY KEY (`UserName`);

--
-- Indexes for table `table_bukutamu`
--
ALTER TABLE `table_bukutamu`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `table_customer`
--
ALTER TABLE `table_customer`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `table_pemesanan`
--
ALTER TABLE `table_pemesanan`
  ADD PRIMARY KEY (`Kd_pemesanan`);

--
-- Indexes for table `table_pupuk`
--
ALTER TABLE `table_pupuk`
  ADD PRIMARY KEY (`Kd_pupuk`);

--
-- Indexes for table `table_transaksi`
--
ALTER TABLE `table_transaksi`
  ADD PRIMARY KEY (`Kode_Pupuk`);

--
-- Indexes for table `table_validasipemesanan`
--
ALTER TABLE `table_validasipemesanan`
  ADD PRIMARY KEY (`Kd_pemesanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_bukutamu`
--
ALTER TABLE `table_bukutamu`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_pemesanan`
--
ALTER TABLE `table_pemesanan`
  MODIFY `Kd_pemesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
