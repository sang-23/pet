-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2023 at 11:58 AM
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
INSERT INTO `breeds_info` (`breed_id`, `pet_typesid`, `breed_name`, `created_at`, `updated_at`) VALUES
(1,  1,"Labrador Retriever" , NULL, NULL),
(2,  1,"German Shepherd" , NULL, NULL),
(3,   1, "Golden Retriever" ,NULL, NULL),
(4,  1,  "Dachshund" ,NULL, NULL),
(5,  1,   "Beagle" ,NULL, NULL),
(6,  1,"Boxer" , NULL, NULL),
(7,  1, "Tibetan Mastif"  ,NULL, NULL),
(8, 1,   "Pug" ,NULL, NULL),
(9,  1,  "Rottweiler" ,NULL, NULL),
(10,   1, "Doberman"  ,NULL, NULL),
(11,  1,   "Great Dane" ,NULL, NULL),

(12,  1,   "Dalmatian"  ,NULL, NULL),
(13,   1, "English Cocker Spaniel"  ,NULL, NULL),

(14, 1,  "Indian Spitz",NULL, NULL),
(15, 2,  "Bengal",NULL, NULL),
(16, 2,  "Persian:",NULL, NULL),
(17, 2,  "Spotted ( Indian Billi )",NULL, NULL),
(18, 2,  "Bombay:",NULL, NULL),
(19, 2,  "Himalayan:",NULL, NULL),
(20, 2,  "Exotic:",NULL, NULL),
(21, 2,  "Maine Coon:",NULL, NULL),
(22, 2,  "Others",NULL, NULL);
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
(1, 'India', NULL, NULL),
(2, 'America', NULL, NULL),
(5, 'raaaustralia', NULL, NULL),
(6, 'raaaamerica', NULL, NULL);

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
   `customers_country` bigint(20) NOT NULL,
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
(280, '2023_07_08_181017_create_states_table', 1),
(281, '2023_07_08_181030_create_cities_table', 1),
(286, '2014_10_12_000000_create_users_table', 2),
(287, '2014_10_12_100000_create_password_reset_tokens_table', 2),
(288, '2019_08_19_000000_create_failed_jobs_table', 2),
(289, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(290, '2023_07_05_080321_create_vendors_table', 2),
(291, '2023_07_05_093702_create_pets-category_table', 2),
(292, '2023_07_05_094045_drop_pets-category_table', 2),
(293, '2023_07_05_094214_create_pets_category_table', 2),
(294, '2023_07_05_101653_create_customers_info_table', 2),
(295, '2023_07_05_103431_create_templates_table', 2),
(296, '2023_07_05_110635_create_breeds_info_table', 2),
(297, '2023_07_05_120025_create_pet_info_table', 2),
(298, '2023_07_08_193702_create_sessions_table', 2),
(299, '2023_07_10_054856_create_country_table', 2);

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
(1, 'Andhra Pradesh', 1, NULL, NULL),
(2, 'Arunachal Pradesh', 1, NULL, NULL),
(3, 'Assam', 1, NULL, NULL),
(4, 'Bihar', 1, NULL, NULL),
(5, 'Chhattisgarh', 1, NULL, NULL),
(6, 'Goa', 1, NULL, NULL),
(7, 'Gujarat', 1, NULL, NULL),
(8, 'Haryana', 1, NULL, NULL),
(9, 'Himachal Pradesh', 1, NULL, NULL),
(10, 'Jharkhand', 1, NULL, NULL),
(11, 'Karnataka', 1, NULL, NULL),
(12, 'Kerala', 1, NULL, NULL),
(13, 'Madhya Pradesh', 1, NULL, NULL),
(14, 'Maharashtra', 1, NULL, NULL),
(15, 'Manipur', 1, NULL, NULL),
(16, 'Meghalaya', 1, NULL, NULL),
(17, 'Mizoram', 1, NULL, NULL),
(18, 'Nagaland', 1, NULL, NULL),
(19, 'Odisha', 1, NULL, NULL),
(20, 'Punjab', 1, NULL, NULL),
(21, 'Rajasthan', 1, NULL, NULL),
(22, 'Sikkim', 1, NULL, NULL),
(23, 'Tamil Nadu', 1, NULL, NULL),
(24, 'Telangana', 1, NULL, NULL),
(25, 'Tripura', 1, NULL, NULL),
(26, 'Uttar Pradesh', 1, NULL, NULL),
(27, 'Uttarakhand', 1, NULL, NULL),
(28, 'West Bengal', 1, NULL, NULL),
(29, 'Andaman and Nicobar Islands', 1, NULL, NULL),
(30, 'Chandigarh', 1, NULL, NULL),
(31, 'Dadra and Nagar Haveli and Daman and Diu', 1, NULL, NULL),
(32, 'Delhi', 1, NULL, NULL),
(33, 'Ladakh', 1, NULL, NULL),
(34, 'Lakshadweep', 1, NULL, NULL),
(35, 'Puducherry', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `templates`
--
CREATE TABLE `city` (
  `city_id` bigint(20) UNSIGNED NOT NULL,
  `city` varchar(100) NOT NULL,
  `states_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO `city` (`city_id`, `city`, `states_id`, `created_at`, `updated_at`) VALUES
-- Andhra Pradesh
(1, 'Anantapur', 1, NULL, NULL),
(2, 'Amaravati', 1, NULL, NULL),
(3, 'Chittoor', 1, NULL, NULL),
(4, 'East Godavari', 1, NULL, NULL),
(5, 'Guntur', 1, NULL, NULL),
(6, 'Krishna', 1, NULL, NULL),
(7, 'Kurnool', 1, NULL, NULL),
(8, 'Nellore', 1, NULL, NULL),
(9, 'Prakasam', 1, NULL, NULL),
(10, 'Srikakulam', 1, NULL, NULL),
(11, 'Visakhapatnam', 1, NULL, NULL),
(12, 'Vizianagaram', 1, NULL, NULL),
(13, 'West Godavari', 1, NULL, NULL),
(14, 'YSR Kadapa', 1, NULL, NULL),

-- Arunachal Pradesh
(15, 'Itanagar', 2, NULL, NULL),
(16, 'Tawang', 2, NULL, NULL),
(17, 'Ziro', 2, NULL, NULL),
(18, 'Naharlagun', 2, NULL, NULL),
(19, 'Pasighat', 2, NULL, NULL),
(20, 'Bomdila', 2, NULL, NULL),

-- Assam
(21, 'Guwahati', 3, NULL, NULL),
(22, 'Silchar', 3, NULL, NULL),
(23, 'Dibrugarh', 3, NULL, NULL),
(24, 'Jorhat', 3, NULL, NULL),
(25, 'Tezpur', 3, NULL, NULL),
(26, 'Nagaon', 3, NULL, NULL),
(27, 'Tinsukia', 3, NULL, NULL);

-- ... Continue adding cities for other states



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
-- Indexes for dumped tables
--

--
-- Indexes for table `breeds_info`
--
ALTER TABLE `breeds_info`
  ADD PRIMARY KEY (`breed_id`),
  ADD KEY `breeds_info_pet_typesid_foreign` (`pet_typesid`);

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
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `countrys_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=300;

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
  MODIFY `state_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `templates`
--
ALTER TABLE `templates`
  MODIFY `templates_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `vendors_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `breeds_info`
--
ALTER TABLE `breeds_info`
  ADD CONSTRAINT `breeds_info_pet_typesid_foreign` FOREIGN KEY (`pet_typesid`) REFERENCES `pets_category` (`pet_typeid`);

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
