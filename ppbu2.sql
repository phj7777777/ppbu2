-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2019 at 09:28 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppbu2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(99) NOT NULL,
  `email` varchar(99) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `email`, `password`) VALUES
('admin', 'admin@gmail.com', '000000');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `houseNo` int(99) NOT NULL,
  `road` varchar(99) NOT NULL,
  `car_sticker` int(2) NOT NULL,
  `gate_key` int(2) NOT NULL,
  `donation` int(99) NOT NULL,
  `payment_method` varchar(99) NOT NULL,
  `bank` int(99) NOT NULL,
  `cheque_no` varchar(99) NOT NULL,
  `amount` int(99) NOT NULL,
  `transaction_date` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `resident`
--

CREATE TABLE IF NOT EXISTS `resident` (
  `name` varchar(80) NOT NULL,
  `icNo` varchar(20) NOT NULL,
  `houseNo` varchar(10) NOT NULL,
  `road` varchar(10) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `typeofresidences` varchar(30) NOT NULL,
  `phoneNo` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;


CREATE TABLE IF NOT EXISTS `member` (
  `name` varchar(80) NOT NULL,
  `icNo` varchar(20) NOT NULL,
  `houseNo` varchar(10) NOT NULL,
  `road` varchar(10) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `typeofresidences` varchar(30) NOT NULL,
  `phoneNo` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `Id` int(99) NOT NULL,
  `Date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Title` varchar(50) NOT NULL,
  `Image` blob,
  `Content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`Id`, `Date`, `Title`, `Image`, `Content`) VALUES
(1, '2019-05-21 02:07:02', 'Test', NULL, 'This is just a very long test sentence to check if data can be seen or read correctly using mysql and php together.'),
(2, '2019-05-21 02:34:39', 'Test 2', NULL, 'This is just a very long test sentence to check if data can be seen or read correctly using mysql and php together.'),
(3, '2019-06-01 16:45:17', 'Test 3', NULL, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`) VALUES
(1, '1', '2', '3', '4'),
(2, 'name', 'email', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `hyperlink`
--

CREATE TABLE `hyperlink` (
  `id` int(11) NOT NULL,
  `link` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hyperlink`
--

INSERT INTO `hyperlink` (`id`, `link`, `description`) VALUES
(1, 'www.google.com', 'Google'),
(2, 'www.stackoverflow.com', 'StackOverflow'),
(3, 'www.facebook.com', 'Facebook');

-- --------------------------------------------------------


--
-- Dumping data for table `resident`
--

INSERT INTO `resident` (`name`, `icNo`, `houseNo`, `road`, `sex`, `typeofresidences`, `phoneNo`, `email`, `id`) VALUES
('James', '981020-01-1234', '70', '4', 'female', 'TENANT-OCCUPIED HOUSE', '122222222', 'haojie02074@gmail.com', 4);


INSERT INTO `member` (`name`, `icNo`, `houseNo`, `road`, `sex`, `typeofresidences`, `phoneNo`, `email`, `id`) VALUES
('James', '981020-01-1234', '70', '4', 'female', 'TENANT-OCCUPIED HOUSE', '122222222', 'haojie02074@gmail.com', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`houseNo`,`road`);

--
-- Indexes for table `hyperlink`
--
ALTER TABLE `hyperlink`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resident`
--
ALTER TABLE `resident`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `resident`
--
ALTER TABLE `resident`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
  
  ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `hyperlink`
--
ALTER TABLE `hyperlink`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `resident`
--
ALTER TABLE `member`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
