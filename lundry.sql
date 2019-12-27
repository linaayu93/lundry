-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2019 at 04:03 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(12) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `member_name` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `address` text NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(18) NOT NULL,
  `image` text NOT NULL,
  `join` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `level` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nip`, `member_name`, `email`, `telp`, `address`, `username`, `password`, `image`, `join`, `level`) VALUES
(1, 'A2202613', 'admin', 'admin@admin.com', '08772038439', 'blora', 'admin123', '$2y$10$epToMkgbMax', 'sun2.jpg', '2019-12-03 04:53:27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaction`
--

CREATE TABLE `detail_transaction` (
  `idd` varchar(12) NOT NULL,
  `transaction_id` varchar(12) NOT NULL,
  `packet_id` varchar(12) NOT NULL,
  `qty` int(12) NOT NULL,
  `price` int(12) NOT NULL,
  `subtotal` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `idm` int(12) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `member_name` varchar(60) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `address` text NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(18) NOT NULL,
  `image` text NOT NULL,
  `join` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`idm`, `nik`, `member_name`, `email`, `telp`, `address`, `username`, `password`, `image`, `join`) VALUES
(1, 'K001', 'lina', 'admin@admin.com', '08772038439', 'blora', 'admin', '$2y$10$P/wMJJk.rCl', '', '2019-12-01 16:24:17'),
(2, 'K002', 'skylark', 'skylark@skylark.com', '098767626378', 'Jl Tegal Rejo', 'law93', '$2y$10$PGM0gXvnbQ0', 'mendes1.jpg', '2019-12-02 14:45:18');

-- --------------------------------------------------------

--
-- Table structure for table `packet`
--

CREATE TABLE `packet` (
  `paket_id` int(12) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packet`
--

INSERT INTO `packet` (`paket_id`, `name`, `price`) VALUES
(5, 'Cuci Keringmu', 2000),
(6, 'Cucu Komplit', 7000),
(7, 'Cuci Kering', 4000);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `idt` int(12) NOT NULL,
  `no_tran` varchar(12) NOT NULL,
  `name_customer` varchar(12) NOT NULL,
  `nik` varchar(12) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`idm`);

--
-- Indexes for table `packet`
--
ALTER TABLE `packet`
  ADD PRIMARY KEY (`paket_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`no_tran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `idm` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `packet`
--
ALTER TABLE `packet`
  MODIFY `paket_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
