-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 10, 2020 at 12:20 PM
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
-- Database: `ganna`
--
CREATE DATABASE IF NOT EXISTS `ganna` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ganna`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `sr.` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`sr.`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sr.`, `username`, `email`, `password`) VALUES
(1, 'bhai', 'pal@gmail.com', 'pal'),
(2, 'my', 'my@gmail.com', '098'),
(10, 'e', 'e@gmail.com', 'e'),
(9, 'd', 'd@gmail.com', 'd'),
(8, 'c', 'c@gmail.com', 'c'),
(12, 'h', 'h@gmail.com', 'h');

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

DROP TABLE IF EXISTS `music`;
CREATE TABLE IF NOT EXISTS `music` (
  `sr.` int(11) NOT NULL AUTO_INCREMENT,
  `music` varchar(40) NOT NULL,
  `singer` varchar(20) NOT NULL,
  `addedby` varchar(20) NOT NULL,
  PRIMARY KEY (`sr.`),
  UNIQUE KEY `music` (`music`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`sr.`, `music`, `singer`, `addedby`) VALUES
(10, '$$@ jite ji mere muzhko.mp3', 'gulprit', 'ritik');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `sr` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(11) NOT NULL,
  `password` varchar(23) NOT NULL,
  `lastname` varchar(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  PRIMARY KEY (`sr`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`sr`, `firstname`, `password`, `lastname`, `email`) VALUES
(1, 'ritik', '12345', 'pal', 'Ritikpal41@gmail.com'),
(7, 'hari ', '123', 'prasad', 'h@gmail.com'),
(12, 'arpit', '987', 'pal', 'babita@gmail.com'),
(13, 'apit', '678', 'pal', 'c@gmail.com'),
(14, 'babau', '7h7', 'pal', 'hg@gmail.com'),
(15, 'rtyu', '098', 'bv', 'hhjg@gmail.com'),
(16, 'hello', '678', 'pal', 'pal@gmail.com');
--
-- Database: `login`
--
CREATE DATABASE IF NOT EXISTS `login` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `login`;
--
-- Database: `my database`
--
CREATE DATABASE IF NOT EXISTS `my database` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `my database`;

-- --------------------------------------------------------

--
-- Table structure for table `my table`
--

DROP TABLE IF EXISTS `my table`;
CREATE TABLE IF NOT EXISTS `my table` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(12) NOT NULL,
  `class` varchar(12) NOT NULL,
  `roll no.` int(12) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
