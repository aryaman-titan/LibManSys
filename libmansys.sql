-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 16, 2020 at 03:17 PM
-- Server version: 8.0.19-0ubuntu0.19.10.3
-- PHP Version: 7.3.11-0ubuntu0.19.10.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `libmansys`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_list`
--

CREATE TABLE `book_list` (
  `id` int NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `book_count_left` int NOT NULL,
  `book_count_issued` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `book_list`
--

INSERT INTO `book_list` (`id`, `book_name`, `book_count_left`, `book_count_issued`) VALUES
(1, 'Cengel', 45, 0);

-- --------------------------------------------------------

--
-- Table structure for table `userData`
--

CREATE TABLE `userData` (
  `userID` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `enrl` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `userData`
--

INSERT INTO `userData` (`userID`, `username`, `name`, `enrl`, `email`, `password`) VALUES
(1, 'atusaj', 'ekaljefn', 'lnekfj', 'aryamn@fefef.com', 'wefknjf'),
(2, 'atusaj', 'ekaljefn', 'lnekfj', 'aryamn@fefef.com', 'wefknjf'),
(3, 'tyujghj', 'cfvghbjnk', 'tcfvghbjnk', 'atsygvhajk@fnkj.com', '2354rtyu'),
(4, 'titan', 'Titan', '19112020', 'aryamanbehera@gmail.co.in', '123'),
(5, 'gaurav', 'Gaurav genani', '19112038', 'gauarav@gmail.con', '1234'),
(6, '123re', 'wdlek', 'elmef', 'aryaman@gmail.we.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_list`
--
ALTER TABLE `book_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userData`
--
ALTER TABLE `userData`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_list`
--
ALTER TABLE `book_list`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userData`
--
ALTER TABLE `userData`
  MODIFY `userID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
