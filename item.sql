-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2018 at 08:19 AM
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
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `Item_id` varchar(10) NOT NULL,
  `Item_name` varchar(30) NOT NULL,
  `Item_price` int(5) NOT NULL,
  `Rest_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`Item_id`, `Item_name`, `Item_price`, `Rest_id`) VALUES
('1', 'Chicken Omelet', 8, 41),
('1', 'Egg rolls', 2, 110),
('1', 'Chang\'s spicy chicken bowl', 9, 204),
('1', 'Fried pickles', 4, 530),
('2', 'Egg sandwhich', 6, 41),
('2', 'spicy thai fried rice', 8, 110),
('2', 'Tempura bowl', 10, 204),
('2', 'Chili cheese fries', 7, 530),
('3', 'Thai coconut curry', 1, 110),
('3', 'chiang mein noodle bowl', 1, 204),
('3', 'White cheedar & Bacon', 1, 530),
('4 ', 'Hash Browns', 3, 41),
('4', 'Lo mein', 9, 110),
('4 ', 'Kung Pao Dragon Roll', 11, 204);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`Item_id`,`Rest_id`),
  ADD KEY `rest_fkey` (`Rest_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `rest_fkey` FOREIGN KEY (`Rest_id`) REFERENCES `resturant` (`R_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
