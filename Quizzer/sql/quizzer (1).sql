-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 23, 2020 at 05:23 AM
-- Server version: 10.4.10-MariaDB
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
-- Database: `quizzer`
--

-- --------------------------------------------------------

--
-- Table structure for table `choice`
--

DROP TABLE IF EXISTS `choice`;
CREATE TABLE IF NOT EXISTS `choice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT 0,
  `text` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_question` (`question_id`)
) ENGINE=MyISAM AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `choice`
--

INSERT INTO `choice` (`id`, `question_id`, `is_correct`, `text`) VALUES
(1, 1, 1, '$_GET[]'),
(31, 5, 1, 'PHP: Hypertext Preprocessor'),
(4, 1, 0, 'Reset.from'),
(30, 4, 0, '0'),
(29, 4, 0, '2'),
(28, 4, 0, '3'),
(27, 4, 1, '1'),
(9, 1, 0, '$_SERVER[]'),
(10, 1, 0, '$_FILE[]'),
(11, 2, 0, 'Create Myfunction'),
(12, 2, 0, 'Myfunction Create'),
(13, 2, 1, 'function myFunc()'),
(14, 2, 0, 'New Function()'),
(26, 3, 0, 'C++'),
(25, 3, 0, 'JAVASCRIPT'),
(24, 3, 1, 'PYTHON'),
(23, 3, 0, 'PHP'),
(32, 5, 0, 'Private Home Page'),
(33, 5, 0, 'Personal Home Page'),
(34, 5, 0, 'Personal Hypertext Preprocessor');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `question_id` int(11) NOT NULL,
  `Text` text NOT NULL,
  PRIMARY KEY (`question_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `Text`) VALUES
(1, 'How do you get information from a form that is submitted using the \"get\" method?'),
(2, 'What is the correct way to create a function in PHP?\r\n\r\n'),
(3, 'what is the best BackEnd language in the history '),
(4, 'how many parameters mysqli->query() function takes? '),
(5, 'What does PHP stand for?');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

DROP TABLE IF EXISTS `result`;
CREATE TABLE IF NOT EXISTS `result` (
  `id_result` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) CHARACTER SET utf8 NOT NULL,
  `score` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id_result`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
