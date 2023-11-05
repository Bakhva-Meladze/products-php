-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2020 at 06:09 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php.product`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `SKU` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `type_id` int(255) DEFAULT NULL,
  `extension` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `SKU`, `price`, `type_id`, `extension`) VALUES
(190, 'Woodland mansion', '10wer01', 90, 2, '20MB'),
(191, 'Dungeon', '11o097', 3, 2, '15MB'),
(192, 'Bastion remnant', '12owek', 29, 2, '5.6MB'),
(193, 'GTA', '13ekwjr10', 10, 2, '5MB'),
(194, 'Pink Floyd', '14qorke01', 100, 2, '20MB'),
(195, 'Game of throne', '15ekwqj03', 100, 1, '4kg'),
(196, ' The lord of the ring', '16erkos04', 190, 1, '5kg'),
(198, 'The Silmarillion', '18krw003', 45, 2, '3MB'),
(199, 'A Hero Born', '18', 50, 1, '2kg'),
(200, 'The hobbit', '19ekwjei001', 29, 1, '3kg'),
(201, 'table', '20ekwiorl', 29, 5, '10X15X15'),
(202, 'Chair', '21tirkwe0023', 90, 5, '10X15X10'),
(203, 'Ward-Robe', '23ekwieo001', 40, 5, '20X10X15'),
(205, 'Table', '2434dwker', 29, 5, '10X10X10'),
(206, ' Book-Case', '25wqwe002', 20, 5, '10X10X10');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `extension` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `name`, `extension`) VALUES
(1, 'BOOK', 'kg'),
(2, 'dvd', 'mb'),
(5, 'chair', 'x');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=207;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=451;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
