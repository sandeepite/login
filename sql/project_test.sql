-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 10, 2017 at 05:03 PM
-- Server version: 5.5.52-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `age` int(3) NOT NULL,
  `address` varchar(200) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `email_id`, `mobile`, `age`, `address`) VALUES
('ajay', '29e457082db729fa1059d4294ede3909', 'ajay@gmail.com', '9886757878', 24, 'Manjunatha, Roopena Agrahara'),
('sandeep', '00dcf16d903e5890aaba465b0b1ba51f', 'sandeep100792@gmail.com', '9029395814', 24, '2/1 Jai Bharat Housing Society Ganesh Mandir 90 Feet Road Sakinaka'),
('sandeep123', '00dcf16d903e5890aaba465b0b1ba51f', 'sandeep100792@gmail.com', '9029395814', 24, '2/1 Jai Bharat Housing Society Ganesh Mandir 90 Feet Road Sakinaka'),
('test', '098f6bcd4621d373cade4e832627b4f6', 'test@yahoo.com', '7303551943', 17, 'kanpur UP'),
('test1', '098f6bcd4621d373cade4e832627b4f6', 'sandeep100792@gmail.com', '9029395814', 24, '2/1 Jai Bharat Housing Society Ganesh Mandir 90 Feet Road Sakinaka');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `banner_images` varchar(255) NOT NULL,
  `banner_images1` varchar(111) NOT NULL,
  `project_name` varchar(200) NOT NULL,
  `project_cat` varchar(200) NOT NULL,
  `project_client` varchar(200) NOT NULL,
  `project_start_date` varchar(200) NOT NULL,
  `project_com_date` varchar(200) NOT NULL,
  `project_assign` varchar(111) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `banner_images`, `banner_images1`, `project_name`, `project_cat`, `project_client`, `project_start_date`, `project_com_date`, `project_assign`) VALUES
(39, 'up_images/11Depositphotos_18463977_original.jpg', 'up_images/11Depositphotos_13131238_original.jpg', 'project1', 'project category', 'client name', '2017-01-01', '2017-02-02', 'Ravi'),
(40, 'up_images/17Depositphotos_4137295_original-768x768.jpg', 'up_images/17Depositphotos_4640405_original-900x510.jpg', 'IBM', 'Website', 'Reliance', '2017-01-13', '2017-04-02', 'Sachin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
