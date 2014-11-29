-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2014 at 05:02 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
  `uid` int(11) NOT NULL,
  `insert_date` int(8) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci AUTO_INCREMENT=44 ;

--
-- Dumping data for table `estate`
--

INSERT INTO `estate` (`id`, `state`, `city`, `zone`, `address`, `estate-type`, `deal-type`, `nama`, `unit-price`, `total-price`, `zamin`, `zirbana`, `floor`, `room`, `kafpoosh`, `options`, `uid`, `insert_date`) VALUES
(1, 1, 0, 0, '', 0, 0, '', 0, 0, 0, 0, 0, 0, '0', '0000000000000000000000', 0, 0),
(2, 2, 0, 0, 'rghdfgh', 1, 1, 'Ø¢Ù„ÙˆÙ…ÙŠÙ†ÙŠÙˆÙ…', 5446, 456, 456, 465, 2, 2, '0', '1100000000000000000000', 0, 0),
(3, 3, 0, 0, 'asdfasdf', 2, 2, 'Ø¢Ù„ÙˆÙ…ÙŠÙ†ÙŠÙˆÙ…', 435, 345, 345, 345, 1, 2, '0', '0000000000000000000000', 0, 0),
(4, 4, 0, 0, '5674567', 2, 1, 'Ú¯Ø±Ø§Ù†ÙŠØª', 456, 456, 3456, 456, 2, 2, 'Ø³Ø±Ø§Ù…ÙŠÚ©', '0000000000000000000000', 0, 0),
(5, 5, 0, 0, 'dfgsdfg', 1, 2, 'Ú¯Ø±Ø§Ù†ÙŠØª', 3245, 2345234, 52345234, 523452345, 1, 2, 'Ø³Ø±Ø§Ù…ÙŠÚ©', '00000000000000000000000000', 0, 0),
(6, 6, 0, 0, 'gfhdfghdfgh', 1, 0, '?????????', 546, 456, 456, 465, 1, 3, '??????', '00000000000000000000000000', 0, 0),
(7, 7, 0, 0, 'fgdfg', 1, 1, 'Ø¢Ù„ÙˆÙ…ÙŠÙ†ÙŠÙˆÙ…', 43, 34, 34, 34, 2, 3, 'Ù¾Ø§Ø±Ú©Øª', '00000000000000000000000000', 0, 0),
(8, 8, 0, 0, '', 0, 0, '-- Ù†Ù…Ø§ --', 0, 0, 0, 0, 0, 0, '- Ù†ÙˆØ¹ Ú©ÙÙ¾ÙˆØ´ -', '00000000000000000000000000', 0, 0),
(9, 0, 0, 0, '', 0, 0, '', 0, 0, 0, 0, 0, 0, '', '00000000000000000000000000', 0, 0),
(10, 0, 0, 0, 'dfgsdfg', 0, 0, 'Ø´ÙŠØ´Ù‡', 100, 100, 100, 100, 3, 3, 'Ù…ÙˆÚ©Øª Ø³Ø±Ø§Ù…ÙŠÚ©', '00000000000000000000000000', 0, 0),
(11, 2, 3, 4, 'dfgsdfg', 0, 4, 'Ø³Ø±Ø§Ù…ÙŠÚ©', 33, 33, 33, 33, 2, 3, 'HPF', '00000000000000000000000000', 0, 0),
(12, 1, 3, 4, 'dasd', 0, 0, 'Ø³Ø±Ø§Ù…ÙŠÚ©', 234234, 234234, 4234234, 23423, 1, 4, 'TVC', '00000000000000000000000000', 0, 0),
(13, 1, 1, 1, '', 3, 2, '4', 34, 34, 34, 34, 3, 2, '7', '10001000101000001100000000', 0, 0),
(14, 1, 1, 1, '', 3, 2, '4', 34, 34, 34, 34, 3, 2, '7', '10001000101000001100000000', 0, 0),
(15, 1, 1, 1, 'ÛŒØ³ÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒÛŒ', 3, 2, '4', 34, 34, 34, 34, 3, 6, '7', '10001010101001101100110000', 0, 0),
(16, 5, 0, 0, '', 0, 0, '-- Ù†Ù…Ø§ --', 0, 0, 0, 0, 0, 0, '- Ù†ÙˆØ¹ Ú©ÙÙ¾ÙˆØ´ -', '', 0, 0),
(17, 5, 0, 0, '', 0, 0, '-- Ù†Ù…Ø§ --', 0, 0, 0, 0, 0, 0, '- Ù†ÙˆØ¹ Ú©ÙÙ¾ÙˆØ´ -', '', 0, 0),
(18, 5, 0, 0, '', 0, 0, '-- Ù†Ù…Ø§ --', 0, 0, 0, 0, 0, 0, '- Ù†ÙˆØ¹ Ú©ÙÙ¾ÙˆØ´ -', '', 0, 0),
(19, 5, 0, 0, '', 0, 0, '-- Ù†Ù…Ø§ --', 0, 0, 0, 0, 0, 0, '- Ù†ÙˆØ¹ Ú©ÙÙ¾ÙˆØ´ -', '', 0, 0),
(20, 5, 0, 0, '', 0, 0, '-- Ù†Ù…Ø§ --', 0, 0, 0, 0, 0, 0, '- Ù†ÙˆØ¹ Ú©ÙÙ¾ÙˆØ´ -', '', 0, 0),
(21, 0, 0, 0, '', 0, 0, '-- Ù†Ù…Ø§ --', 0, 0, 0, 0, 0, 0, '- Ù†ÙˆØ¹ Ú©ÙÙ¾ÙˆØ´ -', '10000000000100000000000000', 0, 0),
(22, 10, 8, 5, '', 0, 0, '-- Ù†Ù…Ø§ --', 0, 0, 0, 0, 0, 0, '- Ù†ÙˆØ¹ Ú©ÙÙ¾ÙˆØ´ -', '10000000000010000000000000', 0, 0),
(23, 10, 8, 5, '', 0, 0, '-- Ù†Ù…Ø§ --', 0, 0, 0, 0, 0, 0, '- Ù†ÙˆØ¹ Ú©ÙÙ¾ÙˆØ´ -', '10000000000010000000110000', 0, 0),
(24, 3, 4, 3, '', 0, 0, '-- Ù†Ù…Ø§ --', 0, 0, 0, 0, 0, 0, '- Ù†ÙˆØ¹ Ú©ÙÙ¾ÙˆØ´ -', '00000000000000000000000000', 4, 0),
(25, 0, 0, 0, '', -1, -1, '-- Ù†Ù…Ø§ --', 0, 0, 0, 0, 0, 0, '- Ù†ÙˆØ¹ Ú©ÙÙ¾ÙˆØ´ -', '00000000000000000000000000', 4, 0),
(26, 0, 0, 0, 'sdfasdf', -1, -1, '-- Ù†Ù…Ø§ --', 0, 0, 0, 0, 0, 0, '- Ù†ÙˆØ¹ Ú©ÙÙ¾ÙˆØ´ -', '00000000000000000000000000', 4, 0),
(27, 0, 0, 0, '', -1, -1, '-- Ù†Ù…Ø§ --', 0, 0, 0, 0, 0, 0, '- Ù†ÙˆØ¹ Ú©ÙÙ¾ÙˆØ´ -', '00000000000000000000000000', 4, 0),
(28, 0, 0, 0, '', -1, -1, '-- Ù†Ù…Ø§ --', 0, 0, 0, 0, 0, 0, '- Ù†ÙˆØ¹ Ú©ÙÙ¾ÙˆØ´ -', '00000000000000000000000000', 4, 0),
(29, 0, 0, 0, '', -1, -1, '-- Ù†Ù…Ø§ --', 0, 0, 0, 0, 0, 0, '- Ù†ÙˆØ¹ Ú©ÙÙ¾ÙˆØ´ -', '00000000000000000000000000', 4, 0),
(30, 0, 0, 0, '', -1, -1, '-- Ù†Ù…Ø§ --', 0, 0, 0, 0, 0, 0, '- Ù†ÙˆØ¹ Ú©ÙÙ¾ÙˆØ´ -', '00000000000000000000000000', 4, 0),
(31, 0, 0, 0, '', -1, -1, '-- Ù†Ù…Ø§ --', 0, 0, 0, 0, 0, 0, '- Ù†ÙˆØ¹ Ú©ÙÙ¾ÙˆØ´ -', '00000000000000000000000000', 4, 0),
(32, 0, 3, 5, 'Ø¨', 2, 1, '-- Ù†Ù…Ø§ --', 125, 150505205, 123, 0, 0, 0, '- Ù†ÙˆØ¹ Ú©ÙÙ¾ÙˆØ´ -', '00000000000000000000000000', 4, 0),
(33, 0, 0, 0, '', -1, -1, '-- Ù†Ù…Ø§ --', 0, 0, 0, 0, 0, 0, '- Ù†ÙˆØ¹ Ú©ÙÙ¾ÙˆØ´ -', '00000000000000000000000000', 4, 0),
(34, 0, 3, 4, 'Ø³ÛŒØ¨', 2, 2, '-- Ù†Ù…Ø§ --', 125, 15544885, 235, 0, 0, 0, '- Ù†ÙˆØ¹ Ú©ÙÙ¾ÙˆØ´ -', '00000000000000000000000000', 4, 0),
(35, 0, 3, 4, 'Ø³ÛŒØ¨', 2, 2, '-- Ù†Ù…Ø§ --', 125, 15544885, 235, 0, 0, 0, '- Ù†ÙˆØ¹ Ú©ÙÙ¾ÙˆØ´ -', '00000000000000000000000000', 4, 0),
(36, 0, 3, 4, 'Ø³ÛŒØ¨', 2, 2, '-- Ù†Ù…Ø§ --', 125, 15544885, 235, 0, 0, 0, '- Ù†ÙˆØ¹ Ú©ÙÙ¾ÙˆØ´ -', '00000000000000000000000000', 4, 0),
(37, 0, 0, 0, 'Ø³ÛŒØ¨', 2, 2, '-- Ù†Ù…Ø§ --', 125, 15544885, 235, 0, 0, 0, '- Ù†ÙˆØ¹ Ú©ÙÙ¾ÙˆØ´ -', '00000000000000000000000000', 4, 0),
(38, 0, 0, 0, 'Ø³ÛŒØ¨', 2, 2, '-- Ù†Ù…Ø§ --', 125, 15544885, 235, 0, 0, 0, '- Ù†ÙˆØ¹ Ú©ÙÙ¾ÙˆØ´ -', '00000000000000000000000000', 4, 0),
(39, 0, 0, 0, 'Ø³ÛŒØ¨', 2, 2, '-- Ù†Ù…Ø§ --', 125, 15544885, 235, 0, 0, 0, '- Ù†ÙˆØ¹ Ú©ÙÙ¾ÙˆØ´ -', '00000000000000000000000000', 4, 0),
(40, 0, 0, 0, 'Ø³ÛŒØ¨', 2, 2, '-- Ù†Ù…Ø§ --', 125, 15544885, 235, 0, 0, 0, '- Ù†ÙˆØ¹ Ú©ÙÙ¾ÙˆØ´ -', '00000000000000000000000000', 4, 0),
(41, 0, 0, 0, 'Ø³ÛŒØ¨', 2, 2, '-- Ù†Ù…Ø§ --', 125, 15544885, 235, 0, 0, 0, '- Ù†ÙˆØ¹ Ú©ÙÙ¾ÙˆØ´ -', '00000000000000000000000000', 4, 0),
(42, 0, 0, 0, '', -1, -1, '-- Ù†Ù…Ø§ --', 0, 0, 0, 0, 0, 0, '- Ù†ÙˆØ¹ Ú©ÙÙ¾ÙˆØ´ -', '00000000000000000000000000', 4, 0),
(43, 0, 0, 0, '', -1, -1, '-- Ù†Ù…Ø§ --', 0, 0, 0, 0, 0, 0, '- Ù†ÙˆØ¹ Ú©ÙÙ¾ÙˆØ´ -', '00000000000000000000000000', 4, 13930908);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `title_fa` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `body_fa` text COLLATE utf8_bin,
  `title_en` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `body_en` text COLLATE utf8_bin,
  `title_ar` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `body_ar` text COLLATE utf8_bin,
  `date` int(8) NOT NULL,
  `display_date` varchar(40) COLLATE utf8_bin NOT NULL,
  `display_date_en` varchar(40) COLLATE utf8_bin NOT NULL,
  `isactive` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=25 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title_fa`, `body_fa`, `title_en`, `body_en`, `title_ar`, `body_ar`, `date`, `display_date`, `display_date_en`, `isactive`) VALUES
(0000000024, 'Ø´Ø±Ú©Øª Ø¯Ø± Ø³ÛŒØ²Ø¯Ù‡Ù…Ø¨Ù† Ø¯ÙˆØ±Ù‡ Ù†Ù…Ø§ÛŒØ´Ú¯Ø§Ù‡ Ø¨ÛŒÙ† Ø§Ù„Ù…Ù„Ù„ÛŒ Ø´ÛŒØ±ÛŒÙ†ÛŒ Ùˆ Ø´Ú©Ù„Ø§Øª', 'Ø§Ø² ØªØ§Ø±ÛŒØ® 24 Ù…Ù‡Ø±Ù…Ù‡Ø±Ù…Ù‡Ø±Ù…Ù‡Ø±Ù…Ù‡Ø±Ù…Ù‡Ø±Ù…Ù‡Ø±Ù…Ù‡Ø±', '', '', NULL, NULL, 13930703, 'Ù¾Ù†Ø¬Ø´Ù†Ø¨Ù‡ 03 Ù…Ù‡Ø± 1393', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE IF NOT EXISTS `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

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
(14, 'Ù‚Ø²ÙˆÛŒÙ†'),
(15, 'dasdas');

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
