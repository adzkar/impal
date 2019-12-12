-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2019 at 09:06 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id_rek` int(11) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `no_rekening` int(11) NOT NULL,
  `nama_rekening` int(11) NOT NULL,
  `bank_rekening` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `carts_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lapangan_id` bigint(20) UNSIGNED DEFAULT NULL,
  `cust_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`carts_id`, `status`, `lapangan_id`, `cust_id`) VALUES
(31, 'belum', 19, 11),
(32, 'belum', 7, 11),
(33, 'Lunas', 19, 11),
(34, 'Lunas', 19, 11);

-- --------------------------------------------------------

--
-- Table structure for table `detail_carts`
--

CREATE TABLE `detail_carts` (
  `carts_id` bigint(20) UNSIGNED NOT NULL,
  `total` bigint(20) UNSIGNED NOT NULL,
  `tanggal_main` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jam_main` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `durasi` int(2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `bukti_upload` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detail_carts`
--

INSERT INTO `detail_carts` (`carts_id`, `total`, `tanggal_main`, `jam_main`, `durasi`, `created_at`, `updated_at`, `bukti_upload`) VALUES
(29, 1876547949, '2019-12-08', '7:00', 1, '2019-12-07 21:12:16', '2019-12-07 21:12:16', 'none'),
(30, 1054185987, '2019-12-12', '7:00', 1, '2019-12-11 12:40:23', '2019-12-11 12:40:23', 'none'),
(31, 100000, '2019-12-13', '7:00', 2, '2019-12-11 19:32:27', '2019-12-11 19:32:27', 'none'),
(32, 5270929935, '2019-12-13', '8:00', 5, '2019-12-11 19:43:34', '2019-12-11 19:43:34', 'none'),
(33, 150000, '2019-12-14', '12:00', 3, '2019-12-11 19:44:57', '2019-12-11 19:44:57', 'none'),
(34, 50000, '2019-12-12', '9:00', 1, '2019-12-12 01:49:53', '2019-12-12 01:49:53', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `gors`
--

CREATE TABLE `gors` (
  `gor_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `nama_gor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gors`
--

INSERT INTO `gors` (`gor_id`, `user_id`, `nama_gor`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 12, 'Qui officiis architecto natus et nam.', '700 Hammes Islands Suite 884\nClarkburgh, PA 64955-8649', '2019-09-02 19:27:11', '2019-09-02 19:27:11'),
(2, 12, 'Ad odio dolorum consequuntur qui quidem similique saepe.', '40443 D\'Amore Highway\nWest Gustave, OH 55514', '2019-09-02 19:27:11', '2019-09-02 19:27:11'),
(3, 12, 'Consequatur ipsam est culpa in laudantium.', '4742 Blanda Road Apt. 139\nConnview, AL 53439', '2019-09-02 19:27:11', '2019-09-02 19:27:11'),
(4, 12, 'Inventore autem fugit perspiciatis illum occaecati deleniti quidem.', '766 Destini Villages Apt. 284\nWest Carleeberg, MT 97249-0509', '2019-09-02 19:27:11', '2019-09-02 19:27:11'),
(6, 12, 'Dicta sit optio et autem.', '727 Jenkins Curve\nAmelyshire, NJ 05677', '2019-09-02 19:27:11', '2019-09-02 19:27:11'),
(7, 12, 'Similique quidem ad asperiores est dolores.', '9172 Gaylord Club Apt. 067\nEast Shirleyport, LA 60681-6008', '2019-09-02 19:27:11', '2019-09-02 19:27:11'),
(8, 12, 'Quibusdam suscipit fugiat sed cum harum.', '7775 Predovic Flat Suite 771\nNorth Percivalfort, MA 49208', '2019-09-02 19:27:11', '2019-09-02 19:27:11'),
(9, 12, 'Quis laudantium ullam odio.', '99394 Robel Bypass Suite 648\nWest Soledadview, DE 06933-1938', '2019-09-02 19:27:11', '2019-09-02 19:27:11'),
(10, 12, 'Amet corrupti eligendi atque maiores.', '414 Marielle Square Apt. 659\nColemanmouth, NE 50937', '2019-09-02 19:27:11', '2019-09-02 19:27:11'),
(11, 13, 'Ghina GOR', 'jl. cikoneng, kab bandung', '2019-12-11 19:30:27', '2019-12-11 19:30:27'),
(12, 13, 'te', 'te', '2019-12-11 21:38:55', '2019-12-11 21:38:55');

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
(4, '/static/sit.jpg', 2, 10, '2019-09-02 19:27:12', '2019-09-02 19:27:12'),
(5, '/static/neque.jpg', 10, 5, '2019-09-02 19:27:12', '2019-09-02 19:27:12'),
(7, '/static/alias.jpg', 8, 9, '2019-09-02 19:27:12', '2019-09-02 19:27:12'),
(9, '/static/repellat.jpg', 6, 7, '2019-09-02 19:27:12', '2019-09-02 19:27:12'),
(10, '/static/sit.jpg', 4, 3, '2019-09-02 19:27:12', '2019-09-02 19:27:12'),
(11, 'C:\\fakepath\\white-cat-2-1024x683.jpg', 11, 19, '2019-12-11 19:31:14', '2019-12-11 19:31:14'),
(12, 'C:\\fakepath\\seatingDeHart-1024x765.jpg', 11, 20, '2019-12-11 21:27:45', '2019-12-11 21:27:45');

-- --------------------------------------------------------

--
-- Table structure for table `lapangans`
--

CREATE TABLE `lapangans` (
  `lapangan_id` bigint(20) UNSIGNED NOT NULL,
  `nama_lapangan` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lapangans`
--

INSERT INTO `lapangans` (`lapangan_id`, `nama_lapangan`, `harga`, `detail`, `jenis`, `gor_id`, `created_at`, `updated_at`) VALUES
(3, 'Pocong', 20000, 'I eat one of the lefthand bit. * * * * * * \'Come, my head\'s free at last!\' said Alice aloud, addressing nobody in particular. \'She\'d soon fetch it here, lad!--Here, put \'em up at the top of it. She.', 'futsal', 3, '2019-09-02 19:27:12', '2019-09-02 19:27:12'),
(5, 'Keluarga', 348824443, 'Queen?\' said the Dodo, pointing to Alice as she added, \'and the moral of THAT is--\"Take care of the sea.\' \'I couldn\'t afford to learn it.\' said the Duchess, \'as pigs have to fly; and the moment they.', 'badminton', 10, '2019-09-02 19:27:12', '2019-09-02 19:27:12'),
(6, 'Warna', 1816231081, 'The Footman seemed to be lost: away went Alice like the three gardeners instantly jumped up, and began an account of the officers of the court,\" and I never understood what it was: she was now more.', 'futsal', 9, '2019-09-02 19:27:12', '2019-09-02 19:27:12'),
(7, 'Telkom', 1054185987, 'Duchess! The Duchess! Oh my dear Dinah! I wonder if I only wish people knew that: then they wouldn\'t be so proud as all that.\' \'With extras?\' asked the Gryphon, and all that,\' said Alice. \'Anything.', 'futsal', 1, '2019-09-02 19:27:12', '2019-09-02 19:27:12'),
(8, 'Kuntilanak', 1497846277, 'YOU are, first.\' \'Why?\' said the Lory hastily. \'I thought you did,\' said the Hatter. \'Nor I,\' said the Pigeon. \'I\'m NOT a serpent, I tell you!\' said Alice. \'Then you shouldn\'t talk,\' said the King.', 'basket', 9, '2019-09-02 19:27:12', '2019-09-02 19:27:12'),
(9, 'Merah', 2090443078, 'And have grown most uncommonly fat; Yet you finished the guinea-pigs!\' thought Alice. \'Now we shall have to go down the chimney!\' \'Oh! So Bill\'s got to do,\' said the Queen, who was sitting next to.', 'badminton', 9, '2019-09-02 19:27:12', '2019-09-02 19:27:12'),
(10, 'Raja', 1644565704, 'King. (The jury all wrote down on one knee. \'I\'m a poor man, your Majesty,\' said the Pigeon; \'but I know is, something comes at me like a wild beast, screamed \'Off with his head!\"\' \'How dreadfully.', 'voli', 2, '2019-09-02 19:27:12', '2019-09-02 19:27:12'),
(15, 'Ghina', 10000000, 'cantik manis hehe', 'cantik', 1, '2019-12-09 06:15:43', '2019-12-09 06:15:43'),
(18, 'Ghozy', 10000000, 'Ghina love Ghozy', 'futsal', 1, '2019-12-09 06:23:53', '2019-12-09 06:23:53'),
(19, 'GG Lap', 50000, 'GG Lap Ghozy Ghina', 'futsal', 11, '2019-12-11 19:31:14', '2019-12-11 19:31:14'),
(20, 'Ghozy', 10000, 'Hiyahiya', 'futsal', 11, '2019-12-11 21:27:45', '2019-12-11 21:27:45');

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
(49, '2019_09_02_184400_create_password_resets_table', 1),
(50, '2019_09_02_184401_create_gors_table', 1),
(51, '2019_09_02_184402_create_users_table', 1),
(52, '2019_09_02_184403_create_detail_carts_table', 1),
(53, '2019_09_02_184404_create_lapangans_table', 1),
(54, '2019_09_02_184405_create_ratings_table', 1),
(55, '2019_09_02_184406_create_images_table', 1),
(56, '2019_09_02_184407_create_carts_table', 1);

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
(1, 1, 'At voluptates incidunt sit iure sed voluptate consequatur eius.', 6, 4, '2019-09-02 19:27:12', '2019-09-02 19:27:12'),
(2, 1, 'Eum natus modi animi beatae vel quam.', 4, 9, '2019-09-02 19:27:12', '2019-09-02 19:27:12'),
(3, 2, 'Delectus modi ut assumenda ratione sed et.', 3, 4, '2019-09-02 19:27:12', '2019-09-02 19:27:12'),
(4, 1, 'Totam libero et vitae exercitationem nihil.', 9, 8, '2019-09-02 19:27:12', '2019-09-02 19:27:12'),
(5, 5, 'Et eaque soluta consequatur quia qui quidem.', 6, 10, '2019-09-02 19:27:12', '2019-09-02 19:27:12'),
(6, 4, 'Sit deserunt atque voluptatum quis minus quidem qui.', 1, 9, '2019-09-02 19:27:12', '2019-09-02 19:27:12'),
(7, 4, 'Nisi voluptas porro omnis.', 6, 6, '2019-09-02 19:27:12', '2019-09-02 19:27:12'),
(8, 3, 'Consequatur expedita repellat vero amet.', 10, 0, '2019-09-02 19:27:12', '2019-09-02 19:27:12'),
(9, 2, 'Eos voluptas animi natus cupiditate consectetur nisi quia.', 2, 4, '2019-09-02 19:27:12', '2019-09-02 19:27:12'),
(10, 3, 'Quo enim eum animi atque.', 4, 10, '2019-09-02 19:27:12', '2019-09-02 19:27:12');

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
(1, 'Jason Koch', 'roy.orn@example.com', '2019-09-02 19:27:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '3xgP06ANz9', '(440) 586-8281', 'pihak_gor', '2019-09-02 19:27:11', '2019-09-02 19:27:11'),
(2, 'Zion Goodwin', 'cade05@example.net', '2019-09-02 19:27:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'W4uVcDqZO5', '282-870-3984 x9018', 'pihak_gor', '2019-09-02 19:27:11', '2019-09-02 19:27:11'),
(3, 'Prof. Isai Lowe', 'feil.timmothy@example.net', '2019-09-02 19:27:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'WVvU0b66le', '612.414.8294 x252', 'customer', '2019-09-02 19:27:11', '2019-09-02 19:27:11'),
(4, 'Elouise Beatty', 'gene.wisozk@example.org', '2019-09-02 19:27:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'KqNddh5Yrw', '1-897-956-3071', 'pihak_gor', '2019-09-02 19:27:11', '2019-09-02 19:27:11'),
(5, 'Miss Elizabeth Thompson', 'ndurgan@example.org', '2019-09-02 19:27:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ETjbJzmes2', '910.441.5489', 'customer', '2019-09-02 19:27:12', '2019-09-02 19:27:12'),
(6, 'Maxine Beier', 'daniela.watsica@example.com', '2019-09-02 19:27:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'j7HxECFmHt', '1-312-624-3135', 'customer', '2019-09-02 19:27:12', '2019-09-02 19:27:12'),
(7, 'Dr. Elwin Johnson I', 'elijah11@example.org', '2019-09-02 19:27:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '7SryTrcBa8', '489-386-3011 x331', 'customer', '2019-09-02 19:27:12', '2019-09-02 19:27:12'),
(8, 'Mr. Emery Sporer DDS', 'hal.oconnell@example.org', '2019-09-02 19:27:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '6gwIjHoMvl', '1-645-658-3949', 'customer', '2019-09-02 19:27:12', '2019-09-02 19:27:12'),
(9, 'Kody Runolfsson', 'zakary.lowe@example.net', '2019-09-02 19:27:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'CgQOxUVnFK', '1-729-460-9793', 'pihak_gor', '2019-09-02 19:27:12', '2019-09-02 19:27:12'),
(10, 'Mr. Leonard Ruecker', 'bechtelar.ruby@example.net', '2019-09-02 19:27:11', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'NQHwPW2IvG', '639.427.4190', 'customer', '2019-09-02 19:27:12', '2019-09-02 19:27:12'),
(11, 'Ridaffa', 'ridaffa5@gmail.com', '2019-11-25 19:33:26', 'ec44d4226563dad616cdc3562d72f235', '4qC7wGKiiT', '02222131232', 'customer', '2019-11-25 19:33:26', '2019-11-25 19:33:26'),
(12, 'Alan', 'alanvenasa@outlook.com', '2019-12-09 04:10:48', 'd2c7fa67f7d98357c1e78802049853c8', 'WWiBl78iTJ', '08999644467', 'pihak_gor', '2019-12-09 04:10:48', '2019-12-09 04:10:48'),
(13, 'jamessaldo', 'james@gmail.com', '2019-12-11 19:29:08', '202cb962ac59075b964b07152d234b70', '9I6eC3TuXn', '081264328252', 'pihak_gor', '2019-12-11 19:29:08', '2019-12-11 19:29:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id_rek`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`carts_id`),
  ADD KEY `carts_lapangan_id_foreign` (`lapangan_id`),
  ADD KEY `carts_user_id_foreign` (`cust_id`);

--
-- Indexes for table `detail_carts`
--
ALTER TABLE `detail_carts`
  ADD PRIMARY KEY (`carts_id`);

--
-- Indexes for table `gors`
--
ALTER TABLE `gors`
  ADD PRIMARY KEY (`gor_id`);

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
  ADD PRIMARY KEY (`lapangan_id`),
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
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id_rek` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `carts_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `detail_carts`
--
ALTER TABLE `detail_carts`
  MODIFY `carts_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `gors`
--
ALTER TABLE `gors`
  MODIFY `gor_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `lapangans`
--
ALTER TABLE `lapangans`
  MODIFY `lapangan_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_gor_id_foreign` FOREIGN KEY (`gor_id`) REFERENCES `gors` (`gor_id`),
  ADD CONSTRAINT `images_lapangan_id_foreign` FOREIGN KEY (`lapangan_id`) REFERENCES `lapangans` (`lapangan_id`);

--
-- Constraints for table `lapangans`
--
ALTER TABLE `lapangans`
  ADD CONSTRAINT `lapangans_gor_id_foreign` FOREIGN KEY (`gor_id`) REFERENCES `gors` (`gor_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
