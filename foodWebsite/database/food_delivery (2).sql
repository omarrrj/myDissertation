-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2023 at 07:46 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `column_n` varchar(500) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `column_n`, `email`, `name`, `phone`) VALUES
(1, 'Sample Column', 'admin@example.com', 'Admin Name', 1234567890);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `food_item_id` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `total_food_item` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`food_item_id`, `id`, `total_food_item`) VALUES
(1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `userid` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `delivery_date` date DEFAULT NULL,
  `time` varchar(10) DEFAULT NULL,
  `orderid` int(11) DEFAULT NULL,
  `delivery_driverid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`userid`, `id`, `address`, `delivery_date`, `time`, `orderid`, `delivery_driverid`) VALUES
(1, 1, '123 Main St', '2023-04-12', '15:30', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `delivery_driver`
--

CREATE TABLE `delivery_driver` (
  `id` int(11) NOT NULL,
  `adminID` int(11) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `name` varchar(55) DEFAULT NULL,
  `national_id` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `delivery_driver`
--

INSERT INTO `delivery_driver` (`id`, `adminID`, `phone`, `email`, `name`, `national_id`) VALUES
(1, 1, '555-123-4567', 'driver@example.com', 'Driver Name', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `adminID` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `ID` int(11) NOT NULL,
  `star` int(11) DEFAULT NULL,
  `review` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`adminID`, `userid`, `ID`, `star`, `review`) VALUES
(1, 1, 1, 5, 'Great service and fast delivery!');

-- --------------------------------------------------------

--
-- Table structure for table `food_item`
--

CREATE TABLE `food_item` (
  `adminid` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `orderid` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `title` varchar(55) DEFAULT NULL,
  `descriptions` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `food_item`
--

INSERT INTO `food_item` (`adminid`, `userid`, `orderid`, `id`, `title`, `descriptions`) VALUES
(1, 1, 1, 1, 'Pizza', 'Delicious pepperoni pizza');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `AdminId` int(11) DEFAULT NULL,
  `userID` int(11) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `Time` varchar(55) DEFAULT NULL,
  `order_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`AdminId`, `userID`, `id`, `Time`, `order_date`) VALUES
(1, 1, 1, '14:30', '2023-04-11');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `payment_date` date DEFAULT NULL,
  `time` varchar(10) DEFAULT NULL,
  `total_amount` int(11) DEFAULT NULL,
  `orderID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `userid`, `payment_date`, `time`, `total_amount`, `orderID`) VALUES
(1, 1, '2023-04-11', '14:35', 25, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(55) DEFAULT NULL,
  `phone` varchar(55) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `address`, `email`, `password`) VALUES
(1, 'test1', '07982364712', '21 hule', 'test@gmail.com', '$2y$10$X/jhyfh/wCLG/4H/045Wz.aVBBJgmLQZJ4a.SdmIcbSH0dcn'),
(2, 'omar', '07555676312', '21 hulme', 'omar@gmail.com', '$2y$10$3UT5y9vnxL0FLp7n.cpJ/uy4JkhU5/65JHShwKKbmzwquICS'),
(3, 'suad', '07823434343', '121 frh', 'suad@gmail.com', '$2y$10$uZ1IMhjV0TIb739qTR4V1ugWCtqwIH8VA3qtLinEBlWd5f0N'),
(4, '123', '122', '1221', '123@hotmail.com', '$2y$10$i8/D2.R7qhXhSripCdwd3OQsxoFali/gPAnpKhrDaFuLgp3e'),
(5, 'daed', '1234445566', '32 hulem', 'omar21@gmail.com', '$2y$10$lXj58tlgPfE6cYcNsH6T9.6cGW8JPoJ78TVjeA9i7dajmt3O'),
(6, 'mustafa', '01612478392', '21 wilmslow', 'mustafa@outlook.com', '$2y$10$8sktImjno.E8eRHQ4me20OifeIFVeLHlNLxxuKcT4o0TSrw3'),
(7, 'maryam', '01612320051', '32 hulme', 'maryam@hotmail.com', '$2y$10$5qhhBd70A2A9oSukKviEourTICuHX1R6obwgw6LyfVQYu7br'),
(8, 'amina', '01612320061', '45 Hulme', 'amina@email.com', '12345'),
(9, 'ali', '01612320051', '3444 hulme', 'ali@hotmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_driver`
--
ALTER TABLE `delivery_driver`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `feedback_adminfk` (`adminID`);

--
-- Indexes for table `food_item`
--
ALTER TABLE `food_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_adminfk` FOREIGN KEY (`adminID`) REFERENCES `admin` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
