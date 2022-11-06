-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2022 at 06:26 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fancy_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `parent_category`
--

CREATE TABLE `parent_category` (
  `category_ID` int(10) NOT NULL,
  `Cat_Name` varchar(50) NOT NULL,
  `Parent_Status` varchar(10) NOT NULL,
  `Parent_ID` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parent_category`
--

INSERT INTO `parent_category` (`category_ID`, `Cat_Name`, `Parent_Status`, `Parent_ID`) VALUES
(1, 'Women', 'No', 0),
(2, 'Kids', '', 0),
(5, '', '', 0),
(6, 'Mens', '0', 0),
(16, 'Clothes', 'Yes', 6),
(17, 'Electronics', '0', 0),
(24, 'Traditional', 'Yes', 16),
(25, 'Western', 'Yes', 16);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_ID` int(10) NOT NULL,
  `Product_Name` varchar(200) NOT NULL,
  `Product_Price` int(200) NOT NULL,
  `Product_qty` int(10) NOT NULL,
  `Product_Rating` int(5) NOT NULL,
  `Product_Status` varchar(20) NOT NULL,
  `Reference_Category_ID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_ID`, `Product_Name`, `Product_Price`, `Product_qty`, `Product_Rating`, `Product_Status`, `Reference_Category_ID`) VALUES
(101, 'Samsumg_A10', 10000, 5, 2, 'Available', 17),
(102, 'Realme9', 27000, 1, 3, 'Available', 17),
(119, 'Hoodies', 900, 29, 4, 'Available', 25),
(134, 'Kurta', 1000, 5, 2, 'Available', 16),
(169, 'Denim Gens', 500, 19, 4, 'Available', 25);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `parent_category`
--
ALTER TABLE `parent_category`
  ADD PRIMARY KEY (`category_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_ID`),
  ADD KEY `Reference_Category_ID` (`Reference_Category_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`Reference_Category_ID`) REFERENCES `parent_category` (`category_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
