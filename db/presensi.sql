-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2022 at 12:34 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `presensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE `absen` (
  `id` int(11) NOT NULL,
  `nip` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis_absen` enum('1','2') NOT NULL,
  `absen` enum('1','2') NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`id`, `nip`, `tanggal`, `jenis_absen`, `absen`, `jam`) VALUES
(12, '991004088', '2022-03-19', '1', '1', '03:23:56'),
(13, '991004088', '2022-03-19', '1', '2', '03:24:08'),
(14, '991004088', '2022-03-19', '2', '1', '05:16:52'),
(15, '991004088', '2022-03-19', '1', '1', '05:18:00'),
(16, '991004088', '2022-03-19', '1', '2', '05:18:30'),
(17, '991004088', '2022-03-19', '1', '2', '05:24:03'),
(18, '991004088', '2022-03-19', '2', '1', '17:27:14'),
(19, '991004088', '2022-03-19', '1', '2', '17:31:58'),
(20, '991004088', '2022-03-19', '1', '1', '17:32:24'),
(21, '991004136', '2022-03-19', '1', '1', '18:25:35'),
(22, '991004136', '2022-03-19', '1', '2', '18:26:10');

-- --------------------------------------------------------

--
-- Table structure for table `data_pegawai`
--

CREATE TABLE `data_pegawai` (
  `nip` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `status_pegawai` enum('1','2') NOT NULL,
  `pass` varchar(25) NOT NULL,
  `level` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pegawai`
--

INSERT INTO `data_pegawai` (`nip`, `nama`, `jabatan`, `status_pegawai`, `pass`, `level`) VALUES
('991004088', 'ANAS CHAERUDIN MAULANA, S. Kom', 'Guru Tidak Tetap', '1', 'Akusmkn4', '2'),
('991004136', 'PANJI ERWIN ROSDIANA', 'Staff Administrasi Prodi RPL', '1', 'Akusmkn4', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absen`
--
ALTER TABLE `absen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_pegawai`
--
ALTER TABLE `data_pegawai`
  ADD PRIMARY KEY (`nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absen`
--
ALTER TABLE `absen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
