-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2022 at 11:02 AM
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
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"ssnshop\",\"table\":\"usertable\"},{\"db\":\"ssnshop\",\"table\":\"product\"},{\"db\":\"ssnshop\",\"table\":\"admintable\"},{\"db\":\"ssnshop\",\"table\":\"banner_area\"},{\"db\":\"ssnshop\",\"table\":\"brand\"},{\"db\":\"ssnshop\",\"table\":\"cart\"},{\"db\":\"ssnshop\",\"table\":\"favorite\"},{\"db\":\"test\",\"table\":\"countries\"},{\"db\":\"ssnshop\",\"table\":\"admin\"},{\"db\":\"userform\",\"table\":\"usertable\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

--
-- Dumping data for table `pma__table_uiprefs`
--

INSERT INTO `pma__table_uiprefs` (`username`, `db_name`, `table_name`, `prefs`, `last_update`) VALUES
('root', 'ssnshop', 'product', '{\"CREATE_TIME\":\"2022-02-16 21:25:52\",\"sorted_col\":\"`product`.`pro_id` ASC\"}', '2022-02-27 08:58:35');

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2022-02-27 09:53:25', '{\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
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
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `add_pro` varchar(10) DEFAULT NULL,
  `total_pro` varchar(20) DEFAULT NULL,
  `banner` varchar(20) DEFAULT NULL,
  `brand` varchar(20) DEFAULT NULL,
  `request` varchar(20) DEFAULT NULL,
  `cus_pro` varchar(20) DEFAULT NULL,
  `create_user` varchar(20) DEFAULT NULL,
  `position` varchar(20) DEFAULT NULL,
  `deletes` varchar(20) DEFAULT NULL,
  `updates` varchar(20) DEFAULT NULL,
  `adds` varchar(20) DEFAULT NULL,
  `reject` varchar(20) DEFAULT NULL,
  `complete` varchar(20) DEFAULT NULL,
  `confirm` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admintable`
--

INSERT INTO `admintable` (`id`, `name`, `email`, `password`, `add_pro`, `total_pro`, `banner`, `brand`, `request`, `cus_pro`, `create_user`, `position`, `deletes`, `updates`, `adds`, `reject`, `complete`, `confirm`) VALUES
(1, 'Admin', 'sophannich@gmail.com', '$2y$10$RtOXBCCeipvr5KdYpBUN4OU.zvwUCMPHxPQxTwkTzYLPVDFUZnZ.W', '', '', '', '', '', '', '', 'Admin', '', '', '', '', '', ''),
(2, 'Admin', 'admin@gmail.com', '$2y$10$RtOXBCCeipvr5KdYpBUN4OU.zvwUCMPHxPQxTwkTzYLPVDFUZnZ.W', '', '', '', '', '', '', '', 'Admin', '', '', '', '', '', ''),
(3, 'User', 'user@gmail.com', '$2y$10$KSftPVRL5rFBNqMAgN4D/uw9muLLTvAZIvtqDBhBeuhP0dlrvVyVm', '', '', 'hidden', 'hidden', 'hidden', 'hidden', 'hidden', 'User', 'hidden', 'hidden', '', 'hidden', 'hidden', 'hidden'),
(4, 'Tester', 'test@gmail.com', '$2y$10$YvwKCjqMR/BmTZEdxXyBL.rH0qcBvlWfjoC4ge9LSekiigI6ocX/O', '', 'hidden', 'hidden', 'hidden', '', 'hidden', 'hidden', 'Tester', 'hidden', 'hidden', '', 'hidden', 'hidden', '');

-- --------------------------------------------------------

--
-- Table structure for table `banner_area`
--

CREATE TABLE `banner_area` (
  `banner_id` int(11) NOT NULL,
  `banner_img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banner_area`
--

INSERT INTO `banner_area` (`banner_id`, `banner_img`) VALUES
(1, 'https://i01.appmifile.com/webfile/globalimg/dongxuechun/redmi10banner.jpg\r\n'),
(2, 'https://i01.appmifile.com/webfile/globalimg/0320/TO-B/New-Product-Banner/mi-11t-pro-banner.jpg'),
(3, 'https://i01.appmifile.com/webfile/globalimg/dongxuechun/PC_Banner-c3j1.jpg'),
(4, 'https://baxcash.com/wp-content/uploads/2021/07/Mi-11i-banner-en-PC.jpg'),
(6, ' https://www.emergenceinsurance.com.au/wp-content/uploads/2020/03/Cyber-lens-resized-1920x770.jpg'),
(8, ' https://celularespoblado.com/wp-content/uploads/2021/08/6-Carrusel-Todas-las-marcas-1920-x-770-1.png');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `brand_id` int(11) NOT NULL,
  `brand_logo` varchar(255) DEFAULT NULL,
  `brand_name` varchar(255) DEFAULT NULL
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
(8, 'https://th.bing.com/th/id/OIP.8CtD9QWxdKZ_1aXCSu-HYAHaEK?pid=ImgDet&rs=1', 'Xiaomi'),
(10, ' https://snappytechs.com/wp-content/uploads/2018/07/250.png', 'LG');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `pro_id` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `cart_status` varchar(255) DEFAULT NULL,
  `order_id` varchar(255) DEFAULT NULL,
  `date_order` datetime DEFAULT NULL,
  `date_completed` datetime DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `date_confirmed` datetime DEFAULT NULL,
  `price_cart` float DEFAULT NULL,
  `reason` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `pro_id`, `qty`, `cart_status`, `order_id`, `date_order`, `date_completed`, `phone`, `date_confirmed`, `price_cart`, `reason`) VALUES
(1, 10, 10, 1, 'Requested', '2202272607', '2022-02-27 16:09:27', NULL, '012345678', NULL, 400, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE `favorite` (
  `favorite_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `pro_id` int(11) DEFAULT NULL,
  `favorite_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(11) NOT NULL,
  `pro_brand` varchar(255) DEFAULT NULL,
  `pro_name` varchar(255) DEFAULT NULL,
  `price` double(10,2) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `total` double(10,2) DEFAULT NULL,
  `date_in` datetime DEFAULT NULL,
  `stock` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `img1` varchar(255) DEFAULT NULL,
  `img2` varchar(255) DEFAULT NULL,
  `img3` varchar(255) DEFAULT NULL,
  `img4` varchar(255) DEFAULT NULL,
  `img5` varchar(255) DEFAULT NULL,
  `img6` varchar(255) DEFAULT NULL,
  `detail` varchar(1000) DEFAULT NULL,
  `pro_rate` int(11) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `gift` varchar(255) DEFAULT NULL,
  `warranty` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `pro_brand`, `pro_name`, `price`, `discount`, `total`, `date_in`, `stock`, `status`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `detail`, `pro_rate`, `category`, `gift`, `warranty`) VALUES
(1, ' Apple', 'iPhone 13 Pro Max 128GB Sierra Blue', 2500.00, 5, 2375.00, '2022-02-24 00:00:00', 'IN STOCK', 'Just Arrived', 'https://maxi.az/upload/iblock/e43/e09hluqr26zvtblhb1qvucu8qq4y0qtj/telefon_iphone_13_pro_max_128gb_sierra_blue_detail.jpg', 'https://maxi.az/upload/iblock/a89/yc15dtjxs8lgq5y6m6yu3l7gzk08e4sj/30059070bb1.jpg', 'https://maxi.az/upload/iblock/e01/2bvlmptl4c1utjcfozdz0kqxmwkmqxnc/30059070bb2.jpg', 'https://maxi.az/upload/iblock/bf8/r9ydk8ynq4ihv53nlmm433f8c8zkx8jm/30059070bb3.jpg', 'https://maxi.az/upload/iblock/653/3tq090rbczqa6ewbq8nv4iwfgdo9fx18/30059070bb4.jpg', 'https://maxi.az/upload/iblock/e01/2bvlmptl4c1utjcfozdz0kqxmwkmqxnc/30059070bb2.jpg', '17 cm (6.7-inch) Super Retina XDR display with ProMotion for a faster, more responsive feel\r\nCinematic mode adds shallow depth of field and shifts focus automatically in your videos\r\nPro camera system with new 12MP Telephoto, Wide and Ultra Wide cameras; LiDAR Scanner; 6x optical zoom range; macro photography; Photographic Styles, ProRes video, Smart HDR 4, Night mode, Apple ProRAW, 4K Dolby Vision HDR recording\r\n12MP TrueDepth front camera with Night mode, 4K Dolby Vision HDR recording\r\nA15 Bionic chip for lightning-fast performance\r\nUp to 28 hours of video playback, the best battery life ever in an iPhone\r\nDurable design with Ceramic Shield', 250, 'Phone', 'ថែម ១០ មុខ', '១ ឆ្នាំ'),
(2, ' Apple', 'iPhone 13 Pro Max', 2000.00, 3, 1940.00, '2022-02-24 00:00:00', 'IN STOCK', 'Just Arrived', 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-13-pro-max-silver-select?wid=470&hei=556&fmt=png-alpha&.v=1631652956000', 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-13-pro-max-silver-select?wid=470&hei=556&fmt=png-alpha&.v=1631652956000', 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-13-pro-max-silver-select?wid=470&hei=556&fmt=png-alpha&.v=1631652956000', 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-13-pro-max-silver-select?wid=470&hei=556&fmt=png-alpha&.v=1631652956000', 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-13-pro-max-silver-select?wid=470&hei=556&fmt=png-alpha&.v=1631652956000', 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-13-pro-max-silver-select?wid=470&hei=556&fmt=png-alpha&.v=1631652956000', '17 cm (6.7-inch) Super Retina XDR display with ProMotion for a faster, more responsive feel\r\nCinematic mode adds shallow depth of field and shifts focus automatically in your videos\r\nPro camera system with new 12MP Telephoto, Wide and Ultra Wide cameras; LiDAR Scanner; 6x optical zoom range; macro photography; Photographic Styles, ProRes video, Smart HDR 4, Night mode, Apple ProRAW, 4K Dolby Vision HDR recording\r\n12MP TrueDepth front camera with Night mode, 4K Dolby Vision HDR recording\r\nA15 Bionic chip for lightning-fast performance\r\nUp to 28 hours of video playback, the best battery life ever in an iPhone\r\nDurable design with Ceramic Shield', 200, 'Phone', 'ថែម ១០ មុខ', '១ ឆ្នាំ'),
(3, ' Apple', 'iPhone 13 Pro Max', 2300.00, 4, 2208.00, '2022-02-24 00:00:00', 'IN STOCK', 'Just Arrived', 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-13-pro-max-gold-select?wid=470&hei=556&fmt=png-alpha&.v=1631652956000', 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-13-pro-max-gold-select?wid=470&hei=556&fmt=png-alpha&.v=1631652956000', 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-13-pro-max-gold-select?wid=470&hei=556&fmt=png-alpha&.v=1631652956000', 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-13-pro-max-gold-select?wid=470&hei=556&fmt=png-alpha&.v=1631652956000', 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-13-pro-max-gold-select?wid=470&hei=556&fmt=png-alpha&.v=1631652956000', 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-13-pro-max-gold-select?wid=470&hei=556&fmt=png-alpha&.v=1631652956000', '17 cm (6.7-inch) Super Retina XDR display with ProMotion for a faster, more responsive feel\r\nCinematic mode adds shallow depth of field and shifts focus automatically in your videos\r\nPro camera system with new 12MP Telephoto, Wide and Ultra Wide cameras; LiDAR Scanner; 6x optical zoom range; macro photography; Photographic Styles, ProRes video, Smart HDR 4, Night mode, Apple ProRAW, 4K Dolby Vision HDR recording\r\n12MP TrueDepth front camera with Night mode, 4K Dolby Vision HDR recording\r\nA15 Bionic chip for lightning-fast performance\r\nUp to 28 hours of video playback, the best battery life ever in an iPhone\r\nDurable design with Ceramic Shield', 200, 'Phone', '', '១ ឆ្នាំ'),
(4, ' Apple', 'iPhone 13 Pro Max', 2400.00, 2, 2352.00, '2022-02-24 00:00:00', 'IN STOCK', 'Just Arrived', 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-13-pro-max-graphite-select?wid=470&hei=556&fmt=png-alpha&.v=1631652956000', 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-13-pro-max-graphite-select?wid=470&hei=556&fmt=png-alpha&.v=1631652956000', 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-13-pro-max-graphite-select?wid=470&hei=556&fmt=png-alpha&.v=1631652956000', 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-13-pro-max-graphite-select?wid=470&hei=556&fmt=png-alpha&.v=1631652956000', 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-13-pro-max-graphite-select?wid=470&hei=556&fmt=png-alpha&.v=1631652956000', 'https://store.storeimages.cdn-apple.com/8756/as-images.apple.com/is/iphone-13-pro-max-graphite-select?wid=470&hei=556&fmt=png-alpha&.v=1631652956000', '17 cm (6.7-inch) Super Retina XDR display with ProMotion for a faster, more responsive feel\r\nCinematic mode adds shallow depth of field and shifts focus automatically in your videos\r\nPro camera system with new 12MP Telephoto, Wide and Ultra Wide cameras; LiDAR Scanner; 6x optical zoom range; macro photography; Photographic Styles, ProRes video, Smart HDR 4, Night mode, Apple ProRAW, 4K Dolby Vision HDR recording\r\n12MP TrueDepth front camera with Night mode, 4K Dolby Vision HDR recording\r\nA15 Bionic chip for lightning-fast performance\r\nUp to 28 hours of video playback, the best battery life ever in an iPhone\r\nDurable design with Ceramic Shield', 240, 'Phone', 'ថែម ១០ មុខ', '១ ឆ្នាំ'),
(5, '  MSI', 'MSI Unveils New Lineup Of 7th Generation 4K Laptops', 1700.00, 3, 1649.00, '2022-02-25 00:00:00', 'IN STOCK', 'New', 'https://www.channelinfoline.com/wp-content/uploads/2017/01/MSI-NB-GT73VR-Titan.jpg', 'https://i.ebayimg.com/images/g/8n8AAOSwvBphIMPj/s-l640.jpg', 'https://www.channelinfoline.com/wp-content/uploads/2017/01/MSI-NB-GT73VR-Titan.jpg', 'https://i.ebayimg.com/images/g/8n8AAOSwvBphIMPj/s-l640.jpg', 'https://www.channelinfoline.com/wp-content/uploads/2017/01/MSI-NB-GT73VR-Titan.jpg', 'https://www.channelinfoline.com/wp-content/uploads/2017/01/MSI-NB-GT73VR-Titan.jpg', 'MSI Unveils New Lineup Of 7th Generation 4K Laptops', 230, 'Computer', '10', '1 Year'),
(6, '  MSI', 'MSI Unveils New Lineup Of 7th Generation 4K Laptops', 1200.00, 5, 1140.00, '2022-02-25 00:00:00', 'OUT STOCK', 'Second', 'https://www.channelinfoline.com/wp-content/uploads/2017/01/MSI-NB-GT73VR-Titan.jpg', 'https://www.channelinfoline.com/wp-content/uploads/2017/01/MSI-NB-GT73VR-Titan.jpg', 'https://www.channelinfoline.com/wp-content/uploads/2017/01/MSI-NB-GT73VR-Titan.jpg', 'https://www.channelinfoline.com/wp-content/uploads/2017/01/MSI-NB-GT73VR-Titan.jpg', 'https://www.channelinfoline.com/wp-content/uploads/2017/01/MSI-NB-GT73VR-Titan.jpg', 'https://www.channelinfoline.com/wp-content/uploads/2017/01/MSI-NB-GT73VR-Titan.jpg', 'MSI Unveils New Lineup Of 7th Generation 4K Laptops', 100, 'Computer', '10', '1 month'),
(7, ' SAMSUNG', 'Samsung Galaxy S22 Ultra 5G 256GB (Green)', 1999.00, 5, 1899.05, '2022-02-25 00:00:00', 'IN STOCK', 'Just Arrived', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/580967-Product-0-I-637783596201747209_e9df85f7-b3c0-474d-8825-7604e2478873_720x.jpg', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/580967-Product-1-I-637783596173622109_4daf2a46-6458-4d5c-b8a0-7865c7d49b86_720x.jpg', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/580967-Product-2-I-637783596201590911_321203b3-9e08-447f-89d7-d37fc0446ac1_720x.jpg', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/580967-Product-3-I-637783596163451481_ea26c55c-dadb-4301-b6cf-a279f1e49cc1_720x.jpg', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/580967-Product-4-I-637783596202997186_bd10a4f7-57a2-4310-9104-3965faad011f_720x.jpg', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/580967-Product-7-I-637783596197059673_3dd9b4f3-a9fd-41ae-b682-ff3aeb586c75_720x.jpg', '6.8\" BrightVision display with adaptive 120Hz refresh rate\r\n108MP camera – with new Adaptive Pixel Technology. Four lenses, advanced Nightography and 8K video recording\r\nThe first Galaxy S series with an embedded S Pen\r\nPre-Order Price Guarantee\r\nWhen you pay for your pre-order upfront and the price drops before release day you will be refunded the difference shortly after release.', 300, 'Phone', '4', '1 year'),
(8, ' SAMSUNG', 'Samsung Galaxy S22 Ultra 5G 512GB (Phantom White)', 2149.00, 2, 2106.02, '2022-02-25 00:00:00', 'IN STOCK', 'New', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/580968-Product-0-I-637783601599414528_82bf614a-3acc-4a30-a7e8-09a10a4dcd37_360x.jpg', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/580968-Product-1-I-637783601562539453_f83b8c50-936f-412b-8859-fa1930c05451_360x.jpg', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/580968-Product-2-I-637783601598945702_0f856a1f-21ec-4a80-a80a-02c9f529b0f7_360x.jpg', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/580968-Product-4-I-637783601599414528_cd6fcf8a-0870-4715-b34b-55f58bded2cc_360x.jpg', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/580968-Product-0-I-637783601599414528_82bf614a-3acc-4a30-a7e8-09a10a4dcd37_360x.jpg', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/580968-Product-7-I-637783601596758218_186e2324-b6bb-478e-b150-6aa6620dd804_360x.jpg', '6.8\" BrightVision display with adaptive 120Hz refresh rate\r\n108MP camera – with new Adaptive Pixel Technology. Four lenses, advanced Nightography and 8K video recording\r\nThe first Galaxy S series with an embedded S Pen\r\nPre-Order Price Guarantee\r\nWhen you pay for your pre-order upfront and the price drops before release day you will be refunded the difference shortly after release.', 250, 'Phone', '4', '1 year'),
(9, ' VIVO', 'Vivo Y33s 128GB (Midday Dream)', 250.00, 2, 245.00, '2022-02-25 00:00:00', 'IN STOCK', 'New', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/559206-Product-0-I-637710955592942964_360x.jpg', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/559206-Product-1-I-637710955592786587_360x.jpg', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/559206-Product-2-I-637710955593255319_360x.jpg', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/559206-Product-6-I-637710955593255319_360x.jpg', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/559206-Product-4-I-637710955592786587_360x.jpg', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/559206-Product-5-I-637710955592786587_360x.jpg', '50MP AI triple camera\r\n\r\nHuge 5000mAh battery powerhouse\r\n\r\n18W Fast Charging\r\n\r\n128GB of storage \r\n\r\nExpandable MicroSD card slot\r\n\r\n2408 × 1080 FHD+ LCD screen\r\n\r\nSide-mounted fingerprint sensor\r\n\r\nMTK Helio G80 processor\r\n\r\n16MP Front camera\r\n\r\nFuntouch OS 11.1（Android 11） operating system', 300, 'Phone', '4', '1 year'),
(10, ' Realme', 'realme 7 5G 128GB (Mist Blue)', 400.00, 0, 400.00, '2022-02-25 00:00:00', 'IN STOCK', 'Second', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/511067-Product-0-I-637638576507033570_360x.jpg', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/511067-Product-1-I-637638576503283520_360x.jpg', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/511067-Product-2-I-637638576503596023_360x.jpg', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/511067-Product-3-I-637638576508908645_360x.jpg', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/511067-Product-4-I-637638576501564744_360x.jpg', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/511067-Product-0-I-637638576507033570_360x.jpg', '5G for Everyone\r\n120Hz Ultra smooth display\r\n5000mAh Massive battery for endless fun\r\n48MP AI quad camera innovation', 120, 'Phone', '4', '1 year'),
(11, ' Realme', 'realme C11 32GB (Mint Green)', 150.00, 5, 142.50, '2022-02-25 00:00:00', 'IN STOCK', 'New', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/490448-Product-0-I-637393095241811990_360x.jpg', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/490448-Product-1-I-637393095239121799_360x.jpg', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/490448-Product-2-I-637393095239951834_360x.jpg', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/490448-Product-3-I-637393095240701942_360x.jpg', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/490448-Product-6-I-637393095240051847_360x.jpg', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/490448-Product-5-I-637393095239721903_360x.jpg', '6.5” Mini-drop Fullscreen Display for Exceptional Viewing\r\nPicture Perfect Clarity with Nightscape Dual Camera\r\nZero Interruptions with 5000mAh Massive Battery', 230, 'Phone', '4', '1 year'),
(12, ' REDMAGIC', 'ZTE RedMagic 6 Pro 5G Gaming Phone 256GB (Eclipse Black)', 1500.00, 2, 1470.00, '2022-02-25 00:00:00', 'IN STOCK', 'Just Arrived', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/525720-Product-0-I-637617034104828681_720x.jpg', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/525720-Product-1-I-637617034107118790_720x.jpg', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/525720-Product-2-I-637617034104628630_720x.jpg', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/525720-Product-3-I-637617034103878598_720x.jpg', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/525720-Product-4-I-637617034103078533_720x.jpg', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/525720-Product-5-I-637617034103528524_720x.jpg', '6.8\" FHD+ (2400 x 1080) AMOLED display\r\nUp to 165Hz refresh rate\r\nQualcomm® Snapdragon™ 888 5G', 500, 'Phone', '4', '1 year'),
(13, ' Oppo', 'Oppo Find X3 Neo 5G 256GB (Galactic Silver)', 800.00, 2, 784.00, '2022-02-25 00:00:00', 'IN STOCK', 'Just Arrived', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/514764-Product-0-I-637684295913754970_360x.jpg', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/514764-Product-1-I-637684295885473695_360x.jpg', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/514764-Product-2-I-637684295886567374_360x.jpg', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/514764-Product-3-I-637684295885473695_360x.jpg', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/514764-Product-4-I-637684295885629965_360x.jpg', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/514764-Product-9-I-637684295886098717_360x.jpg', '50MP Quad Camera with IMX766\r\n\r\nAI Highlight Video\r\n\r\n65W SuperVOOC 2.0\r\n\r\nQualcomm® Snapdragon™ 865\r\n\r\n90Hz 3D Curved Screen', 340, 'Phone', '4', '1 year'),
(14, ' Oppo', 'Oppo Find X3 Neo 5G 256GB (Galactic Silver)', 800.00, 2, 784.00, '2022-02-25 00:00:00', 'IN STOCK', 'Just Arrived', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/514764-Product-0-I-637684295913754970_360x.jpg', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/514764-Product-1-I-637684295885473695_360x.jpg', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/514764-Product-2-I-637684295886567374_360x.jpg', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/514764-Product-3-I-637684295885473695_360x.jpg', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/514764-Product-4-I-637684295885629965_360x.jpg', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/514764-Product-9-I-637684295886098717_360x.jpg', '50MP Quad Camera with IMX766\r\n\r\nAI Highlight Video\r\n\r\n65W SuperVOOC 2.0\r\n\r\nQualcomm® Snapdragon™ 865\r\n\r\n90Hz 3D Curved Screen', 340, 'Phone', '4', '1 year'),
(15, ' Xiaomi', 'Xiaomi 12, 12 Pro, and 12X prices for Europe leak', 2500.00, 5, 2375.00, '2022-02-25 00:00:00', 'IN STOCK', 'Just Arrived', 'https://fdn.gsmarena.com/imgroot/news/22/02/xiaomi-12-series-eu-prices-leak/inline/-1200/gsmarena_001.jpg', 'https://fdn.gsmarena.com/imgroot/news/22/02/xiaomi-12-series-eu-prices-leak/inline/-1200/gsmarena_001.jpg', 'https://fdn.gsmarena.com/imgroot/news/22/02/xiaomi-12-series-eu-prices-leak/inline/-1200/gsmarena_001.jpg', 'https://fdn.gsmarena.com/imgroot/news/22/02/xiaomi-12-series-eu-prices-leak/inline/-1200/gsmarena_001.jpg', 'https://fdn.gsmarena.com/imgroot/news/22/02/xiaomi-12-series-eu-prices-leak/inline/-1200/gsmarena_001.jpg', 'https://fdn.gsmarena.com/imgroot/news/22/02/xiaomi-12-series-eu-prices-leak/inline/-1200/gsmarena_001.jpg', 'The Xiaomi 12 series has been official in China ever since December, but it was always a given that it would at some point spread its wings and fly to international markets. Today a new rumor tells us some details about what prices we can expect in Europe, as well as which RAM/storage and color options will be available.\r\n\r\nNaturally, as this is just a rumor, you should take it with a pinch of salt. Nothing is confirmed yet - not even a date for a European announcement for these phones. That said, if these numbers pan out - start saving up now.', 400, 'Phone', '4', '1 year');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `code` mediumint(50) DEFAULT NULL,
  `status` text DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone_number` varchar(200) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`user_id`, `name`, `email`, `password`, `code`, `status`, `address`, `phone_number`, `gender`) VALUES
