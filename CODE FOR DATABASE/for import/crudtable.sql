-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2023 at 02:45 PM
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
-- Database: `crudsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `crudtable`
--

CREATE TABLE `crudtable` (
  `id` int(11) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `lastName` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `pass` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `crudtable`
--

INSERT INTO `crudtable` (`id`, `name`, `lastName`, `email`, `pass`) VALUES
(15, 'Louise Larita', NULL, 'eruchitandaxnakanomiku@gmail.com', '123'),
(16, 'Louise Larita', NULL, 'marionlarita@yahoo.com', '123'),
(17, 'kaye', NULL, 'Kaye27@gmail.com', 'louisekay'),
(18, 'Louise Larita', NULL, 'larslarita@gmail.com', '666'),
(19, 'Louise Larita', NULL, 'larita.louise.john@gmail.com', '23'),
(20, 'kiven', NULL, 'art@gmail.com', '444'),
(21, '123', NULL, '123@gmail.com', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crudtable`
--
ALTER TABLE `crudtable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crudtable`
--
ALTER TABLE `crudtable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
