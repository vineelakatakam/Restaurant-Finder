-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2018 at 08:20 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `resturant`
--

CREATE TABLE `resturant` (
  `R_id` int(5) NOT NULL,
  `cuisine_name` varchar(15) NOT NULL,
  `Restaurant_name` varchar(25) NOT NULL,
  `Rest_address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resturant`
--

INSERT INTO `resturant` (`R_id`, `cuisine_name`, `Restaurant_name`, `Rest_address`) VALUES
(41, 'American', 'Waffle House', '3995 University Dr NW'),
(110, 'Chinese', 'Mei Wei Asian Bistro', '309 Pelham Ave SW Unit B5'),
(204, 'Chinese', 'P.F. Chang\'s China Bistro', '305 The Bridge St NW'),
(530, 'American', 'Longhorn Steakhouse', '1450 Perimeter Pky NW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resturant`
--
ALTER TABLE `resturant`
  ADD PRIMARY KEY (`R_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
