-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 27, 2023 at 10:03 AM
-- Server version: 8.0.32
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sartorialdigest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tble`
--

DROP TABLE IF EXISTS `admin_tble`;
CREATE TABLE IF NOT EXISTS `admin_tble` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `xpassword` varchar(50) DEFAULT NULL,
  `xdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `xApproval` int DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin_tble`
--

INSERT INTO `admin_tble` (`id`, `email`, `xpassword`, `xdate`, `fname`, `lname`, `xApproval`) VALUES
(1, 'test@yahoo.com', 'test', '2023-03-25 10:41:48', 'kesther', 'Uwaje', 0);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_tble`
--

DROP TABLE IF EXISTS `gallery_tble`;
CREATE TABLE IF NOT EXISTS `gallery_tble` (
  `id` int NOT NULL AUTO_INCREMENT,
  `picID` int DEFAULT NULL,
  `pic` longtext,
  `xDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `gallery_tble`
--

INSERT INTO `gallery_tble` (`id`, `picID`, `pic`, `xDate`) VALUES
(1, 1, 'd3.jpg', '2023-03-21 02:31:36'),
(2, 3, 'd5.jpg', '2023-03-21 02:32:11'),
(3, 7, 'd1.jpg', '2023-03-27 10:14:55'),
(4, 9, 'd3.jpg', '2023-03-27 10:41:26');

-- --------------------------------------------------------

--
-- Table structure for table `stories_tble`
--

DROP TABLE IF EXISTS `stories_tble`;
CREATE TABLE IF NOT EXISTS `stories_tble` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `location` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `msg` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `userID` int NOT NULL,
  `xDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `xApproval` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `stories_tble`
--

INSERT INTO `stories_tble` (`id`, `title`, `location`, `msg`, `userID`, `xDate`, `xApproval`) VALUES
(4, 'Visit to Egypt', 'The Tribes of Egypt', 'regreregrgrgregregregrg', 10, '2023-03-27 10:42:25', 1),
(5, 'fshfhf', 'hfdhfdhf', 'dhfdhfdhfdhfdhfd', 10, '2023-03-27 10:42:26', 1),
(6, 'Visit to Africa', 'dsgdsgdsg', 'dsgsdgdsgdsgdsgsd', 10, '2023-03-27 10:17:15', 0),
(7, 'Aso Ebi Festial', 'Nigeria', 'It happens in Nigeria,  June.  for Mothers and Kids only', 15, '2023-03-27 10:17:08', 1),
(8, 'Visit to Egypt', 'Egypt', 'fgddfgdfgdfgfdgdfgdfgfd', 15, '2023-03-27 10:17:11', 1),
(9, 'Travel to Canada', 'Canada', 'Test description for Canada', 16, '2023-03-27 10:41:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `fname`) VALUES
(1, 'khhkh'),
(2, 'khhkh'),
(3, 'khhkh');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `lname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `xlocation` longtext,
  `xdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `pic` longtext,
  `xpassword` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `xlocation`, `xdate`, `pic`, `xpassword`) VALUES
(10, 'kesther', 'Uwaje', 'kester@yahoo.com', 'sdfdsfdsf', '2023-03-20 12:43:19', '1.png', 'aa'),
(11, 'sdgsdgds', 'gsdgds', 'gsdg', 'dsgsdg', '2023-03-27 09:42:49', '7.jpg', ''),
(12, 'sdgsdgds', 'gsdgds', 'gsdg@yahoo.com', 'dsgsdg', '2023-03-27 09:44:17', 'profile.png', 'eerere'),
(13, 'sdgsdgds', 'gsdgds', 'gsddg@yahoo.com', 'dsgsdg', '2023-03-27 09:45:14', 'd4.jpg', 'ddd'),
(14, 'sdgds', 'dsgdsg', 'sdgdsgsd', 'fdgdfg', '2023-03-27 10:02:38', '3.jpg', 'aa'),
(15, 'Smart', 'Uwaje', 'smart1@gmail.com', 'Nigeria', '2023-03-27 10:12:57', 'd5.jpg', 'smart'),
(16, 'Smart', 'Uwaje', 'uwaje@gmail.com', 'United Kingdom', '2023-03-27 10:40:25', '4.jpg', 'uwaje');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
