-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2020 at 11:01 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopee`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cos` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `produs` (
  `item_id` int(11) NOT NULL,
  `item_brand` varchar(200) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` double(10,2) NOT NULL,
  `item_image` varchar(255) NOT NULL,
  `item_image_0` varchar(255) NOT NULL,
  `item_image_1` varchar(255) NOT NULL,
  `item_image_2` varchar(255) NOT NULL,
  `item_image_3` varchar(255) NOT NULL,
  `item_quantity` int(3) NOT NULL,
  `item_category` varchar(255) NOT NULL,
  `item_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `produs` (`item_id`, `item_brand`, `item_name`, `item_price`, `item_image`, `item_image_0`,`item_image_1`,`item_image_2`,`item_image_3`, `item_quantity`, `item_category`, `item_register`) VALUES
(1, 'Samsung', 'Samsung Galaxy A41', 2000, 'HTML Template/imagini/a41.png', 'HTML Template/imagini/a41-0.jpg','HTML Template/imagini/a41-1.jpg','HTML Template/imagini/a41-2.jpg','HTML Template/imagini/a41-3.jpg',10,'Telefoane','2020-12-28 11:08:57'), -- NOW()
(2, 'ASUS', 'Laptop Asus TUF Gaming', 4000, 'HTML Template/imagini/tstt3.jpg', 'HTML Template/imagini/tstt3.jpg','HTML Template/imagini/tstt4.jpg','HTML Template/imagini/tstt5.jpg','HTML Template/imagini/tstt6.jpg',15,'Laptopuri', '2020-12-28 11:08:57'),
(3, 'Apple', 'iPhone 12 PRO MAX', 5000, 'HTML Template/imagini/iph12.png', 'HTML Template/imagini/iph12-0.jpg','HTML Template/imagini/iph12-1.jpg','HTML Template/imagini/iph12-2.jpg','HTML Template/imagini/iph12-3.jpg',9,'Telefoane','2020-12-28 11:08:57'),
(4, 'Samsung', 'Samsung Galaxy S20', 3999, 'HTML Template/imagini/s20.png','HTML Template/imagini/s20-0.jpg','HTML Template/imagini/s20-1.jpg','HTML Template/imagini/s20-2.jpg','HTML Template/imagini/s20-3.jpg',12,'Telefoane','2020-12-28 11:08:57'),
(5, 'ASUS', 'ASUS ROG Zephyrus', 3700, 'HTML Template/imagini/rog.png','HTML Template/imagini/rog-0.jpg','HTML Template/imagini/rog-1.jpg','HTML Template/imagini/rog-2.jpg','HTML Template/imagini/rog-3.jpg',10,'Laptopuri', '2020-12-28 11:08:57'),
(6, 'LG', 'TV Led LG Smart', 2399, 'HTML Template/imagini/lgtv.png','HTML Template/imagini/lgtv-0.jpg','HTML Template/imagini/lgtv-1.jpg','HTML Template/imagini/lgtv-2.jpg','HTML Template/imagini/lgtv-3.jpg',11,'Televizoare', '2020-12-28 11:08:57'),
(7, 'Apple', 'Apple Macbook Pro', 12224, 'HTML Template/imagini/macbook.png', 'HTML Template/imagini/macbook-0.jpg','HTML Template/imagini/macbook-1.jpg','HTML Template/imagini/macbook-2.jpg','HTML Template/imagini/macbook-3.jpg',7,'Laptopuri', '2020-12-28 11:08:57'),
(8, 'Huawei', 'Huawei P Smart', 1500, 'HTML Template/imagini/huawei.png', 'HTML Template/imagini/huawei-0.jpg','HTML Template/imagini/huawei-1.jpg','HTML Template/imagini/huawei-2.jpg','HTML Template/imagini/huawei-3.jpg',20,'Telefoane','2020-12-28 11:08:57'),
(9, 'Huawei', 'P40 Lite', 1100, 'HTML Template/imagini/p40.png', 'HTML Template/imagini/p40-0.jpg','HTML Template/imagini/p40-1.jpg','HTML Template/imagini/p40-2.jpg','HTML Template/imagini/p40-3.jpg',18,'Telefoane','2020-03-28 11:08:57'),
(10, 'Philips', 'Tv Philips Smart', 1399, 'HTML Template/imagini/philips.png', 'HTML Template/imagini/philips-0.jpg','HTML Template/imagini/philips-1.jpg','HTML Template/imagini/philips-2.jpg','HTML Template/imagini/philips-3.jpg',30,'Televizoare','2020-12-28 11:08:57'),
(11, 'LG', 'TV LG plasma', 1500, 'HTML Template/imagini/samsung.png', 'HTML Template/imagini/lg-0.jpg','HTML Template/imagini/lg-1.jpg','HTML Template/imagini/lg-2.jpg','HTML Template/imagini/lg-3.jpg',10,'Televizoare','2020-03-28 11:08:57'),
(12, 'Samsung', 'TV Samsung plasma', 1900, 'HTML Template/imagini/tvsamsung.png', 'HTML Template/imagini/tvsamsung-0.jpg','HTML Template/imagini/tvsamsung-1.jpg','HTML Template/imagini/tvsamsung-2.jpg','HTML Template/imagini/tvsamsung-3.jpg',22,'Televizoare','2020-12-28 11:08:57'),
(13, 'Acer', 'Laptop Acer', 3000, 'HTML Template/imagini/acer.png', 'HTML Template/imagini/acer-0.jpg','HTML Template/imagini/acer-1.jpg','HTML Template/imagini/acer-2.jpg','HTML Template/imagini/acer-3.jpg',17,'Laptopuri','2020-12-28 11:08:57');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `client` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `phone_number` number(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--



-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `favorite` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cos`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `produs`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cos`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `produs`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `client`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
