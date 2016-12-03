-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 21, 2014 at 01:51 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_bulkandcheap`
--


-- --------------------------------------------------------

--
-- Table structure for table `_tbl_options`
--

CREATE TABLE IF NOT EXISTS `_tbl_options` (
  `_opt_id` int(11) NOT NULL AUTO_INCREMENT,
  `_opt_name` varchar(200) NOT NULL,
  `_opt_value` text NOT NULL,
  PRIMARY KEY (`_opt_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `_tbl_order`
--

CREATE TABLE IF NOT EXISTS `_tbl_order` (
  `_oid` varchar(20) NOT NULL,
  `_pl_id` int(10) NOT NULL,
  `_pl_title` varchar(200) NOT NULL,
  `_user_id` int(11) NOT NULL,
  `_qty` int(10) NOT NULL,
  `_unite_price` float NOT NULL,
  `_total_price` float NOT NULL,
  `_status` varchar(10) NOT NULL,
  PRIMARY KEY (`_oid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_tbl_order`
--

INSERT INTO `_tbl_order` (`_oid`, `_pl_id`, `_pl_title`, `_user_id`, `_qty`, `_unite_price`, `_total_price`, `_status`) VALUES
('', 3, 'Facebook photo/video/post/status likes (50% profile pic, instant delivery)', 2, 1000, 0, 700, 'yes'),
('0', 2, '', 2, 1000, 0, 1000, 'yes'),
('1400665305', 2, 'Facebook fanpage likes', 2, 20, 0.07, 1.4, 'yes'),
('1400667232', 3, 'Facebook photo/video/post/status likes (50% profile pic, instant delivery)', 2, 500, 0.7, 350, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `_tbl_payment`
--

CREATE TABLE IF NOT EXISTS `_tbl_payment` (
  `_pid` varchar(20) NOT NULL,
  `_user_id` int(11) NOT NULL,
  `_payment_type` varchar(20) NOT NULL,
  `_amount` int(10) NOT NULL,
  `_status` varchar(10) NOT NULL,
  PRIMARY KEY (`_pid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `_tbl_payment`
--

INSERT INTO `_tbl_payment` (`_pid`, `_user_id`, `_payment_type`, `_amount`, `_status`) VALUES
('', 2, 'paypal', 10, 'yes'),
('8578678786', 2, 'paypal', 2050, 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `_tbl_price_list`
--

CREATE TABLE IF NOT EXISTS `_tbl_price_list` (
  `_pl_id` int(11) NOT NULL AUTO_INCREMENT,
  `_title` varchar(200) NOT NULL,
  `_price` float NOT NULL,
  PRIMARY KEY (`_pl_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `_tbl_price_list`
--

INSERT INTO `_tbl_price_list` (`_pl_id`, `_title`, `_price`) VALUES
(1, 'Twitter Retweets (High Quality, Instant)', 0.07),
(2, 'Facebook fanpage likes', 0.07),
(3, 'Facebook photo/video/post/status likes (50% profile pic, instant delivery)', 0.7),
(4, 'Facebook subscriber/follower (50% profile pic, instant delivery)', 0.7),
(5, 'Instagram followers (100% profile pic, instant delivery)', 1.5),
(6, 'Instagram likes (100% profile pic, instant delivery)', 1.5),
(7, 'Twitter Followers (High quality, Instant) (SERVER 3)', 1),
(8, 'Twitter followers (no pics)', 0.2),
(9, 'Facebook Website Likes', 2),
(10, 'SoundCloud Plays', 1.2),
(11, 'Twitter Arab Followers', 1),
(12, 'Twitter USA Followers', 3),
(13, 'Twitter Favorites (High Quality, Instant)', 0.7),
(14, 'Twitter share', 2),
(15, 'Instagram ARAB photo likes', 2);

-- --------------------------------------------------------

--
-- Table structure for table `_tbl_user`
--

CREATE TABLE IF NOT EXISTS `_tbl_user` (
  `_id` int(11) NOT NULL AUTO_INCREMENT,
  `_email` varchar(200) NOT NULL,
  `_full_name` varchar(100) NOT NULL,
  `_paw` varchar(50) NOT NULL,
  `_user_type` varchar(10) NOT NULL,
  `_status` varchar(10) NOT NULL,
  PRIMARY KEY (`_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `_tbl_user`
--

INSERT INTO `_tbl_user` (`_id`, `_email`, `_full_name`, `_paw`, `_user_type`, `_status`) VALUES
(1, 'admin@gmail.com', 'Administrator', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'yes'),
(2, 'mohit@gmail.com', 'Mohit Sarkar', 'e10adc3949ba59abbe56e057f20f883e', 'user', 'yes');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
