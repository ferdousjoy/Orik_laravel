-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2019 at 08:42 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `orika`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_models`
--

CREATE TABLE `about_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `allimg` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_models`
--

INSERT INTO `about_models` (`id`, `title`, `detail`, `allimg`, `created_at`, `updated_at`) VALUES
(4, 'abou me all the time', 'abou me all the timeabou me all the timeabou me all the timeabou me all the timeabou me all the time', 'about_img/9zjN6.jpg', '2019-05-16 02:17:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banner_models`
--

CREATE TABLE `banner_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `allimg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_models`
--

INSERT INTO `banner_models` (`id`, `title`, `detail`, `allimg`, `created_at`, `updated_at`) VALUES
(9, 'Construction Company in Bangladesh', 'again when people start thinking about their New Years Resolutions. Usually they involve, losing weight, quitting smoking, and joining a gym, just to mention a few.', 'banner_img/fZmbM.jpg', '2019-05-15 23:02:06', '2019-05-16 02:04:53');

-- --------------------------------------------------------

--
-- Table structure for table `blog_models`
--

CREATE TABLE `blog_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `detail` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `allimg` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_models`
--

INSERT INTO `blog_models` (`id`, `detail`, `name`, `author`, `allimg`, `created_at`, `updated_at`) VALUES
(1, 'refdefdryr', 'wetr', 'gfgfgtytr', 'blog_img/wOtjf.jpeg', '2019-05-11 03:21:02', NULL),
(2, 'Here is the Text.Here is the Text.Here is the Text.Here is the Text.Here is the Text.Here is the Text.Here is the Text.Here is the Text.Here is the Text.Here is the Text.Here is the Text.Here is the Text.Here is the Text.', 'Here is the Title', 'John Smith', 'blog_img/IhFJp.jpg', '2019-05-22 00:40:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exper_models`
--

CREATE TABLE `exper_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maintitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maintitle2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maintitle3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail3` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maintitle4` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail4` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exper_models`
--

INSERT INTO `exper_models` (`id`, `title`, `year`, `maintitle`, `detail`, `maintitle2`, `detail2`, `title2`, `year2`, `maintitle3`, `detail3`, `maintitle4`, `detail4`, `created_at`, `updated_at`) VALUES
(4, 'title 1', '2015- 2015', 'title 2', 'lorem ipsum da vaiorelorem ipsum da vaiorelorem ipsum da vaiore', 'main taitle main taitlemain taitle', 'lorem ipsum da vaiorelorem ipsum da vaiorelorem ipsum da vaiore', 'title 1', '3012-3025', 'title 2', 'lorem ipsum da vaiorelorem ipsum da vaiorelorem ipsum da vaiore', 'main taitle main taitlemain taitle', 'lorem ipsum da vaiorelorem ipsum da vaiorelorem ipsum da vaiore', '2019-05-16 02:57:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `message_models`
--

CREATE TABLE `message_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `message_models`
--

INSERT INTO `message_models` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(6, 'Hello', 'Hello@hello.com', '01947930896', 'Money', 'money is money money is moneymoney is moneymoney is moneymoney is moneymoney is money', '2019-05-14 03:17:01', NULL);

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
(3, '2019_05_09_073141_create_banner_models_table', 1),
(4, '2019_05_09_082851_create_about_models_table', 2),
(5, '2019_05_11_040509_create_product_models_table', 3),
(6, '2019_05_11_062957_create_service_models_table', 4),
(8, '2019_05_11_074011_create_slider_models_table', 5),
(9, '2019_05_11_083258_create_partner_models_table', 6),
(10, '2019_05_11_090317_create_blog_models_table', 7),
(11, '2019_05_11_092709_create_message_models_table', 8),
(13, '2019_05_16_060814_create_exper_models_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `partner_models`
--

CREATE TABLE `partner_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `allimg` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `partner_models`
--

INSERT INTO `partner_models` (`id`, `allimg`, `created_at`, `updated_at`) VALUES
(1, 'partner_img/fZLS3.jpeg', '2019-05-11 02:39:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_models`
--

CREATE TABLE `product_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `allimg` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_models`
--

INSERT INTO `product_models` (`id`, `name`, `allimg`, `created_at`, `updated_at`) VALUES
(1, 'Joy', 'product_img/iHo4W.jpeg', '2019-05-10 22:40:11', NULL),
(2, 'jk', 'product_img/gTwEo.jpg', '2019-05-10 22:40:46', NULL),
(3, 'dddsds', 'product_img/default.jpg', '2019-05-10 22:43:45', NULL),
(4, 'aaa', 'product_img/sohel.jpg', '2019-05-10 22:44:18', NULL),
(5, 'ww', 'product_img/ofoxk.jpg', '2019-05-10 22:45:02', NULL),
(6, 'qqqqqqqqq', 'product_img/default.jpg', '2019-05-10 22:45:20', NULL),
(7, 'last product', 'product_img/default.jpg', '2019-05-10 23:38:09', NULL),
(8, 'rt', 'product_img/EkwB2.jpeg', '2019-05-10 23:38:23', NULL),
(9, 'uyyu', 'product_img/default.jpg', '2019-05-11 00:26:26', NULL),
(10, 'rtyy', 'product_img/MGxfd.jpeg', '2019-05-11 00:27:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `service_models`
--

CREATE TABLE `service_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `allimg` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_models`
--

INSERT INTO `service_models` (`id`, `title`, `detail`, `allimg`, `created_at`, `updated_at`) VALUES
(1, 'yu', 'uy', 'product_img/default.jpg', NULL, NULL),
(2, 'we', 'we', 'service_img/Ge44m.jpeg', '2019-05-11 00:51:18', NULL),
(3, 'rty', 'ytr', 'service_img/QmPfb.jpeg', '2019-05-11 00:52:08', NULL),
(4, 'werw', 'werew', 'service_img/C4UB8.jpeg', '2019-05-11 00:56:00', NULL),
(5, 'service', 'efrewrtr', 'service_img/default.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slider_models`
--

CREATE TABLE `slider_models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `detail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `allimg` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider_models`
--

INSERT INTO `slider_models` (`id`, `detail`, `name`, `designation`, `allimg`, `created_at`, `updated_at`) VALUES
(1, 'qwewr', 'rou', 'joiu', 'slider_img/tYRG7.jpeg', '2019-05-11 02:04:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Joy', 'admin@admin.com', NULL, '$2y$10$Epoccpb7SQgsBs6FOL.Sfuar1JwFQa57DueuQPomvs5GdCFD8WjIS', NULL, '2019-05-09 01:46:36', '2019-05-09 01:46:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_models`
--
ALTER TABLE `about_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_models`
--
ALTER TABLE `banner_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_models`
--
ALTER TABLE `blog_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exper_models`
--
ALTER TABLE `exper_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message_models`
--
ALTER TABLE `message_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner_models`
--
ALTER TABLE `partner_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `product_models`
--
ALTER TABLE `product_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_models`
--
ALTER TABLE `service_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_models`
--
ALTER TABLE `slider_models`
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
-- AUTO_INCREMENT for table `about_models`
--
ALTER TABLE `about_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `banner_models`
--
ALTER TABLE `banner_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `blog_models`
--
ALTER TABLE `blog_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `exper_models`
--
ALTER TABLE `exper_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `message_models`
--
ALTER TABLE `message_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `partner_models`
--
ALTER TABLE `partner_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_models`
--
ALTER TABLE `product_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `service_models`
--
ALTER TABLE `service_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slider_models`
--
ALTER TABLE `slider_models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
