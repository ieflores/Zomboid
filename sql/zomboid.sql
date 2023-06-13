-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2023 at 06:17 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zomboid`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(75) NOT NULL,
  `pword` varchar(20) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `school` text NOT NULL,
  `class` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `pword`, `fname`, `lname`, `position`, `school`, `class`) VALUES
(2, 'michaelr@apc.edu.ph', 'wew', 'michael', 'rabo', 'faculty', '', ''),
(3, 'ryan@apc.edu.ph', 'wews', 'ryan', 'candari', 'guidance', '', ''),
(2020123789, 'jpcudal@student.apc.edu.ph', 'cudal123', 'joshua', 'cudal', 'student', 'socit', 'sf201'),
(2020141242, 'ilflores@student.apc.edu.ph', '12345', 'ivan', 'flores', 'student', 'socit', 'ss201'),
(2020321954, 'paco@student.apc.edu.ph', 'co123', 'peter', 'co', 'student', 'socit', 'mi202');

-- --------------------------------------------------------

--
-- Table structure for table `appoint`
--

CREATE TABLE `appoint` (
  `id` int(11) NOT NULL,
  `aid` int(11) NOT NULL,
  `aname` text NOT NULL,
  `aemail` text NOT NULL,
  `sbj` text NOT NULL,
  `prem` varchar(255) NOT NULL,
  `tm` time NOT NULL,
  `dt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `sbj` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `filename` varchar(255) NOT NULL,
  `dt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id` int(11) NOT NULL,
  `iid` int(11) NOT NULL,
  `iname` varchar(150) NOT NULL,
  `iemail` varchar(150) NOT NULL,
  `isbj` varchar(150) NOT NULL,
  `imsg` text NOT NULL,
  `idt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appoint`
--
ALTER TABLE `appoint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2020321955;

--
-- AUTO_INCREMENT for table `appoint`
--
ALTER TABLE `appoint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
