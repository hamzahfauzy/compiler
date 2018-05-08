-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 21, 2018 at 02:56 PM
-- Server version: 5.5.58-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `compiler_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bahasa`
--

CREATE TABLE IF NOT EXISTS `bahasa` (
  `bahasaID` int(11) NOT NULL AUTO_INCREMENT,
  `nama_bahasa` varchar(100) NOT NULL,
  `extension` varchar(100) NOT NULL,
  `path_environment` text NOT NULL,
  `compile_method` text NOT NULL,
  `run_method` text NOT NULL,
  PRIMARY KEY (`bahasaID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `bahasa`
--

INSERT INTO `bahasa` (`bahasaID`, `nama_bahasa`, `extension`, `path_environment`, `compile_method`, `run_method`) VALUES
(1, 'Java', 'java', '/usr/bin/java', 'javac {filename}.java 2>&1', 'java {filename}'),
(2, 'C++', 'cpp', '/usr/bin/g++', 'g++ {filename}.cpp -o {filename} 2>&1', './{filename}'),
(3, 'Pascal', 'pas', '/usr/bin/fpc', 'fpc {filename}.pas 2>&1', './{filename}');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
