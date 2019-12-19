-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2019 at 03:11 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `collegeraytestdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE `colleges` (
  `idColleges` int(11) NOT NULL,
  `nameCollege` longtext NOT NULL,
  `location` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`idColleges`, `nameCollege`, `location`) VALUES
(1, 'IIT Bombay', 'Mumbai Maharashtra India'),
(2, 'SVNIT Surat', 'Surat Gujarat India'),
(3, 'IIT Delhi', 'Delhi India'),
(4, 'IIT Roorkee', 'Roorkee Uttarakhand India'),
(5, 'NIT Trichy', 'Tiruchirappalli Tamil Nadu India'),
(6, 'NIT Surathkal', 'Surathkal Karnataka India');

-- --------------------------------------------------------

--
-- Table structure for table `rank2018`
--

CREATE TABLE `rank2018` (
  `idMain` int(8) NOT NULL,
  `roundNo` int(2) NOT NULL,
  `name` tinytext NOT NULL,
  `branch` tinytext NOT NULL,
  `quota` varchar(4) NOT NULL,
  `category` tinytext NOT NULL,
  `seatPool` tinytext NOT NULL,
  `opening` int(8) NOT NULL,
  `closing` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`idColleges`);

--
-- Indexes for table `rank2018`
--
ALTER TABLE `rank2018`
  ADD PRIMARY KEY (`idMain`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `colleges`
  MODIFY `idColleges` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rank2018`
--
ALTER TABLE `rank2018`
  MODIFY `idMain` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
