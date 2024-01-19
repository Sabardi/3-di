-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 19, 2024 at 06:40 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mycomputerv1`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_layanan`
--

CREATE TABLE `tb_layanan` (
  `id_layanan` int(11) NOT NULL,
  `nama_layanan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_layanan`
--

INSERT INTO `tb_layanan` (`id_layanan`, `nama_layanan`) VALUES
(1, 'install ulang');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `Id_pelanggan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`Id_pelanggan`, `nama`, `alamat`, `jenis_kelamin`, `email`, `no_hp`) VALUES
(1, 'sabardi', 'bagu', 'laki-laki', 'ash@gmail.com', '087863968484'),
(2, 'kalau memang mau ', 'bagu', 'perempuan', 'asep@gmail.com', '123456789'),
(3, 'burhan', 'bagu', 'perempuan', 'burhan@gmail.com\r\n', '123456789'),
(4, 'ilham', 'bbau', 'laki-laki', 'ahah@gmail.com', '567890');

-- --------------------------------------------------------

--
-- Table structure for table `tb_service`
--

CREATE TABLE `tb_service` (
  `id_service` int(11) NOT NULL,
  `nama_perangkat` varchar(100) NOT NULL,
  `model` varchar(100) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_service`
--

INSERT INTO `tb_service` (`id_service`, `nama_perangkat`, `model`, `tanggal_masuk`, `deskripsi`) VALUES
(1, 'asus', 'rg45', '2024-01-12', 'nsjsjsjssj\nrusak di injek temen'),
(2, 'asus', 'gahah', '2024-01-13', 'uu'),
(3, 'akasks', 'jaskahs', '2024-01-13', 'k'),
(4, 'asus', 'gahah', '2024-01-13', 'ajhadkj');

-- --------------------------------------------------------

--
-- Table structure for table `tb_teknisi`
--

CREATE TABLE `tb_teknisi` (
  `id_teknisi` int(50) NOT NULL,
  `nama_teknisi` varchar(100) NOT NULL,
  `Jenis_kelamin` enum('laki-laki','perempuan') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `spesialis` varchar(50) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_teknisi`
--

INSERT INTO `tb_teknisi` (`id_teknisi`, `nama_teknisi`, `Jenis_kelamin`, `alamat`, `spesialis`, `no_hp`) VALUES
(1, 'asep', 'laki-laki', 'batu nyale', 'service', '08787727272'),
(2, 'burhan', 'laki-laki', 'bagu', 'instalasi', '82929'),
(3, 'hahah', 'laki-laki', 'shshsh', 'all role', '0878373763'),
(4, 'budi anduk', 'laki-laki', 'Bagu', 'komputer', '34567890');

-- --------------------------------------------------------

--
-- Table structure for table `tb_transakaksi_service`
--

CREATE TABLE `tb_transakaksi_service` (
  `id_transaksi` int(11) NOT NULL,
  `nama_transaksi` varchar(100) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `status_pembaya` varchar(100) NOT NULL,
  `total_biaya` varchar(100) NOT NULL,
  `di_proses_oleh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_trasaksi`
--

CREATE TABLE `tb_trasaksi` (
  `id_transaksi` int(11) NOT NULL,
  `Id_pelanggan` int(11) NOT NULL,
  `id_service` int(11) NOT NULL,
  `id_teknisi` int(11) NOT NULL,
  `id_pembayaran` int(11) NOT NULL,
  `status_transaksi` varchar(100) NOT NULL,
  `total_biaya` varchar(100) NOT NULL,
  `di_proses_oleh` varchar(100) NOT NULL,
  `tanggal_transaksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_trasaksi`
--

INSERT INTO `tb_trasaksi` (`id_transaksi`, `Id_pelanggan`, `id_service`, `id_teknisi`, `id_pembayaran`, `status_transaksi`, `total_biaya`, `di_proses_oleh`, `tanggal_transaksi`) VALUES
(1, 1, 1, 1, 1, 'berhasil', '10000', 'admin', '2024-01-01'),
(2, 2, 2, 2, 2, 'berhasil', '1000', 'admin', '2024-01-13'),
(3, 3, 3, 3, 3, 'berhasil', '1000', 'admin', '2024-01-13'),
(4, 4, 4, 4, 4, 'berhasil', '1000', 'admin', '2024-01-13');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `level` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `level`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  ADD PRIMARY KEY (`id_layanan`);

--
-- Indexes for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`Id_pelanggan`);

--
-- Indexes for table `tb_service`
--
ALTER TABLE `tb_service`
  ADD PRIMARY KEY (`id_service`);

--
-- Indexes for table `tb_teknisi`
--
ALTER TABLE `tb_teknisi`
  ADD PRIMARY KEY (`id_teknisi`);

--
-- Indexes for table `tb_transakaksi_service`
--
ALTER TABLE `tb_transakaksi_service`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `tb_trasaksi`
--
ALTER TABLE `tb_trasaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_layanan`
--
ALTER TABLE `tb_layanan`
  MODIFY `id_layanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `Id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_service`
--
ALTER TABLE `tb_service`
  MODIFY `id_service` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_teknisi`
--
ALTER TABLE `tb_teknisi`
  MODIFY `id_teknisi` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_transakaksi_service`
--
ALTER TABLE `tb_transakaksi_service`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_trasaksi`
--
ALTER TABLE `tb_trasaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
