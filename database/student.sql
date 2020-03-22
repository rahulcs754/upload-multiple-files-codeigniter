-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 22, 2020 at 05:51 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

DROP TABLE IF EXISTS `gambar`;
CREATE TABLE IF NOT EXISTS `gambar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `picture` varchar(250) NOT NULL,
  `picture_size` varchar(250) NOT NULL,
  `pic_ext` varchar(100) NOT NULL,
  `pic_path` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id`, `picture`, `picture_size`, `pic_ext`, `pic_path`) VALUES
(1, 'I8YOQ4n9hEw.jpg', '', '', ''),
(2, 'JgDlIt0bhV0.jpg', '', '', ''),
(3, 'oXaBeR70MQE.jpg', '', '', ''),
(4, 'CobVcYS_Me0.jpg', '159.63', '.jpg', 'C:/wamp64/www/student/uploads/'),
(5, 'oXaBeR70MQE.jpg', '361.6', '.jpg', 'C:/wamp64/www/student/uploads/'),
(6, 'QL85wr7YlWY.jpg', '288', '.jpg', 'C:/wamp64/www/student/uploads/'),
(7, '7qW_FmptFzQ.jpg', '221.87', '.jpg', 'C:/wamp64/www/student/uploads/'),
(8, 'QL85wr7YlWY1.jpg', '288', '.jpg', 'C:/wamp64/www/student/uploads/'),
(9, 'wyUlps3Tj7A.jpg', '204.59', '.jpg', 'C:/wamp64/www/student/uploads/');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `mobile` int(11) NOT NULL,
  `course` char(100) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
