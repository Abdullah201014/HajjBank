-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 02, 2018 at 01:10 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hajj`
--

-- --------------------------------------------------------

--
-- Table structure for table `About`
--

CREATE TABLE `About` (
  `id` int(11) NOT NULL,
  `vision` varchar(200) NOT NULL,
  `des` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `About`
--

INSERT INTO `About` (`id`, `vision`, `des`) VALUES
(1, 'Our vision is to provide new and creative payment method.', 'desssss');

-- --------------------------------------------------------

--
-- Table structure for table `Member`
--

CREATE TABLE `Member` (
  `FName` varchar(15) NOT NULL,
  `LName` varchar(15) NOT NULL,
  `mid` int(7) NOT NULL,
  `Role` varchar(15) NOT NULL DEFAULT 'User',
  `BirthDate` date DEFAULT NULL,
  `JoinDate` date DEFAULT NULL,
  `UserName` varchar(18) NOT NULL,
  `password` varchar(18) NOT NULL,
  `Mobile` int(10) NOT NULL,
  `City` varchar(15) NOT NULL,
  `Country` varchar(15) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `balance` double NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Member`
--

INSERT INTO `Member` (`FName`, `LName`, `mid`, `Role`, `BirthDate`, `JoinDate`, `UserName`, `password`, `Mobile`, `City`, `Country`, `Email`, `balance`) VALUES
('omarine', 'alaafie', 80187, 'Admin', NULL, NULL, 'omarinealaafie', 'omarinealaafie', 0, '', '', '', 20),
('sharifa', 'alghowinem', 241162, 'User', NULL, NULL, 'sharifaalghowinem', 'sharifaalghowinem', 0, '', '', '', 150),
('Abdullah', 'Alkaff', 1234567, 'Admin', '1956-10-10', NULL, '123', '123', 569814422, 'Riyadh', 'SA', '214111057@psu.edu.sa', 3434560),
('najla', 'althuniyan', 1515069, 'User', NULL, NULL, 'najlaalthuniyan', 'najlaalthuniyan', 0, '', '', '', 0),
('malak', 'alshedokhi', 7299021, 'User', NULL, NULL, 'malakalshedokhi', 'malakalshedokhi', 0, '', '', '', 990),
('reham', 'alskireen', 7357473, 'User', NULL, NULL, 'rehamalskireen', 'rehamalskireen', 0, '', '', '', 3456);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `About`
--
ALTER TABLE `About`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Member`
--
ALTER TABLE `Member`
  ADD PRIMARY KEY (`mid`),
  ADD UNIQUE KEY `UserName` (`UserName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `About`
--
ALTER TABLE `About`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Member`
--
ALTER TABLE `Member`
  MODIFY `mid` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8532034;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
