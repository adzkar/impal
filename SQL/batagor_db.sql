-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 02, 2019 at 07:28 PM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.21-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `batagor_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lapangan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `status`, `lapangan_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'lunas', 1, 6, '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(2, 'belum', 8, 2, '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(3, 'lunas', 2, 1, '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(4, 'lunas', 6, 6, '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(5, 'belum', 8, 1, '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(6, 'lunas', 2, 3, '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(7, 'belum', 5, 7, '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(8, 'lunas', 4, 10, '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(9, 'belum', 6, 9, '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(10, 'belum', 6, 8, '2019-09-02 05:23:57', '2019-09-02 05:23:57');

-- --------------------------------------------------------

--
-- Table structure for table `detail_carts`
--

CREATE TABLE `detail_carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `total` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_carts`
--

INSERT INTO `detail_carts` (`id`, `total`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 19221, 6, '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(2, 27085, 7, '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(3, 90048, 8, '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(4, 4613, 9, '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(5, 53372, 6, '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(6, 61147, 2, '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(7, 16910, 3, '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(8, 85525, 10, '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(9, 36013, 6, '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(10, 62440, 1, '2019-09-02 05:23:57', '2019-09-02 05:23:57');

-- --------------------------------------------------------

--
-- Table structure for table `gors`
--

CREATE TABLE `gors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gors`
--

INSERT INTO `gors` (`id`, `nama`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Voluptas doloremque aliquid repudiandae sint.', '26176 Annetta Course\nVandervorthaven, AL 65520', '2019-09-02 05:23:56', '2019-09-02 05:23:56'),
(2, 'Illo et repellat eligendi quo quia.', '1414 Greenfelder Stravenue\nReedbury, MD 97079', '2019-09-02 05:23:56', '2019-09-02 05:23:56'),
(3, 'Quasi magnam sint odit eum.', '58111 Kunde Bypass\nHuelshaven, RI 06804', '2019-09-02 05:23:56', '2019-09-02 05:23:56'),
(4, 'Recusandae unde aliquid incidunt.', '44915 Parker Stream Apt. 149\nHiramborough, NM 57797-0733', '2019-09-02 05:23:56', '2019-09-02 05:23:56'),
(5, 'Pariatur quia vero eius vel ea est qui.', '56452 Jaiden Radial Apt. 468\nNew Trenton, IA 50357-1443', '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(6, 'Iure animi expedita pariatur dolores perferendis necessitatibus atque.', '7936 Hackett Harbor\nYundtside, MA 33579', '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(7, 'Laudantium aliquid sunt deserunt ullam quis quod.', '3174 Johathan Overpass Apt. 354\nTorpview, NC 85679-8733', '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(8, 'Ullam ipsam aliquam magni aut.', '627 Carley Vista\nNorth Audie, LA 43584', '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(9, 'Non incidunt molestiae ea aperiam quia.', '259 Conroy Vista Suite 286\nLake Jaycee, OH 05643', '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(10, 'Quo et non aut sapiente enim id est sunt.', '197 Damon Avenue Apt. 275\nLake Itzel, PA 89360', '2019-09-02 05:23:57', '2019-09-02 05:23:57');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `lapangan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `file_name`, `gor_id`, `lapangan_id`, `created_at`, `updated_at`) VALUES
(1, '/static/Nihil inventore voluptates aperiam corporis in enim voluptate..jpg', 6, 7, '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(2, '/static/Voluptate aut eum qui..jpg', 7, 3, '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(3, '/static/Nihil consequatur sint at..jpg', 5, 7, '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(4, '/static/Animi et eveniet vel sit..jpg', 10, 1, '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(5, '/static/Voluptas sit quisquam et eius ea consequatur..jpg', 2, 5, '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(6, '/static/Qui ad voluptatem libero vero..jpg', 1, 5, '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(7, '/static/Et delectus fuga ut at nihil..jpg', 6, 9, '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(8, '/static/Eum sint corrupti et nulla voluptate..jpg', 8, 1, '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(9, '/static/Quibusdam exercitationem autem quis rem..jpg', 4, 6, '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(10, '/static/Maiores quasi et facilis exercitationem sunt et qui..jpg', 6, 3, '2019-09-02 05:23:57', '2019-09-02 05:23:57');

-- --------------------------------------------------------

--
-- Table structure for table `lapangans`
--

CREATE TABLE `lapangans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `harga` int(11) NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lapangans`
--

INSERT INTO `lapangans` (`id`, `harga`, `detail`, `gor_id`, `created_at`, `updated_at`) VALUES
(1, 1400595137, 'Alice, \'I\'ve often seen them at last, and they went up to the general conclusion, that wherever you go on? It\'s by far the most confusing thing I ask! It\'s always six o\'clock now.\' A bright idea.', 1, '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(2, 1346403422, 'YOUR table,\' said Alice; \'I might as well say that \"I see what was coming. It was all dark overhead; before her was another puzzling question; and as the large birds complained that they must be.', 10, '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(3, 1635649410, 'Alice, very loudly and decidedly, and the executioner myself,\' said the one who had been found and handed back to them, and all the unjust things--\' when his eye chanced to fall upon Alice, as she.', 5, '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(4, 801137824, 'For some minutes it puffed away without being invited,\' said the Mock Turtle replied in a piteous tone. And she opened the door with his knuckles. It was high time you were all writing very busily.', 10, '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(5, 37134083, 'Majesty means, of course,\' said the King, \'that saves a world of trouble, you know, with oh, such long ringlets, and mine doesn\'t go in at once.\' And in she went. Once more she found she could do to.', 3, '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(6, 220836044, 'Some of the garden: the roses growing on it (as she had hurt the poor child, \'for I can\'t get out at the end of the jury eagerly wrote down on one side, to look over their heads. She felt that this.', 1, '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(7, 1121552804, 'Majesty,\' said Alice to find that she might as well as I get SOMEWHERE,\' Alice added as an explanation; \'I\'ve none of my life.\' \'You are old,\' said the Rabbit angrily. \'Here! Come and help me out of.', 3, '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(8, 239339923, 'Gryphon. \'Do you play croquet?\' The soldiers were always getting up and repeat something now. Tell her to wink with one eye; but to her very much what would be worth the trouble of getting her hands.', 3, '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(9, 1904141437, 'I suppose?\' \'Yes,\' said Alice, always ready to agree to everything that was linked into hers began to feel very uneasy: to be an old crab, HE was.\' \'I never went to the part about her and to hear.', 10, '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(10, 1657794041, 'Hatter. He had been anything near the door opened inwards, and Alice\'s elbow was pressed so closely against her foot, that there was not even room for this, and Alice was very deep, or she should.', 7, '2019-09-02 05:23:57', '2019-09-02 05:23:57');

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
(33, '2019_09_02_184400_create_password_resets_table', 1),
(34, '2019_09_02_184401_create_gors_table', 1),
(35, '2019_09_02_184402_create_users_table', 1),
(36, '2019_09_02_184403_create_detail_carts_table', 1),
(37, '2019_09_02_184404_create_lapangans_table', 1),
(38, '2019_09_02_184405_create_ratings_table', 1),
(39, '2019_09_02_184406_create_images_table', 1),
(40, '2019_09_02_184407_create_carts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rate` int(11) NOT NULL,
  `komentar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `gor_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `rate`, `komentar`, `user_id`, `gor_id`, `created_at`, `updated_at`) VALUES
(1, 5, 'Voluptatem ut et qui aperiam possimus facilis voluptatem.', 2, 3, '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(2, 5, 'Doloremque qui at aperiam voluptatem quam dolor quo.', 10, 1, '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(3, 4, 'Aut sapiente quos ipsum possimus sequi.', 9, 5, '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(4, 4, 'Fugit ullam voluptas qui provident.', 3, 1, '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(5, 3, 'Architecto aut perferendis doloribus ipsam neque laborum.', 2, 10, '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(6, 3, 'Et et quidem exercitationem optio vel.', 7, 7, '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(7, 2, 'Repellendus modi ea suscipit quidem minus perferendis.', 3, 2, '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(8, 3, 'Eveniet amet esse et dolore.', 8, 3, '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(9, 1, 'Qui voluptatem sapiente sed voluptates soluta.', 6, 8, '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(10, 1, 'Quis rerum est ex dolorem iure.', 5, 3, '2019-09-02 05:23:57', '2019-09-02 05:23:57');

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
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `phone_number`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Mrs. Liana Walter III', 'ruecker.cleve@example.com', '2019-09-02 05:23:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'xfrawKBYPQ', '(891) 532-4859 x24085', 'pihak_gor', '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(2, 'Kaci VonRueden', 'abelardo.olson@example.com', '2019-09-02 05:23:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'McZHEyyxSF', '(457) 343-2788 x6841', 'pihak_gor', '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(3, 'Christop Parker', 'noemi.haag@example.com', '2019-09-02 05:23:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'LKMdx2EcDc', '+13164029820', 'pihak_gor', '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(4, 'Dr. Avery Ritchie PhD', 'huels.ray@example.com', '2019-09-02 05:23:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Fz69RcbhNk', '+1.884.903.0174', 'pihak_gor', '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(5, 'Ms. Kiera Ernser PhD', 'kenneth.conroy@example.org', '2019-09-02 05:23:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ZnIvRtkkF5', '(478) 345-4341', 'customer', '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(6, 'Rashad Feeney', 'lebsack.lupe@example.com', '2019-09-02 05:23:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'T8vc0ooV37', '(909) 460-5611', 'customer', '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(7, 'Ericka Hirthe', 'ufranecki@example.com', '2019-09-02 05:23:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'tsFHGPXTLm', '874.867.0178 x204', 'customer', '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(8, 'Randall Orn', 'freda.ebert@example.net', '2019-09-02 05:23:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'fBuckLaaW5', '+1-679-376-8915', 'customer', '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(9, 'Dr. Rocky Wiza IV', 'thalia.schmitt@example.com', '2019-09-02 05:23:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'xG9E30sBIN', '1-629-279-6208', 'pihak_gor', '2019-09-02 05:23:57', '2019-09-02 05:23:57'),
(10, 'Deron Ortiz DDS', 'rosemarie.moen@example.com', '2019-09-02 05:23:57', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'lNxbAlsDVZ', '510-723-5226 x55261', 'pihak_gor', '2019-09-02 05:23:57', '2019-09-02 05:23:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_lapangan_id_foreign` (`lapangan_id`),
  ADD KEY `carts_user_id_foreign` (`user_id`);

--
-- Indexes for table `detail_carts`
--
ALTER TABLE `detail_carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_carts_user_id_foreign` (`user_id`);

--
-- Indexes for table `gors`
--
ALTER TABLE `gors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_gor_id_foreign` (`gor_id`),
  ADD KEY `images_lapangan_id_foreign` (`lapangan_id`);

--
-- Indexes for table `lapangans`
--
ALTER TABLE `lapangans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lapangans_gor_id_foreign` (`gor_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ratings_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `detail_carts`
--
ALTER TABLE `detail_carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `gors`
--
ALTER TABLE `gors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `lapangans`
--
ALTER TABLE `lapangans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_lapangan_id_foreign` FOREIGN KEY (`lapangan_id`) REFERENCES `lapangans` (`id`),
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `detail_carts`
--
ALTER TABLE `detail_carts`
  ADD CONSTRAINT `detail_carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_gor_id_foreign` FOREIGN KEY (`gor_id`) REFERENCES `gors` (`id`),
  ADD CONSTRAINT `images_lapangan_id_foreign` FOREIGN KEY (`lapangan_id`) REFERENCES `lapangans` (`id`);

--
-- Constraints for table `lapangans`
--
ALTER TABLE `lapangans`
  ADD CONSTRAINT `lapangans_gor_id_foreign` FOREIGN KEY (`gor_id`) REFERENCES `gors` (`id`);

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

SELECT * FROM carts;
SELECT * FROM detail_carts;
SELECT * FROM gors;
SELECT * FROM images;
SELECT * FROM lapangans;
SELECT * FROM ratings;
SELECT * FROM users;