-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 05, 2021 at 05:07 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `articlecms`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `user_id`, `title`, `description`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 7, 'Dignissimos ut excepturi est sunt.', 'Inventore minus aliquam nesciunt et totam debitis dicta odit. Non officia id pariatur velit sit explicabo et. Odio et perferendis optio suscipit voluptas esse. Natus odit eum aut impedit.', 'https://lorempixel.com/640/480/?10464', NULL, '2021-04-05 11:01:00', '2021-04-05 11:01:00'),
(2, 7, 'Nobis sed eveniet necessitatibus id omnis provident natus.', 'Enim iusto nihil distinctio libero est. Architecto veniam ratione rerum quibusdam et laboriosam rerum. Saepe reprehenderit vitae et voluptatum consequatur distinctio. Maiores a officia doloribus.', 'https://lorempixel.com/640/480/?20535', NULL, '2021-04-05 11:01:00', '2021-04-05 11:01:00'),
(3, 5, 'Possimus id voluptatem qui dolor ratione necessitatibus voluptatem.', 'Molestiae sunt et vel atque. Qui officia tempore facilis velit. Odio quasi unde et excepturi omnis vel molestiae.', 'https://lorempixel.com/640/480/?54529', NULL, '2021-04-05 11:01:00', '2021-04-05 11:01:00'),
(4, 3, 'Voluptatibus aliquid consequuntur consectetur voluptas.', 'Labore assumenda illum dolorum maxime voluptatibus. Sit quidem delectus assumenda consequatur et natus. Iusto cum qui id et dolores deleniti velit est.', 'https://lorempixel.com/640/480/?42044', NULL, '2021-04-05 11:01:01', '2021-04-05 11:01:01'),
(5, 2, 'Aliquid et adipisci minus.', 'Voluptatem quaerat fuga nihil. Vel est qui nesciunt ut. Sed ea corporis sed blanditiis.', 'https://lorempixel.com/640/480/?59982', NULL, '2021-04-05 11:01:01', '2021-04-05 11:01:01'),
(6, 3, 'Earum architecto odit ducimus laborum odio voluptas impedit.', 'Impedit aut rerum facere aspernatur et aut. Qui delectus odit et quidem est est facere consequatur. Dolorum adipisci rerum nam modi doloribus aut.', 'https://lorempixel.com/640/480/?38268', NULL, '2021-04-05 11:01:01', '2021-04-05 11:01:01'),
(7, 2, 'Odit veniam aut ut doloremque et nemo.', 'Sit repellat consequuntur quaerat. Molestias aut repellat perferendis qui eum. Aut iusto sed officiis vero. Odit facere quia porro dolore. Cupiditate velit ut eius quia tempore laborum eaque error.', 'download (1).png', NULL, '2021-04-05 11:01:02', '2021-04-05 11:33:37'),
(8, 1, 'Fugit deleniti molestias velit.', 'Est quis expedita sint. Ipsam qui cumque voluptatem aut porro quisquam. Temporibus quas expedita harum aut voluptatum voluptatem et.', 'https://lorempixel.com/640/480/?91173', NULL, '2021-04-05 11:01:02', '2021-04-05 11:01:02'),
(9, 9, 'Eum ratione aspernatur aut voluptatibus earum quidem.', 'Ab debitis ut animi quia velit. Voluptatem architecto omnis ut aspernatur.', 'sil6.jpg', NULL, '2021-04-05 11:01:02', '2021-04-05 11:09:06'),
(10, 3, 'Aut voluptates sapiente autem a ut dolore.', 'Voluptas ab debitis mollitia. Odio aut voluptatem est est et. Labore eligendi quia aut.', 'https://lorempixel.com/640/480/?99276', NULL, '2021-04-05 11:01:02', '2021-04-05 11:01:02'),
(11, 11, 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'sil2.jpg', NULL, '2021-04-05 11:04:56', '2021-04-05 11:04:56'),
(12, 9, 'Where does it come from?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 'sil4.jpg', NULL, '2021-04-05 11:19:20', '2021-04-05 11:19:20'),
(13, 2, 'The standard Lorem Ipsum passage, used since the 1500s', '\"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"', 'sil5.jpg', NULL, '2021-04-05 11:35:19', '2021-04-05 11:35:31');

-- --------------------------------------------------------

--
-- Table structure for table `article_tags`
--

CREATE TABLE `article_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `tag_id` bigint(20) UNSIGNED NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `article_tags`
--

INSERT INTO `article_tags` (`id`, `article_id`, `tag_id`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 9, NULL, '2021-04-05 11:01:07', '2021-04-05 11:01:07'),
(2, 1, 10, NULL, '2021-04-05 11:01:07', '2021-04-05 11:01:07'),
(3, 9, 2, NULL, '2021-04-05 11:01:07', '2021-04-05 11:01:07'),
(4, 5, 2, NULL, '2021-04-05 11:01:07', '2021-04-05 11:01:07'),
(5, 5, 1, NULL, '2021-04-05 11:01:08', '2021-04-05 11:01:08'),
(6, 6, 5, NULL, '2021-04-05 11:01:08', '2021-04-05 11:01:08'),
(7, 9, 2, NULL, '2021-04-05 11:01:08', '2021-04-05 11:01:08'),
(8, 6, 3, NULL, '2021-04-05 11:01:08', '2021-04-05 11:01:08'),
(9, 7, 9, NULL, '2021-04-05 11:01:09', '2021-04-05 11:01:09'),
(10, 3, 2, NULL, '2021-04-05 11:01:09', '2021-04-05 11:01:09'),
(11, 11, 11, NULL, '2021-04-05 11:04:57', '2021-04-05 11:04:57'),
(12, 11, 12, NULL, '2021-04-05 11:04:57', '2021-04-05 11:04:57'),
(13, 9, 11, NULL, '2021-04-05 11:09:14', '2021-04-05 11:09:14'),
(14, 9, 12, NULL, '2021-04-05 11:09:15', '2021-04-05 11:09:15'),
(15, 12, 13, NULL, '2021-04-05 11:19:21', '2021-04-05 11:19:21'),
(16, 12, 4, NULL, '2021-04-05 11:19:21', '2021-04-05 11:19:21'),
(17, 12, 14, NULL, '2021-04-05 11:19:21', '2021-04-05 11:19:21'),
(18, 12, 15, NULL, '2021-04-05 11:19:22', '2021-04-05 11:19:22'),
(19, 12, 16, NULL, '2021-04-05 11:19:23', '2021-04-05 11:19:23'),
(20, 9, 4, NULL, '2021-04-05 11:29:46', '2021-04-05 11:29:46'),
(21, 7, 13, NULL, '2021-04-05 11:33:56', '2021-04-05 11:33:56'),
(22, 7, 17, NULL, '2021-04-05 11:33:56', '2021-04-05 11:33:56'),
(23, 7, 18, NULL, '2021-04-05 11:33:56', '2021-04-05 11:33:56'),
(24, 7, 19, NULL, '2021-04-05 11:33:57', '2021-04-05 11:33:57'),
(25, 13, 20, NULL, '2021-04-05 11:35:19', '2021-04-05 11:35:19'),
(26, 13, 15, NULL, '2021-04-05 11:35:20', '2021-04-05 11:35:20'),
(27, 13, 21, NULL, '2021-04-05 11:35:20', '2021-04-05 11:35:20');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `article_id`, `text`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 'Qui labore rerum et iusto rem eum commodi excepturi.', NULL, '2021-04-05 11:01:05', '2021-04-05 11:01:05'),
(2, 7, 10, 'Sit fugit sed quae enim quia.', NULL, '2021-04-05 11:01:06', '2021-04-05 11:01:06'),
(3, 2, 10, 'Et ducimus possimus aliquid dolore nemo est blanditiis.', NULL, '2021-04-05 11:01:06', '2021-04-05 11:01:06'),
(4, 2, 6, 'Illum velit et et unde.', NULL, '2021-04-05 11:01:06', '2021-04-05 11:01:06'),
(5, 10, 9, 'Ut sequi similique ipsam sit distinctio.', NULL, '2021-04-05 11:01:06', '2021-04-05 11:01:06'),
(6, 4, 8, 'Blanditiis voluptatibus dolores reiciendis.', NULL, '2021-04-05 11:01:06', '2021-04-05 11:01:06'),
(7, 9, 3, 'Adipisci vero earum sed et.', NULL, '2021-04-05 11:01:06', '2021-04-05 11:01:06'),
(8, 3, 2, 'Magni nesciunt quod maxime dolorem.', NULL, '2021-04-05 11:01:07', '2021-04-05 11:01:07'),
(9, 2, 3, 'Et distinctio qui iure ipsam illum.', NULL, '2021-04-05 11:01:07', '2021-04-05 11:01:07'),
(10, 5, 1, 'Maxime quod quia sint est qui maxime officia.', NULL, '2021-04-05 11:01:07', '2021-04-05 11:01:07'),
(11, 9, 9, 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', NULL, '2021-04-05 11:20:14', '2021-04-05 11:20:14'),
(12, 2, 13, '\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"', NULL, '2021-04-05 11:35:52', '2021-04-05 11:35:52');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(22, '2014_10_12_000000_create_users_table', 1),
(23, '2014_10_12_100000_create_password_resets_table', 1),
(24, '2019_08_19_000000_create_failed_jobs_table', 1),
(25, '2021_04_04_154849_create_articles_table', 1),
(26, '2021_04_04_160037_create_tags_table', 1),
(27, '2021_04_04_161127_create_comments_table', 1),
(28, '2021_04_04_161432_create_article_tags_table', 1);

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
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'alias', NULL, '2021-04-05 11:01:03', '2021-04-05 11:01:03'),
(2, 'et', NULL, '2021-04-05 11:01:03', '2021-04-05 11:01:03'),
(3, 'veniam', NULL, '2021-04-05 11:01:03', '2021-04-05 11:01:03'),
(4, 'velit', NULL, '2021-04-05 11:01:03', '2021-04-05 11:01:03'),
(5, 'dolorum', NULL, '2021-04-05 11:01:04', '2021-04-05 11:01:04'),
(6, 'nulla', NULL, '2021-04-05 11:01:04', '2021-04-05 11:01:04'),
(7, 'eaque', NULL, '2021-04-05 11:01:04', '2021-04-05 11:01:04'),
(8, 'modi', NULL, '2021-04-05 11:01:05', '2021-04-05 11:01:05'),
(9, 'vel', NULL, '2021-04-05 11:01:05', '2021-04-05 11:01:05'),
(10, 'omnis', NULL, '2021-04-05 11:01:05', '2021-04-05 11:01:05'),
(11, 'lipsum', NULL, '2021-04-05 11:04:57', '2021-04-05 11:04:57'),
(12, 'randomtext', NULL, '2021-04-05 11:04:57', '2021-04-05 11:04:57'),
(13, 'ex', NULL, '2021-04-05 11:19:20', '2021-04-05 11:19:20'),
(14, 'reiciendis', NULL, '2021-04-05 11:19:21', '2021-04-05 11:19:21'),
(15, 'may', NULL, '2021-04-05 11:19:22', '2021-04-05 11:19:22'),
(16, 'mayf', NULL, '2021-04-05 11:19:22', '2021-04-05 11:19:22'),
(17, ' velit', NULL, '2021-04-05 11:33:56', '2021-04-05 11:33:56'),
(18, ' reiciendis', NULL, '2021-04-05 11:33:56', '2021-04-05 11:33:56'),
(19, ' may', NULL, '2021-04-05 11:33:56', '2021-04-05 11:33:56'),
(20, 'Lorem', NULL, '2021-04-05 11:35:19', '2021-04-05 11:35:19'),
(21, 'june', NULL, '2021-04-05 11:35:20', '2021-04-05 11:35:20');

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
(1, 'Darwin Quigley', 'ulemke@example.net', '2021-04-05 11:00:58', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'lwyWqfmilL', '2021-04-05 11:00:58', '2021-04-05 11:00:58'),
(2, 'Margaret Carroll DVM', 'abshire.alysha@example.com', '2021-04-05 11:00:59', '$2y$10$hzBrUZgBTM9hPDuOOAxhruF9i7wgJ2LS3ZPoxlRk2ktM6aTVvY9em', 'jbsebi90awpIfH0h1CqWHuRej85mLHhSQDlnaD80IiSOYgHWoIDH2Ditfs2T', '2021-04-05 11:00:59', '2021-04-05 11:00:59'),
(3, 'Prof. Nayeli Keebler', 'antoinette.schneider@example.org', '2021-04-05 11:00:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'xpkpuzjfgF', '2021-04-05 11:00:59', '2021-04-05 11:00:59'),
(4, 'Prof. Leopoldo Nikolaus V', 'gideon97@example.org', '2021-04-05 11:00:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'AwmjQczBkl', '2021-04-05 11:00:59', '2021-04-05 11:00:59'),
(5, 'Lelah Olson', 'destinee59@example.net', '2021-04-05 11:00:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'iFsNy2eTul', '2021-04-05 11:00:59', '2021-04-05 11:00:59'),
(6, 'Dorcas Fisher MD', 'edd16@example.org', '2021-04-05 11:00:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'WXUdt8NmpB', '2021-04-05 11:00:59', '2021-04-05 11:00:59'),
(7, 'Prof. Jayde Pfeffer Sr.', 'libby.turner@example.org', '2021-04-05 11:00:59', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '5CQ3XpyYIF', '2021-04-05 11:00:59', '2021-04-05 11:00:59'),
(8, 'Miss Aniyah Casper I', 'grover49@example.com', '2021-04-05 11:01:00', '$2y$10$hzBrUZgBTM9hPDuOOAxhruF9i7wgJ2LS3ZPoxlRk2ktM6aTVvY9em', 'i1brHEzAJVSTRA8N3o6y5SP01wK8mbkOKgb8h30QvyBJNYbk3nfZt4DRML1J', '2021-04-05 11:01:00', '2021-04-05 11:01:00'),
(9, 'Anne Franecki', 'francisca.padberg@example.net', '2021-04-05 11:01:00', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'rNOGTX0aL9bHSqqDCx4yVXjZYwErxOtkxoEkaBHbGuzaG3ohSVwnfqUnraDG', '2021-04-05 11:01:00', '2021-04-05 11:01:00'),
(10, 'Ofelia Blick PhD', 'mariah.waters@example.com', '2021-04-05 11:01:00', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '8EVC6dQdi2', '2021-04-05 11:01:00', '2021-04-05 11:01:00'),
(11, 'Priyanka Shinde', 'priyankashinde2224@gmail.com', NULL, '$2y$10$hzBrUZgBTM9hPDuOOAxhruF9i7wgJ2LS3ZPoxlRk2ktM6aTVvY9em', NULL, '2021-04-05 11:03:19', '2021-04-05 11:03:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_user_id_foreign` (`user_id`);

--
-- Indexes for table `article_tags`
--
ALTER TABLE `article_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_tags_article_id_foreign` (`article_id`),
  ADD KEY `article_tags_tag_id_foreign` (`tag_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_article_id_foreign` (`article_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
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
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `article_tags`
--
ALTER TABLE `article_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `article_tags`
--
ALTER TABLE `article_tags`
  ADD CONSTRAINT `article_tags_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `article_tags_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
