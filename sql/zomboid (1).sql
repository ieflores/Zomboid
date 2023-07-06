-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2023 at 04:35 PM
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
  `email` varchar(255) NOT NULL,
  `pword` varchar(20) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `email`, `pword`, `fname`, `mname`, `lname`, `position`, `course`) VALUES
(2014100533, 'mcmedina2@student.apc.edu.ph', '21', 'marcus jorell', 'contreras', 'medina', 'student', 'bsitmi'),
(2015300024, 'dlmedina@student.apc.edu.ph', '20', 'darcy kaizer', 'lopera', 'medina', 'student', 'bscsss'),
(2019100129, 'jrfrancisco@student.apc.edu.ph', '12', 'jan terence', 'reyes', 'francisco', 'student', 'bsitmi'),
(2019100240, 'snpalacio@student.apc.edu.ph', '25', 'sim paul', 'nobles', 'palacio', 'student', 'bscsss'),
(2019100330, 'dmmanaay2@student.apc.edu.ph', '18', 'denzel edward', 'mendoza', 'mana-ay', 'student', 'bscssf'),
(2019100337, 'kgcarangan@student.apc.edu.ph', '4', 'ken angelo', 'gler', 'carangan', 'student', 'bsitmi'),
(2019100385, 'jcesguerra@student.apc.edu.ph', '9', 'jan red', 'castaneda', 'esguerra', 'student', 'bcsss'),
(2020123456, 'michaelr@student.apc.edu.ph', 'wew', 'michael angelo', '', 'rabo', 'faculty', ''),
(2020123789, 'jpcudal@student.apc.edu.ph', 'cudal123', 'joshua', 'palomar', 'cudal', 'student', 'bscssf'),
(2020140157, 'jbroxas@student.apc.edu.ph', '30', 'joshua timothy', 'breton', 'roxas', 'student', 'bscssf'),
(2020140189, 'kvcadenas@student.apc.edu.ph', '2', 'kurt jordan', 'virador', 'cadenas', 'student', 'bscsss'),
(2020140210, 'etdahinao@student.apc.edu.ph', '7', 'earl eufimeah', 'tolop', 'dahinao', 'student', 'bscsss'),
(2020140223, 'nbsinaguinan@student.apc.edu.ph', '32', 'nathan allen', 'basa', 'sinaguinan', 'student', 'bscssf'),
(2020140231, 'grregalado@student.apc.edu.ph', '27', 'guiler marion', 'ruffy', 'regalado', 'student', 'bscsss'),
(2020140235, 'b-cruz@student.apc.edu.ph', '6', 'bea angeline', '', 'cruz', 'student', 'bscsss'),
(2020140245, 'plmeltran@student.apc.edu.ph', '23', 'patricia anne', 'lamonte', 'meltran', 'student', 'bscsss'),
(2020140400, 'jtverde@student.apc.edu.ph', '35', 'jose norberto', 'talha', 'verde', 'student', 'bscsss'),
(2020140411, 'jclebag@student.apc.edu.ph', '17', 'joseph adrian', 'callejo', 'lebag', 'student', 'bscsss'),
(2020140426, 'abdevera@student.apc.edu.ph', '8', 'alfonzo louise', 'bania', 'de vera', 'student', 'bscsss'),
(2020140520, 'nssioco@student.apc.edu.ph', '33', 'noreen keziah', 'salido', 'sioco', 'student', 'bscsss'),
(2020140529, 'jtpedrola@student.apc.edu.ph', '26', 'janssen', 'tactacon', 'pedrola', 'student', 'bscsss'),
(2020140640, 'nagarcia@student.apc.edu.ph', '13', 'neil albert', 'atienza', 'garcia', 'student', 'bscssf'),
(2020140877, 'prfontiveros@student.apc.edu.ph', '11', 'pallas dale', 'romero', 'fontiveros', 'student', 'bscssf'),
(2020141075, 'bcfabellore@student.apc.edu.ph', '10', 'bryan gel', 'corpuz', 'fabellore', 'student', 'bscssf'),
(2020141077, 'nnlavarias@student.apc.edu.ph', '15', 'neil gareth', '', 'lavarias', 'student', 'bscsss'),
(2020141125, 'mpgiba@student.apc.edu.ph', '14', 'mark gerald', 'paculan', 'giba', 'student', 'bscsss'),
(2020141130, 'gmperez@student.apc.edu.ph', '27', 'gabriel luis antonio', 'melendres', 'perez', 'student', 'bscssf'),
(2020141162, 'jzsia@student.apc.edu.ph', '31', 'jamir', 'zapata', 'sia', 'student', 'bscssf'),
(2020141242, 'ilflores@student.apc.edu.ph', '12345', 'ivan emmanuel', 'lopez', 'flores', 'student', 'bscsss'),
(2020141243, 'jmnavarrete@student.apc.edu.ph', '24', 'jan patrick', 'magsaysay', 'navarrete', 'student', 'bscsss'),
(2020141254, 'ssjbinay@student.apc.edu.ph', '1', 'stefano franco', 'san juan', 'binay', 'student', 'bscsss'),
(2020141263, 'rscandari@student.apc.edu.ph', 'wews', 'ryan gabriel', 'sanchez', 'candari', 'student', 'bscsss'),
(2020141269, 'pbricafort@student.apc.edu.ph', '29', 'princess nicole', 'bendisula', 'ricafort', 'student', 'bscssf'),
(2020141279, 'cgmelo@student.apc.edu.ph', '22', 'corneliani jon', 'gertes', 'melo', 'student', 'bscssf'),
(2020141301, 'cbcapagngan@student.apc.edu.ph', '3', 'churchill', 'bagumbayan', 'capagngan', 'student', 'bscsss'),
(2020141338, 'imtutor@student.apc.edu.ph', '34', 'isiah jade', 'montanez', 'tutor', 'student', 'bscsss'),
(2020141520, 'dvcastilloii@student.apc.edu.ph', '5', 'dennyson', 'valerio', 'castillo II', 'student', 'bscssf'),
(2020241699, 'jmmanahan@student.apc.edu.ph', '19', 'john angel', 'mistica', 'manahan', 'student', 'bscsss'),
(2020321954, 'peterc@apc.edu.ph', 'co123', 'peter angelo', '', 'co', 'guidance', '');

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

