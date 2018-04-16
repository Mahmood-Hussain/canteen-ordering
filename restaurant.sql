-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 16, 2018 at 04:14 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
CREATE TABLE IF NOT EXISTS `employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `first_name`, `last_name`, `username`, `password`) VALUES
(1, 'ram', '', 'ram123', 'ram123'),
(2, 'shaym', '', 'shaym123', 'shaym123'),
(3, 'ghanshaym', '', 'ghanshaym123', 'ghanshaym123');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `title`, `price`) VALUES
(1, 'tea', 10),
(2, 'coffee', 10),
(3, 'samosa', 15),
(4, 'cake', 15);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_date` varchar(100) NOT NULL,
  `item` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `auto_date` varchar(100) NOT NULL COMMENT 'This is the date when order is being placed',
  `total_price` int(11) NOT NULL,
  `emp_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_date`, `item`, `quantity`, `auto_date`, `total_price`, `emp_name`) VALUES
(4, '2018-04-12', 'tea', 10, '14-04-2018 15:42', 100, 'ram123'),
(5, '2018-04-04', 'coffee', 2, '14-04-2018 07:41', 20, 'ram123'),
(6, '2018-04-18', 'coffee', 10, '14-04-2018 07:41', 100, 'ram123'),
(7, '2018-04-18', 'tea', 3, '14-04-2018 07:41', 30, 'ram123'),
(8, '2018-04-27', 'samosa', 32, '14-04-2018 08:39', 480, 'ram123'),
(9, '2018-04-18', 'cake', 5, '14-04-2018 08:39', 75, 'ram123'),
(10, '2018-05-11', 'tea', 12, '15-04-2018 09:09', 120, 'shaym123'),
(11, '2018-04-15', 'coffee', 3, '15-04-2018 09:09', 30, 'shaym123'),
(12, '2018-04-15', 'samosa', 12, '15-04-2018 09:10', 180, 'shaym123'),
(13, '2018-04-11', 'cake', 5, '15-04-2018 09:10', 75, 'shaym123'),
(14, '2018-04-11', 'cake', 3, '15-04-2018 09:10', 45, 'shaym123'),
(15, '2018-04-14', 'samosa', 4, '15-04-2018 09:11', 60, 'shaym123'),
(16, '2018-04-15', 'coffee', 4, '15-04-2018 09:11', 40, 'shaym123'),
(17, '2018-04-15', 'tea', 3, '15-04-2018 09:13', 30, 'ghanshaym123'),
(18, '2018-05-17', 'samosa', 12, '15-04-2018 09:13', 180, 'ghanshaym123'),
(19, '2018-05-12', 'cake', 4, '15-04-2018 09:14', 60, 'ghanshaym123'),
(20, '2018-02-12', 'coffee', 3, '15-04-2018 09:14', 30, 'ghanshaym123'),
(21, '2018-02-12', 'tea', 5, '15-04-2018 09:14', 50, 'ghanshaym123'),
(22, '2018-01-13', 'coffee', 10, '15-04-2018 09:20', 100, 'ram123'),
(23, '2018-01-12', 'cake', 6, '15-04-2018 09:20', 90, 'ram123'),
(24, '2018-05-11', 'samosa', 4, '15-04-2018 09:21', 60, 'ram123'),
(25, '2018-05-05', 'cake', 5, '15-04-2018 10:53', 75, 'ram123'),
(26, '2018-04-11', 'coffee', 5, '15-04-2018 12:43', 50, 'shaym123'),
(27, '2018-05-17', 'samosa', 10, '15-04-2018 13:15', 150, 'shaym123'),
(28, '2018-05-17', 'cake', 2, '15-04-2018 17:27', 30, 'ram123'),
(29, '2018-05-17', 'samosa', 5, '15-04-2018 17:41', 75, 'ram123'),
(30, '2018-04-11', 'cake', 5, '15-04-2018 09:42', 75, 'ram123'),
(31, '2018-04-11', 'samosa', 1, '15-04-2018 14:42', 0, 'shaym123'),
(32, '2018-04-03', 'tea', 5, '15-04-2018 15:23', 0, 'shaym123'),
(33, '2018-04-01', 'tea', 1, '15-04-2018 15:24', 0, 'shaym123'),
(34, '2018-04-04', 'cake', 1, '15-04-2018 15:25', 0, 'shaym123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
