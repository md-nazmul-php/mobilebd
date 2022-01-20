-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2022 at 09:05 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `review_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `added_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `user_name`, `admin_type`, `name`, `email`, `added_by`, `password`, `profile_photo`, `created_at`, `updated_at`) VALUES
(2, 'kamrul1', 'SADM', 'Md. Mezbah', 'moni@yahoo.com', '', '$2y$10$TNetRyNI6DcSe/cJLjyAI.HKTDprcslwInCVmVUNEt9V/qN3MpRj.', '6x5fffdownload - Copy.png', '2021-06-23 20:16:42', '2022-01-19 12:20:57'),
(3, 'kamrulEditor', 'EDITOR', 'Kamrul Bqw', 'edit@gmail.com', 'kamrul1', '$2y$10$404O4hHj/B3NtgkDVr4wKezKfUBy33rQ8JdBiToI..HNXSjb5V71q', '1625335623.PNG', '2021-06-25 02:17:35', '2021-07-03 06:07:03'),
(4, 'mezbah1', 'SADM', 'Mezbah', 'mezbah@gmail.com', 'kamrul1', '$2y$10$mx7I/yM6gglYwGpyUNRiROcmYfnw.YBw7WrelmznWGs.0DKrHvUZm', NULL, '2021-06-27 01:06:39', '2021-06-27 01:06:39');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `favicons`
--

CREATE TABLE `favicons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `favicons`
--

INSERT INTO `favicons` (`id`, `favicon`, `logo`, `created_at`, `updated_at`) VALUES
(1, 'Pink_flower.jpg', 'micromax-in-2b-1-414x800-1627626668.webp', '0000-00-00 00:00:00', '2022-01-20 02:01:44');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_08_10_062120_create_mobicatnames_table', 1),
(5, '2021_08_10_062133_create_mobibrandnames_table', 1),
(6, '2021_08_10_062145_create_mobiratingnames_table', 1),
(7, '2021_08_10_180328_create_admins_table', 1),
(8, '2021_08_10_181131_create_favicons_table', 1),
(9, '2021_08_10_181512_create_titles_table', 1),
(10, '2021_08_11_141814_create_mobileposts_table', 1),
(11, '2021_08_11_142120_create_mobilecategories_table', 1),
(12, '2021_08_11_154619_create_mobileimages_table', 1),
(13, '2021_08_11_154641_create_mobilevideos_table', 1),
(14, '2021_08_11_154748_create_mobileratings_table', 1),
(15, '2021_08_11_154813_create_mobileoffers_table', 1),
(16, '2021_08_11_161524_create_mobilevariants_table', 1),
(17, '2021_08_11_161544_create_mobilecomments_table', 1),
(18, '2021_08_16_112312_create_mobilespecones_table', 1),
(19, '2021_08_16_112330_create_mobilespectwos_table', 1),
(20, '2021_08_16_112342_create_mobilespecthrees_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mobibrandnames`
--

CREATE TABLE `mobibrandnames` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobibrandnames`
--

INSERT INTO `mobibrandnames` (`id`, `brand_name`, `created_by`, `description`, `brand_img`, `created_at`, `updated_at`) VALUES
(1, 'Samsung', 'kamrul1', NULL, NULL, '2021-08-26 10:24:32', '2021-08-26 10:24:46'),
(2, 'Nokia', 'kamrul1', NULL, NULL, '2021-08-26 10:24:38', '2021-08-26 10:24:38'),
(3, 'Samphony', 'kamrul1', NULL, NULL, '2021-08-26 10:25:09', '2021-08-26 10:25:09'),
(4, 'iTel', 'kamrul1', NULL, NULL, '2021-08-26 10:25:18', '2021-08-26 10:25:18');

-- --------------------------------------------------------

--
-- Table structure for table `mobicatnames`
--

CREATE TABLE `mobicatnames` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobicatnames`
--

