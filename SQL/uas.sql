-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2021 at 06:32 PM
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
(1, 'Luffy', 'Uzumaki', 'admin@umn.ac.id', '$2y$10$Jrmf0BQeskfdxRuYxAiwWOsDjGUPCtFJY3VcHr5.ZuU6dQUcES14m', 'admin'),
(2, 'Management', 'Core', 'management@umn.ac.id', '$2y$10$4mnnTy21dUgCl2X2ZUGoM.fINRbHvJ4GEqHEdAFfoFnNgXwCbqSH.', 'management'),
(3, 'Caca', 'Opium', 'caca@umn.ac.id', '$2y$10$9KaJ3.4kdubyr9/kBPXkx.52Vb3l6mdwwbgKb6vLXL/To2B0u1Wwm', 'user'),
(4, 'George', 'Marcellino Jo', 'georgemarcellin00@gmail.com', '$2y$10$lrZHLOwNK1PnxOWXf0udyOtQxTpMluz2ey1qUIVVgkjLas0FP8xYK', 'user');

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

--
-- Dumping data for table `facility_listing`
--

INSERT INTO `facility_listing` (`Facility_ID`, `Name`, `Image`, `Detail`) VALUES
(2, 'meeting room', 'assets/poster/meeting-room1.jpg', 'meeting room memiliki dinding yang berlapis plastik, kemudian lantai nya menggunakan semen 3 roda GG');

-- --------------------------------------------------------

--
-- Table structure for table `request_listing`
--

CREATE TABLE `request_listing` (
  `Request_ID` int(11) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Start_Time` time NOT NULL,
  `End_Time` time NOT NULL,
  `Facility_ID` int(11) NOT NULL,
  `Account_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request_listing`
--

INSERT INTO `request_listing` (`Request_ID`, `Status`, `Date`, `Start_Time`, `End_Time`, `Facility_ID`, `Account_ID`) VALUES
(5, 'Pending', '2021-12-23', '22:22:00', '22:22:00', 2, 4),
(6, 'Pending', '2021-12-17', '02:50:00', '22:56:00', 2, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`Account_ID`);

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
  MODIFY `Account_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `facility_listing`
--
ALTER TABLE `facility_listing`
  MODIFY `Facility_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `request_listing`
--
ALTER TABLE `request_listing`
  MODIFY `Request_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

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
