-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2024 at 04:11 PM
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
-- Database: `aduan_invent`
--

-- --------------------------------------------------------

--
-- Table structure for table `actor`
--

CREATE TABLE `actor` (
  `nim` int(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `profesi` varchar(255) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `actor`
--

INSERT INTO `actor` (`nim`, `nama`, `profesi`, `password`, `level`) VALUES
(1, 'Admin', 'admin', '123', 1),
(2, 'unit', 'unit', '123', 2),
(2108096041, 'ICA', 'mahasiswa', '12345', 3),
(2108096045, 'Guntur Syarifuddin Putra ', 'Mahasiswa', '12345', 3),
(2108096054, 'Farid Rafif', 'Mahasiswa', '123', 3);

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `ruangan` float NOT NULL,
  `barang` varchar(20) NOT NULL,
  `foto` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'Belum Diperbaiki',
  `keterangan` text NOT NULL,
  `nim` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `nama`, `tanggal`, `ruangan`, `barang`, `foto`, `status`, `keterangan`, `nim`) VALUES
(48, 'Guntur Syarifuddin Putra ', '2024-05-29', 2.9, 'Lampu', 'BoxB3.png', 'Sedang Diperbaiki', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 2108096045),
(52, 'Farid Rafif', '2024-05-29', 3.1, 'Kursi', 'Tanda-Kursi-Kuliah-Tidak-Layak-Pakai-Dan-Harus-Segera-Di-Ganti.jpg', 'Sedang Diperbaiki', 'Sudah tidak layak pakai', 2108096054),
(53, 'Guntur Syarifuddin Putra ', '2024-05-29', 2.9, 'Proyektor', 'proyektor_mitshubisi_rusak_mat_1697445696_bcef8268_progressive.jpg', 'Belum Diperbaiki', 'Tidak menyala abangkuu\r\n', 2108096045);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `laporan_ibfk_1` (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `actor` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
