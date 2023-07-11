-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2023 at 08:11 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petvac`
--

-- --------------------------------------------------------

--
-- Table structure for table `breeds_info`
--

CREATE TABLE `breeds_info` (
  `breed_id` bigint(20) UNSIGNED NOT NULL,
  `pet_typesid` bigint(20) UNSIGNED DEFAULT NULL,
  `breed_name` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `city` varchar(100) NOT NULL,
  `states_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city`, `states_id`, `created_at`, `updated_at`) VALUES
(1, 'Anantapur', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `countrys_id` bigint(20) UNSIGNED NOT NULL,
  `country` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`countrys_id`, `country`, `created_at`, `updated_at`) VALUES
(1, 'India', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers_info`
--

CREATE TABLE `customers_info` (
  `customers_id` bigint(20) UNSIGNED NOT NULL,
  `customers_fname` varchar(100) NOT NULL,
  `customers_lname` varchar(100) NOT NULL,
  `customers_email` varchar(255) NOT NULL,
  `customers_phone` bigint(20) NOT NULL,
  `customers_address` varchar(200) NOT NULL,
  `customers_city` varchar(100) NOT NULL,
  `customers_state` varchar(100) NOT NULL,
  `customers_pincode` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(268, '2014_10_12_000000_create_users_table', 1),
(269, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(270, '2019_08_19_000000_create_failed_jobs_table', 1),
(271, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(272, '2023_07_05_080321_create_vendors_table', 1),
(273, '2023_07_05_093702_create_pets-category_table', 1),
(274, '2023_07_05_094045_drop_pets-category_table', 1),
(275, '2023_07_05_094214_create_pets_category_table', 1),
(276, '2023_07_05_101653_create_customers_info_table', 1),
(277, '2023_07_05_103431_create_templates_table', 1),
(278, '2023_07_05_110635_create_breeds_info_table', 1),
(279, '2023_07_05_120025_create_pet_info_table', 1),
(280, '2023_07_08_181017_create_states_table', 1),
(281, '2023_07_08_181030_create_cities_table', 1),
(282, '2023_07_08_193702_create_sessions_table', 1),
(283, '2023_07_10_054856_create_country_table', 2),
(284, '2023_07_10_060347_create_state_table', 3),
(285, '2023_07_10_060548_create_city_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pets_category`
--

CREATE TABLE `pets_category` (
  `pet_typeid` bigint(20) UNSIGNED NOT NULL,
  `pet_type` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pet_info`
--

CREATE TABLE `pet_info` (
  `pet_id` bigint(20) UNSIGNED NOT NULL,
  `pet_name` varchar(100) NOT NULL,
  `pet_type_id` bigint(20) UNSIGNED DEFAULT NULL,
  `pet_parentid` bigint(20) UNSIGNED DEFAULT NULL,
  `pet_bday` date NOT NULL,
  `pet_gender` enum('male','female','others') NOT NULL,
  `pet_breedid` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` bigint(20) UNSIGNED NOT NULL,
  `state` varchar(100) NOT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state`, `country_id`, `created_at`, `updated_at`) VALUES
(1, 'Andhra Pradesh', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--

CREATE TABLE `templates` (
  `templates_id` bigint(20) UNSIGNED NOT NULL,
  `templates_image` blob NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'robert', 'stark@gmail.com', NULL, '$2y$10$s711BiNmaj4Rh5mO/.Y.DeZ.yTaIDtXHakmOH4J1BE/lpuMWJVMt2', NULL, '2023-07-09 12:26:25', '2023-07-09 12:26:25'),
(2, 'swalehat', 's@gmail.com', NULL, '$2y$10$rbpOMiUFYc0tOloTuPHbseAic0qXZi2RI18JTFQu7cvZ4bI1BZJ1i', NULL, '2023-07-09 12:35:29', '2023-07-09 12:37:20'),
(3, 'sabara', 'saaa@gmail.com', NULL, '$2y$10$L4wXT6u0.N8KEZIQABnEgehFeCaXyXI8qEw9It0HbGRIkxGac/wUK', NULL, '2023-07-09 12:57:36', '2023-07-09 12:57:36'),
(4, 'awara', 'awara@gmail.com', NULL, '$2y$10$Rk7iI8UwFYqER5nvmSH3guGQG8lFfR6zDU2ESKxsATifyyXDKW3Fy', NULL, '2023-07-09 12:59:38', '2023-07-09 12:59:38'),
(5, 'dhara', 'd@gmail.com', NULL, '$2y$10$PqLXXk6cSb84fl3SLnXMMezzz0iSg7z6zUdUPtssh96YFCpoIItRa', NULL, '2023-07-09 13:08:41', '2023-07-09 13:08:41'),
(6, 'kabana', 'kab@gmail.com', NULL, '$2y$10$84s1Rmix1H/UVHdCkXVsqu6J22M/pRExzP5SjJLjemerqh9OSWMmK', NULL, '2023-07-09 13:19:36', '2023-07-09 13:19:36'),
(7, 'samina', 'sam@gmail.com', NULL, '$2y$10$YO3fBV1gNQ9oaKIBYIDZNej/y/8KAleb7YdqutjAZ0AlcJZ2f4Lm2', NULL, '2023-07-09 13:30:46', '2023-07-09 13:30:46'),
(8, 'kutta', 'k@gmail.com', NULL, '$2y$10$Yk3FZEM7C.ToWcZ8KPITmOWq0RrJ79bcn0NjpayPOJbWUK9ikFQ3u', NULL, '2023-07-09 13:35:05', '2023-07-09 13:35:05');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `vendors_id` bigint(20) UNSIGNED NOT NULL,
  `userven_id` bigint(20) UNSIGNED NOT NULL,
  `vendors_fname` varchar(100) NOT NULL,
  `vendors_lname` varchar(100) NOT NULL,
  `vendors_uname` varchar(100) NOT NULL,
  `vendors_email` varchar(255) NOT NULL,
  `vendors_password` varchar(255) NOT NULL,
  `vendors_address` varchar(200) NOT NULL,
  `vendors_city` varchar(100) NOT NULL,
  `vendors_state` varchar(100) NOT NULL,
  `vendors_phone` bigint(20) NOT NULL,
  `vendors_avatar` blob DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vendors`
--

INSERT INTO `vendors` (`vendors_id`, `userven_id`, `vendors_fname`, `vendors_lname`, `vendors_uname`, `vendors_email`, `vendors_password`, `vendors_address`, `vendors_city`, `vendors_state`, `vendors_phone`, `vendors_avatar`, `created_at`, `updated_at`) VALUES
(1, 1, 'robert', 'stark', 'robert', 'stark@gmail.com', '$2y$10$s711BiNmaj4Rh5mO/.Y.DeZ.yTaIDtXHakmOH4J1BE/lpuMWJVMt2', 'hyyynnnn', '...', '...', 90876767, 0x494d472d32303231303932352d5741303030322e6a7067, '2023-07-09 12:27:18', '2023-07-09 12:27:18'),
(6, 2, 'swa', 'la', 'swaleha', 's@gmail.com', '$2y$10$rbpOMiUFYc0tOloTuPHbseAic0qXZi2RI18JTFQu7cvZ4bI1BZJ1i', 'hyyyyyyy', '...', '...', 78880000999, 0x494d472d32303231303932352d5741303030322e6a7067, '2023-07-09 12:36:31', '2023-07-09 12:36:31'),
(8, 4, 'ddddsss', 'sssss', 'awara', 'awara@gmail.com', '$2y$10$Rk7iI8UwFYqER5nvmSH3guGQG8lFfR6zDU2ESKxsATifyyXDKW3Fy', '32222hy', 'yuuu', 'uyyuu', 8999999, NULL, '2023-07-09 13:02:05', '2023-07-09 13:03:51'),
(9, 5, 'dhara', 'tyne', 'dhara', 'd@gmail.com', '$2y$10$PqLXXk6cSb84fl3SLnXMMezzz0iSg7z6zUdUPtssh96YFCpoIItRa', 'hyyyyy', '...', '...', 788888, 0x494d475f32303231303930365f3138323030352e6a7067, '2023-07-09 13:12:13', '2023-07-09 13:12:13'),
(12, 6, 'dxx', 'xxx', 'kabana', 'kab@gmail.com', '$2y$10$84s1Rmix1H/UVHdCkXVsqu6J22M/pRExzP5SjJLjemerqh9OSWMmK', 'dsssssss', 'yuuu', 'uyyuu', 45555555, NULL, '2023-07-09 13:20:41', '2023-07-09 13:22:30'),
(13, 7, 'samina', 'ssss', 'samina', 'sam@gmail.com', '$2y$10$YO3fBV1gNQ9oaKIBYIDZNej/y/8KAleb7YdqutjAZ0AlcJZ2f4Lm2', 'junnna', '...', '...', 8900000, 0x494d472d32303231303932352d5741303030322e6a7067, '2023-07-09 13:31:26', '2023-07-09 13:31:26'),
(15, 8, 'kutta', 'kutta', 'kutta', 'k@gmail.com', '$2y$10$Yk3FZEM7C.ToWcZ8KPITmOWq0RrJ79bcn0NjpayPOJbWUK9ikFQ3u', 'gtttttt', 'yuuu', 'uyyuu', 6777777777709, NULL, '2023-07-09 13:36:29', '2023-07-09 13:41:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `breeds_info`
--
ALTER TABLE `breeds_info`
  ADD PRIMARY KEY (`breed_id`),
  ADD KEY `breeds_info_pet_typesid_foreign` (`pet_typesid`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_state_id_foreign` (`state_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`),
  ADD KEY `city_states_id_foreign` (`states_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`countrys_id`);

--
-- Indexes for table `customers_info`
--
ALTER TABLE `customers_info`
  ADD PRIMARY KEY (`customers_id`),
  ADD UNIQUE KEY `customers_info_customers_email_unique` (`customers_email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `pets_category`
--
ALTER TABLE `pets_category`
  ADD PRIMARY KEY (`pet_typeid`);

--
-- Indexes for table `pet_info`
--
ALTER TABLE `pet_info`
  ADD PRIMARY KEY (`pet_id`),
  ADD KEY `pet_info_pet_type_id_foreign` (`pet_type_id`),
  ADD KEY `pet_info_pet_parentid_foreign` (`pet_parentid`),
  ADD KEY `pet_info_pet_breedid_foreign` (`pet_breedid`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`),
  ADD KEY `state_country_id_foreign` (`country_id`);

--
-- Indexes for table `templates`
--
ALTER TABLE `templates`
  ADD PRIMARY KEY (`templates_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`vendors_id`),
  ADD UNIQUE KEY `vendors_userven_id_unique` (`userven_id`),
  ADD UNIQUE KEY `vendors_vendors_email_unique` (`vendors_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `breeds_info`
--
ALTER TABLE `breeds_info`
  MODIFY `breed_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `countrys_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers_info`
--
ALTER TABLE `customers_info`
  MODIFY `customers_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=286;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pets_category`
--
ALTER TABLE `pets_category`
  MODIFY `pet_typeid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pet_info`
--
ALTER TABLE `pet_info`
  MODIFY `pet_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `templates_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `vendors_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `breeds_info`
--
ALTER TABLE `breeds_info`
  ADD CONSTRAINT `breeds_info_pet_typesid_foreign` FOREIGN KEY (`pet_typesid`) REFERENCES `pets_category` (`pet_typeid`);

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_state_id_foreign` FOREIGN KEY (`state_id`) REFERENCES `states` (`id`);

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_states_id_foreign` FOREIGN KEY (`states_id`) REFERENCES `state` (`state_id`);

--
-- Constraints for table `pet_info`
--
ALTER TABLE `pet_info`
  ADD CONSTRAINT `pet_info_pet_breedid_foreign` FOREIGN KEY (`pet_breedid`) REFERENCES `breeds_info` (`breed_id`),
  ADD CONSTRAINT `pet_info_pet_parentid_foreign` FOREIGN KEY (`pet_parentid`) REFERENCES `customers_info` (`customers_id`),
  ADD CONSTRAINT `pet_info_pet_type_id_foreign` FOREIGN KEY (`pet_type_id`) REFERENCES `pets_category` (`pet_typeid`);

--
-- Constraints for table `state`
--
ALTER TABLE `state`
  ADD CONSTRAINT `state_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `country` (`countrys_id`);

--
-- Constraints for table `vendors`
--
ALTER TABLE `vendors`
  ADD CONSTRAINT `vendors_userven_id_foreign` FOREIGN KEY (`userven_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
