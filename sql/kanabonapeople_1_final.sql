-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2023 at 10:40 PM
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
(1, 'Chicken Kottu Large', '1000.00', 'Kottu mix with vegetables,eggs,roast chicken,chilliepaste & gravy', 'https://cdn.discordapp.com/attachments/1091272676733100072/1099226822916456498/1.jpg', 'Metadata 1'),
(2, 'Chicken Kottu', '770.00', 'Kottu mix with vegetables,egg,roast chicken,chilliepaste & gravy', 'https://cdn.discordapp.com/attachments/1091272676733100072/1099349240586711040/2.jpeg', 'Metadata 2'),
(3, 'Mix Kottu Large', '1400.00', 'Kottu Mix with vegetables, egg,chicken, sausages, pork, chilliepaste & gravy', 'https://cdn.discordapp.com/attachments/1091272676733100072/1099349787888853173/3.jpg', 'meta'),
(9, 'Mix fried rice', '850.00', 'Chicken,egg,Pork,sausage ,vegetables,chilipaste,green piece & gravy', 'https://cdn.discordapp.com/attachments/1091272676733100072/1104359418595913728/r4.jpg', 'no'),
(10, 'Roast Chikan & jambo sausage mix fried rice', '780.00', 'chicken, jumbo sausage, egg, vegetables, chili paste & gravy', 'https://cdn.discordapp.com/attachments/1091272676733100072/1104359710427189258/r5.PNG', 'no'),
(11, 'Kottu hub special kottu Daiya', '1,750.00', 'Kottu mix with vegetables,Roast chicken,jambo sausage,pork,egg bullseye,nai miris kochchi,chilipaste & gravy..(free lime juice or naran juice)', 'https://cdn.discordapp.com/attachments/1091272676733100072/1104361922859638874/ks1.PNG', '');

-- --------------------------------------------------------

--
-- Table structure for table `food_resturant`
--

CREATE TABLE `food_resturant` (
  `f_id` int(11) NOT NULL,
  `res_id` int(11) NOT NULL,
  `create_at` datetime NOT NULL,
  `creace_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `description` varchar(500) NOT NULL,
  `image` varchar(255) NOT NULL,
  `metadata` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`id`, `name`, `address`, `description`, `image`, `metadata`) VALUES
(1, 'Marino Beach Colombo', '590 Marine Drive, 00300 Colombo, Sri Lanka', 'Marino Beach Colombo has an outdoor swimming pool, fitness centre, a garden and terrace in Colombo. Among the facilities of this property are a restaurant, room service and a 24-hour front desk, along with free WiFi throughout the property. The accommodation features an ATM, a concierge service and currency exchange for guests.\nThe hotel will provide guests with air-conditioned rooms with a desk, a kettle, a minibar, a safety deposit box, a flat-screen TV, a balcony and a private bathroom with a', 'https://cdn.discordapp.com/attachments/1102564090020384869/1102691321447194714/156672332.jpg', '<iframe src=\'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126757.67791408818!2d79.85526720646992!3d6.869330816424121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2595fdbd5dd21%3A0x3a6aea27ffd9bc52!2sMarino%20Beach%20Colombo!5e0!3m2!1sen!2slk!4v1682972567596!5m2!1sen!2slk\' width=\'600\' height=\'450\' style=\'border:0;\' allowfullscreen=\'\' loading=\'lazy\' referrerpolicy=\'no-referrer-when-downgrade\'></iframe>'),
(9, 'Regal Réseau Hotel & Spa', '06 Carron Pl, Negombo 11500, Sri Lanka', 'Outdoor swimming pool\r\nAirport shuttle\r\nFree WiFi\r\nBeachfront\r\nFamily rooms\r\nSpa\r\nRestaurant\r\nTea/Coffee Maker in All Rooms\r\nBar\r\nExcellent Breakfast', 'https://cdn.discordapp.com/attachments/1102564090020384869/1104351077882675301/11.1.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.1293405917622!2d79.83741757745281!3d7.226084992779911!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2ef4298cb206d%3A0xcfd19550a55f509d!2sRegal%20R%C3%A9seau%20Hotel%20%26%20Spa!5e0!3m2!1sen!2suk!4v1683473068690!5m2!1sen!2suk\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(10, 'Mountain Heavens', '06 Carron Pl, Negombo 11500, Sri Lanka', 'Outdoor swimming pool\r\nFree WiFi\r\nFree parking\r\nRestaurant\r\nRoom service\r\nNon-smoking rooms\r\nTea/Coffee Maker in All Rooms\r\nBar\r\nBreakfast', 'https://cdn.discordapp.com/attachments/1102564090020384869/1104350630723723286/9.1.jpg', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.129340574212!2d79.83780381477465!3d7.226084994783509!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae2ef4298cb206d%3A0xcfd19550a55f509d!2sRegal%20R%C3%A9seau%20Hotel%20%26%20Spa!5e0!3m2!1sen!2suk!4v1683474042762!5m2!1sen!2suk\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>');

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
(3, 1, 'https://cdn.discordapp.com/attachments/1102564090020384869/1102711654132764804/435396843.jpg', 'foods', '', '2023-05-02 03:13:06', '2023-05-02 03:13:36'),
(10, 9, 'https://cdn.discordapp.com/attachments/1102564090020384869/1104351147302584400/11.11.jpg', 'breakfirst in top view', '', '2023-05-07 20:55:49', '2023-05-07 20:55:49'),
(11, 9, 'https://cdn.discordapp.com/attachments/1102564090020384869/1104351078411149383/11.3.jpg', 'Rooms', '', '2023-05-07 20:59:30', '2023-05-07 20:59:30'),
(12, 9, 'https://cdn.discordapp.com/attachments/1102564090020384869/1104351148560896022/11.15.jpg', 'Washrooms', '', '2023-05-07 21:00:37', '2023-05-07 21:00:37'),
(13, 10, 'https://cdn.discordapp.com/attachments/1102564090020384869/1104350666031370371/9.12.jpg', 'fool', '', '2023-05-07 21:14:03', '2023-05-07 21:14:03'),
(14, 10, 'https://cdn.discordapp.com/attachments/1102564090020384869/1104350665788117083/9.11.jpg', 'foods', '', '2023-05-07 21:14:48', '2023-05-07 21:14:48'),
(15, 10, 'https://cdn.discordapp.com/attachments/1102564090020384869/1104350632518897664/9.5.jpg', 'rooms', '', '2023-05-07 21:14:57', '2023-05-07 21:14:57');

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
(1, 'admin', 'Admin@123', 'admin@gmail.com', '0700000000', 'https://cdn.discordapp.com/attachments/1090881998039568467/1090884078145904640/avatar.png', 'admin', 'active', '2023-04-30 00:32:22', '2023-05-07 20:25:46', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_resturant`
--
ALTER TABLE `food_resturant`
  ADD PRIMARY KEY (`f_id`,`res_id`);

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
-- Indexes for table `restutent_gallery`
--
ALTER TABLE `restutent_gallery`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `restutent_gallery`
--
ALTER TABLE `restutent_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
