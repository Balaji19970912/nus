-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2022 at 05:04 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nusconsultinggroup`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminusertable`
--

CREATE TABLE `adminusertable` (
  `id` int(11) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `roleId` int(20) NOT NULL,
  `userStatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `clientcompanydata`
--

CREATE TABLE `clientcompanydata` (
  `id` int(11) NOT NULL,
  `parentcompany` varchar(255) NOT NULL,
  `clientcompany` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clientcompanydata`
--

INSERT INTO `clientcompanydata` (`id`, `parentcompany`, `clientcompany`, `country`) VALUES
(9, 'Shell Global', 'Shell Global', 'United States'),
(10, 'Shell Global', 'Shell UK', 'United Kingdom'),
(11, 'Shell UK', 'Shell England', 'United Kingdom'),
(12, 'Shell Global', 'Shell india', 'India');

-- --------------------------------------------------------

--
-- Table structure for table `clientuserdata`
--

CREATE TABLE `clientuserdata` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `emailId` varchar(255) NOT NULL,
  `accountstatus` varchar(255) NOT NULL,
  `client` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nususerdata`
--

CREATE TABLE `nususerdata` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `emailId` varchar(255) NOT NULL,
  `accountstatus` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `parentcompany` varchar(255) NOT NULL,
  `businessunit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parentcompanydata`
--

CREATE TABLE `parentcompanydata` (
  `id` int(11) NOT NULL,
  `parentcompany` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parentcompanydata`
--

INSERT INTO `parentcompanydata` (`id`, `parentcompany`) VALUES
(1, 'Shell Global'),
(2, 'Acme.co'),
(3, 'Big Bussiness solution'),
(4, 'Shell India'),
(5, 'qualesce'),
(6, 'Shell UK'),
(7, 'a'),
(8, 'Shell');

-- --------------------------------------------------------

--
-- Table structure for table `parentuserdata`
--

CREATE TABLE `parentuserdata` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `emailId` varchar(255) NOT NULL,
  `accountstatus` varchar(255) NOT NULL,
  `parent` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminusertable`
--
ALTER TABLE `adminusertable`
  ADD PRIMARY KEY (`id`,`emailid`);

--
-- Indexes for table `clientcompanydata`
--
ALTER TABLE `clientcompanydata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientuserdata`
--
ALTER TABLE `clientuserdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nususerdata`
--
ALTER TABLE `nususerdata`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`emailId`);

--
-- Indexes for table `parentcompanydata`
--
ALTER TABLE `parentcompanydata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parentuserdata`
--
ALTER TABLE `parentuserdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminusertable`
--
ALTER TABLE `adminusertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clientcompanydata`
--
ALTER TABLE `clientcompanydata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `clientuserdata`
--
ALTER TABLE `clientuserdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nususerdata`
--
ALTER TABLE `nususerdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `parentcompanydata`
--
ALTER TABLE `parentcompanydata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `parentuserdata`
--
ALTER TABLE `parentuserdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
