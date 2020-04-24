-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2020 at 04:20 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(20) NOT NULL,
  `product_id` int(20) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` int(20) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `product_id`, `product_name`, `product_price`, `product_image`, `email`) VALUES
(36, 3, 'Ghee', 500, 'ghee.jpg', ''),
(37, 3, 'Ghee', 500, 'ghee.jpg', 'pramodpant100@gmail.com'),
(38, 5, 'Honey', 250, 'honey.jpg', 'pramodpant100@gmail.com'),
(39, 10, 'Redmi 5', 5000, 'Redmi 5.jpg', 'pramodpant100@gmail.com'),
(40, 17, 'Eno', 70, 'eno.jpg', 'pramodpant100@gmail.com'),
(41, 4, 'Atta', 120, 'atta.jpg', 'pramodpant100@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_price` int(20) NOT NULL,
  `product_stock` int(20) NOT NULL,
  `product_image` varchar(50) NOT NULL,
  `product_description` varchar(500) NOT NULL,
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `product_stock`, `product_image`, `product_description`, `category`) VALUES
(3, 'Ghee', 500, 18, 'ghee.jpg', ':It is Ghee and good for health .Use daily for health benefits and testy meal.', 'food'),
(4, 'Atta', 120, 19, 'atta.jpg', ':It is Atta and good for health .Use daily for health benefits and testy meal.', 'food'),
(5, 'Honey', 250, 19, 'honey.jpg', ':It is Honey and good for health .Use daily for health benefits and testy meal.', 'food'),
(6, 'pazzta', 100, 20, 'pazzta.jpg', ':It is pazzta and good for health .Use daily for health benefits and testy meal.', 'food'),
(7, 'Cofee', 400, 20, 'cofee.jpg', ':It is Cofee and good for health .Use daily for health benefits and testy meal.', 'food'),
(8, 'ghee', 120, 20, 'ghee.jpg', ':It is oil and good for health .Use daily for health benefits and testy meal.', 'food'),
(9, 'Oppo A9', 11990, 18, 'OPPO A9.jpg', 'Good Phone', 'electronics'),
(10, 'Redmi 5', 5000, 18, 'Redmi 5.jpg', 'Good phone', 'electronics'),
(11, 'Redmi Note8', 7000, 20, 'RedmiNote8.jpg', 'Very good Phone', 'electronics'),
(12, 'Vivo V9', 5000, 19, 'VivoV9.jpg', 'Good to  Use', 'electronics'),
(13, 'Vivo V20', 12000, 20, 'VivoV20.jpg', 'Good phone', 'electronics'),
(17, 'Eno', 70, 9, 'eno.jpg', 'Acidity Regulator', 'food');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(20) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` int(50) NOT NULL,
  `mobile_no` int(50) NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `email`, `password`, `mobile_no`, `address`) VALUES
(2, 'Pramod Pant', 'pramodpant100@gmail.com', 0, 1234567890, 'vill-Pulhindola, Distic-Champawat '),
(3, 'Aman', 'aman@gmail.com', 0, 1234567890, 'vill-Pulhindola, Distic-Champawat '),
(4, 'Raman', 'raman@gmail.com', 0, 1234567890, 'city_delhi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
