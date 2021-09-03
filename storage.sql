-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Mar 21, 2020 at 01:44 AM
-- Server version: 8.0.18
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
-- Database: `storage`
--

-- --------------------------------------------------------

--
-- Table structure for table `audios`
--

DROP TABLE IF EXISTS `audios`;
CREATE TABLE IF NOT EXISTS `audios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `location` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `audios`
--

INSERT INTO `audios` (`id`, `name`, `location`) VALUES
(1, 'OFB1cDZMNEMvNmxBcXI0Kzl3emNKY052NHplY1BjRU05YnV4NUd2dkEzV0dBemFvOU9mc09sSm93ZXlQdm1oWQ==', 'NnZEeURqZGhCMkZkTnhtU3dYRDQvQWhpdWUyNG1ScmQ5TzM1NmRrK2I1M0RzRElXOHNBNHlhc3I3V0Z5Wjdqaw=='),
(2, 'OWsvYXJTdjVwSGVjekJUUnk2U2NyeSttekNwQitTYXBsa0Q2M0Foc0JETT0=', 'NnZEeURqZGhCMkZkTnhtU3dYRDQvR1BsWmZSZ3R1Y3h0d1hwaUF1Sjk0L1JtVW83d0V4elVUQmdhY3hMN091RA=='),
(3, 'OWsvYXJTdjVwSGVjekJUUnk2U2NyeSttekNwQitTYXBsa0Q2M0Foc0JETT0=', 'NnZEeURqZGhCMkZkTnhtU3dYRDQvR1BsWmZSZ3R1Y3h0d1hwaUF1Sjk0L1JtVW83d0V4elVUQmdhY3hMN091RA==');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `phone_number` int(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

DROP TABLE IF EXISTS `documents`;
CREATE TABLE IF NOT EXISTS `documents` (
  `ID` varchar(150) NOT NULL,
  `name` varchar(150) NOT NULL,
  `location` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `location` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `name`, `location`) VALUES
(1, 'R1lzenc3Rm9VZlRLY0xORi96UUpidEdINTJCSFhNL0Y1WXZkL2Y3NStkMD0=', 'NEVzOTR3Q1ZVMDM1RGlYSmNHaUxMVXhRRFh6UFQ2b1FrcnlUdWl2N2VpZz0='),
(2, 'R1lzenc3Rm9VZlRLY0xORi96UUpidEdINTJCSFhNL0Y1WXZkL2Y3NStkMD0=', 'NEVzOTR3Q1ZVMDM1RGlYSmNHaUxMVXhRRFh6UFQ2b1FrcnlUdWl2N2VpZz0='),
(3, 'R1lzenc3Rm9VZlRLY0xORi96UUpidEdINTJCSFhNL0Y1WXZkL2Y3NStkMD0=', 'NEVzOTR3Q1ZVMDM1RGlYSmNHaUxMVXhRRFh6UFQ2b1FrcnlUdWl2N2VpZz0='),
(4, 'Qjc2T3lQMmhMb2R1SG9mdVppd0tDTDZXWEV5UXhYM1JSbjZiUTJaOEwvVDNVNUY1a3ZCZExaUzE3R1BScnlyNg==', 'dHBVL3ZrbXdhWFNCczNJbW1OSi9ZcHFxbm1EUmZMc2MzUU1uUm81YURueXVCMkRYSTJ0QldjTXMyQXVsRFNzc3g2VGorUUd4RDQvSnZKU2NJd054SEE9PQ==');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE IF NOT EXISTS `registration` (
  `FirstName` varchar(150) NOT NULL,
  `Surname` varchar(150) NOT NULL,
  `Gender` varchar(150) NOT NULL,
  `UserName` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Password` varchar(150) NOT NULL,
  `EMail` varchar(150) NOT NULL,
  `Date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `Username`, `Password`) VALUES
(1, 'vinne', 'mpeka');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(1000) NOT NULL,
  `location` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`, `location`) VALUES
