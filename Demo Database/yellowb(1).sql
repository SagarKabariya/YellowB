-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 16, 2015 at 09:07 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `yellowb`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `book_id` int(10) NOT NULL AUTO_INCREMENT,
  `register_id` int(10) NOT NULL,
  `route_id` int(10) NOT NULL,
  `book_no_of_seat` int(10) NOT NULL,
  `start_seat` int(10) NOT NULL,
  `end_seat` int(10) NOT NULL,
  `t_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `book_date` date NOT NULL,
  PRIMARY KEY (`book_id`),
  KEY `register_id` (`register_id`,`route_id`),
  KEY `route_id` (`route_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `register_id`, `route_id`, `book_no_of_seat`, `start_seat`, `end_seat`, `t_date`, `book_date`) VALUES
(1, 3, 3, 3, 1, 3, '2015-03-11 14:11:25', '0000-00-00'),
(2, 3, 4, 2, 1, 2, '2015-03-11 14:12:12', '0000-00-00'),
(3, 3, 3, 3, 3, 5, '2015-03-14 03:26:50', '2015-03-12'),
(4, 3, 2, 5, 1, 5, '2015-03-11 14:14:45', '2015-03-12'),
(5, 3, 4, 2, 1, 2, '2015-03-14 03:30:07', '2015-03-14');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE IF NOT EXISTS `bus` (
  `bus_id` int(10) NOT NULL AUTO_INCREMENT,
  `bus_name` varchar(20) NOT NULL,
  `bus_number` varchar(10) NOT NULL,
  `no_of_seats` int(10) NOT NULL,
  `bus_type` varchar(10) NOT NULL,
  PRIMARY KEY (`bus_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`bus_id`, `bus_name`, `bus_number`, `no_of_seats`, `bus_type`) VALUES
(1, 'YellowStart', '5555', 52, 'AC'),
(2, 'YellowWing', '6667', 52, 'Select'),
(3, 'YellowBallon', '4567', 45, 'Ac'),
(4, 'YellowDiamond', '2525', 40, 'NON-AC'),
(5, 'YellowGold', '1111', 52, 'Ac'),
(6, '1010', 'sandip', 52, 'Ac'),
(7, 'ashish', '8565', 52, 'Ac');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `c_id` int(20) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(20) NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`c_id`, `city_name`) VALUES
(1, 'Surat'),
(2, 'Baroda'),
(3, 'Ahmedabad'),
(4, 'Rajkot'),
(5, 'Amreli'),
(6, 'Vapi'),
(7, 'Junagandh'),
(8, 'Diu'),
(9, 'Porbandar'),
(10, 'Bhujj'),
(11, 'jadav'),
(12, 'mount abu'),
(13, 'kutch run');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `feedback_id` int(10) NOT NULL AUTO_INCREMENT,
  `f_text` varchar(200) DEFAULT NULL,
  `register_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `route_id` int(10) NOT NULL,
  PRIMARY KEY (`feedback_id`),
  KEY `register_id` (`register_id`,`route_id`),
  KEY `route_id` (`route_id`),
  KEY `register_id_2` (`register_id`),
  KEY `route_id_2` (`route_id`),
  KEY `register_id_3` (`register_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `register_id` int(10) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(40) NOT NULL,
  `city_id` int(20) DEFAULT NULL,
  `mo_no` bigint(10) NOT NULL,
  `email` varchar(20) DEFAULT NULL,
  `user_type` tinyint(1) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`register_id`),
  UNIQUE KEY `mo_no` (`mo_no`),
  KEY `city` (`city_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`register_id`, `full_name`, `city_id`, `mo_no`, `email`, `user_type`, `password`) VALUES
(3, 'sagar', NULL, 7405728288, NULL, 1, '123'),
(5, 'lali', 3, 4444444444, NULL, 0, '111'),
(6, 'niral', 7, 5555555555, NULL, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE IF NOT EXISTS `route` (
  `route_id` int(10) NOT NULL AUTO_INCREMENT,
  `source_id` int(10) NOT NULL,
  `destination_id` int(10) NOT NULL,
  `bus_id` int(10) NOT NULL,
  `fare` int(10) NOT NULL,
  `depart_time` time NOT NULL,
  `arrival_time` time NOT NULL,
  PRIMARY KEY (`route_id`),
  KEY `source_id` (`source_id`,`destination_id`,`bus_id`),
  KEY `destination_id` (`destination_id`),
  KEY `bus_id` (`bus_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`route_id`, `source_id`, `destination_id`, `bus_id`, `fare`, `depart_time`, `arrival_time`) VALUES
(1, 2, 3, 1, 200, '07:00:00', '05:15:01'),
(2, 3, 4, 2, 240, '01:00:00', '06:05:00'),
(3, 3, 5, 3, 300, '08:05:00', '03:00:00'),
(4, 5, 9, 3, 250, '06:00:00', '01:30:00'),
(5, 3, 8, 5, 250, '06:45:00', '02:30:00'),
(6, 3, 10, 2, 450, '09:15:00', '06:30:00'),
(7, 3, 4, 1, 350, '05:15:00', '01:00:00'),
(8, 11, 1, 7, 500, '09:45:00', '04:00:00'),
(9, 4, 8, 4, 300, '10:00:00', '08:00:00'),
(10, 1, 10, 5, 550, '07:10:00', '05:00:00'),
(11, 10, 12, 2, 750, '06:15:00', '06:30:00');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_1` FOREIGN KEY (`register_id`) REFERENCES `registration` (`register_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `book_ibfk_2` FOREIGN KEY (`route_id`) REFERENCES `route` (`route_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
