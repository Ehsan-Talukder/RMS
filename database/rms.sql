-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2023 at 01:46 PM
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
-- Database: `rms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(40) NOT NULL,
  `restaurent_name` varchar(130) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `restaurent_name`) VALUES
(5, 'Fast Food', ''),
(6, 'Sea Food', ''),
(7, 'Rice Plater', ''),
(8, 'category_nameads', ''),
(9, 'category_name', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee_list`
--

CREATE TABLE `employee_list` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `salary` float NOT NULL,
  `designation` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `restaurent_name` varchar(130) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_list`
--

INSERT INTO `employee_list` (`id`, `name`, `image`, `salary`, `designation`, `status`, `restaurent_name`) VALUES
(1, 'Ehsan Talukder', 'IMG_20181001_151953.jpg', 3000, 'Cook', 'Well Performer', '');

-- --------------------------------------------------------

--
-- Table structure for table `food_item`
--

CREATE TABLE `food_item` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `status` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category_name` varchar(60) DEFAULT NULL,
  `subcategory` varchar(50) NOT NULL,
  `restaurent_name` varchar(130) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food_item`
--

INSERT INTO `food_item` (`id`, `name`, `image`, `price`, `status`, `quantity`, `description`, `category_name`, `subcategory`, `restaurent_name`) VALUES
(6, 'Combo Burger', 'pexels-rania-alhamed-2454533.jpg', 44, 'status', 34, 'description', 'Fast Food', 'fdgfdg', ''),
(7, 'SeaCrab', 'pexels-toa-heftiba-şinca-1194431.jpg', 666, 'status', 34, 'description', 'Sea Food', '', ''),
(8, 'Egg Noodles', 'pexels-jan-n-g-u-y-e-n-🍁-2664216.jpg', 44, 'status', 34, 'description', 'Fast Food', '', ''),
(9, 'Chicken Fried Rice', 'pexels-rajesh-tp-1624487.jpg', 433, 'status', 34, 'description', 'Rice Plater', '', ''),
(10, 'Sub Burger', 'pexels-rajesh-tp-1633525.jpg', 220, 'status', 366, 'description', 'Fast Food', '', ''),
(11, 'Egg Noodles', 'pexels-lumn-1410235.jpg', 344, 'status', 44, 'description', 'Fast Food', '', ''),
(12, 'name', 'pexels-engin-akyurt-1435735.jpg', 32432, 'status', 33, 'description', 'category_nameads', '', ''),
(13, 'name', 'pexels-engin-akyurt-1435735.jpg', 34, 'status', 3, 'description', 'category_name', '', ''),
(14, 'name', 'pexels-jan-n-g-u-y-e-n-🍁-2664216.jpg', 3434, 'status', 3, 'description', 'category_name', '', ''),
(15, 'name', 'pexels-toa-heftiba-şinca-1194431.jpg', 343, 'status', 3, 'description', 'category_name', '', ''),
(16, 'name', 'pexels-jan-n-g-u-y-e-n-🍁-2664216.jpg', 3434, 'status', 33, 'description', 'category_name', '', ''),
(17, 'name', 'pexels-jan-n-g-u-y-e-n-🍁-2664216.jpg', 100, 'status', 3, 'description', 'Fast Food', '', ''),
(19, 'name', 'pexels-rajesh-tp-1633525.jpg', 45, 'status', 54, 'description', 'Fast Food', 'Burger', '');

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `id` int(11) NOT NULL,
  `name` varchar(110) NOT NULL,
  `p_price` int(11) NOT NULL,
  `quantiry` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `status` varchar(23) NOT NULL,
  `table_no` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `month` varchar(30) DEFAULT NULL,
  `restaurent_name` varchar(130) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_list`
--

INSERT INTO `order_list` (`id`, `name`, `p_price`, `quantiry`, `total`, `status`, `table_no`, `date`, `month`, `restaurent_name`) VALUES
(1, 'Combo Burger', 44, 1, 44, 'Paid & Delivered', 9, '2023-07-11', '07', ''),
(2, 'Sub Burger', 220, 1, 220, 'Paid & Delivered', 9, '2023-07-11', '07', ''),
(3, 'name', 45, 1, 45, 'Paid & Delivered', 9, '2023-07-11', '07', ''),
(4, 'name', 100, 1, 100, 'Paid & Delivered', 9, '2023-07-11', '07', ''),
(5, 'name', 100, 1, 100, 'Paid & Delivered', 9, '2023-07-11', '07', ''),
(6, 'Sub Burger', 220, 1, 220, 'Paid & Delivered', 9, '2023-07-11', '07', ''),
(7, 'Combo Burger', 44, 1, 44, 'Paid & Delivered', 9, '2023-07-12', '07', ''),
(8, 'Sub Burger', 220, 1, 220, 'Paid & Delivered', 9, '2023-07-12', '07', ''),
(9, 'Egg Noodles', 44, 1, 44, 'Paid & Delivered', 9, '2023-07-12', '07', ''),
(10, 'Combo Burger', 44, 1, 44, 'Paid & Delivered', 9, '2023-07-12', '07', ''),
(11, 'name', 45, 1, 45, 'Paid & Delivered', 9, '2023-07-12', '07', ''),
(12, 'name', 100, 1, 100, 'Paid & Delivered', 9, '2023-07-12', '07', ''),
(13, 'Egg Noodles', 44, 1, 44, 'Paid & Delivered', 9, '2023-07-12', '07', ''),
(14, 'SeaCrab', 666, 1, 666, 'Paid & Delivered', 9, '2023-07-12', '07', ''),
(15, 'name', 32432, 1, 32432, 'Paid & Delivered', 9, '2023-07-12', '07', ''),
(16, 'Chicken Fried Rice', 433, 1, 433, 'Paid & Delivered', 9, '2023-07-12', '07', ''),
(17, 'name', 32432, 1, 32432, 'Paid & Delivered', 9, '2023-07-12', '07', ''),
(20, 'Egg Noodles', 44, 1, 44, 'Order_Placed', 9, '2023-07-12', '07', ''),
(21, 'Egg Noodles', 44, 1, 44, 'Order_Placed', 9, '2023-07-12', '07', ''),
(24, 'Combo Burger', 44, 1, 44, 'not_confirmed', 9, '2023-07-12', '07', '');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(11) NOT NULL,
  `subcategoryName` varchar(30) NOT NULL,
  `categoryName` varchar(40) NOT NULL,
  `restaurent_name` varchar(130) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `subcategoryName`, `categoryName`, `restaurent_name`) VALUES
(1, 'subcategoryName', 'category_name', ''),
(2, 'subcategoryNameer', 'Fast Food', ''),
(3, 'Burger', 'Fast Food', '');

-- --------------------------------------------------------

--
-- Table structure for table `table_no`
--

CREATE TABLE `table_no` (
  `id` int(11) NOT NULL,
  `table_no` int(11) NOT NULL,
  `status` varchar(34) NOT NULL,
  `restaurent_name` varchar(130) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `table_no`
--

INSERT INTO `table_no` (`id`, `table_no`, `status`, `restaurent_name`) VALUES
(1, 1, 'free', ''),
(2, 9, 'busy', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_list`
--
ALTER TABLE `employee_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_item`
--
ALTER TABLE `food_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_list`
--
ALTER TABLE `order_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_no`
--
ALTER TABLE `table_no`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `employee_list`
--
ALTER TABLE `employee_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `food_item`
--
ALTER TABLE `food_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `order_list`
--
ALTER TABLE `order_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `table_no`
--
ALTER TABLE `table_no`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
