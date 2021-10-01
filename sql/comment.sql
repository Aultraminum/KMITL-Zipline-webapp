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
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `place` text NOT NULL,
  `detail` text NOT NULL,
  `rate` int(255) NOT NULL,
  `time` int(255) NOT NULL,
  `taxi` int(255) NOT NULL,
  `walk` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=tis620;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`place`, `detail`, `rate`, `time`, `taxi`, `walk`) VALUES
('asdas', 'asdad', 111, 111, 1, 0),
('asdas', 'asdad', 111, 111, 1, 1),
('lllll', 'lllllll', 222, 222, 0, 1),
('lllll', 'lllllll', 222, 222, 0, 1),
('lllll', 'lllllll', 222, 222, 0, 1),
('asdas', 'asdad', 111, 222, 1, 1),
('asdas', 'asdad', 111, 111, 1, 1),
('asdasd', 'asssssssssdasdasdasdasdasdasd', 102, 30, 0, 0),
('Mega', 'Go to jinda', 102, 30, 0, 0),
('Wow', 'wwowwwwwwwwwwwwwww', 102, 30, 0, 1),
('kmitl', 'mmm', 10, 10, 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
