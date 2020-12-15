-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 15, 2020 at 11:17 AM
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
  `sr` int(11) NOT NULL AUTO_INCREMENT,
  `music` varchar(100) NOT NULL,
  `addedby` varchar(20) NOT NULL,
  `Elbum` varchar(50) NOT NULL,
  `categery` varchar(50) NOT NULL,
  `musicpic` varchar(100) NOT NULL,
  PRIMARY KEY (`sr`),
  UNIQUE KEY `music` (`music`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`sr`, `music`, `addedby`, `Elbum`, `categery`, `musicpic`) VALUES
(38, '7_Days-KillahChipmunk-39171653.mp3', 'ritik', 'honey singh', 'top picks', 'ganna1.jpg'),
(39, 'Airhorn-SoundBible.com-975027544.mp3', 'ritik', 'sonu nigam', 'trending songs', 'ganna2.jpg'),
(40, 'A-Tone-His_Self-1266414414.mp3', 'ritik', 'honey singh', 'new release', 'ganna3.jpg'),
(41, 'Blood Splatters-SoundBible.com-125814492.mp3', 'ritik', 'arijit singh', 'new song', 'ganna4.jpg'),
(42, 'Earthquake-SoundBible.com-768042906.mp3', 'ritik', 'sonu nigam', 'top picks', 'ganna5.jpg'),
(43, 'Evil_Laugh_1-Timothy-64737261.mp3', 'ritik', 'honey singh', 'top picks', 'ganna7.jpg'),
(44, 'Explosion 4-SoundBible.com-1605604378.mp3', 'ritik', 'honey singh', 'trending songs', 'ganna9.jpg'),
(45, '3 Baby Cubs Grunt And Growl-SoundBible.com-1092741453.mp3', 'ritik', 'sonu nigam', 'top chart', 'crop_175x175_177698_1489055153.jpg'),
(46, '6_Cat_Meows-Mr_Smith-656280250.mp3', 'ritik', 'gulzar channi wal', 'trending songs', 'crop_175x175_1363122_1543315225.jpg'),
(47, '9mm Clip Load-SoundBible.com-1929588193.mp3', 'ritik', 'neha kakkar', 'new release', 'crop_175x175_3513376.jpg'),
(48, 'airplane-landing_daniel_simion.mp3', 'ritik', 'gulzar channi wal', 'trending songs', 'crop_175x175_3547856.jpg'),
(49, 'American Robin-SoundBible.com-98557118.mp3', 'ritik', 'honey singh', 'trending songs', 'crop_175x175_3548375.jpg'),
(50, 'Board Creak-SoundBible.com-2020134935 (1).mp3', 'ritik', 'neha kakkar', 'trending songs', 'crop_175x175_3548375.jpg'),
(51, 'Crackle-SoundBible.com-186260417.mp3', 'hari', 'neha kakkar', 'top chart', 'crop_175x175_3757700_1436265823.jpg'),
(52, 'Crushing Can On Head-SoundBible.com-1799632424.mp3', 'ritik', 'arijit singh', 'top picks', 'crop_175x175_14836711_1510162133.jpg'),
(53, 'Zombie Back From Dead-SoundBible.com-434320742.mp3', 'hari', 'badshah', 'top chart', 'size_m_1593616645.jpg'),
(54, 'Water-Lisa_Redfern-1888623835.mp3', 'ritik', 'neha kakkar', 'top charts', 'size_m_1590149832.jpg'),
(55, 'Turkey Gobble-SoundBible.com-1935194723.mp3', 'hari', 'arijit singh', 'top charts', 'size_m_1593616645.jpg'),
(56, 'Turkey Gobble-SoundBible.com-1935194723 (2).mp3', '', 'sonu nigam', 'new release', 'crop_175x175_1565775714_17016181.jpg'),
(57, 'Truck Air Brakes-SoundBible.com-1928162780.mp3', 'dhanajay', 'gulzar channi wal', 'top charts', 'ganna20.jpg'),
(58, 'Time Bomb-SoundBible.com-1222708645.mp3', 'hari', 'honey singh', 'new release', 'ganna19.jpg'),
(59, 'thought-Abby_E-331775585.mp3', 'hari', 'sonu nigam', 'new release', 'ganna18.jpg'),
(60, 'Ta Da-SoundBible.com-1884170640.mp3', 'ritik', 'gulzar channi wal', 'top charts', 'ganna17.jpg'),
(61, 'Surgery-SoundBible.com-1011795097.mp3', 'hari', 'arijit singh', 'top charts', 'ganna15.jpg'),
(62, 'soundbible-person-whistling-at-girl-daniel_simon.mp3', 'dhanajay', 'neha kakkar', 'new release', 'ganna14.jpg'),
(63, 'Shush Short-SoundBible.com-2068181934.mp3', 'dhanajay', 'neha kakkar', 'top picks', 'ganna11.jpg'),
(64, 'Phone Ringing-SoundBible.com-1358131443.mp3', 'dhanajay', 'arijit singh', 'top picks', 'ganna12.jpg');

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
