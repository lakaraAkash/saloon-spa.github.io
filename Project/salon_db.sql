-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2021 at 04:40 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salon_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_registration`
--

CREATE TABLE `client_registration` (
  `cid` int(50) NOT NULL,
  `fname` varchar(230) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `address` varchar(300) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `mobile` int(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_registration`
--

INSERT INTO `client_registration` (`cid`, `fname`, `lname`, `address`, `city`, `state`, `email`, `mobile`, `gender`, `password`) VALUES
(6, 'Akash', 'Lakra', 'Amrutdhara society', 'Amreli', 'Gujarat', 'akashlakra220@gmail.com', 960154794, 'Male', 'admin'),
(7, 'Tejas', 'Mehta', 'Ramnagar society', 'Rajkot', 'Gujarat', '', 524687923, 'Male', 'admin2');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(25) NOT NULL,
  `cid` int(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(300) NOT NULL,
  `feedback` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `cid`, `email`, `contact`, `feedback`) VALUES
(2, 0, 'admin@gmail.com', '2545488622', 'good'),
(3, 0, 'abc@gmail.com', '1234569780', 'nice');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `order_new`
--

CREATE TABLE `order_new` (
  `order_id` int(10) NOT NULL,
  `date` date NOT NULL,
  `total_price` int(100) NOT NULL,
  `quantity` int(30) NOT NULL,
  `c_id` int(10) NOT NULL,
  `order_status` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_new`
--

INSERT INTO `order_new` (`order_id`, `date`, `total_price`, `quantity`, `c_id`, `order_status`) VALUES
(5, '2020-09-09', 580, 230, 6, ''),
(7, '2021-01-05', 800, 650, 8, '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(25) NOT NULL,
  `p_name` varchar(78) NOT NULL,
  `category` varchar(66) NOT NULL,
  `type` varchar(22) NOT NULL,
  `brandname` varchar(39) NOT NULL,
  `size` int(35) NOT NULL,
  `description` varchar(65) NOT NULL,
  `price` int(33) NOT NULL,
  `quantity` int(20) NOT NULL,
  `img1` varchar(90) NOT NULL,
  `img2` varchar(50) NOT NULL,
  `img3` varchar(35) NOT NULL,
  `feedback` varchar(50) NOT NULL,
  `color` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `p_name`, `category`, `type`, `brandname`, `size`, `description`, `price`, `quantity`, `img1`, `img2`, `img3`, `feedback`, `color`) VALUES
(22, 'p1', 'select', 'select', 'Infinity', 20, '', 2000, 52, 'images.png', 'images (2).jpeg', 'images (2).jpeg', '', 'BLUE'),
(32, 'p2', '13', '1', 'Fuzion', 330, 'These is very good salon and spa', 350, 640, 'images (1).jpeg', '', '', '', 'green');

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `cart_id` int(250) NOT NULL,
  `quantity` int(230) NOT NULL,
  `order_id` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shopping_cart`
--

INSERT INTO `shopping_cart` (`cart_id`, `quantity`, `order_id`) VALUES
(6, 1, 30),
(7, 2, 30);

-- --------------------------------------------------------

--
-- Table structure for table `shop_brand`
--

CREATE TABLE `shop_brand` (
  `infinity_id` int(250) NOT NULL,
  `fuzion_id` int(230) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop_brand`
--

INSERT INTO `shop_brand` (`infinity_id`, `fuzion_id`) VALUES
(5, 30),
(6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `shop_category`
--

CREATE TABLE `shop_category` (
  `haircare` varchar(300) NOT NULL,
  `styling` varchar(200) NOT NULL,
  `styling_tools` varchar(200) NOT NULL,
  `handcare` varchar(300) NOT NULL,
  `spa_tools` varchar(1000) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop_category`
--

INSERT INTO `shop_category` (`haircare`, `styling`, `styling_tools`, `handcare`, `spa_tools`, `id`) VALUES
('hair spa.jfif', 'flat iron, blow dryer, curling wand, curling iron, round brush\r\nimg flat iron.jfif, \r\nblow dryer.jfif,\r\ncurling wand.jfif,\r\ncurling iron.jfif,\r\nround brush.jfif', 'img flat iron.jfif, \r\nblow dryer.jfif,\r\ncurling wand.jfif,\r\ncurling iron.jfif,\r\nround brush.jfif', 'dettol hand wash or hand sanitizer', 'hair spa.jfif', 50),
('', '', '', '', '', 51);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(20) NOT NULL,
  `fname` varchar(66) NOT NULL,
  `lname` varchar(66) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(29) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(10, 'adarsh', 'ojha', 'xyz@gmail.com', 'hjiko33'),
(30, 'sidharth', 'trivedi', 'shivangi@gmail.com', 'sh21pl');

-- --------------------------------------------------------

--
-- Table structure for table `styling`
--

CREATE TABLE `styling` (
  `flat_iron` varchar(300) NOT NULL,
  `blow_dryer` varchar(230) NOT NULL,
  `curling_wand` varchar(200) NOT NULL,
  `curling_iron` varchar(300) NOT NULL,
  `round_brush` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `styling`
--

INSERT INTO `styling` (`flat_iron`, `blow_dryer`, `curling_wand`, `curling_iron`, `round_brush`) VALUES
('img flat iron.jfif', 'blow dryer.jfif', 'curling wand.jfif', 'curling iron.jfif', 'round brush.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(20) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `type`) VALUES
(1, 'tools'),
(12, '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_registration`
--
ALTER TABLE `client_registration`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `order_new`
--
ALTER TABLE `order_new`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `shop_brand`
--
ALTER TABLE `shop_brand`
  ADD PRIMARY KEY (`infinity_id`);

--
-- Indexes for table `shop_category`
--
ALTER TABLE `shop_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client_registration`
--
ALTER TABLE `client_registration`
  MODIFY `cid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_new`
--
ALTER TABLE `order_new`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  MODIFY `cart_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `shop_brand`
--
ALTER TABLE `shop_brand`
  MODIFY `infinity_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `shop_category`
--
ALTER TABLE `shop_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
