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
-- Table structure for table `Mochit`
--

CREATE TABLE `Mochit` (
  `Path` int(10) NOT NULL,
  `Want` varchar(100) NOT NULL,
  `Walk` int(10) NOT NULL,
  `Taxi` int(10) NOT NULL,
  `Price` int(20) NOT NULL,
  `Time` int(20) NOT NULL,
  `Score` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Mochit`
--

INSERT INTO `Mochit` (`Path`, `Want`, `Walk`, `Taxi`, `Price`, `Time`, `Score`) VALUES
(1, 'comf', 0, 0, 50, 45, 0),
(2, 'comf', 0, 0, 115, 40, 0),
(3, 'comf', 1, 0, 85, 50, 0),
(4, 'comf', 0, 1, 400, 35, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
