-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2015 at 01:58 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mads`
--

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE IF NOT EXISTS `delivery` (
  `d_id` int(11) NOT NULL AUTO_INCREMENT,
  `d_details` varchar(100) NOT NULL,
  `d_status` varchar(100) NOT NULL,
  `d_startdate` datetime NOT NULL,
  `d_enddate` datetime NOT NULL,
  `d_s_id` int(11) NOT NULL,
  `d_sl_id` int(11) NOT NULL,
  `d_eta` date NOT NULL,
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`d_id`, `d_details`, `d_status`, `d_startdate`, `d_enddate`, `d_s_id`, `d_sl_id`, `d_eta`) VALUES
(1, 'New Tires', 'ARRIVED', '2015-01-10 00:00:00', '0000-00-00 00:00:00', 0, 0, '0000-00-00'),
(2, '10 Lots MMAD Stereo', 'ARRIVED', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1, '2015-01-23'),
(3, 'Steering Wheel 10 Lots', 'ARRIVED', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '0000-00-00'),
(4, 'sadad', 'ARRIVED', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '0000-00-00'),
(5, '10 Boxes Pepperoni Pizza', 'ARRIVED', '2015-01-20 00:17:32', '0000-00-00 00:00:00', 0, 0, '0000-00-00'),
(6, '10 Boxes Salami Wings', 'ARRIVED', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '2015-01-01'),
(7, '10 Lots Adventure Xenon Bulbs', 'ARRIVED', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '2015-01-26'),
(8, 'Ipad mini 20 pcs.', 'ARRIVED', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, '2015-02-20'),
(9, 'Light Bulbs', 'ARRIVED', '2015-01-20 00:21:26', '0000-00-00 00:00:00', 0, 0, '2015-01-24'),
(10, 'Philippine Map', 'ARRIVED', '2015-01-20 00:22:53', '0000-00-00 00:00:00', 0, 0, '2015-01-03'),
(11, 'Shemay', 'ARRIVED', '2015-01-20 18:22:09', '0000-00-00 00:00:00', 0, 0, '2015-01-14'),
(12, '', 'ARRIVED', '2015-01-20 18:23:51', '0000-00-00 00:00:00', 0, 0, '2015-01-14'),
(13, 'Adventure Tires 10 Llots', 'ARRIVED', '2015-01-20 22:16:23', '0000-00-00 00:00:00', 0, 0, '2015-01-29');

-- --------------------------------------------------------

--
-- Table structure for table `performance`
--

CREATE TABLE IF NOT EXISTS `performance` (
  `p_supplier_id` int(11) NOT NULL,
  `p_performance_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_delivery_perfornance` float NOT NULL,
  `p_d_id` int(11) NOT NULL,
  PRIMARY KEY (`p_performance_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `performance`
--

INSERT INTO `performance` (`p_supplier_id`, `p_performance_id`, `p_delivery_perfornance`, `p_d_id`) VALUES
(0, 1, 100, 5),
(0, 2, 87, 6);

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE IF NOT EXISTS `supervisor` (
  `S_id` int(11) NOT NULL AUTO_INCREMENT,
  `S_name` varchar(100) NOT NULL,
  `S_department` varchar(50) NOT NULL,
  PRIMARY KEY (`S_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `sl_id` int(11) NOT NULL AUTO_INCREMENT,
  `sl_name` varchar(50) NOT NULL,
  `sl_address` varchar(100) NOT NULL,
  `sl_type` varchar(100) NOT NULL,
  PRIMARY KEY (`sl_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`sl_id`, `sl_name`, `sl_address`, `sl_type`) VALUES
(0, 'ACME Inc.', 'Timbuktu', 'All'),
(1, 'Winterpine, Inc.', 'Quezon City', 'ACCESSORIES'),
(2, 'Clarion Audio, Inc.', '#12 Paseo St. Sta Cruz Manila', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
