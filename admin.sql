-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2018 at 09:06 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `carlist`
--

CREATE TABLE `carlist` (
  `id` int(11) NOT NULL,
  `carphoto` varchar(500) NOT NULL,
  `cardetails` varchar(500) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `carlist`
--

INSERT INTO `carlist` (`id`, `carphoto`, `cardetails`, `price`) VALUES
(2, 'https://i.ytimg.com/vi/LrNlHaZy6Og/maxresdefault.jpg', 'Carname:LandRover\r\nCondition:Good\r\nFuel:Octane', 400000),
(3, 'https://img.autobytel.com/car-reviews/autobytel/11694-good-looking-sports-cars/2016-Ford-Mustang-GT-burnout-red-tire-smoke.jpg', 'Carname:Mustang-GT\r\nCondition:Extreme\r\nFuel:Octen', 375000);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dealers`
--

CREATE TABLE `dealers` (
  `id` int(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `body` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rentcar`
--

CREATE TABLE `rentcar` (
  `id` int(50) NOT NULL,
  `pick` varchar(100) NOT NULL,
  `drop` varchar(100) NOT NULL,
  `time` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rentcar`
--

INSERT INTO `rentcar` (`id`, `pick`, `drop`, `time`) VALUES
(8, 'Dhanmondi', 'Banani', '10:00AM 31-03-2018'),
(9, 'Mirpur10', 'Motijheel', '1.00PM 31-03-2018'),
(10, 'Dhaka', 'Ashulia', '3.00PM 30-03-2018');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `avatar`) VALUES
(2, 'joy', 'joy1@gmail.com', '$2y$10$4HyOt2qLRwUB10.Ht7l/leqmPMXfT7CVKBnSh3DVbEb3kgLY4C9c.', 'sGbmCkIte0mSYDgENoxM5SlnOPhmmLsEqqnCTZjh836BtaMlPhYnPUvsFNW3', '2018-03-25 14:25:25', '2018-03-25 14:25:25', NULL),
(3, 'samir', 'samir44@gmail.com', '$2y$10$uZVV5H/8VwoH4ASpXQpaL.fyO2Dp1LNG2WFGo9yDOO2wJW1HQxFC2', '0iJvxbp1KeLlcH6P93BHjhQpT6OTLQcvuybo8iAsaxCr0FA1cSvQ2e6wxtQM', '2018-03-25 14:26:35', '2018-03-25 14:26:35', NULL),
(4, 'Shamir Chandra Dey', 'Shamirdey95@gmail.com', '$2y$10$8.6j6..x7gKBL/rU19kRK.C/Ay6OLrfDeGfveoQ8EgLzJgm.2wQZS', 'CK47rSB7TX3wOPa1beZI06uclNURmpj2htkKLC3gPPAiwaHtPw7t2RGD3lMJ', '2018-03-25 17:17:41', '2018-03-25 17:17:41', NULL),
(5, 'piyas', 'piyas11@gmail.com', '$2y$10$hfDPncpE1HE0ZLOpbOAeOu7OsTllXbnVctp6V3bevMhBqs2nhVEfu', '3vB2XPFK5td9ilzjpiRymqZc7OBwdQDl7Xxrjfu7pCpgNYQUFa8gFM5ggwtI', '2018-03-26 09:39:42', '2018-03-26 09:39:42', NULL),
(6, 'Shamir Chandra Dey', 'Samir95@gmail.com', '$2y$10$m687SQx2nncFUBOhzITe1.KmcJU69gvJPYmm2pJFGYnGgzU.5AqRa', 'ip35IefwVDsm3Ipriexlnkk9TCY5c0mxIWKdpXVYpGBE3O8otoWT7y2ISkkM', '2018-03-26 15:39:15', '2018-03-26 15:39:15', NULL),
(7, 'shamir', 'samir11@gmail.com', '$2y$10$97q/T6ifBg7MuDxxOOAyMOlD2sJfjnXFE9FF8PgkEkUoGLneJBE4K', 'lb32P3VVen0tXPUSUgbcbgMuofA4MsD9JEZUf5BKsJco6nW4rIyEXunekZl9', '2018-03-28 04:49:18', '2018-03-28 04:49:18', NULL),
(8, 'abir', 'abir222@gmail.com', '$2y$10$QKx5NokZgnZ/tP7XScE.FuRfR9GvCYcigG1p.Y7bWIJ.HbfXpX23q', 'G18xnNePMpLThwdiXbvEtboMUXXebhl0dug8O9Kz1qVVE4vkQ8aHy9XBFR9O', '2018-03-28 05:22:07', '2018-03-28 05:22:07', NULL),
(9, 'Shamir Chandra Dey', 'Shamir111@gmail.com', '$2y$10$yBgM8EciO8GZoYmtfi0wpe8MuQlxTjmnm0bDcWkzPGI.j3tV2DtTW', 'ybBxu6JyABivyAXjG0vAuw7lqUaRAzKaJNkhRpjAIa4S7xXQEv5WOcP4FDcB', '2018-03-28 05:24:54', '2018-03-28 05:24:54', 'http://127.0.0.1:8000/1.jpg'),
(10, 'Shamir Chandra Dey', 'shamir33@gmail.com', '$2y$10$3Vz04eTY2oleCqD2p/z7L.gGmnE/bj4FE6mhgWXDtlPlDUqgQr1I.', NULL, '2018-03-28 13:10:31', '2018-03-28 13:10:31', NULL),
(11, 'Ali', 'Ali123@gmail.com', '$2y$10$jvpS4Bb/JOx6JWGLbQywBOTgcRdPAvGFEWqwhN52NNl/NZ.qkyc/m', 'GuB4IqaRiNfW5EFIvsqmApk17mjI6ozASo4Tl2WBEVxQEjpJF8TMp73Zp7Lh', '2018-04-01 16:33:58', '2018-04-01 16:33:58', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carlist`
--
ALTER TABLE `carlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dealers`
--
ALTER TABLE `dealers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rentcar`
--
ALTER TABLE `rentcar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carlist`
--
ALTER TABLE `carlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dealers`
--
ALTER TABLE `dealers`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rentcar`
--
ALTER TABLE `rentcar`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
