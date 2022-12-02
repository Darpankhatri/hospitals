-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2022 at 08:41 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `id` int(11) NOT NULL,
  `name` varchar(512) NOT NULL,
  `slug` varchar(512) NOT NULL,
  `value` varchar(512) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `name`, `slug`, `value`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Contact Number', 'contactnumber', '1-885-665-2022', 1, 0, '2022-10-12 14:45:03', '2022-10-23 07:51:40'),
(2, 'Web Email', 'webemail', 'medicoz@health.com', 1, 0, '2022-10-12 14:45:03', '2022-10-23 07:51:40'),
(3, 'Address', 'address', '177 Devon Lane Miami, MK 3355', 1, 0, '2022-10-12 14:45:03', '2022-10-23 07:51:40');

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
-- Table structure for table `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `name` varchar(512) NOT NULL,
  `image` varchar(512) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logo`
--

INSERT INTO `logo` (`id`, `name`, `image`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'logo', 'uploads/logos/image_2022-10-14_154641111_1665744403.png', 0, 0, '2022-10-14 05:46:43', '2022-10-16 13:53:43'),
(2, 'favicon', 'uploads/logos/favicon_1665745146.ico', 0, 0, '2022-10-14 05:59:06', '2022-10-23 07:49:51'),
(3, 'logo', 'uploads/logos/image_2022-10-16_235341045_1665946423.png', 0, 0, '2022-10-16 13:53:43', '2022-10-23 07:48:46'),
(4, 'logo', 'uploads/logos/image_2022-10-23_174844858_1666529326.png', 1, 0, '2022-10-23 07:48:46', '2022-10-23 07:48:46'),
(5, 'favicon', 'uploads/logos/favicon_1666529391.png', 1, 0, '2022-10-23 07:49:51', '2022-10-23 07:49:51');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(512) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `subject` varchar(512) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `phone`, `is_active`, `is_deleted`, `created_at`, `updated_at`, `subject`, `message`) VALUES
(1, 'Colby Buckner', 'xoqudur@mailinator.com', '+1 (315) 998-6646', 1, 0, '2022-11-18 14:08:37', '2022-11-18 14:08:37', 'Velit dicta quia qui', 'Voluptatibus lorem N'),
(2, 'Conan Espinoza', 'xyguniso@mailinator.com', '+1 (777) 489-9831', 1, 0, '2022-11-19 05:37:43', '2022-11-19 05:37:43', 'Non corporis sit ma', 'Id in aliquam beatae'),
(3, 'Bevis Cotton', 'riluzykax@mailinator.com', '+1 (198) 634-7145', 1, 0, '2022-11-20 23:46:05', '2022-11-20 23:46:05', 'Dolorem excepturi ni', 'Qui et voluptatem s'),
(4, 'Celeste Myers', 'fiwohyzo@mailinator.com', '+1 (857) 895-7347', 1, 0, '2022-11-21 04:04:45', '2022-11-21 04:04:45', 'Suscipit consectetur', 'Sit quia cillum lab'),
(5, 'Celeste Myers', 'fiwohyzo@mailinator.com', '+1 (857) 895-7347', 1, 0, '2022-11-21 04:05:06', '2022-11-21 04:05:06', 'Suscipit consectetur', 'Sit quia cillum lab'),
(6, 'Lane William', 'jyki@mailinator.com', '+1 (527) 733-8082', 1, 0, '2022-11-21 04:07:37', '2022-11-21 04:07:37', 'Molestias deserunt n', 'Nemo praesentium ess'),
(7, 'Aquila Sargent', 'qirow@mailinator.com', '+1 (217) 833-6994', 1, 0, '2022-11-21 04:35:14', '2022-11-21 04:35:14', 'Quia in aut blanditi', 'Reprehenderit harum'),
(8, 'Penelope Carpenter', 'vyfuwiba@mailinator.com', '+1 (933) 383-5676', 1, 0, '2022-11-22 01:06:14', '2022-11-22 01:06:14', 'Quam inventore aliqu', 'Voluptatem deleniti'),
(9, 'Brian Morrow', 'xizes@mailinator.com', '+1 (785) 393-8378', 1, 0, '2022-12-02 01:59:56', '2022-12-02 01:59:56', 'Accusamus quo beatae', 'Omnis anim hic disti');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(512) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `total` int(11) NOT NULL,
  `address` varchar(512) NOT NULL,
  `state` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zip` int(11) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `email`, `phone`, `total`, `address`, `state`, `city`, `zip`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(4, 4, 'Madaline Schultz', 'vopetil@mailinator.com', '+1 (478) 111-7222', 323, 'In incididunt nihil', 'Accusamus esse anim', 'Vero perspiciatis v', 82323, 1, 0, '2022-12-02 01:37:42', '2022-12-02 01:37:42'),
(5, 4, 'Ina Wright', 'sahupotoko@mailinator.com', '+1 (724) 902-5319', 292, 'Quidem saepe ex fugi', 'Sed dolore expedita', 'Quo aut fuga Qui ne', 72432, 1, 0, '2022-12-02 01:39:54', '2022-12-02 01:39:54'),
(6, 4, 'Halla Avila', 'nupifite@mailinator.com', '+1 (731) 778-4995', 350, 'Odio vel exercitatio', 'Anim distinctio Sed', 'Et exercitationem do', 42699, 1, 0, '2022-12-02 01:50:35', '2022-12-02 01:50:35'),
(7, 4, 'Halla Avila', 'nupifite@mailinator.com', '+1 (731) 778-4995', 0, 'Odio vel exercitatio', 'Anim distinctio Sed', 'Et exercitationem do', 42699, 1, 0, '2022-12-02 01:53:29', '2022-12-02 01:53:29');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `user_id`, `product_id`, `order_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(3, 4, 2, 4, 2, 70, '2022-12-02 01:37:42', '2022-12-02 01:37:42'),
(4, 4, 10, 4, 3, 61, '2022-12-02 01:37:42', '2022-12-02 01:37:42'),
(5, 4, 4, 5, 2, 126, '2022-12-02 01:39:54', '2022-12-02 01:39:54'),
(6, 4, 7, 5, 1, 40, '2022-12-02 01:39:54', '2022-12-02 01:39:54'),
(7, 4, 7, 6, 1, 40, '2022-12-02 01:50:35', '2022-12-02 01:50:35'),
(8, 4, 8, 6, 1, 58, '2022-12-02 01:50:35', '2022-12-02 01:50:35'),
(9, 4, 4, 6, 2, 126, '2022-12-02 01:50:35', '2022-12-02 01:50:35');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(512) NOT NULL,
  `image` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `description` text NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `image`, `price`, `stock`, `description`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Angel ear droper', 'uploads/product/image_2022-10-23_105112996_1666504296.png', 65, 12, 'Sed porttitor lectus nibh. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Quisque velit nisi, pretium ut lacinia in, elementum id enim.', 0, 0, '2022-10-22 09:42:56', '2022-11-27 22:21:57'),
