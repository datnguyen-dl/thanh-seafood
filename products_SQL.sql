-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2016 at 06:46 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thanh-seafood`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `pro_id` int(32) NOT NULL AUTO_INCREMENT,
  `pro_code` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `pro_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `pro_image` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `pro_brand` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `pro_amount` int(32) NOT NULL,
  `pro_detail` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `pro_writer` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `pro_insert_date` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `pro_expired` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `pro_rate` int(32) NOT NULL,
  `pro_price` int(32) NOT NULL,
  `pro_saleoff` int(32) NOT NULL,
  `pro_price_total` int(32) NOT NULL,
  `pro_type` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`pro_id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `pro_code`, `pro_name`, `pro_image`, `pro_brand`, `pro_amount`, `pro_detail`, `pro_writer`, `pro_insert_date`, `pro_expired`, `pro_rate`, `pro_price`, `pro_saleoff`, `pro_price_total`, `pro_type`) VALUES
(28, 'CA16841345125', 'bo cu chi', 'duoi-ga.jpg', 'nguyet anh', 20, 'nhap text', 'dat_f', '2016-08-04', '2016-08-12', 1, 35000, 0, 0, 1),
(27, 'CA16841345125', 'bo cu chi', 'duoi-ga.jpg', 'nguyet anh', 20, 'nhap text', 'dat_f', '2016-08-04', '2016-08-12', 1, 35000, 0, 0, 1),
(26, 'CA16841345125', 'bo cu chi', 'duoi-ga.jpg', 'nguyet anh', 20, 'nhap text', 'dat_f', '2016-08-04', '2016-08-12', 1, 35000, 0, 0, 1),
(25, '168413120', 'muc ong', 'muc-ong.jpg', 'ThanhSeafood', 20, 'nhap text thanh edit noi dung', 'dat_f', '2016-08-04', '2016-08-25', 2, 20000, 2, 0, 0),
(24, '168413120', 'muc ong', 'muc-ong.jpg', 'ThanhSeafood', 20, 'nhap text thanh edit noi dung', 'dat_f', '2016-08-04', '2016-08-25', 2, 20000, 2, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
