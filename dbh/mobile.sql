-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2021 at 04:40 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobile`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `PNAME` varchar(250) NOT NULL,
  `BNAME` varchar(250) NOT NULL,
  `PRICE` int(11) NOT NULL,
  `DISPLAY` varchar(100) NOT NULL,
  `BATTERY` int(11) NOT NULL,
  `RAM` int(11) NOT NULL,
  `PIC` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ID`, `PNAME`, `BNAME`, `PRICE`, `DISPLAY`, `BATTERY`, `RAM`, `PIC`) VALUES
(1, 'I Phone 7 Plus', 'Apple', 999, '5.2Inch', 3000, 4, 'IP7P.jpg'),
(2, 'I Phone 8', 'Apple', 1222, '4.5Inch', 5000, 4, 'IP8.jpg'),
(3, 'Galaxy S10', 'Samsung', 799, '4.2Inch', 2000, 3, 'SGS10.jpg'),
(6, 'I Phone 12', 'Apple', 2999, '6.1Inch', 2815, 4, 'IP12.jpg'),
(7, 'I Phone 11 Pro Max', 'Apple', 2499, '6.1Inch', 3110, 4, 'IP11PM.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
