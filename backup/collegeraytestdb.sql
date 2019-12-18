-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2019 at 02:36 PM
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
-- Table structure for table `cutoff`
--

CREATE TABLE `cutoff` (
  `idCutoff` int(11) NOT NULL,
  `nameCollege` longtext NOT NULL,
  `branch` longtext DEFAULT NULL,
  `round` int(2) DEFAULT NULL,
  `year` int(5) DEFAULT NULL,
  `cutoffRank` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cutoff`
--

INSERT INTO `cutoff` (`idCutoff`, `nameCollege`, `branch`, `round`, `year`, `cutoffRank`) VALUES
(1, 'IIT Bombay', 'Computer Science and Engineering', 1, 2019, 63),
(2, 'IIT Bombay', 'Computer Science and Engineering', 2, 2019, 63),
(3, 'IIT Bombay', 'Computer Science and Engineering', 3, 2019, 63),
(4, 'IIT Bombay', 'Computer Science and Engineering', 4, 2019, 63),
(5, 'IIT Bombay', 'Computer Science and Engineering', 5, 2019, 63),
(6, 'IIT Bombay', 'Mechanical Engineering', 1, 2019, 998),
(7, 'IIT Bombay', 'Mechanical Engineering', 2, 2019, 998),
(8, 'IIT Bombay', 'Mechanical Engineering', 3, 2019, 998),
(9, 'IIT Bombay', 'Mechanical Engineering', 4, 2019, 998),
(10, 'IIT Bombay', 'Mechanical Engineering', 5, 2019, 998),
(11, 'SVNIT Surat', 'Computer Science and Engineering', 1, 2019, 5338),
(12, 'SVNIT Surat', 'Computer Science and Engineering', 2, 2019, 5726),
(13, 'SVNIT Surat', 'Computer Science and Engineering', 3, 2019, 5726),
(14, 'SVNIT Surat', 'Computer Science and Engineering', 4, 2019, 5760),
(15, 'SVNIT Surat', 'Computer Science and Engineering', 5, 2019, 5760);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
  ADD PRIMARY KEY (`idColleges`);

--
-- Indexes for table `cutoff`
--
ALTER TABLE `cutoff`
  ADD PRIMARY KEY (`idCutoff`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `colleges`
  MODIFY `idColleges` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cutoff`
--
ALTER TABLE `cutoff`
  MODIFY `idCutoff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
