-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2021 at 03:46 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `Account_ID` int(11) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`Account_ID`, `First_Name`, `Last_Name`, `Email`, `Password`, `Role`) VALUES
(1, 'ca', 'ca', 'caca@umn.ac.id', '$2y$10$gmTe4cY25QJ5JK0Soo/X2OT4fH9kW3OBlV09Ot3U5QMAc80gS7fcW', 'user'),
(5, 'rul', 'rek', 'rulrek@gmail.com', '$2y$10$SpjNOrCGsn0WhNV1Lk1qGOm6t8eumCheo/kb/KZOdZxkCnVevbeIG', 'admin\r\n'),
(6, 'George', 'Marcellino Jo', 'georgemarcellin00@gmail.com', '$2y$10$xZslrBrMSE6ZSqS0rBt8S.4753FouOAeXnz1tU5D.YlSRo7eHXkPi', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `booking_listing`
--

CREATE TABLE `booking_listing` (
  `Booking_ID` int(11) NOT NULL,
  `Requester` varchar(255) NOT NULL,
  `Requested_Facility` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Start_Time` time NOT NULL,
  `End_Time` time NOT NULL,
  `Facility_ID` int(11) NOT NULL,
  `Account_ID` int(11) NOT NULL,
  `Request_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `facility_listing`
--

CREATE TABLE `facility_listing` (
  `Facility_ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `request_listing`
--

CREATE TABLE `request_listing` (
  `Request_ID` int(11) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Requested_Facility` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Start_Time` time NOT NULL,
  `End_Time` time NOT NULL,
  `Facility_ID` int(11) NOT NULL,
  `Account_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`Account_ID`);

--
-- Indexes for table `booking_listing`
--
ALTER TABLE `booking_listing`
  ADD PRIMARY KEY (`Booking_ID`),
  ADD KEY `Account_ID` (`Account_ID`),
  ADD KEY `Facility_ID` (`Facility_ID`),
  ADD KEY `Request_ID` (`Request_ID`);

--
-- Indexes for table `facility_listing`
--
ALTER TABLE `facility_listing`
  ADD PRIMARY KEY (`Facility_ID`);

--
-- Indexes for table `request_listing`
--
ALTER TABLE `request_listing`
  ADD PRIMARY KEY (`Request_ID`),
  ADD KEY `Facility_ID` (`Facility_ID`),
  ADD KEY `Account_ID` (`Account_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `Account_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `booking_listing`
--
ALTER TABLE `booking_listing`
  MODIFY `Booking_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `facility_listing`
--
ALTER TABLE `facility_listing`
  MODIFY `Facility_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `request_listing`
--
ALTER TABLE `request_listing`
  MODIFY `Request_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking_listing`
--
ALTER TABLE `booking_listing`
  ADD CONSTRAINT `booking_listing_ibfk_1` FOREIGN KEY (`Account_ID`) REFERENCES `account` (`Account_ID`),
  ADD CONSTRAINT `booking_listing_ibfk_2` FOREIGN KEY (`Facility_ID`) REFERENCES `facility_listing` (`Facility_ID`),
  ADD CONSTRAINT `booking_listing_ibfk_3` FOREIGN KEY (`Request_ID`) REFERENCES `request_listing` (`Request_ID`);

--
-- Constraints for table `request_listing`
--
ALTER TABLE `request_listing`
  ADD CONSTRAINT `request_listing_ibfk_1` FOREIGN KEY (`Facility_ID`) REFERENCES `facility_listing` (`Facility_ID`),
  ADD CONSTRAINT `request_listing_ibfk_2` FOREIGN KEY (`Account_ID`) REFERENCES `account` (`Account_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
