-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 27, 2022 at 02:27 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mariam Fahim', 'mariam.fahim.2003@gmail.com', '2022-08-01 11:04:36', '$2y$10$XvLbWrAhAtqiutstY8kFruB64by2/aHdtsXDFUPzD5fcRSdOS8N9S', 'J4GopXS4TtnKy0dJUqNieGpkC8Kq6YknUxtYJWUJmV5J9b4bo6eBJOQ7v6lr', '2022-08-01 11:04:36', '2022-08-01 11:04:36');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

DROP TABLE IF EXISTS `carts`;
CREATE TABLE IF NOT EXISTS `carts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `town` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `name`, `email`, `phone`, `address`, `country`, `town`, `created_at`, `updated_at`) VALUES
(1, 11, 'FAHIM Mariam', 'mariam.fahim.2003@gmail.com', 635210514, 'N 782 LOT CHARAF', 'Maroc', 'Marrakech', '2022-08-31 21:51:17', '2022-08-31 21:51:17'),
(2, 11, 'FAHIM Mariam', 'mariam.fahim.2003@gmail.com', 635210514, 'N 782 LOT CHARAF', 'Maroc', 'Marrakech', '2022-08-31 23:25:04', '2022-08-31 23:25:04'),
(3, 11, 'FAHIM Mariam', 'mariam.fahim.2003@gmail.com', 635210514, 'N 782 LOT CHARAF', 'Maroc', 'Marrakech', '2022-08-31 23:44:10', '2022-08-31 23:44:10'),
(4, 11, 'FAHIM Mariam', 'mariam.fahim.2003@gmail.com', 635210514, 'N 782 LOT CHARAF', 'Maroc', 'Marrakech', '2022-09-01 00:42:32', '2022-09-01 00:42:32'),
(5, 11, 'FAHIM Mariam', 'mariam.fahim.2003@gmail.com', 635210514, 'N 782 LOT CHARAF', 'Maroc', 'Marrakech', '2022-09-01 00:45:21', '2022-09-01 00:45:21'),
(6, 11, 'FAHIM Mariam', 'mariam.fahim.2003@gmail.com', 635210514, 'N 782 LOT CHARAF', 'Maroc', 'Marrakech', '2022-09-01 00:46:46', '2022-09-01 00:46:46'),
(7, 11, 'FAHIM Mariam', 'mariam.fahim.2003@gmail.com', 635210514, 'N 782 LOT CHARAF', 'Maroc', 'Marrakech', '2022-09-01 00:59:15', '2022-09-01 00:59:15'),
(8, 11, 'FAHIM Mariam', 'mariam.fahim.2003@gmail.com', 635210514, 'N 782 LOT CHARAF', 'Maroc', 'Marrakech', '2022-09-01 01:01:06', '2022-09-01 01:01:06'),
(9, 11, 'FAHIM Mariam', 'mariam.fahim.2003@gmail.com', 635210514, 'N 782 LOT CHARAF', 'Maroc', 'Marrakech', '2022-09-01 01:07:10', '2022-09-01 01:07:10'),
(10, 11, 'FAHIM Mariam', 'mariam.fahim.2003@gmail.com', 635210514, 'N 782 LOT CHARAF', 'Maroc', 'Marrakech', '2022-09-01 01:08:14', '2022-09-01 01:08:14'),
(11, 11, 'FAHIM Mariam', 'mariam.fahim.2003@gmail.com', 635210514, 'N 782 LOT CHARAF', 'Maroc', 'Marrakech', '2022-09-01 14:26:54', '2022-09-01 14:26:54'),
(12, 11, 'FAHIM Mariam', 'mariam.fahim.2003@gmail.com', 635210514, 'N 782 LOT CHARAF', 'Maroc', 'Marrakech', '2022-09-01 14:28:46', '2022-09-01 14:28:46'),
(13, 11, 'FAHIM Mariam', 'mariam.fahim.2003@gmail.com', 635210514, 'N 782 LOT CHARAF', 'Maroc', 'Marrakech', '2022-09-01 14:30:17', '2022-09-01 14:30:17'),
(14, 11, 'FAHIM Mariam', 'mariam.fahim.2003@gmail.com', 635210514, 'N 782 LOT CHARAF', 'Maroc', 'Marrakech', '2022-09-01 21:47:26', '2022-09-01 21:47:26'),
(15, 11, 'FAHIM Mariam', 'mariam.fahim.2003@gmail.com', 635210514, 'N 782 LOT CHARAF', 'Maroc', 'Marrakech', '2022-09-04 15:00:19', '2022-09-04 15:00:19'),
(16, 11, 'FAHIM Mariam', 'mariam.fahim.2003@gmail.com', 635210514, 'N 782 LOT CHARAF', 'Maroc', 'Marrakech', '2022-09-04 18:00:24', '2022-09-04 18:00:24'),
(17, 11, 'FAHIM Mariam', 'mariam.fahim.2003@gmail.com', 635210514, 'N 782 LOT CHARAF', 'Maroc', 'Marrakech', '2022-09-18 17:27:08', '2022-09-18 17:27:08'),
(18, 11, 'FAHIM Mariam', 'mariam.fahim.2003@gmail.com', 635210514, 'N 782 LOT CHARAF', 'Maroc', 'Marrakech', '2022-09-18 17:44:14', '2022-09-18 17:44:14'),
(19, 11, 'FAHIM Mariam', 'mariam.fahim.2003@gmail.com', 635210514, 'N 782 LOT CHARAF', 'Maroc', 'Marrakech', '2022-09-21 09:54:32', '2022-09-21 09:54:32'),
(20, 11, 'FAHIM Mariam', 'mariam.fahim.2003@gmail.com', 635210514, 'N 782 LOT CHARAF', 'Maroc', 'Marrakech', '2022-09-23 16:30:40', '2022-09-23 16:30:40'),
(21, 11, 'FAHIM Mariam', 'mariam.fahim.2003@gmail.com', 635210514, 'N 782 LOT CHARAF', 'Maroc', 'Marrakech', '2022-09-30 16:13:11', '2022-09-30 16:13:11'),
(22, 11, 'FAHIM Mariam', 'mariam.fahim.2003@gmail.com', 635210514, 'N 782 LOT CHARAF', 'Maroc', 'Marrakech', '2022-10-06 11:45:20', '2022-10-06 11:45:20'),
(23, 11, 'FAHIM Mariam', 'mariam.fahim.2003@gmail.com', 635210514, 'N 782 LOT CHARAF', 'Maroc', 'Marrakech', '2022-10-06 11:45:55', '2022-10-06 11:45:55');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Electronics', 'quia-earum-et-suscipit-est-et-dignissimos-non-molestiae-deleniti-inventore-et-minima-autem-hic-eligendi-ut-quo-odit-ipsam', '2022-08-01 10:58:24', '2022-08-01 10:58:24'),
(2, 'Clothes', 'omnis-quibusdam-et-vero-nisi-officia-aspernatur-quas-mollitia-et-ipsa-minima-at-similique-saepe-soluta-sapiente-dolorum-odit-ullam-sit-vero-perferendis-nesciunt-nostrum-nam-porro-ratione', '2022-08-01 10:58:24', '2022-08-01 10:58:24'),
(3, 'Music', 'quibusdam-non-eveniet-non-impedit-voluptatum-et-et-eveniet-atque-fugiat-voluptatem-pariatur-consequuntur-vel-molestiae-rerum-iure-magnam-omnis-repellendus-non', '2022-08-01 10:58:24', '2022-08-01 10:58:24'),
(4, 'Souvenirs', 'debitis-et-sit-et-distinctio-vero-placeat-qui-quisquam-veritatis-vero-aut-asperiores-itaque-sint-temporibus-doloribus-atque-laudantium-velit', '2022-08-01 10:58:24', '2022-08-01 10:58:24'),
(5, 'Travel', 'corrupti-aliquid-laboriosam-excepturi-laudantium-repellat-consequuntur-qui-impedit-rerum-qui-voluptatem-officia-perferendis-minus-sunt-dolorum-ea-neque-aliquid-provident', '2022-08-01 10:58:24', '2022-08-01 10:58:24'),
(6, 'Video Games', 'incidunt-delectus-dolor-ipsum-nisi-aliquam-consequatur-doloremque-est-suscipit-in-consectetur-et-adipisci-eum-iure-voluptate-iure-nam-est', '2022-08-01 10:58:24', '2022-08-01 10:58:24'),
(7, 'Home Decor', 'rerum-et-enim-quia-ea-quia-praesentium-natus-veritatis-quidem-dolorem-praesentium-aut-omnis-praesentium-soluta-corporis-eum-deleniti-dolor-est-aliquam', '2022-08-01 10:58:24', '2022-08-01 10:58:24'),
(8, 'Brands', 'molestiae-provident-dolorem-sit-laudantium-enim-labore-et-ut-dignissimos-dolores-deleniti-qui-facilis-ullam-nam-molestiae-velit-ipsa-inventore-accusantium-fugit', '2022-08-01 10:58:24', '2022-08-01 10:58:24'),
(9, 'Art', 'repellat-quia-tenetur-vel-qui-et-quia-distinctio-eum-aut-quia-quis-optio-dolorem-sed-ut-ducimus-ipsam-adipisci-placeat-eveniet-quia-mollitia-est', '2022-08-01 10:58:24', '2022-08-01 10:58:24'),
(10, 'Beauty', 'voluptatum-dolor-commodi-voluptate-cum-molestiae-corrupti-sapiente-nesciunt-dignissimos-animi-quasi-ut-quia-ut-est-dolores', '2022-08-01 10:58:24', '2022-08-01 10:58:24');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `first_name`, `last_name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(5, 'FAHIM', 'Mariam', 'mariam.fahim.2003@gmail.com', '++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++', '2022-08-27 12:35:35', '2022-08-27 12:35:35'),
(3, 'mhde', 'li hwak', 'elmahdidiab1337@gmail.com', 'laynn3el tbunn muk :)))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))))', '2022-08-19 20:50:47', '2022-08-19 20:50:47'),
(4, 'FAHIM', 'Mariam', 'mariam.fahim.2003@gmail.com', '+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++', '2022-08-27 12:34:41', '2022-08-27 12:34:41'),
(6, 'FAHIM', 'Mariam', 'mariam.fahim.2003@gmail.com', '444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444', '2022-08-27 12:40:35', '2022-08-27 12:40:35'),
(7, 'FAHIM', 'Mariam', 'mariam.fahim.2003@gmail.com', '44444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444', '2022-08-27 12:41:44', '2022-08-27 12:41:44'),
(8, 'FAHIM', 'Mariam', 'mariam.fahim.2003@gmail.com', '44444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444', '2022-08-27 12:44:51', '2022-08-27 12:44:51'),
(9, 'FAHIM', 'Mariam', 'mariam.fahim.2003@gmail.com', 'zaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2022-08-27 12:48:09', '2022-08-27 12:48:09'),
(10, 'FAHIM', 'Mariam', 'mariam.fahim.2003@gmail.com', '777777777777777777777777777777777777777777777777777777777777777', '2022-08-27 12:54:16', '2022-08-27 12:54:16'),
(11, 'FAHIM', 'Mariam', 'mariam.fahim.2003@gmail.com', 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', '2022-08-27 12:56:19', '2022-08-27 12:56:19'),
(12, 'FAHIM', 'Mariam', 'mariam.fahim.2003@gmail.com', 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', '2022-08-27 13:01:48', '2022-08-27 13:01:48'),
(13, 'FAHIM', 'Mariam', 'mariam.fahim.2003@gmail.com', 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', '2022-08-27 13:02:32', '2022-08-27 13:02:32'),
(14, 'FAHIM', 'Mariam', 'mariam.fahim.2003@gmail.com', 'jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', '2022-08-27 13:03:26', '2022-08-27 13:03:26'),
(15, 'FAHIM', 'Mariam', 'mariam.fahim.2003@gmail.com', '777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777', '2022-08-27 13:05:14', '2022-08-27 13:05:14'),
(16, 'FAHIM', 'Mariam', 'mariam.fahim.2003@gmail.com', 'ppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppppp', '2022-08-27 13:10:03', '2022-08-27 13:10:03'),
(17, 'FAHIM', 'Mariam', 'mariam.fahim.2003@gmail.com', 'oooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo', '2022-08-27 13:11:16', '2022-08-27 13:11:16'),
(18, 'FAHIM', 'Mariam', 'mariam.fahim.2003@gmail.com', '77777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777', '2022-08-27 13:12:26', '2022-08-27 13:12:26'),
(19, 'FAHIM', 'Mariam', 'mariam.fahim.2003@gmail.com', '7777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777777', '2022-08-27 16:24:45', '2022-08-27 16:24:45'),
(20, 'FAHIM', 'Mariam', 'mariam.fahim.2003@gmail.com', '44444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444444', '2022-08-27 23:34:17', '2022-08-27 23:34:17'),
(21, 'FAHIM', 'Mariam', 'mariam.fahim.2003@gmail.com', 'jhgfdfghjikuytgfdcvbjkytdkydcvjkyhtdcvkiuytfvkiuhyg', '2022-09-30 16:09:22', '2022-09-30 16:09:22'),
(22, 'FAHIM', 'Mariam', 'mariam.fahim.2003@gmail.com', 'hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh', '2022-10-06 11:28:24', '2022-10-06 11:28:24');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_27_163912_create_categories_table', 1),
(6, '2022_07_27_164010_create_products_table', 1),
(7, '2022_07_27_164027_create_orders_table', 1),
(8, '2022_07_27_165429_create_admins_table', 1),
(9, '2022_08_19_193714_create_contacts_table', 2),
(10, '2022_08_28_210118_create_payments_table', 3),
(11, '2022_08_31_193237_create_carts_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `qty` int(11) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `paid` tinyint(1) NOT NULL DEFAULT '0',
  `delivered` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `product_name`, `qty`, `price`, `total`, `paid`, `delivered`, `created_at`, `updated_at`) VALUES
(16, 11, 'Product2', 1, '647.00', '647.00', 1, 0, '2022-09-01 00:42:56', '2022-09-01 00:42:56'),
(17, 11, 'Product2', 1, '647.00', '647.00', 1, 0, '2022-09-01 00:45:38', '2022-09-01 00:45:38'),
(18, 11, 'Product2', 1, '647.00', '647.00', 1, 0, '2022-09-01 00:47:06', '2022-09-01 00:47:06'),
(15, 11, 'Product2', 1, '647.00', '647.00', 1, 0, '2022-09-01 00:41:45', '2022-09-01 00:41:45'),
(13, 11, 'Product5', 1, '405.00', '405.00', 1, 0, '2022-08-30 20:59:38', '2022-08-30 20:59:38'),
(14, 11, 'Product1', 1, '581.00', '581.00', 1, 0, '2022-08-30 21:56:51', '2022-08-30 21:56:51'),
(11, 11, 'Product2', 1, '647.00', '647.00', 1, 0, '2022-08-30 20:55:21', '2022-08-30 20:55:21'),
(12, 11, 'Product1', 1, '581.00', '581.00', 1, 0, '2022-08-30 20:59:38', '2022-08-30 20:59:38'),
(5, 10, 'Dolores alias ipsam rerum. Maxime qui veniam ipsa vel ex doloremque voluptatibus. Repellat minus ea tenetur ipsum. Ducimus consequatur reiciendis facilis natus optio consequatur nihil nostrum.', 1, '415.00', '5014.00', 0, 1, '2022-08-01 10:58:24', '2022-08-03 08:52:29'),
(6, 5, 'Soluta vero libero modi. Vero aperiam non eveniet totam enim. Odio iusto omnis aliquid veniam dicta omnis. Ducimus quaerat in exercitationem laudantium.', 7, '154.00', '1294.00', 0, 1, '2022-08-01 10:58:24', '2022-08-08 10:31:54'),
(7, 1, 'Magni quaerat modi et est consequatur cumque. Impedit consectetur quia neque aut repellendus. Veniam vitae iste iure quis fugiat et sit.', 6, '273.00', '5915.00', 0, 1, '2022-08-01 10:58:24', '2022-08-08 11:11:46'),
(8, 3, 'Autem perferendis quo nobis quasi tenetur suscipit. Voluptas non dolorem et ad esse assumenda. Dolor blanditiis molestiae unde recusandae voluptatum. Consequatur suscipit doloremque laudantium.', 3, '173.00', '2359.00', 0, 1, '2022-08-01 10:58:24', '2022-08-08 13:02:56'),
(9, 5, 'Ducimus voluptatibus est animi soluta. Sit esse enim ut temporibus ea veritatis maxime.', 8, '529.00', '1631.00', 0, 1, '2022-08-01 10:58:24', '2022-08-19 20:40:39'),
(10, 5, 'Et incidunt eligendi accusantium laborum pariatur alias. Nobis mollitia harum dolores dolor. Ut dolor aspernatur dolor voluptas a laboriosam et.', 8, '528.00', '2421.00', 0, 1, '2022-08-01 10:58:24', '2022-08-19 20:40:49'),
(19, 11, 'Product2', 1, '647.00', '647.00', 1, 0, '2022-09-01 01:00:11', '2022-09-01 01:00:11'),
(20, 11, 'Product2', 1, '647.00', '647.00', 1, 0, '2022-09-01 01:01:24', '2022-09-01 01:01:24'),
(21, 11, 'Product2', 1, '647.00', '647.00', 1, 0, '2022-09-01 01:07:23', '2022-09-01 01:07:23'),
(22, 11, 'Product2', 1, '647.00', '647.00', 1, 0, '2022-09-01 01:08:30', '2022-09-01 01:08:30'),
(23, 11, 'Product7', 1, '363.00', '363.00', 1, 0, '2022-09-01 14:27:50', '2022-09-01 14:27:50'),
(24, 11, 'Product2', 1, '647.00', '647.00', 1, 0, '2022-09-01 14:29:00', '2022-09-01 14:29:00'),
(27, 11, 'Product7', 1, '363.00', '363.00', 1, 1, '2022-09-04 18:03:18', '2022-09-23 16:32:48'),
(28, 11, 'product2', 1, '395.00', '395.00', 1, 1, '2022-09-30 16:17:49', '2022-09-30 16:31:27'),
(29, 11, 'product3', 1, '101.00', '101.00', 1, 1, '2022-10-06 11:46:54', '2022-10-06 11:48:31');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('mariam.fahim.01@gmail.com', '$2y$10$muUlXIfDHRL0tLzKWN7Ntuqf6XSvdCmaDaUpYTBhhZWewPyldLgm.', '2022-08-10 14:54:51'),
('mariam.fahim.2003@gmail.com', '$2y$10$Sr7mJ5vvx9yrTrp6/KxoousWK8NJwPWmU5HztdJaN8m/8sXPu5pPq', '2022-09-04 01:31:56');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL DEFAULT '0.00',
  `old_price` decimal(8,2) NOT NULL DEFAULT '0.00',
  `inStock` int(11) NOT NULL DEFAULT '0',
  `qty` int(11) NOT NULL DEFAULT '0',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_category_id_foreign` (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `slug`, `description`, `price`, `old_price`, `inStock`, `qty`, `image`, `category_id`, `created_at`, `updated_at`) VALUES
(37, 'product100', 'product100', 'Facere accusantium sed reprehenderit ipsam esse quis. Dolorum odit nihil placeat repellat.', '896.00', '640.00', 9, 0, 'https://picsum.photos/640/640', 5, '2022-09-07 23:17:46', '2022-09-18 17:37:28'),
(35, 'product2', 'cum-qui-suscipit-repellendus-voluptatum-et-necessitatibus-ipsam-quos-ducimus-rerum-distinctio-molestiae-totam-est-praesentium-dolor-nemo', 'Beatae asperiores cupiditate debitis sint quam expedita. Id explicabo laboriosam aut magni ex sint. Natus amet et omnis veniam. Voluptatem minima omnis iusto et sit et.', '395.00', '780.00', 1, 0, 'https://picsum.photos/640/640', 9, '2022-09-07 23:17:46', '2022-09-07 23:17:46'),
(36, 'product3', 'similique-blanditiis-quia-voluptatum-itaque-asperiores-minus-non-quia-quia-aliquam-sequi-est-aut', 'Sapiente voluptatem molestiae quia ducimus dolorum sed. Qui possimus facilis ut distinctio aut quia sed. Voluptas adipisci animi optio numquam fugiat qui. Aliquid minima sit sed perferendis sequi ipsam ut vitae.', '101.00', '795.00', 6, 0, 'https://picsum.photos/640/640', 8, '2022-09-07 23:17:46', '2022-09-07 23:17:46'),
(34, 'product4', 'aut-nemo-aliquam-quis-qui-et-voluptatibus-aut-placeat-quis-sed', 'Repellat non voluptas voluptate culpa. Iusto ducimus accusamus et a id. At hic rerum quae autem placeat. Labore voluptates fuga sed voluptatem id et.', '764.00', '359.00', 7, 0, 'https://picsum.photos/640/640', 10, '2022-09-07 23:17:46', '2022-09-07 23:17:46'),
(23, 'product5', 'product99', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '298.00', '786.00', 5, 0, 'https://picsum.photos/640/640', 3, '2022-08-16 15:58:07', '2022-09-04 01:04:42'),
(33, 'product6', 'velit-impedit-iste-sunt-nulla-iusto-soluta-eum-quo-rerum-ratione-consequuntur-enim-laboriosam-maiores-est-sit-consequatur-repellendus-veritatis-recusandae-nesciunt-facere-porro-et-id-qui', 'Dolor et id quia sapiente sit commodi quis. Eaque vitae amet possimus sed laudantium dolorem. Accusantium nesciunt maxime consectetur et qui nam.', '871.00', '702.00', 3, 0, 'https://picsum.photos/640/640', 3, '2022-09-07 23:17:46', '2022-09-07 23:17:46'),
(24, 'Product7', 'numquam-animi-ut-dicta-blanditiis-fugit-dolore-quas-quia-numquam-rerum-neque-ut-et-quidem-ipsa-sit-officia-ut-et-ad-exercitationem', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '363.00', '772.00', 9, 0, 'https://picsum.photos/640/640', 5, '2022-08-16 15:58:07', '2022-08-16 15:58:07'),
(21, 'Product8', 'facilis-voluptatum-itaque-consequatur-labore-autem-nihil-sint-qui-nam-tempore-quis-recusandae-nulla-non-ut-voluptas-eos-qui-qui-aliquid-cupiditate-modi-illum', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '900.00', '339.00', 9, 0, 'https://picsum.photos/640/640', 10, '2022-08-16 15:58:07', '2022-08-16 15:58:07'),
(39, 'product9', 'tenetur-ut-quae-voluptatibus-enim-mollitia-qui-asperiores-tenetur-reprehenderit-id-atque-dolorum-non-tenetur-pariatur', 'Provident in voluptatem est. Autem ut voluptas quam quo non. Suscipit atque ab ut eos quia quia.', '260.00', '487.00', 8, 0, 'https://picsum.photos/640/640', 7, '2022-09-07 23:17:46', '2022-09-07 23:17:46'),
(20, 'Product10', 'tenetur-totam-veniam-ratione-amet-sequi-sunt-sapiente-ut-est-aut-fugit-qui-magnam-sapiente-exercitationem-a-sit', 'Et placeat tenetur delectus voluptatem amet consequatur et officiis. Non ut repellendus aut consequatur explicabo omnis animi. Ut qui nobis enim ut sunt. Facere dolores aliquid rerum maxime.', '656.00', '234.00', 7, 0, 'https://picsum.photos/640/640', 8, '2022-08-16 15:58:07', '2022-08-16 15:58:07'),
(9, 'Product11', 'blanditiis-culpa-ex-tenetur-est-ab-ut-iste-asperiores-ut-dolorem-nobis-non-ut-vel', 'Vitae dolores quas assumenda et est. Cum et voluptatem minima dolor voluptates vel. Iste molestiae maiores vero eum delectus. Autem qui laudantium et sint quaerat consequuntur aliquid neque.', '766.00', '641.00', 9, 0, 'https://picsum.photos/640/640', 6, '2022-08-01 10:58:24', '2022-08-01 10:58:24'),
(19, 'Product12', 'distinctio-dolores-saepe-itaque-eligendi-molestiae-vel-deserunt-magnam-ex-reiciendis-qui-neque-est-odit-quos-voluptatem-cumque-nihil-ex-nulla-voluptatum-fugit', 'Praesentium nulla est voluptas quisquam saepe vitae sapiente dolorem. Exercitationem in voluptates at ut.', '554.00', '306.00', 1, 0, 'https://picsum.photos/640/640', 6, '2022-08-16 15:58:07', '2022-08-16 15:58:07'),
(38, 'product13', 'libero-iste-molestias-maiores-et-dolorem-officia-culpa-ipsum-voluptas-omnis-ullam-et-quod-eos-dolorum-est-et-sunt-et-qui-voluptatem-fugiat-quis-est-ea-aliquam-officia-porro-perferendis', 'Laboriosam ipsam maiores doloremque vel autem vero est quo. Officiis velit vel quis cupiditate porro nobis quam alias. Et aliquam est ullam dolor magnam ratione. Est ut enim est sed dolor. Mollitia et dolore iusto quibusdam deserunt.', '654.00', '757.00', 4, 0, 'https://picsum.photos/640/640', 7, '2022-09-07 23:17:46', '2022-09-07 23:17:46'),
(28, 'Product14', 'exercitationem-dolores-totam-velit-veniam-consequatur-et-necessitatibus-dicta-quasi-omnis-porro-natus-magni-est-praesentium-asperiores', 'Hic dolor quis rem deserunt molestiae. Aut quo est incidunt aut voluptates impedit. Esse eligendi debitis qui vel. At quis sit quas sit nisi.', '780.00', '482.00', 5, 0, 'https://picsum.photos/640/640', 5, '2022-08-16 15:58:07', '2022-08-16 15:58:07'),
(40, 'product15', 'omnis-ut-officiis-quae-iste-vel-voluptas-et-et-vitae-minus-unde-voluptates-cumque-libero-perspiciatis-necessitatibus-est-minus-ratione-optio-dolore-et-porro', 'Eos deserunt temporibus ut expedita. Non in repellendus aut delectus at. Non ullam eos ut consectetur quia exercitationem quia.', '557.00', '520.00', 5, 0, 'https://picsum.photos/640/640', 8, '2022-09-07 23:17:46', '2022-09-07 23:17:46'),
(41, 'product16', 'dignissimos-unde-dolores-quis-rem-modi-non-consequatur-et-culpa-exercitationem-perferendis-et-eum-qui-eaque-ipsum-praesentium', 'Amet veniam nesciunt et ullam earum. Dolorem atque voluptas cupiditate quis impedit expedita. Dolores quisquam eligendi qui et harum sit nobis. Impedit maxime sequi deleniti voluptas.', '543.00', '870.00', 9, 0, 'https://picsum.photos/640/640', 2, '2022-09-07 23:17:46', '2022-09-07 23:17:46'),
(42, 'product17', 'similique-est-nulla-similique-itaque-ratione-et-sit-doloribus-inventore-aut-recusandae-molestias-et-blanditiis-qui-perspiciatis-perspiciatis-et-tenetur', 'Hic qui mollitia est aut animi ipsam. Iusto aliquid vitae sit est ex. Vitae ut iste illo voluptatem nostrum cumque eveniet. Possimus nisi consequatur molestiae laborum.', '856.00', '531.00', 3, 0, 'https://picsum.photos/640/640', 5, '2022-09-07 23:17:46', '2022-09-07 23:17:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `code` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `active`, `code`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Thaddeus Roberts', 'white.jarred@example.net', '2022-08-01 10:58:24', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, NULL, 'BLwuHGMizP', '2022-08-01 10:58:24', '2022-08-01 10:58:24'),
(2, 'Tevin Hamill', 'thalia.paucek@example.org', '2022-08-01 10:58:24', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, NULL, 'Bf8SG9BZV4', '2022-08-01 10:58:24', '2022-08-01 10:58:24'),
(3, 'Hector Reichert Sr.', 'dedric.gislason@example.net', '2022-08-01 10:58:24', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, NULL, 'YIaB5vi7Yy', '2022-08-01 10:58:24', '2022-08-01 10:58:24'),
(4, 'Bernadine Jones', 'carroll.xavier@example.org', '2022-08-01 10:58:24', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, NULL, 'djzT4NsUtM', '2022-08-01 10:58:24', '2022-08-01 10:58:24'),
(5, 'Mrs. Kaia Hahn', 'nmccullough@example.org', '2022-08-01 10:58:24', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, NULL, 'pudAJ5Qwtj', '2022-08-01 10:58:24', '2022-08-01 10:58:24'),
(6, 'Prof. Carey Hane', 'harvey.elisa@example.net', '2022-08-01 10:58:24', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, NULL, '1KszDeS4ta', '2022-08-01 10:58:24', '2022-08-01 10:58:24'),
(7, 'Prof. Orval Boehm V', 'bria.mcglynn@example.com', '2022-08-01 10:58:24', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, NULL, 'V2Ksr0Txaz', '2022-08-01 10:58:24', '2022-08-01 10:58:24'),
(8, 'Carey Conn', 'shuels@example.com', '2022-08-01 10:58:24', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, NULL, 'qpnb3c78H1', '2022-08-01 10:58:24', '2022-08-01 10:58:24'),
(9, 'Savanah Schuster', 'dach.beryl@example.com', '2022-08-01 10:58:24', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, NULL, 'W6SYcj3pCr', '2022-08-01 10:58:24', '2022-08-01 10:58:24'),
(10, 'Armani Stanton DDS', 'mckenzie.mariela@example.net', '2022-08-01 10:58:24', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 0, NULL, '35GDfq0gNF', '2022-08-01 10:58:24', '2022-08-01 10:58:24'),
(11, 'FAHIM Mariam', 'mariam.fahim.2003@gmail.com', NULL, '$2y$10$3SZOpiJRJd9EMFbG1uooL.L3NkjlSHpWPGzs7mG3nOn8PsS23ZcyS', 1, NULL, 'NCctcParKfsH5Zhq6lE5QrrICpR34REGtAGGtaqWwsZ29DOeY1tdaqEOedc3', '2022-08-01 15:16:18', '2022-09-02 14:38:13'),
(15, 'user', 'elmahdiab1337@gmail.com', NULL, '$2y$10$v9OUuRetRnM.9J73DQMAI./6BD9ulJ58Xwm7ykzJ0dWsCeAPTugQW', 1, NULL, NULL, '2022-08-19 20:31:46', '2022-08-19 20:34:09'),
(13, 'Mimi', 'mariam.fahim.01@gmail.com', NULL, '$2y$10$96IPc4gDQf1H1wwKEAD8zudbdqGBEVuUw9gN6lWFMsnq5h1v1r0Oa', 1, NULL, NULL, '2022-08-10 09:13:07', '2022-08-17 16:58:36'),
(14, 'kjh;b', 'elmahdidiab1337@gmail.com', NULL, '$2y$10$YvRW/flOR2NlSmGcncpq2u3SiN9KebcrpEWEGrkpFBmeO.V6KfczK', 0, '7dhAALIC256ZWkYWccLsRmqxAcJyPI50pRtyl29zm6dnWbvG4JCOazLnGt9ZzpCPsMkz9B8Ik2RaZN2qAfFwRQytoBwYrBjiEPM8PydpL3VBuXnPTxbKiLqLdyStBMwi', NULL, '2022-08-19 20:30:12', '2022-08-19 20:30:12'),
(16, 'FAHIM Mariam', 'jjkll@gmail.com', NULL, '$2y$10$cuY5JNtLFQ9H3.Ym8zj1FuPSyNCt737PX.Zm0BAJ7gJWNvntzShFW', 0, 'Zugenmd8QP2ODi8sIbFTMtwc2K3id6suAEP3BHzHyBkjtkeBLNRFNor1SWhjy89ZHurpnaeCGdGU61KbhNu96Cjn6iQ0OoHd6bdfjFo11zh5XNnCoBxgS7lAa8qT7bnn', NULL, '2022-08-27 22:54:52', '2022-08-27 22:54:52'),
(17, 'fahim mariam', 'user@gmail.com', NULL, '$2y$10$xJif3TyZ693LIMWFybd2Ku6w/isHRuFvnI3QCFVprgL2keAUiraiS', 1, NULL, NULL, '2022-08-28 00:02:18', '2022-08-28 00:03:08'),
(18, 'FAHIM Mariam', 'user1@gmail.com', NULL, '$2y$10$Ey9hkVbQipxmk2NGfqGTdOONPti.YAJm/EGQZu.WzgnXR7G.b7PGK', 0, 'Mo26CXPG1GQOJw17MdLJdBrEzo4s0dQ5jyQBHaTvKcDxTRYmxx1AaeYgDy4PHmMwRoOMjzAaoUOTg1wI1wb1Tjdvj0IgB6Cj7mOg6hlXfOJQ2a0JBvk1cqs8zXjAlBid', NULL, '2022-08-28 14:29:37', '2022-08-28 14:29:37'),
(19, 'FAHIM Mariam', 'user11@gmail.com', NULL, '$2y$10$8yMiOFbByFkhVByr.Z5eaeG3M2d.m1su101tDDUSUjGSvngC9X8oO', 0, 'hAX3wOqfhaph8dMIqImETWLSimRbGSajZwkM02flCeAHVZ79sAFtMRyp39l2W9iP1UzblxqUWPliMGGP3daWhCvI0ZHOJz8dY2PbQQwGu8VcpS6zw4ia7EctbTBGCMOm', NULL, '2022-09-02 14:39:28', '2022-09-02 14:39:28'),
(20, 'loubnasaadi', 'loubna.saadi@gmail.com', NULL, '$2y$10$yvD5Iv49wV1hEYXOWWRcQuNh4QUdVfhAh8oy3ljQrG9Pkz1d.TqbO', 1, NULL, NULL, '2022-09-30 16:18:52', '2022-09-30 16:29:24'),
(21, 'hibatallah', 'hibatallah.lasmar@gmail.com', NULL, '$2y$10$MTJ3.34zEYSKKqDePFxvPeXtwMlPZExYM6wd4bnDNTXSwvfSN8On2', 0, NULL, NULL, '2022-09-30 16:53:58', '2022-09-30 16:53:58'),
(22, 'mimi', 'hhh@gmail.com', NULL, '$2y$10$uEOMhcQ712WvxLtB6CjiHO6PqddN7E3JMXadko.7.zAB3tuagbwMe', 0, NULL, NULL, '2022-09-30 16:56:49', '2022-09-30 16:56:49'),
(23, 'user', 'yyy@gmail.com', NULL, '$2y$10$IJxiQpIHEh/ehPyw7anbC.55tG9I.hDGsMY8U2KPRny9tgngOtKga', 0, 'REWz13briN7JATjcvlWmwAVeIwM1KtneS2URdRqxexAwY8fp6PCQQkkZBb04YEqJKXVkkJouHWnH2sTvkXqVe3BvrV0p5ngtCp5LtDkRGfOK8T1B6vW9mJz1PidfcDBq', NULL, '2022-09-30 16:58:56', '2022-09-30 16:58:56'),
(24, 'user', 'uuuuu@gmail.com', NULL, '$2y$10$u2TXQRZZWA1h6jx7D7MaT.jrdjwvdlQU0uIX7vvgPPi2y6ukz5G2m', 0, '8fyarcs2CdlVRURRcfA5tsexPwP8jiu8b0dIyM3UtJBc5u116Ae8ImAo35TflYPsLTSldmnpYrO0R8G18grcSXA5PbY80vVAGKNzP40xcKL64Is8fuAgodG0cKedeVBO', NULL, '2022-09-30 17:01:48', '2022-09-30 17:01:48'),
(25, 'FAHIM Mariam', 'nnn@gmail.com', NULL, '$2y$10$1ToWI6NeBuFlTmt77h9e8.z99FF35wd.JkZT1I.9LyBcMiiNUJnvS', 0, 'ShOXFJ6G5GwcxGJ82qUZihN6XX16eDMKvwaT1dvdqOlXyZvvOo5jBa5f3Pg7OmV6DS26qtmo3qywuWUoN5EPwMgpSb7Q5SfOWCIfQyCr1IA6eXkITNEGKKiof1VxkxCc', NULL, '2022-09-30 17:05:56', '2022-09-30 17:05:56'),
(26, 'FAHIM Mariam', 'aaa@gmail.com', NULL, '$2y$10$RuAl7GwIZ5kLDaElI4SteuYl95hvgZFNhF1u9orfq0YOKlIa7TrbW', 0, NULL, NULL, '2022-10-06 11:28:56', '2022-10-06 11:28:56'),
(27, 'FAHIM Mariam', 'bbb@gmail.com', NULL, '$2y$10$WqAgC.Go856bVu/YQlv/yejvwjpAFnJSo/tMOYGTOyh3ocoV8M3.a', 0, 'GpUc7dmpXANey0B1VizUdI4FaGigmLDP2age9xydlzVcjA4QRIWmmREEVD9sULdgqD4LA16aQW0m1OWDHPtP4NxdWUxEpnMcZbDf4Pk179TCEwMpi6mwG8coAtoIBKxv', NULL, '2022-10-06 11:41:39', '2022-10-06 11:41:39'),
(28, 'kkk', 'ccc@gmail', NULL, '$2y$10$PWfLTknbbnDMhrQkslmuHuYsyvUQazlpBTAItQKzGE6JkLfHHSriK', 0, NULL, NULL, '2022-10-06 11:58:03', '2022-10-06 11:58:03'),
(29, 'Mimi', 'ddd@gmail.com', NULL, '$2y$10$OmIvBREqrFosjj5QcLOGcejGWNHSx8Zk5SUTD9.O5hnN3fjWjW.mG', 0, NULL, NULL, '2022-10-06 12:02:32', '2022-10-06 12:02:32'),
(30, 'user', 'eee@gmail.com', NULL, '$2y$10$Tir8LAoO1tHZ.XCPxkfN4.8nO5fsysUzsJNlH81jOfP1MRb1C9rlW', 0, NULL, NULL, '2022-10-06 13:37:35', '2022-10-06 13:37:35'),
(31, 'mariam', 'fff@gmail.com', NULL, '$2y$10$qhgEo8TFCPsrNy98pcpi7.BBztdPcOvJ2g0TVu6qpQJRA4jTY2GyC', 0, NULL, NULL, '2022-10-06 13:49:59', '2022-10-06 13:49:59');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
