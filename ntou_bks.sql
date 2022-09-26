-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 26, 2022 at 10:56 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ntou_bks`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `BuyerID` bigint(15) NOT NULL,
  `BuyerName` varchar(255) NOT NULL,
  `BuyerPhone` varchar(10) NOT NULL,
  `BuyerAddress` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`BuyerID`, `BuyerName`, `BuyerPhone`, `BuyerAddress`) VALUES
(4, 'Brian', '0955643153', '台北市安山區129巷'),
(5, 'Brian', '0955643153', '台北市安山區128巷'),
(6, 'evan', '0955643153', '台北市安山區1211巷'),
(7, 'yumi', '0955643148', '台北市安山區1211巷');

-- --------------------------------------------------------

--
-- Table structure for table `buyerinfo`
--

CREATE TABLE `buyerinfo` (
  `BuyerPhone` varchar(225) NOT NULL,
  `BuyerName` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `buyerinfo`
--

INSERT INTO `buyerinfo` (`BuyerPhone`, `BuyerName`) VALUES
('0972065555', 'Trump'),
('0972066464', 'Xi'),
('0972067777', 'Stanley');

-- --------------------------------------------------------

--
-- Table structure for table `deal`
--

CREATE TABLE `deal` (
  `DealID` int(15) NOT NULL,
  `BookID` varchar(225) NOT NULL,
  `BuyerID` int(15) NOT NULL,
  `DealAmount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `deal`
--

INSERT INTO `deal` (`DealID`, `BookID`, `BuyerID`, `DealAmount`) VALUES
(1, '1', 4, 10),
(2, '8', 5, 12),
(3, '3', 6, 23);

-- --------------------------------------------------------

--
-- Table structure for table `storage`
--

CREATE TABLE `storage` (
  `BookID` bigint(15) NOT NULL,
  `BookName` varchar(255) NOT NULL,
  `Price` int(11) DEFAULT NULL,
  `Classification` varchar(255) DEFAULT NULL,
  `StoreNumber` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `storage`
--

INSERT INTO `storage` (`BookID`, `BookName`, `Price`, `Classification`, `StoreNumber`) VALUES
(1, 'Hamen', 150, '宗教類', 0),
(2, 'How to Lose', 3000, '科學類', 1000),
(3, '7414.ac', 888, '歷史類', 110),
(6, 'hero1', 120, '歷史類', 100),
(7, 'wwww', 123, 'network', 2);

-- --------------------------------------------------------

--
-- Stand-in structure for view `user_view`
-- (See below for the actual view)
--
CREATE TABLE `user_view` (
`BookID` bigint(15)
,`BookName` varchar(255)
,`Classification` varchar(255)
);

-- --------------------------------------------------------

--
-- Structure for view `user_view`
--
DROP TABLE IF EXISTS `user_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `user_view`  AS SELECT `storage`.`BookID` AS `BookID`, `storage`.`BookName` AS `BookName`, `storage`.`Classification` AS `Classification` FROM `storage``storage`  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`BuyerID`);

--
-- Indexes for table `buyerinfo`
--
ALTER TABLE `buyerinfo`
  ADD PRIMARY KEY (`BuyerPhone`);

--
-- Indexes for table `deal`
--
ALTER TABLE `deal`
  ADD PRIMARY KEY (`DealID`);

--
-- Indexes for table `storage`
--
ALTER TABLE `storage`
  ADD PRIMARY KEY (`BookID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `BuyerID` bigint(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `deal`
--
ALTER TABLE `deal`
  MODIFY `DealID` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `storage`
--
ALTER TABLE `storage`
  MODIFY `BookID` bigint(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
