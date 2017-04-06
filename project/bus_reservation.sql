-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2016 at 05:50 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bus reservation`
--

-- --------------------------------------------------------

--
-- Table structure for table `config_site_tbl`
--

CREATE TABLE IF NOT EXISTS `config_site_tbl` (
  `config_id` int(11) NOT NULL,
  `config_title` varchar(255) NOT NULL,
  `config_image` varchar(255) NOT NULL,
  `config_name` varchar(255) NOT NULL,
  `config_about` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `config_site_tbl`
--

INSERT INTO `config_site_tbl` (`config_id`, `config_title`, `config_image`, `config_name`, `config_about`) VALUES
(1, 'Welcome,Already a member?', 'logo.png', 'Blue Bird Kohat Transport Corporation', 'Helpline Number : 18001802877, +92 - 3038869074 | E-mail id : nomanshah587@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_tbl`
--

CREATE TABLE IF NOT EXISTS `contact_us_tbl` (
  `contact_us_id` int(11) NOT NULL,
  `contact_us_name` varchar(255) NOT NULL,
  `contact_us_subject` varchar(255) NOT NULL,
  `contact_us_message` varchar(255) NOT NULL,
  `contact_us_email` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us_tbl`
--

INSERT INTO `contact_us_tbl` (`contact_us_id`, `contact_us_name`, `contact_us_subject`, `contact_us_message`, `contact_us_email`) VALUES
(1, 'rija', 'buses', 'i m the best', 'noman@yahoo.com'),
(2, 'rija', 'buses', 'i m the best', 'noman@yahoo.com'),
(3, 'test', 'test', 'test', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `news_event_tbl`
--

CREATE TABLE IF NOT EXISTS `news_event_tbl` (
  `newsevent_id` int(11) NOT NULL,
  `newsevent_title` varchar(255) NOT NULL,
  `newsevent_description` text NOT NULL,
  `newsevent_date` date NOT NULL,
  `newsevent_visiability` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_event_tbl`
--

INSERT INTO `news_event_tbl` (`newsevent_id`, `newsevent_title`, `newsevent_description`, `newsevent_date`, `newsevent_visiability`) VALUES
(47, 'kohat News', 'kohat is one of the best city in pakistan.i also live in kohat kohat is one of the best city  in pakistan.i also live in kohat kohat is one of the best city in pakistan.i also live in kohat', '0000-00-00', 'test'),
(49, 'Kust News', 'kohat is one of the best city in pakistan.i also live in kohat kohat is one of the best city  in pakistan.i also live in kohat kohat is one of the best city in pakistan.i also live in kohat', '0000-00-00', 'show'),
(50, 'Kust News', 'kohat is one of the best city in pakistan.i also live in kohat kohat is one of the best city  in pakistan.i also live in kohat kohat is one of the best city in pakistan.i also live in kohat', '0000-00-00', 'show'),
(51, 'Kust News', 'kohat is one of the best city in pakistan.i also live in kohat kohat is one of the best city in pakistan.i also live in kohat kohat is one of the best city in pakistan.i also live in kohat	', '0000-00-00', 'show'),
(52, 'Kust News', 'kohat is one of the best city in pakistan.i also live in kohat kohat is one of the best city  in pakistan.i also live in kohat kohat is one of the best city in pakistan.i also live in kohat', '0000-00-00', 'test'),
(53, 'Kust News', 'test', '2016-08-08', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `route_tbl`
--

CREATE TABLE IF NOT EXISTS `route_tbl` (
  `route_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `route_name` varchar(255) NOT NULL,
  `route_description` varchar(255) NOT NULL,
  `route_map` varchar(255) NOT NULL,
  `route_start` varchar(255) NOT NULL,
  `route_end` varchar(255) NOT NULL,
  `route_distance` varchar(255) NOT NULL,
  `dept_time` varchar(255) NOT NULL,
  `ticket_price` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route_tbl`
--

INSERT INTO `route_tbl` (`route_id`, `vehicle_id`, `route_name`, `route_description`, `route_map`, `route_start`, `route_end`, `route_distance`, `dept_time`, `ticket_price`) VALUES
(21, 26, 'kohat To Peshawer', 'best route for traveling', '1470460511lala2.png', 'kohat', 'Peshawer', '60km', '09AM', 100),
(22, 27, 'kohat To Lahore', 'best route for traveling', '1470460792lala2.png', 'kohat', 'Lahore', '600km', '07PM', 1000),
(23, 28, 'kohat To Pindi', 'best route for traveling', '1470461118MMM.png', 'kohat', 'Pindi', '400km', '06PM', 200),
(24, 28, 'kohat To Islamabad', 'best route for traveling', '1471664687noman.jpg', 'kohat', 'Islamabd', '450km', '10PM', 250);

-- --------------------------------------------------------

--
-- Table structure for table `slider_tbl`
--

CREATE TABLE IF NOT EXISTS `slider_tbl` (
  `slider_id` int(11) NOT NULL,
  `slider_title1` varchar(255) NOT NULL,
  `slider_title2` varchar(255) NOT NULL,
  `slider_description` varchar(255) NOT NULL,
  `slider_img_small` varchar(255) NOT NULL,
  `slider_img_large` varchar(255) NOT NULL,
  `slider_img_thumb` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider_tbl`
--

INSERT INTO `slider_tbl` (`slider_id`, `slider_title1`, `slider_title2`, `slider_description`, `slider_img_small`, `slider_img_large`, `slider_img_thumb`) VALUES
(0, 'test', 'test', 'test', '1471196054stock-photo-bus-car-headlight-176895764.jpg', '1471196054stock-photo-bus-car-headlight-176895764.jpg', '1471196054stock-photo-bus-car-headlight-176895764.jpg'),
(0, 'test', 'test', 'test', '1471196081stock-photo-businessman-running-to-catch-bus-stop-217875652.jpg', '1471196081stock-photo-businessman-running-to-catch-bus-stop-217875652.jpg', '1471196081stock-photo-businessman-running-to-catch-bus-stop-217875652.jpg'),
(0, 'test', 'test', 'test', '1471196103stock-photo-white-tourist-bus-of-city-lights-198794210.jpg', '1471196103stock-photo-white-tourist-bus-of-city-lights-198794210.jpg', '1471196103stock-photo-white-tourist-bus-of-city-lights-198794210.jpg'),
(0, 'test', 'test', 'test', '1471886559images (1).jpg', '1471886559images (1).jpg', '1471886559images (1).jpg'),
(0, 'b', 'bgb', 'njkjnk', '1471886598images (5).jpg', '1471886598images (6).jpg', '1471886598images (5).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `staff_tbl`
--

CREATE TABLE IF NOT EXISTS `staff_tbl` (
  `staff_id` int(11) NOT NULL,
  `joing_date` datetime NOT NULL,
  `location_job` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `staff_type` varchar(255) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `user_id` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_tbl`
--

INSERT INTO `staff_tbl` (`staff_id`, `joing_date`, `location_job`, `salary`, `staff_type`, `vehicle_id`, `user_id`) VALUES
(1, '2016-06-13 00:00:00', 'test', '`12345', 'test', 1, 15),
(2, '2016-06-26 00:00:00', 'test', 'test', 'test', 6, 15);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_tbl`
--

CREATE TABLE IF NOT EXISTS `ticket_tbl` (
  `ticket_id` int(11) NOT NULL,
  `ticket_title` varchar(255) NOT NULL,
  `ticket_price` varchar(255) NOT NULL,
  `ticket_detail` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket_tbl`
--

INSERT INTO `ticket_tbl` (`ticket_id`, `ticket_title`, `ticket_price`, `ticket_detail`) VALUES
(1, 'singl', '200', 'detail ticket'),
(2, 'singl', '200', 'detail ticket'),
(3, 'test', '900', 'test'),
(4, 'test', '1200', 'test'),
(5, 'test', '500', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `travel_tbl`
--

CREATE TABLE IF NOT EXISTS `travel_tbl` (
  `travel_id` int(11) NOT NULL,
  `ticket_status` varchar(255) NOT NULL,
  `route_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `no_of_tickets` int(255) NOT NULL,
  `total_price` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `ticket_prices` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `travel_tbl`
--

INSERT INTO `travel_tbl` (`travel_id`, `ticket_status`, `route_id`, `vehicle_id`, `no_of_tickets`, `total_price`, `user_id`, `ticket_prices`) VALUES
(27, 'confirmed', 22, 26, 5, 900, 19, 200),
(28, 'confirmed', 23, 26, 2, 400, 32, 200),
(30, 'confirmed', 22, 26, 3, 3000, 32, 1000);

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE IF NOT EXISTS `user_tbl` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_fullname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `user_photo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `date_birth` date NOT NULL,
  `contact_no` int(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`user_id`, `user_name`, `user_fullname`, `password`, `user_type`, `status`, `user_photo`, `email`, `city`, `gender`, `date_birth`, `contact_no`) VALUES
(14, 'admin', 'noman shah', '123', 'ADMIN', 'online', '1472013619download.jpg', 'nomanshah587@yahoo.com', 'kohat', 'on', '0000-00-00', 2147483647),
(16, 'manager', 'umar hayat', '123', 'MANAGER', 'online', '1456455832boy.gif', 'nomanshah434514@gmail.com``', 'koh', 'test', '0000-00-00', 123),
(19, 'ali hostess', 'customer', '123', 'STAFF', 'Hostess', '1457152608img2.jpg', 'nomanshah587@gmail.com', 'kohat', 'on', '0000-00-00', 2147483647),
(28, 'usama gaurd', 'shahnoman', '123', 'STAFF', 'Guard', '1457152608img2.jpg', 'nomanshah587@yahoo.com', 'bjhni', 'male', '0000-00-00', 2147483647),
(30, 'rija doctor', 'test', '123', 'STAFF', 'Doctor', '1457152608img2.jpg', 'noman@yahoo', 'bjhni', 'female', '0000-00-00', 2147483647),
(32, 'customer', 'shahnoman', '123', 'CUSTOMER', 'online', '1472015979download.jpg', 'lionshah55@yahoo.com', 'bjhni', 'male', '0000-00-00', 2147483647),
(33, 'nomanali', 'alishahshah', '123', 'CUSTOMER', 'online', '14720976121456456146man.gif', 'nomanshah587@yahoo.com', 'kohat', 'female', '0000-00-00', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_tbl`
--

CREATE TABLE IF NOT EXISTS `vehicle_tbl` (
  `vehicle_id` int(11) NOT NULL,
  `vehicle_name` varchar(255) NOT NULL,
  `vehicle_description` varchar(255) NOT NULL,
  `vehicle_no` varchar(255) NOT NULL,
  `vehicle_color` varchar(255) NOT NULL,
  `vehicle_mileage` varchar(255) NOT NULL,
  `vehicle_driver` varchar(255) NOT NULL,
  `vehicle_doctor` varchar(255) NOT NULL,
  `vehicle_hostess` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_tbl`
--

INSERT INTO `vehicle_tbl` (`vehicle_id`, `vehicle_name`, `vehicle_description`, `vehicle_no`, `vehicle_color`, `vehicle_mileage`, `vehicle_driver`, `vehicle_doctor`, `vehicle_hostess`) VALUES
(26, 'Daewo', 'best buses', 'KT30345', 'Red', '60km/h', 'umar', 'rija', 'ali'),
(27, 'lahore Express', 'Best buses', 'LHR44556', 'Black', '70km/h', 'umar', 'rija', 'ali'),
(28, 'Pindi Express', 'Best buses', 'PE1234', 'white', '80km/h', 'umar', 'rija', 'ali');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `config_site_tbl`
--
ALTER TABLE `config_site_tbl`
  ADD PRIMARY KEY (`config_id`);

--
-- Indexes for table `contact_us_tbl`
--
ALTER TABLE `contact_us_tbl`
  ADD PRIMARY KEY (`contact_us_id`);

--
-- Indexes for table `news_event_tbl`
--
ALTER TABLE `news_event_tbl`
  ADD PRIMARY KEY (`newsevent_id`);

--
-- Indexes for table `route_tbl`
--
ALTER TABLE `route_tbl`
  ADD PRIMARY KEY (`route_id`);

--
-- Indexes for table `staff_tbl`
--
ALTER TABLE `staff_tbl`
  ADD PRIMARY KEY (`staff_id`), ADD UNIQUE KEY `vehicle_id_2` (`vehicle_id`), ADD KEY `vehicle_id` (`vehicle_id`), ADD KEY `vehicle_id_3` (`vehicle_id`);

--
-- Indexes for table `ticket_tbl`
--
ALTER TABLE `ticket_tbl`
  ADD PRIMARY KEY (`ticket_id`);

--
-- Indexes for table `travel_tbl`
--
ALTER TABLE `travel_tbl`
  ADD PRIMARY KEY (`travel_id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`user_id`), ADD UNIQUE KEY `user_id` (`user_id`), ADD UNIQUE KEY `user_id_2` (`user_id`);

--
-- Indexes for table `vehicle_tbl`
--
ALTER TABLE `vehicle_tbl`
  ADD PRIMARY KEY (`vehicle_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `config_site_tbl`
--
ALTER TABLE `config_site_tbl`
  MODIFY `config_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact_us_tbl`
--
ALTER TABLE `contact_us_tbl`
  MODIFY `contact_us_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `news_event_tbl`
--
ALTER TABLE `news_event_tbl`
  MODIFY `newsevent_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `route_tbl`
--
ALTER TABLE `route_tbl`
  MODIFY `route_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `staff_tbl`
--
ALTER TABLE `staff_tbl`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ticket_tbl`
--
ALTER TABLE `ticket_tbl`
  MODIFY `ticket_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `travel_tbl`
--
ALTER TABLE `travel_tbl`
  MODIFY `travel_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `vehicle_tbl`
--
ALTER TABLE `vehicle_tbl`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
