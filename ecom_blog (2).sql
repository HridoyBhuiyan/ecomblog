-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2023 at 04:41 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_item`
--

CREATE TABLE `blog_item` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `schedule` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('published','draft') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blog_tag`
--

CREATE TABLE `blog_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('published','unpublished') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unpublished',
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `media_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alt_tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_25_203004_create_blog_item', 1),
(6, '2023_01_26_212342_create_blog_category_table', 1),
(7, '2023_01_31_185445_create_blog_tag', 1),
(9, '2023_02_11_160402_create_product_category', 1),
(10, '2023_02_11_160428_create_product_tag', 1),
(11, '2023_02_11_160447_create_comment', 1),
(12, '2023_02_11_160506_create_media', 1),
(13, '2023_02_11_162820_create_subscriber', 1),
(14, '2023_02_08_195604_create_product', 2);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feature_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specification` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `things_to_know` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `release_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OS_version` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `camera` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ram` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `battery` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pros` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cons` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faq` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `loved` int(11) NOT NULL DEFAULT 0,
  `official_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unofficial_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured_data` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `schedule` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('published','drafted') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `description`, `slug`, `meta_title`, `meta_description`, `feature_image`, `specification`, `things_to_know`, `release_date`, `OS_version`, `display`, `camera`, `ram`, `battery`, `pros`, `cons`, `review`, `video_link`, `faq`, `loved`, `official_price`, `unofficial_price`, `featured_data`, `category`, `tags`, `schedule`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Fugiat consequatur', '<p>iojioj</p>', NULL, 'Optio et eligendi o', 'Optio et eligendi o', '/storage/O2dOViGdGKwEy07XuE3iDgh2Wt9KELXeYfWXKfeF.png', '<p>ojiojioj</p>', '<p>joijoijoj</p>', '21-Nov-2020', 'Est id rerum iusto', 'Hic accusantium nemo', '+1 (503) 379-5083', '+1 (686) 147-7105', '+1 (465) 172-6624', '[\"Dicta amet occaecat\"]', '[\"Blanditiis quis sed\"]', NULL, 'Nisi voluptas commod', '[{\"question\":\"Cumque est animi la\",\"answer\":\"Qui ab cupidatat ex\"}]', 0, '777', '247', NULL, NULL, NULL, NULL, 'published', NULL, NULL),
(2, 'Voluptates aut sunt', NULL, 'Sit-sed-exercitatio', 'Voluptatum quidem an', 'Voluptatum quidem an', NULL, NULL, NULL, '16-Jun-1995', 'Eius elit qui magna', 'Aut sunt hic eligend', '+1 (912) 847-7537', '+1 (183) 974-4801', '+1 (703) 391-9435', 'null', 'null', NULL, 'Ad omnis elit in si', '[]', 0, '532', '831', NULL, NULL, NULL, NULL, 'published', NULL, NULL),
(3, 'this is title', NULL, '', 'Adipisicing harum qu', 'Adipisicing harum qu', NULL, NULL, NULL, '13-Feb-1996', 'Ea ut provident del', 'Officia eaque maiore', '+1 (771) 359-5486', '+1 (446) 605-6186', '+1 (518) 707-7461', 'null', 'null', NULL, 'Quasi magni ipsum o', '[]', 0, '727', '499', NULL, NULL, NULL, NULL, 'published', NULL, NULL),
(4, 'hi hi', NULL, 'Officia-quod-nobis-d', 'Enim eaque sequi at', 'Enim eaque sequi at', NULL, NULL, NULL, '17-May-2016', 'Adipisci voluptatem', 'Error aut eius ut qu', '+1 (699) 205-5468', '+1 (437) 929-8646', '+1 (347) 481-6586', 'null', 'null', NULL, 'Quis ea cum dolorum', '[]', 0, '553', '288', NULL, NULL, NULL, NULL, 'published', NULL, NULL),
(5, 'hello bangladesh', NULL, '', 'Pariatur Nemo digni', 'Pariatur Nemo digni', NULL, NULL, NULL, '14-Jun-1977', 'Vel et irure tempori', 'Est necessitatibus a', '+1 (244) 329-2077', '+1 (826) 476-5419', '+1 (609) 426-8716', 'null', 'null', NULL, 'Aspernatur veniam f', '[]', 0, '81', '147', NULL, NULL, NULL, NULL, 'published', NULL, NULL),
(6, 'el title Blanditiis aspernatu', NULL, 'Et-rerum-est-pariat', 'Nobis in exercitatio', 'Nobis in exercitatio', NULL, NULL, NULL, '16-Oct-2009', 'Omnis sint animi v', 'Adipisci repellendus', '+1 (361) 834-6391', '+1 (507) 263-7927', '+1 (732) 902-6287', 'null', 'null', NULL, 'Similique dicta sint', '[]', 0, '475', '711', NULL, NULL, NULL, NULL, 'published', NULL, NULL),
(7, 'el title', NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'null', 'null', NULL, NULL, '[]', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'published', NULL, NULL),
(8, 'muzo kazeso', NULL, 'muzo-kazeso', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'null', 'null', NULL, NULL, '[]', 0, NULL, NULL, NULL, NULL, NULL, NULL, 'published', NULL, NULL),
(9, 'Quas enim sint comm', NULL, 'Et-possimus-adipisc', 'Rem reprehenderit re', 'Rem reprehenderit re', '/storage/7eqsaTFCLxtkIrG5sed9bb43NBrb7tcQSPbC95IQ.png', NULL, NULL, '29-Oct-1981', 'Quia corporis cupidi', 'Sunt voluptatum sed', '+1 (646) 336-3255', '+1 (399) 633-3202', '+1 (616) 605-9148', 'null', 'null', NULL, 'Sint culpa tempora r', '[]', 0, '427', '231', NULL, NULL, NULL, NULL, 'published', NULL, NULL),
(10, 'Eius dicta consectet', '<p>uf g yf yufg&nbsp;</p>', 'Earum-quidem-enim-sa', 'Ut nihil omnis occae', 'Ut nihil omnis occae', '/storage/FLM8qqedL5MYTIZnc4PmKXDyuyTzw3GBIVMl6xV7.jpg', '<p>ihih gui yu&nbsp;</p>', '<p>&nbsp;guig uyy giuy gougugy&nbsp;&nbsp;</p>', '17-Feb-1982', 'Excepturi deleniti d', 'Harum iste enim et s', '+1 (187) 714-6306', '+1 (348) 127-4493', '+1 (638) 412-7152', '[\"Anim ea nostrud expe\"]', '[\"Molestiae libero ali\"]', NULL, 'Necessitatibus beata', '[{\"question\":\"Quod dolor Nam volup\",\"answer\":\"Ad autem rem quo ut\"}]', 0, '621', '610', NULL, NULL, NULL, NULL, 'published', NULL, NULL),
(11, 'Doloribus dicta nisi', '<p>&nbsp;fuyytfkjfjtyfuiytrfyt dui dud</p>', 'Dolor-et-quo-tempore', 'Delectus asperiores', 'Delectus asperiores', '/storage/iAfHQ4588fJnA8Qh4m2J9122ltWs7mef1SYQ6Sgu.jpg', '<p>ytf t fuyf&nbsp;</p>', '<p>ujyfd ujy uidfjy tyj</p>', '30-Sep-1982', 'Earum ea nihil autem', 'Eos voluptatibus ea', '+1 (801) 587-3795', '+1 (469) 426-5831', '+1 (824) 204-4962', '[\"Ipsam optio distinc\"]', '[\"Similique amet offi\"]', NULL, 'Nam dolor voluptate', '[{\"question\":\"Quo aspernatur non m\",\"answer\":\"Illo voluptatem null\"}]', 0, '524', '74', NULL, NULL, NULL, NULL, 'published', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_tag`
--

CREATE TABLE `product_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hridoy Bhuiyan', 'hellohridoy007@gmail.com', NULL, '$2y$10$XKCKW2SCQbvwW/SpRcbF0.Mx2f0EDQRm5ukTdDNhtn0C6OTotdqV.', 'gEGzihM0TMIrPqTb1PAJC0iYqjBvJ4YddBZYITMmUHSnKrqJWF26N2urFxTa', '2023-02-26 20:54:17', '2023-02-26 20:54:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_category_slug_unique` (`slug`);

--
-- Indexes for table `blog_item`
--
ALTER TABLE `blog_item`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_item_slug_unique` (`slug`);

--
-- Indexes for table `blog_tag`
--
ALTER TABLE `blog_tag`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_tag_slug_unique` (`slug`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
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
  ADD PRIMARY KEY (`email`);

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
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_category_slug_unique` (`slug`);

--
-- Indexes for table `product_tag`
--
ALTER TABLE `product_tag`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_tag_slug_unique` (`slug`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
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
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_item`
--
ALTER TABLE `blog_item`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blog_tag`
--
ALTER TABLE `blog_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_tag`
--
ALTER TABLE `product_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
