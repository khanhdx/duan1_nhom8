-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2023 at 07:15 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webshirt`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `img`, `name`) VALUES
(40, '4.jpg', 'LU ÍT VUI TƯƠI'),
(41, '7.jpg', 'LU ÍT VUI TƯƠI'),
(42, '1.jpg', 'LU ÍT VUI TƯƠI');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(10) NOT NULL,
  `iduser` int(10) DEFAULT 0,
  `bill_name` varchar(255) NOT NULL,
  `bill_address` varchar(25) NOT NULL,
  `bill_phone` varchar(50) NOT NULL,
  `bill_email` varchar(100) NOT NULL,
  `bill_pttt` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1: Thanh toán trực tiếp 2:Thanh toán online',
  `ngaydathang` varchar(50) NOT NULL,
  `total` int(10) NOT NULL DEFAULT 0,
  `bill_status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0: Đơn hàng  1: Đang xử lý 2: Đang giao hàng 3:Đã giao hàng',
  `receive_name` varchar(255) NOT NULL,
  `receive_address` varchar(255) NOT NULL,
  `receive_phone` varchar(50) NOT NULL,
  `code_order` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `iduser`, `bill_name`, `bill_address`, `bill_phone`, `bill_email`, `bill_pttt`, `ngaydathang`, `total`, `bill_status`, `receive_name`, `receive_address`, `receive_phone`, `code_order`) VALUES
(191, 13, 'nguyendacquan', 'Thuận Thành - Bắc Ninh', '0983183446', 'ahihi@gmail.com', 1, '2023-12-06 01:39:21', 199999, 4, '', '', '', 'CODE50802003');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `img` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(10) NOT NULL DEFAULT 0,
  `soluong` int(3) NOT NULL,
  `thanhtien` int(10) NOT NULL,
  `idbill` int(10) NOT NULL,
  `size` varchar(11) NOT NULL,
  `color` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `iduser`, `idpro`, `img`, `name`, `price`, `soluong`, `thanhtien`, `idbill`, `size`, `color`) VALUES
(233, 13, 54, '2.jpg', 'LOUIS VUITTON', 199999, 1, 199999, 191, 'L', 'Black');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

CREATE TABLE `colors` (
  `id_color` int(11) NOT NULL,
  `color` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`id_color`, `color`) VALUES
(1, 'Black'),
(2, 'White');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id_comment` int(11) NOT NULL,
  `content` varchar(500) DEFAULT NULL,
  `time` varchar(255) NOT NULL,
  `id_product` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `softdelete` tinyint(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id_comment`, `content`, `time`, `id_product`, `user`, `softdelete`) VALUES
(34, 'fafefefef', '2023-11-30 15:32:47', 59, 'nguyendacquan', 1),
(35, 'fafefefef', '2023-11-30 15:34:50', 59, 'nguyendacquan', 1),
(36, 'dawdawdwd', '2023-11-30 15:34:56', 59, 'nguyendacquan', 1),
(37, 'dahuydgawdawd', '2023-11-30 15:35:23', 59, 'nguyendacquan', 1),
(38, 'cafqw q3', '2023-11-30 18:31:01', 56, 'nguyendacquan', 1),
(39, 'dăbdjavhwhdvw', '2023-11-30 23:48:24', 58, 'admin', 1),
(40, 'dbjagjdgaiwdguagduwgigwd', '2023-12-01 00:33:54', 54, 'admin', 1),
(41, 'helllo', '2023-12-01 06:10:20', 58, 'nguyendacquan', 1),
(42, 'le xuan hoa nghien\r\n', '2023-12-01 07:48:43', 56, 'admin', 1),
(43, 'sefeffefefsefsef', '2023-12-03 11:43:34', 56, 'admin', 1),
(44, 'ac', '2023-12-04 07:28:27', 58, 'nguyendacquan', 0),
(45, 'dabjdbabdkad', '2023-12-04 07:28:39', 58, 'nguyendacquan', 0);

-- --------------------------------------------------------

--
-- Table structure for table `groupproduct`
--

CREATE TABLE `groupproduct` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groupproduct`
--

INSERT INTO `groupproduct` (`id`, `name`) VALUES
(22, 'LOUIS VUITTON'),
(23, 'ND');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `quantity` int(100) NOT NULL DEFAULT 0,
  `id_groupproduct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `img`, `price`, `quantity`, `id_groupproduct`) VALUES
(53, 'LOUIS VUITTON', '3.jpg', 19999, 99, 22),
(54, 'LOUIS VUITTON', '2.jpg', 199999, 0, 22),
(56, 'ND', '1.jpg', 199999, 99, 23),
(58, 'LOUIS VUITTON', '4.jpg', 599999, 0, 22),
(60, 'LOUIS VUITTON', '5.jpg', 599999, 0, 22);

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id_size` int(11) NOT NULL,
  `size` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id_size`, `size`) VALUES
(1, 'M'),
(2, 'L');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `roles` tinyint(1) DEFAULT 0,
  `img` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user`, `password`, `email`, `roles`, `img`, `address`, `phone`, `gender`) VALUES
(13, 'nguyendacquan', '123', 'ahihi@gmail.com', 1, 'ndq.png', 'Thuận Thành - Bắc Ninh', '0983183446', 'Nam');

-- --------------------------------------------------------

--
-- Table structure for table `variants`
--

CREATE TABLE `variants` (
  `id_variant` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `id_size` int(11) NOT NULL,
  `id_color` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `variants`
--

INSERT INTO `variants` (`id_variant`, `quantity`, `id`, `id_size`, `id_color`) VALUES
(53, 99, 53, 1, 1),
(54, 99, 54, 2, 2),
(56, 99, 56, 1, 1),
(58, 99, 58, 2, 2),
(60, 99, 60, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_id_user` (`iduser`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_bill_cart` (`idbill`),
  ADD KEY `lk_idproduct` (`idpro`),
  ADD KEY `id_user` (`iduser`);

--
-- Indexes for table `colors`
--
ALTER TABLE `colors`
  ADD PRIMARY KEY (`id_color`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comment`);

--
-- Indexes for table `groupproduct`
--
ALTER TABLE `groupproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `lk_groupproduct_product` (`id_groupproduct`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id_size`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `variants`
--
ALTER TABLE `variants`
  ADD PRIMARY KEY (`id_variant`),
  ADD KEY `lk_color` (`id_color`),
  ADD KEY `lk_size` (`id_size`),
  ADD KEY `lk_idroduct` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=192;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234;

--
-- AUTO_INCREMENT for table `colors`
--
ALTER TABLE `colors`
  MODIFY `id_color` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `groupproduct`
--
ALTER TABLE `groupproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id_size` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `variants`
--
ALTER TABLE `variants`
  MODIFY `id_variant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `lk_id_user` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `id_user` FOREIGN KEY (`iduser`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `lk_bill_cart` FOREIGN KEY (`idbill`) REFERENCES `bill` (`id`),
  ADD CONSTRAINT `lk_idproduct` FOREIGN KEY (`idpro`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `lk_groupproduct_product` FOREIGN KEY (`id_groupproduct`) REFERENCES `groupproduct` (`id`);

--
-- Constraints for table `variants`
--
ALTER TABLE `variants`
  ADD CONSTRAINT `lk_color` FOREIGN KEY (`id_color`) REFERENCES `colors` (`id_color`),
  ADD CONSTRAINT `lk_idroduct` FOREIGN KEY (`id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `lk_size` FOREIGN KEY (`id_size`) REFERENCES `sizes` (`id_size`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
