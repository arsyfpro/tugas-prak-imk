-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2020 at 05:04 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skincare`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(200) NOT NULL,
  `jenis_barang` varchar(50) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `merk_barang` varchar(50) NOT NULL,
  `jumlah_barang` varchar(20) NOT NULL,
  `harga_barang` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `jenis_barang`, `nama_barang`, `merk_barang`, `jumlah_barang`, `harga_barang`) VALUES
(1110, 'Foundation', 'Make Over Ultra Cover Liquid Matt Foundation', 'Make Over', '20', '150.000'),
(1111, 'Foundation', 'Innisfree My Foundation All day SPF 25', 'Innisfree', '60', '320.000'),
(1112, 'Foundation', 'Focallure Full Coverage Oil-control Fluid Foundation', 'Focallure', '21', '118.000'),
(2110, 'Cushion', 'Powerstay Demi-Matte Cover Cushion', 'Make Over ', '27', '215.000'),
(2111, 'Cushion', 'Innisfree Skinny Coverfit Cushion', 'Innisfree', '30', '240.000'),
(2112, 'Cushion', 'Laneige Bb Cushion Anti Aging', 'Laneige', '60', '295.000'),
(3110, 'Lip Tint', 'Secondate Milky Gel Lip Tint Gallery', 'Secondate', '10', '129.000'),
(3111, 'Lip Tint', 'Dear Me Beauty Perfect Lasting Lip Tint \r\n', 'Dear Me Beauty', '40', '109.000'),
(4110, 'Toner', 'Klairs Supple Preparation Facial Toner', 'Klairs', '10', '300.000'),
(4111, 'Toner', 'Mamonde Rose Water Toner', 'Mamonde', '62', '315.000'),
(5110, 'Serum', 'Klairs Rich Moist Soothing Serum', 'Klairs', '32', '330.000'),
(5111, 'Serum', 'Nacific Fresh Herb Origin Serum', 'Nacific', '32', '153.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
