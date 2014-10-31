-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2014 at 07:06 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `iranamlak`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
  `id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `state_id` int(10) unsigned zerofill NOT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `state_id`, `name`) VALUES
(0000000001, 0000000001, 'ØªÙ‡Ø±Ø§Ù†'),
(0000000003, 0000000002, 'Ú©Ø±Ø¬'),
(0000000004, 0000000003, 'Ú©Ø±Ù…Ø§Ù†Ø´Ø§Ù‡'),
(0000000006, 0000000002, 'Ù‚Ù„Ø¹Ù‡ Ø­Ø³Ù† Ø®Ø§Ù†'),
(0000000007, 0000000010, 'Ø³Ø§Ø±ÛŒ'),
(0000000008, 0000000010, 'Ø¨Ø§Ø¨Ù„');

-- --------------------------------------------------------

--
-- Table structure for table `estate`
--

CREATE TABLE IF NOT EXISTS `estate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state` int(11) NOT NULL,
  `city` int(11) NOT NULL,
  `zone` int(11) NOT NULL,
  `address` text COLLATE utf8_persian_ci NOT NULL,
  `estate-type` int(2) NOT NULL,
  `deal-type` int(2) NOT NULL,
  `nama` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `unit-price` int(11) NOT NULL,
  `total-price` int(20) NOT NULL,
  `zamin` int(10) NOT NULL,
  `zirbana` int(10) NOT NULL,
  `floor` int(3) NOT NULL,
  `room` int(3) NOT NULL,
  `kafpoosh` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `options` text COLLATE utf8_persian_ci NOT NULL,
  `pic1` varchar(400) COLLATE utf8_persian_ci DEFAULT NULL,
  `pic2` varchar(400) COLLATE utf8_persian_ci DEFAULT NULL,
  `pic3` varchar(400) COLLATE utf8_persian_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=16 ;

--
-- Dumping data for table `estate`
--

INSERT INTO `estate` (`id`, `state`, `city`, `zone`, `address`, `estate-type`, `deal-type`, `nama`, `unit-price`, `total-price`, `zamin`, `zirbana`, `floor`, `room`, `kafpoosh`, `options`, `pic1`, `pic2`, `pic3`) VALUES
(1, 0, 0, 0, '', 0, 0, '', 0, 0, 0, 0, 0, 0, '0', '0000000000000000000000', NULL, NULL, NULL),
(2, 0, 0, 0, 'rghdfgh', 1, 1, 'Ø¢Ù„ÙˆÙ…ÙŠÙ†ÙŠÙˆÙ…', 5446, 456, 456, 465, 2, 2, '0', '1100000000000000000000', '', '', ''),
(3, 0, 0, 0, 'asdfasdf', 2, 2, 'Ø¢Ù„ÙˆÙ…ÙŠÙ†ÙŠÙˆÙ…', 435, 345, 345, 345, 1, 2, '0', '0000000000000000000000', '', '', ''),
(4, 0, 0, 0, '5674567', 2, 1, 'Ú¯Ø±Ø§Ù†ÙŠØª', 456, 456, 3456, 456, 2, 2, 'Ø³Ø±Ø§Ù…ÙŠÚ©', '0000000000000000000000', '', '', ''),
(5, 0, 0, 0, 'dfgsdfg', 1, 2, 'Ú¯Ø±Ø§Ù†ÙŠØª', 3245, 2345234, 52345234, 523452345, 1, 2, 'Ø³Ø±Ø§Ù…ÙŠÚ©', '0000000000000000000000', '', '', ''),
(6, 0, 0, 0, 'gfhdfghdfgh', 1, 0, '?????????', 546, 456, 456, 465, 1, 3, '??????', '0000000000000000000000', '', '', ''),
(7, 0, 0, 0, 'fgdfg', 1, 1, 'Ø¢Ù„ÙˆÙ…ÙŠÙ†ÙŠÙˆÙ…', 43, 34, 34, 34, 2, 3, 'Ù¾Ø§Ø±Ú©Øª', '0000000000000000000000', '', '', ''),
(8, 0, 0, 0, '', 0, 0, '-- Ù†Ù…Ø§ --', 0, 0, 0, 0, 0, 0, '- Ù†ÙˆØ¹ Ú©ÙÙ¾ÙˆØ´ -', '0000000000000000000000', 'Bark.jpg', '', ''),
(9, 0, 0, 0, '', 0, 0, '', 0, 0, 0, 0, 0, 0, '', '0000000000000000000000', 'C:/xampp/htdocs/iranamlak/upld/', '', ''),
(10, 0, 0, 0, 'dfgsdfg', 0, 0, 'Ø´ÙŠØ´Ù‡', 100, 100, 100, 100, 3, 3, 'Ù…ÙˆÚ©Øª Ø³Ø±Ø§Ù…ÙŠÚ©', '0000000000000000000000', 'C:/xampp/htdocs/iranamlak/upld/', '', ''),
(11, 2, 3, 4, 'dfgsdfg', 0, 4, 'Ø³Ø±Ø§Ù…ÙŠÚ©', 33, 33, 33, 33, 2, 3, 'HPF', '0000000000000000000000', 'C:/xampp/htdocs/iranamlak/upld/', '', ''),
(12, 1, 3, 4, 'dasd', 0, 0, 'Ø³Ø±Ø§Ù…ÙŠÚ©', 234234, 234234, 4234234, 23423, 1, 4, 'TVC', '0000000000000000000000', 'C:/xampp/htdocs/iranamlak/upld/', '', ''),
(13, 1, 1, 1, '', 3, 2, '4', 34, 34, 34, 34, 3, 2, '7', '1000100010100000110000', NULL, NULL, NULL),
(14, 1, 1, 1, '', 3, 2, '4', 34, 34, 34, 34, 3, 2, '7', '1000100010100000110000', NULL, NULL, NULL),
(15, 1, 1, 1, 'ÛŒØ³ÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒ', 3, 2, '4', 34, 34, 34, 34, 3, 2, '7', '1000101010100110110011', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE IF NOT EXISTS `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`) VALUES
(1, 'ØªÙ‡Ø±Ø§Ù†'),
(2, 'Ø§Ù„Ø¨Ø±Ø²'),
(3, 'Ú©Ø±Ù…Ø§Ù†Ø´Ø§Ù‡'),
(4, 'Ú©Ø±Ù…Ø§Ù†'),
(5, 'Ø®ÙˆØ²Ø³ØªØ§Ù†'),
(6, 'Ø®Ø±Ø§Ø³Ø§Ù†'),
(7, 'Ø®Ø±Ø§Ø³Ø§Ù† Ø´Ù…Ø§Ù„ÛŒ'),
(8, 'Ø®Ø±Ø§Ø³Ø§Ù† Ø¬Ù†ÙˆØ¨ÛŒ'),
(9, 'Ú¯ÛŒÙ„Ø§Ù†'),
(10, 'Ù…Ø§Ø²Ù†Ø¯Ø±Ø§Ù†'),
(11, 'Ú¯Ø±Ú¯Ø§Ù†'),
(12, 'Ù‚Ù…'),
(13, 'Ú©Ø§Ø´Ø§Ù†'),
(14, 'Ù‚Ø²ÙˆÛŒÙ†');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `username` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `name` varchar(150) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `type` int(1) NOT NULL DEFAULT '0',
  `is_active` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `type`, `is_active`) VALUES
(0000000001, 'mahyar.jamalabadi@gmail.com', 'bc856020618cd4fd97c703c28e68273a', 'Ù…Ù‡ÛŒØ§Ø± Ø­Ù…Ø§Ù„ Ø¢Ø¨Ø§Ø¯ÛŒ', 0, 1),
(0000000002, 'amlakmaster', 'b9d8236dc2e73d9f66703af439665706', 'Ù…Ø¯ÛŒØ± Ø§ÛŒØ±Ø§Ù† Ø§Ù…Ù„Ø§Ú©', 5, 1),
(0000000003, 'nargesghanbari', 'e9070b1090c89bb00b8fb06c5e4eee8c', 'Ù†Ø±Ú¯Ø³ Ù‚Ù†Ø¨Ø±ÛŒ', 0, 1),
(0000000004, 'poori12', '45944fd7778a3aa7e89c23adca98e42e', 'Ù¾ÙˆØ±ÛŒØ§ Ø¹Ø¨Ø¯Ø§Ù„Ù…Ø§Ù„Ú©ÛŒ', 0, 1),
(0000000005, 'poori13', '412618f4a5cdf3b9d2c237665884253e', 'poori13', 0, 1),
(0000000006, 'poori14', 'b7fa1e980a843959d92db146cff366b2', 'poori14', 0, 1),
(0000000007, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 5, 1),
(0000000008, 'admin2', 'c84258e9c39059a89ab77d846ddab909', 'admin2', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `zones`
--

CREATE TABLE IF NOT EXISTS `zones` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `zones`
--

INSERT INTO `zones` (`id`, `state_id`, `city_id`, `name`) VALUES
(1, 0, 1, 'Ekbatan'),
(2, 0, 1, 'Ù‚Ù„Ø¹Ù‡ Ù…Ø±ØºÛŒ'),
(3, 0, 1, 'ØªÙ‡Ø±Ø§Ù†Ø³Ø±'),
(4, 2, 3, 'Ø±Ø¬Ø§ÛŒÛŒ Ø´Ù‡Ø±'),
(5, 2, 3, 'Ø¹Ø¸ÛŒÙ…ÛŒÙ‡'),
(6, 10, 8, 'Ø³Ø¨Ø²Ù‡ Ù…ÛŒØ¯Ø§Ù†');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
