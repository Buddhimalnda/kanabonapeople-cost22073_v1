-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2023 at 05:00 PM
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
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(255) NOT NULL,
  `metadata` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`id`, `name`, `address`, `description`, `image`, `metadata`) VALUES
(1, 'Marino Beach Colombo', '590 Marine Drive, 00300 Colombo, Sri Lanka', 'Marino Beach Colombo has an outdoor swimming pool, fitness centre, a garden and terrace in Colombo. Among the facilities of this property are a restaurant, room service and a 24-hour front desk, along with free WiFi throughout the property. The accommodation features an ATM, a concierge service and currency exchange for guests.\nThe hotel will provide guests with air-conditioned rooms with a desk, a kettle, a minibar, a safety deposit box, a flat-screen TV, a balcony and a private bathroom with a', 'https://cdn.discordapp.com/attachments/1102564090020384869/1102691321447194714/156672332.jpg', '<iframe src=\'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126757.67791408818!2d79.85526720646992!3d6.869330816424121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2595fdbd5dd21%3A0x3a6aea27ffd9bc52!2sMarino%20Beach%20Colombo!5e0!3m2!1sen!2slk!4v1682972567596!5m2!1sen!2slk\' width=\'600\' height=\'450\' style=\'border:0;\' allowfullscreen=\'\' loading=\'lazy\' referrerpolicy=\'no-referrer-when-downgrade\'></iframe>'),
(2, 'Restaurant 2', 'Address 2', 'Description 2', 'https://cdn.discordapp.com/attachments/1102564090020384869/1102697450738827294/112518656.jpg', '<iframe src=\'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126757.67791408818!2d79.85526720646992!3d6.869330816424121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2595fdbd5dd21%3A0x3a6aea27ffd9bc52!2sMarino%20Beach%20Colombo!5e0!3m2!1sen!2slk!4v1682972567596!5m2!1sen!2slk\' width=\'600\' height=\'450\' style=\'border:0;\' allowfullscreen=\'\' loading=\'lazy\' referrerpolicy=\'no-referrer-when-downgrade\'></iframe>'),
(3, 'Marino Beach Colombo', '590 Marine Drive, 00300 Colombo, Sri Lanka', 'Marino Beach Colombo has an outdoor swimming pool, fitness centre, a garden and terrace in Colombo. Among the facilities of this property are a restaurant, room service and a 24-hour front desk, along with free WiFi throughout the property. The accommodation features an ATM, a concierge service and currency exchange for guests.\r\nThe hotel will provide guests with air-conditioned rooms with a desk, a kettle, a minibar, a safety deposit box, a flat-screen TV, a balcony and a private bathroom with ', 'https://cdn.discordapp.com/attachments/1102564090020384869/1102691321447194714/156672332.jpg', '<iframe src=\'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126757.67791408818!2d79.85526720646992!3d6.869330816424121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2595fdbd5dd21%3A0x3a6aea27ffd9bc52!2sMarino%20Beach%20Colombo!5e0!3m2!1sen!2slk!4v1682972567596!5m2!1sen!2slk\' width=\'600\' height=\'450\' style=\'border:0;\' allowfullscreen=\'\' loading=\'lazy\' referrerpolicy=\'no-referrer-when-downgrade\'></iframe>'),
(4, 'Restaurant 2', 'Address 2', 'Description 2', 'https://cdn.discordapp.com/attachments/1102564090020384869/1102697450738827294/112518656.jpg', '<iframe src=\'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126757.67791408818!2d79.85526720646992!3d6.869330816424121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2595fdbd5dd21%3A0x3a6aea27ffd9bc52!2sMarino%20Beach%20Colombo!5e0!3m2!1sen!2slk!4v1682972567596!5m2!1sen!2slk\' width=\'600\' height=\'450\' style=\'border:0;\' allowfullscreen=\'\' loading=\'lazy\' referrerpolicy=\'no-referrer-when-downgrade\'></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `restutent_gallery`
--

CREATE TABLE `restutent_gallery` (
  `id` int(11) NOT NULL,
  `res_id` int(11) NOT NULL,
  `img` varchar(500) NOT NULL,
  `title` varchar(255) NOT NULL,
  `metadata` varchar(1500) NOT NULL,
  `create_at` datetime NOT NULL DEFAULT current_timestamp(),
  `update_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restutent_gallery`
--

INSERT INTO `restutent_gallery` (`id`, `res_id`, `img`, `title`, `metadata`, `create_at`, `update_at`) VALUES
(1, 1, 'https://cdn.discordapp.com/attachments/1102564090020384869/1102711653499404289/439728928.jpg', 'foods', '', '2023-05-02 03:13:06', '2023-05-02 03:13:06'),
(2, 1, 'https://cdn.discordapp.com/attachments/1102564090020384869/1102711653809799268/435753729.jpg', 'foods', '', '2023-05-02 03:13:06', '2023-05-02 03:13:24'),
(3, 1, 'https://cdn.discordapp.com/attachments/1102564090020384869/1102711654132764804/435396843.jpg', 'foods', '', '2023-05-02 03:13:06', '2023-05-02 03:13:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restutent_gallery`
--
ALTER TABLE `restutent_gallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `restutent_gallery`
--
ALTER TABLE `restutent_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
