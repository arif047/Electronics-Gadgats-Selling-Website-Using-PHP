-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2021 at 05:38 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email1` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cPassword` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `verification_status1` varchar(255) NOT NULL,
  `email2` varchar(255) NOT NULL,
  `verification_status2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;




--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email1`, `password`, `cPassword`, `token`, `verification_status1`, `email2`, `verification_status2`) VALUES
(89, 'arif', 'rarifkhan652@gmail.com', '$2y$10$lL3BU7IUd2Ws4SjMbkJ.4OBE.jvAssx.Uq9MfDftvY1Q3MSxJQ9Lm', '$2y$10$CtW2rPc5g7WlPG4TkTXhQOTYoHf3FHR1RgzCmhJZKFrUIZriBhjRq', 'JV!d2lcXDP', '1', 'rarifkhan653@gmail.com', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
