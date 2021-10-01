-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql56
-- Generation Time: Oct 08, 2019 at 11:11 AM
-- Server version: 5.6.33-log
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ite60010179_BigData`
--

-- --------------------------------------------------------

--
-- Table structure for table `Siam`
--

CREATE TABLE `Siam` (
  `Path` int(10) NOT NULL,
  `Want` varchar(100) NOT NULL,
  `Walk` int(10) NOT NULL,
  `Taxi` int(10) NOT NULL,
  `Price` int(20) NOT NULL,
  `Time` int(20) NOT NULL,
  `Score` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Siam`
--

INSERT INTO `Siam` (`Path`, `Want`, `Walk`, `Taxi`, `Price`, `Time`, `Score`) VALUES
(1, 'uncomf', 0, 0, 29, 50, 1),
(2, 'comf', 0, 0, 71, 40, 0),
(3, 'comf', 0, 0, 66, 40, 0),
(4, '', 1, 0, 6, 70, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