(1, 'Sophannich', 'sophannichnhoel1@gmail.com', '$2y$10$TAFink31hl7UdfJXWP9/GuPhfDxlyi3LPx0fGGZsl5TGJw/TYTLsG', 0, 'verified', 'Phnom Penh', '010401191', 'Male'),
(2, 'SNP', 'spn@gmail.com', '$2y$10$BsdNoT9SJbEDSRmIXHNjoOtRuW8bFNvyVr7E8DCOxKzmLHkuDYzVi', 0, 'verified', 'Phnom Penh', '012345678', 'Male'),
(3, 'SSN', 'ssn@gmail.com', '$2y$10$G2n/vNNyDd4j8dElQBdGPetGhilc0EpeKIKVnjkM/dgxDg.YcLOpO', 0, 'verified', 'Phnom Penh', '024133452', 'Male'),
(4, 'TEST', 'TEST@gmail.com', '$2y$10$3UHO46whLDBtiRLWj/lGwOXN7C4gyaHQVyriroDyzQky4Dhh7H7ku', 0, 'verified', 'Phnom Penh', '09876543', 'Male'),
(6, 'Phannich', 'phannich@gmail.com', '$2y$10$PX.3Y2gyd0AnOm/D7EkXBeF5r8VHjHS8a3IYmoPt1631hB5Q0GlI2', 0, 'verified', 'Phnom Penh', '010401191', 'Male'),
(10, 'Sophannich', 'sophannich@gmail.com', '$2y$10$lB0GjUpVONpSNdfUaI6rFOmNz3rn9UuhmDUZ2hFYdqWHdkXfsaNWy', 0, 'verified', 'Phnom Penh', '012345678', 'Male'),
(11, 'Cheat', 'sokcheat@gmail.com', '$2y$10$NSJvvJEvAOGRn6lWB7whB..ddPBMR7vAdjXSOL9Bbs7GcL2Hd8YMO', 0, 'verified', 'Pnom penh', '045675689', 'Female');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `banner_area`
--
ALTER TABLE `banner_area`
  MODIFY `banner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `favorite`
--
ALTER TABLE `favorite`
  MODIFY `favorite_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`) VALUES
(1, 'AC'),
(2, 'VD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
