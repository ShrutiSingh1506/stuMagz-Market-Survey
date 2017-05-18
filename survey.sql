-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2017 at 10:22 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mysql`
--

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `Name` varchar(30) NOT NULL,
  `College_Name` varchar(40) NOT NULL,
  `Rating` varchar(1) NOT NULL,
  `Q1` varchar(5) NOT NULL,
  `Q2` varchar(15) NOT NULL,
  `Q3` varchar(5) NOT NULL,
  `Q4` varchar(15) NOT NULL,
  `Q5` varchar(5) NOT NULL,
  `Q6` varchar(5) NOT NULL,
  `Experience` varchar(20) NOT NULL,
  `Suggestions` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`Name`, `College_Name`, `Rating`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Experience`, `Suggestions`) VALUES
('dds', 'fds', '5', 'no', 'My feed', 'no', 'Don\'t know', 'no', 'yes', 'Awesome', ''),
('Sheela Ippili', 'Gitam University', '4', 'no', 'My College', 'no', 'My College', 'yes', 'no', 'Nice and friendly', 'awesome website');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
