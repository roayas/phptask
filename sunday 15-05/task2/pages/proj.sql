-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2022 at 12:26 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proj`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_inf`
--

CREATE TABLE `user_inf` (
  `ID` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `faname` varchar(255) NOT NULL,
  `mobile` int(14) NOT NULL,
  `datee` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `Confirm` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `loged_in` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_inf`
--

INSERT INTO `user_inf` (`ID`, `fname`, `mname`, `lname`, `faname`, `mobile`, `datee`, `email`, `pass`, `Confirm`, `created_at`, `loged_in`) VALUES
(1, 'roa', 'rfli', 'moh', 'rgfregr', 2147483647, '2000-11-11', 'ssff@jj.req', 'A12*', 'A12*', '2022-05-15 21:32:49', '2022-05-15 21:32:49'),
(2, 'roa', 'rfli', 'moh', 'rgfregr', 2147483647, '2000-11-11', 'ssff@jj.req', 'A12*', 'A12*', '2022-05-15 21:34:17', '2022-05-15 21:34:17'),
(3, 'sara', 'sa', 'mo', 'ya', 2147483647, '2000-11-11', 'regb@vfd.xc', 'A12*', 'A12*', '2022-05-15 21:34:59', '2022-05-15 21:34:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_inf`
--
ALTER TABLE `user_inf`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_inf`
--
ALTER TABLE `user_inf`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
