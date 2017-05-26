-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2016 at 06:11 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `D_Id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Medical_History` mediumtext NOT NULL,
  `Age` tinyint(3) UNSIGNED NOT NULL,
  `Blood_Group` varchar(10) NOT NULL,
  `Number` bigint(5) UNSIGNED NOT NULL,
  `Address` longtext NOT NULL,
  `Last_Donation_Date` date NOT NULL,
  `Gender` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`D_Id`, `Name`, `Email`, `Medical_History`, `Age`, `Blood_Group`, `Number`, `Address`, `Last_Donation_Date`, `Gender`) VALUES
(1, 'Saral Uttamani', 'hello@saral.com', 'Not Really any.', 19, 'O+', 9930510003, 'ADDRESSSS', '2016-09-12', 'Male'),
(6, 'SARAL', 'ss@efv', 'as', 23, 'o8', 4423234, 'wddw', '2016-09-08', 'mgf'),
(7, 'ssdd', '', '', 0, '', 0, '', '0000-00-00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`D_Id`),
  ADD UNIQUE KEY `D_Id` (`D_Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
