-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2014 at 09:09 AM
-- Server version: 5.5.36
-- PHP Version: 5.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dps`
--

-- --------------------------------------------------------

--
-- Table structure for table `circulars_and_notices`
--

CREATE TABLE IF NOT EXISTS `circulars_and_notices` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `attachment` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL,
  `modify_date` datetime NOT NULL,
  `status` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE IF NOT EXISTS `class` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `status` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`id`, `name`, `status`) VALUES
(1, 'I - A', '1'),
(2, 'I - B', '1'),
(3, 'II - A', '1'),
(4, 'II - B', '1'),
(5, 'Sapling', '1'),
(6, 'Seedling', '1');

-- --------------------------------------------------------

--
-- Table structure for table `forthcoming_event`
--

CREATE TABLE IF NOT EXISTS `forthcoming_event` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `class` varchar(5) NOT NULL,
  `start_date` varchar(100) NOT NULL,
  `end_date` varchar(100) NOT NULL,
  `create_date` datetime NOT NULL,
  `modify_date` datetime NOT NULL,
  `status` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `news_and_circulars`
--

CREATE TABLE IF NOT EXISTS `news_and_circulars` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `attachment` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL,
  `modify_date` datetime NOT NULL,
  `status` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `recent_news`
--

CREATE TABLE IF NOT EXISTS `recent_news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `attachment` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `create_date` datetime NOT NULL,
  `modify_date` datetime NOT NULL,
  `status` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student_zone_event`
--

CREATE TABLE IF NOT EXISTS `student_zone_event` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `event_name` varchar(255) NOT NULL,
  `class` varchar(5) NOT NULL,
  `school` varchar(100) NOT NULL,
  `create_date` datetime NOT NULL,
  `modify_date` datetime NOT NULL,
  `status` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `student_zone_students`
--

CREATE TABLE IF NOT EXISTS `student_zone_students` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `event_id` varchar(5) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(50) NOT NULL,
  `create_date` datetime NOT NULL,
  `modify_date` datetime NOT NULL,
  `status` char(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
