-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2023 at 12:45 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kanabonapeople_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `metadata` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `name`, `price`, `description`, `image`, `metadata`) VALUES
(1, 'Chicken Kottu Large', '10000', 'Kottu mix with vegetables,eggs,roast chicken,chilliepaste & gravy', 'https://cdn.discordapp.com/attachments/1091272676733100072/1099226822916456498/1.jpg', 'Metadata 1'),
(2, 'Chicken Kottu', '770.00', 'Kottu mix with vegetables,egg,roast chicken,chilliepaste & gravy', 'https://cdn.discordapp.com/attachments/1091272676733100072/1099349240586711040/2.jpeg', 'Metadata 2'),
(3, 'Mix Kottu Large', '1,400', 'Kottu Mix with vegetables, egg,chicken, sausages, pork, chilliepaste & gravy', 'https://cdn.discordapp.com/attachments/1091272676733100072/1099349787888853173/3.jpg', 'meta'),
(4, 'Chicken Kottu Large', '10000', 'Kottu mix with vegetables,eggs,roast chicken,chilliepaste & gravy', 'https://cdn.discordapp.com/attachments/1091272676733100072/1099226822916456498/1.jpg', 'Metadata 1'),
(5, 'Chicken Kottu', '770.00', 'Kottu mix with vegetables,egg,roast chicken,chilliepaste & gravy', 'https://cdn.discordapp.com/attachments/1091272676733100072/1099349240586711040/2.jpeg', 'Metadata 2'),
(6, 'Mix Kottu Large', '1,400', 'Kottu Mix with vegetables, egg,chicken, sausages, pork, chilliepaste & gravy', 'https://cdn.discordapp.com/attachments/1091272676733100072/1099349787888853173/3.jpg', 'meta');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL,
  `order_status` varchar(255) NOT NULL,
  `order_total` float NOT NULL,
  `order_tax` float NOT NULL,
  `order_subtotal` float NOT NULL,
  `order_shipping` float NOT NULL,
  `order_discount` float NOT NULL,
  `order_payment` varchar(255) NOT NULL,
  `order_payment_status` varchar(255) NOT NULL,
  `order_payment_date` datetime NOT NULL,
  `order_payment_transaction` varchar(255) NOT NULL,
  `order_payment_amount` float NOT NULL,
  `order_payment_method` varchar(255) NOT NULL,
  `order_payment_currency` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `metadata` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(15) NOT NULL,
  `image` varchar(500) NOT NULL,
  `type` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `number`, `image`, `type`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin', 'Buddhi@123', 'buddhimalinda66@gmail.com', '+94728152790', 'https://cdn.discordapp.com/attachments/956724850079195196/1056727055812808744/286907769_3324072301203064_342994825224985512_n.jpg', 'admin', 'active', '2023-04-30 00:32:22', '2023-04-30 01:46:11', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
