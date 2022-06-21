-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2022 at 07:20 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tonics`
--

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `Phone`, `Amount`, `password`, `branch`, `status`, `created_at`, `updated_at`) VALUES
(1, '0743196599', '140000', '1234', 'Airtel Money', '', NULL, '2022-06-21 23:32:56');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `computer_id` bigint(20) UNSIGNED NOT NULL,
  `Quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `computer_id`, `Quantity`, `Total`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 2, '1', '20000', 'Adeded', '2022-06-21 19:44:49', '2022-06-21 19:44:49'),
(2, 3, 1, '1', '20000', 'Adeded', '2022-06-21 20:16:15', '2022-06-21 20:16:15'),
(3, 6, 1, '1', '20000', 'Adeded', '2022-06-21 20:59:54', '2022-06-21 20:59:54'),
(4, 7, 3, '1', '20000', 'Adeded', '2022-06-21 23:57:31', '2022-06-21 23:57:31');

-- --------------------------------------------------------

--
-- Table structure for table `checkouts`
--

CREATE TABLE `checkouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `computer_id` bigint(20) UNSIGNED NOT NULL,
  `Quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `checkouts`
--

INSERT INTO `checkouts` (`id`, `user_id`, `computer_id`, `Quantity`, `Amount`, `Phone`, `branch`, `Region`, `district`, `status`, `created_at`, `updated_at`) VALUES
(1, 3, 2, '1', '20000', '0743196599', 'Airtel Money', 'dar', 'Nyamagana', 'Payed', '2022-06-21 23:27:15', '2022-06-21 23:27:15'),
(2, 3, 1, '1', '20000', '0743196599', 'Airtel Money', 'dar', 'Nyamagana', 'Payed', '2022-06-21 23:27:15', '2022-06-21 23:27:15'),
(3, 3, 2, '1', '20000', '0743196599', 'Airtel Money', 'mwanza', 'Nyamagana', 'Payed', '2022-06-21 23:29:33', '2022-06-21 23:29:33'),
(4, 3, 1, '1', '20000', '0743196599', 'Airtel Money', 'mwanza', 'Nyamagana', 'Payed', '2022-06-21 23:29:33', '2022-06-21 23:29:33'),
(5, 3, 2, '1', '20000', '0743196599', 'Airtel Money', 'mwanza', 'Nyamagana', 'Payed', '2022-06-21 23:31:25', '2022-06-21 23:31:25'),
(6, 3, 1, '1', '20000', '0743196599', 'Airtel Money', 'mwanza', 'Nyamagana', 'Payed', '2022-06-21 23:31:25', '2022-06-21 23:31:25'),
(7, 3, 2, '1', '20000', '0743196599', 'Airtel Money', 'mwanza', 'Nyamagana', 'Payed', '2022-06-21 23:32:55', '2022-06-21 23:32:55'),
(8, 3, 1, '1', '20000', '0743196599', 'Airtel Money', 'mwanza', 'Nyamagana', 'Payed', '2022-06-21 23:32:55', '2022-06-21 23:32:55');

-- --------------------------------------------------------

--
-- Table structure for table `computers`
--

CREATE TABLE `computers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hdd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `processor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hali` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `generation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picha` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `computers`
--

INSERT INTO `computers` (`id`, `category`, `ram`, `hdd`, `processor`, `hali`, `generation`, `brand`, `picha`, `price`, `status`, `created_at`, `updated_at`) VALUES
(1, 'laptop', '8GB', '500GB', 'Core i3 Intel', 'used', 'G2', 'Apple', 'computer/1655792844.jpg', '200000', 'Added Computer', '2022-06-21 13:27:24', '2022-06-21 13:27:24'),
(2, 'Desktop', '8GB', '500GB', 'Core i3 Intel', 'used', 'G2', 'Lenovo', 'computer/1655796681.jpg', '100000', 'Added Computer', '2022-06-21 14:31:21', '2022-06-21 14:31:21'),
(3, 'laptop', '4GB', '500GB', 'Core i3 Intel', 'Mpya', 'G1', 'Apple', 'computer/1655830210.jpg', '20000', 'Added Computer', '2022-06-21 23:50:10', '2022-06-21 23:50:10');

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
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_06_21_031916_create_users_table', 1),
(3, '2022_06_21_032209_create_computers_table', 1),
(4, '2022_06_21_032528_create_carts_table', 1),
(5, '2022_06_21_032937_create_checkouts_table', 1),
(6, '2022_06_21_033319_create_banks_table', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `phone`, `password`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', '0743196578', '1234', 'admin', NULL, NULL),
(2, 'juma', '0745231876', '1234', 'user', '2022-06-21 13:37:21', '2022-06-21 13:37:21'),
(3, 'parajazi', '0987654322', '1234', 'user', '2022-06-21 13:41:22', '2022-06-21 13:41:22'),
(4, 'jafari', '0743196588', '1234', 'user', '2022-06-21 20:23:20', '2022-06-21 20:23:20'),
(6, 'Shafii', '0743196589', '1234', 'user', '2022-06-21 20:56:54', '2022-06-21 20:56:54'),
(7, 'mtei', '0743196576', '1234', 'user', '2022-06-21 23:55:40', '2022-06-21 23:55:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_computer_id_foreign` (`computer_id`);

--
-- Indexes for table `checkouts`
--
ALTER TABLE `checkouts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `checkouts_user_id_foreign` (`user_id`),
  ADD KEY `checkouts_computer_id_foreign` (`computer_id`);

--
-- Indexes for table `computers`
--
ALTER TABLE `computers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `checkouts`
--
ALTER TABLE `checkouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `computers`
--
ALTER TABLE `computers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_computer_id_foreign` FOREIGN KEY (`computer_id`) REFERENCES `computers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `checkouts`
--
ALTER TABLE `checkouts`
  ADD CONSTRAINT `checkouts_computer_id_foreign` FOREIGN KEY (`computer_id`) REFERENCES `computers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `checkouts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