(2, 'Long rectangel', 'uploads/product/image_2022-10-23_105217334_1666504355.png', 70, 20, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero blanditiis quo fugiat magni accusamus exercitationem! Voluptate, deleniti quae. Libero iusto minus, nulla excepturi quidem reprehenderit blanditiis eligendi exercitationem nesciunt ad! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi temporibus deserunt mollitia natus esse, sunt fuga quos. Autem quasi error quisquam architecto fuga suscipit atque voluptatibus nobis impedit nulla. Officia ercitationem. Lorem ipsum dolor, sit amet consectetur adipisicing elit.', 1, 0, '2022-10-22 09:42:56', '2022-12-02 01:37:42'),
(3, 'Medical vial', 'uploads/product/image_2022-10-23_105408604_1666504450.png', 78, 95, 'Officia quaerat maxime laudantium obcaecati qui? Magni officiis fugit, dolorem mollitia eius similique accusantium nostrum possimus consectetur laudantium distinctio aliquid delectus assumenda? Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime earum deleniti, quaerat rerum corporis quis iste veritatis', 1, 0, '2022-10-22 13:13:18', '2022-11-27 22:25:55'),
(4, 'Violet', 'uploads/product/image_2022-10-23_105504040_1666504506.png', 126, 26, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis repellat tempora aliquid exercitationem. Vel, dicta quos. Velit magnam, eius unde ullam, distinctio atque aperiam obcaecati ipsam id, inventore consectetur laudantium repellat tempora aliquid exercitationem. Vel, dicta quos. Velit magnam, eius unde ullam. Lorem ipsum dolor sit amet consectetur adipisicing elit.', 1, 0, '2022-10-22 14:22:59', '2022-12-02 01:50:35'),
(5, 'Skin care cream', 'uploads/product/image_2022-10-23_105719302_1666504659.png', 50, 26, 'Sed porttitor lectus nibh. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Quisque velit nisi, pretium ut lacinia in, elementum id enim.', 0, 0, '2022-10-23 00:57:39', '2022-11-27 08:57:45'),
(6, 'Hazi multi vitamin', 'uploads/product/product-7_1666679121.jpg', 56, 41, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero blanditiis quo fugiat magni accusamus exercitationem! Voluptate, deleniti quae. Libero iusto minus, nulla excepturi quidem reprehenderit blanditiis eligendi exercitationem nesciunt ad! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi temporibus deserunt mollitia natus esse, sunt fuga quos. ', 0, 0, '2022-10-25 01:25:21', '2022-11-27 22:20:12'),
(7, 'Ampoule', 'uploads/product/product-8_1666679154.jpg', 40, 18, ' Officia quaerat maxime laudantium obcaecati qui? Magni officiis fugit, dolorem mollitia eius similique accusantium nostrum possimus consectetur laudantium distinctio aliquid delectus assumenda? Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime earum deleniti, quaerat rerum corporis quis iste veritatis', 1, 0, '2022-10-25 01:25:54', '2022-12-02 01:50:35'),
(8, 'Healthy vitamin', 'uploads/product/product-9_1666679194.jpg', 58, 30, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero blanditiis quo fugiat magni accusamus exercitationem! Voluptate, deleniti quae. Libero iusto minus, nulla excepturi quidem reprehenderit blanditiis eligendi exercitationem nesciunt ad! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi temporibus deserunt mollitia natus esse, sunt fuga quos. ', 1, 0, '2022-10-25 01:26:34', '2022-12-02 01:50:35'),
(9, 'Special bacuum tube', 'uploads/product/product-10_1666679235.jpg', 43, 14, 'Sed porttitor lectus nibh. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Quisque velit nisi, pretium ut lacinia in, elementum id enim.', 1, 0, '2022-10-25 01:27:15', '2022-11-19 02:52:13'),
(10, 'Deodo lequide', 'uploads/product/product-11_1666679276.jpg', 61, 10, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis repellat tempora aliquid exercitationem. Vel, dicta quos. Velit magnam, eius unde ullam, distinctio atque aperiam obcaecati ipsam id, inventore consectetur laudantium repellat tempora aliquid exercitationem. Vel, dicta quos. Velit magnam, eius unde ullam. Lorem ipsum dolor sit amet consectetur adipisicing elit. ', 1, 0, '2022-10-25 01:27:56', '2022-12-02 01:37:42'),
(11, 'MK nose droper', 'uploads/product/product-12_1666679342.jpg', 39, 30, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis repellat tempora aliquid exercitationem. Vel, dicta quos. Velit magnam, eius unde ullam, distinctio atque aperiam obcaecati ipsam id, inventore consectetur laudantium repellat tempora aliquid exercitationem. Vel, dicta quos. Velit magnam, eius unde ullam. Lorem ipsum dolor sit amet consectetur adipisicing elit. ', 1, 0, '2022-10-25 01:29:02', '2022-11-19 02:52:46'),
(12, 'new1', 'uploads/product/product-9_1666679194.jpg', 34, 12, 'dfasdf', 1, 0, '2022-11-27 06:34:54', '2022-11-27 08:57:22'),
(13, '2nd', 'uploads/product/product-11_1666679276.jpg', 13, 24, 'fsdfsdf sdfsd fsdf sd f', 1, 0, '2022-11-27 06:35:47', '2022-11-27 06:35:47'),
(14, 'sdf', 'asdf', 24, 34, 'asdfsadfsdf', 1, 0, '2022-11-27 08:56:41', '2022-11-27 08:56:41');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `email`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'new@gmail.com', 1, 0, '2022-11-18 14:07:34', '2022-12-02 01:58:52'),
(2, 'ziqejej@mailinator.com', 1, 0, '2022-11-18 14:08:16', '2022-11-18 14:09:56'),
(3, 'om@gmail.com', 1, 0, '2022-11-20 23:04:01', '2022-11-20 23:04:01'),
(4, 'vinay@gmail.com', 1, 0, '2022-11-20 23:36:14', '2022-11-20 23:36:14'),
(5, 'om@gmial.com', 1, 0, '2022-11-21 02:14:16', '2022-11-27 10:24:00'),
(6, 'darpan@gmail.com', 1, 0, '2022-11-21 02:18:53', '2022-11-21 02:18:53'),
(7, 'rafay@gmail.com', 1, 0, '2022-11-21 23:57:45', '2022-11-21 23:57:45'),
(8, 'babu@gmail.com', 1, 0, '2022-12-02 01:59:26', '2022-12-02 01:59:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `role_id` int(11) NOT NULL DEFAULT 3,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image`, `gender`, `address`, `dob`, `role_id`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@project.com', 'admin/assets/uploads/user/1659302696_1661179218.jpg', NULL, 'address', '2001-06-14', 1, NULL, '$2y$10$bWIihWLmugzT/wVvmBhZUOFhP3XuPubKwO6PdYIhzlcZQWqms/Fdy', NULL, '2022-10-07 02:48:33', '2022-10-10 12:35:41'),
(3, 'test', 'test@gmail.com', NULL, NULL, NULL, NULL, 3, NULL, '$2y$10$csWcNpq7Hx/.eri3tq3FIep9jxOCgAtH42juZXtOKLXBZFVDwmnqi', NULL, '2022-11-30 15:36:06', '2022-11-30 15:36:06'),
(4, 'Darpan Kumar', 'darpankhatri817@gmail.com', NULL, NULL, NULL, NULL, 3, NULL, '$2y$10$5g4G2wDYiEzjRndkRKIVPO.kfQeZj4eQV783Gbg5.6WFDaJfMTAPW', NULL, '2022-12-01 14:59:14', '2022-12-01 14:59:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
