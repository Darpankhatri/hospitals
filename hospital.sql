-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2022 at 10:44 AM
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
(2, 'Conan Espinoza', 'xyguniso@mailinator.com', '+1 (777) 489-9831', 1, 0, '2022-11-19 05:37:43', '2022-11-19 05:37:43', 'Non corporis sit ma', 'Id in aliquam beatae');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
(1, 'Angel ear droper', 'uploads/product/image_2022-10-23_105112996_1666504296.png', 65, 12, 'Sed porttitor lectus nibh. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Quisque velit nisi, pretium ut lacinia in, elementum id enim.', 1, 0, '2022-10-22 09:42:56', '2022-11-19 02:50:21'),
(2, 'Long rectangel', 'uploads/product/image_2022-10-23_105217334_1666504355.png', 70, 22, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero blanditiis quo fugiat magni accusamus exercitationem! Voluptate, deleniti quae. Libero iusto minus, nulla excepturi quidem reprehenderit blanditiis eligendi exercitationem nesciunt ad! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi temporibus deserunt mollitia natus esse, sunt fuga quos. Autem quasi error quisquam architecto fuga suscipit atque voluptatibus nobis impedit nulla. Officia ercitationem. Lorem ipsum dolor, sit amet consectetur adipisicing elit.', 1, 0, '2022-10-22 09:42:56', '2022-11-19 02:50:44'),
(3, 'Medical vial', 'uploads/product/image_2022-10-23_105408604_1666504450.png', 78, 90, ' Officia quaerat maxime laudantium obcaecati qui? Magni officiis fugit, dolorem mollitia eius similique accusantium nostrum possimus consectetur laudantium distinctio aliquid delectus assumenda? Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime earum deleniti, quaerat rerum corporis quis iste veritatis', 1, 0, '2022-10-22 13:13:18', '2022-11-19 02:51:02'),
(4, 'Violet', 'uploads/product/image_2022-10-23_105504040_1666504506.png', 126, 30, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis repellat tempora aliquid exercitationem. Vel, dicta quos. Velit magnam, eius unde ullam, distinctio atque aperiam obcaecati ipsam id, inventore consectetur laudantium repellat tempora aliquid exercitationem. Vel, dicta quos. Velit magnam, eius unde ullam. Lorem ipsum dolor sit amet consectetur adipisicing elit.', 1, 0, '2022-10-22 14:22:59', '2022-11-19 02:48:33'),
(5, 'Skin care cream', 'uploads/product/image_2022-10-23_105719302_1666504659.png', 50, 26, 'Sed porttitor lectus nibh. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Quisque velit nisi, pretium ut lacinia in, elementum id enim.', 1, 0, '2022-10-23 00:57:39', '2022-11-19 02:48:57'),
(6, 'Hazi multi vitamin', 'uploads/product/product-7_1666679121.jpg', 56, 41, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero blanditiis quo fugiat magni accusamus exercitationem! Voluptate, deleniti quae. Libero iusto minus, nulla excepturi quidem reprehenderit blanditiis eligendi exercitationem nesciunt ad! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi temporibus deserunt mollitia natus esse, sunt fuga quos. ', 1, 0, '2022-10-25 01:25:21', '2022-11-19 02:49:29'),
(7, 'Ampoule', 'uploads/product/product-8_1666679154.jpg', 40, 20, ' Officia quaerat maxime laudantium obcaecati qui? Magni officiis fugit, dolorem mollitia eius similique accusantium nostrum possimus consectetur laudantium distinctio aliquid delectus assumenda? Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime earum deleniti, quaerat rerum corporis quis iste veritatis', 1, 0, '2022-10-25 01:25:54', '2022-11-19 02:51:29'),
(8, 'Healthy vitamin', 'uploads/product/product-9_1666679194.jpg', 58, 31, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero blanditiis quo fugiat magni accusamus exercitationem! Voluptate, deleniti quae. Libero iusto minus, nulla excepturi quidem reprehenderit blanditiis eligendi exercitationem nesciunt ad! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi temporibus deserunt mollitia natus esse, sunt fuga quos. ', 1, 0, '2022-10-25 01:26:34', '2022-11-19 02:51:53'),
(9, 'Special bacuum tube', 'uploads/product/product-10_1666679235.jpg', 43, 14, 'Sed porttitor lectus nibh. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Quisque velit nisi, pretium ut lacinia in, elementum id enim.', 1, 0, '2022-10-25 01:27:15', '2022-11-19 02:52:13'),
(10, 'Deodo lequide', 'uploads/product/product-11_1666679276.jpg', 61, 13, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis repellat tempora aliquid exercitationem. Vel, dicta quos. Velit magnam, eius unde ullam, distinctio atque aperiam obcaecati ipsam id, inventore consectetur laudantium repellat tempora aliquid exercitationem. Vel, dicta quos. Velit magnam, eius unde ullam. Lorem ipsum dolor sit amet consectetur adipisicing elit. ', 1, 0, '2022-10-25 01:27:56', '2022-11-19 02:53:03'),
(11, 'MK nose droper', 'uploads/product/product-12_1666679342.jpg', 39, 30, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis repellat tempora aliquid exercitationem. Vel, dicta quos. Velit magnam, eius unde ullam, distinctio atque aperiam obcaecati ipsam id, inventore consectetur laudantium repellat tempora aliquid exercitationem. Vel, dicta quos. Velit magnam, eius unde ullam. Lorem ipsum dolor sit amet consectetur adipisicing elit. ', 1, 0, '2022-10-25 01:29:02', '2022-11-19 02:52:46');

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
(1, 'new@gmail.com', 1, 0, '2022-11-18 14:07:34', '2022-11-18 14:07:34'),
(2, 'ziqejej@mailinator.com', 1, 0, '2022-11-18 14:08:16', '2022-11-18 14:09:56');

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
(1, 'Admin', 'admin@project.com', 'admin/assets/uploads/user/1659302696_1661179218.jpg', NULL, 'address', '2001-06-14', 1, NULL, '$2y$10$bWIihWLmugzT/wVvmBhZUOFhP3XuPubKwO6PdYIhzlcZQWqms/Fdy', NULL, '2022-10-07 02:48:33', '2022-10-10 12:35:41');

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