(1, 'Qjc2T3lQMmhMb2R1SG9mdVppd0tDSlVSZXlDZkhFSXRVemxuRExRQk1HdDFpSnJuYUxpeE1ISUZ1ZGYrQTZ2SA==', 'ZitOemF2dkdvdk1iOU45Vlg0eDVQY0RNWm5KcG8rVVRDWG9LWmZJbVNSaFZIZEN4NVRiNGQ1NW1LTGU2UW9kc0lwQkxOSHRWOEhqc1Z2ZWhLa2EwVWc9PQ=='),
(2, 'Qjc2T3lQMmhMb2R1SG9mdVppd0tDSlVSZXlDZkhFSXRVemxuRExRQk1HdDFpSnJuYUxpeE1ISUZ1ZGYrQTZ2SA==', 'ZitOemF2dkdvdk1iOU45Vlg0eDVQY0RNWm5KcG8rVVRDWG9LWmZJbVNSaFZIZEN4NVRiNGQ1NW1LTGU2UW9kc0lwQkxOSHRWOEhqc1Z2ZWhLa2EwVWc9PQ=='),
(3, 'Qjc2T3lQMmhMb2R1SG9mdVppd0tDSlVSZXlDZkhFSXRVemxuRExRQk1HdDFpSnJuYUxpeE1ISUZ1ZGYrQTZ2SA==', 'ZitOemF2dkdvdk1iOU45Vlg0eDVQY0RNWm5KcG8rVVRDWG9LWmZJbVNSaFZIZEN4NVRiNGQ1NW1LTGU2UW9kc0lwQkxOSHRWOEhqc1Z2ZWhLa2EwVWc9PQ=='),
(4, 'NXpKSDdDeTFIV2h6WjJ3VUpvdUhTT3lJY2tGRXd1K3VoamR0MjRCanU2Yz0=', 'WFdSdG1sQVo4SFF6dHNhT2RHK3had1ZOT2cxV1BlMnhFdGpnVkkwQXZ3RmdLYTNCQXZSSlYvaVB0eFl1NWVMdQ=='),
(5, 'NXpKSDdDeTFIV2h6WjJ3VUpvdUhTT3lJY2tGRXd1K3VoamR0MjRCanU2Yz0=', 'WFdSdG1sQVo4SFF6dHNhT2RHK3had1ZOT2cxV1BlMnhFdGpnVkkwQXZ3RmdLYTNCQXZSSlYvaVB0eFl1NWVMdQ=='),
(6, 'NXpKSDdDeTFIV2h6WjJ3VUpvdUhTT3lJY2tGRXd1K3VoamR0MjRCanU2Yz0=', 'WFdSdG1sQVo4SFF6dHNhT2RHK3had1ZOT2cxV1BlMnhFdGpnVkkwQXZ3RmdLYTNCQXZSSlYvaVB0eFl1NWVMdQ=='),
(7, 'NXpKSDdDeTFIV2h6WjJ3VUpvdUhTT3lJY2tGRXd1K3VoamR0MjRCanU2Yz0=', 'WFdSdG1sQVo4SFF6dHNhT2RHK3had1ZOT2cxV1BlMnhFdGpnVkkwQXZ3RmdLYTNCQXZSSlYvaVB0eFl1NWVMdQ=='),
(8, 'NXpKSDdDeTFIV2h6WjJ3VUpvdUhTT3lJY2tGRXd1K3VoamR0MjRCanU2Yz0=', 'WFdSdG1sQVo4SFF6dHNhT2RHK3had1ZOT2cxV1BlMnhFdGpnVkkwQXZ3RmdLYTNCQXZSSlYvaVB0eFl1NWVMdQ=='),
(9, 'NXpKSDdDeTFIV2h6WjJ3VUpvdUhTT3lJY2tGRXd1K3VoamR0MjRCanU2Yz0=', 'WFdSdG1sQVo4SFF6dHNhT2RHK3had1ZOT2cxV1BlMnhFdGpnVkkwQXZ3RmdLYTNCQXZSSlYvaVB0eFl1NWVMdQ=='),
(10, 'T0ZJempnYk94bXRVZEdINzd6V1R4N3NuN2UwdjNoLzQwV1h1cjQ0WnZrZzJmUW5xalBvR1hhWGZKMGtTL2kxUw==', 'Ty9RMHZnSW11QWR4dW43Qzl0ZjhmUlNSQWh1UU1wdTRhZkY5cDI4YUhrRUdEbzhxK2h4TmVwUW5zRlVNQm9tcVh3WHROMGJ3MDBOSjJ0UFNiRmtMeUE9PQ=='),
(11, 'L05lWHVzYnBwUVgxWmtjWTVucHBSa1FzZzVJcmtkS0RjVjZZOWFYMm0vc25WVC9xU1RjQ0RNcXRGY04yOERoZA==', 'K2NiK2lVR0thbnEzOGV3YmljM2VZZ21YaDZ0SU4vRUxZanFjUWJOc2VwbWsrcURzdU91VjhSb2xCODhEZ3llUQ=='),
(12, 'S09rb1FrUHFhY2wvb3A1Wk8wVFkzVlZtSU9mTjJqOWN0ZWp2KzhXc0dxMWFMcU5sTTRLS2F1NjM0bGxGUkNsbg==', 'dnhvT0ZwS2NiQ3lRRU5aK1ZsOHM0emsyQkVGYjdDMHg4THhnV2JLYzNPUFpVWCtBczJJL2toUVJqSmk2aTA5eQ=='),
(13, 'VUxMUDAvN2FsOGhXYjF6cFUrRlFFRnZjN202aytodTdYRTR0NG81Nmt2cz0=', 'NE55MFBIUmhoR25rczZhZDMwZ3phS3ZLSFJHcDFkckxZdVY1Tk0ydGhVUWVNSFZjSVh4aU1BZXUvK1gzYndqRg==');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
