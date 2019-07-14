-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2018 at 11:36 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `computerlaravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(33, 'ASUS', 'Asus brands is now popular.', 1, '2018-07-11 07:34:56', '2018-07-11 07:34:56');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(12, 'Laptop', 'all brands laptop is found here', 1, '2018-07-11 07:32:07', '2018-07-11 07:34:02');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `password`, `phone_number`, `address`, `created_at`, `updated_at`) VALUES
(7, 'ARS', 'Rouf', 'rouf@gmail.com', '$2y$10$j33qQ13hplph7GVskPWB/.cZbvzE1nGqs3VkuGVVbLWATSKblE9KS', '01789652301', 'ddxc', '2018-07-13 03:03:06', '2018-07-13 03:03:06'),
(8, 'Harur', 'Heron', 'heron@gmail.com', '$2y$10$rCrctsE132ONCkMlwEkcOeW4xOUxzi23vyaXRajT7YBhMgzC2DApS', '01785412011', 'toma', '2018-07-13 03:17:23', '2018-07-13 03:17:23'),
(9, 'nahid', 'hasan', 'nahid@gmail.com', '$2y$10$7tJT.AIoxjHX85SjjSZgkOueLLWxwbz6LZ8Exw3FD69ibzq56gsda', '01478542142', 'cvd', '2018-07-13 03:27:09', '2018-07-13 03:27:09');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_10_11_183823_create_categories_table', 2),
(4, '2017_10_16_111137_create_brands_table', 3),
(5, '2017_10_16_155703_create_products_table', 4),
(6, '2017_10_25_174547_create_customers_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `product_name`, `product_code`, `product_price`, `product_quantity`, `short_description`, `long_description`, `product_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(9, 1, 5, 'J-7', '67765', 15000, 2, 'Selfie cemera 8 mp', '<p>Dual sim suffort&nbsp;</p>', 'product-image/20668269_1322617371191279_929206406_n - Copy - Copy.jpg', 1, '2017-10-23 03:04:01', '2017-10-23 03:04:01'),
(10, 1, 11, 'O-45', '7484', 4000, 7, 'nice', '<p>so nice</p>', 'product-image/maxresdefault.jpg', 1, '2017-10-23 03:21:07', '2017-10-23 03:21:07'),
(11, 1, 19, 'Sony 6', '74748', 5555, 4, 'well', '<p>nice</p>', 'product-image/lava-a89.jpg', 1, '2017-10-23 03:42:20', '2017-10-23 03:43:37'),
(12, 1, 18, 'Lg5', '4455', 7000, 3, 'nice', '<p>well</p>', 'product-image/images.jpg', 1, '2017-10-23 03:44:33', '2017-10-23 03:44:33'),
(13, 1, 17, 'H7', '7845', 9000, 7, 'good', '<p>nice</p>', 'product-image/iphone-7SILVER.png', 1, '2017-10-23 03:45:17', '2017-10-23 03:45:17'),
(14, 1, 16, 'mi9', '7854', 7, 12000, 'show up', '<p>good</p>', 'product-image/G6-image350.jpg', 1, '2017-10-23 03:45:55', '2017-10-23 03:45:55'),
(15, 1, 14, 's4', '4785', 8900, 8, 'nice', '<p>nice</p>', 'product-image/1.jpg', 1, '2017-10-23 03:46:29', '2017-10-23 03:46:29'),
(16, 6, 18, 'lg freez 3', '20010', 54000, 1, 'well', '<p>cool</p>', 'product-image/736x764_EA103.jpg', 1, '2017-10-23 03:47:11', '2017-10-23 03:47:11'),
(17, 6, 2, 'w-45', '21354', 45000, 2, 'so cool', '<p>nice one</p>', 'product-image/0018992_walton-refrigerator-wfa-2b0-0201-cdbx-xx_560.jpeg', 1, '2017-10-23 03:47:48', '2017-10-23 03:47:48'),
(18, 6, 19, 's45', '478954', 80000, 2, 'nice', '<p>so cool</p>', 'product-image/images (3).jpg', 1, '2017-10-23 03:48:48', '2017-10-23 03:48:48'),
(19, 6, 5, 's f-45', '235470', 54000, 3, 'nice', '<p>good</p>', 'product-image/images (1).jpg', 1, '2017-10-23 03:49:43', '2017-10-23 03:49:43'),
(20, 11, 15, 'tv6', '1200', 45000, 2, 'nice show', '<p>how nice</p>', 'product-image/2134_menu_img.png', 1, '2017-10-23 03:51:25', '2017-10-23 03:51:25'),
(21, 11, 19, 'tv s-67', '47859', 54000, 5, 'nice', '<p>best</p>', 'product-image/download (2).jpg', 1, '2017-10-23 03:52:00', '2017-10-23 03:52:00'),
(22, 7, 6, 'dell y8', '8666', 45000, 4, 'nice', '<p>core i-7</p>', 'product-image/414LbKrdtFL.jpg', 1, '2017-10-23 03:53:32', '2017-10-23 03:53:32'),
(23, 7, 19, 'laptoe-6', '4788', 45100, 4, 'nice one', '<p>well</p>', 'product-image/images (6).jpg', 1, '2017-10-23 03:54:17', '2017-10-23 03:54:17'),
(24, 7, 1, 'hp-45', '4785', 65000, 2, 'core i-5', '<p>nice</p>', 'product-image/RE1nLnI.jpg', 1, '2017-10-23 03:55:07', '2017-10-23 03:55:07'),
(25, 11, 2, 'tv-45', '478', 45000, 8, 'well', '<p>well</p>', 'product-image/images (5).jpg', 1, '2017-10-23 03:57:42', '2017-10-23 03:57:42'),
(26, 8, 22, 'ri-67', '7884', 1200, 2, 'well', '<p>nice dress</p>', 'product-image/510mRFCQXyL._AC_UL260_SR200,260_.jpg', 1, '2017-10-23 03:58:42', '2017-10-23 03:58:42'),
(29, 8, 25, 'panjabi', '4544', 4500, 5, 'nice', '<p>nice</p>', 'product-image/download (5).jpg', 1, '2017-10-23 04:01:24', '2017-10-23 04:01:24'),
(31, 8, 26, 'panjabi', '7488', 5400, 2, 'nice', '<p>nice</p>', 'product-image/images (10).jpg', 1, '2017-10-23 04:11:12', '2017-10-23 04:12:42'),
(32, 12, 33, 'ASUS 6004', 'ASUS-6004', 54000, 10, 'good', '<p>good</p>', 'product-images/Windows_Devices_Overview_1920_Laptops.jpg', 1, '2018-07-13 02:30:07', '2018-07-13 02:30:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Rifat', 'abm@gmail.com', '$2y$10$7ZEA71jQdloXEoeFj/ubxufUic1kNG3G1375/4eXCUhfS2idPJ2Eu', 'RveGD9e0CdefAgz5u0I6BNM8YMiJtM091maOhsYEMhecZLH2r0WeJWpPqhMv', '2017-10-05 13:01:23', '2017-10-05 13:01:23'),
(2, 'abm', 'alam@gmail.com', '$2y$10$z8W/O1Lc0/F93SoKMtgXQ.3yrz5QKNaQylTso0j4yVrzQMHrP7tnC', NULL, '2017-10-11 07:14:00', '2017-10-11 07:14:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
