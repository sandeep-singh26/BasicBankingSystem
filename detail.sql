-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2021 at 08:53 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `detail`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `credits` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`sender`, `receiver`, `credits`) VALUES
('Malti Singh', 'Anuradha Malhotra', 700),
('Yashashvi Verma', 'Malti Singh', 5876),
('Manan Yadav', 'Shilpa Aggarwal', 2543),
('Tanya Singh', 'Sahar Gautam', 872),
('Malti Singh', 'Manan Yadav', 2455),
('Shilpa Aggarwal', 'Tanya Singh', 3000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `credits` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `credits`) VALUES
(1, 'Malti Singh', 'maltisingh@gmail.com', 5021),
(2, 'Manan Yadav', 'manan123@gmail.com', 3992),
(3, 'Anuradha Malhotra', 'anu.m12@gmail.com', 3900),
(4, 'Yashashvi Verma', 'Yashimain@gmail.com', 3133),
(5, 'Dhruv Sharma', 'sharmad@gmail.com', 6759),
(6, 'Rahul Yadav', 'merahu@gmail.com', 3400),
(7, 'Tanya Singh', 'tanyasingh7@gmail.com', 12000),
(8, 'Sahar Gautam', 'sahar.gautam@gmail.com', 3270),
(9, 'Shilpa Aggarwal', 'agshilpa43@gmail.com', 7497),
(10, 'Anup Jain', 'jain.anup000@gmail.com', 8000);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
