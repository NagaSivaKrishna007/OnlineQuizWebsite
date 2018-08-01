-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2018 at 09:24 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kumar`
--

-- --------------------------------------------------------

--
-- Table structure for table `ans`
--

CREATE TABLE IF NOT EXISTS `ans` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `a` varchar(200) NOT NULL,
  `b` varchar(200) NOT NULL,
  `c` varchar(200) NOT NULL,
  `d` varchar(200) NOT NULL,
  `e` varchar(200) NOT NULL,
  `f` varchar(200) NOT NULL,
  `g` varchar(200) NOT NULL,
  `h` varchar(200) NOT NULL,
  `i` varchar(200) NOT NULL,
  `j` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3144 ;

--
-- Dumping data for table `ans`
--

INSERT INTO `ans` (`id`, `a`, `b`, `c`, `d`, `e`, `f`, `g`, `h`, `i`, `j`) VALUES
(1, '1', '3', '4', '2', '2', '3', '3', '3', '3', '3'),
(2, '4', '3', '4', '2', '2', '4', '3', '3', '3', '1'),
(3, '4', '3', '4', '2', '2', '4', '3', '3', '3', '1'),
(4, '4', '3', '4', '2', '2', '4', '3', '3', '3', '1'),
(5, '4', '3', '4', '2', '2', '4', '3', '3', '3', '1'),
(6, '4', '3', '4', '2', '2', '4', '3', '3', '3', '1'),
(10, '4', '3', '4', '2', '2', '2', '3', '4', '3', '1');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(150) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `role` enum('admin','student') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `pass`, `role`) VALUES
(8, 'siva@gmail.com', 'siva', 'admin'),
(10, 'anjali@gmail.com', 'anjali', 'student'),
(11, 'geetha@gmail.com', 'santhi', 'student'),
(12, 'Naga@gmail.com', '12345', 'student'),
(13, 'Naga@gmail.com', 'naga', 'student'),
(14, 'Naga@gmail.com', 'naga', 'student'),
(15, 'siva@gmail.com', 'siva', 'student'),
(16, 'anjali@gmail.com', 'anjali', 'student'),
(17, '1@gmail.com', '12345', 'student');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` varchar(150) NOT NULL,
  `user` varchar(150) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mob` varchar(150) NOT NULL,
  `dob` varchar(150) NOT NULL,
  `gen` varchar(100) NOT NULL,
  `qua` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `user`, `pass`, `email`, `mob`, `dob`, `gen`, `qua`) VALUES
('1', 'Geetha', 'santhi', 'geetha@gmail.com', '6565699', '2018-07-18', 'Female', 'MCA'),
('2', 'NagaSivaKrishna', '12345', 'Naga@gmail.com', '', '2018-07-12', 'male', ''),
('201611122', 'NagaSivaKrishna', '12345', '1@gmail.com', '', '2018-07-20', 'male', ''),
('3', 'Naga', 'naga', 'Naga@gmail.com', '', '2018-07-24', 'male', ''),
('4', 'Naga', 'naga', 'Naga@gmail.com', '', '2018-07-24', 'male', ''),
('5', 'siva', 'siva', 'siva@gmail.com', '', '2018-07-27', 'male', ''),
('6', 'ajitha', 'anjali', 'anjali@gmail.com', '', '2018-07-12', 'female', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
