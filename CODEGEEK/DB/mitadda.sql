-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2020 at 11:28 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mitadda`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogins`
--

CREATE TABLE `adminlogins` (
  `admin_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(112) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminlogins`
--

INSERT INTO `adminlogins` (`admin_id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'MIT Farm', 'mitfarm@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bases`
--

CREATE TABLE `bases` (
  `base_id` bigint(20) UNSIGNED NOT NULL,
  `base_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `base_status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bases`
--

INSERT INTO `bases` (`base_id`, `base_name`, `base_status`, `created_at`, `updated_at`) VALUES
(2, 'web site seo', 0, NULL, NULL),
(3, 'html design', 0, NULL, NULL),
(4, 'PHP  developer', 0, NULL, NULL),
(5, 'Laravel Developer', 0, NULL, NULL),
(6, 'PHP  developer', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `massages`
--

CREATE TABLE `massages` (
  `massage_id` bigint(20) UNSIGNED NOT NULL,
  `massage_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `massage_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `massage_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `massage_deteles` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `massage_type` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `massages`
--

INSERT INTO `massages` (`massage_id`, `massage_name`, `massage_phone`, `massage_email`, `massage_deteles`, `massage_type`, `created_at`, `updated_at`) VALUES
(1, 'gm parvez', '01861559750', 'gaziparvez452@gmail.com', 'hello sir \r\ni am Parvez Gazi from Bangladesh . i need a job in canada . if any  job in canada then place massage me.', 0, NULL, NULL),
(2, 'parvez', '01861559750', 'gaziparvez452@gmail.com', 'Your Massage is sent', 0, NULL, NULL),
(3, 'parvez', '01861559750', 'gaziparvez452@gmail.com', 'text-align: justify;\r\n	font-size: 18px;\r\n	color:black;\r\n	font-family: \'Josefin Sans\', sans-serif;\r\n	line-height: 30px; \r\n}', 0, NULL, NULL),
(4, 'parvez', '01861559750', 'gaziparvez452@gmail.com', 'd', 0, NULL, NULL),
(5, 'parvez', '01861559750', 'gaziparvez452@gmail.com', 'rr', 0, NULL, NULL);

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
(1, '2019_03_22_100623_create_services_table', 1),
(2, '2019_03_22_163548_create_titleandtags_table', 2),
(3, '2019_03_22_172736_create_sliders_table', 3),
(4, '2019_03_23_045344_create_adminlogins_table', 4),
(5, '2019_03_24_053052_create_students_table', 5),
(6, '2019_03_24_095659_create_bases_table', 6),
(7, '2019_04_15_101933_create_massages_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `service_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_detels` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_type` int(11) NOT NULL,
  `service_status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`service_id`, `service_name`, `service_price`, `service_detels`, `service_photo`, `service_type`, `service_status`, `created_at`, `updated_at`) VALUES
(2, 'Web design and development', '222', 'Web design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and development', 'image/2uYEyF7gQyKR0NUw0yN1.png', 2, 0, NULL, NULL),
(3, 'mitfarm', '22', 'Web design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and development', 'image/Av0xUHYDWwsJOZhqfCph.png', 1, 0, NULL, NULL),
(4, 'RESPONSIVE WEB DESIGN', '22', 'Web design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and \r\n\r\n1. web disign                                  5.laravel\r\n2.seo                                             6.javascript\r\n3.html\r\n4.css\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\ndevelopmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and development', 'image/rBoxKHthdOs0HGMo6Cxx.png', 1, 0, NULL, NULL),
(5, 'Web design and development', '22', 'Web design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and developmentWeb design and development', 'image/GSVptEMPVJUJyzPPAayG.png', 1, 0, NULL, NULL),
(6, 'RESPONSIVE WEB DESIGN', '22', 'DESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGNDESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGNDESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGNDESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGNDESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGNDESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGNDESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGNDESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGNDESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGNDESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGNDESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGNDESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGNDESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGNDESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGNDESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGNDESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGNDESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGNDESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGNDESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGN', 'image/EJAcy308NlYMVtYbIZqR.png', 2, 0, NULL, NULL),
(7, 'Web design and development', '22', 'DESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGNDESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGNDESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGNDESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGNDESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGNDESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGNDESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGNDESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGNDESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGNDESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGNDESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGNDESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGN', 'image/YdzjL0XmvlUghfK0SQ8k.png', 2, 0, NULL, NULL),
(8, 'RESPONSIVE WEB DESIGN', '22', 'DESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGNDESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGNDESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGNDESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGNDESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGN', 'image/QEGYNLXha9D7Dhr8BKZl.png', 2, 0, NULL, NULL),
(9, 'Web design and development', '22', 'DESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGNDESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGNDESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGNDESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGNDESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGNDESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGNDESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGN', 'image/zXY5r8zZcHqFny4VEHOV.png', 2, 0, NULL, NULL),
(10, 'RESPONSIVE WEB DESIGN', '22', 'DESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGNDESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGNDESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGNDESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGNDESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGNDESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGNDESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGNDESIGNRESPONSIVE WEB DESIGNRESPONSIVE WEB DESIGN', 'image/P3bVQnNXuEJpPTpS8BLT.png', 2, 0, NULL, NULL),
(11, 'fgh', '55', '</h1>pg</h1>', 'image/t9TGbyunx7Ng5GS82VnS.jpg', 2, 0, NULL, NULL),
(12, 're', 'er', '<ul><li><b>fsret</b></li><li><span style=\"background-color: rgb(255, 255, 0);\">wer ter</span></li></ul>', 'image/46XdsVfctJ1ft0QnEXWL.jpg', 2, 0, NULL, NULL),
(13, 'asd', '23', '<ul><li><span style=\"font-family: &quot;Josefin Sans&quot;, sans-serif; font-size: 18px; text-align: justify;\"><b>Best:&nbsp;</b>IT training center <a href=\"http://sdf\" target=\"_blank\">i have seen ever,</a> if you learn something basic to advance with proper guidelines then join with CIT. Good co-operation and have a sound environment. so i rate it Best IT training center i have seen ever, if you learn something basic to advance with proper guidelines then join</span><br></li></ul>', 'image/TflglTnRFlVBHSGkphwx.jpg', 2, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `slider_id` bigint(20) UNSIGNED NOT NULL,
  `slider_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_deteles` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`slider_id`, `slider_title`, `slider_photo`, `slider_deteles`, `slider_status`, `created_at`, `updated_at`) VALUES
(3, 'Seo  in website', 'image/s9I7wZCuQG2m0GGiB3io.png', 'web design and developerweb design and developerweb design and developerweb design and developerweb design and developerweb design and developerweb design and developerweb design and developerweb design and developerweb design and developerweb design and developer', 0, NULL, NULL),
(4, 'web design and developer', 'image/cxW8QRFlIimW6Srh8gOb.png', 'web design and developerweb design and developerweb design and developerweb design and developerweb design and developerweb design and developerweb design and developerweb design and developerweb design and developer', 0, NULL, NULL),
(5, 'markiteing in website', 'image/0Y44sGQnQY8T3G7Ua0Zc.png', 'markiteing in websitemarkiteing in websitemarkiteing in websitemarkiteing in websitemarkiteing in websitemarkiteing in websitemarkiteing in websitemarkiteing in websitemarkiteing in websitemarkiteing in websitemarkiteing in websitemarkiteing in websitemarkiteing in websitemarkiteing in websitemarkiteing in websitemarkiteing in websitemarkiteing in websitemarkiteing in websitemarkiteing in websitemarkiteing in websitemarkiteing in websitemarkiteing in websitemarkiteing in websitemarkiteing in website', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `student_id` bigint(20) UNSIGNED NOT NULL,
  `student_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_coureses` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_base` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `student_type` int(11) NOT NULL DEFAULT '0',
  `student_status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`student_id`, `student_name`, `student_phone`, `student_email`, `student_photo`, `student_coureses`, `student_base`, `student_type`, `student_status`, `created_at`, `updated_at`) VALUES
(6, 'gm parvez', '1861559750', '1861559750', 'image/BwcBN9ws85xi86mLllT1.jpg', 'Laravel Developer', '10.02.2019-10.05.2019(6am-8am)', 1, 1, '2019-03-24 17:07:34', NULL),
(7, 'gm parvez', '1861559750', '1861559750', 'image/JreVBPPH395HSGHmfohK.jpg', 'web site seo', '10.02.2019-10.05.2019(6am-8am)', 1, 1, '2019-03-24 17:07:47', NULL),
(8, 'gm parvez', '1861559750', '1861559750', 'image/6ICstIGAwtNfRs58niDV.png', 'PHP  developer', '10.02.2019-10.05.2019(6am-8am)', 1, 1, '2019-03-24 17:08:01', NULL),
(9, 'gm parvez', '1861559750', '1861559750', 'image/rC39R1xG9QWJdFh2butd.jpg', '2', '0', 0, 0, '2019-04-15 10:07:56', NULL),
(10, 'gm parvez', '1861559750', '1861559750', 'image/HdGGYsZiYSkTT68X2Sha.jpg', '5', '0', 0, 0, '2019-04-15 10:39:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `titleandtags`
--

CREATE TABLE `titleandtags` (
  `title_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deteles` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `titleandtags`
--

INSERT INTO `titleandtags` (`title_id`, `title`, `tags`, `deteles`, `created_at`, `updated_at`) VALUES
(1, 'MIT FARM', 'MIT FARMMIT FARMMIT FARMMIT FARMMIT FARMMIT FARMMIT FARMMIT FARMMIT FARMMIT FARMMIT FARMMIT FARMMIT FARMMIT FARMMIT FARMMIT FARMMIT FARMMIT FARMMIT FARMMIT FARMMIT FARMMIT FARMMIT FARMMIT FARMMIT FARMMIT FARMMIT FARMMIT FARMMIT FARMMIT FARMMIT FARMMIT FARMMIT FARMMIT FARMMIT FARMMIT FARMMIT FARMMIT FARMMIT FARMMIT FARMMIT FARMMIT FARMMIT FARMMIT FARMMIT FARMMIT FARMMIT FARMMIT FARMMIT FARMMIT FARMMIT FARM', 'Best IT training center i have seen ever, if you learn something basic to advance with proper guidelines then join with CIT. Good co-operation and have a sound environment. so i rate it Best IT training center i have seen ever, if you learn something basic to advance with proper guidelines then join with CIT. Good co-operation and have a sound environment. so i rate itBest IT training center i have seen ever, if you learn something basic to advance with proper guidelines then join with CIT. Good co-operation and have a sound environment. so i rate it Best IT training center i have seen ever, if you learn something basic to advance with proper guidelines then join with CIT. Good co-operation and have a sound environment. so i rate itBest IT training center i have seen ever, if you learn something basic to advance with proper guidelines then join with CIT. Good co-operation and have a sound environment. so i rate it Best IT training center i have seen ever, if you learn something basic to advance with proper guidelines then join with CIT. Good co-operation and have a sound environment. so i rate it', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `uds`
--

CREATE TABLE `uds` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uds`
--

INSERT INTO `uds` (`id`, `name`, `price`, `date`) VALUES
(1, 'e-commers templates in laravel', '99', '2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogins`
--
ALTER TABLE `adminlogins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bases`
--
ALTER TABLE `bases`
  ADD PRIMARY KEY (`base_id`);

--
-- Indexes for table `massages`
--
ALTER TABLE `massages`
  ADD PRIMARY KEY (`massage_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `titleandtags`
--
ALTER TABLE `titleandtags`
  ADD PRIMARY KEY (`title_id`);

--
-- Indexes for table `uds`
--
ALTER TABLE `uds`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogins`
--
ALTER TABLE `adminlogins`
  MODIFY `admin_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bases`
--
ALTER TABLE `bases`
  MODIFY `base_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `massages`
--
ALTER TABLE `massages`
  MODIFY `massage_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `slider_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `student_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `titleandtags`
--
ALTER TABLE `titleandtags`
  MODIFY `title_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `uds`
--
ALTER TABLE `uds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
