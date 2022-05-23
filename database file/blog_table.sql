-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 29, 2022 at 01:40 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `admin_keval`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_table`
--

CREATE TABLE IF NOT EXISTS `blog_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `food blogs` varchar(100) NOT NULL,
  `travel blogs` varchar(100) NOT NULL,
  `sports blogs` varchar(100) NOT NULL,
  `news blogs` varchar(100) NOT NULL,
  `movie blogs` varchar(100) NOT NULL,
  `music bloga` varchar(100) NOT NULL,
  `personal blogs` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
