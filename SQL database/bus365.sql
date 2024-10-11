-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2024 at 06:01 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bus365`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `adminName` varchar(100) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `adminName`, `userName`, `password`) VALUES
(1, 'Sandeepa', 'sandeepa', 'sandeepa123'),
(2, 'Inosh', 'inosh', 'inosh123');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `busID` int(11) NOT NULL,
  `busNum` varchar(100) NOT NULL,
  `busOwner` varchar(100) NOT NULL,
  `route` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `seatCount` int(11) NOT NULL,
  `status` varchar(100) NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`busID`, `busNum`, `busOwner`, `route`, `price`, `seatCount`, `status`, `time`) VALUES
(1, 'LP-1234', 'Ransara', 'Tangalle-Colombo', 120, 50, 'Available', '10.00 A.M.');

-- --------------------------------------------------------

--
-- Table structure for table `busdriver`
--

CREATE TABLE `busdriver` (
  `driverId` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pNum` varchar(11) NOT NULL,
  `dob` date NOT NULL,
  `licenseId` int(11) NOT NULL,
  `regDate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `busdriver`
--

INSERT INTO `busdriver` (`driverId`, `firstName`, `lastName`, `address`, `pNum`, `dob`, `licenseId`, `regDate`) VALUES
(1, 'Savin', 'Udana', 'Makandura,Matara', '0729292282', '1999-10-12', 2147483647, '2024-10-07');

-- --------------------------------------------------------

--
-- Table structure for table `busprice`
--

CREATE TABLE `busprice` (
  `busID` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `busprice`
--

INSERT INTO `busprice` (`busID`, `price`) VALUES
(1, 120);

-- --------------------------------------------------------

--
-- Table structure for table `customersupporter`
--

CREATE TABLE `customersupporter` (
  `supId` int(11) NOT NULL,
  `firstName` varchar(25) NOT NULL,
  `lastName` varchar(25) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pNum` varchar(11) NOT NULL,
  `dob` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customersupporter`
--

INSERT INTO `customersupporter` (`supId`, `firstName`, `lastName`, `address`, `pNum`, `dob`) VALUES
(1, 'Wasika', 'Anusanga', 'Dickwella,Matara', '0719220335', '2003-05-12');

-- --------------------------------------------------------

--
-- Table structure for table `paymentdetails`
--

CREATE TABLE `paymentdetails` (
  `payCardId` int(11) NOT NULL,
  `cardNum` bigint(20) NOT NULL,
  `fullName` varchar(100) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `cvv` int(11) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `paymentdetails`
--

INSERT INTO `paymentdetails` (`payCardId`, `cardNum`, `fullName`, `month`, `year`, `cvv`, `userId`) VALUES
(1, 1234567891234567, 'Ransara Matheesha', 12, 2025, 432, 1);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `msg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `name`, `email`, `msg`) VALUES
(1, 'Shanaka', 'shanaka@gmail.com', 'How to register?');

-- --------------------------------------------------------

--
-- Table structure for table `seatbooks`
--

CREATE TABLE `seatbooks` (
  `bookingId` int(11) NOT NULL,
  `seatNum` varchar(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `busId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `Location` text NOT NULL,
  `Destination` text NOT NULL,
  `d_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seatbooks`
--

INSERT INTO `seatbooks` (`bookingId`, `seatNum`, `date`, `busId`, `userId`, `Location`, `Destination`, `d_date`) VALUES
(1, '1', '2024-10-07', 1, 1, 'Tangalle', 'Colombo', '2024-10-09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(120) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userName`, `firstName`, `lastName`, `email`, `password`) VALUES
(1, 'ransara', 'Ransara', 'Matheesha', 'ransara@gmail.com', 'ransara123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`busID`);

--
-- Indexes for table `busdriver`
--
ALTER TABLE `busdriver`
  ADD PRIMARY KEY (`driverId`);

--
-- Indexes for table `busprice`
--
ALTER TABLE `busprice`
  ADD PRIMARY KEY (`busID`);

--
-- Indexes for table `customersupporter`
--
ALTER TABLE `customersupporter`
  ADD PRIMARY KEY (`supId`);

--
-- Indexes for table `paymentdetails`
--
ALTER TABLE `paymentdetails`
  ADD PRIMARY KEY (`payCardId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `seatbooks`
--
ALTER TABLE `seatbooks`
  ADD PRIMARY KEY (`bookingId`),
  ADD KEY `userId` (`userId`),
  ADD KEY `busId` (`busId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `busID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `busdriver`
--
ALTER TABLE `busdriver`
  MODIFY `driverId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `busprice`
--
ALTER TABLE `busprice`
  MODIFY `busID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customersupporter`
--
ALTER TABLE `customersupporter`
  MODIFY `supId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `paymentdetails`
--
ALTER TABLE `paymentdetails`
  MODIFY `payCardId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `seatbooks`
--
ALTER TABLE `seatbooks`
  MODIFY `bookingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `paymentdetails`
--
ALTER TABLE `paymentdetails`
  ADD CONSTRAINT `paymentdetails_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`);

--
-- Constraints for table `seatbooks`
--
ALTER TABLE `seatbooks`
  ADD CONSTRAINT `seatbooks_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
