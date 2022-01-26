-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2018 at 01:27 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_delivery`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `user_no` int(11) NOT NULL,
  `username` varchar(700) DEFAULT NULL,
  `password` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`user_no`, `username`, `password`) VALUES
(1, 'John', 'John');

-- --------------------------------------------------------

--
-- Table structure for table `dcount`
--

CREATE TABLE `dcount` (
  `count_no` int(11) NOT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dcount`
--

INSERT INTO `dcount` (`count_no`, `status`) VALUES
(1, 'Done'),
(2, 'Done');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `food_no` int(11) NOT NULL,
  `food_name` varchar(700) DEFAULT NULL,
  `food_pic` blob,
  `food_mgt_date` date DEFAULT NULL,
  `other_info` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_no`, `food_name`, `food_pic`, `food_mgt_date`, `other_info`) VALUES
(1, 'Burger', 0x312e6a7067, '2018-07-11', 'The burger for only 6000 Rwf'),
(2, 'Chicken', 0x322e6a7067, '2018-07-12', 'The one and only for 15000 Rwf only');

-- --------------------------------------------------------

--
-- Table structure for table `food_order`
--

CREATE TABLE `food_order` (
  `order_no` int(11) NOT NULL,
  `customer_name` varchar(1000) DEFAULT NULL,
  `customer_address` varchar(1000) DEFAULT NULL,
  `customer_phone_no` varchar(100) DEFAULT NULL,
  `food_no` int(11) DEFAULT NULL,
  `other_info` mediumtext,
  `order_date` date DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`user_no`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `dcount`
--
ALTER TABLE `dcount`
  ADD PRIMARY KEY (`count_no`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_no`),
  ADD UNIQUE KEY `food_name` (`food_name`);

--
-- Indexes for table `food_order`
--
ALTER TABLE `food_order`
  ADD PRIMARY KEY (`order_no`),
  ADD KEY `fkfood_order_and_food` (`food_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `user_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dcount`
--
ALTER TABLE `dcount`
  MODIFY `count_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `food_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `food_order`
--
ALTER TABLE `food_order`
  MODIFY `order_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `food_order`
--
ALTER TABLE `food_order`
  ADD CONSTRAINT `fkfood_order_and_food` FOREIGN KEY (`food_no`) REFERENCES `food` (`food_no`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
