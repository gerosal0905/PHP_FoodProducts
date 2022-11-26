-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2022 at 07:07 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nutrilife`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(500) NOT NULL,
  `dated` date NOT NULL,
  `image` varchar(100) NOT NULL,
  `category` varchar(50) NOT NULL,
  `price` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `lastname`, `dated`, `image`, `category`, `price`) VALUES
(8, 'Orange You Glad?', 'Green ice, carrots, cucumber, mandarin orange, chicken pop & tangerine dressing', '2022-05-31', 'image1.jpg', 'Farm Fresh Salads', 300.00),
(14, 'Beloved Caesar...', 'Romain lettuce, bacon, chicken pop, croutons, cheese and caesar dressing', '2022-05-31', 'image6.jpg', 'Farm Fresh Salads', 300.00),
(15, 'Kan-I-Love You?!', 'Iceberg lettuce, cucumber, carrots, kani & japanese mayo', '2022-05-31', 'image3.jpg', 'Farm Fresh Salads', 300.00),
(16, 'Open Sesame!', 'Green ice lettuce, red cabbage, corn, cherry tomato, egg & roasted sesame dressing.', '2022-05-31', 'image4.jpg', 'Farm Fresh Salads', 300.00),
(17, 'Honey Dijon Vu!', 'Romain lettuce, carrots, corn, cherry tomato, egg, bacon & roasted sesame dressing', '2022-05-31', 'image5.jpg', 'Farm Fresh Salads', 300.00),
(25, 'Orange You Glad Cup', 'Green ice, carrots, cucumber, mandarin orange, chicken pop & tangerine dressing', '2022-05-31', 'Orange You Glad Cup.png', 'Beverages/In-cup Salads', 150.00),
(26, 'Beloved Caesar Cup', 'Romain lettuce, bacon, chicken pop, croutons, cheese and caesar dressing', '2022-05-31', 'Beloved Caesar Cup.png', 'Beverages/In-cup Salads', 150.00),
(27, 'Kan-I-Love You Cup', 'Iceberg lettuce, cucumber, carrots, kani & japanese mayo', '2022-05-31', 'Kan-i-love you cup.png', 'Beverages/In-cup Salads', 150.00),
(28, 'Open Sesame Cup', 'Green ice lettuce, red cabbage, corn, cherry tomato, egg & roasted sesame dressing', '2022-05-31', 'Open Sesame Cup.png', 'Beverages/In-cup Salads', 150.00),
(34, 'Honey Dijon Vu Cup', 'Romain lettuce, carrots, corn, cherry tomato, egg, bacon & roasted sesame dressing', '2022-05-31', 'Honey Dijon Vu Cup.png', 'Beverages/In-cup Salads', 150.00),
(35, 'Ampalaya', 'Fresh Vegetable/Fruit from our farm', '2022-05-31', 'ampalaya.png', 'Farm Fresh Fruits and Veggies', 130.50),
(36, 'Brocolli Untrimmed', 'Fresh Vegetable/Fruit from our farm', '2022-05-31', 'brocolli untrimmed.png', 'Farm Fresh Fruits and Veggies', 207.00),
(37, 'Cabbage Green', 'Fresh Vegetable/Fruit from our farm', '2022-05-31', 'cabbage green.png', 'Farm Fresh Fruits and Veggies', 151.50),
(38, 'Carrots', 'Fresh Vegetable/Fruit from our farm', '2022-05-31', 'carrots.png', 'Farm Fresh Fruits and Veggies', 88.50),
(39, 'Labuyo', 'Fresh Vegetable/Fruit from our farm', '2022-05-31', 'labuyo.png', 'Farm Fresh Fruits and Veggies', 502.50),
(40, 'Chili Green', 'Fresh Vegetable/Fruit from our farm', '2022-05-31', 'chili green.png', 'Farm Fresh Fruits and Veggies', 193.50),
(41, 'Cucumber Native', 'Fresh Vegetable/Fruit from our farm', '2022-05-31', 'cucumber native.png', 'Farm Fresh Fruits and Veggies', 93.00),
(42, 'French Beans', 'Fresh Vegetable/Fruit from our farm', '2022-05-31', 'french beans.png', 'Farm Fresh Fruits and Veggies', 600.00),
(43, 'Garlic Native', 'Fresh Vegetable/Fruit from our farm', '2022-05-31', 'garlic native.png', 'Farm Fresh Fruits and Veggies', 113.63),
(44, 'Green Ice', 'Fresh Vegetable/Fruit from our farm', '2022-05-31', 'green ice.png', 'Farm Fresh Fruits and Veggies', 190.50),
(45, 'Ice Berg', 'Fresh Vegetable/Fruit from our farm', '2022-05-31', 'ice berg.png', 'Farm Fresh Fruits and Veggies', 135.00),
(46, 'Romaine', 'Fresh Vegetable/Fruit from our farm', '2022-05-31', 'romaine.png', 'Farm Fresh Fruits and Veggies', 190.50),
(47, 'Onion Red Large', 'Fresh Vegetable/Fruit from our farm', '2022-05-31', 'onion red large.png', 'Farm Fresh Fruits and Veggies', 80.63),
(48, 'Onion White', 'Fresh Vegetable/Fruit from our farm', '2022-05-31', 'onion white.png', 'Farm Fresh Fruits and Veggies', 61.88),
(49, 'Garlic Peeled', 'Fresh Vegetable/Fruit from our farm', '2022-05-31', 'garlic peeled.png', 'Farm Fresh Fruits and Veggies', 112.50),
(50, 'Sweet Potato Orange', 'Fresh Vegetable/Fruit from our farm', '2022-05-31', 'sweet potato orange.png', 'Farm Fresh Fruits and Veggies', 112.50),
(51, 'Potato Reg Med', 'Fresh Vegetable/Fruit from our farm', '2022-05-31', 'potato reg med.png', 'Farm Fresh Fruits and Veggies', 70.50),
(52, 'Pechay Baguio', 'Fresh Vegetable/Fruit from our farm', '2022-05-31', 'pechay baguio.png', 'Farm Fresh Fruits and Veggies', 55.50),
(53, 'Pumpkin Local', 'Fresh Vegetable/Fruit from our farm', '2022-05-31', 'pumpkin local.png', 'Farm Fresh Fruits and Veggies', 67.50),
(54, 'Raddish White', 'Fresh Vegetable/Fruit from our farm', '2022-05-31', 'raddish white.png', 'Farm Fresh Fruits and Veggies', 97.50),
(55, 'Sayote', 'Fresh Vegetable/Fruit from our farm', '2022-05-31', 'sayote.png', 'Farm Fresh Fruits and Veggies', 39.00),
(56, 'Tomato Cherry', 'Fresh Vegetable/Fruit from our farm', '2022-05-31', 'tomato cherry.png', 'Farm Fresh Fruits and Veggies', 318.00),
(57, 'Tomato Local', 'Fresh Vegetable/Fruit from our farm', '2022-05-31', 'tomato local.png', 'Farm Fresh Fruits and Veggies', 58.50),
(58, 'Upo', 'Fresh Vegetable/Fruit from our farm', '2022-05-31', 'upo1.jpg', 'Farm Fresh Fruits and Veggies', 46.50),
(60, 'Okra', 'Fresh Vegetable/Fruit from our farm', '2022-05-31', 'okra.png', 'Farm Fresh Fruits and Veggies', 43.50);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
