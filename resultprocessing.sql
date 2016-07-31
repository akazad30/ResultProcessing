-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2016 at 12:38 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `resultprocessing`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_07_27_192532_Subject', 1),
('2016_07_27_192555_create_subjects_table', 1),
('2016_07_27_193605_StudentRegistration', 2),
('2016_07_27_193621_create_student_registraions_table', 2),
('2016_07_27_215946_create_stu_registrations_table', 3),
('2016_07_28_100040_StudentReg', 4),
('2016_07_28_100114_create_student_regs_table', 5),
('2016_07_28_210052_resultMarking', 6),
('2016_07_28_210113_create_resultmarkings_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resultmarkings`
--

CREATE TABLE IF NOT EXISTS `resultmarkings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `session` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fullName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `test1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `test2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `test3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `exam` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `resultmarkings`
--

INSERT INTO `resultmarkings` (`id`, `class`, `subject`, `session`, `fullName`, `test1`, `test2`, `test3`, `exam`, `created_at`, `updated_at`) VALUES
(1, 'Seven', 'Bangla Frist Paper ', '2006', 'AbulKalam Azad', '10', '15', '20', '70', '2016-07-28 15:39:56', '2016-07-28 15:39:56'),
(2, 'Seven', ' Bangla Second Paper ', '2006', 'AbulKalam Azad', '5', '8', '29', '50', '2016-07-28 15:44:19', '2016-07-28 15:44:19'),
(3, 'Ten', ' Physics ', '2007', 'Bond', '12', '12', '12', '50', '2016-07-28 15:45:14', '2016-07-28 15:45:14'),
(4, 'Seven', ' Islamic History ', '2007', 'AbulKalam Azad', '5', '10', '15', '70', '2016-07-28 15:47:00', '2016-07-28 15:47:00'),
(5, 'Ten', ' Islamic History ', '2006', 'Bond', '10', '8', '20', '39', '2016-07-29 14:32:39', '2016-07-29 14:32:39');

-- --------------------------------------------------------

--
-- Table structure for table `student_regs`
--

CREATE TABLE IF NOT EXISTS `student_regs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `surName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fullName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `session` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `student_regs`
--

INSERT INTO `student_regs` (`id`, `surName`, `fullName`, `email`, `class`, `session`, `created_at`, `updated_at`) VALUES
(1, 'Azad', 'AbulKalam Azad', 'abulkalamcse30@gmail.com', 'Seven', '2017', '2016-07-28 05:01:21', '2016-07-28 05:01:21'),
(2, 'Azad', 'AbulKalam Azad', 'abulkalamcse30@gmail.com', 'Seven', '2017', '2016-07-28 05:12:53', '2016-07-28 05:12:53'),
(3, 'james', 'Bond', 'proceed@gmail.com', 'Ten', '2010', '2016-07-28 14:04:41', '2016-07-28 14:04:41');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `subjectName` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subjectName`, `class`, `created_at`, `updated_at`) VALUES
(1, 'Bangla Frist Paper ', 'Six', '2016-07-27 15:16:59', '2016-07-27 15:16:59'),
(2, ' Bangla Second Paper ', 'Six', '2016-07-27 15:18:36', '2016-07-27 15:18:36'),
(3, ' Bangla Second Paper ', 'Eight', '2016-07-27 15:18:46', '2016-07-27 15:18:46'),
(4, ' Mathmatics ', 'Nine', '2016-07-27 15:18:54', '2016-07-27 15:18:54'),
(5, ' English First Paper ', 'Seven', '2016-07-27 16:52:47', '2016-07-27 16:52:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
