-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2026 at 02:37 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fakultet`
--

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `id` int(11) NOT NULL,
  `ime` varchar(32) DEFAULT NULL,
  `Prezime` varchar(32) DEFAULT NULL,
  `spol` varchar(5) DEFAULT NULL,
  `telefon` varchar(32) DEFAULT NULL,
  `email` varchar(64) DEFAULT NULL,
  `godine` int(3) DEFAULT NULL,
  `hobi` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`id`, `ime`, `Prezime`, `spol`, `telefon`, `email`, `godine`, `hobi`) VALUES
(1, 'Bill', 'Gates', 'Ž', '5554567', 'bgates@tvz.hr', 34, 'planinarenje'),
(3, 'Bill', 'Gates', 'Ž', '5554567', 'bgates@tvz.hr', 22, 'planinarenje'),
(4, 'Bill', 'Gates', 'M', '5554567', 'bgates@tvz.hr', 40, 'planinarenje'),
(5, 'Bill', 'Gates', 'M', '5554567', 'bgates@tvz.hr', 15, 'planinarenje'),
(6, 'Bill', 'Gates', 'Ž', '5554567', 'bgates@tvz.hr', 10, 'planinarenje'),
(7, 'Bill', 'Gates', 'M', '5554567', 'bgates@tvz.hr', 76, 'planinarenje');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
