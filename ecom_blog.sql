-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2023 at 12:10 PM
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

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`id`, `name`, `slug`, `content`, `created_at`, `updated_at`) VALUES
(1, 'one', NULL, NULL, NULL, NULL),
(2, 'two', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blog_item`
--

CREATE TABLE `blog_item` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `schedule` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('published','draft') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'published',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_item`
--

INSERT INTO `blog_item` (`id`, `title`, `meta_title`, `meta_description`, `thumbnail`, `blog_content`, `category`, `schedule`, `slug`, `tag`, `status`, `created_at`, `updated_at`) VALUES
(2, 'viwep', 'Rerum laborum Aliqu', 'Ducimus esse volupt', '/storage/nrkavpMi9TBMrC5QwBkZRwCLJfTTJ7IhEv04NJrk.png', '<p>luig l uyyf guyy g</p>', '1', NULL, 'et-sunt-iste-consequ', '\"[1,2]\"', 'published', NULL, NULL),
(3, 'viwep', 'Rerum laborum Aliqu', 'Ducimus esse volupt', NULL, '<p>luig l uyyf guyy g</p>', '1', NULL, '2-et-sunt-iste-consequ', '\"[1,2]\"', 'published', NULL, NULL),
(4, 'viwep', 'Rerum laborum Aliqu', 'Ducimus esse volupt', NULL, '<p>luig l uyyf guyy g</p>', '1', NULL, '3-2-et-sunt-iste-consequ', '\"[1,2]\"', 'published', NULL, NULL),
(5, 'viwep', 'Rerum laborum Aliqu', 'Ducimus esse volupt', NULL, '<p>luig l uyyf guyy g</p>', '1', NULL, 'hello-bangladesh-how-are-u', '\"[1,2]\"', 'published', NULL, NULL),
(6, 'viwep', 'Rerum laborum Aliqu', 'Ducimus esse volupt', NULL, '<p>luig l uyyf guyy g</p>', '1', NULL, '5-hello-bangladesh-how-are-u', '\"[1,2]\"', 'published', NULL, NULL);

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

--
-- Dumping data for table `blog_tag`
--

INSERT INTO `blog_tag` (`id`, `name`, `slug`, `content`, `created_at`, `updated_at`) VALUES
(1, 'hi', NULL, NULL, NULL, NULL),
(2, 'ignore', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('published','unpublished') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unpublished',
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `product_id`, `status`, `comment`, `answer`, `created_at`, `updated_at`) VALUES
(1, '3', 'unpublished', 'h', '', NULL, NULL),
(2, '3', 'unpublished', 'h', NULL, NULL, NULL),
(3, '3', 'unpublished', 'h', NULL, NULL, NULL),
(4, '3', 'unpublished', 'jij', NULL, NULL, NULL),
(5, '3', 'unpublished', 'hi', NULL, NULL, NULL),
(6, '3', 'unpublished', 'hll', NULL, NULL, NULL),
(7, '3', 'unpublished', 'hi', NULL, NULL, NULL),
(8, '3', 'unpublished', 'hi', NULL, NULL, NULL),
(9, '5', 'unpublished', 'hi', NULL, NULL, NULL),
(10, '5', 'unpublished', 'hello', NULL, NULL, NULL);

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
(6, '2023_01_26_212342_create_blog_category_table', 1),
(7, '2023_01_31_185445_create_blog_tag', 1),
(8, '2023_02_08_195604_create_product', 1),
(9, '2023_02_11_160402_create_product_category', 1),
(10, '2023_02_11_160428_create_product_tag', 1),
(11, '2023_02_11_160447_create_comment', 1),
(12, '2023_02_11_160506_create_media', 1),
(13, '2023_02_11_162820_create_subscriber', 1),
(14, '2023_01_25_203004_create_blog_item', 2);

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
(3, 'new product title', '<p>iikkkk</p>', 'Voluptatem-Voluptat', 'Omnis aute ratione a', 'Omnis aute ratione a', NULL, '<p>iikkkkkok</p>', '<p>i</p>', '17-Mar-1999', 'Aute do ullamco ea c', 'Fuga Eveniet ex vo', '+1 (418) 156-9494', '+1 (708) 828-3133', '+1 (227) 898-1023', '[\"Dolor harum dolores\",\"Minus debitis et dui\",\"Minus debitis et dui\",\"Id consectetur aut\"]', '[\"Fugit officia tenet\",\"Fugit officia tenet\",\"Autem voluptatem dui\"]', NULL, 'CLeZyIID9Bo', '[]', 0, '2', '443', NULL, '2', '1', NULL, 'published', NULL, '2023-03-24 13:01:34'),
(12, 'Repellendus Qui hic', '<b>hello world<b/>', 'excepturi-incididunt', 'Voluptas adipisicing', 'Voluptas adipisicing', '/storage/Wia0vV6Mwlgv7wdijhJ3ZnHz4EqaCIJgnLGXkpiM.jpg', NULL, NULL, '22-Aug-1987', 'Est aute officia se', 'Fugit quibusdam nih', '+1 (542) 146-1072', '+1 (654) 644-3225', '+1 (935) 509-6917', 'null', 'null', NULL, NULL, '[]', 0, '470', '569', NULL, '1', '[\"4\"]', NULL, 'published', NULL, NULL),
(13, 'Ut ut provident ess', NULL, 'vero-rerum-culpa-at', 'Reprehenderit tempo', 'Reprehenderit tempo', NULL, NULL, NULL, '12-Apr-1983', 'Assumenda fugit ull', 'Voluptatem Ipsum d', '+1 (179) 196-3771', '+1 (967) 266-6266', '+1 (415) 284-5156', 'null', 'null', NULL, NULL, '[]', 0, '263', '587', NULL, '1', 'null', NULL, 'drafted', NULL, NULL),
(14, 'my new', NULL, 'nulla-laborum-sit', 'Consequatur Totam q', 'Consequatur Totam q', NULL, NULL, NULL, '19-Aug-2002', 'Amet quia sit esse', 'Unde omnis optio co', '+1 (996) 686-5731', '+1 (217) 588-1788', '+1 (326) 776-7013', 'null', 'null', NULL, NULL, '[]', 0, '256', '13', NULL, '1', '0', NULL, 'published', NULL, NULL),
(15, 'hridoy In quis ut quo perfe', '<p>hridoy In quis ut quo perfe</p>', 'molestias-molestias', 'Consequatur dolorem', 'Consequatur dolorem', NULL, '<p>hridoy In quis ut quo perfe</p>', '<p><strong>hridoy In quis ut quo perfe</strong></p>', '02-Feb-1984', 'Ut in aspernatur sit', 'Deleniti culpa mole', '+1 (231) 969-5607', '+1 (884) 734-9883', '+1 (114) 424-3188', '[\"Velit irure adipisci\"]', '[\"Placeat nihil fuga\"]', NULL, NULL, '[{\"question\":\"Ullam est aut sed om\",\"answer\":\"Et voluptates quia l\"},{\"question\":\"h uhiu\",\"answer\":\"iho iho iuh\"}]', 0, '885', '384', NULL, '1', '[\"4\"]', NULL, 'published', NULL, NULL),
(17, 'Noor Ea quis autem eos vo', '<p>Noor Ea quis autem eos vo</p>', 'beatae-ut-lorem-ipsu', 'Ullamco at quia labo', 'Ullamco at quia labo', NULL, '<p>Noor Ea quis autem eos vo</p>', '<p>Noor Ea quis autem eos vo</p>', '13-Aug-1974', 'Doloremque sit iust', 'Asperiores repudiand', '+1 (549) 726-6663', '+1 (503) 105-4828', '+1 (138) 972-9748', '[\"Aspernatur quae aute\"]', '[\"Est hic mollit dolo\"]', NULL, NULL, '[{\"question\":\"Sit praesentium poss\",\"answer\":\"Suscipit exercitatio\"}]', 0, '57', '526', NULL, '1', '[\"1\"]', NULL, 'published', NULL, NULL),
(29, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 0, 'a', 'a', 'a', 'a', 'a', 'a', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'title', 'description', 'slug', 'meta_title', 'meta_description', 'feature_image', 'specification', 'things_to_know', 'release_date', 'OS_version', 'display', 'camera', 'ram', 'battery', 'pros', 'cons', 'review', 'video_link', 'faq', 0, 'official_price', 'unofficial_price', 'featured_data', 'category', 'tags', 'schedule', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'title', 'description', 'slug', 'meta_title', 'meta_description', 'feature_image', 'specification', 'things_to_know', 'release_date', 'OS_version', 'display', 'camera', 'ram', 'battery', 'pros', 'cons', 'review', 'video_link', 'faq', 0, 'official_price', 'unofficial_price', 'featured_data', 'category', 'tags', 'schedule', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 0, 'a', 'a', 'a', 'a', 'a', 'a', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 0, 'a', 'a', 'a', 'a', 'a', 'a', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 0, 'a', 'a', 'a', 'a', 'a', 'a', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'two', NULL, 'reprehenderit-eos-de', 'Qui nisi deserunt es', 'Qui nisi deserunt es', NULL, NULL, NULL, '14-Jul-1995', 'Tempora neque tempor', 'Nisi dolores ad magn', '+1 (634) 938-3719', '+1 (961) 399-6751', '+1 (352) 642-8604', 'null', 'null', NULL, NULL, '[]', 0, '272', '222', NULL, '2', '[\"3\",\"2\"]', NULL, 'published', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `name`, `slug`, `content`, `title`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'one', 'one', 'Similique dolor blan Similique dolor blan Similique dolor blan Similique dolor blan Similique dolor blan Similique dolor blanSimilique dolor blan Similique dolor blan Similique dolor blan Similique dolor blan Similique dolor blan Similique dolor blanSimilique dolor blan Similique dolor blan Similique dolor blan Similique dolor blan Similique dolor blan Similique dolor blanSimilique dolor blan Similique dolor blan Similique dolor blan Similique dolor blan Similique dolor blan Similique dolor blanSimilique dolor blan Similique dolor blan Similique dolor blan Similique dolor blan Similique dolor blan Similique dolor blan', 'title on one category', NULL, NULL, NULL),
(2, 'two', 'two', 'Similique dolor blan Similique dolor blan Similique dolor blan Similique dolor blan Similique dolor blan Similique dolor blan', NULL, NULL, NULL, NULL);

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

--
-- Dumping data for table `product_tag`
--

INSERT INTO `product_tag` (`id`, `name`, `slug`, `content`, `created_at`, `updated_at`) VALUES
(1, 'p 1', NULL, NULL, NULL, NULL),
(2, 'p2', NULL, NULL, NULL, NULL),
(3, 'p3', NULL, NULL, NULL, NULL),
(4, 'p4', NULL, NULL, NULL, NULL);

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
(1, 'Hridoy Bhuiyan', 'hellohridoy007@gmail.com', NULL, '$2y$10$G6FV/53wpskIUuWPqMwA2.69Ea0Y9WwV3YDksw116cfo1QYZgx.9O', 'qrdxAJB3FSKUkKI4WIGHnr8KfX7pXB2IovLladHnyj2LfpLFJfdwqs6ClrIS', '2023-03-01 10:26:48', '2023-03-01 10:26:48');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog_item`
--
ALTER TABLE `blog_item`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `blog_tag`
--
ALTER TABLE `blog_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `product_tag`
--
ALTER TABLE `product_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
