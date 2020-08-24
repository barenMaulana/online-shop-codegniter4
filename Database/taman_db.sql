-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 24, 2020 at 04:32 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taman_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `created_at`, `updated_at`) VALUES
(3, 'barenmaulana', '$2y$10$9OCaf2MsF13/IZwkWTNsluNdpHxfpmTsmEDnIOB5/CSRhpGudK1l2', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image_name` varchar(500) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `product_id`, `image_name`, `created_at`, `updated_at`) VALUES
(7, 4, '1592970709_91a321608d6d7ecab35c.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 6, '1593239141_63c9e78710f73d669436.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 6, '1593239152_b5941f151ec9410a04ce.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 6, '1593239168_9655d38f0ca972ba2c38.jpeg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 7, '1593239800_1e34f0be5114ba4744df.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 7, '1593239894_cd7ce6a44a73437b6165.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 8, '1593240581_694a8e01b0eddb8a7d3a.jpeg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 8, '1593240592_4e3de515177b1396faee.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 8, '1593240607_cd520214a5074775d274.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 9, '1593240618_38ff705c97fe4fdf5ffb.jpeg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 9, '1593240630_c267c5d5775f86aa9c0f.jpeg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 9, '1593240638_94e35456635fb98c80e9.jpeg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 10, '1593240666_8c1605aa3df13b90ce6c.jpeg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 10, '1593240677_19b973d08d12125bcfda.jpeg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 10, '1593240691_d9ec4bf30aebfd993062.jpeg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 11, '1593240713_713e2130f5bbf974d7be.jpeg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 11, '1593240723_b77ab9071692df9953c3.jpeg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 11, '1593240732_bbc71e1d9a36c3e091af.jpeg', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(2, '2020-06-15-033447', 'App\\Database\\Migrations\\ProductRates', 'default', 'App', 1592192594, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_desc` varchar(500) NOT NULL,
  `product_category` varchar(20) NOT NULL,
  `link_tokopedia` varchar(300) NOT NULL,
  `link_lazada` varchar(300) NOT NULL,
  `link_shopee` varchar(300) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_price`, `product_desc`, `product_category`, `link_tokopedia`, `link_lazada`, `link_shopee`, `created_at`, `updated_at`) VALUES
(6, 'Pohon Morning Glory/Pohon Rambat', 75000, 'Deskripsi Pohon Morning Glory/Pohon Rambat\r\n\r\nPohon morning glory adalah pohon rambat yang sedang populer di jaman sekarang,, bukan cuma populer pohon ini  juga salah satu pohon yang berbunga dan bunganya sangan inidah,\r\nready stock..\r\nWa 089681481184', 'TANAMAN', 'https://www.tokopedia.com/archive-rizkyflora/pohon-morning-glory-pohon-rambat', 'https://www.lazada.co.id/products/tanaman-hias-morning-glory-pohon-bibit-morningglory-i1246492127-s2079020807.html?spm=a2o4j.searchlist.list.43.25b9281cws7adS&amp;search=1', 'https://shopee.co.id/Pohon-merambat-morning-glory-i.202637561.5734640582', '2020-06-27 11:14:45', '2020-06-27 11:14:45'),
(7, 'tanaman aglo dud anjamani', 150000, 'Semua etalase selalu ready ya\r\n\r\nAlways ready', 'TANAMAN', 'https://www.tokopedia.com/uniquesmart11/tanaman-aglo-dud-anjamani', 'https://www.lazada.co.id/products/tanaman-hias-aglonema-lipstick-aglonema-red-lipstik-aglo-i1445366162-s2671098202.html?spm=a2o4j.searchlist.list.31.3c6438a9PgINzp&amp;search=1', 'https://shopee.co.id/Tanaman-hias-Aglonema-Murah-Dud-Anjamani-Aglo-i.146308520.4618906271', '2020-06-27 13:35:50', '2020-06-27 13:35:50'),
(8, 'Tanaman Hias', 1000000, 'contoh deskripsi', 'TANAMAN', '#', '#', '#', '2020-06-27 13:47:24', '2020-06-27 13:47:24'),
(9, 'Tanaman Hias2', 3000000, 'contoh deskripsi', 'TANAMAN', '#', '#', '#', '2020-06-27 13:48:06', '2020-06-27 13:48:06'),
(10, 'Tanaman Hias 3', 500000, 'contoh deskripsi', 'TAMAN', '#', '#', '#', '2020-06-27 13:48:38', '2020-06-27 13:48:38'),
(11, 'Tanaman Hias 4', 480000, 'contoh deskripsi', 'TANAMAN', '#', '#', '#', '2020-06-27 13:49:16', '2020-06-27 13:49:16'),
(12, 'asd', 10000, 'asdASd', 'TANAMAN', 'asdsad', 'asd', 'asd', '2020-06-27 20:32:47', '2020-06-27 20:32:47');

-- --------------------------------------------------------

--
-- Table structure for table `product_rates`
--

CREATE TABLE `product_rates` (
  `id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `stars` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_rates`
--
ALTER TABLE `product_rates`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product_rates`
--
ALTER TABLE `product_rates`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
