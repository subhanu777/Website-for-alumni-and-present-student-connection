-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2019 at 10:16 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni_signup`
--

CREATE TABLE `alumni_signup` (
  `name` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `year` int(5) NOT NULL,
  `last_course` varchar(50) COLLATE utf16_unicode_ci NOT NULL,
  `job_ex` int(3) NOT NULL,
  `com1` varchar(40) COLLATE utf16_unicode_ci NOT NULL,
  `com2` varchar(40) COLLATE utf16_unicode_ci NOT NULL,
  `com3` varchar(40) COLLATE utf16_unicode_ci NOT NULL,
  `com4` varchar(40) COLLATE utf16_unicode_ci NOT NULL,
  `com5` varchar(40) COLLATE utf16_unicode_ci NOT NULL,
  `job1` varchar(40) COLLATE utf16_unicode_ci NOT NULL,
  `job2` varchar(40) COLLATE utf16_unicode_ci NOT NULL,
  `job3` varchar(40) COLLATE utf16_unicode_ci NOT NULL,
  `job4` varchar(40) COLLATE utf16_unicode_ci NOT NULL,
  `job5` varchar(40) COLLATE utf16_unicode_ci NOT NULL,
  `pic` longblob NOT NULL,
  `email` varchar(40) COLLATE utf16_unicode_ci NOT NULL,
  `pass` varchar(40) COLLATE utf16_unicode_ci NOT NULL,
  `message` varchar(200) COLLATE utf16_unicode_ci NOT NULL,
  `contact` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni_signup`
--
ALTER TABLE `alumni_signup`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
