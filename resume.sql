-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2021 at 05:27 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `resume`
--

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone1` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone2` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `workplace` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `workplace1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present1` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `college` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualifications` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `references` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skills` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hobbies` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `languages` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `links` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Day` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Daylast` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monthlast` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yearlast` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Daysecond` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monthsecond` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yearsecond` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Day1` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `month1` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year1` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eDay` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emonth` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eyear` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eDay1` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emonth1` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eyear1` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duties` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role1` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duties1` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `workplace2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Dayseco` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `monthseco` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yearseco` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Da` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mon` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yea` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dutie` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `schools` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secondaryq` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eDaysec` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emonthsec` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eyearsec` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eDaysec1` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emonthsec1` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eyearsec1` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `schoolp` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `primaryq` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eDayprim` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emonthprim` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eyearprim` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eDay1prim` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emonth1prim` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eyear1prim` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role2` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `presen` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `profession`, `phone1`, `phone2`, `image`, `comments`, `workplace`, `workplace1`, `present`, `present1`, `college`, `qualifications`, `references`, `skills`, `hobbies`, `languages`, `links`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `Day`, `month`, `year`, `Daylast`, `monthlast`, `yearlast`, `Daysecond`, `monthsecond`, `yearsecond`, `Day1`, `month1`, `year1`, `eDay`, `emonth`, `eyear`, `eDay1`, `emonth1`, `eyear1`, `role`, `duties`, `role1`, `duties1`, `workplace2`, `Dayseco`, `monthseco`, `yearseco`, `Da`, `mon`, `yea`, `dutie`, `schools`, `secondaryq`, `eDaysec`, `emonthsec`, `eyearsec`, `eDaysec1`, `emonthsec1`, `eyearsec1`, `schoolp`, `primaryq`, `eDayprim`, `emonthprim`, `eyearprim`, `eDay1prim`, `emonth1prim`, `eyear1prim`, `role2`, `presen`) VALUES
(1, 'Chanda Chewe', 'Physicist', '0961264154', '0977832230', 'myimage/HVGK3572.jpg', 'I am software developer specialized in both front and backend development', 'Aurial Designs', 'Chimwemwe Secondary School', 'present', '', 'The Copperbelt University (CBU)', 'Bsc Physics Education', 'References available upon request', '1. Programmer\r\n2.Typist\r\n3. Physicist', 'Swimming, cooking, reading novels, playing chess, and computer coding', 'English, Bemba', 'www.chewetech.com', 'chewec03@gmail.com', NULL, '$2y$10$nv9or0QaS.KJRAOxvR3wKev.EYZxrnIRC1nj3VW9PYePrQybIZK5.', NULL, '2021-04-03 16:27:51', '2021-04-07 07:00:59', '16', 'April', '2021', '', '', '0', '12', 'April', '2019', '9', 'August', '2019', '29', 'August', '2016', '17', 'August', '2020', 'Programmer', 'Backend developer building and developing websites', 'Physics Teacher', 'Physics teacher teaching Secondary physics to grade ten\'s and eleven\'s.', 'Mopani', '16', 'September', '2020', '', '', '', 'copper min', 'Chimwemwe Secondary School', 'School Certificate', '22', 'january', '2012', '27', 'October', '2014', 'Kamatipa secondary school', 'Grade seven certicate', '18', 'january', '2003', '19', 'Novermber', '2009', 'Foreman', ''),
(2, 'chanda chewe', 'Programmer', '0973123456', '0987651423', 'myimage/IMG_3093.PNG', 'I am Qualified programmer with specialization in both front and back end development', 'Namusanchila', 'Chimwemwe Secondary School', '', '', 'The Copperbelt University (CBU)', 'Bsc Physics Education', 'References available upon request', 'Typing and programming', 'Swimming, cooking, reading novels, playing chess, computer coding', 'English, Bemba', 'www.chewetech.com', 'chewec03@icloud.com', NULL, '$2y$10$J4At1CRKLot7GWMjSlYW9.doCQd7TL5oYRaAHPsry//ksOP6Gy.eu', NULL, '2021-04-09 06:42:00', '2021-04-09 06:56:49', '16', 'September', '2015', '17', 'December', '2015', '13', 'March', '2019', '14', 'October', '2004', '18', 'january', '2003', '17', 'October', '2004', 'Teacher', 'Primary Teacher', 'Physics Teacher', 'Physics Teacher', 'Mopani', '19', 'Novermber', '2002', '17', 'Novermber', '2002', 'foreman', 'Chimwemwe Secondary School', 'School Certificate', '18', 'Novermber', '2004', '17', 'September', '2004', 'Kamatipa secondary school', 'Grade seven certicate', '17', 'October', '2003', '17', 'October', '2005', 'Foreman', '');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
