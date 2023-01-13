-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2021 at 03:43 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinelibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_a` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `AdminEmail` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `RegisterationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_a`, `FirstName`, `LastName`, `AdminEmail`, `Password`, `RegisterationDate`) VALUES
(4, 'admin', 'admin', 'admin@admin.com', 'admin', '2021-06-10 16:35:08'),
(5, 'امير', 'صالح', 'ameer@admin.com', 'ameer', '2021-06-12 09:20:05'),
(8, 'اكرم', 'محمد', 'akram@admin.com', 'akram', '2021-06-12 09:38:52'),
(9, 'احمد', 'ستار', 'ahmed@admin.com', 'ahmed', '2021-06-12 18:11:32');

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id_au` int(11) NOT NULL,
  `AuthorName` varchar(255) NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id_au`, `AuthorName`, `CreationDate`, `UpdationDate`) VALUES
(60, 'امير', '2021-06-14 22:53:23', '2021-06-14 22:53:23'),
(61, 'احمد', '2021-06-14 22:53:28', '2021-06-14 22:53:28'),
(62, 'اكرم', '2021-06-14 22:53:32', '2021-06-14 22:53:32');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id_b` int(11) NOT NULL,
  `BookName` varchar(255) NOT NULL,
  `CategoryId` int(11) NOT NULL,
  `AuthorId` int(11) NOT NULL,
  `ISBNNumber` int(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `RegisterationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id_b`, `BookName`, `CategoryId`, `AuthorId`, `ISBNNumber`, `quantity`, `RegisterationDate`, `UpdationDate`) VALUES
(17, 'PHP', 2, 60, 64378, 23, '2021-06-14 22:55:04', '2021-06-14 22:55:04'),
(18, 'python', 2, 60, 4643643, 22, '2021-06-14 22:55:21', '2021-06-14 22:55:21'),
(20, 'structure', 7, 60, 784, 20, '2021-06-14 22:56:38', '2021-06-14 22:56:38'),
(26, 'network', 7, 62, 45564747, 14, '2021-07-03 20:30:20', '2021-07-03 20:30:20'),
(27, 'database', 7, 60, 86786, 13, '2021-07-03 20:30:37', '2021-07-03 20:30:37'),
(28, 'online library', 8, 60, 2147483647, 8, '2021-07-07 16:46:23', '2021-07-07 16:46:23'),
(30, 'oop', 2, 60, 56, 2, '2021-07-09 19:37:32', '2021-07-09 19:37:32');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id_c` int(11) NOT NULL,
  `CtegoryName` varchar(255) NOT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_c`, `CtegoryName`, `CreationDate`, `UpdationDate`) VALUES
(2, 'مصدر خارجي', '2021-06-11 19:31:00', '2021-06-11 19:31:00'),
(7, 'منهجي', '2021-06-12 10:11:50', '2021-06-12 10:11:50'),
(8, 'مشاريع', '2021-06-14 12:59:05', '2021-06-14 12:59:05');

-- --------------------------------------------------------

--
-- Table structure for table `issuedbook`
--

CREATE TABLE `issuedbook` (
  `id_i` int(11) NOT NULL,
  `StudentId` int(11) NOT NULL,
  `BookId` int(11) NOT NULL,
  `IssuedDate` timestamp NULL DEFAULT current_timestamp(),
  `ReturnDate` timestamp NULL DEFAULT NULL,
  `ReturnStatus` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id_s` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `PhoneNumber` int(11) NOT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `RgisterationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id_s`, `FirstName`, `LastName`, `Email`, `PhoneNumber`, `Password`, `RgisterationDate`, `UpdationDate`) VALUES
(9, 'احمد', 'ستار', 'ahmed@gmail.com', 2147483647, 'ahmed', '2021-06-10 20:00:52', '2021-06-10 20:00:52'),
(10, 'اكرم', 'محمد', 'akram@gmail.com', 780347834, 'akram', '2021-06-10 21:25:47', '2021-06-10 21:25:47'),
(11, 'امير', 'صالح', 'ameer@gmail.com', 2147483647, 'ameer', '2021-06-11 12:57:32', '2021-06-11 12:57:32'),
(15, 'زهراء', 'نجم', 'zahraa@gmail.com', 45666234, 'zahraa', '2021-07-05 13:31:16', '2021-07-05 13:31:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_a`),
  ADD UNIQUE KEY `AdminEmail` (`AdminEmail`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id_au`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id_b`),
  ADD UNIQUE KEY `ISBNNumber` (`ISBNNumber`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id_c`),
  ADD UNIQUE KEY `CtegoryName` (`CtegoryName`);

--
-- Indexes for table `issuedbook`
--
ALTER TABLE `issuedbook`
  ADD PRIMARY KEY (`id_i`),
  ADD KEY `BookId` (`BookId`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id_s`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_a` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id_au` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id_b` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id_c` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `issuedbook`
--
ALTER TABLE `issuedbook`
  MODIFY `id_i` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id_s` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `issuedbook`
--
ALTER TABLE `issuedbook`
  ADD CONSTRAINT `issuedbook_ibfk_1` FOREIGN KEY (`BookId`) REFERENCES `book` (`id_b`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
