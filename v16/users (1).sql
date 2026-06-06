-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2026 at 10:55 AM
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
-- Database: `registration_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `country` char(2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `username`, `password`, `country`, `created_at`) VALUES
(1, 'Lana', 'Radosic', 'lradosic@tvz.hr', 'lanar', '$2y$10$NMIueGmjjzVlVFv1hXfowuBbVw0Jtgz8dF8aDXD.NKe0zBxET.9hy', 'HR', '2026-06-06 08:52:57'),
(2, 'Andrej', 'Novak', 'anovak1@tvz.hr', 'novak', '$2y$10$H89oxpNoMEkEuVJFf0znm.FMxaA4WoAXimNiPCVhBlUs5.ML2Axj2', 'HR', '2026-06-06 08:53:30'),
(3, 'Kristian', 'Pirc', 'kpirc@tvz.hr', 'pirc_cro', '$2y$10$AL54Ihpd6IDYsUYP/n8IFuklyBdDC6L9QnWJjlSjE.EOMQY0ZSxwy', 'HR', '2026-06-06 08:54:30'),
(4, 'Mirko Tomislav', 'Glibić', 'mglibic@tvz.hr', '_miki_', '$2y$10$AcHtxx5Wis8BZPet78cHz.hppizbrDiq2cVhqF20Fiajw6.tzlxkG', 'HR', '2026-06-06 08:55:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
