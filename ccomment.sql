-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2018 at 03:07 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ccomment`
--

-- --------------------------------------------------------

--
-- Table structure for table `comme`
--

CREATE TABLE `comme` (
  `comment_No` int(11) NOT NULL,
  `content` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comme`
--

INSERT INTO `comme` (`comment_No`, `content`, `username`) VALUES
(3, 'Testing comment 1', 'Ashen'),
(4, 'Testing comment 2', 'Amila'),
(5, 'Testing comment 3', 'Bimsara'),
(7, 'Testing comment 7', 'Bimsara');

-- --------------------------------------------------------

--
-- Table structure for table `uuser`
--

CREATE TABLE `uuser` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uuser`
--

INSERT INTO `uuser` (`username`, `password`) VALUES
('Ashen', 'amila'),
('Amila', 'ashen'),
('Tharushi', 'bimsara'),
('Bimsara', 'tharushi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comme`
--
ALTER TABLE `comme`
  ADD PRIMARY KEY (`comment_No`);

--
-- Indexes for table `uuser`
--
ALTER TABLE `uuser`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comme`
--
ALTER TABLE `comme`
  MODIFY `comment_No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
