-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2021 at 02:55 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drone_rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id_sewa` int(10) NOT NULL,
  `drone_id` int(10) NOT NULL,
  `nama_penyewa` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id_sewa`, `drone_id`, `nama_penyewa`, `alamat`, `no_hp`) VALUES
(1, 123, 'Rahmat', 'Jempong', '08191111111'),
(2, 124, 'Tantowi', 'Mataram', '08199922222');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id_sewa` int(10) NOT NULL,
  `nama_penyewa` varchar(50) NOT NULL,
  `id_drone` int(10) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id_sewa`, `nama_penyewa`, `id_drone`, `alamat`, `no_hp`) VALUES
(1, 'Rahmat', 123, 'Jempong', '08191111111'),
(2, 'Sandi', 124, 'Jempong', '08199922222'),
(3, 'Tantowi', 125, 'Mataram', '08199999999');

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_drone` int(10) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `tipe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_drone`, `merk`, `tipe`) VALUES
(123, 'DJI', 'Phantom 5'),
(124, 'DJI', 'Mavic Air'),
(125, 'DJI', 'Mavic Mini'),
(126, 'DJI', 'Mavic Air 2'),
(127, 'DJI', 'Phantom 4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id_sewa`),
  ADD KEY `drone_id` (`drone_id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD KEY `id_sewa` (`id_sewa`),
  ADD KEY `id_drone` (`id_drone`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_drone`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data`
--
ALTER TABLE `data`
  ADD CONSTRAINT `data_ibfk_1` FOREIGN KEY (`drone_id`) REFERENCES `jenis` (`id_drone`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
