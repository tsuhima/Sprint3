-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2022 at 02:17 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(254) NOT NULL,
  `name` varchar(254) NOT NULL,
  `url` longtext NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `url`, `status`) VALUES
(1, 'General', 'https://newsapi.org/v2/top-headlines?category=general&apiKey=7cccdad1e5184db5add52500a1ff17a4', 1),
(2, 'Business', 'https://newsapi.org/v2/top-headlines?category=business&apiKey=7cccdad1e5184db5add52500a1ff17a4', 1),
(3, 'Enterainment', 'https://newsapi.org/v2/top-headlines?category=enterainment&apiKey=7cccdad1e5184db5add52500a1ff17a4', 1),
(4, 'Health', 'https://newsapi.org/v2/top-headlines?category=health&apiKey=7cccdad1e5184db5add52500a1ff17a4', 1),
(5, 'Science', 'https://newsapi.org/v2/top-headlines?category=science&apiKey=7cccdad1e5184db5add52500a1ff17a4', 1),
(6, 'Sports', 'https://newsapi.org/v2/top-headlines?category=sports&apiKey=7cccdad1e5184db5add52500a1ff17a4', 1),
(7, 'Technology', 'https://newsapi.org/v2/top-headlines?category=technology&apiKey=7cccdad1e5184db5add52500a1ff17a4', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
