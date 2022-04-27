-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2022 at 05:05 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_spp`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `getAllDataSiswa` ()  NO SQL
SELECT siswa.nisn, siswa.nis, siswa.nama, siswa.alamat, siswa.no_telp, kelas.id_kelas, kelas.nama_kelas, kelas.kompetensi_keahlian, spp.id_spp, spp.tahun, spp.nominal
FROM siswa
INNER JOIN kelas
ON siswa.id_kelas = kelas.id_kelas
INNER JOIN spp
ON siswa.id_spp = spp.id_spp$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `kompetensi_keahlian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `kompetensi_keahlian`) VALUES
(2, 'RPL1', 'Rekayasa Perangkat Lunak'),
(3, 'RPL2', 'Rekayasa Perangkat Lunak'),
(4, 'MM1', 'Multimedia'),
(6, 'MM2', 'Multimedia');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `bulan_dibayar` varchar(9) NOT NULL,
  `tahun_dibayar` varchar(4) NOT NULL,
  `id_spp` int(11) NOT NULL,
  `jumlah_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_petugas`, `nisn`, `tgl_bayar`, `bulan_dibayar`, `tahun_dibayar`, `id_spp`, `jumlah_bayar`) VALUES
(1, 1, '0123456789', '2022-04-20', 'Juli', '2022', 2, 200000),
(2, 1, '0123456789', '2022-04-20', 'Agustus', '2022', 2, 200000),
(3, 1, '0123456789', '2022-04-20', 'September', '2022', 2, 200000),
(4, 1, '0123456789', '2022-04-20', 'Oktober', '2022', 2, 200000),
(5, 1, '0123456789', '2022-04-20', 'November', '2022', 2, 200000),
(6, 1, '0123456789', '2022-04-20', 'Desember', '2022', 2, 200000),
(7, 1, '0123456789', '2022-04-20', 'Januari', '2022', 2, 200000),
(8, 1, '0123456789', '2022-04-20', 'Februari', '2022', 2, 200000),
(9, 1, '0123456789', '2022-04-20', 'Maret', '2022', 2, 200000),
(10, 1, '1234569870', '2022-04-20', 'Juli', '2022', 4, 250000),
(11, 1, '1234569870', '2022-04-20', 'Agustus', '2022', 4, 250000),
(12, 1, '1234569870', '2022-04-20', 'September', '2022', 4, 250000),
(13, 1, '1234569870', '2022-04-20', 'Oktober', '2022', 4, 250000),
(14, 1, '1234569870', '2022-04-20', 'November', '2022', 4, 250000),
(15, 1, '1234569870', '2022-04-20', 'Desember', '2022', 4, 250000),
(16, 1, '1234569870', '2022-04-20', 'Januari', '2022', 4, 250000),
(17, 1, '1234569870', '2022-04-20', 'Februari', '2022', 4, 250000),
(18, 1, '1234569870', '2022-04-20', 'Maret', '2022', 4, 250000),
(19, 1, '1234569870', '2022-04-20', 'April', '2022', 4, 250000),
(20, 1, '1234569870', '2022-04-20', 'Mei', '2022', 4, 250000),
(21, 1, '1234569870', '2022-04-20', 'Juni', '2022', 4, 250000),
(22, 1, '7845126351', '2022-04-20', 'Juli', '2022', 2, 300000),
(23, 1, '7845126351', '2022-04-20', 'Agustus', '2022', 2, 300000),
(24, 1, '7845126351', '2022-04-20', 'September', '2022', 2, 300000),
(25, 1, '7845126351', '2022-04-20', 'Oktober', '2022', 2, 300000),
(26, 1, '7845126351', '2022-04-20', 'November', '2022', 2, 300000),
(27, 1, '7845126351', '2022-04-20', 'Desember', '2022', 2, 300000),
(28, 1, '7845126351', '2022-04-20', 'Januari', '2022', 2, 300000),
(29, 1, '7845126351', '2022-04-20', 'Februari', '2022', 2, 300000),
(30, 1, '7845126351', '2022-04-20', 'Maret', '2022', 2, 300000),
(31, 1, '7845126351', '2022-04-20', 'April', '2022', 2, 300000),
(32, 1, '7845126351', '2022-04-20', 'Mei', '2022', 2, 300000),
(33, 1, '7845126351', '2022-04-20', 'Juni', '2022', 2, 300000),
(34, 1, '0123456789', '2022-04-20', 'April', '2022', 2, 200000),
(35, 1, '9874561235', '2022-04-20', 'Juli', '2022', 2, 200000),
(36, 1, '9874561235', '2022-04-20', 'Agustus', '2022', 2, 200000),
(37, 1, '9874561235', '2022-04-20', 'September', '2022', 2, 200000),
(38, 1, '9874561235', '2022-04-20', 'Oktober', '2022', 2, 200000),
(39, 1, '9874561235', '2022-04-20', 'November', '2022', 2, 200000),
(40, 1, '9874561235', '2022-04-20', 'Desember', '2022', 2, 200000),
(41, 1, '9874561235', '2022-04-20', 'Januari', '2022', 2, 200000),
(42, 1, '9874561235', '2022-04-20', 'Februari', '2022', 2, 200000),
(43, 1, '9874561235', '2022-04-20', 'Maret', '2022', 2, 200000),
(44, 1, '9874561235', '2022-04-20', 'April', '2022', 2, 200000),
(45, 1, '9874561235', '2022-04-20', 'Mei', '2022', 2, 200000),
(46, 1, '9874561235', '2022-04-20', 'Juni', '2022', 2, 200000),
(47, 2, '0123456789', '2022-04-20', 'Mei', '2022', 2, 200000),
(48, 2, '9999999999', '2022-04-21', 'Juli', '2022', 2, 200000),
(49, 2, '9999999999', '2022-04-21', 'Agustus', '2022', 2, 200000),
(50, 1, '8452163201', '2022-04-21', 'Juli', '2022', 2, 200000),
(51, 1, '8452163201', '2022-04-21', 'Agustus', '2022', 2, 200000),
(52, 1, '8452163201', '2022-04-21', 'September', '2022', 2, 200000),
(53, 1, '8452163201', '2022-04-21', 'Oktober', '2022', 2, 200000),
(54, 1, '8452163201', '2022-04-21', 'November', '2022', 2, 200000),
(55, 1, '8452163201', '2022-04-21', 'Desember', '2022', 2, 200000),
(56, 1, '8452163201', '2022-04-21', 'Januari', '2022', 2, 200000),
(57, 1, '8452163201', '2022-04-21', 'Februari', '2022', 2, 200000),
(58, 1, '8452163201', '2022-04-21', 'Maret', '2022', 2, 200000),
(59, 1, '8452163201', '2022-04-21', 'April', '2022', 2, 200000),
(60, 1, '9517536541', '2022-04-21', 'Juli', '2022', 2, 200000),
(61, 1, '9517536541', '2022-04-21', 'Agustus', '2022', 2, 200000),
(62, 1, '9517536541', '2022-04-21', 'September', '2022', 2, 200000),
(63, 1, '9517536541', '2022-04-21', 'Oktober', '2022', 2, 200000),
(64, 1, '9517536541', '2022-04-21', 'November', '2022', 2, 200000),
(65, 1, '9517536541', '2022-04-21', 'Desember', '2022', 2, 200000),
(66, 1, '9517536541', '2022-04-21', 'Januari', '2022', 2, 200000),
(67, 1, '9517536541', '2022-04-21', 'Februari', '2022', 2, 200000),
(68, 1, '9517536541', '2022-04-21', 'Maret', '2022', 2, 200000),
(69, 1, '9517536541', '2022-04-21', 'April', '2022', 2, 200000);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `username`, `password`, `nama_petugas`, `level`) VALUES
(1, 'agung', '202cb962ac59075b964b07152d234b70', 'agung', 'admin'),
(2, 'claudya', '787f2bff3a2bfce9dc670242b1abdfa4', 'Claudya', 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nisn` varchar(10) NOT NULL,
  `nis` varchar(8) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `id_spp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nisn`, `nis`, `nama`, `id_kelas`, `alamat`, `no_telp`, `id_spp`) VALUES
('0123456789', '12345678', 'Lia', 3, 'JL mawar, ubung   ', '085412365214', 2),
('1234569870', '01478523', 'Kemberly', 2, 'Jl kelodbatu  ', '087521235621', 4),
('7845126351', '85296341', 'Rilly', 6, 'Jl ratna  ', '085412632124', 2),
('8452163201', '74154854', 'Sarah', 3, 'mengwi', '081253269856', 2),
('9517536541', '84574589', 'Lidya', 4, 'Jl dangin puri', '089562142352', 2),
('9874561235', '87654321', 'Tya', 3, 'darmasaba  ', '081558732469', 2),
('9999999999', '99999999', 'Jessicca', 6, 'JL Gunung Agung, No 12', '085451246325', 2);

-- --------------------------------------------------------

--
-- Table structure for table `spp`
--

CREATE TABLE `spp` (
  `id_spp` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `nominal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spp`
--

INSERT INTO `spp` (`id_spp`, `tahun`, `nominal`) VALUES
(2, 2020, 200000),
(4, 2021, 250000),
(6, 2019, 150000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_spp` (`id_spp`),
  ADD KEY `nisn` (`nisn`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_spp` (`id_spp`);

--
-- Indexes for table `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id_spp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `spp`
--
ALTER TABLE `spp`
  MODIFY `id_spp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_spp`) REFERENCES `siswa` (`id_spp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembayaran_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembayaran_ibfk_3` FOREIGN KEY (`nisn`) REFERENCES `siswa` (`nisn`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_2` FOREIGN KEY (`id_spp`) REFERENCES `spp` (`id_spp`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
