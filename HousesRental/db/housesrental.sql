-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2022 at 12:25 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `housesrental`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(30) NOT NULL,
  `category_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`) VALUES
(8, 'منزل طابق واحد'),
(9, 'منزل طابقين'),
(11, 'شقة سكنية '),
(12, 'محل تجاري'),
(13, 'فيلا سياحية'),
(14, 'مطعم'),
(15, 'مشتمل');

-- --------------------------------------------------------

--
-- Table structure for table `request_houses`
--

CREATE TABLE `request_houses` (
  `id_r` int(11) NOT NULL,
  `name_house` varchar(255) CHARACTER SET utf8 NOT NULL,
  `category_id` int(55) NOT NULL,
  `area` varchar(255) NOT NULL,
  `room_no` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `price` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request_houses`
--

INSERT INTO `request_houses` (`id_r`, `name_house`, `category_id`, `area`, `room_no`, `status`, `price`, `email`, `phone`, `description`) VALUES
(27, 'ديالى', 8, '300', 2, 'ايجار', '450000', 'aaffa@gmail.com', '07827463782', 'منزل طابق واحد المكان ديالى '),
(28, 'كربلاء', 9, '400', 4, 'بيع', '4000000', 'amamam@gmail.com', '0771293838', 'بيت طابقين في كربلاء المقدسة المساحة 400 متر السعر 400000 مليون وبي مجال بسيط 399'),
(29, 'بغداد', 12, '60', 1, 'ايجار', '300000', 'jfmf@gmail.com', '0772968933', 'مطلوب محل البسة نسائية '),
(30, 'البصرة', 15, '100', 1, 'ايجار', '200000', 'ameer@gmail.com', '08866322', 'مطلوب مشتمل ايجار بسعر 200000  الف');

-- --------------------------------------------------------

--
-- Table structure for table `show_houses`
--

CREATE TABLE `show_houses` (
  `id_s` int(30) NOT NULL,
  `name_house` varchar(50) NOT NULL,
  `category_id` int(30) NOT NULL,
  `area` varchar(50) NOT NULL,
  `room_no` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `price` varchar(55) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `img` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `show_houses`
--

INSERT INTO `show_houses` (`id_s`, `name_house`, `category_id`, `area`, `room_no`, `status`, `price`, `email`, `phone`, `description`, `img`) VALUES
(38, 'بغداد', 9, '600', 7, 'بيع', '8000000', 'jory@gmail.com', '07801234567', 'بيت طابقين في بغداد مساحته 600 متر يحتوي 7 غرف السعر قابل للتفاوض يمكنك التواصل على الايميل او رقم الهاتف', 0x332e6a666966),
(39, 'كربلاء', 9, '400', 5, 'ايجار', '450000', 'noor@gmail.com', '078012121212', 'بيت طابقين في كربلاء حي الحسين مساحته 400 متر يحتوي 5 غرف السعر قابل للتفاوض يمكنك التواصل على الايميل او رقم الهاتف', 0x31312e6a666966),
(40, 'اربيل', 11, '2000', 10, 'بيع', '1000000000', 'ghadeer@gmail.com', '07809004949', 'شقة سكنية في اربيل مساحته 2000 متر يحتوي 10 غرف السعر قابل للتفاوض يمكنك التواصل على الايميل او رقم الهاتف', 0x32322e6a666966),
(41, 'كربلاء', 14, '1200', 10, 'بيع', '1500000000', 'kentacky.house@gmail.com', '07089377384', 'مطعم كنتاكي هاوس في كربلاء للبيع مساحته 1200 متر يحتوي 10 غرف السعر قابل للتفاوض يمكنك التواصل على الايميل او رقم الهاتف', 0x33332e6a666966),
(43, 'البصرة', 12, '100', 1, 'ايجار', '500000', 'akie@gmail.com', '07804536789', 'محل تجاري للايجار في البصرة مساحته 100 متر السعر قابل للتفاوض يمكنك التواصل على الايميل او رقم الهاتف', 0x34342e6a666966);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_u` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_u`, `name`, `email`, `password`, `create_datetime`) VALUES
(5, 'jory', 'jory@gmail.com', 'jory', '2022-02-21 17:12:52'),
(6, 'noor', 'noor@gmail.com', 'noor', '2022-02-21 17:13:19'),
(7, 'ghadeer', 'ghadeer@gmail.com', 'ghadeer', '2022-02-21 17:13:59'),
(8, 'user', 'user@gmail.com', 'user', '2022-02-22 14:40:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_houses`
--
ALTER TABLE `request_houses`
  ADD PRIMARY KEY (`id_r`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `show_houses`
--
ALTER TABLE `show_houses`
  ADD PRIMARY KEY (`id_s`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_u`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `request_houses`
--
ALTER TABLE `request_houses`
  MODIFY `id_r` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `show_houses`
--
ALTER TABLE `show_houses`
  MODIFY `id_s` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_u` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `request_houses`
--
ALTER TABLE `request_houses`
  ADD CONSTRAINT `category_id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
