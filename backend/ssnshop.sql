-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2022 at 04:45 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ssnshop`
--
CREATE DATABASE IF NOT EXISTS `ssnshop` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ssnshop`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_profile`
--

CREATE TABLE `admin_profile` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `mobile_phone` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `banner_area`
--

CREATE TABLE `banner_area` (
  `banner_id` int(11) NOT NULL,
  `banner_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banner_area`
--

INSERT INTO `banner_area` (`banner_id`, `banner_img`) VALUES
(1, 'https://i01.appmifile.com/webfile/globalimg/dongxuechun/redmi10banner.jpg\r\n'),
(2, 'https://i01.appmifile.com/webfile/globalimg/0320/TO-B/New-Product-Banner/mi-11t-pro-banner.jpg'),
(3, 'https://i01.appmifile.com/webfile/globalimg/dongxuechun/PC_Banner-c3j1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `brand_logo` varchar(255) NOT NULL,
  `brand_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_id`, `brand_logo`, `brand_name`) VALUES
(1, 'https://th.bing.com/th/id/OIP.3it2aYi15bnxjE3n1pakWAHaHa?pid=ImgDet&rs=1', 'Apple'),
(2, 'https://th.bing.com/th/id/OIP.jsNn-cz17xZ4GW8u0MKEwwHaBj?pid=ImgDet&rs=1', 'SAMSUNG'),
(3, 'https://th.bing.com/th/id/OIP._Wn_O4_yx8ar7jRbl7Na-AHaDP?pid=ImgDet&rs=1', 'LG'),
(4, 'https://th.bing.com/th/id/R.af44c1a9d4ec302d02fdf65559c0f3e6?rik=iYgJhWVynJc2aQ&riu=http%3a%2f%2fdwglogo.com%2fwp-content%2fuploads%2f2015%2f11%2fMSI-Gaming-Logo-Horizontal.png&ehk=BST4H4QgUqO%2brP0hYKQP1WH72XE591mFg1Sg%2fdLPBME%3d&risl=&pid=ImgRaw&r=0', 'MSI'),
(5, 'https://th.bing.com/th/id/OIP.DOrzbAJGyr-xVNAelbY9OwHaCS?pid=ImgDet&rs=1', 'Realme'),
(6, 'https://th.bing.com/th/id/OIP.yHrXLVmB1NbCTRwaxuOViAHaCl?pid=ImgDet&rs=1', 'VIVO'),
(7, 'https://fmiagency.com/wp-content/uploads/2018/05/Huawei-Logo.png', 'Huawei'),
(8, 'https://th.bing.com/th/id/OIP.8CtD9QWxdKZ_1aXCSu-HYAHaEK?pid=ImgDet&rs=1', 'Xiomi');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `cart_status` varchar(255) NOT NULL,
  `order_id` varchar(255) NOT NULL,
  `date_order` datetime DEFAULT NULL,
  `date_completed` datetime DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `date_comfirmed` datetime DEFAULT NULL,
  `price_cart` float NOT NULL,
  `reason` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `pro_id`, `qty`, `cart_status`, `order_id`, `date_order`, `date_completed`, `phone`, `date_comfirmed`, `price_cart`, `reason`) VALUES
(1, 1, 2, 1, 'Ordered', '2202045284', '2022-02-04 22:43:58', NULL, '010401191', NULL, 0, ''),
(2, 1, 1, 1, 'Reject', '2202045444', '2022-02-04 22:44:04', NULL, '010401191', NULL, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE `favorite` (
  `favorite_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `favorite_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(11) NOT NULL,
  `pro_brand` varchar(255) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `discount` int(11) NOT NULL,
  `total` double(10,2) NOT NULL,
  `date_in` datetime NOT NULL,
  `stock` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `img3` varchar(255) NOT NULL,
  `img4` varchar(255) NOT NULL,
  `img5` varchar(255) NOT NULL,
  `img6` varchar(255) NOT NULL,
  `detail` varchar(1000) NOT NULL,
  `pro_rate` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `gift` varchar(255) NOT NULL,
  `warranty` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `pro_brand`, `pro_name`, `price`, `discount`, `total`, `date_in`, `stock`, `status`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `detail`, `pro_rate`, `category`, `gift`, `warranty`) VALUES
(1, 'Apple', 'iPhone 13 Pro Max', 1500.00, 10, 1200.00, '2021-11-17 12:13:55', 'IN STOCK', 'NEW', 'https://gadgetworld254.co.ke/wp-content/uploads/2021/10/iphone-13-pro-max-blue-256gb-in-Kenya-866x1024.png', 'https://gadgetworld254.co.ke/wp-content/uploads/2021/10/iphone-13-pro-max-blue-256gb-in-Kenya-866x1024.png', 'https://gadgetworld254.co.ke/wp-content/uploads/2021/10/iphone-13-pro-max-blue-256gb-in-Kenya-866x1024.png', 'https://gadgetworld254.co.ke/wp-content/uploads/2021/10/iphone-13-pro-max-blue-256gb-in-Kenya-866x1024.png', 'https://gadgetworld254.co.ke/wp-content/uploads/2021/10/iphone-13-pro-max-blue-256gb-in-Kenya-866x1024.png', 'https://gadgetworld254.co.ke/wp-content/uploads/2021/10/iphone-13-pro-max-blue-256gb-in-Kenya-866x1024.png', 'iPhone 13 Pro Max Super Retina XDR display with ProMotion; 6.7‑inch (diagonal) all‑screen OLED display; 2778‑by‑1284-pixel resolution at 458 ppi; The iPhone 13 Pro Max display has rounded corners that follow a beautiful curved design, and these corners ar ទូរស័ព្ទ', 200, 'Phone', 'មានកាដូរថែមជូន ១០ មុខ', 'ធានារយៈពេល​ ១ ឆ្នាំ'),
(2, 'SAMSUNG', 'Samsung Galaxy S21 Ultra', 1099.99, 10, 989.99, '2021-11-22 15:27:50', 'IN STOCK', 'New', 'https://cdn.mos.cms.futurecdn.net/aw3MDrGkdWyjvQ4EbGzmaW-970-80.jpg.webp', 'https://cdn.mos.cms.futurecdn.net/aw3MDrGkdWyjvQ4EbGzmaW-970-80.jpg.webp', 'https://cdn.mos.cms.futurecdn.net/aw3MDrGkdWyjvQ4EbGzmaW-970-80.jpg.webp', 'https://cdn.mos.cms.futurecdn.net/aw3MDrGkdWyjvQ4EbGzmaW-970-80.jpg.webp', 'https://cdn.mos.cms.futurecdn.net/aw3MDrGkdWyjvQ4EbGzmaW-970-80.jpg.webp', 'https://cdn.mos.cms.futurecdn.net/aw3MDrGkdWyjvQ4EbGzmaW-970-80.jpg.webp', 'The Samsung Galaxy S21 Ultra is Samsung’s top, premium flagship for 2021, and what a phone it is. For the first time Samsung has offered S Pen support on an S-range handset here, meaning that you can optionally get the Galaxy Note range’s best feature.', 400, 'Phone', '', ''),
(3, 'LG', 'Samsung Galaxy S21 Ultra', 1099.99, 10, 989.99, '2021-11-22 15:27:50', 'OUT STOCK', 'Second', 'https://cdn.mos.cms.futurecdn.net/aw3MDrGkdWyjvQ4EbGzmaW-970-80.jpg.webp', 'https://cdn.mos.cms.futurecdn.net/aw3MDrGkdWyjvQ4EbGzmaW-970-80.jpg.webp', 'https://cdn.mos.cms.futurecdn.net/aw3MDrGkdWyjvQ4EbGzmaW-970-80.jpg.webp', 'https://cdn.mos.cms.futurecdn.net/aw3MDrGkdWyjvQ4EbGzmaW-970-80.jpg.webp', 'https://cdn.mos.cms.futurecdn.net/aw3MDrGkdWyjvQ4EbGzmaW-970-80.jpg.webp', 'https://cdn.mos.cms.futurecdn.net/aw3MDrGkdWyjvQ4EbGzmaW-970-80.jpg.webp', 'The Samsung Galaxy S21 Ultra is Samsung’s top, premium flagship for 2021, and what a phone it is. For the first time Samsung has offered S Pen support on an S-range handset here, meaning that you can optionally get the Galaxy Note range’s best feature.', 300, 'Phone', '', ''),
(4, 'MSI', 'MSI GS76 Stealth 11UH-625CZ', 3900.00, 10, 3510.00, '2021-11-17 12:13:55', 'IN STOCK', 'New', 'https://img.msi-shop.sk/S/2021/05/103380-herny-notebook-msi.stealth-gs76-11uh-06.webp', 'https://img.msi-shop.sk/S/2021/05/103376-herny-notebook-msi.stealth-gs76-11uh-02.webp', 'https://img.msi-shop.sk/S/2021/05/103377-herny-notebook-msi.stealth-gs76-11uh-03.webp', 'https://img.msi-shop.sk/S/2021/05/103378-herny-notebook-msi.stealth-gs76-11uh-04.webp', 'https://img.msi-shop.sk/S/2021/05/103379-herny-notebook-msi.stealth-gs76-11uh-05.webp', 'https://img.msi-shop.sk/S/2021/05/103380-herny-notebook-msi.stealth-gs76-11uh-06.webp', 'Intel Core i9-11900H (2.50-4.90GHz) (BNCH-22334b) 17.3\" WQHD 2560x1440px Matt IPS 240Hz LED LCD 32GB DDR4 3200MHz M.2 PCIe SSD 2000GB nVidia GeForce RTX 3080 16GB GDDR6 WiFi / BT / USB 3.2 / USB 3.2 Type-C / Thunderbolt 4 / LAN / HDMI / without DVD Win10H', 100, 'Computer', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` varchar(200) NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`user_id`, `name`, `email`, `password`, `code`, `status`, `address`, `phone_number`, `gender`) VALUES
(1, 'Sophannich', 'sophannichnhoel1@gmail.com', '$2y$10$TAFink31hl7UdfJXWP9/GuPhfDxlyi3LPx0fGGZsl5TGJw/TYTLsG', 0, 'verified', 'Phnom Penh', '010401191', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_profile`
--
ALTER TABLE `admin_profile`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `banner_area`
--
ALTER TABLE `banner_area`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`favorite_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_profile`
--
ALTER TABLE `admin_profile`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banner_area`
--
ALTER TABLE `banner_area`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `favorite`
--
ALTER TABLE `favorite`
  MODIFY `favorite_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
