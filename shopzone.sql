-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2022 at 05:34 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopzone`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `prod_qty` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `prod_id`, `prod_qty`, `created_at`) VALUES
(33, 1, 1, 2, '2022-12-23 04:15:42');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `description` mediumtext DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `popular` tinyint(4) NOT NULL DEFAULT 0,
  `image` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `status`, `popular`, `image`, `created_at`) VALUES
(2, 'Mobile', 'Mobile', 'All types of mobile', 0, 1, '1668609806.png', '2022-11-16 14:43:26'),
(8, 'Fashion', 'Fashion', 'All types of Fashion', 0, 1, '1668839090.jpg', '2022-11-17 15:35:53'),
(13, 'Shoes', 'Shoes', 'Shoes', 0, 1, '1670418648.webp', '2022-12-05 13:59:35'),
(14, 'Laptop', 'Laptop', 'All Types of Laptops!!', 0, 1, '1670507258.webp', '2022-12-08 13:47:38');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `subject` varchar(191) NOT NULL,
  `message` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `subject`, `message`, `created_at`) VALUES
(3, 'Archit Patel', 'architpatel123@gmail.com', 'Product', 'My product not delivered', '2022-12-06 14:35:11'),
(4, 'Jasmine James', 'jasmine123@gmail.com', 'Payment', 'I am not able to pay!!', '2022-12-08 13:38:02');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `tracking_no` varchar(191) NOT NULL,
  `user_id` int(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(191) NOT NULL,
  `address` mediumtext NOT NULL,
  `pincode` int(191) NOT NULL,
  `total_price` int(191) NOT NULL,
  `payment_mode` varchar(191) NOT NULL,
  `payment_id` varchar(191) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `comments` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `tracking_no`, `user_id`, `name`, `email`, `phone`, `address`, `pincode`, `total_price`, `payment_mode`, `payment_id`, `status`, `comments`, `created_at`) VALUES
(3, 'shopzone7327', 4, 'Jasmine James', 'jasmine123@gmail.com', '9685747485', 'Near wall street, belgium', 380050, 26000, 'COD', '', 2, NULL, '2022-11-26 05:32:48'),
(4, 'shopzone7240', 4, 'Archit Patel', 'architpatel52@gmail.com', '8574967485', 'Near avkar hall,ghodasar', 380005, 54000, 'COD', '', 1, NULL, '2022-11-26 05:56:27'),
(5, 'shopzone7920', 1, 'Olivia Thomas', 'olithoms76@gmail.com', '+234325478968', 'Street:  1 Simone Weil Avenue\r\nCity:  Wellhill', 52007, 26000, 'COD', '', 0, NULL, '2022-12-08 15:13:04'),
(6, 'shopzone7781', 1, 'test', 'a@mail.com', 'hiuiguigug', '9, Parul Flat , Laxmi colony, Near Avkaar Hall,ghodasar , Maninagar', 0, 399900, 'COD', '', 1, NULL, '2022-12-14 06:58:24');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(191) NOT NULL,
  `prod_id` int(191) NOT NULL,
  `qty` int(191) NOT NULL,
  `price` int(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `prod_id`, `qty`, `price`, `created_at`) VALUES
(5, 3, 1, 2, 13000, '2022-11-26 05:32:48'),
(6, 4, 2, 2, 27000, '2022-11-26 05:56:27'),
(7, 5, 1, 2, 13000, '2022-12-08 15:13:04'),
(8, 6, 28, 10, 39990, '2022-12-14 06:58:24');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `small_description` mediumtext NOT NULL,
  `description` mediumtext NOT NULL,
  `original_price` int(11) NOT NULL,
  `selling_price` int(11) NOT NULL,
  `image` varchar(191) NOT NULL,
  `qty` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `trending` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `slug`, `small_description`, `description`, `original_price`, `selling_price`, `image`, `qty`, `status`, `trending`, `created_at`) VALUES
(1, 2, 'Redmi note 7', 'redmi-note-7', 'Redmi Note 7 Pro (Neptune Blue, 64 GB) (4 GB RAM)', 'This Renewed product is tested to work and look like new with minimal to no signs of wear & tear; the product comes with relevant accessories and is backed by a minimum six month seller warranty; box may be generic.\r\n4 GB RAM | 64 GB ROM | Expandable Upto 256 GB | The Corning Gorilla Glass 5\r\n16.0 cm (6.3 inch) FHD+ Display | 4000 mAh Li-polymer Battery\r\n(12MP + 2MP ) Back Camera | 13MP Front Camera\r\n4000 mAh Li-polymer Battery | Corning Gorilla Glass | 5 Face Unlock | IR Remote Control', 15000, 13000, '1668863829.png', 18, 0, 1, '2022-11-17 14:26:41'),
(24, 8, 'Denim jacket', 'Denim jacket', 'Denim jacket', 'Denim jacket', 455, 555, '1670333174.jpg', 20, 0, 1, '2022-12-06 13:26:14'),
(25, 2, 'Redmi note 8', 'Redmi note 8', 'Redmi note 8', 'Brand	Redmi\r\nOS	Android\r\nMemory Storage Capacity	128 GB\r\nColour	Aqua Green\r\n', 17900, 15999, '1670418267.jpg', 15, 0, 1, '2022-12-07 13:03:48'),
(26, 13, 'Centrino Mens Sneaker', 'Centrino Mens Sneaker', 'Centrino Mens Sneaker', 'Sole: Thermoplastic Elastomers\r\nClosure: Lace-Up\r\nFit Type: Regular\r\nShoe Width: Medium\r\nOuter Material: Synthetic', 899, 700, '1670419660.jpg', 20, 0, 0, '2022-12-07 13:27:40'),
(27, 2, 'Apple iPhone 14', 'Apple iPhone 14', 'Apple iPhone 14 Midnight', 'About this item\r\n15.40 cm (6.1-inch) Super Retina XDR display\r\nAdvanced camera system for better photos in any light\r\nCinematic mode now in 4K Dolby Vision up to 30 fps', 100000, 89990, '1670510670.jpg', 5, 0, 1, '2022-12-08 14:44:30'),
(28, 2, 'OnePlus 10R 5G', 'OnePlus 10R 5G', 'OnePlus 10R 5G SuperVOOC', 'About this item\r\nCamera: 50MP Main Camera with Sony IMX766 and 2MP Macro Camera with Dual LED Flash; 16MP Front (Selfie) Camera with Sony IMX471', 45000, 39990, '1670511760.jpg', 5, 0, 1, '2022-12-08 15:02:40');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `role_as` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `password`, `role_as`, `created_at`) VALUES
(1, 'Archit Patel', 'architpatel876@gmail.com', 'Archit@123', 1, '2022-11-12 06:53:04'),
(4, 'Jasmine', 'jasmine123@gmail.com', 'jas123', 0, '2022-11-13 12:39:57'),
(7, 'Prem', 'premkushawah500@gmail.com', '1234', 0, '2022-12-14 03:53:51');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `user_id`, `prod_id`, `created_at`) VALUES
(2, 4, 26, '2022-12-16 13:28:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
