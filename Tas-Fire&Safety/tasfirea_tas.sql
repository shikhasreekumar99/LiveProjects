-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 05, 2015 at 09:13 AM
-- Server version: 5.1.60-rel13.1-log
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tasfirea_tas`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `gallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `services_id` int(11) NOT NULL,
  `image` blob NOT NULL,
  PRIMARY KEY (`gallery_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`gallery_id`, `services_id`, `image`) VALUES
(1, 1, 0x496d6167652f3938353853657276696365312e332e6a7067),
(2, 1, 0x496d6167652f3639353953657276696365312e342e6a7067),
(3, 1, 0x496d6167652f3634353253657276696365312e352e6a7067),
(4, 1, 0x496d6167652f3732323753657276696365312e362e6a7067),
(5, 1, 0x496d6167652f3531363653657276696365312e372e6a7067),
(6, 1, 0x496d6167652f3539373053657276696365312e382e6a7067),
(7, 1, 0x496d6167652f32343453657276696365312e392e706e67),
(8, 1, 0x496d6167652f3837393953657276696365312e31302e6a7067),
(9, 1, 0x496d6167652f3537303053657276696365312e31312e6a7067),
(10, 1, 0x496d6167652f3632383753657276696365312e31322e6a7067),
(11, 1, 0x496d6167652f393353657276696365312e31332e6a7067),
(12, 2, 0x496d6167652f3235313853657276696365322e322e6a7067),
(13, 2, 0x496d6167652f3235313353657276696365322e332e6a7067),
(14, 2, 0x496d6167652f3631343253657276696365322e332e6a7067),
(15, 2, 0x496d6167652f3437363053657276696365322e342e6a7067),
(16, 2, 0x496d6167652f3231383153657276696365322e352e6a7067),
(17, 2, 0x496d6167652f3533373853657276696365322e362e6a7067),
(18, 2, 0x496d6167652f3234323253657276696365322e372e6a7067),
(19, 2, 0x496d6167652f3937323953657276696365322e382e6a7067),
(20, 2, 0x496d6167652f3233393153657276696365322e392e6a7067),
(22, 2, 0x496d6167652f3935353253657276696365322e31302e6a7067),
(23, 2, 0x496d6167652f3436383953657276696365322e31312e6a7067),
(24, 2, 0x496d6167652f3733303453657276696365322e31322e6a7067),
(25, 2, 0x496d6167652f3553657276696365322e31332e6a7067),
(26, 3, 0x496d6167652f3338353153657276696365332e322e6a7067),
(27, 3, 0x496d6167652f3636383653657276696365332e332e6a7067),
(28, 3, 0x496d6167652f3531383853657276696365332e342e6a7067),
(29, 3, 0x496d6167652f3936363453657276696365332e352e6a7067),
(31, 3, 0x496d6167652f3931333553657276696365332e362e6a7067),
(32, 3, 0x496d6167652f3938303953657276696365332e372e6a7067),
(33, 3, 0x496d6167652f3337323153657276696365332e382e6a7067),
(34, 3, 0x496d6167652f3135363453657276696365332e392e6a7067),
(35, 3, 0x496d6167652f3639363853657276696365332e31302e6a7067),
(36, 4, 0x496d6167652f3433383353657276696365342e322e706e67),
(37, 4, 0x496d6167652f3231393853657276696365342e332e6a7067),
(38, 4, 0x496d6167652f34353153657276696365342e342e6a7067),
(39, 4, 0x496d6167652f31383053657276696365342e352e6a7067),
(40, 4, 0x496d6167652f3839303453657276696365342e372e6a7067),
(41, 4, 0x496d6167652f3934393453657276696365342e382e6a7067),
(42, 4, 0x496d6167652f31373853657276696365342e392e6a7067),
(43, 4, 0x496d6167652f3634353353657276696365342e31302e6a7067),
(44, 4, 0x496d6167652f32363253657276696365342e31312e6a7067),
(45, 4, 0x496d6167652f3133303453657276696365342e31322e6a7067),
(46, 5, 0x496d6167652f39353973657276696365352e322e6a7067),
(47, 5, 0x496d6167652f3737383673657276696365352e332e706e67),
(48, 5, 0x496d6167652f3332323673657276696365352e342e4a5047),
(49, 5, 0x496d6167652f3931323673657276696365352e352e6a7067),
(50, 5, 0x496d6167652f38313573657276696365352e362e6a7067),
(51, 5, 0x496d6167652f3435333373657276696365352e372e6a7067),
(52, 5, 0x496d6167652f3137333573657276696365352e382e6a7067),
(53, 5, 0x496d6167652f3432323373657276696365352e392e6a7067),
(54, 5, 0x496d6167652f3636383973657276696365352e31312e6a7067),
(55, 5, 0x496d6167652f3238373973657276696365352e31302e6a7067),
(56, 6, 0x496d6167652f3737373073657276696365362e322e6a7067),
(57, 6, 0x496d6167652f3938303173657276696365362e332e6a7067),
(58, 6, 0x496d6167652f3431393773657276696365362e342e6a7067),
(60, 6, 0x496d6167652f3733333573657276696365362e352e6a7067),
(61, 6, 0x496d6167652f38343773657276696365362e362e6a7067),
(62, 6, 0x496d6167652f3430343473657276696365362e372e6a7067),
(63, 6, 0x496d6167652f3236373973657276696365362e382e6a7067),
(64, 6, 0x496d6167652f3530373873657276696365362e392e6a7067),
(65, 6, 0x496d6167652f3233353873657276696365362e31302e6a7067),
(66, 4, 0x496d6167652f3335343673657276696365345f2e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `email`) VALUES
(1, 'ambika', '123', ''),
(2, 'chikku', '123', 'chikku@gmail.com'),
(3, 'priya', '123', 'priya@gmail.com'),
(4, 'admin', 'admin', 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `points`
--

CREATE TABLE IF NOT EXISTS `points` (
  `points_id` int(11) NOT NULL AUTO_INCREMENT,
  `services_id` int(11) NOT NULL,
  `points` varchar(225) NOT NULL,
  PRIMARY KEY (`points_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `points`
--

INSERT INTO `points` (`points_id`, `services_id`, `points`) VALUES
(1, 1, 'Designing- we provide foolproof design to save your life and property'),
(2, 1, 'Installation-Installation performed by qualified and experienced technicians.'),
(3, 1, 'Service-24/7 on call services will be provided.'),
(4, 1, 'Deficiency Repair-on site deficiency repair to back the system to normal.'),
(5, 1, 'Annual Inspections â€“ Fire Alarm, Fire Sprinkler, Fire Extinguisher, Fire Hoses, Monitoring.'),
(6, 1, 'Monthly Inspections â€“ As per Ontario fire code and ULC standards.'),
(7, 1, 'Bi-monthly Inspections â€“ As per Ontario fire code and ULC standards.'),
(8, 1, 'Semi-Annual Inspections â€“ As per Ontario fire code and ULC standards'),
(9, 1, 'Fire Alarm â€“ Inspections, testing, servicing and repair of all makes and models.'),
(10, 1, 'Sprinkler â€“ Inspections, testing, servicing and repair of all makes and models.'),
(11, 1, 'Fire Hoses â€“ Inspections, testing, servicing and repair of all makes and models'),
(12, 2, 'Fire Extinguisher â€“ Inspections, testing, servicing and repair of all makes and models.'),
(13, 2, 'Emergency Lighting Units â€“ Inspections, testing, servicing and repair of all makes and models.'),
(14, 6, 'ï€ŒDistributed audio system'),
(15, 6, 'Audio System');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `services_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `image1` blob NOT NULL,
  `image2` blob,
  PRIMARY KEY (`services_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`services_id`, `title`, `description`, `image1`, `image2`) VALUES
