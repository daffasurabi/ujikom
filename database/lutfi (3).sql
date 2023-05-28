-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2023 at 08:45 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lutfi`
--

-- --------------------------------------------------------

--
-- Table structure for table `baru`
--

CREATE TABLE `baru` (
  `id` int(11) NOT NULL,
  `gmail` varchar(30) NOT NULL,
  `password` varchar(35) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baru`
--

INSERT INTO `baru` (`id`, `gmail`, `password`, `level`) VALUES
(7, 'ezi@gmail.com', '202cb962ac59075b964b07152d234b70', '1'),
(15, 'daffia@gmail.com', '80b6c244b1f45136b3ebecc3782e05a9', '2'),
(16, 'ezi@gmail.com', '202cb962ac59075b964b07152d234b70', '2'),
(17, 'arif@gmail.com', '202cb962ac59075b964b07152d234b70', '2'),
(18, 'haris@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2');

-- --------------------------------------------------------

--
-- Table structure for table `waktu`
--

CREATE TABLE `waktu` (
  `id` int(11) NOT NULL,
  `namafile` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `waktu`
--

INSERT INTO `waktu` (`id`, `namafile`, `username`, `hari`, `tanggal`) VALUES
(36, '133786097.png', 'daffa', 'Selasa', '2023-05-16 04:10:46'),
(38, '1918272608.png', 'nisa', 'Selasa', '2023-05-16 06:47:05'),
(39, '133786097.png', 'epa', 'Selasa', '2023-05-16 06:59:28'),
(40, '923348569.png', 'wita', 'Selasa', '2023-05-16 07:00:27'),
(41, '2129331842.png', 'daffa', 'Kamis', '2023-05-18 03:20:39'),
(42, '2129331842.png', 'ezi', 'Minggu', '2023-05-21 13:40:03'),
(43, '1896993351.png', 'ezi', 'Minggu', '2023-05-21 13:41:16'),
(44, '677802337.png', 'daffa', 'Selasa', '2023-05-23 00:41:49'),
(45, '814425515.png', 'arif', 'Selasa', '2023-05-23 00:44:45'),
(46, '2049325303.png', 'tsaqila', 'Selasa', '2023-05-23 00:50:25'),
(50, '1637952294.png', 'daffa', 'Minggu', '2023-05-28 02:30:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baru`
--
ALTER TABLE `baru`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `waktu`
--
ALTER TABLE `waktu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baru`
--
ALTER TABLE `baru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `waktu`
--
ALTER TABLE `waktu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
