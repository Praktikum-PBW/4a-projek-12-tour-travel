-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2022 at 04:51 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tour_travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_items`
--

CREATE TABLE `tb_items` (
  `no_items` int(4) NOT NULL,
  `tujuan_wisata` varchar(50) NOT NULL,
  `jmlh_hari` int(2) NOT NULL,
  `jam_berangkat` time NOT NULL,
  `jam_tiba` time NOT NULL,
  `transportasi` enum('pesawat','kereta','bus','kapal') NOT NULL,
  `penginapan` varchar(50) NOT NULL,
  `restoran` varchar(50) NOT NULL,
  `harga` decimal(10,0) NOT NULL,
  `deskripsi` text NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_items`
--

INSERT INTO `tb_items` (`no_items`, `tujuan_wisata`, `jmlh_hari`, `jam_berangkat`, `jam_tiba`, `transportasi`, `penginapan`, `restoran`, `harga`, `deskripsi`, `thumbnail`) VALUES
(6, 'Paris', 10, '17:39:00', '05:39:00', 'pesawat', 'Hotel', 'The Laundrette', '20000000', 'deskripsi', 'paris01.jpg'),
(7, 'Lembang', 4, '04:45:00', '06:45:00', 'bus', 'Resort', 'Taichan', '700000', 'deskripsi', 'lembang.jpg'),
(8, 'Manchester', 12, '18:45:00', '06:45:00', 'pesawat', 'Hotel', 'Sashimi', '75000000', 'deskripsi', 'manchester.jpg'),
(9, 'Jogja', 4, '06:45:00', '14:45:00', 'kereta', 'Home Stay', 'Ikan Nila Pak Bowo', '1000000', 'deskripsi', 'jogja.jpg'),
(10, 'Madrid', 5, '17:50:00', '05:50:00', 'pesawat', 'CR7 Pestana', 'Sobrino de Botin', '30000000', 'deskripsi', 'madrid.jpg'),
(11, 'Air Terjun Haratai Loksado', 4, '04:00:00', '12:00:00', 'kapal', 'Resort', 'Pawon Tlogo', '1500000', 'deskripsi', 'curug.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id` int(4) NOT NULL,
  `kd_transaksi` varchar(10) NOT NULL,
  `user_id` int(4) NOT NULL,
  `no_items` int(4) NOT NULL,
  `jmlh_tiket` varchar(4) NOT NULL,
  `tgl_berangkat` date NOT NULL,
  `via_bayar` enum('BCA','BRI','BNI','OVO','GOPAY') NOT NULL,
  `va` int(11) NOT NULL,
  `biaya_admin` decimal(10,0) NOT NULL,
  `total` decimal(10,0) NOT NULL,
  `waktu_pesan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_transaksi`
--

INSERT INTO `tb_transaksi` (`id`, `kd_transaksi`, `user_id`, `no_items`, `jmlh_tiket`, `tgl_berangkat`, `via_bayar`, `va`, `biaya_admin`, `total`, `waktu_pesan`) VALUES
(1, 'TRVL001', 1, 9, '3', '2022-05-10', 'BNI', 29205002, '60000', '3060000', '2022-05-09 15:58:46'),
(2, 'TRVL002', 4, 9, '4', '2022-05-26', 'BCA', 202259, '80000', '4080000', '2022-05-09 16:19:59');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_cust` int(4) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_cust` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `status` enum('admin','user') NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `dibuat` datetime NOT NULL DEFAULT current_timestamp(),
  `diedit` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_cust`, `username`, `password`, `nama_cust`, `alamat`, `no_telp`, `status`, `thumbnail`, `dibuat`, `diedit`) VALUES
(1, 'alidongan', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Ali Dongan', 'Mekarsari', '081234567890', 'user', 'DSC_0316.JPG', '2022-05-05 11:13:21', '2022-05-07 16:57:38'),
(2, 'yohanes', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Yohanes Anjar', 'Tambun Selatan', '0813425', 'admin', '005955300_1505121617-Biji-Kopi7.jpg', '2022-05-07 17:06:48', '2022-05-09 16:46:36'),
(3, 'altolyto', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'Altolyto', 'Jatimulya', '081234567891', 'user', '1629471327189-picsay.jpg', '2022-05-06 14:53:26', '2022-05-09 16:12:37'),
(4, 'asep', '706bcb48a6a2eb09bd6715ee90c423f4a0779148', 'Asep Haoudin', 'Bekasi', '081234567891', 'user', '', '2022-05-09 16:19:26', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_items`
--
ALTER TABLE `tb_items`
  ADD PRIMARY KEY (`no_items`);

--
-- Indexes for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `no_pesanan` (`no_items`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_cust`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_items`
--
ALTER TABLE `tb_items`
  MODIFY `no_items` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_cust` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD CONSTRAINT `tb_transaksi_ibfk_1` FOREIGN KEY (`no_items`) REFERENCES `tb_items` (`no_items`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_transaksi_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`id_cust`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
