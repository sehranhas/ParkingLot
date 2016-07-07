-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 07, 2016 at 10:47 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ParkingSpots`
--

-- --------------------------------------------------------

--
-- Table structure for table `ParkingSize`
--

CREATE TABLE IF NOT EXISTS `ParkingSize` (
`id` bigint(20) unsigned NOT NULL,
  `size` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ParkingSize`
--

INSERT INTO `ParkingSize` (`id`, `size`) VALUES
(1, 'Small'),
(2, 'Medium'),
(3, 'Large'),
(4, 'Super-Sized');

-- --------------------------------------------------------

--
-- Table structure for table `ParkingSpot`
--

CREATE TABLE IF NOT EXISTS `ParkingSpot` (
`id` bigint(20) unsigned NOT NULL,
  `size` int(11) NOT NULL,
  `licensePlate` varchar(255) DEFAULT NULL,
  `startTime` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `ParkingSpot`
--

INSERT INTO `ParkingSpot` (`id`, `size`, `licensePlate`, `startTime`) VALUES
(1, 1, NULL, NULL),
(2, 1, NULL, NULL),
(3, 2, NULL, NULL),
(4, 2, NULL, NULL),
(5, 2, NULL, NULL),
(6, 2, NULL, NULL),
(7, 2, NULL, NULL),
(8, 2, NULL, NULL),
(9, 2, NULL, NULL),
(10, 2, NULL, NULL),
(11, 2, NULL, NULL),
(12, 3, NULL, NULL),
(13, 3, NULL, NULL),
(14, 3, NULL, NULL),
(15, 3, NULL, NULL),
(16, 3, NULL, NULL),
(17, 3, NULL, NULL),
(18, 3, NULL, NULL),
(19, 4, NULL, NULL),
(20, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `Statistics`
--

CREATE TABLE IF NOT EXISTS `Statistics` (
`id` bigint(20) unsigned NOT NULL,
  `attr` varchar(255) DEFAULT NULL,
  `value` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ParkingSize`
--
ALTER TABLE `ParkingSize`
 ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `ParkingSpot`
--
ALTER TABLE `ParkingSpot`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `Statistics`
--
ALTER TABLE `Statistics`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ParkingSize`
--
ALTER TABLE `ParkingSize`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ParkingSpot`
--
ALTER TABLE `ParkingSpot`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `Statistics`
--
ALTER TABLE `Statistics`
MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
