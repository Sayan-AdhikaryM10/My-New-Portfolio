-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2025 at 12:22 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(10) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `name`, `email`, `number`, `message`) VALUES
(1, 'Sayan Adhikary', 'sayanadhikary831@gmail.com', '9330842161', 'I have jod to do'),
(2, 'Ram', 'ram@gmail.com', '9477851002', 'hi, Are you full stack developer'),
(3, 'Sayan Adhikary', 'sayanadhikary831@gmail.com', '0933084216', 'hi'),
(4, 'Sayan Adhikary', 'sayanadhikary831@gmail.com', '0933084216', 'hello'),
(5, 'Sayan Adhikary', 'sayanadhikary831@gmail.com', '0933084216', 'hello'),
(6, 'Sayan Adhikary', 'sayanadhikary831@gmail.com', '0933084216', 'hello'),
(7, 'Sayan Adhikary', 'sayanadhikary831@gmail.com', '0933084216', 'hello'),
(8, 'Sayan Adhikary', 'sayanadhikary831@gmail.com', '0933084216', 'hello'),
(9, 'Sayan Adhikary', 'sayanadhikary831@gmail.com', '0933084216', 'hello'),
(10, 'Sayan Adhikary', 'sayanadhikary831@gmail.com', '0933084216', 'hello'),
(11, 'Sayan Adhikary', 'sayanadhikary831@gmail.com', '0933084216', 'hello'),
(12, 'Sayan Adhikary', 'sayanadhikary831@gmail.com', '0933084216', 'how may I help you'),
(13, 'Sayan Adhikary', 'sayanadhikary831@gmail.com', '9330842161', 'hi have a work of project');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
