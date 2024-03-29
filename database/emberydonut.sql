-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 16, 2022 at 02:39 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `emberydonut`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `con_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `mesg` varchar(50) NOT NULL,
  PRIMARY KEY (`con_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`con_id`, `name`, `email`, `phone`, `mesg`) VALUES
(12, 'Yoon Yati Lwin', 'yoonyatilwin@gmail.com', '', 'Very good service');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE IF NOT EXISTS `item` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(50) NOT NULL,
  `prod_no` varchar(50) NOT NULL,
  `price` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `img`, `prod_no`, `price`) VALUES
(25, 'donut1.jpg', 'Beach-ball Carnival Sprinkles', '1500MMK'),
(26, 'donut14.jpg', 'Strawberry-Shortcake', '1500MMK'),
(27, 'donut4.jpg', 'Glazed', '1500MMK'),
(28, 'donut9.jpg', 'Midnight-Madness', '1500MMK'),
(29, 'donut18.jpg', 'Powdered Sugar', '1500MMK'),
(30, 'donut17.jpg', 'Chocolate-Icing with Peanuts', '1500MMK'),
(31, 'donut10.jpg', 'Pina Colada', '1500MMK'),
(32, 'donut7.jpg', 'Vanilla-Icing with Oreo-Crumbl', '1500MMK'),
(34, 'donut11.jpg', 'Maple Bacon', '2000MMK'),
(35, 'donut13.jpg', 'Flip Flop', '1500MMK'),
(36, 'donut2.jpg', 'Blueberry Pancake', '1500MMK'),
(37, 'donut3.jpg', 'Peanut-butter Jelly', '1500MMK'),
(38, 'donut5.jpg', 'Peanut-butter Paradise', '1500MMK'),
(39, 'donut6.jpg', 'Strawberry Confetti', '1500MMK'),
(41, 'sundae4.jpg', 'Sundae CookiesnCream', '3500MMK'),
(42, 'sundae1.jpg', 'Sundae Confetti', '3500MMK'),
(43, 'sundae3.jpg', 'Sundae StrawberryShortcake', '3500MMK'),
(44, 'sundae5.jpg', 'Sundae Classic', '3500MMK'),
(46, 'sandwich1.jpg', 'Maple-Drizzle and Chopped-Bacon', '4500MMK'),
(47, 'sandwich2.jpg', 'Bacon and Egg Cheese2', '4000MMK'),
(48, 'coffee1.jpg', 'Americano', '2500MMK'),
(49, 'coffee1.jpg', 'Expresso', '2500MMK'),
(50, 'coffee2.jpg', 'Cappuccino', '3000MMK'),
(51, 'coffee3.jpg', 'Hot Chocolate', '3000MMK');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `ord_id` int(11) NOT NULL AUTO_INCREMENT,
  `productno` varchar(50) NOT NULL,
  `price` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `order_no` varchar(30) NOT NULL,
  PRIMARY KEY (`ord_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ord_id`, `productno`, `price`, `name`, `phone`, `address`, `order_no`) VALUES
(20, 'Beach-ball Carnival Sprinkles', '1500MMK', 'Shin Shin', '09777881279', 'Yankin', 'ord491'),
(23, 'Sundae CookiesnCream', '3500MMK', 'Kuu', '097856564654', 'tamwe', 'ord251');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `reg_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `township` varchar(30) NOT NULL,
  PRIMARY KEY (`reg_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`reg_id`, `name`, `email`, `password`, `phone`, `city`, `township`) VALUES
(23, 'Ember', 'ember@gmail.com', '12345', '09252628273', 'ygn', 'Myanmar'),
(26, 'Shin Shin', 'shinshin@gmail.com', '1234', '09777881279', 'Mdy', 'Myanmar'),
(27, 'Kuu Kuu', 'kuu@gmail.com', 'kuu', '095181860', 'YGN', 'Myanmar'),
(28, 'Yoon Yati Lwin', 'yoon@gmail.com', '1234', '09252628273', 'yjm', 'hft'),
(30, 'Soe Soe', 'soe@gmail.com', '4545', '09222233232', 'Mudon', 'Myanmar');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `name` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `pass`) VALUES
('admin', '1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
