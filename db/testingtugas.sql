-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 21, 2024 at 03:12 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testingtugas`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(9, 'e41231073', 'oke@gmail.com', '$2y$10$sJ.rhkNIwaSjGqBc./7eNuebgaRhKzcsHpAhE4u4ntontdAsJ2S66'),
(10, 'saka_bramasta27', 'sakates@gmail.com', '$2y$10$ggJIIDi2WkelCSk7ly0B2.yREJKw47NkCfu5K0rgbPRV3WrYmdMma'),
(11, 'tes', 'tes@gmail.com', '$2y$10$FmFP5KM/lmqiP.6I9JpKQ.cZyKpJtNv.jQFWCXJqkM7P5BWrHq0rC'),
(12, 'testing', 'testing@gmail.com', 'testing'),
(13, 'okee', 'oke@gmail.com', '$2y$10$/miTFrt5l5wamvevsCfu/euFu5kWuXmwQ73.wrw6fQxSdXqfH5lA6'),
(14, 'oke', 'oke@gmail.com', 'ea9a127e234b61c6385c71dfef1fc75e'),
(15, 'huh', 'huh@g.c', '$2y$10$6dH2HYdL8dew5SlljzXaVuzDWH59xYYk7xtejPv6NZRsMMaHdJ0w6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
