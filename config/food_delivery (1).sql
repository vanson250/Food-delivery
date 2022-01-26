-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2018 at 05:45 PM
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
(2, 'Done'),
(3, 'Done'),
(4, 'Done'),
(5, 'Done'),
(6, 'Done'),
(7, 'Done'),
(8, 'Done'),
(9, 'Done'),
(10, 'Done'),
(11, 'Done'),
(12, 'Done'),
(13, 'Done'),
(14, 'Done'),
(15, 'Done');

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
(2, 'Chicken', 0x322e6a7067, '2018-07-12', 'The one and only for 15000 Rwf only'),
(3, 'Juices and cheese', 0x332e6a7067, '2018-07-12', 'Only on your 30000 Rwf'),
(4, 'Makaroni', 0x342e6a7067, '2018-07-09', 'Ibi biryo wabibona byoroshye bigushyushye kuri 12000 rwf'),
(5, 'Umuceri', 0x352e6a7067, '2018-07-15', 'Uyu muceri ugura 35000 gusa!!'),
(6, 'ibitoki bihiye', 0x31312e6a7067, '2018-01-08', 'bigura 50000 rwf ');

-- --------------------------------------------------------

--
-- Table structure for table `food_order`
--

CREATE TABLE `food_order` (
  `order_no` int(11) NOT NULL,
  `customer_name` varchar(1000) DEFAULT NULL,
  `customer_address` varchar(1000) DEFAULT NULL,
  `customer_phone_no` varchar(100) DEFAULT NULL,
  `bankslip` blob,
  `food_no` int(11) DEFAULT NULL,
  `other_info` mediumtext,
  `order_date` date DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food_order`
--

INSERT INTO `food_order` (`order_no`, `customer_name`, `customer_address`, `customer_phone_no`, `bankslip`, `food_no`, `other_info`, `order_date`, `status`) VALUES
(1, 'Kabera Dismass', 'Kabuye 544 St', '0788223322', 0x31352e6a7067, 3, '2 plates still hot', '2018-09-16', 'Not Approved');

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
  MODIFY `count_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `food_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `food_order`
--
ALTER TABLE `food_order`
  MODIFY `order_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
