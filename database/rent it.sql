-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2023 at 08:37 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rent it`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `CategoryID` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `ParentCategoryID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`CategoryID`, `Name`, `Description`, `ParentCategoryID`) VALUES
(1, 'Electronics', 'Electronics category', NULL),
(2, 'Clothing', 'Clothing category', NULL),
(3, 'Books', 'Books category', NULL),
(4, 'Laptops', 'Laptops category', 1),
(5, 'T-Shirts', 'T-Shirts category', 2),
(6, 'Coding Books', 'Coding Books category', 3);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductID` int(11) NOT NULL,
  `Title` varchar(50) DEFAULT NULL,
  `Description1` text DEFAULT NULL,
  `SalePrice` decimal(10,2) DEFAULT NULL,
  `Condition1` varchar(20) DEFAULT NULL,
  `Image1` varchar(100) DEFAULT NULL,
  `DatePosted` date DEFAULT NULL,
  `UID` int(11) DEFAULT NULL,
  `CategoryID` int(11) DEFAULT NULL,
  `RentPrice` decimal(10,2) DEFAULT NULL,
  `RentDuration` int(11) DEFAULT NULL,
  `AvailableForRent` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `Title`, `Description1`, `SalePrice`, `Condition1`, `Image1`, `DatePosted`, `UID`, `CategoryID`, `RentPrice`, `RentDuration`, `AvailableForRent`) VALUES
(1, 'mac book', 'fast and best for professional work', '1999.00', 'used', 'dell-xps-15-9560.jpg', '2023-07-12', 7, 4, '100.00', 60, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `RentID` int(11) NOT NULL,
  `DateRented` date DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT NULL,
  `ProductID` int(11) DEFAULT NULL,
  `RenterID` int(11) DEFAULT NULL,
  `OwnerID` int(11) DEFAULT NULL,
  `RentDuration` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `SaleID` int(11) NOT NULL,
  `DateSold` date DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT NULL,
  `ProductID` int(11) DEFAULT NULL,
  `BuyerID` int(11) DEFAULT NULL,
  `SellerID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Phone` varchar(10) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `DateJoined` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `Name`, `Email`, `Phone`, `Password`, `DateJoined`) VALUES
(1, 'mustfa', 'adsfwks@gmail.com', '1213432', '1234', '2023-06-28'),
(2, 'mustfa', 'm@gmail.com', '8209470172', '1234', '2023-06-29'),
(5, '', '', '', '', '2023-06-30'),
(7, 'mustfa  ', 'mg@gmail.com ', '987654321 ', '1234 ', '2023-07-01'),
(8, 'admin', 'admin@gmail.com', '9876543210', '1234', '2023-07-08'),
(9, 'gourav', 'g@gmail.com', '9076694464', '1234', '2023-07-08'),
(10, 'gourav', 'g21@gmail.com', '9079694464', '1234', '2023-07-08'),
(11, 'don', 'd@gmail.com', '7777777777', '1234', '2023-07-08'),
(12, 'mustfa', 'ma@gmail.com', '9999999999', '1234', '2023-07-08'),
(13, 'mustfa', 'm3@gmail.om', '8888888888', '1234', '2023-07-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`CategoryID`),
  ADD KEY `ParentCategoryID` (`ParentCategoryID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`),
  ADD KEY `UserID` (`UID`),
  ADD KEY `CategoryID` (`CategoryID`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`RentID`),
  ADD KEY `ProductID` (`ProductID`),
  ADD KEY `RenterID` (`RenterID`),
  ADD KEY `OwnerID` (`OwnerID`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`SaleID`),
  ADD KEY `ProductID` (`ProductID`),
  ADD KEY `BuyerID` (`BuyerID`),
  ADD KEY `SellerID` (`SellerID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Phone` (`Phone`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `CategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ProductID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