INSERT INTO `mobicatnames` (`id`, `category_name`, `created_by`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Android', 'kamrul1', NULL, '2021-08-26 10:23:33', '2021-08-26 10:23:33'),
(2, 'Windows', 'kamrul1', NULL, '2021-08-26 10:23:36', '2021-08-26 10:23:36'),
(3, 'General', 'kamrul1', NULL, '2021-08-26 10:23:39', '2021-08-26 10:23:39'),
(4, 'iPhone', 'kamrul1', NULL, '2021-08-26 10:23:42', '2021-08-26 10:23:42'),
(5, 'cat 1', 'kamrul1', NULL, '2021-08-26 22:57:36', '2021-08-26 22:57:36'),
(6, 'cat 2', 'kamrul1', NULL, '2021-08-26 22:57:41', '2021-08-26 22:57:41');

-- --------------------------------------------------------

--
-- Table structure for table `mobilecategories`
--

CREATE TABLE `mobilecategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobilecategories`
--

INSERT INTO `mobilecategories` (`id`, `post_id`, `category_id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Android', '2021-08-26 10:25:47', '2021-08-26 10:25:47'),
(2, 1, 3, 'General', '2021-08-26 10:25:47', '2021-08-26 10:25:47'),
(3, 3, 1, 'Android', '2021-08-26 17:58:20', '2021-08-26 17:58:20'),
(4, 3, 3, 'General', '2021-08-26 17:58:20', '2021-08-26 17:58:20'),
(7, 5, 1, 'Android', '2021-08-26 18:30:29', '2021-08-26 18:30:29'),
(8, 5, 3, 'General', '2021-08-26 18:30:29', '2021-08-26 18:30:29'),
(9, 6, 2, 'Windows', '2021-08-26 18:31:37', '2021-08-26 18:31:37'),
(10, 6, 4, 'iPhone', '2021-08-26 18:31:37', '2021-08-26 18:31:37'),
(11, 7, 1, 'Android', '2021-08-26 19:29:00', '2021-08-26 19:29:00'),
(12, 7, 2, 'Windows', '2021-08-26 19:29:00', '2021-08-26 19:29:00'),
(13, 8, 1, 'Android', '2021-08-26 19:29:54', '2021-08-26 19:29:54'),
(14, 8, 2, 'Windows', '2021-08-26 19:29:54', '2021-08-26 19:29:54'),
(15, 9, 1, 'Android', '2021-08-26 19:31:54', '2021-08-26 19:31:54'),
(16, 9, 4, 'iPhone', '2021-08-26 19:31:54', '2021-08-26 19:31:54'),
(17, 10, 2, 'Windows', '2021-08-26 19:48:51', '2021-08-26 19:48:51'),
(18, 10, 4, 'iPhone', '2021-08-26 19:48:51', '2021-08-26 19:48:51'),
(90, 12, 2, 'Windows', '2021-08-27 06:27:55', '2021-08-27 06:27:55'),
(91, 12, 3, 'General', '2021-08-27 06:27:55', '2021-08-27 06:27:55'),
(92, 12, 4, 'iPhone', '2021-08-27 06:27:55', '2021-08-27 06:27:55'),
(93, 12, 5, 'cat 1', '2021-08-27 06:27:55', '2021-08-27 06:27:55'),
(94, 12, 6, 'cat 2', '2021-08-27 06:27:55', '2021-08-27 06:27:55'),
(103, 11, 1, 'Android', '2021-09-11 02:34:34', '2021-09-11 02:34:34'),
(104, 11, 2, 'Windows', '2021-09-11 02:34:34', '2021-09-11 02:34:34'),
(105, 11, 4, 'iPhone', '2021-09-11 02:34:34', '2021-09-11 02:34:34'),
(106, 11, 6, 'cat 2', '2021-09-11 02:34:34', '2021-09-11 02:34:34'),
(107, 13, 2, 'Windows', '2021-09-25 21:44:00', '2021-09-25 21:44:00'),
(108, 13, 3, 'General', '2021-09-25 21:44:00', '2021-09-25 21:44:00'),
(109, 14, 1, 'Android', '2021-09-26 02:00:20', '2021-09-26 02:00:20'),
(110, 14, 5, 'cat 1', '2021-09-26 02:00:20', '2021-09-26 02:00:20'),
(122, 16, 4, 'iPhone', '2022-01-19 22:19:31', '2022-01-19 22:19:31'),
(123, 16, 5, 'cat 1', '2022-01-19 22:19:31', '2022-01-19 22:19:31'),
(126, 17, 1, 'Android', '2022-01-19 22:22:44', '2022-01-19 22:22:44'),
(127, 4, 1, 'Android', '2022-01-19 22:23:21', '2022-01-19 22:23:21'),
(128, 4, 2, 'Windows', '2022-01-19 22:23:21', '2022-01-19 22:23:21'),
(129, 15, 1, 'Android', '2022-01-19 22:24:26', '2022-01-19 22:24:26'),
(130, 15, 5, 'cat 1', '2022-01-19 22:24:26', '2022-01-19 22:24:26');

-- --------------------------------------------------------

--
-- Table structure for table `mobilecomments`
--

CREATE TABLE `mobilecomments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_full_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mobileimages`
--

CREATE TABLE `mobileimages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `product_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobileimages`
--

INSERT INTO `mobileimages` (`id`, `post_id`, `product_img`, `created_at`, `updated_at`) VALUES
(14, 11, 'fffdownload.jpg', '2021-08-27 07:01:13', '2021-08-27 07:01:13'),
(15, 11, 'ffff.jpg', '2021-08-27 07:01:13', '2021-08-27 07:01:13'),
(16, 11, 'fimages.jpg', '2021-08-27 07:01:13', '2021-08-27 07:01:13'),
(17, 13, '1632627840-product1.png', '2021-09-25 21:44:00', '2021-09-25 21:44:00'),
(18, 13, '1632627840-product3.png', '2021-09-25 21:44:00', '2021-09-25 21:44:00'),
(19, 14, '1632643220-product2.png', '2021-09-26 02:00:20', '2021-09-26 02:00:20'),
(20, 15, '1632643314-product2.png', '2021-09-26 02:01:54', '2021-09-26 02:01:54'),
(22, 16, 'ffff.jpg', '2021-10-04 08:19:43', '2021-10-04 08:19:43'),
(23, 16, 'fimages.jpg', '2021-10-04 08:19:43', '2021-10-04 08:19:43'),
(26, 17, 'Pink_flower.jpg', '2022-01-19 22:22:44', '2022-01-19 22:22:44'),
(27, 4, 'micromax-in-2b-1-414x800-1627626668.webp', '2022-01-19 22:23:21', '2022-01-19 22:23:21');

-- --------------------------------------------------------

--
-- Table structure for table `mobileoffers`
--

CREATE TABLE `mobileoffers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `offer_store` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offter_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobileoffers`
--

INSERT INTO `mobileoffers` (`id`, `post_id`, `offer_store`, `offer_title`, `offer_price`, `offter_url`, `created_at`, `updated_at`) VALUES
(7, 11, 'amazon', 'big', '22', 'www', '2021-09-11 02:34:34', '2021-09-11 02:34:34'),
(8, 11, 'amazon', 'bigfgfg', '190', 'www', '2021-09-11 02:34:34', '2021-09-11 02:34:34');

-- --------------------------------------------------------

--
-- Table structure for table `mobileposts`
--

CREATE TABLE `mobileposts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `added_by` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(6000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_name` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_name` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(70) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(170) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key_words` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `market_status` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `released` date DEFAULT NULL,
  `official_price` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_updated_on` date DEFAULT NULL,
  `official_website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `g_5g_check` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `g_5g` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `g_volte_check` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `g_volte` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `g_fingerprint_check` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `g_fingerprint` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `g_usb_check` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `g_usb` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `g_wireless_check` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `g_wireless` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `g_waterproof_check` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `g_waterproof` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `os` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_camera` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `front_camera` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ram` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `storage` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `battery_capacity` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `average_rating` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_type` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_type` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_img` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobileposts`
--

INSERT INTO `mobileposts` (`id`, `added_by`, `title`, `description`, `brand_name`, `category_name`, `meta_title`, `meta_description`, `key_words`, `market_status`, `released`, `official_price`, `price_updated_on`, `official_website`, `g_5g_check`, `g_5g`, `g_volte_check`, `g_volte`, `g_fingerprint_check`, `g_fingerprint`, `g_usb_check`, `g_usb`, `g_wireless_check`, `g_wireless`, `g_waterproof_check`, `g_waterproof`, `os`, `display`, `main_camera`, `front_camera`, `ram`, `storage`, `battery_capacity`, `average_rating`, `product_type`, `post_type`, `post_img`, `created_at`, `updated_at`) VALUES
(1, 'kamrul1', 'fffffff', '<p>sdsdsd</p>', 'Samsung', 'Android, General', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2.0', 'popular', 'draft', NULL, '2021-08-26 10:25:47', '2021-08-26 10:25:47'),
(3, 'kamrul1', 'fffffff', '<p>xfgfg</p>', 'Samsung', 'Android, General', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2.0', 'popular', 'publish', NULL, '2021-08-26 17:58:20', '2021-08-26 17:58:20'),
(4, 'kamrul1', 'ww', '<p>dfdf</p>', 'Samsung', 'Android, Windows', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2.0', 'upcoming', 'publish', '1642652601-micromax-in-2b-1-414x800-1627626668.webp', '2021-08-26 18:10:30', '2022-01-19 22:23:21'),
(5, 'kamrul1', 'fffffffdffffffff', '<p>dfdf</p>', 'Samsung', 'Android, General', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2.0', 'upcoming', 'publish', '1632627840-product1.png', '2021-08-26 18:30:29', '2021-08-26 18:30:29'),
(6, 'kamrul1', 'hhh', '<p>hhh</p>', 'Samphony', 'Windows, iPhone', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2.0', NULL, NULL, NULL, '2021-08-26 18:31:37', '2021-08-26 18:31:37'),
(7, 'kamrul1', 'ww', '<p>SD\\XCXC</p>', 'Select Brand', 'Android, Windows', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4.1', 'popular', 'publish', '1632627840-product1.png', '2021-08-26 19:29:00', '2021-08-26 19:29:00'),
(8, 'kamrul1', 'ww', '<p>SD\\XCXC</p>', 'Select Brand', 'Android, Windows', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '4.1', 'upcoming', 'publish', '1632627840-product1.png', '2021-08-26 19:29:54', '2021-08-26 19:29:54'),
(9, 'kamrul1', 'fffffff', '<p>sdsdsd</p>', 'Samsung', 'Android, iPhone', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2.0', 'upcoming', 'publish', '1632627840-product1.png', '2021-08-26 19:31:54', '2021-08-26 19:31:54'),
(10, 'kamrul1', 'bbbbb', '<p>fffffff</p>', 'iTel', 'Windows, iPhone', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2.0', 'popular', 'publish', '1632627840-product1.png', '2021-08-26 19:48:51', '2021-08-26 19:48:51'),
(11, 'kamrul1', 'The first post', '<p>This is the first post. This is the world best Mobile&nbsp;This is the first post. This is the world best Mobile&nbsp;This is the first post. This is the world best Mobile&nbsp;This is the first post. This is the world best Mobile&nbsp;This is the first post. This is the world best Mobile&nbsp;This is the first post. This is the world best Mobile&nbsp;This is the first post. This is the world best Mobile&nbsp;This is the first post. This is the world best Mobile&nbsp;This is the first post. This is the world best Mobile&nbsp;This is the first post. This is the world best Mobile&nbsp;</p>', 'Samsung', 'Android, Windows, iPhone, cat 2', 'This is the world best Mobile ', 'This is the first post. This is the world best Mobile ', 'first post, best Mobile ', 'available', '2021-08-02', '30000', '2021-08-12', 'facebook.com', 'Yes', '5G Supported by device', 'Yes', 'VoLTE', 'Yes', 'Fingerprint sensor', 'Yes', 'USB OTG Support', 'Yes', 'Wireless Charging', 'Yes', 'Waterproof, IP68', 'android', 'Glorila', '28MP', '2MP', '2gb', '128gb', '6000', '6.6', 'latest', 'publish', '1632627840-product1.png', '2021-08-26 20:33:48', '2021-09-11 02:34:34'),
(12, 'kamrul1', 'Itel11122', '<p>itel 11122</p>', 'Nokia', 'Windows, General, iPhone, cat 1, cat 2', NULL, NULL, NULL, 'available', NULL, '200', NULL, NULL, 'Yes', NULL, 'Yes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2.3', 'upcoming', 'publish', '1632627840-product1.png', '2021-08-26 23:14:38', '2021-08-27 04:03:45'),
(13, 'kamrul1', 'The last post 111', 'adfadfadfadf', 'Nokia', 'Windows, General', 'adfdf', 'adfadfdv', 'bsdf df , dfdf', NULL, NULL, '50000', NULL, 'https://www.facebook.com/', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2.0', 'latest', 'publish', '1632627840-product1.png', '2021-09-25 21:44:00', '2021-09-25 21:44:00'),
(14, 'kamrul1', 'The first mobile', '<p>lkdfj th siofj lakdjf dkfj</p>', 'Nokia', 'Android, cat 1', 'sdfdf', 'sdfsdf', 'dfdf', NULL, NULL, '30000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2.0', 'latest', 'publish', '1632643220-product2.png', '2021-09-26 02:00:20', '2021-09-26 02:00:20'),
(15, 'kamrul1', 'The first mobile', '<p>lkdfj th siofj lakdjf dkfj</p>', 'Nokia', 'Android, cat 1', 'sdfdf', 'sdfsdf', 'dfdf', NULL, NULL, '30000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2.0', 'latest', 'publish', '1632643314-product2.png', '2021-09-26 02:01:54', '2021-09-26 02:01:54'),
(16, 'kamrul1', 'ssssssssss ssssssss', '<p>ssssssssss</p>', 'Samsung', 'iPhone, cat 1', 'eeeeee', 'eeeeeeeee', 'eeeeeeee', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2.0', 'popular', 'publish', '1633357183-ffff.jpg', '2021-09-26 02:04:27', '2022-01-19 22:19:31'),
(17, 'kamrul1', 'Samsung best Mobile', '<p>adfadfadfadf</p>', 'Nokia', 'Android', 'adfadf', 'adfadfad', 'adfadfadf', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2.0', 'latest', 'publish', '1642652564-Pink_flower.jpg', '2021-10-04 08:20:33', '2022-01-19 22:22:44');

-- --------------------------------------------------------

--
-- Table structure for table `mobileratings`
--

CREATE TABLE `mobileratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `rating_id` bigint(20) UNSIGNED NOT NULL,
  `rating_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating_value` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobileratings`
--

INSERT INTO `mobileratings` (`id`, `post_id`, `rating_id`, `rating_name`, `rating_value`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Battery', '2.00', '2021-08-26 10:25:47', '2021-08-26 10:25:47'),
(2, 1, 2, 'Camera', '2.00', '2021-08-26 10:25:47', '2021-08-26 10:25:47'),
(3, 1, 3, 'Resolution', '2.00', '2021-08-26 10:25:47', '2021-08-26 10:25:47'),
(4, 3, 1, 'Battery', '2.00', '2021-08-26 17:58:20', '2021-08-26 17:58:20'),
(5, 3, 2, 'Camera', '2.00', '2021-08-26 17:58:20', '2021-08-26 17:58:20'),
(6, 3, 3, 'Resolution', '2.00', '2021-08-26 17:58:20', '2021-08-26 17:58:20'),
(10, 5, 1, 'Battery', '2.00', '2021-08-26 18:30:29', '2021-08-26 18:30:29'),
(11, 5, 2, 'Camera', '2.00', '2021-08-26 18:30:29', '2021-08-26 18:30:29'),
(12, 5, 3, 'Resolution', '2.00', '2021-08-26 18:30:29', '2021-08-26 18:30:29'),
(13, 6, 1, 'Battery', '2.00', '2021-08-26 18:31:37', '2021-08-26 18:31:37'),
(14, 6, 2, 'Camera', '2.00', '2021-08-26 18:31:37', '2021-08-26 18:31:37'),
(15, 6, 3, 'Resolution', '2.00', '2021-08-26 18:31:37', '2021-08-26 18:31:37'),
(16, 7, 1, 'Battery', '3.40', '2021-08-26 19:29:00', '2021-08-26 19:29:00'),
(17, 7, 2, 'Camera', '5.10', '2021-08-26 19:29:00', '2021-08-26 19:29:00'),
(18, 8, 1, 'Battery', '3.40', '2021-08-26 19:29:54', '2021-08-26 19:29:54'),
(19, 8, 2, 'Camera', '5.10', '2021-08-26 19:29:54', '2021-08-26 19:29:54'),
(20, 8, 3, 'Resolution', '3.70', '2021-08-26 19:29:54', '2021-08-26 19:29:54'),
(21, 9, 1, 'Battery', '2.00', '2021-08-26 19:31:54', '2021-08-26 19:31:54'),
(22, 9, 2, 'Camera', '2.00', '2021-08-26 19:31:54', '2021-08-26 19:31:54'),
(23, 9, 3, 'Resolution', '2.00', '2021-08-26 19:31:54', '2021-08-26 19:31:54'),
(24, 10, 1, 'Battery', '2.00', '2021-08-26 19:48:51', '2021-08-26 19:48:51'),
(25, 10, 2, 'Camera', '2.00', '2021-08-26 19:48:51', '2021-08-26 19:48:51'),
(26, 10, 3, 'Resolution', '2.00', '2021-08-26 19:48:51', '2021-08-26 19:48:51'),
(87, 12, 1, 'Battery', '3.70', '2021-08-27 05:36:25', '2021-08-27 05:36:25'),
(88, 12, 2, 'Camera', '0.00', '2021-08-27 05:36:25', '2021-08-27 05:36:25'),
(89, 12, 3, 'Resolution', '3.20', '2021-08-27 05:36:25', '2021-08-27 05:36:25'),
(96, 11, 1, 'Battery', '9.50', '2021-09-11 02:34:34', '2021-09-11 02:34:34'),
(97, 11, 2, 'Camera', '7.70', '2021-09-11 02:34:34', '2021-09-11 02:34:34'),
(98, 11, 3, 'Resolution', '2.70', '2021-09-11 02:34:34', '2021-09-11 02:34:34'),
(99, 13, 1, 'Battery', '2.00', '2021-09-25 21:44:00', '2021-09-25 21:44:00'),
(100, 13, 2, 'Camera', '2.00', '2021-09-25 21:44:00', '2021-09-25 21:44:00'),
(101, 13, 3, 'Resolution', '2.00', '2021-09-25 21:44:00', '2021-09-25 21:44:00'),
(102, 14, 1, 'Battery', '2.00', '2021-09-26 02:00:20', '2021-09-26 02:00:20'),
(103, 14, 2, 'Camera', '2.00', '2021-09-26 02:00:20', '2021-09-26 02:00:20'),
(104, 14, 3, 'Resolution', '2.00', '2021-09-26 02:00:20', '2021-09-26 02:00:20'),
(123, 16, 1, 'Battery', '2.00', '2022-01-19 22:19:31', '2022-01-19 22:19:31'),
(124, 16, 2, 'Camera', '2.00', '2022-01-19 22:19:31', '2022-01-19 22:19:31'),
(125, 16, 3, 'Resolution', '2.00', '2022-01-19 22:19:31', '2022-01-19 22:19:31'),
(132, 17, 1, 'Battery', '2.00', '2022-01-19 22:22:44', '2022-01-19 22:22:44'),
(133, 17, 2, 'Camera', '2.00', '2022-01-19 22:22:44', '2022-01-19 22:22:44'),
(134, 17, 3, 'Resolution', '2.00', '2022-01-19 22:22:44', '2022-01-19 22:22:44'),
(135, 4, 1, 'Battery', '2.00', '2022-01-19 22:23:21', '2022-01-19 22:23:21'),
(136, 4, 2, 'Camera', '2.00', '2022-01-19 22:23:21', '2022-01-19 22:23:21'),
(137, 4, 3, 'Resolution', '2.00', '2022-01-19 22:23:21', '2022-01-19 22:23:21'),
(138, 15, 1, 'Battery', '2.00', '2022-01-19 22:24:26', '2022-01-19 22:24:26'),
(139, 15, 2, 'Camera', '2.00', '2022-01-19 22:24:26', '2022-01-19 22:24:26'),
(140, 15, 3, 'Resolution', '2.00', '2022-01-19 22:24:26', '2022-01-19 22:24:26');

-- --------------------------------------------------------

--
-- Table structure for table `mobilespecones`
--

CREATE TABLE `mobilespecones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `device_type_spc` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand_spc` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_spc` varchar(40) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `released_spc` date DEFAULT NULL,
  `g_colours_spc` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display_type_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `screen_size_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aspect_ratio_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bezel_less_spc_check` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bezel_less_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brightness_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resolution_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refresh_rate_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display_colors_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pixel_density_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `touch_screen_spc_check` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `touch_screen_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display_protection_spc` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `multitouch_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `operating_system_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chipset_spc` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cpu_spc` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `architecture_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fabrication_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_of_cores_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `graphics_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `width_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thickness_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colours_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waterproof_spc_check` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `waterproof_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ruggedness_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `build_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobilespecones`
--

INSERT INTO `mobilespecones` (`id`, `post_id`, `device_type_spc`, `brand_spc`, `model_spc`, `released_spc`, `g_colours_spc`, `display_type_spc`, `screen_size_spc`, `aspect_ratio_spc`, `bezel_less_spc_check`, `bezel_less_spc`, `brightness_spc`, `resolution_spc`, `refresh_rate_spc`, `display_colors_spc`, `pixel_density_spc`, `touch_screen_spc_check`, `touch_screen_spc`, `display_protection_spc`, `multitouch_spc`, `operating_system_spc`, `chipset_spc`, `cpu_spc`, `architecture_spc`, `fabrication_spc`, `no_of_cores_spc`, `graphics_spc`, `height_spc`, `width_spc`, `thickness_spc`, `weight_spc`, `colours_spc`, `waterproof_spc_check`, `waterproof_spc`, `ruggedness_spc`, `build_spc`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-26 10:25:47', '2021-08-26 10:25:47'),
(3, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-26 17:58:20', '2021-08-26 17:58:20'),
(4, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-26 18:10:30', '2021-08-26 18:10:30'),
(5, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-26 18:30:29', '2021-08-26 18:30:29'),
(6, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-26 18:31:37', '2021-08-26 18:31:37'),
(7, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-26 19:29:00', '2021-08-26 19:29:00'),
(8, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-26 19:29:54', '2021-08-26 19:29:54'),
(9, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-26 19:31:54', '2021-08-26 19:31:54'),
(10, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-26 19:48:51', '2021-08-26 19:48:51'),
(11, 11, 'Phone', 'Samsung', 'F32', '2021-08-02', 'blue', 'Not', '11X6', 'ldkjf', 'Yes', 'dfdaf', 'High', '4000', '2', 'Green', '33', NULL, 'Note that', 'fdg', 'YEah', 'Android', 'sfg', 'fsg', 'dkjf', 'adkfj', 'dfj', 'ndfn', 'df', 'ee', '1', '2gm', 'ggg', NULL, 'dfee', 'adf', 'adfadfd', '2021-08-26 20:33:48', '2021-08-26 20:33:48'),
(12, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-26 23:14:38', '2021-08-26 23:14:38'),
(13, 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-25 21:44:00', '2021-09-25 21:44:00'),
(14, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-26 02:00:20', '2021-09-26 02:00:20'),
(15, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-26 02:01:54', '2021-09-26 02:01:54'),
(16, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-26 02:04:27', '2021-09-26 02:04:27'),
(17, 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-04 08:20:33', '2021-10-04 08:20:33');

-- --------------------------------------------------------

--
-- Table structure for table `mobilespecthrees`
--

CREATE TABLE `mobilespecthrees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `wlan_wifi_features_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wlan_wifi_calling_spc_check` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wlan_wifi_calling_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wlan_bluetooth_spc_check` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wlan_bluetooth_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wlan_gps_spc_check` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wlan_gps_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wlan_infrared_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wlan_wifi_hotspot_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wlan_nfc_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wlan_usb_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `network_technology_spc` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `network_network_support_spc` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `network_speed_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `network_sim_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `network_volte_spc_check` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `network_volte_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `network_sim_size_spc` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fm_radio_spc_check` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fm_radio_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loudspeaker_spc_check` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loudspeaker_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `audio_player_spc_check` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `audio_player_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `audio_jack_spc_check` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `audio_jack_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alert_types_spc` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ring_tones_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stereo_speakers_spc` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fingerprint_sensor_spc` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fingerprint_sensor_position_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fingerprint_sensor_type_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `other_sensors_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `manufactured_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assembled_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `others_features_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobilespecthrees`
--

INSERT INTO `mobilespecthrees` (`id`, `post_id`, `wlan_wifi_features_spc`, `wlan_wifi_calling_spc_check`, `wlan_wifi_calling_spc`, `wlan_bluetooth_spc_check`, `wlan_bluetooth_spc`, `wlan_gps_spc_check`, `wlan_gps_spc`, `wlan_infrared_spc`, `wlan_wifi_hotspot_spc`, `wlan_nfc_spc`, `wlan_usb_spc`, `network_technology_spc`, `network_network_support_spc`, `network_speed_spc`, `network_sim_spc`, `network_volte_spc_check`, `network_volte_spc`, `network_sim_size_spc`, `fm_radio_spc_check`, `fm_radio_spc`, `loudspeaker_spc_check`, `loudspeaker_spc`, `audio_player_spc_check`, `audio_player_spc`, `audio_jack_spc_check`, `audio_jack_spc`, `alert_types_spc`, `ring_tones_spc`, `stereo_speakers_spc`, `fingerprint_sensor_spc`, `fingerprint_sensor_position_spc`, `fingerprint_sensor_type_spc`, `other_sensors_spc`, `manufactured_spc`, `assembled_spc`, `others_features_spc`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-26 10:25:47', '2021-08-26 10:25:47'),
(3, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-26 17:58:20', '2021-08-26 17:58:20'),
(4, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-26 18:10:30', '2022-01-19 22:23:21'),
(5, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-26 18:30:29', '2021-08-26 18:30:29'),
(6, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-26 18:31:37', '2021-08-26 18:31:37'),
(7, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-26 19:29:00', '2021-08-26 19:29:00'),
(8, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-26 19:29:54', '2021-08-26 19:29:54'),
(9, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-26 19:31:54', '2021-08-26 19:31:54'),
(10, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-26 19:48:51', '2021-08-26 19:48:51'),
(11, 11, 'dfdf', 'Yes', 'fdfd', 'Yes', 'dfdfd', 'Yes', 'dfdf', 'dfd', 'ferer', 'erer', 'ererer', 'gsfgsfg', 'sfgsf', 'ewe', 'wewee', 'Yes', 'wewe', 'sfgfg', 'Yes', 'eeeeee', 'Yes', 'eeee', 'Yes', 'eee', 'Yes', 'wwwwwwwwwwww', 'fsgsfg', 'we', 'Yes', 'Yes', 'eeeeeeeeeeeee', 'eeeeeeeeeeeeeee', 'ee', 'nnnnnnn', 'nnnnnnnnnnnnn', 'nnnnnnnnnnnnnnnnnn', '2021-08-26 20:33:48', '2021-08-26 20:33:48'),
(12, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-26 23:14:38', '2021-08-26 23:14:38'),
(13, 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-25 21:44:00', '2021-09-25 21:44:00'),
(14, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-26 02:00:20', '2021-09-26 02:00:20'),
(15, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-26 02:01:54', '2022-01-19 22:24:26'),
(16, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-26 02:04:27', '2022-01-19 22:19:31'),
(17, 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-04 08:20:33', '2022-01-19 22:22:44');

-- --------------------------------------------------------

--
-- Table structure for table `mobilespectwos`
--

CREATE TABLE `mobilespectwos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `rear_camera_setup_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rear_image_resolution_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rear_resolution_spc` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rear_sensor_spc` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rear_settings_spc` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rear_shooting_modes_spc` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rear_autofocus_spc_check` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rear_autofocus_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rear_flash_spc_check` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rear_flash_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rear_ois_spc` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rear_features_spc` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rear_video_resolution_spc` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selfie_camera_setup_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selfie_autofocus_spc_check` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selfie_autofocus_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selfie_resolution_spc` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selfie_video_recording_spc` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selfie_features_spc` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selfie_image_resolution_spc` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selfie_flash_spc_check` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `selfie_flash_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ram_type_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ram_size_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ram_available_space_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rom_type_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rom_size_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rom_available_space_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rom_card_slot_spc_check` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rom_card_slot_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `battery_type_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `capacity_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wireless_charging_spc_check` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wireless_charging_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `charging_spc` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quick_charging_spc_check` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quick_charging_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `placement_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `talk_time_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `music_play_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usb_type_c_spc_check` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usb_type_c_spc` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobilespectwos`
--

INSERT INTO `mobilespectwos` (`id`, `post_id`, `rear_camera_setup_spc`, `rear_image_resolution_spc`, `rear_resolution_spc`, `rear_sensor_spc`, `rear_settings_spc`, `rear_shooting_modes_spc`, `rear_autofocus_spc_check`, `rear_autofocus_spc`, `rear_flash_spc_check`, `rear_flash_spc`, `rear_ois_spc`, `rear_features_spc`, `rear_video_resolution_spc`, `selfie_camera_setup_spc`, `selfie_autofocus_spc_check`, `selfie_autofocus_spc`, `selfie_resolution_spc`, `selfie_video_recording_spc`, `selfie_features_spc`, `selfie_image_resolution_spc`, `selfie_flash_spc_check`, `selfie_flash_spc`, `ram_type_spc`, `ram_size_spc`, `ram_available_space_spc`, `rom_type_spc`, `rom_size_spc`, `rom_available_space_spc`, `rom_card_slot_spc_check`, `rom_card_slot_spc`, `battery_type_spc`, `capacity_spc`, `wireless_charging_spc_check`, `wireless_charging_spc`, `charging_spc`, `quick_charging_spc_check`, `quick_charging_spc`, `placement_spc`, `talk_time_spc`, `music_play_spc`, `usb_type_c_spc_check`, `usb_type_c_spc`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-26 10:25:47', '2021-08-26 10:25:47'),
(3, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-26 17:58:20', '2021-08-26 17:58:20'),
(4, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-26 18:10:30', '2021-08-26 18:10:30'),
(5, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-26 18:30:29', '2021-08-26 18:30:29'),
(6, 6, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-26 18:31:37', '2021-08-26 18:31:37'),
(7, 7, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-26 19:29:00', '2021-08-26 19:29:00'),
(8, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-26 19:29:54', '2021-08-26 19:29:54'),
(9, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-26 19:31:54', '2021-08-26 19:31:54'),
(10, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-26 19:48:51', '2021-08-26 19:48:51'),
(11, 11, 'hdj', 'kajf', 'fgfg', 'fg', 'fgf', 'gfgfg', 'Yes', 'fgfg', 'Yes', 'sdfs', 'Yes', 'sfgsfg', 'sfgsfgsfg', 'sfgfsg', 'Yes', 'sfgfsg', 'sfg', 'sfg', 'sfg', 'fgfg', 'Yes', 'sfgfg', 'adfer', 'qer', 'qerqer', 'rere', 'rerer', 'qer', 'Yes', 'qerer', 'tghj', 'jj', 'Yes', 'kk', 'fsgsfgsfg', 'Yes', 'hh', 'sfgsfg', 'ttr', 'tr', 'Yes', 'ccc', '2021-08-26 20:33:48', '2021-08-26 20:33:48'),
(12, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-26 23:14:38', '2021-08-26 23:14:38'),
(13, 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-25 21:44:00', '2021-09-25 21:44:00'),
(14, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-26 02:00:20', '2021-09-26 02:00:20'),
(15, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-26 02:01:54', '2021-09-26 02:01:54'),
(16, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-09-26 02:04:27', '2021-09-26 02:04:27'),
(17, 17, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-10-04 08:20:33', '2021-10-04 08:20:33');

-- --------------------------------------------------------

--
-- Table structure for table `mobilevariants`
--

CREATE TABLE `mobilevariants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `variant_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `variant_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobilevariants`
--

INSERT INTO `mobilevariants` (`id`, `post_id`, `variant_name`, `variant_url`, `created_at`, `updated_at`) VALUES
(9, 11, '16GB storage, 6GB', 'uuuuuuuuu', '2021-09-11 02:34:34', '2021-09-11 02:34:34'),
(10, 11, 'Frist Variant', 'www.f-variant.com', '2021-09-11 02:34:34', '2021-09-11 02:34:34');

-- --------------------------------------------------------

--
-- Table structure for table `mobilevideos`
--

CREATE TABLE `mobilevideos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `video_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobilevideos`
--

INSERT INTO `mobilevideos` (`id`, `post_id`, `video_url`, `created_at`, `updated_at`) VALUES
(29, 12, 'qqqqqqqqqq', '2021-08-27 05:36:25', '2021-08-27 05:36:25'),
(30, 12, 'youtube.com', '2021-08-27 05:36:25', '2021-08-27 05:36:25'),
(35, 11, 'qqqqqqqqqq', '2021-09-11 02:34:34', '2021-09-11 02:34:34'),
(36, 11, 'youtube.com', '2021-09-11 02:34:34', '2021-09-11 02:34:34'),
(37, 15, 'https://www.youtube.com/watch?v=Q81smLKp1Ws', '2022-01-19 22:24:26', '2022-01-19 22:24:26');

-- --------------------------------------------------------

--
-- Table structure for table `mobiratingnames`
--

CREATE TABLE `mobiratingnames` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rating_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobiratingnames`
--

INSERT INTO `mobiratingnames` (`id`, `rating_name`, `created_by`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Battery', 'kamrul1', NULL, '2021-08-26 10:23:25', '2021-08-26 10:23:25'),
(2, 'Camera', 'kamrul1', NULL, '2021-08-26 10:23:27', '2021-08-26 10:23:27'),
(3, 'Resolution', 'kamrul1', NULL, '2021-08-26 10:23:29', '2021-08-26 10:23:29');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `titles`
--

CREATE TABLE `titles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `key_word` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `titles`
--

INSERT INTO `titles` (`id`, `title`, `meta`, `key_word`, `created_at`, `updated_at`) VALUES
(1, 'Mobile BD', 'Mobile BD', 'Mobile BD', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_user_name_unique` (`user_name`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `favicons`
--
ALTER TABLE `favicons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `favicons_favicon_unique` (`favicon`),
  ADD UNIQUE KEY `favicons_logo_unique` (`logo`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobibrandnames`
--
ALTER TABLE `mobibrandnames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobicatnames`
--
ALTER TABLE `mobicatnames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobilecategories`
--
ALTER TABLE `mobilecategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mobilecategories_post_id_foreign` (`post_id`),
  ADD KEY `mobilecategories_category_id_foreign` (`category_id`);

--
-- Indexes for table `mobilecomments`
--
ALTER TABLE `mobilecomments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mobilecomments_post_id_foreign` (`post_id`);

--
-- Indexes for table `mobileimages`
--
ALTER TABLE `mobileimages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mobileimages_post_id_foreign` (`post_id`);

--
-- Indexes for table `mobileoffers`
--
ALTER TABLE `mobileoffers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mobileoffers_post_id_foreign` (`post_id`);

--
-- Indexes for table `mobileposts`
--
ALTER TABLE `mobileposts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobileratings`
--
ALTER TABLE `mobileratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mobileratings_post_id_foreign` (`post_id`),
  ADD KEY `mobileratings_rating_id_foreign` (`rating_id`);

--
-- Indexes for table `mobilespecones`
--
ALTER TABLE `mobilespecones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mobilespecones_post_id_foreign` (`post_id`);

--
-- Indexes for table `mobilespecthrees`
--
ALTER TABLE `mobilespecthrees`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mobilespecthrees_post_id_foreign` (`post_id`);

--
-- Indexes for table `mobilespectwos`
--
ALTER TABLE `mobilespectwos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mobilespectwos_post_id_foreign` (`post_id`);

--
-- Indexes for table `mobilevariants`
--
ALTER TABLE `mobilevariants`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mobilevariants_post_id_foreign` (`post_id`);

--
-- Indexes for table `mobilevideos`
--
ALTER TABLE `mobilevideos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mobilevideos_post_id_foreign` (`post_id`);

--
-- Indexes for table `mobiratingnames`
--
ALTER TABLE `mobiratingnames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `titles`
--
ALTER TABLE `titles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `titles_title_unique` (`title`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favicons`
--
ALTER TABLE `favicons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `mobibrandnames`
--
ALTER TABLE `mobibrandnames`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mobicatnames`
--
ALTER TABLE `mobicatnames`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mobilecategories`
--
ALTER TABLE `mobilecategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `mobilecomments`
--
ALTER TABLE `mobilecomments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mobileimages`
--
ALTER TABLE `mobileimages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `mobileoffers`
--
ALTER TABLE `mobileoffers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `mobileposts`
--
ALTER TABLE `mobileposts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `mobileratings`
--
ALTER TABLE `mobileratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;

--
-- AUTO_INCREMENT for table `mobilespecones`
--
ALTER TABLE `mobilespecones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `mobilespecthrees`
--
ALTER TABLE `mobilespecthrees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `mobilespectwos`
--
ALTER TABLE `mobilespectwos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `mobilevariants`
--
ALTER TABLE `mobilevariants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mobilevideos`
--
ALTER TABLE `mobilevideos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `mobiratingnames`
--
ALTER TABLE `mobiratingnames`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `titles`
--
ALTER TABLE `titles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mobilecategories`
--
ALTER TABLE `mobilecategories`
  ADD CONSTRAINT `mobilecategories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `mobicatnames` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mobilecategories_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `mobileposts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mobilecomments`
--
ALTER TABLE `mobilecomments`
  ADD CONSTRAINT `mobilecomments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `mobileposts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mobileimages`
--
ALTER TABLE `mobileimages`
  ADD CONSTRAINT `mobileimages_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `mobileposts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mobileoffers`
--
ALTER TABLE `mobileoffers`
  ADD CONSTRAINT `mobileoffers_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `mobileposts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mobileratings`
--
ALTER TABLE `mobileratings`
  ADD CONSTRAINT `mobileratings_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `mobileposts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mobileratings_rating_id_foreign` FOREIGN KEY (`rating_id`) REFERENCES `mobiratingnames` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mobilespecones`
--
ALTER TABLE `mobilespecones`
  ADD CONSTRAINT `mobilespecones_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `mobileposts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mobilespecthrees`
--
ALTER TABLE `mobilespecthrees`
  ADD CONSTRAINT `mobilespecthrees_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `mobileposts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mobilespectwos`
--
ALTER TABLE `mobilespectwos`
  ADD CONSTRAINT `mobilespectwos_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `mobileposts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mobilevariants`
--
ALTER TABLE `mobilevariants`
  ADD CONSTRAINT `mobilevariants_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `mobileposts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mobilevideos`
--
ALTER TABLE `mobilevideos`
  ADD CONSTRAINT `mobilevideos_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `mobileposts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
