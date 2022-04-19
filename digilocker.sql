-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 19, 2022 at 11:03 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digilocker`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2021_10_30_161749_create_users_table', 1),
(2, '2021_10_31_104947_create_products_table', 1),
(3, '2021_10_31_180212_create_cart_table', 1),
(4, '2021_11_01_113306_create_orders_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `user_id`, `address`, `status`, `payment_method`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, 9, 3, 'Howrah WB 7686087195', 'Will contact soon', 'D2D', 'pending', NULL, NULL),
(2, 1, 4, 'Pune, 9753412871', 'Will contact soon', 'D2D', 'pending', NULL, NULL),
(3, 7, 4, 'Pune, 9753412871', 'Will contact soon', 'D2D', 'pending', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `gallery`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Travelling Cost(Medical Purpose)', '100000', 'State Government', 'https://thumbs.dreamstime.com/b/travel-airplane-e-ticket-27921262.jpg', 'Patient with one Family Member', NULL, NULL),
(2, 'Gas or Fuel Offer(Oil and Gas Expenditure)', '1000', 'Central Government', 'https://cdn.pixabay.com/photo/2021/01/17/13/09/gas-pump-5925098_1280.jpg', 'Citizen Offer', NULL, NULL),
(3, 'DigitalId', '10000', 'Private', 'https://thumbs.dreamstime.com/z/hand-using-creative-digital-id-finger-print-interface-blue-background-technology-innovation-concept-double-exposure-221208549.jpg', 'DigitalDocumentation', NULL, NULL),
(4, 'DigiTalInfo', '5000', 'Central Government', 'https://securecdn.pymnts.com/wp-content/uploads/2019/07/digital-id-jumio-1000x600.jpg', 'Goverment Certified Digital Card', NULL, NULL),
(5, 'Tax Mergine(Home Insurance)', '10000', 'State Government', 'https://static1.bigstockphoto.com/8/3/3/large2/338843113.jpg', 'Resdient Benefits', NULL, NULL),
(6, 'Defence Scheme', '100000', 'Central Government', 'https://cdn.imgbin.com/21/25/21/imgbin-indian-army-national-defence-academy-indian-military-academy-siachen-glacier-army-ZK1A8ZkFxPqAvKTR8f4AhjWft.jpg', 'Indian Army-Navy-Pilot-Police Benefits', NULL, NULL),
(7, 'Banking & Insurance', '100000', 'State Government', 'https://image.shutterstock.com/image-photo/businessman-holding-word-banking-hand-600w-1150180799.jpg', 'Loan and FD', NULL, NULL),
(8, 'Health Insurance', '50000', 'Central Government', 'https://thumbs.dreamstime.com/z/good-health-good-life-female-hand-chalk-writing-text-blue-background-97044786.jpg', 'Emergency Purpose', NULL, NULL),
(9, 'Education', '100000', 'Central Government', 'https://thumbs.dreamstime.com/z/kid-creativity-education-concept-child-learning-art-mathematics-formula-school-boy-ideas-black-chalk-board-57852601.jpg', 'Educational Benefits', NULL, NULL),
(10, 'Electricity and Internet Usage', '1000', 'Private', 'https://thumbs.dreamstime.com/z/past-due-seal-stamped-electricity-bill-month-expenses-payment-services-past-due-seal-stamped-electricity-bill-month-146080940.jpg', 'DigitalId Benefits', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(3, 'Sayan Mukherjee', 'shiva.sayanmukherjee@gmail.com', '$2y$10$.7fKSDMlYut3Luz27nko7.RCNSdpUwcIKiSVHdv2krroBNA0pDzrG', '2022-04-19 04:53:05', '2022-04-19 04:53:05'),
(4, 'Indresh', 'indresh.digi@gmail.com', '$2y$10$i7EEk8LzdbivUEqSMTYg..0o2vy5b680XqfCrezm/JEWbywD3eS06', '2022-04-19 05:00:03', '2022-04-19 05:00:03');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
