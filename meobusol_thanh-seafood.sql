-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2016 at 01:03 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meobusol_thanh-seafood`
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
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `pro_code`, `pro_name`, `pro_image`, `pro_brand`, `pro_amount`, `pro_detail`, `pro_writer`, `pro_insert_date`, `pro_expired`, `pro_rate`, `pro_price`, `pro_saleoff`, `pro_price_total`, `pro_type`) VALUES
(47, 'MU168893040', 'Má»±c nang', 'muc-ong.jpg', 'nguyet anh', 5, 'Má»±c nang lÃ m sáº¡ch lá»™t da 225.000/kg size 500g-3,5kg/con\r\nMá»±c nang cÃ¢u chÆ°a lá»™t da 195 nghÃ¬n/Kg size 1 con tá»« 500g-4kg/con.\r\nVáº¥n Ä‘á» báº£o quáº£n :\r\n\r\n  â€“ Báº£o quáº£n trong tá»§ láº¡nh, khÃ´ng nÃªn Ä‘á»ƒ bÃªn ngoÃ i quÃ¡ lÃ¢u, khi váº­n chuyá»ƒn pháº£i Ä‘á»ƒ trong thÃ¹ng Æ°á»›p láº¡nh.\r\n\r\n* LÆ°u Ã½: KhÃ¡ch hÃ ng nÃªn chÃº Ã½ Má»±c ngoÃ i chá»£ thÆ°á»ng hay bá»‹ ngÃ¢m nÆ°á»›c Ä‘á»ƒ tÄƒng trá»ng lÆ°á»£ng. ChÃºng tÃ´i cam káº¿t hÃ ng Ä‘áº£m báº£o cháº¥t lÆ°á»£ng, khÃ´ng cháº¥t báº£o quáº£n, khÃ´ng ngÃ¢m nÆ°á»›c.\r\n\r\nMua má»±c nang á»Ÿ Ä‘Ã¢u?\r\n\r\nHÃ£y gá»i  chuyenhaisantuoisong.com Ä‘á»ƒ Ä‘Æ°á»£c tÆ° váº¥n vÃ  Ä‘áº·t hÃ ng\r\n\r\nSÄT: 0913433587 ( Mr. ThÃ nh )/ 0903732293 ( Ms. Hiá»n)\r\n\r\nÄá»‹a chá»‰: sá»‘ 3/1A, ÄÆ°á»ng 49, Khu Phá»‘ 6, P Hiá»‡p BÃ¬nh ChÃ¡nh, Q Thá»§ Äá»©c, Tp Há»“ ChÃ­ Minh', 'dat_f', '2016-08-08', '2016-08-07', 0, 160000, 1, 158400, 0),
(48, 'MU168893035', 'Má»±c á»‘ng', 'muc-ong.jpg', 'Nguyá»‡t Anh', 25, 'nhap text', 'dat_f', '2016-08-08', '2016-08-08', 2, 25000, 5, 23750, 0),
(49, 'GA168895153', 'GÃ  Nam Bá»™', 'duoi-ga.jpg', 'ga ga', 12, 'nhap text', 'dat_f', '2016-08-08', '2016-08-08', 0, 50000, 5, 47500, 1),
(50, 'XE168810219', 'Xe HÆ¡i', '3d-Cartoon-Car.jpg', 'car', 1, 'nhap text', 'dat_f', '2016-08-08', '2016-08-08', 0, 500000, 12, 440000, 2),
(51, 'BO1688112535', 'BÃ² cá»§ chi', 'aaasdf.jpg', 'hoc mon', 30, 'nhap text', 'dat_f', '2016-08-08', '2016-08-08', 3, 20000, 3, 19400, 0),
(53, 'CA1689122311', 'CÃ¡ thu', 'ca-thu.jpg', 'Nguyá»‡t Anh', 20, 'nhap text', 'dat_f', '2016-08-09', '2016-08-09', 4, 50000, 25, 37500, 0),
(54, 'O1689111243', 'o con', 'ca-hoi.jpg', 'con o', 1, 'nhap text', 'dat_f', '2016-08-09', '2016-08-09', 0, 5000000, 1, 4950000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(32) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `email_code` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `password_recover` int(11) NOT NULL DEFAULT '0',
  `type` int(1) NOT NULL DEFAULT '0',
  `allow_email` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=52 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `first_name`, `last_name`, `email`, `email_code`, `active`, `password_recover`, `type`, `allow_email`) VALUES
(48, 'dat', '25f9e794323b453885f5181f1b624d0b', 'dat_f', 'dat_l', 'ngtandat.dl@gmail.com', 'e743a87af85f65347902c1bc624d3e26', 1, 0, 1, 1),
(49, 'soma', '25d55ad283aa400af464c76d713c07ad', 'dat_f', 'dat_l', 'somattien.p@gmail.com', '9580df4640bd2e4b7ee76e86681183ae', 1, 0, 2, 1),
(50, 'great', '25d55ad283aa400af464c76d713c07ad', 'great_f', 'great_l', 'greatcacti@gmail.com', '0e234b3e27d011ae4bd3da5122d45949', 1, 0, 0, 1),
(51, 'trang', '25f9e794323b453885f5181f1b624d0b', 'trang_f', 'trang_l', 'ngoctrang16102011@gmail.com', '35d87653e51e0967f897acd2913ee49e', 0, 0, 0, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
