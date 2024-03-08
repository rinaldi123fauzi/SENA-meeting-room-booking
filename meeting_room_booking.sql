-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 08, 2024 at 09:41 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meeting_room_booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint UNSIGNED NOT NULL,
  `room_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `booked_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meeting_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'BOOKED',
  `start_time` timestamp NOT NULL,
  `end_time` timestamp NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `room_id`, `user_id`, `booked_by`, `email`, `meeting_description`, `status`, `start_time`, `end_time`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 6, 'Muhammad Naufal Hanan', 'naufalhanan92@gmail.com', 'Weekly meeting', 'CANCELED', '2024-02-29 10:55:20', '2024-02-29 15:54:46', NULL, '2024-03-01 02:01:21', NULL),
(2, 4, 5, 'User', 'user@user.com', 'Daily meeting', 'CANCELED', '2024-03-01 03:17:36', '2024-03-01 04:17:36', NULL, '2024-03-01 00:36:10', NULL),
(3, 2, 7, 'User Test', 'usertest@gmail.com', 'Entahlah', 'CANCELED', '2024-03-01 06:00:00', '2024-03-01 07:00:00', NULL, '2024-03-01 04:22:05', NULL),
(4, 3, 8, 'Slamet', 'slamet@outlook.com', 'Entahlah (2)', 'CANCELED', '2024-03-02 03:30:00', '2024-03-02 04:30:00', NULL, NULL, NULL),
(5, 3, 4, 'Admin', 'admin@admin.com', 'weekly meeting', 'BOOKED', '2024-02-29 06:00:00', '2024-02-29 07:30:00', '2024-02-29 16:38:48', '2024-02-29 16:38:48', NULL),
(6, 1, 4, 'Admin', 'admin@admin.com', 'Test meeting', 'BOOKED', '2024-03-01 07:00:00', '2024-03-01 08:00:00', '2024-03-01 01:56:06', '2024-03-01 01:56:06', NULL),
(7, 4, 4, 'Admin', 'admin@admin.com', 'Meeting test 2', 'BOOKED', '2024-03-01 06:10:00', '2024-03-01 07:10:00', '2024-03-01 02:11:16', '2024-03-01 02:11:16', NULL),
(8, 3, 4, 'Admin', 'admin@admin.com', 'test', 'BOOKED', '2024-03-01 07:17:00', '2024-03-01 08:17:00', '2024-03-01 07:19:39', '2024-03-01 07:19:39', NULL),
(9, 2, 4, 'Admin', 'admin@admin.com', 'IT Weekly meeting', 'BOOKED', '2024-03-06 03:00:00', '2024-03-06 04:00:00', '2024-03-06 15:33:14', '2024-03-06 15:33:14', NULL),
(10, 1, 8, 'Slamet', 'slamet@outlook.com', 'test meeting', 'BOOKED', '2024-03-07 09:00:00', '2024-03-07 10:00:00', '2024-03-07 08:04:32', '2024-03-07 08:04:32', NULL),
(11, 3, 8, 'Slamet', 'slamet@outlook.com', 'Test meeting 2', 'BOOKED', '2024-03-07 09:05:00', '2024-03-07 10:05:00', '2024-03-07 08:19:48', '2024-03-07 08:19:48', NULL),
(12, 4, 4, 'Admin', 'admin@admin.com', 'Test meeting 3', 'CANCELED', '2024-03-08 03:00:00', '2024-03-08 04:00:00', '2024-03-07 17:03:01', '2024-03-07 17:04:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `buildings`
--

CREATE TABLE `buildings` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity` int NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provice` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buildings`
--

INSERT INTO `buildings` (`id`, `name`, `capacity`, `address`, `city`, `provice`, `postal_code`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Gedung Depan', 100, 'RQPF+76J, Komplek Perusahaan Gas Negara (PGN), Daan Mogot, Gg. Macan, RT.3/RW.5, Duri Kepa, Kec. Kb. Jeruk, Jakarta, Daerah Khusus Ibukota Jakarta 11510', 'Jakarta Barat', 'DKI Jakarta', 11510, '2024-02-27 01:37:11', '2024-02-27 01:37:11', NULL),
(2, 'Gedung Belakang', 85, 'RQPF+76J, Komplek Perusahaan Gas Negara (PGN), Daan Mogot, Gg. Macan, RT.3/RW.5, Duri Kepa, Kec. Kb. Jeruk, Jakarta, Daerah Khusus Ibukota Jakarta 11510', 'Jakarta Barat', 'DKI Jakarta', 11510, '2024-02-27 01:37:38', '2024-02-27 01:37:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `maps`
--

CREATE TABLE `maps` (
  `id` bigint UNSIGNED NOT NULL,
  `building_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `maps`
--

INSERT INTO `maps` (`id`, `building_id`, `name`, `image_url`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Ruang IT dan Ruang Project Manager', 'image/0xmRk4WQVuoedPUtgWyyc06B1WmPipy0r9hHlYXJ.jpg', '2024-02-27 19:48:53', '2024-02-27 19:48:53', NULL),
(2, 1, 'Ruang Drafter', 'image/KyJxsbv3nRX4O8563uSinbcplo20WuNyGCEixWiy.jpg', '2024-02-27 23:28:08', '2024-02-27 23:28:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_11_021503_create_roles_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(4, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(5, '2019_08_19_000000_create_failed_jobs_table', 1),
(6, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(7, '2024_02_22_073156_create_sessions_table', 1),
(8, '2024_02_22_085749_create_buildings_table', 1),
(9, '2024_02_22_085820_create_rooms_table', 1),
(10, '2024_02_22_085905_create_bookings_table', 1),
(11, '2024_02_22_085916_create_booking_statuses_table', 1),
(12, '2024_02_26_045401_create_maps_table', 1),
(13, '2024_02_26_045413_create_office_layouts_table', 1),
(14, '2024_02_28_032624_add_name_field_to_map_table', 2),
(15, '2024_02_28_043535_add_soft_deletes_to_office_layouts_table', 3),
(16, '2024_02_29_082651_add_soft_deletes_to_bookings_table', 4),
(17, '2024_03_01_071603_add_status_field_to_bookings_table', 5),
(18, '2024_03_01_081024_add_capacity_field_to_buildings_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `office_layouts`
--

CREATE TABLE `office_layouts` (
  `id` bigint UNSIGNED NOT NULL,
  `map_id` bigint UNSIGNED NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `office_layouts`
--

INSERT INTO `office_layouts` (`id`, `map_id`, `location`, `user_name`, `department`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '15', 'John Doe', 'Project Manager', '2024-02-28 04:16:47', '2024-02-29 00:37:54', '2024-02-29 00:37:54'),
(2, 2, '19', 'Jack Ward', 'Drafter', '2024-02-28 08:17:54', NULL, NULL),
(3, 2, '20', 'Jack Brown', 'Drafter', '2024-02-28 08:17:54', NULL, NULL),
(5, 1, '10', 'Jim Green', 'Project Manager', '2024-02-29 00:11:02', '2024-02-29 00:31:16', '2024-02-29 00:31:16'),
(6, 1, '14', 'John Doe', 'Project Manager', '2024-02-29 00:38:20', '2024-02-29 00:38:20', NULL),
(7, 2, '21', 'Jack Blue', 'Drafter', '2024-03-01 03:40:32', '2024-03-01 03:40:32', NULL),
(8, 2, '22', 'Jack White', 'Drafter', '2024-03-01 03:40:44', '2024-03-01 03:40:44', NULL),
(9, 2, '23', 'Jack Black', 'Drafter', '2024-03-01 03:40:56', '2024-03-01 03:40:56', NULL),
(10, 2, '24', 'Jack Grealish', 'Drafter', '2024-03-01 03:41:16', '2024-03-01 03:41:16', NULL),
(11, 1, '6', 'Lutfi', 'IT', '2024-03-01 06:59:50', '2024-03-07 17:31:59', NULL),
(12, 1, '8', 'Lutfi', 'IT', '2024-03-01 06:59:50', '2024-03-01 06:59:59', '2024-03-01 06:59:59'),
(13, 1, '11', 'Aku', 'Project Manager', '2024-03-07 17:31:31', '2024-03-07 17:31:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ADMIN', '2024-02-27 08:31:11', NULL, NULL),
(2, 'USER', '2024-02-27 08:31:11', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint UNSIGNED NOT NULL,
  `building_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `capacity` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `building_id`, `name`, `description`, `capacity`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'Ruang Meeting Cafe', 'Ruang meeting cafe cafe cafe', 6, '2024-02-27 01:38:01', '2024-02-27 01:38:01', NULL),
(2, 1, 'Ruang Meeting Tengah', 'Ruang meeting tengahhhhhhhhhhh', 8, '2024-02-27 01:38:29', '2024-02-27 01:38:29', NULL),
(3, 1, 'Ruang Meeting Utama', 'Ruang meeting ?', 10, '2024-02-27 01:38:50', '2024-02-27 01:38:50', NULL),
(4, 1, 'Ruang Meeting Baru', 'baru', 8, '2024-02-27 01:39:14', '2024-02-27 01:39:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('KwbVsnWUIlXkXjJvvKLSTAjv7HKysoAth3JKWnlQ', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiU0c4bHJOUm1INFQ2bEJ5YTJ0SHNEaW93akMzOWxsbm80eFJnQ0d0dSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM0OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvbWVldGluZy1saXN0Ijt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NDtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMiRIeW92VEFWM2IuTVBFYktSWFhwQjJlUi96cGtzWVBzRkRkTi9ZWW5OZW9PVXh1Ni9YUDB4MiI7fQ==', 1709833732),
('tdiiyTduXgvjhB7djOdvJjLocPCg4GQpJV1dPP1P', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoicEFDajZ6UWp3SWZSZ0Z6TWpLZXJYeDFqcEE4UVdmc1E1TWVLUUdtbiI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM4OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYnVpbGRpbmdzLzEvZWRpdCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjQ7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTIkSHlvdlRBVjNiLk1QRWJLUlhYcEIyZVIvenBrc1lQc0ZEZE4vWVluTmVvT1V4dTYvWFAweDIiO30=', 1709873335);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL DEFAULT '2',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(4, 1, 'Admin', 'admin@admin.com', NULL, '$2y$12$HyovTAV3b.MPEbKRXXpB2eR/zpksYPsFDdN/YYnNeoOUxu6/XP0x2', NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-27 01:32:06', '2024-02-27 01:32:06'),
(5, 2, 'User', 'user@user.com', NULL, '$2y$12$G0QcvibUyvfeTDTVLGCyPOiSQXYND28xibukcxFgXUKzF/UClow8q', NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-27 01:32:34', '2024-02-27 01:32:34'),
(6, 2, 'Muhammad Naufal Hanan', 'naufalhanan92@gmail.com', NULL, '$2y$12$Es.dMUsKNPuKqQyTCyiuAuooi667dLd8N2aj6PF0H0SJ38Hqod8zq', NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-27 01:33:02', '2024-02-27 01:33:02'),
(7, 2, 'User Test', 'usertest@gmail.com', NULL, '$2y$12$/ulGY8ZwAveZH4KwzYn4le4Lc0hcEEm9RIhbSc8cyfm5A9G9EPFSa', NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-27 01:33:34', '2024-02-27 01:33:34'),
(8, 2, 'Slamet', 'slamet@outlook.com', NULL, '$2y$12$Ea4TZ8LK8kb6f7qY8LpFBupINGrHT6ujwkpp7AONyzew468x2p5xa', NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-27 01:34:06', '2024-02-27 01:34:06'),
(9, 2, 'Ahmad', 'ahmad@gmail.com', NULL, '$2y$12$DOb6UsCsGjJPLq/kVKpzqOZibTzCfJZztsstY7pk.v5n4lNf9uEl2', NULL, NULL, NULL, NULL, NULL, NULL, '2024-02-27 01:34:32', '2024-02-27 01:34:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_room_id_foreign` (`room_id`),
  ADD KEY `bookings_user_id_foreign` (`user_id`);

--
-- Indexes for table `buildings`
--
ALTER TABLE `buildings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `maps`
--
ALTER TABLE `maps`
  ADD PRIMARY KEY (`id`),
  ADD KEY `maps_building_id_foreign` (`building_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `office_layouts`
--
ALTER TABLE `office_layouts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `office_layouts_map_id_foreign` (`map_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rooms_building_id_foreign` (`building_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `buildings`
--
ALTER TABLE `buildings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `maps`
--
ALTER TABLE `maps`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `office_layouts`
--
ALTER TABLE `office_layouts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_room_id_foreign` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bookings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `maps`
--
ALTER TABLE `maps`
  ADD CONSTRAINT `maps_building_id_foreign` FOREIGN KEY (`building_id`) REFERENCES `buildings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `office_layouts`
--
ALTER TABLE `office_layouts`
  ADD CONSTRAINT `office_layouts_map_id_foreign` FOREIGN KEY (`map_id`) REFERENCES `maps` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_building_id_foreign` FOREIGN KEY (`building_id`) REFERENCES `buildings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