--
-- Dumping data for table `appoint`
--

INSERT INTO `appoint` (`id`, `aid`, `aname`, `aemail`, `sbj`, `prem`, `tm`, `dt`) VALUES
(4, 2020141242, 'ivan flores', 'ilflores@student.apc.edu.ph', 'Subject 1', 'School Premise', '14:20:00', '2023-06-16'),
(5, 2020141242, 'ivan flores', 'ilflores@student.apc.edu.ph', 'Subject 1', 'School Premise', '14:20:00', '2023-06-16'),
(6, 2020141242, 'ivan flores', 'ilflores@student.apc.edu.ph', 'Subject 1', 'School Premise', '14:20:00', '2023-06-16'),
(7, 2020141242, 'ivan flores', 'ilflores@student.apc.edu.ph', 'Subject 1', 'School Premise', '14:20:00', '2023-06-16'),
(8, 2020141242, 'ivan flores', 'ilflores@student.apc.edu.ph', 'Subject 2', 'School Premise', '14:21:00', '2023-06-16'),
(9, 2020141242, 'ivan flores', 'ilflores@student.apc.edu.ph', 'Subject 1', 'School Premise', '15:22:00', '2023-06-16'),
(10, 2020141242, 'ivan flores', 'ilflores@student.apc.edu.ph', 'Subject 2', 'Online', '14:25:00', '2023-06-16'),
(11, 2020141242, 'ivan flores', 'ilflores@student.apc.edu.ph', 'Subject 1', 'School Premise', '16:23:00', '2023-06-16'),
(12, 2020141242, 'ivan flores', 'ilflores@student.apc.edu.ph', 'Subject 2', 'Online', '15:24:00', '2023-06-16'),
(13, 2020141242, 'ivan flores', 'ilflores@student.apc.edu.ph', 'Subject 1', 'School Premise', '14:26:00', '2023-06-16'),
(14, 2020141242, 'ivan flores', 'ilflores@student.apc.edu.ph', 'Subject 2', 'School Premise', '16:27:00', '2023-06-16'),
(15, 2020141242, 'ivan flores', 'ilflores@student.apc.edu.ph', 'Subject 2', 'Online', '14:28:00', '2023-06-15'),
(16, 2020141242, 'ivan flores', 'ilflores@student.apc.edu.ph', 'Subject 2', 'School Premise', '16:30:00', '2023-06-16'),
(17, 2020141242, 'ivan flores', 'ilflores@student.apc.edu.ph', 'Subject 1', 'School Premise', '01:30:00', '2023-07-04');

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

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `sbj`, `msg`, `filename`, `dt`) VALUES
(3, 'sfgsdfa', 'vdsva', 'guidance-poster.png', '2023-06-14 03:01:08'),
(4, 'dasdvav', 'sagvaasd', '100t.jpg', '2023-06-14 03:18:39'),
(5, 'fadbaffas', 'afadbbfd', '0a5d44bfb28cdcaf068aaf03dc55549f.jpg', '2023-06-14 03:26:59'),
(6, 'wow', 'hello', 'club-room.png', '2023-07-04 10:33:35');

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
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`id`, `iid`, `iname`, `iemail`, `isbj`, `imsg`, `idt`) VALUES
(3, 2020141242, 'ivan flores', 'ilflores@student.apc.edu.ph', 'Financial Assistance', 'hello world', '2023-07-04 10:32:04');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
