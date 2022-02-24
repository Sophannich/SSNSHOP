-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2022 at 05:23 PM
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
-- Table structure for table `admintable`
--

CREATE TABLE `admintable` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `add_pro` varchar(10) NOT NULL,
  `total_pro` varchar(20) NOT NULL,
  `banner` varchar(20) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `request` varchar(20) NOT NULL,
  `cus_pro` varchar(20) NOT NULL,
  `create_user` varchar(20) NOT NULL,
  `position` varchar(20) NOT NULL,
  `deletes` varchar(20) NOT NULL,
  `updates` varchar(20) NOT NULL,
  `adds` varchar(20) NOT NULL,
  `reject` varchar(20) NOT NULL,
  `complete` varchar(20) NOT NULL,
  `confirm` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`id`, `name`, `email`, `password`, `add_pro`, `total_pro`, `banner`, `brand`, `request`, `cus_pro`, `create_user`, `position`, `deletes`, `updates`, `adds`, `reject`, `complete`, `confirm`) VALUES
(1, 'SOPHANNICH', 'sophannich@gmail.com', '$2y$10$RtOXBCCeipvr5KdYpBUN4OU.zvwUCMPHxPQxTwkTzYLPVDFUZnZ.W', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'Admin', 'admin@gmail.com', '$2y$10$RtOXBCCeipvr5KdYpBUN4OU.zvwUCMPHxPQxTwkTzYLPVDFUZnZ.W', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

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
(3, 'https://i01.appmifile.com/webfile/globalimg/dongxuechun/PC_Banner-c3j1.jpg'),
(4, 'https://baxcash.com/wp-content/uploads/2021/07/Mi-11i-banner-en-PC.jpg'),
(6, ' https://www.emergenceinsurance.com.au/wp-content/uploads/2020/03/Cyber-lens-resized-1920x770.jpg');

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
(4, 'https://th.bing.com/th/id/R.af44c1a9d4ec302d02fdf65559c0f3e6?rik=iYgJhWVynJc2aQ&riu=http%3a%2f%2fdwglogo.com%2fwp-content%2fuploads%2f2015%2f11%2fMSI-Gaming-Logo-Horizontal.png&ehk=BST4H4QgUqO%2brP0hYKQP1WH72XE591mFg1Sg%2fdLPBME%3d&risl=&pid=ImgRaw&r=0', 'MSI'),
(5, 'https://th.bing.com/th/id/OIP.DOrzbAJGyr-xVNAelbY9OwHaCS?pid=ImgDet&rs=1', 'Realme'),
(6, 'https://th.bing.com/th/id/OIP.yHrXLVmB1NbCTRwaxuOViAHaCl?pid=ImgDet&rs=1', 'VIVO'),
(7, 'https://fmiagency.com/wp-content/uploads/2018/05/Huawei-Logo.png', 'Huawei'),
(8, 'https://th.bing.com/th/id/OIP.8CtD9QWxdKZ_1aXCSu-HYAHaEK?pid=ImgDet&rs=1', 'Xiomi'),
(10, ' https://snappytechs.com/wp-content/uploads/2018/07/250.png', 'LG');

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
  `date_confirmed` datetime DEFAULT NULL,
  `price_cart` float NOT NULL,
  `reason` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, ' Apple', 'iPhone 13 Pro Max 128GB Sierra Blue', 2500.00, 5, 2375.00, '2022-02-24 00:00:00', 'IN STOCK', 'Just Arrived', 'https://maxi.az/upload/iblock/e43/e09hluqr26zvtblhb1qvucu8qq4y0qtj/telefon_iphone_13_pro_max_128gb_sierra_blue_detail.jpg', 'https://maxi.az/upload/iblock/a89/yc15dtjxs8lgq5y6m6yu3l7gzk08e4sj/30059070bb1.jpg', 'https://maxi.az/upload/iblock/e01/2bvlmptl4c1utjcfozdz0kqxmwkmqxnc/30059070bb2.jpg', 'https://maxi.az/upload/iblock/bf8/r9ydk8ynq4ihv53nlmm433f8c8zkx8jm/30059070bb3.jpg', 'https://maxi.az/upload/iblock/653/3tq090rbczqa6ewbq8nv4iwfgdo9fx18/30059070bb4.jpg', 'https://maxi.az/upload/iblock/e01/2bvlmptl4c1utjcfozdz0kqxmwkmqxnc/30059070bb2.jpg', '17 cm (6.7-inch) Super Retina XDR display with ProMotion for a faster, more responsive feel\r\nCinematic mode adds shallow depth of field and shifts focus automatically in your videos\r\nPro camera system with new 12MP Telephoto, Wide and Ultra Wide cameras; LiDAR Scanner; 6x optical zoom range; macro photography; Photographic Styles, ProRes video, Smart HDR 4, Night mode, Apple ProRAW, 4K Dolby Vision HDR recording\r\n12MP TrueDepth front camera with Night mode, 4K Dolby Vision HDR recording\r\nA15 Bionic chip for lightning-fast performance\r\nUp to 28 hours of video playback, the best battery life ever in an iPhone\r\nDurable design with Ceramic Shield', 250, 'Phone', 'ថែម ១០ មុខ', '១ ឆ្នាំ'),
