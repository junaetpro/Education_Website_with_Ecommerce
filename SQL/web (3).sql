-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2023 at 04:21 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `texts` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `texts`) VALUES
(14, 'vivo', 'The X80 series did not have a Pro+ variant, meaning the X80 Pro was the flagship this time around. It launched in April, and at the time, it was everything you would want from a flagship - the best chipset from Qualco'),
(15, 'iphone', 'Height: about 164.0mm  Width: about 75.4mm  Thickness: about 7.9mm  Weight: about 175g  *Product size and weight may vary by configuration, manufacturing process and measurements. All specifications are subject to the actual product.'),
(19, 'ss', 'ss'),
(21, 'aa', 'aa'),
(22, 'aa', 'aa'),
(23, 'aa', 'aa'),
(25, 'ss', 'aa'),
(28, 'ss', 'aa');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mobile` varchar(50) DEFAULT NULL,
  `freetime` varchar(50) DEFAULT NULL,
  `problem` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `freetime`, `problem`) VALUES
(27, 'sany', '01887404623', '0199', 'hjhj', 'tanjim'),
(28, 'sany', 'junaetsany@gmail.com', '0199', '4pm', 'html'),
(29, 'junaet', 'junaetsany@gmail.com', '017', '3pm', 'pancil'),
(30, 'tanjim', 'tanjim@gmail.com', '0199', '2pm', 'quiz');

-- --------------------------------------------------------

--
-- Table structure for table `customerinfo`
--

CREATE TABLE `customerinfo` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `contact` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customerinfo`
--

INSERT INTO `customerinfo` (`id`, `name`, `contact`) VALUES
(31, 'Junaet Islam ', '0467'),
(34, 'ibrahim', '017000000'),
(35, 'tanjim', '0199000000'),
(36, 'shamim', '0166000000'),
(37, 'arif', '016699000'),
(38, 'Junaet Islam ', '0199000000');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `job` varchar(50) DEFAULT NULL,
  `salary` varchar(50) DEFAULT NULL,
  `join_date` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `phone`, `email`, `address`, `job`, `salary`, `join_date`) VALUES
(1, 'junaet', '01736224711', 'junaetsany@gmail.com', 'dhaka', 'CEO', '30000', '2022-12-25'),
(5, 'Shamim', '018000000', 'Shamim@gmail.com', 'kanchon', 'Account manager', '20000', '2022-12-25');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `productname` varchar(50) DEFAULT NULL,
  `quantity` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `number` varchar(50) DEFAULT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `productname`, `quantity`, `name`, `address`, `number`, `order_date`) VALUES
(11, 'redmi 9 power', '1', 'sany', 'koril', '017000000', '2022-01-05 00:00:00'),
(12, 'oppo f7', '2', 'Tanjim', 'dhaka', '018800000', '2022-01-04 00:00:00'),
(13, 'i phone 14', '1', 'shamim', 'kanchon', '01600000', '2022-01-05 00:00:00'),
(14, 'one+ 10', '1', 'shopon', 'uttara', '01900000', '2022-01-03 00:00:00'),
(15, 'vivo', '1', 'shopon', 'jatrabari', '01700600', '2022-01-05 00:00:00'),
(17, 'redmi', '2', 'sany', 'dhaka', '0199', '2022-01-05 00:00:00'),
(18, 'redmi', '2', 'sany', 'dhaka', '0199', '2022-01-05 00:00:00'),
(19, 'dd', '2', 'sany', 'dk', '0199', '2022-01-05 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `porder`
--

CREATE TABLE `porder` (
  `name` varchar(20) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `quantity` varchar(20) DEFAULT NULL,
  `address` varchar(20) DEFAULT NULL,
  `productTitle` varchar(20) DEFAULT NULL,
  `productPrice` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `porder`
--

INSERT INTO `porder` (`name`, `mobile`, `quantity`, `address`, `productTitle`, `productPrice`) VALUES
('sany', '01700600', '2', 'dhaka', NULL, NULL),
('sany', '01700600', '2', 'dk', 'Product 2', '20'),
('sany', '01700600', '2', 'fghfhg', 'Product 1', '10'),
('arosi', '01700600', '2', 'dk', 'Product 2', '20'),
('sany', 'gjgkg', '2', 'kanchon', 'Good Luck Pan', '10'),
('ghh', '01700600', '1', 'koril', 'Marker pan', '10'),
('tanjim', '01700', '3', 'koril', 'Marker pan', '10');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `productname` varchar(50) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `quantity` varchar(50) DEFAULT NULL,
  `supplier_name` varchar(50) DEFAULT NULL,
  `buying_price` varchar(50) DEFAULT NULL,
  `selling_price` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `productname`, `category`, `quantity`, `supplier_name`, `buying_price`, `selling_price`) VALUES
(9, 'oppo', 'electronics', '20', 'sany', '20000', '22000'),
(10, 'vivo', 'electronics', '30', 'shopon', '25000', '27000'),
(11, 'redmi', 'electronics', '10', 'emon sab', '15000', '18000'),
(12, 'i phone', 'electronics', '15', 'shamim', '70000', '75000'),
(13, 'one +', 'electronics', '1', 'ripon', '50000', '53000'),
(14, 'itel', 'electronics', '0', 'sany', '20000', '22000'),
(15, 'lava', 'electronics', '0', 'shopon', '15000', '10000'),
(16, 'lava 2', 'electronics', '1', 'sany', '20000', '18000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customerinfo`
--
ALTER TABLE `customerinfo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `customerinfo`
--
ALTER TABLE `customerinfo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
