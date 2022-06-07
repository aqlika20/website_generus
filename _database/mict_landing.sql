-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2022 at 11:04 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mict_landing`
--

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_aligntment` int(1) NOT NULL,
  `created_at` timestamp,
  `updated_at` timestamp
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `code`, `name`, `image`, `description`, `url`, `image_aligntment`, `created_at`, `updated_at`) VALUES
(3, 'thmlyq', 'EL-MARC', 'fiver.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nisl nulla, mattis vel lobortis in, imperdiet quis erat. Nullam commodo facilisis dui, vitae consectetur ipsum pretium in. Pellentesque dui massa, mollis non elit eu, ornare finibus sapien. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer bibendum sem ut porta mattis. Cras fringilla cursus mauris vitae condimentum. Vivamus sollicitudin fermentum odio, ac consectetur tortor varius ac. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc non sem turpis. In enim risus, blandit in sollicitudin ut, ultrices sit amet lorem. Integer pulvinar volutpat dapibus. Aliquam erat volutpat. Nam quis accumsan nibh.', 'https://macantech.asia/', 1, '2022-06-06 00:07:58', '2022-06-07 00:39:26'),
(4, 'nxjrqy', 'ALBOOM', 'genshin-impact-pax-east-2020.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nisl nulla, mattis vel lobortis in, imperdiet quis erat. Nullam commodo facilisis dui, vitae consectetur ipsum pretium in. Pellentesque dui massa, mollis non elit eu, ornare finibus sapien. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer bibendum sem ut porta mattis. Cras fringilla cursus mauris vitae condimentum. Vivamus sollicitudin fermentum odio, ac consectetur tortor varius ac. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc non sem turpis. In enim risus, blandit in sollicitudin ut, ultrices sit amet lorem. Integer pulvinar volutpat dapibus. Aliquam erat volutpat. Nam quis accumsan nibh.\r\n\r\nIndonesia adalah negara kepulauan terbesar di dunia dengan sekitar 17.508 pulau dan garis pantai 54.716 km di mana memberikan peluang besar bagi budidaya laut. Ini akan menguntungkan pulau-pulau luar dan daerah pantai terpencil dan karenanya mempersempit pendapatan dan kesenjangan regional di dalam negeri.\r\n\r\nMariculture adalah komponen penting untuk produksi akuakultur di Indonesia, dengan total produksi mencapai 9.034.756 ton (US $ 1.951.097,72) pada tahun 2014 dan 579.463 orang terlibat dalam kegiatan budidaya.', 'https://macantech.asia/', 2, '2022-06-06 17:46:27', '2022-06-07 00:39:57');

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
(1, '2014_10_12_000000_create_roles_table', 1),
(2, '2014_10_12_100000_create_users_table', 1),
(3, '2014_10_12_200000_create_password_resets_table', 1),
(4, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(5, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(6, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(7, '2016_06_01_000004_create_oauth_clients_table', 1),
(8, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(15, '2014_10_12_300000_create_scan_result_lists_table', 2),
(16, '2014_10_12_400000_create_scan_result_details_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `navigations`
--

CREATE TABLE `navigations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `self_url` int(1) NOT NULL,
  `url` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contents_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp,
  `updated_at` timestamp
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `navigations`
--

INSERT INTO `navigations` (`id`, `name`, `icon`, `self_url`, `url`, `contents_id`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'bx bx-home', 2, '#hero', NULL, '2022-06-05 20:44:06', '2022-06-05 20:44:06'),
(2, 'Tentang SATREPS', 'bx bx-filter', 2, '#about', NULL, '2022-06-05 20:44:37', '2022-06-05 20:44:37'),
(3, 'Struktur Organisasi', 'bx bx-vector', 2, '#organisasi', NULL, '2022-06-05 20:45:11', '2022-06-05 20:45:11'),
(4, 'Situs Uji', 'bx bx-map', 2, '#situs', NULL, '2022-06-05 20:45:37', '2022-06-05 20:45:37'),
(5, 'Monitoring', 'bx bx-table', 2, 'https://mict-monitoring.macantech.asia/', NULL, '2022-06-05 20:46:15', '2022-06-05 20:46:15'),
(13, 'EL-MARC', 'bx bxs-bank', 1, '#thmlyq', NULL, '2022-06-06 00:10:23', '2022-06-07 00:41:31'),
(14, 'ALBOOM', 'fab fa-angellist', 1, '#nxjrqy', NULL, '2022-06-06 17:48:08', '2022-06-07 00:41:50');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp,
  `updated_at` timestamp
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2021-04-14 07:38:22', '2022-04-28 03:39:19'),
(2, 'Staff', '2021-04-14 07:38:29', '2022-04-28 03:39:16');

-- --------------------------------------------------------

--
-- Table structure for table `settings_about`
--

CREATE TABLE `settings_about` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `main_image` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `data_json` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp,
  `updated_at` timestamp
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings_about`
--

INSERT INTO `settings_about` (`id`, `main_image`, `main_description`, `data_json`, `created_at`, `updated_at`) VALUES
(1, 'img1.jpg', 'Akuakultur laut (Mariculture) diharapkan dapat memenuhi permintaan produk ikan yang meningkat tidak hanya di Indonesia tetapi juga di dunia, terutama di bawah peningkatan sederhana penangkapan ikan liar.\r\n\r\nIndonesia adalah negara kepulauan terbesar di dunia dengan sekitar 17.508 pulau dan garis pantai 54.716 km di mana memberikan peluang besar bagi budidaya laut. Ini akan menguntungkan pulau-pulau luar dan daerah pantai terpencil dan karenanya mempersempit pendapatan dan kesenjangan regional di dalam negeri.\r\n\r\nMariculture adalah komponen penting untuk produksi akuakultur di Indonesia, dengan total produksi mencapai 9.034.756 ton (US $ 1.951.097,72) pada tahun 2014 dan 579.463 orang terlibat dalam kegiatan budidaya.', NULL, '2022-06-06 23:34:25', '2022-06-06 23:34:25');

-- --------------------------------------------------------

--
-- Table structure for table `settings_address`
--

CREATE TABLE `settings_address` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp,
  `updated_at` timestamp
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings_address`
--

INSERT INTO `settings_address` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'PUSAT RISET PERIKANAN', 'Jl. Pasir Putih II No.3, RT.4/RW.10, Ancol, Kec. Pademangan, Kota Jakarta Utara, Daerah Khusus Ibukota Jakarta 14430\r\nTelp. (021) 3519070 EXT. 7433 – Fax. (021) 3864293\r\nEmail : humas@kkp.go.id\r\nCall Center KKP: 141', '2022-06-06 17:36:59', '2022-06-06 17:42:12');

-- --------------------------------------------------------

--
-- Table structure for table `settings_banner`
--

CREATE TABLE `settings_banner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp,
  `updated_at` timestamp
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings_banner`
--

INSERT INTO `settings_banner` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'SATREPS', 'Mariculture adalah komponen penting untuk produksi akuakultur di Indonesia dengan total produksi mencapai 9.034.756 ton (US $ 1.951.097,72) pada tahun 2014 dan 579.463 orang terlibat dalam kegiatan budidaya', '2022-06-07 00:04:42', '2022-06-06 17:18:22');

-- --------------------------------------------------------

--
-- Table structure for table `settings_organization_structure`
--

CREATE TABLE `settings_organization_structure` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp,
  `updated_at` timestamp
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings_organization_structure`
--

INSERT INTO `settings_organization_structure` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'structure.png', '2022-06-06 17:23:51', '2022-06-06 17:33:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles_id` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp,
  `updated_at` timestamp
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `roles_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@tes.tes', NULL, '$2y$10$7g.yQprW/Yw2FJMcMoI06u8QvvNlGNrLYpwTlLJ9qUf2dNsEHHqp.', 1, NULL, '2021-04-14 00:42:15', '2022-04-28 03:39:09'),
(2, 'Staff', 'staff@tes.tes', NULL, '$2y$10$v/ZngcrDSN0OiJDZx3IYCO//RNnNNZ3o2Er7u8nfynlMTpfyY5wEK', 2, 'BwBNiCCm0Y5DidZv8N6LkDh0nr4DZd1Wz5U8YA1T0jXfSemrkhJ6moAF3WDH', '2021-04-14 00:42:15', '2022-04-28 03:39:05'),
(5, 'kaka', 'aqlika05@gmail.com', NULL, '$2y$10$791qnx8XyB9x9eCHMsuDBuxmHG74pY41Ha4eXA2Cfrh6GYxbuA5Pq', 1, NULL, '2022-06-07 01:15:57', '2022-06-07 01:22:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navigations`
--
ALTER TABLE `navigations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FOREIGN` (`contents_id`) USING BTREE;

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `settings_about`
--
ALTER TABLE `settings_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings_address`
--
ALTER TABLE `settings_address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings_banner`
--
ALTER TABLE `settings_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings_organization_structure`
--
ALTER TABLE `settings_organization_structure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_roles_id_foreign` (`roles_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `navigations`
--
ALTER TABLE `navigations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings_about`
--
ALTER TABLE `settings_about`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings_address`
--
ALTER TABLE `settings_address`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings_banner`
--
ALTER TABLE `settings_banner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings_organization_structure`
--
ALTER TABLE `settings_organization_structure`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `navigations`
--
ALTER TABLE `navigations`
  ADD CONSTRAINT `navigations_ibfk_1` FOREIGN KEY (`contents_id`) REFERENCES `contents` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_roles_id_foreign` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