(2, ' Apple', 'iPhone 13 Pro Max', 2000.00, 3, 1940.00, '2022-02-24 00:00:00', 'IN STOCK', 'Just Arrived', 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-13-pro-max-silver-select?wid=470&hei=556&fmt=png-alpha&.v=1631652956000', 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-13-pro-max-silver-select?wid=470&hei=556&fmt=png-alpha&.v=1631652956000', 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-13-pro-max-silver-select?wid=470&hei=556&fmt=png-alpha&.v=1631652956000', 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-13-pro-max-silver-select?wid=470&hei=556&fmt=png-alpha&.v=1631652956000', 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-13-pro-max-silver-select?wid=470&hei=556&fmt=png-alpha&.v=1631652956000', 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-13-pro-max-silver-select?wid=470&hei=556&fmt=png-alpha&.v=1631652956000', '17 cm (6.7-inch) Super Retina XDR display with ProMotion for a faster, more responsive feel\r\nCinematic mode adds shallow depth of field and shifts focus automatically in your videos\r\nPro camera system with new 12MP Telephoto, Wide and Ultra Wide cameras; LiDAR Scanner; 6x optical zoom range; macro photography; Photographic Styles, ProRes video, Smart HDR 4, Night mode, Apple ProRAW, 4K Dolby Vision HDR recording\r\n12MP TrueDepth front camera with Night mode, 4K Dolby Vision HDR recording\r\nA15 Bionic chip for lightning-fast performance\r\nUp to 28 hours of video playback, the best battery life ever in an iPhone\r\nDurable design with Ceramic Shield', 200, 'Phone', 'ថែម ១០ មុខ', '១ ឆ្នាំ'),
(3, ' Apple', 'iPhone 13 Pro Max', 2300.00, 4, 2208.00, '2022-02-24 00:00:00', 'IN STOCK', 'Just Arrived', 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-13-pro-max-gold-select?wid=470&hei=556&fmt=png-alpha&.v=1631652956000', 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-13-pro-max-gold-select?wid=470&hei=556&fmt=png-alpha&.v=1631652956000', 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-13-pro-max-gold-select?wid=470&hei=556&fmt=png-alpha&.v=1631652956000', 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-13-pro-max-gold-select?wid=470&hei=556&fmt=png-alpha&.v=1631652956000', 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-13-pro-max-gold-select?wid=470&hei=556&fmt=png-alpha&.v=1631652956000', 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-13-pro-max-gold-select?wid=470&hei=556&fmt=png-alpha&.v=1631652956000', '17 cm (6.7-inch) Super Retina XDR display with ProMotion for a faster, more responsive feel\r\nCinematic mode adds shallow depth of field and shifts focus automatically in your videos\r\nPro camera system with new 12MP Telephoto, Wide and Ultra Wide cameras; LiDAR Scanner; 6x optical zoom range; macro photography; Photographic Styles, ProRes video, Smart HDR 4, Night mode, Apple ProRAW, 4K Dolby Vision HDR recording\r\n12MP TrueDepth front camera with Night mode, 4K Dolby Vision HDR recording\r\nA15 Bionic chip for lightning-fast performance\r\nUp to 28 hours of video playback, the best battery life ever in an iPhone\r\nDurable design with Ceramic Shield', 200, 'Phone', '', '១ ឆ្នាំ'),
(4, ' Apple', 'iPhone 13 Pro Max', 2400.00, 2, 2352.00, '2022-02-24 00:00:00', 'IN STOCK', 'Just Arrived', 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-13-pro-max-graphite-select?wid=470&hei=556&fmt=png-alpha&.v=1631652956000', 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-13-pro-max-graphite-select?wid=470&hei=556&fmt=png-alpha&.v=1631652956000', 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-13-pro-max-graphite-select?wid=470&hei=556&fmt=png-alpha&.v=1631652956000', 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-13-pro-max-graphite-select?wid=470&hei=556&fmt=png-alpha&.v=1631652956000', 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-13-pro-max-graphite-select?wid=470&hei=556&fmt=png-alpha&.v=1631652956000', 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-13-pro-max-graphite-select?wid=470&hei=556&fmt=png-alpha&.v=1631652956000', '17 cm (6.7-inch) Super Retina XDR display with ProMotion for a faster, more responsive feel\r\nCinematic mode adds shallow depth of field and shifts focus automatically in your videos\r\nPro camera system with new 12MP Telephoto, Wide and Ultra Wide cameras; LiDAR Scanner; 6x optical zoom range; macro photography; Photographic Styles, ProRes video, Smart HDR 4, Night mode, Apple ProRAW, 4K Dolby Vision HDR recording\r\n12MP TrueDepth front camera with Night mode, 4K Dolby Vision HDR recording\r\nA15 Bionic chip for lightning-fast performance\r\nUp to 28 hours of video playback, the best battery life ever in an iPhone\r\nDurable design with Ceramic Shield', 240, 'Phone', 'ថែម ១០ មុខ', '១ ឆ្នាំ');

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
(1, 'Sophannich', 'sophannichnhoel1@gmail.com', '$2y$10$TAFink31hl7UdfJXWP9/GuPhfDxlyi3LPx0fGGZsl5TGJw/TYTLsG', 0, 'verified', 'Phnom Penh', '010401191', 'Male'),
(2, 'SNP', 'spn@gmail.com', '$2y$10$BsdNoT9SJbEDSRmIXHNjoOtRuW8bFNvyVr7E8DCOxKzmLHkuDYzVi', 0, 'verified', 'Phnom Penh', '012345678', 'Male'),
(3, 'SSN', 'ssn@gmail.com', '$2y$10$G2n/vNNyDd4j8dElQBdGPetGhilc0EpeKIKVnjkM/dgxDg.YcLOpO', 0, 'verified', 'Phnom Penh', '024133452', 'Male'),
(4, 'TEST', 'TEST@gmail.com', '$2y$10$3UHO46whLDBtiRLWj/lGwOXN7C4gyaHQVyriroDyzQky4Dhh7H7ku', 0, 'verified', 'Phnom Penh', '09876543', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintable`
--
ALTER TABLE `admintable`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admintable`
--
ALTER TABLE `admintable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banner_area`
--
ALTER TABLE `banner_area`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorite`
--
ALTER TABLE `favorite`
  MODIFY `favorite_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