(1, 'Fire Alarm & Protection System', 'As a leading Fire Protection company in Hamilton, we provide system design, installation, service, maintenance, inspection and certification of all kindsâ€™ fire alarm and fire protection system, Our Service Includes but not limited to', 0x496d6167652f3735393853657276696365312e312e706e67, 0x496d6167652f32393253657276696365312e322e6a7067),
(2, 'Fire Extinguisher & Emergency Lights', 'Our factory trained technicians and licensed 309A electricians will perform the required testing, inspection and maintenance on all kinds Fire Extinguishers and emergency lights and provide you with the written records as required by law. A full discharge of each unit must be performed annually.', 0x496d6167652f3539313453657276696365322e312e6a7067, 0x496d6167652f3635393153657276696365322e31302e6a7067),
(3, 'Carbon Monoxide & Smoke Alarms', 'We are a Fire&Security company located in Hamilton(ON) provides various products and services throughout southern Ontario. Our core focus is for fire & safety which provide annual inspection, certification, deficiency repairs, preventive and corrective maintenance of fire alarm, fire protection equipment, fire extinguishers, emergency lighting, sprinkler systems, intercoms, access control, security alarm, time distribution, TV distribution, public address, access control and cameras. We provide re-lambing service and electrician service. We provide service to residential and commercial properties as per building code, fire code and electrical code. <p>Our fully licensed CFAA technicians, 309A licensed electricians, sprinkler fitters, factory trained fire protection and suppression technicians provide quality & timely service and advise to ensure your safety. We ensure very completive rates in the area and provides price match guarantee for all our products and services.Whether you need to create a brand from scratch, including marketing materials and a beautiful and functional websiteWhether you are looking for a design refresh we are confident you will be pleased with the results. Integer sollicitudin vulputate lacus, congue vulputate nisl eleifend in.Whether you need to create a brand from scratch, including marketing materials and a beautiful and functional websiteWhether you are looking for a design refresh we are confident you will be pleased with the results. Integer sollicitudin vulputate lacus, congue vulputate nisl eleifend in.</p>', 0x496d6167652f3238313053657276696365332e312e6a7067, NULL),
(4, 'Security Systems & Camera', 'We are a Fire&Security company located in Hamilton(ON) provides various products and services throughout southern Ontario. Our core focus is for fire & safety which provide annual inspection, certification, deficiency repairs, preventive and corrective maintenance of fire alarm, fire protection equipment, fire extinguishers, emergency lighting, sprinkler systems, intercoms, access control, security alarm, time distribution, TV distribution, public address, access control and cameras. We provide re-lambing service and electrician service. We provide service to residential and commercial properties as per building code, fire code and electrical code.', 0x496d6167652f39323873657276696365342e312e6a7067, NULL),
(5, 'Electrical & Pot Lights', 'We are a Fire&Security company located in Hamilton(ON) provides various products and services throughout southern Ontario. Our core focus is for fire & safety which provide annual inspection, certification, deficiency repairs, preventive and corrective maintenance of fire alarm, fire protection equipment, fire extinguishers, emergency lighting, sprinkler systems, intercoms, access control, security alarm, time distribution, TV distribution, public address, access control and cameras. We provide re-lambing service and electrician service. We provide service to residential and commercial properties as per building code, fire code and electrical code.', 0x496d6167652f3433393873657276696365352e312e6a7067, NULL),
(6, 'Audio Video & Home Theatre', 'We are a Fire&Security company located in Hamilton(ON) provides various products and services throughout southern Ontario. Our core focus is for fire & safety which provide annual inspection, certification, deficiency repairs, preventive and corrective maintenance of fire alarm, fire protection equipment, fire extinguishers, emergency lighting, sprinkler systems, intercoms, access control, security alarm, time distribution, TV distribution, public address, access control and cameras. We provide re-lambing service and electrician service. We provide service to residential and commercial properties as per building code, fire code and electrical code.', 0x496d6167652f3335363773657276696365362e312e6a7067, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testimonals`
--

CREATE TABLE IF NOT EXISTS `testimonals` (
  `test_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `name` varchar(50) NOT NULL,
  `website` varchar(100) NOT NULL,
  `image` blob NOT NULL,
  PRIMARY KEY (`test_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `testimonals`
--

INSERT INTO `testimonals` (`test_id`, `title`, `description`, `name`, `website`, `image`) VALUES
(2, 'Very  Good Experience', 'I like it', 'Priya', 'www.example.com', 0x496d6167652f3839353264656661756c745f757365722e706e67),
(3, 'Satisified', 'Very good team work.', 'Shikha', 'www.eample.com', 0x496d6167652f3937363564656661756c742d6d616c652d3235302e6a7067),
(4, 'Very  Good Experience', 'Nice', 'Nikhilesh', 'www.example.com', 0x496d6167652f3434303064656661756c742d6d616c652d3235302e6a7067),
(5, 'Nice Work', 'Nice Work', 'John ', 'www.example.com', 0x496d6167652f3937323764656661756c742d6d616c652d3235302e6a7067);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
