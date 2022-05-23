-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 29, 2022 at 01:43 PM
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
-- Table structure for table `recent_manage`
--

CREATE TABLE IF NOT EXISTS `recent_manage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `recent_image` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `dis` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `recent_manage`
--

INSERT INTO `recent_manage` (`id`, `recent_image`, `title`, `dis`) VALUES
(3, '05-portfolio.jpg', 'title', 'second demo'),
(4, '04-blog.jpg', 'title', 'demo'),
(6, '10-portfolio.jpg', 'title', 'pilo pilo pilo pilo pilo pilo pilo pilo pilo pilopilo pilo pilo pilo pilo pilo pilo pilo pilo pilo p');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
