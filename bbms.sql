-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2023 at 02:49 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `uname` varchar(100) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `uname`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `donor_registration`
--

CREATE TABLE `donor_registration` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `age` varchar(40) DEFAULT NULL,
  `bgroup` varchar(10) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mno` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `donor_registration`
--

INSERT INTO `donor_registration` (`id`, `name`, `fname`, `address`, `city`, `age`, `bgroup`, `email`, `mno`) VALUES
(13, 'Saroj Budhathoki', 'gorakh bdr Budhathoki', 'Indrayani', 'kathmandu', '20', 'O+', 'sarojbudathoki8@gmail.com', '9863426464'),
(16, 'pratik bhandari', 'Ram', 'suntakhan', 'kathmandu', '22', 'AB-', 'pratikbahndari@gamil.com', '9844237964');

-- --------------------------------------------------------

--
-- Table structure for table `exchange_b`
--

CREATE TABLE `exchange_b` (
  `id` int(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(40) NOT NULL,
  `age` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mno` varchar(10) NOT NULL,
  `bgroup` varchar(20) NOT NULL,
  `ebgroup` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `exchange_b`
--

INSERT INTO `exchange_b` (`id`, `name`, `fname`, `address`, `city`, `age`, `email`, `mno`, `bgroup`, `ebgroup`) VALUES
(1, 'Imroj Shrestha', 'ramesh', 'makalbari', 'Dolakha', '20', 'ramkc1@gmail.com', '9863426464', 'AB+', 'O+'),
(2, 'Imroj Shrestha', 'ramesh', 'chabhil', 'kathmandu', '22', 'ramkc1@gmail.com', '9844237964', 'AB+', 'O+');

-- --------------------------------------------------------

--
-- Table structure for table `out_stoke_b`
--

CREATE TABLE `out_stoke_b` (
  `id` int(11) NOT NULL,
  `bname` int(11) DEFAULT NULL,
  `name` int(11) DEFAULT NULL,
  `mno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `out_stoke_b`
--

INSERT INTO `out_stoke_b` (`id`, `bname`, `name`, `mno`) VALUES
(13, 0, 0, 2147483647),
(14, 0, 0, 2147483647),
(15, NULL, NULL, NULL),
(16, 0, 0, 2147483647),
(17, 0, 0, 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donor_registration`
--
ALTER TABLE `donor_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exchange_b`
--
ALTER TABLE `exchange_b`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `out_stoke_b`
--
ALTER TABLE `out_stoke_b`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `donor_registration`
--
ALTER TABLE `donor_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `exchange_b`
--
ALTER TABLE `exchange_b`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `out_stoke_b`
--
ALTER TABLE `out_stoke_b`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
