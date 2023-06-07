-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2023 at 09:15 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Name` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Food` varchar(30) NOT NULL,
  `Address` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`Name`, `Email`, `Phone`, `Food`, `Address`) VALUES
('saeed', 'saeed005@stu.kau.edu.sa', 555555533, 'burger', 'jeddah');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `description`, `price`, `image`) VALUES
(2, 'CHEESE BURGER', 'Ground Angus Beef, Cage-Free Over Medium Egg, Caramelized Onions, Bread And Butter Pickles, Cheddar Cheese, And Dijonnaise In A Warm Brioche Bun', '30', 'f95e8f3d56c0e52fd5e5.jpg'),
(4, 'CHEESE FRIES', 'Fresh Cut French Fries, With Melted Chedder Cheese\r\n\r\n', '20', '8a90a92de65fe8eae432.jpg'),
(6, 'Beef Burger', 'Burger with two meat slices, tomatoes, lettuce and cheese with barbuque sauce and grilled cheese', '45', '38534e4aa0580b168347.jpg'),
(7, 'FRIES', 'Regular Fresh Cut French Fries', '8', '8d2030950113eaa60f63.jpg'),
(8, 'BACON, EGG & CHEESE', 'Hardwood Smoked Bacon, Cage-Free Over Medium Egg. Chedder Cheese And Chipotle Ketchup In A Warm Brioche Bun', '23', 'a2276b8034d3c2bc3b8c.jpg'),
(9, 'SAUSAGE, EGG & CHEESE', 'House-Made Turkey Sausage, Cage-Free Over Medium Egg, Cheddar Cheese And Honey Mustard Aioli In A Warm Brioche Bun', '26', 'd248f311ee8c47ed472a.jpg'),
(10, 'ONION RING', 'Onion Rings With Ketchup And Hot Sauces', '8', '49b312be5663303f6fc7.jpg'),
(11, 'Tiramisu Cake', 'Tiramisu Cake is a classic Italian dessert transformed into a delectable cake', '18', '99ed8ac1db4939cabad2.jpg'),
(12, 'Double Chocolate Cake ', 'Moist and rich, this cake is made with layers of decadent chocolate cake infused with premium cocoa powder', '21', 'a765a276a8094efc8f15.jpg'),
(13, 'Chicken Burger', 'Delicious chicken burger with special sauce, tomatoes, lettuce and two pieces of soft bread for perfecte taste you will never forgot', '27', 'f71b246fa419998ea0d8.jpg'),
(14, 'Coockies', ' ', '10', '28f891e9e11e9f82174a.jpg'),
(15, 'Cheese Cake', ' ', '24', '3a8cdb28e69926214270.jpg'),
(18, 'Water', ' ', '4', '02a83485ba6aedfe375e.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(150) NOT NULL,
  `Currency` int(30) NOT NULL,
  `role` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `Currency`, `role`) VALUES
(4, 'saeed', 'saeed@stu.kau.edu.sa', 'e10adc3949ba59abbe56e057f20f883e', 0, 1),
(9, 'yzn80', 'yalalqanawi@stu.kau.edu.sa', 'e10adc3949ba59abbe56e057f20f883e', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Phone`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `Phone` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=555555558;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
